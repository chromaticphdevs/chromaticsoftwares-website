drop table orders;

create table orders(
    id int(10) not null primary key auto_increment,
    user_id int(10) not null comment 'staff who key-in the order',
    name varchar(100) not null comment 'customer name',
    mobile varchar(50) not null comment 'Mobile Number',
    street_address varchar(50) ,
    province varchar(50),
    city varchar(50) ,
    barangay varchar(50) ,
    status enum('pending' , 'delivered' , 'cancelled' , 'finished') default 'pending',
    created_at timestamp default now(),
    updated_at timestamp default now() ON UPDATE CURRENT_TIMESTAMP
);