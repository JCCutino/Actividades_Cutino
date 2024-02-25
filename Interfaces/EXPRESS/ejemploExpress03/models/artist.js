'use strict';

const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const artistSchema = new Schema({
    name: String,
    genre: String,
    type: String,
    image: String,
    biography: String
    
});

const Artist = mongoose.model('Artist', artistSchema, 'Artist'); // El tercer argumento debe ser 'Artist'

module.exports = Artist;
