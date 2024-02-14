let express = require('express'),
    app = express()

app
    .get('/', (req, res) =>{
        res.end('<h1>Me despierto 6AM en otro barrio, un domingo</h1>')
    })
    .get('/contact', (req, res) =>{
        res.send('<h1>Pero decime dónde estás, estoy en cinco</h1>')
    })
    

    .listen(3000)


