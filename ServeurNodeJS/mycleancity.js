var express = require('express');
var session = require('cookie-session'); // Charge le middleware de sessions
var bodyParser = require('body-parser'); // Charge le middleware de gestion des paramètres
var urlencodedParser = bodyParser.urlencoded({ extended: false });

var app = express();

/* On utilise les sessions */
app.use(session({secret: 'todotopsecret'}))


/* S'il n'y a pas de todolist dans la session,
on en crée une vide sous forme d'array avant la suite */
.use(function(req, res, next){
    if (typeof(req.session.txtlist) == 'undefined') {
        req.session.txtlist = [];
    }
    next();
})

/* On affiche la txtlist et le formulaire */
.get('/index', function(req, res) { 
    res.render('index.ejs', {txtlist: req.session.txtlist});
})

/* On ajoute un élément à la txtlist */
.post('/index/ajouter/', urlencodedParser, function(req, res) {
    if (req.body.newtext != '') {
        req.session.txtlist.push(req.body.newtext);
    }
    res.redirect('/index');
})

/* Supprime un élément de la txtlist */
.get('/index/supprimer/:id', function(req, res) {
    if (req.params.id != '') {
        req.session.txtlist.splice(req.params.id, 1);
    }
    res.redirect('/index');
})

/* On redirige vers la txtlist si la page demandée n'est pas trouvée */
.use(function(req, res, next){
    res.redirect('/index');
})

.listen(8080);