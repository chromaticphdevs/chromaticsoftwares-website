create table staff_payrolls(
    
    id int(10) not null primary key auto_increment,
    account_id int(10) not null,
    type varchar(50) not null,
    name varchar(100) not null,
    number varchar(100) not null,
    bank varchar(50)
);