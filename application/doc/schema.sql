create table users(
  id integer not null primary key auto_increment,
  email varchar(255),
  password varchar(255)
);
create table news(
  id integer not null primary key auto_increment,
  date varchar(255),
  content varchar(255)
);

