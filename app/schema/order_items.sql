drop table order_items;

create table order_items(
    id int(10) not null primary key auto_increment,
    order_id int(10) not null,
    product_id tinyint(10) not null,
    srp_amount decimal(10 , 2) not null,
    total_amount decimal(10 , 2) not null,
    quantity tinyint(10) not null,
    created_at timestamp default now()
);