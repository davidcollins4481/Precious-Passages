--GRANT SELECT, INSERT, DELETE,UPDATE ON precious_passage.* TO dev@'localhost' IDENTIFIED BY 'user';

-- create blog
CREATE TABLE blog (
    entry_id integer(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    summary TEXT NULL, 
    entry TEXT NULL,
    title varchar(255) NOT NULL,
    url_title varchar(200) NOT NULL,
    unique(url_title), 
    creation_date DATETIME NOT NULL,
    edited_date DATETIME NULL,
    author VARCHAR(100)
);

-- sample entry
INSERT INTO blog (title, url_title, summary, entry, author, creation_date) 
VALUES ( 'a random title', 'this_is_the_greates_thing_ever', 'summary', 'entry','author name', NOW());

-- create static index
CREATE TABLE static_index (
    id integer(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    entry TEXT NULL,
    url_title TEXT NULL,
    title varchar(255) NOT NULL
);

-- file table
CREATE TABLE files (
    id integer(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    filename TEXT NULL,
    description TEXT NULL
);
