var express = require('express');
var bodyParser = require('body-parser');
const { check, validationResult } = require('express-validator/check');
const { matchedData, sanitize } = require('express-validator/filter');
const v = require('node-input-validator');
var flash = require('connect-flash');
var router = express.Router();
let util = require('util');
var nodeWidget = require('node-widgets');


// For use without sequelize.
// User = require('../models/user.js');

// Requiring sequelize.
var Sequelize = require('sequelize');

// Creating an instance of sequelize for the users table.
const sequelize = new Sequelize('users', 'root', 'root', 
      { host: 'localhost', dialect: 'mysql', port: 6000 }
);

// Testing the mysql database connection.
sequelize
.authenticate()
.then(() => {
  console.log('Connection has been established successfully.');
})
.catch(err => {
  console.error('Unable to connect to the database:', err);
});

// Creating and defining a User model.
const User = sequelize.define('user', {

  firstName: {
        type: Sequelize.STRING
    },

    lastName: {
        type: Sequelize.STRING
    }
});


// force: true will drop the table if it already exists
/*
User.sync({force: true}).then(() => {
  // Table created
  return User.create({
    firstName: 'Justin',
    lastName: 'Weber'
  });
});
*/

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
router.get('/staticUsers', function(req, res, next) {
  getUsers = function() {
    var users = [{"name":"sdf", "lastname":"Asdf"}];
    return users;
  }
  res.render('users', { 
            title: 'Users',
            users: [{"Name":"Justin", "LastName":"Weber", "id":"1"}, {"Name":"John", "LastName":"Doe" , "id":"2"}],
            navitems: [
            {link: '/', content: 'Home'},
            {link: '/users', content: 'Users'},
            {link: '/form', content: 'Form'}
        ] });
});

/* GET users page. */
router.get('/users', function(req, res, next) {


  users = User.findAll().then(users => {

    res.render('users', { 
        title: 'Users',
        users: users,
        navitems: [
        {link: '/', content: 'Home'},
        {link: '/users', content: 'Users'},
        {link: '/form', content: 'Form'}
    ] });
    
  }) 

  // For use without sequelize
  /* var userObj = new User({}, req);

  userObj.getAll(function(users) {

    res.render('users', { 
        title: 'Users',
        users: users,
        navitems: [
        {link: '/', content: 'Home'},
        {link: '/users', content: 'Users'},
        {link: '/form', content: 'Form'}
    ] });

  })
  */


});

/* GET Add Users form. */
router.get('/add_user_Form', function(req, res, next) {
  
  var incomingJson = {
    "form": "myAddForm",
    "action": "/validate_User_Add_Form",
    "method": "post",
    "fields": {
      "firstName": {
        "label" : "First Name",
        "type": "text",
        "class": "form-control",
        "required": true,
        "minlen" : 1,
        "maxlen" : 20,
        "msg": "First Name is required"
      },
      "lastName": {
        "label" : "Last Name",
        "type": "text",
        "class": "form-control",
        "required": true,
        "minlen" : 1,
        "maxlen" : 20,
        "msg": "Last Name is required"
      },
      "button": {
        "type": "submit",
        "class": "btn btn-primary",
        "value" : "Add User"
      }
    }
  }

  // Create the HTML form using json object
  nodeWidget.toHTML(incomingJson, function(err, form){
    if(err) { throw err; }
    
    // form - is the template rendered HTML elements
    res.send(form);
    return next();
  });
});

/* POST Validate users route.*/ 
router.post('/validate_User_Add_Form', function(req, res, next) {
  var incomingData = req.body;
  
    nodeWidget.validate(incomingData, function(err, valid, form){
      //console.log("your form is valid ? " + valid);
      
      if(err) { throw err }
      console.log("your form is valid ? " + valid + JSON.stringify(incomingData));
      if (valid == false) {
        res.send(form);
      } else {
        User.create({
          firstName: incomingData.firstName,
          lastName: incomingData.lastName
        });
        res.redirect('/users');
      }
      
      return next();
      
    });
    
});

/* POST Delete User.*/ 
router.post('/delete_user_Form', function(req, res, next) {
  var incomingData = req.body.idField;

  console.log(incomingData);
  
  User.destroy({
    where: {
      id: incomingData
    }
  }).then(function() {
    res.redirect('/users');
  })

});

/* GET Edit User form.*/ 
router.post('/edit_user_Form', function(req, res, next) {
  var formData = req.body.userEdit;

  var current = User.findAll(
    {
      where: {
        id: formData,
      }
    }).then(function(foundUser){
      
      var incomingJson = {
        "form": "myEditForm",
        "action": "/validate_User_Edit_Form",
        "method": "post",
        "fields": {
          "id": {
            "type": "hidden",
            "value": formData
          },
          "firstName": {
            "label" : "First Name",
            "type": "text",
            "class": "form-control",
            "value": foundUser[0].firstName,                    
            "required": true,
            "minlen" : 1,
            "maxlen" : 20,
            "msg": "First Name is required"
          },
          "lastName": {
            "label" : "Last Name",
            "type": "text",
            "class": "form-control",
            "value": foundUser[0].lastName,        
            "required": true,
            "minlen" : 1,
            "maxlen" : 20,
            "msg": "Last Name is required"
          },
          "button": {
            "type": "button",
            "class": "btn btn-primary",
            "value" : "Save Changes"
          }
        }
      }
    
      // Create the HTML form using json object
      nodeWidget.toHTML(incomingJson, function(err, form){
        if(err) { throw err; }
        
        // form - is the template rendered HTML elements
        res.send(form);
        return next();
      });

    });
    
});

/* POST Validate users route.*/ 
router.post('/validate_User_Edit_Form', function(req, res, next) {
  var incomingData = req.body;
  
    nodeWidget.validate(incomingData, function(err, valid, form){
      console.log("your form is valid ? " + incomingData);
      
      if(err) { throw err }
      console.log("your form is valid ? " + valid + incomingData);
      if (valid == false) {
        res.send(form);
      } else {
        User.update({
            firstName: incomingData.firstName,
            lastName: incomingData.lastName
        },
        {
          where: {
            id: incomingData.id
          }, 
          returning: true
        });
        
        res.redirect('/users');
      }
      
      return next();
      
    });
    
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

      if((JSON.stringify(validator.errors['name'])) && (JSON.stringify((matched)) == 'false')){
        console.log('Invalid!!');       
        req.flash('nameCheck', JSON.stringify(validator.errors['name']['message'])); 
        req.flash('emailCheck', '');                   
        //res.redirect('/form');      
            
      } else if((JSON.stringify(validator.errors['email'])) && (JSON.stringify((matched)) == 'false')){
        console.log('Invalid!!');       
        req.flash('nameCheck', '');         
        req.flash('emailCheck', JSON.stringify(validator.errors['email']['message']));           
        //res.redirect('/form');      
      } else {
        req.flash('nameCheck', JSON.stringify(validator.errors['name']['message']));         
        req.flash('emailCheck', JSON.stringify(validator.errors['email']['message']));           
        //res.redirect('/form');      
        
      }
      
      res.redirect('/form');      

       

      
    } 
    if(JSON.stringify(matched) == 'true') {
      res.redirect('/successForm');
    }

    
  });

  

});

module.exports = router;

