// server.js
const express = require('express');
const path = require('path');
const app = express();

// Puerto (usa el 3000 si no hay otro definido)
const PORT = process.env.PORT || 3000;

// Servir la carpeta "public" (HTML, CSS, JS, imágenes)
app.use(express.static(path.join(__dirname, 'public')));

// Ruta principal (index.html)
app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname, 'public', 'index.html'));
});

// Iniciar servidor
app.listen(PORT, () => {
  console.log(`🚀 Servidor corriendo en http://localhost:${PORT}`);
});
