'use strict'

let express = require('express'),
    app = express()

    app.set('view engine', 'ejs')
    app.set('views',__dirname+'/views/')

app
    .get('/', (req, res) =>{
        //res.sendFile(ruta+ 'index.html')
        res.render("index", {titulo: "mi titulo dinamico"})
    })

    .get('/contacto', (req, res) =>{
        //res.sendFile(ruta+ 'index.html')
        res.render("contact", {titulo: "Página de contacto"})
    })
    
    .use((req, res) =>{
        res.status(404).render("404", {
            titulo: "ERROR 404",
            description: "Page not found"
        })
    })

    .listen(3000)

console.log('Iniciando Express en el puerto 3000')