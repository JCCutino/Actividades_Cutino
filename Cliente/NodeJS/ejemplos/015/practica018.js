'use strict';

let http = require('http').createServer(webServer),
    form = require('fs').readFileSync('form.html'),
    querystring = require('querystring'),
    util = require('util'),
    dataString = '';

function webServer(req, res){
    if (req.method == 'GET'){
        res.writeHead(200, {'Content-Type' : 'text/html'});
        res.end(form)
    }

    if (req.method == 'POST'){
        req.on('data', function(data){
            dataString += data;
        }).on('end', function(){
            let templateString = `Los datos que enviaste por Post como string son: ${dataString}`;
            console.log(templateString);
            res.end(templateString);
        });
    }
}

http.listen(3000);

console.log('Server running at http://localhost:3000');
