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
            {link: '/form', content: 'Form'}            
        ] });
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

