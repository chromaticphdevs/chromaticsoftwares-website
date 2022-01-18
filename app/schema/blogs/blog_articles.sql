create table blog_articles(
  id int(10) not null primary key auto_increment,
  blog_id int(10),
  title text,
  sub_title text,
  body text,
  wallpaper text,
  wallpaper_alt text,
  created_at timestamp default now()
);


alter table blog_articles add column position tinyint after title;