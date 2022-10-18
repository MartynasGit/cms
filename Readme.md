# CONTENT MANAGMENT APPLICATION

## About

- Website is made to view your page. And manage it as admin.
- Application is made with PHP, HTML, MySQL Workbench. 
- For style used Boostrap and raw CSS.
- Used aplication-level dependency manager - Composer.
- Also uses database with Object–relational mapper called Doctrine.
- To make CRUD operations app has admin section.(to reach admin type http://localhost/cms/Admin)


## Features:

- Application renders page for user.
- Intuitively navigate through pages with navigation bar.

- For admin section is protected with login.
- Admin section, gives rights such as:
- Ability to create, delete pages.
- Edit page content.
- Renders contents of page.

## Install and how to open.

For app to run we need PHP interpreter(XAMPP), MySQL Workbench.

- Run XAMPP and start "Apache" and "MySQL" Module.
- Find where XAMPP is installed on your device and open "htdocs" folder. Potentialy in "C:\xampp\htdocs".
- Install "Composer" in C:\xampp\htdocs
- Clone repository inside "htdocs" folder.
- git clone https://github.com/MartynasGit/cms.git
- Open cloned folder and run git bash. Type "php ../composer.phar install".
- Open "MySQL Workbench". Create connection with ussername: "root" and empty password. (if you wish to have one add here and change in file called bootstrap.php)
- Open connection. Then open "Administration" tab and click "Data Import/Restore".
- Select "Import from Self-Contained File" and select "dump.sql" file from cloned repository folder.
- Press "Start Import"
- To open page go browser and type localhost/(directory here) example: http://localhost/cms/
- To open admin: example http://localhost/cms/Admin 
- Ussername: Admin
- Password: Admin

IMPORTANT !! If your page directory is not like in my example, change "prefix" in index.php to match your folder route accordingly.

## Demo
![ScreenShot](/src/views/assets/customer.png)
### Admin page
![ScreenShot](/src/views/assets/adminDemo.png)

## Author

Project is created by Martynas Gumuliauskas.

Github - MartynasGit.

Linkedin - https://www.linkedin.com/in/martynasgum/.