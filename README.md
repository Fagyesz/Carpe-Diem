# Supported by CAN ("Code Anything Now")

Here's an overview of what we'll need to do:

    Set up Laravel project
    Create database schema and models for users, events, tickets, and transactions
    Create controllers and views for the ticket purchasing flow
    Generate a unique QR code for each purchased ticket and store it in the database
    Create a QR code scanner to verify the ticket at the event
    Use Google Calendar API to create events in the user's Google calendar upon ticket purchase
    
The next step would be to set up a Laravel project and create the database schema and models. Here's how you can set up a new Laravel project:

    Install Composer if you haven't already: https://getcomposer.org/

    Open a terminal window and navigate to the directory where you want to create the project

    Run the following command to create a new Laravel project:
    
    composer create-project --prefer-dist laravel/laravel your-project-name
    
    Replace "your-project-name" with the name you want to give your project.
    
Once you have created the project, we'll need to create the database schema and models. Here's an example schema for the tables we'll need:
users
- id (primary key)
- name
- email
- password

events
- id (primary key)
- name
- description
- date
- time
- location

tickets
- id (primary key)
- event_id (foreign key to events table)
- qr_code
- is_valid (default to false)

transactions
- id (primary key)
- user_id (foreign key to users table)
- ticket_id (foreign key to tickets table)
