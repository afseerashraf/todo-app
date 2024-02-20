Todo App

This is a simple todo app built using Laravel. The app allows users to create, view, update, and delete todo tasks.

Installation

1. Clone the repository to your local machine:
  git clone https://github.com/afseerashraf/todo-app.git

2. Navigate to the project directory:
  cd todo-app
3. Install composer dependencies:
   composer install

4. Copy the .env.example file to .env and configure your environment variables, including database settings.

5. Generate the application key:
    php artisan key:generate
   
6. Migrate the database to create tables:
   php artisan migrate

7. Start the development server:
   php artisan serve

Routes
GET /: Displays the login page.
POST /userLogedin: Handles user login.
GET /create: Displays the form to create a new todo task.
POST /todo: Handles creation of a new todo task.
GET /list: Displays a list of all todo tasks.
GET /delete/{id}: Deletes a todo task with the specified ID.
GET /logout: Logs out the user.

Usage
Visit the login page (/) to log in.
Once logged in, you can create, view, update, and delete todo tasks.
Use the "Create" button to add a new task.
Use the "Delete" button next to each task to remove it from the list.

Models
User: Represents a user of the application.
Todo: Represents a todo task created by a user.

Contributing
Contributions are welcome! If you find any bugs or have suggestions for improvements, please open an issue or submit a pull request.

License
This project is licensed under the MIT License - see the LICENSE file for details.
