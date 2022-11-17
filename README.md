# REST API Template

This repository is meant for all students who are learning how to set up an REST API on their local machines with the use of PHP.

## Installation

These are the tools needed to set up your REST API.

- Any code editor you prefer
- [XAMPP](https://www.apachefriends.org/download.html) - a free and open-source cross-platform web server solution containing MariaDB, PHP, and Perl.
- [Postman](https://www.postman.com/downloads/) - an API platform for building and using APIs
- [Git](https://git-scm.com/downloads) - a free and open source distributed version control system.

### 1. Setting Up the Database

- Open the XAMPP Control Panel. Click the `Start` button on both Apache and MySQL.
![Click Start Image](https://tapinac-shs.info/assets/restapi/database-1.PNG)

- Click the `Admin` button under MySQL. It will redirect you to the PhpMyAdmin Panel. Create a database by selecting 'New' from the sidebar menu.
![PhpMyAdmin](https://tapinac-shs.info/assets/restapi/database-2.PNG)

- Name your database, then click `Create`.
- Add as many tables as you want.

### 2. Setting Up the API Template Files.

- After installing all of the tools, You can now clone the repository inside the XAMPP htdocs folder located at **`C:/xampp/htdocs`** by using Git, or through [Github Desktop](https://desktop.github.com/).

```bash
  git clone https://github.com/sggranil/restapi-php-template.git
```

- Use your preferred text editor to open the API template files.
- Locate 'Config.php' and replace the value of variable DBASE with the name of the database you created before.
![PhpMyAdmin](https://tapinac-shs.info/assets/restapi/database-4.PNG)

## 3. Testing

- Locate the `routes.php`, copy the code below and put it inside of `switch($req[0])`.

```php
    case 'res':
        echo 'Hello World!';
    break;
```

- Launch the Postman application. Head into the `My Workspace` section.

- Create a new collection by clicking the 'Create Collection' button. When you add a request, it will automatically generate a GET request. Change it to POST.
![Postman](https://tapinac-shs.info/assets/restapi/database-5.PNG)

- Paste the following URL into the text box: "'http://localhost/restapi-php-template/res"', then click Send. It must respond with the phrase 'Hello World.'
![Response](https://tapinac-shs.info/assets/restapi/database-6.PNG)

---
Prepared by

**Simon Gerard Granil** | Gordon College - College of Computer Studies