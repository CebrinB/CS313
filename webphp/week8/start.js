//require npm packages
var http = require('http');
var fs = require('fs');

var drums;
var joke;

fs.readFile('drums.html', 'utf8', function(err, data) {
  drums = data;
});

fs.readFile('joke.html', 'utf8', function(err, data) {
  joke = data;
});

function onRequest(request, response) {
  console.log("Received a request for " + request.url);

  //  I attempted to serve sound files using node_static.
  //  I was unable to get it working. I did a joke instead.
  //fileServer.serve(request, response);

  switch (request.url) {
    case '/home': 
      msg = '<h1>Welcome to the Home Page</h1>';
      response.writeHead(200, {
        "Content-Type": "text/html"
      });
      response.end(msg);
      break;
    case '/getData':
      msg = '{"name":"Cebrin Billings","class":"cse341"}';
      response.writeHead(200, {
        "Content-Type": "application/json"
      });
      response.end(msg);
      break;
    case '/getDate':
      date = new Date(Date.now());
      msg = 'Today is ' + date.toDateString();
      response.writeHead(200, {
        "Content-Type": "text/html"
      });
      response.end(msg);
      break;
    case '/joke':
      msg = joke;
      response.writeHead(200, {
        "Content-Type": "text/html"
      });
      response.end(msg);
      break;
    case '/drums':
      msg = '<h2>Apologies, I couldn\'t get the sound files to load. :(<br>The button styling works, though!</h2>';
      response.writeHead(200, {
        "Content-Type": "text/html"
      });
      response.write(msg)
      response.end(drums);
      break;
    case'/sounds':
      //fileServer.serve(request, response);
    default:
      response.writeHead(404);
      response.end("404 Page Not Found");
      break;
  }
}

//create a server object
var server = http.createServer(onRequest);

//listen for a connection
server.listen(8888);

console.log("The server is listening on port 8888...");