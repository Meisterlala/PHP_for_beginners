CREATE SCHEMA IF NOT EXISTS dynamic_web_app;

CREATE TABLE IF NOT EXISTS dynamic_web_app.posts
(
    id SERIAL NOT NULL PRIMARY KEY,
    title text NOT NULL
);

INSERT INTO dynamic_web_app.posts (title) VALUES
('10 Essential PHP Tricks Every Coder Should Know'),
('The Future of PHP: What to Expect in Version 9.0'),
('How to Handle Strings in PHP Like a Pro'),
('Debugging PHP Code: A Step-by-Step Guide'),
('Best Practices for Writing Secure PHP Code'),
('Understanding PHP Functions: A Beginner''s Guide'),
('Optimizing PHP Code for Better Performance'),
('Exploring PHP 8.0: New Features and Improvements'),
('Building a REST API with PHP: A Complete Tutorial'),
('Working with PHP and MySQL: A Guide for Beginners'),
('How to Build a Dynamic Website with PHP and HTML'),
('Top 5 PHP Frameworks to Learn in 2024'),
('Advanced PHP Techniques: Pushing Your Skills Further'),
('Handling User Authentication in PHP'),
('Common PHP Mistakes and How to Avoid Them'),
('Introduction to Object-Oriented Programming in PHP'),
('Why PHP is Still Relevant in Modern Web Development'),
('How to Use Composer for PHP Dependency Management'),
('Integrating APIs with PHP: Everything You Need to Know');
