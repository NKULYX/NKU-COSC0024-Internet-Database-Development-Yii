# RUS VS UKR - A News Website about the Russo-Ukrainian War

## Environmental settings

Our website is deployed on Windows, with Apache 2.4.39 & MySQL 5.7.26. We also support MySQL 8.0, but please make sure you use the corresponding SQL file to setup the database.

We recommend you to use [phpStudy 8.1.1.3](https://www.xp.cn/download.html), which contains all the above components. Additionally, we need a software to manipulate the database. We recommend [Navicat](https://navicat.com.cn/download/navicat-premium), but you can use others like XAMPP as well.

## Deployment Steps

### 1. Download the source code

Clone our project in [this repository](https://github.com/NKULYX/Yii).

### 2. Initialize the database

2.1 Turn on Apache and MySQL. If you are using MySQL for the first time, reset the password of the root user and remember it.

2.2 Set the root path of Apache to the path of the git repository

2.3 Connect Navicat with the database. Use the password and port number set in 2.1.

2.4 Create a new database

2.5 Execute the .sql file to initialize the new database. The sql file is in /data. If you are using MySQL 5.7, please execute data_mysql5.7.sql. If you are using MySQL8.0, please execute data_mysql8.0.sql.

### 3. The website is now ready!

frontend: http://localhost/frontend/web/index.php

backend: http://localhost/backend/web/index.php