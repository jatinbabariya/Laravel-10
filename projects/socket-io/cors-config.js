export const corsOptions = {
    origin: "http://127.0.0.1:8000", // Allow requests from your Laravel application
    methods: ["GET", "POST"], // Add any other HTTP methods your application uses
    allowedHeaders: ["Content-Type"], // Allow only specific headers
    credentials: true, // Allow credentials (cookies, authorization headers, etc.)
};
