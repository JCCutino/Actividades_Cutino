'use strict'

let http = require('http').createServer(
    webServer),
    path = require('path'),
    urls = [
        {
            route: '',
            output: '<h2>Home</h2>'
        },
        {
            route:'acerca',
            output:'<h2>Acerca</h2>'
        },
        {
            route:'contacto',
            output:'<h2>Contacto</h2>'
        }
    ]

    function webServer(req, res){
        let message = '<h1>Hola Node.js</h1>';
        let pathUrl = path.basename(req.url);

        console.log(pathUrl);

        urls.forEach(function (pos){
            if (pos.route == pathUrl){
                res.writeHead(200, {
                    'Content-Type': 'text/html'})
                    res.end(message + pos.output)
                }
            })
            if(!res.finished){
                res.writeHead(404, {'Content-Type':
            'text/html'})
            res.end(
                '<h1>Error 404: Not Found</h1>')
            }
        }
       
        http.listen(3000);

        console.log('Server running at http://localhost:3000')

    
