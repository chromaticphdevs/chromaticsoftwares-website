create table blogs(
  id int(10) not null primary key auto_increment,
  slug varchar(100) unique ,
  title text,
  wallpaper text,
  content text,
  is_visible boolean default true,
  created_at timestamp default now()
);
