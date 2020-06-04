
import { Teste } from "../../lib/get_all_dados_api";

console.log(Teste);

var app = require('express')();
var http = require('http').createServer(app);
var io  = require('socket.io')(http);


app.get('/', (req, res) => {
      res.sendFile(__dirname + '/');
});

io.on('connection', (socket) => {
    io.emit('eventMessage', {
        name: "Rafael Silva", email: "rafaelshembek@gmail.com"
    })
})

http.listen(3000, () => {
    console.log('servidor online');
})