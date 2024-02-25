'use strict';

require('dotenv').config(); // Carga las variables de entorno desde un archivo .env

let express = require('express');
let mongoose = require('mongoose');
let bodyParser = require('body-parser'); 
let app = express();
app.use(bodyParser.urlencoded({extenden:false}));
app.use(bodyParser.json());

async function main() {
    try {
        const uri = `mongodb+srv://${process.env.NAME}:${process.env.PASSWORD}@cluster0.argnnwt.mongodb.net/${process.env.DBNAME}`; 
        
        await mongoose.connect(uri, {
            useNewUrlParser: true,
            useUnifiedTopology: true
        });
        console.log('Base de datos conectada');
        
        // Resto del código de configuración de Express aquí
        app.use(express.static(__dirname + '/public/'));
        app.set('view engine', 'ejs');
        app.use(express.static('public'));
        app.set('views', __dirname + '/views/');
        app.use('/', require('./router/rutas'));
        app.use('/music', require('./router/music'))

        app.use((req, res) => {
            res.status(404).render("404", {
                titulo: "ERROR 404",
                description: "Page not found"
            });
        });

        app.listen(3000, () => {
            console.log('Iniciando Express en el puerto 3000');
        });
    } catch (error) {
        console.error(error);
    }
}

main().catch(err => console.log(err));