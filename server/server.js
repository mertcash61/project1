var http = require("http");

http.createServer(function(request, response) {
  response.writeHead(200, { "Content-Type": "text/plain" });
  response.write("WELCOME TO SERVER");
  response.end();
}).listen(8888);