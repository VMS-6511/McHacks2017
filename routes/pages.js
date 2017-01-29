var express = require('express');
var router = express.Router();
var firebase_wrapper = require('../firebase_wrapper.js');
var debug = require('debug')('user');


router.get('/index',
  	function(req, res){

	  	api_wrapper.getRequest("/v1/tournaments", function(error, response, body){
	  		res.render('leaderboard',{users: JSON.parse(body).data.all_users});
	  	});
});

module.exports = router;
