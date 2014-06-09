create database booklist;

use booklist;

create table admin
(
    username varchar(16) not null primary key,
    password char(40) not null 
);

create table booklist
(
    listid int unsigned not null auto_increment primary key,
    name char(60) not null,
    book_quantity tinyint unsigned not null,
    username varchar(16) not null references admin(username),
    subject char(30) not null
);

create table book
(
    isbn char(13) not null primary key,
    author char(100),
    title char(100),
    price float(4,2) not null,
    description varchar(255),
    listid int unsigned not null references booklist(listid),
    index(listid),
    index(isbn)
);


grant select,insert,update,delete
on booklist.*
to booklist@localhost identified by 'password';