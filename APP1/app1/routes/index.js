var express = require('express');
var router = express.Router();

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
            navitems: [
            {link: '/', content: 'Home'},
            {link: '/users', content: 'Users'},
            {link: '/form', content: 'Form', title: 'Form Validation', success: false, errors: req.session.errors}           
        ] });
  req.session.errors = null;
});

/*
app.post("/submit", function(req, res) {
  console.log("Form submit!");
  console.log(req.body.name);
  console.log(req.body.email);
  console.log(req.body.pw);
  
});
*/
router.post('/submit', function(req, res) {
  console.log("Form Submitted");
  req.check('email', 'Invalid email address').isEmail();
  req.check('pw', 'Password is invaild').isLength({min4}).equals(req.body.confirmPassword);

  var errors = req.validationErrors();
  if(errors) {
    req.session.errors = errors;

    res.redirect('/form');
  }
});

/* GET form page. 
router.get('/form', function(req, res, next) {
  res.render('form', { 
            title: 'Form',
            navitems: [
            {link: '/', content: 'Home'},
            {link: '/users', content: 'Users'},
            {link: '/form', content: 'Form'}            
        ] });
});
*/
module.exports = router;

