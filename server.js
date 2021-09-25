
const express = require('express')
const app = express()
const port = 3000
const http = require('http')
const server = http.createServer(app)
const {Server} = require("socket.io")

const io = new Server(server,{
    cors: {origin: "*"}
})

let step = 0;
io.on("connection",(socket)=>{
    console.log("connected width socket.io!");
    socket.on("sendChatToServer",(messages)=>{
        step+=1;
        console.log(messages,step);
        io.emit('sendChatToClient', messages,step);
    })

    socket.on("disconeted",(socket)=>{
        console.log("Disconected width socket.io");
    })
})
server.listen(port, () => console.log('Server node is start !'))