-- create table blogs_facebook_og(
--   id int(10) not null primary key auto_increment,
--   blog_id int(10) not null,
--   type enum('og:url' , 'og:type' , 'og:title' ,'og:description' , 'og:image'),
--   value text,
--   created_at timestamp default now()
-- );

drop table blogs_facebook_og;


create table blogs_facebook_og(
  id int(10) not null primary key auto_increment,
  blog_id int(10) not null,
  url text,
  type varchar(50),
  title text,
  description text,
  image text,
  created_at timestamp default now()
);