# The-BackEnder
Easy to Advanced levels of backend codes for different full-stack projects using WAMP / LAMP stack. This repository can be forked or downloaded and used as templates with modifications to be done at personal risk and need analysis.


## Steps to Begin:

- Install XAMPP for windows.
- Start the XAMPP server and click on the "Start" buttons of Apache and MySQL
- Once the servers are green (ready for use), minimize the window. You may also close the Server Dialog Box, because server will run anayway.
- Navigate to C drive. From there, naviage to xampp. Open xampp and open htdocs folder.
- Inside the htdocs folder, create a new folder with the name of the website.
- Make php file of names of your choice.
- Open a browser, and in the address bar, type "localhost/(filename)/(file.php)"     (filename is the name of file created inside htdocs. file.php is your desired php file)
- You will be able to view your php page contents


## Bug fixes:
- If the MySQL server doesn't start, open config. From the dropdown, choose my.ini 
- Scroll to this area:

```
# The following options will be passed to all MySQL clients
[client]
# password       = your_password 
port=3306
socket="C:/xampp/mysql/mysql.sock"
```

- Change the portnumber, (at port = xxxx)
- Save the file.
- Restart the server.


## Contents:

| Sl. No. | Contents | Type | 
|---------|----------|------|
| 1 | [Simple Form Submission](https://github.com/My-Web-Station/The-BackEnder/tree/main/PHP-1) | PHP |












&copy; BackEnder-MWS 2022
