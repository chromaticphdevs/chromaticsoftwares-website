-- create table blogs_seo(
--   id int(10) not null primary key auto_increment,
--   blog_id int(10) not null,
--   type enum('keyword' , 'description' , 'author') not null,
--   value text,
--   created_at timestamp default now()
-- );

drop table blogs_seo;
create table blogs_seo(
  id int(10) not null primary key auto_increment,
  blog_id int(10) not null,
  keyword text,
  description text,
  author varchar(50),
  created_at timestamp default now()
);
