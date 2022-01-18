create table points(
    id int(10) not null primary key auto_increment,
    order_id int(10) not null,
    user_id int(10) not null,
    point decimal(10  , 2) ,
    create_at timestamp default now()
);