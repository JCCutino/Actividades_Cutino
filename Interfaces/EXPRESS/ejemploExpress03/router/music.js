'use strict';

const express = require('express');
const router = express.Router();
const Artist = require('../models/artist');

let globalMessage = '';


router.get('/', async (req, res) => {
    try {
        const arrayArtistDB = await Artist.find();
        
        let message = req.query.message; 
        
        res.render("music/artist", {
            arrayArtist: arrayArtistDB,
            message: globalMessage  
        });

        globalMessage = '';
    } catch (error) {
        console.error('Error al recuperar datos:', error);
    }
});



router.post('/', async (req, res) => {
    const body = req.body;
    console.log("Datos recibidos:", body);

    try {
        const artistDB = new Artist(body);
        globalMessage = 'Artista añadido exitosamente';

        await artistDB.save();

        res.redirect('/'); 
    } catch (error) {
        console.log('Error al guardar el artista:', error);
        res.status(500).send('Error interno del servidor');
    }
});
router.post('/delete', async (req, res) => {
    const artistId = req.body.artistId; 
    try {
        const artistDB = await Artist.findByIdAndDelete(artistId);
        globalMessage = 'Artista eliminado exitosamente';

        res.redirect('/');
    } catch (error) {
        console.log('Se ha producido un error:', error);
        res.status(500).json({
            estado: false,
            mensaje: 'Se produjo un error al eliminar el artista'
        });
    }
});

router.post('/update', async (req, res) => {
    const id = req.body.id; // Aquí se obtiene el ID del cuerpo de la solicitud
    const { name, genre, biography } = req.body;

    try {
        let updatedArtist = await Artist.findByIdAndUpdate(id, { name, genre, biography }, { new: true });
        
        if (updatedArtist) {
            console.log('Artista actualizado correctamente:', updatedArtist);
            
            globalMessage = 'Artista actualizado exitosamente';

            res.redirect('/');
        } else {
            console.log('No se encontró el artista para actualizar');
            res.status(404).json({
                success: false,
                message: 'No se encontró el artista para actualizar'
            });
        }
    } catch (error) {
        // Manejo de errores
        console.error('Error al actualizar el artista:', error);
        res.status(500).json({
            success: false,
            message: 'Se produjo un error al actualizar el artista'
        });
    }
});

module.exports = router;
