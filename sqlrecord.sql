
use preciouspassage;

-- create blog
CREATE TABLE blog (
    entry_id integer(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    summary TEXT COLLATE utf8_unicode_ci NULL, 
    entry TEXT COLLATE utf8_unicode_ci NULL,
    title varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    url_title varchar(200) COLLATE utf8_unicode_ci NOT NULL,
    unique(url_title), 
    creation_date DATETIME NOT NULL,
    edited_date DATETIME NULL,
    author VARCHAR(100) COLLATE utf8_unicode_ci
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- sample entry
INSERT INTO blog (title, url_title, summary, entry, author, creation_date) 
VALUES ( 'a random title', 'this_is_the_greates_thing_ever', 'summary', 'entry','author name', NOW());

-- create static index
CREATE TABLE static_index (
    id integer(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    entry TEXT COLLATE utf8_unicode_ci NULL,
    url_title TEXT COLLATE utf8_unicode_ci NULL,
    title varchar(255) COLLATE utf8_unicode_ci NOT NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- file table
CREATE TABLE files (
    id integer(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    filename TEXT COLLATE utf8_unicode_ci NULL,
    description TEXT COLLATE utf8_unicode_ci NULL
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`)
) DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;;


