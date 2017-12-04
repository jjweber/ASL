console.log("Main.js Here!");

const expressValidator = require('express-validator');
app.use(expressValidator(middlewareOptions));

$('#registerForm').validate({
    rules: {
        name : {required:true},
        email : {required:true
    },
    messages : {
        name : "Required!",
        email : "Required!"
    },
    submitHandler: function(form) {
        form.submit();
    }
}}
);