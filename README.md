# 🛒 SuperMarketApp

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/datpham0412/SuperMarketApp/blob/main/LICENSE)
[![GitHub issues](https://img.shields.io/github/issues/datpham0412/SuperMarketApp)](https://github.com/datpham0412/SuperMarketApp/issues)
[![GitHub stars](https://img.shields.io/github/stars/datpham0412/SuperMarketApp)](https://github.com/datpham0412/SuperMarketApp/stargazers)
[![GitHub forks](https://img.shields.io/github/forks/datpham0412/SuperMarketApp)](https://github.com/datpham0412/SuperMarketApp/network/members)

## 📋 Project Description
The **SuperMarketApp** is a web-based application designed to manage supermarket operations such as user authentication, inventory management, order processing, and sales tracking. It is built using PHP and MySQL, providing a robust and scalable solution for small to medium-sized supermarkets.

## 🛠 Technologies Used
- **PHP**: Server-side scripting.
- **MySQL**: Database management.
- **HTML/CSS**: Front-end structure and styling.
- **JavaScript**: Client-side scripting.
- **jQuery**: JavaScript library for simplified scripting.

## 📚 Features
- User authentication and session management.
- Inventory management for products.
- Order processing and tracking.
- Sales records and reporting.
- User-friendly interface with responsive design.

## 🚀 Installation and Running the Project
### Prerequisites
- Install [XAMPP](https://www.apachefriends.org/index.html) for an easy Apache distribution containing MySQL, PHP, and Perl.

### Steps
1. **Install XAMPP**:
    - Download and install XAMPP from the [official website](https://www.apachefriends.org/index.html).
    - During installation, choose the components you need (make sure Apache and MySQL are selected).

2. **Change Ports for Apache (if necessary)**:
    - If Apache cannot start, it may be due to port conflicts.
    - Open `XAMPP Control Panel`, click `Config` next to Apache, and open `httpd.conf`.
    - Change the `Listen` port from `80` to `8080`:
      ```apache
      Listen 8080
      ```
    - Open `httpd-ssl.conf` and change the `Listen` port from `443` to `8443`:
      ```apache
      Listen 8443
      ```

3. **Clone the Repository**:
    ```sh
    git clone https://github.com/datpham0412/SuperMarketApp.git
    cd SuperMarketApp
    ```

4. **Move Project to XAMPP htdocs**:
    - Move the `SuperMarketApp` folder to the `C:\xampp\htdocs` directory.

5. **Import Database into phpMyAdmin**:
    - Start Apache and MySQL from the XAMPP Control Panel.
    - Open your web browser and go to `http://localhost/phpmyadmin`.
    - Create a new database named `market_database`.
    - Import the `database.sql` file into the `market_database`.

6. **Configure Database Connection**:
    - Ensure the database connection settings in `db_connection.php` are correct:
      ```php
      <?php 
      function openConnection() {
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "market_database";

          $connection = new mysqli($servername, $username, $password, $dbname);

          if ($connection->connect_error) {
              die("Connection failed: " . $connection->connect_error);
          }

          return $connection;
      }

      function closeConnection($connection) {
          $connection->close();
      }
      ?>
      ```

7. **Launch the Application**:
    - Open your web browser and navigate to `http://localhost:8080/SuperMarketApp/login.php`.

## 📜 License
This project is licensed under the MIT License - see the [LICENSE](https://github.com/datpham0412/SuperMarketApp/blob/main/LICENSE) file for details.

## 📞 Contact
For any inquiries, please contact [tiendat041202@gmail.com](mailto:tiendat041202@gmail.com).

---

Made with ❤️ by [Dat Pham](https://github.com/datpham0412)
