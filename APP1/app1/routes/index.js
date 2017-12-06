var express = require('express');
var bodyParser = require('body-parser');
const { check, validationResult } = require('express-validator/check');
const { matchedData, sanitize } = require('express-validator/filter');
const v = require('node-input-validator');
var flash = require('connect-flash');

var router = express.Router();
let util = require('util');

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { 
            title: 'Home',
            navitems: [
            {link: '/', content: 'Home'},
            {link: '/users', content: 'Users'},
            {link: '/form', content: 'Form'}            
        ] });
});

/* GET users page. */
router.get('/users', function(req, res, next) {
  res.render('users', { 
            title: 'Users',
            users: [{"Name":"Justin", "LastName":"Weber"}, {"Name":"John", "LastName":"Doe"}],
            navitems: [
            {link: '/', content: 'Home'},
            {link: '/users', content: 'Users'},
            {link: '/form', content: 'Form'}
        ] });
});

/* GET form page.*/ 
router.get('/form', function(req, res, next) {
  res.render('form', { 
            title: 'Form',
            nameInValid: req.flash('nameCheck'),
            emailInValid: req.flash('emailCheck'),
            test: [
              {message: req.flash('info')},
              {message: req.flash('info')}
            ],
            navitems: [
            {link: '/', content: 'Home'},
            {link: '/users', content: 'Users'},
            {link: '/form', content: 'Form', title: 'Form Validation', success: false, errors: req.session.errors}           
            ]
      });
      //res.send('show', { message: req.flash('info') });  
      
});

/* GET form page.*/ 
router.get('/successForm', function(req, res, next) {
  res.render('successForm', { 
            title: 'successForm',
            nameInValid: req.flash('nameCheck'),
            emailInValid: req.flash('emailCheck'),
            test: [
              {message: req.flash('info')},
              {message: req.flash('info')}
            ],
            navitems: [
            {link: '/', content: 'Home'},
            {link: '/users', content: 'Users'},
            {link: '/form', content: 'Form', title: 'Form Validation', success: false, errors: req.session.errors}           
            ]
      });
      //res.send('show', { message: req.flash('info') });  
      
});

// Handling POST from registerForm.
router.post('/submit', function(req, res, next) {

  const name = req.body.name;
  const email = req.body.email;
  const myFile = req.body.myFile;

  let r = {};   // first argument for constructor will always be blank object 
  let validator = new v(r, {name: req.body.name, email: req.body.email}, {name:'required', email:'required|email'});

  
  // Performing validation
  validator.check().then(function (matched) {

    //const name_error = JSON.stringify(validator.errors['name']['message']);
    //const email_error = JSON.stringify(validator.errors['email']['message']);
    
    if(JSON.stringify(matched) == 'false') {

      if(JSON.stringify(validator.errors['name'])){
        if(JSON.stringify((matched)) == 'true') {
          console.log('Success!!!!!');
          req.flash('nameCheck', ''); 
          req.flash('emailCheck', JSON.stringify(validator.errors['email']['message']));                   
          res.redirect('/form'); 
        }

        else {
          console.log('Invalid!!');       
          req.flash('nameCheck', JSON.stringify(validator.errors['name']['message'])); 
          req.flash('emailCheck', '');                   
          res.redirect('/form');      
        }   
      
      }

      if(JSON.stringify(validator.errors['email'])){
        if(JSON.stringify((matched)) == 'true') {
          console.log('Success!!!!!');
          req.flash('nameCheck', JSON.stringify(validator.errors['name']['message']));         
          req.flash('emailCheck', '');           
          res.redirect('/form');      
        }
        else {
          console.log('Invalid!!');       
          req.flash('nameCheck', '');         
          req.flash('emailCheck', JSON.stringify(validator.errors['email']['message']));           
          res.redirect('/form');      
        }    
      }
      
       

      
    } 
    if(JSON.stringify(matched) == 'true') {
      res.redirect('/successForm');
    }

    
  });

  

});

module.exports = router;

