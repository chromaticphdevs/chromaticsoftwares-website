create table page_visits(
  id int(10) not null primary key auto_increment,
  parameters text ,
  created_at timestamp default now()
);
