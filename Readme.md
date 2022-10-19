# CONTENT MANAGMENT APPLICATION

## About

- Website is made to view your page as client, and manage it as admin.
- Application is made with PHP, HTML, MySQL Workbench. 
- For style used Boostrap and raw CSS.
- Used aplication-level dependency manager - Composer.
- Uses database with Object–relational mapper called Doctrine.

## Features:

- Application lets view page content for user.
- Have admin section.
- Admin section is protected with login.
- Admin section, gives rights such as:
- Ability to see page contents.
- Ability to create, delete pages.
- Ability to edit page content.

## Install and how to open.

For app to run we need PHP interpreter(XAMPP), MySQL Workbench.

- Run XAMPP and start "Apache" and "MySQL" Module.
- Find where XAMPP is installed on your device and open "htdocs" folder. Potentialy in "C:\xampp\htdocs".
- Install "Composer" in C:\xampp\htdocs
- Clone repository inside "htdocs" folder.
- git clone https://github.com/MartynasGit/cms.git
- Open cloned folder and run git bash. Type "php ../composer.phar install".
- Open "MySQL Workbench". Create connection with ussername: "root" and empty password. (if you wish to have one add here and change config.ini file's section called "db_password" )
- Open connection. Then open "Administration" tab and click "Data Import/Restore".
- Select "Import from Self-Contained File" and select "dump.sql" file from cloned repository folder.
- Press "Start Import"
- To open page as client: example http://localhost/cms/  
- To open admin: example http://localhost/cms/Admin 
- Ussername: Admin
- Password: Admin

**IMPORTANT !!**
**Change _config.ini.example_ file name to _config.ini_**

Also if your cloned aplication directory is not like in my example, change "app_prefix" on "config.ini" file to match your folder route accordingly.

## Demo
![ScreenShot](/src/views/assets/customer.png)
### Admin page
![ScreenShot](/src/views/assets/adminDemo.png)

## Author

Project is created by Martynas Gumuliauskas.

Github - MartynasGit.

Linkedin - https://www.linkedin.com/in/martynasgum/.