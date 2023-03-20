# Event Management System

This project is an event management system that allows users to purchase tickets for events and scan a QR code for verification at the event. It includes a user interface for purchasing tickets, a database for storing event and ticket information, and integration with a third-party QR code scanning API.

## Contributors

* [Vincze Flórián](https://github.com/Fagyesz)
* [Katona Bálint](https://github.com/katonaBalintSandor)
* [Ádám Bence](https://github.com/Lisense05)
* [Tóth Tamás](https://github.com/C901EE)

## Getting Started with Laravel environment 
This guide will walk you through the steps to set up a development environment for Laravel, a PHP web application framework.
### Prerequisites
Before you can start contributing to the project, make sure you have the following prerequisites installed on your system:

 - PHP >= 7.3.0
 - Composer
 - Xampp

 ### Installation
 1. Clone the repository and navigate to the project root directory.
 ```bash
 git clone https://github.com/Fagyesz/Carpe-Diem.git
 cd project
 ```
 2. Install the required dependencies using composer.
 ```bash
 composer install
 ```
 3. Copy the .env.example file to .env and update the necessary database credentials.
 ```bash
cp .env.example .env
 ```
 4. Generate a new application key.
 ```bash
 php artisan key:generate
 ```
 5. Run database migrations and seed the database with sample data.
 ```php
 php artisan migrate --seed
 ```
 6. Start the development server.
 ```php
 php artisan serve or npm start
 ```
 7. Visit the application in your web browser at **http://localhost:8000**.

## Contributing
We welcome contributions from the community. To get started, follow these steps:

1. Fork the repository
2. Create a new branch for your changes: **git checkout -b [branch name]**
3. Make your changes
4. Commit your changes: **git commit -m "Your commit message"**
5. Push your changes to your forked repository: **git push origin [branch name]**
6. Create a pull request from your forked repository to the main repository
7. Code of Conduct
8. We expect all contributors to follow our Code of Conduct.

## License

This project is licensed under the **MIT License** - see the **LICENSE** file for details.

Note: This project is free for academic use only. For commercial use, please contact the project owner for licensing information.

## Contact Us
If you have any questions or feedback, please reach out to us at **vinczef.o@gmail.com** . We're happy to hear from you!

## Issues
If you encounter any issues with the project, please report them on the Issues page. Only a maximum of 4 contributors are allowed to join this project.

Feel free to update the README file with any additional information about your project that you would like to include.

