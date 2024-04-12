drop table if exists users;
create table users(
	username varchar(50) PRIMARY KEY,
	password varchar(100) NOT NULL,
	fullname varchar(100),
	email varchar(100),
	phone varchar(10));
INSERT INTO users(username,password,fullname,email,phone) VALUES ('ganesh',md5('ganesh'),'ganeshatmakuri','atmakuriganesh1234@gmail.com','5134625201');
INSERT INTO users(username,password,fullname,email,phone) VALUES ('atmakugh',md5('ganesh'),'Ravikiran','atmakugh@mail.uc.edu','9704522825');

