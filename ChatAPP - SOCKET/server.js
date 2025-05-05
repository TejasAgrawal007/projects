const express = require('express');
const http = require('http');
const { Server } = require('socket.io');

const app = express();
const server = http.createServer(app); // IMPORTANT
const io = new Server(server);         // Socket.IO binds here

app.set('view engine', 'ejs');

app.get('/', (req, res) => {
  res.render('index');
});

io.on('connection', (socket) => {
    socket.on("user-message", (message) => {
        io.emit("message", message)
        console.log('A user connected', message);
    })
});

server.listen(3000, () => {
  console.log('Server running at http://localhost:3000');
});
