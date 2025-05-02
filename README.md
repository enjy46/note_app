# Note App (PHP + MySQL)

A simple **Note-Taking** application built with **PHP** and **MySQL**. This app allows users to register, log in, and create, view, and delete notes. It's a great starting point for learning about PHP, MySQL, and user authentication.

## Features

- **User Authentication** (Login/Registration)
- **Create, View, Edit, and Delete Notes**
- **MySQL Database** for storing users and notes
- Simple and clean user interface with basic styling

## How to Run the App

### 1. Clone the Repository

Clone this repository to your local machine by running:

```bash
git clone https://github.com/enjy46/note_app.git
````

### 2. Set Up the Database

To set up the database for the app:

1. **Open phpMyAdmin**:

   * Go to: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)

2. **Create a new database**:

   * Click "New" in the sidebar.
   * Name the database `note_app` and click **Create**.

3. **Import the SQL file**:

   * Click on the **Import** tab.
   * Choose the `note_app.sql` file (provided in the repository).
   * Click **Go** to create the tables and set up the database.

### 3. Set Up the Project

Place the `note_app` folder inside your XAMPP `htdocs` (or equivalent) directory.

Open your browser and go to:

* [http://localhost/note\_app/register.php](http://localhost/note_app/register.php) to register a new user and start using the app.

## Technologies Used

* **PHP** for server-side scripting
* **MySQL** for database management
* **HTML & CSS** for the front-end design
* **XAMPP** (or any LAMP/WAMP stack) for local development environment

