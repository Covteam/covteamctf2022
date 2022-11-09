CREATE DATABASE IF NOT EXISTS littlesqli;

USE littlesqli;

CREATE TABLE IF NOT EXISTS `words` (
  `id` int(10) NOT NULL,
  `data` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


INSERT INTO `words` values(1,'你好'),(2,'continue'),(114514,'ys');
