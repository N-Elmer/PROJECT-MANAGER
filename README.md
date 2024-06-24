# PROJECT MANAGER
PROJECT 🏗 MANAGEMET 🚧 SYSTEM

Project Manager is a web application for managing various administrative tasks. It provides functionalities for inserting, updating, and deleting records across different categories. The system is designed using the LAMP stack (Linux, Apache, MySQL and PHP).

## Folder Structure

```
📂 PROJECT-MANAGER
│
├── 📄 README.md
├── 📄 About.css
├── 📄 About.html
├── 📄 AdminDashboard.php
├── 📄 AdminDeleteFunction.php
├── 📄 AdminInsertFunction.php
├── 📄 AdminUpdateFunction.php
├── 📄 AnticDeleteFunction.php
├── 📄 AnticInsertFunction.php
├── 📄 AnticUpdateFunction.php
├── 📄 ArtDeleteFunction.php
├── 📄 ArtInsertFunction.php
├── 📄 ArtUpdateFunction.php
├── 📄 CampostDeleteFunction.php
├── 📄 CampostInsertFunction.php
├── 📄 CampostUpdateFunction.php
├── 📄 CamtelDeleteFunction.php
├── 📄 CamtelInsertFunction.php
├── 📄 CamtelUpdateFunction.php
├── 📄 Contact.css
├── 📄 Contact.html
├── 📂 CssStyles
│   └── 📄 stylesheet.css
├── 📂 Database
│   └── 📄 minpostel.sql
├── 📄 DatabaseTableConnection.php
├── 📄 Footer.php
├── 📄 Header.php
├── 📄 Home.css
├── 📄 Home.html
├── 📂 images
│   ├── 📄 1055-Converted.jpg
│   ├── 📄 b4f60df5-647e-b99f-a687-ec47c26aa869.jpg
│   ├── 📄 dfsfdsf.jpg
│   ├── 📄 favicon.jpg
│   ├── 📄 gffgfg-min.jpg
│   ├── 📄 MINPOSTELLOGO.jpg
│   └── 📄 xsx.jpg
├── 📄 index.html
├── 📄 jquery.js
├── 📄 Login.php
├── 📄 Logout.php
├── 📄 nicepage.css
├── 📄 nicepage.js
├── 📄 SuptticDeleteFunction.php
├── 📄 SuptticInsertFunction.php
├── 📄 SuptticUpdateFunction.php
├── 📄 UserDashboard.php
├── 📄 UserDeleteFunction.php
├── 📄 UserInsertFunction.php
├── 📄 UserUpdateFunction.php
└── 📄 Validation.php
```

The project folder structure consists of the following files and folders:

- **📄 README.md**: This file contains the documentation and information about the Project Manager application, including how to use it and any additional details.

- **📄 About.css**: CSS styles for the About page.

- **📄 About.html**: HTML content for the About page.

- **📄 AdminDashboard.php**: PHP script for the Admin Dashboard.

- **📄 AdminDeleteFunction.php**: PHP function to handle admin deletion operations.

- **📄 AdminInsertFunction.php**: PHP function to handle admin insertion operations.

- **📄 AdminUpdateFunction.php**: PHP function to handle admin update operations.

- **📄 AnticDeleteFunction.php**: PHP function to handle deletion operations for "Antic".

- **📄 AnticInsertFunction.php**: PHP function to handle insertion operations for "Antic".

- **📄 AnticUpdateFunction.php**: PHP function to handle update operations for "Antic".

- **📄 ArtDeleteFunction.php**: PHP function to handle deletion operations for "Art".

- **📄 ArtInsertFunction.php**: PHP function to handle insertion operations for "Art".

- **📄 ArtUpdateFunction.php**: PHP function to handle update operations for "Art".

- **📄 CampostDeleteFunction.php**: PHP function to handle deletion operations for "Campost".

- **📄 CampostInsertFunction.php**: PHP function to handle insertion operations for "Campost".

- **📄 CampostUpdateFunction.php**: PHP function to handle update operations for "Campost".

- **📄 CamtelDeleteFunction.php**: PHP function to handle deletion operations for "Camtel".

- **📄 CamtelInsertFunction.php**: PHP function to handle insertion operations for "Camtel".

- **📄 CamtelUpdateFunction.php**: PHP function to handle update operations for "Camtel".

- **📄 Contact.css**: CSS styles for the Contact page.

- **📄 Contact.html**: HTML content for the Contact page.

- **📂 CssStyles**: Folder containing stylesheets.
  - **📄 stylesheet.css**: Main stylesheet for the project.

- **📂 Database**: Folder containing database-related files.
  - **📄 minpostel.sql**: SQL script to set up the database schema.

- **📄 DatabaseTableConnection.php**: PHP script for database connection.

- **📄 Footer.php**: PHP script for the footer of the web pages.

- **📄 Header.php**: PHP script for the header of the web pages.

- **📄 Home.css**: CSS styles for the Home page.

- **📄 Home.html**: HTML content for the Home page.

- **📂 images**: Folder containing image assets.
  - **📄 1055-Converted.jpg**: Image file.
  - **📄 b4f60df5-647e-b99f-a687-ec47c26aa869.jpg**: Image file.
  - **📄 dfsfdsf.jpg**: Image file.
  - **📄 favicon.jpg**: Favicon image file.
  - **📄 gffgfg-min.jpg**: Image file.
  - **📄 MINPOSTELLOGO.jpg**: Image file.
  - **📄 xsx.jpg**: Image file.

- **📄 index.html**: Main HTML file for the project.

- **📄 jquery.js**: jQuery library file.

- **📄 Login.php**: PHP script for handling user login.

- **📄 Logout.php**: PHP script for handling user logout.

- **📄 nicepage.css**: CSS styles for Nicepage template.

- **📄 nicepage.js**: JavaScript file for Nicepage template.

- **📄 SuptticDeleteFunction.php**: PHP function to handle deletion operations for "Supttic".

- **📄 SuptticInsertFunction.php**: PHP function to handle insertion operations for "Supttic".

- **📄 SuptticUpdateFunction.php**: PHP function to handle update operations for "Supttic".

- **📄 UserDashboard.php**: PHP script for the User Dashboard.

- **📄 UserDeleteFunction.php**: PHP function to handle user deletion operations.

- **📄 UserInsertFunction.php**: PHP function to handle user insertion operations.

- **📄 UserUpdateFunction.php**: PHP function to handle user update operations.

- **📄 Validation.php**: PHP script for input validation.

## Usage

To use the Project Manager web application, follow these steps:

1. **Clone or download this project repository.**

2. **Set up the database:**

   - Import the SQL script to set up the database schema.

     ```sql
     source Database/minpostel.sql;
     ```

3. **Configure the web server:**

   - Ensure Apache is running and properly configured to serve PHP files.

4. **Deploy the files:**

   - Place the project files in the appropriate directory for your web server (e.g., `/htdocs/` for Apache on Linux).

5. **Access the application:**

   - Open a web browser and navigate to the domain or IP address where the application is hosted.

## Code Explanation

The Project Manager web application is implemented using PHP for the backend, with MySQL for the database and jQuery for frontend interactions. Here's a breakdown of the different components:

- **PHP**: Handles server-side logic and database interactions. Scripts for various CRUD operations are located in the root directory.

- **MySQL**: The database is set up using the `minpostel.sql` script located in the `Database` folder.

- **CSS**: Styles for the application are defined in various CSS files such as `Home.css`, `Contact.css`, and `nicepage.css`.

- **JavaScript (jQuery)**: The `jquery.js` file is included for frontend interactions.

## Troubleshooting

If you encounter any issues or errors while using the Project Manager web application, consider the following:

- Double-check that all the necessary files and folders are present in the correct locations, as described in the folder structure section.

- Ensure that Apache and MySQL are installed and running on your system.

- Verify the database connection settings in the `DatabaseTableConnection.php` file.

- Ensure that the `minpostel.sql` script has been properly imported into your MySQL database.

- If you encounter any issues with the backend, check for syntax errors in the PHP files and ensure that all required extensions are enabled in your PHP configuration.

If the problem persists, feel free to open an issue in the GitHub repository for further assistance.

---

This README file provides an overview of the Project Manager web application, its folder structure, usage instructions, code explanation, and troubleshooting tips. Use it as a guide to understand and utilize the Project Manager app.
