create table Panditjii_Category(
    panditjii_id varchar(10) PRIMARY KEY,
    panditjii_Name varchar(100) not null,
    panditjii_photo  varchar(100)  not null,
    panditjii_phoneno  varchar(100)  not null,
    panditjii_experties varchar(500) not null,
    panditjii_charges varchar(100) not null
    
    )


create table Puja_Category(
    pujacategory_id varchar(10) PRIMARY KEY,
    puja_Name varchar(100) UNIQUE not null,
    puja_charges  varchar(100)  not null,
    puja_Duration  varchar(100)  not null,
    puja_Image varchar(500) not null,
    puja_Description varchar(100) not null,
    puja_code  varchar(100)  not null
    )

    product_id
    product_name
    product_photo
    product_rate
    product_weight

    create table Product(
    product_id varchar(10) PRIMARY KEY,
    product_name varchar(100) UNIQUE not null,
    product_photo  varchar(100)  not null,
    product_rate  varchar(100)  not null,
    product_weight varchar(500) not null,
    product_description varchar(2000) not null,
    product_code varchar(500) not null

    )

 CREATE TABLE Home_Setting (
Id int AUTO_INCREMENT PRIMARY key,
slogan varchar(500) not null,
slogantext varchar(100) not null,
desc1 varchar(200) not null,
desc2 varchar(1000) not null,
desc3 varchar(200) not null,
desc4 varchar(1000) not null,
desc5 varchar(200) not null    

)

CREATE TABLE about (
Id int AUTO_INCREMENT PRIMARY key,
slogan varchar(500) not null,
slogantext varchar(100) not null,
desc1 varchar(200) not null,
desc2 varchar(1000) not null,
desc3 varchar(200) not null,
desc4 varchar(1000) not null,
desc5 varchar(200) not null    

)

    create table User_Panditjii(
    Userpanditjii_id varchar(10) PRIMARY KEY,
    Userpanditjii_Name varchar(100) not null,
    Userpanditjii_photo  varchar(100)  not null,
    Userpanditjii_phoneno  varchar(100)  not null,
    Userpanditjii_experties varchar(500) not null,
    Userpanditjii_charges varchar(100) not null
    
    )


    CREATE TABLE Contact_Us(
    Contactid int AUTO_INCREMENT PRIMARY KEY,
    email varchar(100) NOT null,
    name varchar(100) not null,
    subject varchar(500) NOT null,
    message varchar(20000) not null
   )

   CREATE TABLE paymentgetway(
    paymentid int PRIMARY KEY,
    customer_id int (100) NOT null,
    customer_name varchar(100) not null,
    customer_phone int(10) not null,
    customer_emailid varchar(500) NOT null,
    customer_country varchar(200) not null,
    customer_pinno varchar(6) not null,
    customer_address varchar(2000) not null,
    customer_landmark varchar(500) not null
   )


   CREATE TABLE bookpandit(
    Contactid int AUTO_INCREMENT PRIMARY KEY,
    email varchar(100) NOT null,
    name varchar(100) not null,
    phone int(10) not null,
    subject varchar(500) NOT null,
    Address varchar(20000) not null
   )