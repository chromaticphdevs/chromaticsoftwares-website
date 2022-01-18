
drop table blogs;
create table blogs(
  id int(10) not null primary key auto_increment,
  title text ,
  slug  varchar(100) unique,
  sub_title text,
  wallpaper text,
  wallpaper_alt text,
  style tinyint(10) default 1,
  is_visible boolean default true,
  created_at timestamp default now()
);
