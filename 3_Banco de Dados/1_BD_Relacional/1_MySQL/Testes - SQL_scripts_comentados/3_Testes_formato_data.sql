create database teste_data;

use teste_data;

create table tb_data(
	
    ID int not null auto_increment,
    dt_date date not null,
    dt_datetime_auto datetime default current_timestamp not null,
    dt_timestamp_auto timestamp default current_timestamp not null,
    dt_year year not null,
    primary key(ID)
    
) engine = InnoDB;

select * from tb_data;
describe tb_data;

insert into tb_data values 
(default, '2015-05-07', default, default, '2015'),
(default, '2010-05-07', default, default, '2015');

select dt_datetime_auto from tb_data where id = 1;
select YEAR(dt_datetime_auto) from tb_data where id = 1;

insert into tb_data values 
(default, '2015-05-07', default, default, '1980');