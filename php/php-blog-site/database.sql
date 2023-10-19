CREATE TABLE `pages` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `path` varchar(200) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `published` date DEFAULT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `pages` (`id`, `path`, `title`, `category`, `description`, `published`, `content`) VALUES
(1, 'html/intro-to-html.html', 'Introduction to HTML', 'HTML', 'This is an introduction to the HTML language', '2023-08-04', '<h1>Welcome to HTML</h1><p>This page is all about HTML</p>'),
(2, 'css/intro-to-css.html', 'This is an introduction to the CSS language', 'CSS', 'This is an introduction to the CSS language', '2023-08-04', '<h1>Welcome to CSS</h1><p>This page is all about CSS</p>'),
(3, 'javascript/intro-to-javascript.html', 'This is an introduction to the JavaScript language', 'JavaScript', 'This is an introduction to the JavaScript language', null, '<h1>Welcome to CSS</h1><p>This page is all about JavaScript</p>');
