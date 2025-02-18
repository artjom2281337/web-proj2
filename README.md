# Web programming - MMarket - Group 7
## Project info
For this project, the main goal is to create and implement certain functionalities to a webpage, which is dedicated on online groceries, such as:
- A dynamic webpage that is using PHP as a backend.
- A database alongside PHP where the data can be retrieved/manipulated through the webpage.
- JavaScript and PHP scripts to improve the data validation and dynamic content.

## Tasks
- [x] **Dynamic Header & Footer**
- [x] **User table**
- [x] **Product table**
- [x] **Cart table**
- [x] **Favourite products table**
- [x] **Job table**
- [x] **Database connection**
- [x] **Dynamic Product page**
- [x] **Dynamic Cart page**
- [x] **Login & Registration**
- [x] **User Session**
- [x] **Search bar**

## Dynamic Header and Footer

# Tables

## User Table

| Column Name  | Data Type        | Key           |
|--------------|-----------------|---------------|
| `userid`     | `int`            | `PRIMARY KEY` |
| `fname`      | `varchar(50)`    | `NOT NULL`    |
| `lname`      | `varchar(50)`    | `NOT NULL`    |
| `email`      | `varchar(50)`    | `NOT NULL`    |
| `password`   | `varchar(50)`    | `NOT NULL`    |
| `iscorp`     | `tinyint(1)`     | `DEFAULT '0'` |


## Product Table

| Column Name           | Data Type        | Key        |
|----------------------|-----------------|------------|
| `itemid`            | `int`            | `PRIMARY KEY` |
| `item_name`         | `varchar(50)`    |            |
| `img`               | `varchar(50)`    |            |
| `price`             | `float`          |            |
| `price_kilo`        | `float`          |            |
| `item_type`         | `varchar(50)`    |            |
| `country`           | `varchar(50)`    |            |
| `company`           | `varchar(50)`    |            |
| `ingred`            | `varchar(50)`    |            |
| `allergies`         | `varchar(50)`    |            |
| `isDiscount`        | `tinyint(1)`     | `NOT NULL DEFAULT '0'` |
| `discount_percentage` | `float`        |            |


## Cart Table

| Column Name  | Data Type | Key                 |
|-------------|----------|---------------------|
| `cartid`    | `int`    | `PRIMARY KEY`       |
| `userid`    | `int`    | `FOREIGN KEY`       |
| `itemid`    | `int`    | `FOREIGN KEY`       |
| `quantity`  | `int`    | `NOT NULL DEFAULT '1'` |


## Favorite Products Table

| Column Name  | Data Type | Key                        |
|-------------|----------|----------------------------|
| `fav_id`    | `int`    | `PRIMARY KEY`              |
| `userid`    | `int`    | `FOREIGN KEY`              |
| `itemid`    | `int`    | `FOREIGN KEY`              |


## Job Table

| Column Name  | Data Type     | Key        |
|-------------|-------------|------------|
| `job_id`    | `int`        | `PRIMARY KEY` |
| `name`      | `varchar(50)` | `NOT NULL` |
| `startdate` | `date`       |            |
| `enddate`   | `date`       |            |
| `location`  | `varchar(50)` |            |
| `postcode`  | `varchar(50)` |            |

