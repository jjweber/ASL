//var http = require("http");

express = require('express')
var app = express()



app.get("/", function(request, response) {


    response.end("HELLO");
})

app.listen(3000, function() {
    console.log("Everything is fine and server is running");
});