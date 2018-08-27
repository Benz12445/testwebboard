
use webboard;

create table memberType(
    memberType_id int(4) not null auto_increment,
    member_type varchar(30),
    primary key(memberType_id)
);

insert into memberType(member_type) 
values("nonverified"),("verfied"),("admin");

create table member(
    member_id int(4) not null auto_increment,
    name varchar(40),
    lastname varchar(40),
    address varchar(100),
    phone_number varchar(10),
    email varchar(50),
    date_regis date,
    member_type_id int(4) default 1,
    foreign key (member_type_id) references memberType(memberType_id),
    primary key (member_id)
);

