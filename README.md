### Graduation project in Management Information Systems

# Project Overview

**MIS_Project** is a graduation project developed as part of the Management Information Systems program. This project demonstrates the integration of frontend and backend technologies to create a comprehensive information management system.

- **Repository**: [Ahmed9030/MIS_Project](https://github.com/Ahmed9030/MIS_Project)
- **Created**: September 10, 2023
- **License**: Open Source

# Prerequisites
- Python 3.x
- PostgreSQL
- pip

## 🎯 Project Goals

The MIS Project aims to develop a web-based system for managing information effectively. This system will help users streamline their workflow, improve data management, and enhance productivity.

## ✨ Features

- User authentication and authorization
- Data analytics dashboard
- Role-based access controls
- Responsive and modern design
- Easy-to-use interface
- Real-time data processing
- Comprehensive reporting capabilities

## 🛠️ Technology Stack

This project uses a diverse range of technologies:

| Technology | Usage | Percentage |
|-----------|-------|-----------|
| **CSS** | Styling & Layout | 35.5% |
| **PHP** | Backend Logic | 21.0% |
| **HTML** | Markup & Structure | 18.6% |
| **JavaScript** | Client-side Interactivity | 12.8% |
| **SCSS** | Advanced Styling | 5.4% |
| **Less** | CSS Preprocessing | 5.2% |

### Key Components

- **Frontend**: HTML, CSS, SCSS, Less, JavaScript
- **Backend**: PHP
- **Architecture**: Web-based MIS application
- **Database**: MySQL/MariaDB (if applicable)

# Project Structure
```
MIS_Project/
├── index.php                    # Main entry point
├── .env.example                 # Environment variables example
├── .gitignore                   # Git ignore rules
├── README.md                    # Project documentation
├── package.json                 # Node.js dependencies
├── composer.json                # PHP dependencies (if applicable)
│
├── css/                         # Stylesheet files
│   ├── style.css               # Main styles
│   ├── style.scss              # SCSS sources
│   └── style.less              # Less sources
│
├── js/                          # JavaScript files
│   ├── main.js                 # Main application logic
│   ├── utils.js                # Utility functions
│   └── vendor/                 # Third-party libraries
│
├── assets/                      # Images and static files
│   ├── images/
│   ├── fonts/
│   └── icons/
│
├── includes/                    # PHP includes and reusable code
│   ├── header.php              # Common header
│   ├── footer.php              # Common footer
│   ├── config.php              # Configuration file
│   └── functions.php           # Helper functions
│
├── database/                    # Database files
│   └── schema.sql              # Database schema
│
├── uploads/                     # User uploaded files
│   └── .gitkeep
│
├── logs/                        # Application logs
│   └── .gitkeep
│
└── vendor/                      # Third-party dependencies
```
## 📦 Prerequisites

Before setting up the project, ensure you have the following installed:

- **Web Server**: Apache or Nginx
- **PHP**: Version 7.4 or higher
- **Node.js**: (Optional) For CSS preprocessing tools
- **npm**: (Optional) For managing frontend dependencies
- **Git**: For cloning the repository
- **MySQL/MariaDB**: (Optional) For database management
- A modern web browser (Chrome, Firefox, Safari, Edge)

  ```bash
git clone https://github.com/Ahmed9030/MIS_Project.git
cd MIS_Project

## Step 2: Environment Setup
# Option A: Using Apache (XAMPP/WAMP)
# For Windows (XAMPP):
   ```bash
   # Copy the project to your XAMPP directory
   # C:\xampp\htdocs\MIS_Project
   ```
# For Windows (WAMP):
   ```bash
   # Copy to C:\wamp\www\MIS_Project
   Option B: Using PHP Built-in Server
   ```
   ```bash
   cd MIS_Project
   php -S localhost:8000
```
## Step 3: Install Dependencies
   ```bash
   # Install Node.js dependencies (if package.json exists)
   npm install
   # Compile SCSS/Less files (if applicable)
   npm run build
   ```
## Step 4: Database Setup
If the project uses a database:

   ```bash
   # Import database file
   mysql -u username -p database_name < database.sql
   
   # Or use phpMyAdmin if available
   # 1. Create a new database in phpMyAdmin
   # 2. Import the SQL file
   ```
## Step 5: Configuration
Create a .env file in the project root:

   ```bash
   # Copy example environment file
   cp .env.example .env
   ```
Update the .env file with your configuration:

```env
   # Database Configuration
   DB_HOST=localhost
   DB_USER=root
   DB_PASSWORD=your_password
   DB_NAME=mis_project

   # Server Configuration
   APP_URL=http://localhost:8000
   APP_ENV=development
   APP_DEBUG=true

   # Additional Settings
   TIMEZONE=UTC
   ```

## Step 6: Set File Permissions
For Linux/Mac:

   ```bash
   chmod -R 755 ./
   chmod -R 777 uploads/    # or whichever directory needs write access
   chmod -R 777 logs/       # if logs directory exists
   ```
For Windows:
Right-click on the folder → Properties → Security → Edit permissions

## Step 7: Access the Application
Once setup is complete:

- Local Development (PHP Server): http://localhost:8000
- Local Development (Web Server): http://localhost/MIS_Project
- Production: Deploy to your hosting server

## 🔧 Configuration
Database Configuration
Update your database credentials in includes/config.php:

```PHP
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'mis_project');
?>
```

# Server Configuration
Apache (.htaccess):
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /MIS_Project/
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
</IfModule>
```

# Nginx (nginx.conf):

```Nginx
server {
    listen 80;
    server_name localhost;
    root /path/to/MIS_Project;
    index index.php;

    location ~ \.php$ {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

## ⚙️ Development Workflow
Running the Project Locally

Using PHP Built-in Server:
```bash
php -S localhost:8000
```
# Using Apache/Nginx:
- Configure your web server
- Access via http://localhost/MIS_Project

# Author Information
- Author: Ahmed9030
- Email: ag1386840@gmail.com
- LinkedIn: https://www.linkedin.com/in/ahmed-gomaa99/
     Thank You For Reading ❤️
