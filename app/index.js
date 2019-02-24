//Express App
var express = require('express');
var socket = require('socket.io');
var siofu = require('socketio-file-upload');

var app = express(),
	httpapp = express(),
	fs = require('fs'),
	options = {
		key: fs.readFileSync('./crt/server.key'),
		cert: fs.readFileSync('./crt/server.crt'),
		requestCert:true
	},
	http = require('http').createServer(httpapp),
	server = require('https').createServer(options, app),
	io = require(socket.io).listen(server);
	// .use(siofu.router)
	// .listen(5670);

httpapp.get('*',function(req,res){
	res.redirect('https://192.168.1.19:5670'+req.url)
});

server.listen(5670);
http.listen(5671);
// var server = app.listen(5670, function() {
// 	console.log('listening to port 5670');
// });

app.use(express.static('./'));

var io = socket(server);

io.on('connection', function(socket){
	console.log('Socket Connected');
});

// io.on("connection", function(socket){
//     var uploader = new siofu();
//     uploader.dir = "/trace";
//     uploader.listen(socket);
// });