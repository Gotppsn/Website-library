# Library Management System

This project is a **Library Management System** built with PHP and MySQL. It allows for management of library resources, including books, staff, students, and user accounts. The system also supports booking, editing, inserting, and deleting records related to books, staff, and students.
![image](https://github.com/user-attachments/assets/bc27dbcb-588d-4f6f-9908-5413df1e0535)


## Features

- **Book Management**: Insert, edit, delete, and find books in the library.
- **Staff Management**: Insert, edit, delete, and find staff members.
- **Student Management**: Insert, edit, delete, and find students.
- **Booking System**: Manage bookings for library resources.
- **User Authentication**: Secure login and user management.
- **Database Connectivity**: Efficiently connects to a MySQL database to manage records.

## Technologies Used

- **Backend**: PHP
- **Database**: MySQL
- **Frontend**: HTML, CSS, JavaScript (if used)
- **Authentication**: PHP Sessions

## Folder Structure

```bash
├── css/
│   └── # (CSS stylesheets for the project)
├── function/
│   ├── connect_db.php        # Database connection script
│   ├── delete_book.php       # Script to delete books
│   ├── delete_std.php        # Script to delete students
│   ├── delete_stf.php        # Script to delete staff
│   ├── edit_book.php         # Script to edit book details
│   ├── edit_std.php          # Script to edit student details
│   ├── edit_stf.php          # Script to edit staff details
│   ├── find_book.php         # Script to find books
│   ├── find_std.php          # Script to find students
│   ├── find_stf.php          # Script to find staff
│   ├── insert_book.php       # Script to insert new book entries
│   ├── insert_booked.php     # Script to insert booked entries
│   ├── insert_booking.php    # Script to handle new bookings
│   ├── insert_std.php        # Script to insert new students
│   ├── insert_stf.php        # Script to insert new staff
│   ├── insert_user.php       # Script to insert new user accounts
│   ├── login.php             # Login script for authentication
│   ├── user.php              # User management script
├── img/                      # (Image assets for the project)
├── js/                       # (JavaScript files, if any)
├── sql/                      # (SQL files for database setup)
├── index.php                 # Main entry point of the library system
├── register.php              # User registration page
├── staff.php                 # Staff management page
├── student.php               # Student management page
```

## Installation

Follow the steps below to set up and run this project on your local machine.

### Prerequisites

Ensure you have the following software installed:

- [XAMPP](https://www.apachefriends.org/index.html) (or any LAMP/WAMP/MAMP stack)
- A web browser (e.g., Chrome, Firefox)
- Git (optional, for version control)

### Steps to Install

1. **Clone the Repository** (Optional)

   If you are using Git, clone this repository by running the following command:

   ```bash
   git clone https://github.com/Gotppsn/Website-library.git
   ```

   Or download the ZIP file from GitHub and extract it to your server directory.

2. **Move Project to Web Server Directory**

   Move the project folder to your web server's root directory:

   - For XAMPP, move the folder to `C:/xampp/htdocs/library-system`.
   - For WAMP, move it to `C:/wamp/www/library-system`.

3. **Create a MySQL Database**

   - Open [phpMyAdmin](http://localhost/phpmyadmin).
   - Create a new database named `library_db`.
   - Import the provided SQL file (from the `sql/` folder) into your newly created database.

4. **Configure the Database Connection**

   Open the `function/connect_db.php` file and update the following credentials according to your MySQL setup:

   ```php
   <?php
   $servername = "localhost";
   $username = "root";      // Change if you're not using the default 'root' user
   $password = "";          // Change if you have a MySQL password
   $dbname = "library_db";  // Ensure this matches the database name you created
   ?>
   ```

5. **Start the Apache and MySQL Services**

   - Open the XAMPP (or WAMP/MAMP) control panel.
   - Start both the **Apache** and **MySQL** services.

6. **Access the Library System**

   Open your web browser and go to:

   ```url
   http://localhost/library-system/
   ```

   You should now be able to access the library system's features, including login, user management, and book/staff/student handling.

## Usage

- **Manage Books**: Use the admin panel to add, edit, delete, and search for books.
- **Manage Staff and Students**: Similarly, manage staff and students through the relevant pages.
- **Booking System**: Allow users to book library resources through the booking interface.

## Contributing

If you would like to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new feature branch (`git checkout -b feature-branch-name`).
3. Commit your changes (`git commit -m 'Add some feature'`).
4. Push to the branch (`git push origin feature-branch-name`).
5. Open a Pull Request.
