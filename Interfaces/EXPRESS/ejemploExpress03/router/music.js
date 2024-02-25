let express = require('express');
let router = express.Router();
let Artist = require('../models/artist'); 

router.get('/', async(req, res) => {
    try {
        const arrayArtistDB = await Artist.find();
        console.log('Datos recuperados:', arrayArtistDB); // Agrega esta línea para imprimir los datos recuperados en la consola
        res.render("music/artist", {
            arrayArtist: arrayArtistDB
        });
    } catch (error) {
        console.error('Error al recuperar datos:', error); // Agrega esta línea para imprimir cualquier error en la consola
    }
});


/*
router.get('/crear', function(req, res){
    res.render('crear', { titulo: "Crear", contenido: "Crear Pokemon" });
});

router.post('/', async (req, res)=>{
    const body = req.body;
    console.log(body);
    try {
        const pokemonDB = new Pokemon(body);
        await pokemonDB.save();
        res.redirect('/pokemon');
    } catch (error) {
        console.log('error', error)
    }
});

router.get('/:id', async(req,res) => {
    const id = req.params.id
    try {
        const pokemonDB = await Pokemon.findOne({_id:id});
        console.log(pokemonDB);
        res.render('detalle', {
            pokemon : pokemonDB,
            error: false
        });
    } catch (error) {
        console.log('Se ha producido un error', error)
        res.render('detalle', {
            mensaje : 'Pokemon no encontrado',
            error: true
        });
    }
})

router.delete('/:id', async(req,res) => {
    const id = req.params.id
    try {
        const pokemonDB = await Pokemon.findByIdAndDelete({_id:id});
        console.log(pokemonDB);
   
        if(!pokemonDB){
            res.json({
                estado: false,
                mensaje: 'Pokemon no eliminado'
            })
        }else{
            res.json({
                estado: true,
                mensaje: 'Pokemon eliminado'
            })
        }

    } catch (error) {
        console.log('Se ha producido un error');
        console.log(id);
    }
})

router.put('/:id', async(req,res) => {
    const id = req.params.id
    const body = req.body;
    try {
        const pokemonDB = await Pokemon.findByIdAndUpdate(
            id, body, {useFindAndModify: false}
        );
        console.log(pokemonDB);
   
            res.json({
                estado: true,
                mensaje: 'Pokemon editado'
            })
    
    } catch (error) {
        console.log('Se ha producido un error');
        console.log(id);
    }
})
*/

module.exports = router;