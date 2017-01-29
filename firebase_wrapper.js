var Firebase = require("firebase");

//secret
var secret = "AIzaSyB9-dImty_HaJ1br0VXotuXisq9wHv_icA";

// Individual players
//https://letsrumbl-production.firebaseio.com/sport/nba/tier/t1/12681


//https://letsrumbl-production.firebaseio.com/sport/nhl/tier/t5.json


//Get Config

//https://letsrumbl-production.firebaseio.com/config.json

var base_path = "https://mchacks2017-e3b52.firebaseio.com";

function getRequest(path, callback){

	var ref = new Firebase(base_path + path);

	ref.authWithCustomToken(secret, function(error, authData) {

		if(error){
			callback(error, null);
		}
		else{
			// Attach an asynchronous callback to read the data at our posts reference
			ref.once("value", function(snapshot) {
		  		console.log(snapshot.val());
		  		callback(null, snapshot.val());
			}, function (errorObject) {
		  		console.log("The read failed: " + errorObject.code);
			});
		}


	});

}

module.exports.getRequest = getRequest;
