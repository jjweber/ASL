var express = require('express');
var bodyParser = require('body-parser');
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

router.get('/submit', function(req, res, next){
  console.log("Getting form.");
});

router.post('/submit', function(req, res, next) {
  console.log("Form Submitted");
  res.end(JSON.stringify(req.body));
});

module.exports = router;

