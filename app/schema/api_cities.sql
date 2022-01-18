create table api_cities(
    id int(10) not null primary key auto_increment,
    city varchar(50),
    admin varchar(50)
);


/*https://github.com/flores-jacob/philippine-regions-provinces-cities-municipalities-barangays*/
create table api_provinces(
    id int(10) not null primary key auto_increment,
    name varchar(50)
);

create table api_cities(
    id int(10) not null primary key auto_increment,
    province_id int(10),
    name varchar(50)
);

create table api_barangays(
    id int(10) not null primary key auto_increment,
    city_id int(10),
    name varchar(50)
);


truncate api_provinces;
truncate api_cities;
truncate api_barangays;


DELETE BARANGAYS AND ETCH


DELETE FROM api_barangays 
    where city_id in 
    (
        SELECT id FROM api_cities WHERE province_id = 76
    );

DELETE FROM api_cities where province_id = 76;

DELETE FROM api_provinces where id = 76;


ALTER TABLE  api_barangays auto_increment = 1;

