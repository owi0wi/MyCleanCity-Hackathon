var express = require('express');
var app = express();

app.get('/', function(req, res) {
    res.setHeader('Content-Type', 'text/plain');
    res.end('Vous êtes à l\'accueil');
});

app.post('/:params', function(req, res){
	res.setHeader('Content-Type', 'text/plain');
    res.end(req.params.etagenum['nom']);
});

app.listen(8080);