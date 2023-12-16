# CakePHP 4 Students CRUD Web App

This is a simple CRUD (Create, Read, Update, Delete) web app built using CakePHP 4, designed to manage student records.

 <h3 style="text-align:center">list page</h3>

 <p align="center"><a h target="_blank"><img src="https://github.com/MogahidGaffar/CakePhp_ToDo_App/blob/main/webroot/screenshots/index%20page.PNG" height="300" width="450" ></a></p></br>

 <h3 style="text-align:center">Add page</h3>

 <p align="center"><a h target="_blank"><img src="https://github.com/MogahidGaffar/CakePhp_ToDo_App/blob/main/webroot/screenshots/add%20page.PNG" height="300" width="450" ></a></p></br>

 <h3 style="text-align:center">Edit page</h3>

 <p align="center"><a h target="_blank"><img src="https://github.com/MogahidGaffar/CakePhp_ToDo_App/blob/main/webroot/screenshots/edit%20page.PNG" height="300" width="450" ></a></p></br>

 <h3 style="text-align:center">Delete</h3>

 <p align="center"><a h target="_blank"><img src="https://github.com/MogahidGaffar/CakePhp_ToDo_App/blob/main/webroot/screenshots/delete.PNG" height="300" width="450" ></a></p></br>


## Features

- **Student Management**: Perform CRUD operations on student records.
- **Responsive Design**: Interface optimized for various devices.

## Installation

### Requirements

- PHP (>= 7.2.0)
- Composer
- MySQL or other compatible database

### Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/MogahidGaffar/CakePhp_ToDo_App
   ```

2. **Install Dependencies**
  ```bash
    composer install 
```

3. **Database Configuration**
Rename config/app.default.php to config/app.php.
Configure your database connection in config/app.php:
 ```bash
'Datasources' => [
    'default' => [
        'host' => 'localhost',
        'username' => 'your_username',
        'password' => 'your_password',
        'database' => 'your_database',
        // Other settings
    ],
],
```
4. **Run Migrations**
  ```bash
bin/cake migrations migrate
```

5. **Start the Server**
  ```bash
bin/cake server -p 8765
```

Access the app at http://localhost:8765


### Usage
- Log in as an administrator.
- View the list of students.
- Add new students with their details.
- Update existing student records.
- Delete students from the database.

### Contributing
Contributions are welcome! Fork this repository, make changes, and submit a pull request.

### License
This project is licensed under the MIT License.









