-- Base de datos del seminario Laravel - Guía 2
-- Bloque 6: Diseño de BD y SQL

DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS categorias;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    categoria_id INT NOT NULL,
    titulo VARCHAR(150) NOT NULL,
    contenido TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

INSERT INTO users (name, email) VALUES
('Gustavo Piedrahita', 'gustavo@example.com'),
('Ana Maria', 'ana@example.com');

INSERT INTO categorias (nombre) VALUES
('Tecnología'),
('Deportes');

INSERT INTO posts (user_id, categoria_id, titulo, contenido) VALUES
(1, 1, 'Primer post de tecnología', 'Contenido relacionado con tecnología y desarrollo web.'),
(1, 2, 'Post sobre deportes', 'Contenido relacionado con deportes.'),
(2, 1, 'Laravel y PHP', 'Publicación sobre fundamentos de PHP y Laravel.');