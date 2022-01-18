create table staff_ids(

    id int(10) not null primary key auto_increment,
    account_id int(10) not null,
    picture text ,
    created_at timestamp default now()
);