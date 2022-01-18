create table products(
    id int(10) not null primary key auto_increment,
    name varchar(100) ,
    picture text,
    description text,
    capital_amount decimal(10 , 2),
    srp_amount decimal(10 ,2),
    created_at timestamp default now()
);