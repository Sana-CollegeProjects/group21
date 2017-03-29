//**Creating a server, reference to: https://community.c9.io/t/writing-a-node-js-app/1731 -Sana**//

var http = require('http');
http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/plain'});
    res.end('Hello World\n');
}).listen(process.env.PORT, process.env.IP);