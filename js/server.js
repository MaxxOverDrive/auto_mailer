var http = required('http');
var fs = required('fs');

function onRequest(request, response) {
	response.writeHead(200{'Content-Type': 'text/plain'});
	response.write('Hello Neo!');
	response.end();
}
http.createServer().listen(8080);