describe('Edit an existing event', () => {

    it('Login auth', () => {
        cy.refreshDatabase().seed();

        cy.visit('/');
        cy.get('.fixed > .absolute').click();
        cy.contains('Email');
        
    });

    it('Succesfull event creation', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/new_event');

      cy.get('form > :nth-child(2) > .border').type('Test event name');
      cy.get(':nth-child(3) > .border').type('Test location');
      cy.get(':nth-child(4) > .border').type('15.99');
      cy.get(':nth-child(5) > .border').type('20');
      cy.get(':nth-child(7) > .border').type('Test description');
      cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');
      cy.get(':nth-child(9) > .border').type('2023-05-02T20:30');

      cy.contains('button', 'Create the event').click();
      cy.contains('Event created succesfully!');
       
   });

   it('Is empty: All fields', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(3) > .border').clear();
      cy.get(':nth-child(4) > .border').clear();
      cy.get(':nth-child(5) > .border').clear();
      cy.get(':nth-child(6) > .border').clear();
      cy.get(':nth-child(8) > .border').clear();
      cy.get(':nth-child(9) > .border').clear();
      cy.get(':nth-child(10) > .border').clear();
      cy.contains('button', 'Edit the event').click();

      cy.contains('The title field is required.');
      cy.contains('The location field is required.');
      cy.contains('The ticket price field is required.');
      cy.contains('The tickets available field is required.');
      cy.contains('The description field is required.');
      cy.contains('The start time field is required.');
      cy.contains('The end time field is required.');

       
   });

   it('Is empty: Event name', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(3) > .border').clear();
      cy.contains('button', 'Edit the event').click();

      cy.contains('The title field is required.');
       
   });

   it('Is empty: Location', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();


      cy.get(':nth-child(4) > .border').clear();
      cy.contains('button', 'Edit the event').click();

      cy.contains('The location field is required.');

       
   });

   it('Is empty: Ticket price', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();


      cy.get(':nth-child(5) > .border').clear();
      cy.contains('button', 'Edit the event').click();

      cy.contains('The ticket price field is required.');
       
   });

   it('Is empty: Ticket quantity', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(6) > .border').clear();
      cy.contains('button', 'Edit the event').click();

      cy.contains('The tickets available field is required.');

       
   });

   it('Is empty: Description', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(8) > .border').clear();
      cy.contains('button', 'Edit the event').click();

      cy.contains('The description field is required.');
       
   });

   it('Is empty: Start time', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(9) > .border').clear();
      cy.contains('button', 'Edit the event').click();

      cy.contains('The start time field is required.');
 
   });

   it('Is empty: End time', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(10) > .border').clear();
      cy.contains('button', 'Edit the event').click();

      cy.contains('The end time field is required.');

       
   });

   it('Incorrect input type: Ticket price', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(5) > .border').type('wrong');
      cy.contains('button', 'Edit the event').click();

      cy.contains('The ticket price field must have 0-2 decimal places.');

       
   });

   it('Incorrect input type: Ticket quantity', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(6) > .border').clear();
      cy.get(':nth-child(6) > .border').type('wrong');
      cy.contains('button', 'Edit the event').click();

      cy.contains('The tickets available field must be an integer.');

       
   });

   it('Incorrect input type: Ticket quantity in decimal', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();
      cy.get(':nth-child(6) > .border').clear();
      cy.get(':nth-child(6) > .border').type('11.4');
      cy.contains('button', 'Edit the event').click();

      cy.contains('The tickets available field must be an integer.');

       
   });

   it('Incorrect input type: Negative ticket price', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(5) > .border').clear();
      cy.get(':nth-child(5) > .border').type('-12');
      cy.contains('button', 'Edit the event').click();

      cy.contains('Ticket price can not be 0 or negative!');

       
   });

   it('Incorrect input type: Negative ticket quantity', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(6) > .border').clear();
      cy.get(':nth-child(6) > .border').type('-12');
      cy.contains('button', 'Edit the event').click();

      cy.contains('Available tickets can not be 0 or negative!');

       
   });

   it('Incorrect date time: Ending time before Starting time', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(9) > .border').clear();
      cy.get(':nth-child(10) > .border').clear();
      cy.get(':nth-child(9) > .border').type('2023-12-02T10:15');
      cy.get(':nth-child(10) > .border').type('2023-12-01T12:00');
      cy.contains('button', 'Edit the event').click();

      cy.contains('End time can not be earlier, then the Start time!');

       
   });
   

   it('Succesfull: Edit', () => {
      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');
      cy.get('.flex > .fa-solid').click();

      cy.get(':nth-child(3) > .border').clear();
      cy.get(':nth-child(4) > .border').clear();
      cy.get(':nth-child(5) > .border').clear();
      cy.get(':nth-child(6) > .border').clear();
      cy.get(':nth-child(8) > .border').clear();
      cy.get(':nth-child(9) > .border').clear();
      cy.get(':nth-child(10) > .border').clear();


      cy.get(':nth-child(3) > .border').type('Edited Event Name');
      cy.get(':nth-child(4) > .border').type('Edited Location');
      cy.get(':nth-child(5) > .border').type('99.99');
      cy.get(':nth-child(6) > .border').type('999');
      cy.get(':nth-child(8) > .border').type('Edited description');
      cy.get(':nth-child(9) > .border').type('2023-12-02T10:15');
      cy.get(':nth-child(10) > .border').type('2023-12-03T12:00');
      cy.contains('button', 'Edit the event').click();

      cy.contains('Event updated succesfully!');

      cy.get('.fa-solid').click();
      cy.wait(7000);

   });

});

describe('Delete an existing event', () => {

   it('Delete an event', () => {
      cy.login({ username: 'TestElek' });
      cy.visit('/events/11');

      cy.get('.text-red-500 > .fa-solid').click();
      cy.contains('Event deleted succesfully!');
   });
});