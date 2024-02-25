let express = require('express');
let router = express.Router();


router.get('/', function(req, res){
    res.render('index', { titulo: "Título de la página", contenido: "YE PERDONEN KAMEKAMEHA" });
});

router.get('/about', function(req, res){
    res.render('contacto', { titulo: "Título de la página de contacto", contenido: "Contenido de la página de contacto" });
});


module.exports = router;