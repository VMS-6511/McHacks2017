//to setup console logging run the following
// on Windows, run set DEBUG=*
// on Mac export DEBUG=*
var debug = require('debug')('app');

//create a config file to store
var config = require('./config.json');
var path = require('path');

//set up express & handlebars
var express = require('express');
var exphbs  = require('express-handlebars');

var app = express();
app.engine('handlebars', exphbs({defaultLayout: 'main', helpers: { json: function (context) { return JSON.stringify(context); } }}));
app.set('view engine', 'handlebars');
app.use(express.static(path.join(__dirname, 'public')));

var router = express.Router();


// get a route from a separate file
var users = require('./routes/pages');
app.use('/pages', pages);

app.get('/',
  function(req, res) {
    res.render('home');
  });


app.set('port', config.express.port || 3000);

var server = app.listen(app.get('port'), function() {
  debug('Express server listening on port ' + server.address().port);
});
