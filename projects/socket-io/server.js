import http from "http";
import { Server } from "socket.io";
import { corsOptions } from "./cors-config.js"; // Assuming you have a separate file for CORS configuration

const server = http.createServer();
const io = new Server(server, {
    cors: corsOptions, // Pass CORS options here
});

io.on("connection", (socket) => {
    console.log("Client connected");

    // Handle event
    socket.on("test-event", (data) => {
        console.log("Test event received:", data);
        // Broadcast to all clients in the test-channel
        io.emit("test-event", data);
    });
    socket.on("simple-test-event", (data) => {
        console.log("Test event received:", data);
        // Broadcast to all clients in the test-channel
        io.emit("test-event", data);
    });
});

server.listen(3000, () => {
    console.log("Socket.IO server running on port 3000");
});
