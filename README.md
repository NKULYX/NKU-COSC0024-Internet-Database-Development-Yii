# RUS VS UKR - A News Website about the Russo-Ukrainian War

## Environmental settings

Our website is deployed on Windows, with Apache 2.4.39 & MySQL 5.7.26. We also support MySQL 8.0, but please make sure you use the corresponding SQL file to setup the database.

We recommend you to use [phpStudy 8.1.1.3](https://www.xp.cn/download.html), which contains all the above components. Additionally, we need a software to manipulate the database. We recommend [Navicat](https://navicat.com.cn/download/navicat-premium), but you can use others like XAMPP as well.

## Deployment Steps

### 1. Download the source code

Clone our project in [this repository](https://github.com/NKULYX/Yii).

### 2. Initialize the database

2.1 Turn on Apache and MySQL. If you are using MySQL for the first time, reset the password of the root user and remember it.

<img src="C:\Users\huawei\AppData\Roaming\Typora\typora-user-images\image-20230208184453763.png" alt="image-20230208184453763" style="zoom:50%;" />

<img src="C:\Users\huawei\AppData\Roaming\Typora\typora-user-images\image-20230208184546996.png" alt="image-20230208184546996" style="zoom:50%;" />

2.2 Set the root path of Apache to the path of the git repository

<img src="C:\Users\huawei\AppData\Roaming\Typora\typora-user-images\image-20230208184712659.png" alt="image-20230208184712659" style="zoom:50%;" />

2.3 Connect Navicat with the database. Use the password and port number set in 2.1.

<img src="C:\Users\huawei\AppData\Roaming\Typora\typora-user-images\image-20230208210452446.png" alt="image-20230208210452446" style="zoom:50%;" />

2.3 Create a new database

<img src="C:\Users\huawei\AppData\Roaming\Typora\typora-user-images\image-20230208211051109.png" alt="image-20230208211051109" style="zoom:50%;" />

2.4 Execute the .sql file to initialize the new database. The sql file is in /data. If you are using MySQL 5.7, please execute data_mysql5.7.sql. If you are using MySQL8.0, please execute data_mysql8.0.sql.

<img src="C:\Users\huawei\AppData\Roaming\Typora\typora-user-images\image-20230208211256593.png" alt="image-20230208211256593" style="zoom:50%;" />

### 3. The website is now ready!

frontend: http://localhost/frontend/web/index.php

backend: http://localhost/backend/web/index.php