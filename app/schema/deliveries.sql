create table deliveries(

    id int(10) not null primary key auto_increment,
    order_id int(10) not null ,
    courier varchar(100) not null,
    reference varchar(100) not null,
    created_at timestamp default now()
);