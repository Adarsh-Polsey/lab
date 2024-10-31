-- Create users table for login system
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(32) NOT NULL
);

-- Create student table for mark list
CREATE TABLE student (
    roll_no VARCHAR(20) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    mark INT NOT NULL,
    grade CHAR(2) NOT NULL
);

-- Insert sample student data
INSERT INTO student (roll_no, name, mark, grade) VALUES
('2024001', 'John Doe', 85, 'A'),
('2024002', 'Jane Smith', 92, 'A+'),
('2024003', 'Bob Wilson', 78, 'B+');

-- Insert sample user for login
INSERT INTO users (username, password) VALUES
('admin', MD5('admin123'));
