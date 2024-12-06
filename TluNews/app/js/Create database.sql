
CREATE DATABASE tintuc;
USE tintuc;


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role INT NOT NULL  CHECK (role IN (0, 1)) -- 0: người dùng, 1: quản trị viên
);


CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);


CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    image VARCHAR(255),
    created_at DATETIME NOT NULL,
    category_id INT NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);


INSERT INTO users (username, password, role) VALUES
('admin', 'admin_password', 1), 
('user1', 'user1_password', 0), 
('user2', 'user2_password', 0); 


INSERT INTO categories (name) VALUES
('Technology'),
('Health'),
('Sports'),
('Entertainment');


INSERT INTO news (title, content, image, created_at, category_id) VALUES

('AI Innovations', 'Content about AI innovations...', 'tech1.webp', NOW(), 1),
('Latest Tech Trends', 'Content about the latest tech trends...', 'tech2.webp', NOW(), 1),

('Healthy Living Tips', 'Content about healthy living...', 'health1.webp', NOW(), 2),
('Mental Health Awareness', 'Content about mental health...', 'health2.jpg', NOW(), 2),

('Football Updates', 'Content about football...', 'sports1.jpg', NOW(), 3),
('Olympic Highlights', 'Content about Olympics...', 'sports2.jpg', NOW(), 3),

('Movie Releases', 'Content about new movies...', 'entertainment1.webp', NOW(), 4),
('Celebrity News', 'Content about celebrities...', 'entertainment2.webp', NOW(), 4);