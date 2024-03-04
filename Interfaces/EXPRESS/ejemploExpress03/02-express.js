'use strict';

require('dotenv').config(); // Carga las variables de entorno desde un archivo .env

const express = require('express');
const methodOverride = require('method-override');
const mongoose = require('mongoose');
const bodyParser = require('body-parser'); 
const app = express();


// Configuración del middleware body-parser
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

async function main() {
    try {
        // Conexión a la base de datos MongoDB
        const uri = `mongodb+srv://${process.env.NAME}:${process.env.PASSWORD}@cluster0.argnnwt.mongodb.net/${process.env.DBNAME}`;
        await mongoose.connect(uri, {
            useNewUrlParser: true, // useNewUrlParser es necesario para evitar la advertencia
            useUnifiedTopology: true, // useUnifiedTopology es necesario para evitar la advertencia
        });
        console.log('Base de datos conectada');
        
        // Configuración de Express
        app.use(express.static(__dirname + '/public/'));
        app.set('view engine', 'ejs');
        app.set('views', __dirname + '/views/');
        app.use(methodOverride('_method'));

        // Rutas
        app.use('/', require('./router/music'));
        
        // Manejo de errores 404
        app.use((req, res) => {
            res.status(404).render("404", {
                titulo: "ERROR 404",
                description: "Page not found"
            });
        });
        
        // Iniciar el servidor
        const PORT = process.env.PORT || 3000;
        app.listen(PORT, () => {
            console.log(`Servidor Express iniciado en el puerto ${PORT}`);
        });
    } catch (error) {
        console.error('Error al iniciar la aplicación:', error);
    }
}

main().catch(err => console.log(err));
