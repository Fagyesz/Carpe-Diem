describe('Create a new event', () => {

    it('Login auth', () => {
        cy.refreshDatabase().seed();

        cy.visit('/');
        cy.get('.fixed > .absolute').click();
        cy.contains('Email');
        
    });

    it('Is empty: All fields', () => {

        cy.login({ username: 'TestElek' });
 
         cy.visit('/');
         cy.get('.fixed > .absolute').click();

         cy.contains('button', 'Create the event').click();
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
        cy.visit('/events/new_event');

        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(4) > .border').type('15.99');
        cy.get(':nth-child(5) > .border').type('20');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');
        cy.get(':nth-child(9) > .border').type('2023-05-02T20:00');

        cy.contains('button', 'Create the event').click();
        cy.contains('The title field is required.');
         
     });

     it('Is empty: Location', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(4) > .border').type('15.99');
        cy.get(':nth-child(5) > .border').type('20');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');
        cy.get(':nth-child(9) > .border').type('2023-05-02T20:00');

        cy.contains('button', 'Create the event').click();
        cy.contains('The location field is required.');
         
     });

     it('Is empty: Ticket price', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(5) > .border').type('20');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');
        cy.get(':nth-child(9) > .border').type('2023-05-02T20:00');

        cy.contains('button', 'Create the event').click();
        cy.contains('The ticket price field is required.');
         
     });

     it('Is empty: Ticket quantity', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(4) > .border').type('15.99');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');
        cy.get(':nth-child(9) > .border').type('2023-05-02T20:00');

        cy.contains('button', 'Create the event').click();
        cy.contains('The tickets available field is required.');
         
     });

     it('Is empty: Description', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(4) > .border').type('15.99');
        cy.get(':nth-child(5) > .border').type('20');
        cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');
        cy.get(':nth-child(9) > .border').type('2023-05-02T20:00');

        cy.contains('button', 'Create the event').click();
        cy.contains('The description field is required.');
         
     });

     it('Is empty: Starting time ', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(4) > .border').type('15.99');
        cy.get(':nth-child(5) > .border').type('20');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(9) > .border').type('2023-05-02T20:00');

        cy.contains('button', 'Create the event').click();
        cy.contains('The start time field is required.');
         
     });

     it('Is empty: Ending time', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(4) > .border').type('15.99');
        cy.get(':nth-child(5) > .border').type('20');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');

        cy.contains('button', 'Create the event').click();
        cy.contains('The end time field is required.');
         
     });

     it('Incorrect input type: Ticket price', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(4) > .border').type('wrong');
        cy.get(':nth-child(5) > .border').type('20');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');
        cy.get(':nth-child(9) > .border').type('2023-05-02T20:00');

        cy.contains('button', 'Create the event').click();
        cy.contains('The ticket price field must have 0-2 decimal places.');
         
     });

     it('Incorrect input type: Ticket quantity', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(4) > .border').type('15.99');
        cy.get(':nth-child(5) > .border').type('wrong');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');
        cy.get(':nth-child(9) > .border').type('2023-05-02T20:00');

        cy.contains('button', 'Create the event').click();
        cy.contains('The tickets available field must be an integer.');
         
     });

     it('Incorrect input type: Ticket quantity in decimal', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(4) > .border').type('15.99');
        cy.get(':nth-child(5) > .border').type('11.9');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');
        cy.get(':nth-child(9) > .border').type('2023-05-02T20:00');

        cy.contains('button', 'Create the event').click();
        cy.contains('The tickets available field must be an integer.');
         
     });

     it('Incorrect input type: Negative ticket price', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(4) > .border').type('-5');
        cy.get(':nth-child(5) > .border').type('20');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');
        cy.get(':nth-child(9) > .border').type('2023-05-02T20:00');

        cy.contains('button', 'Create the event').click();
        cy.contains('Ticket price can not be 0 or negative!');
         
     });

     it('Incorrect input type: Negative ticket quantity', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(4) > .border').type('15.99');
        cy.get(':nth-child(5) > .border').type('-5');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(8) > .border').type('2023-05-02T08:30');
        cy.get(':nth-child(9) > .border').type('2023-05-02T20:00');

        cy.contains('button', 'Create the event').click();
        cy.contains('Available tickets can not be 0 or negative!');
         
     });

     it('Incorrect date time: Ending time before Starting time', () => {

        cy.login({ username: 'TestElek' });
        cy.visit('/events/new_event');

        cy.get('form > :nth-child(2) > .border').type('Test event name');
        cy.get(':nth-child(3) > .border').type('Test location');
        cy.get(':nth-child(4) > .border').type('15.99');
        cy.get(':nth-child(5) > .border').type('-5');
        cy.get(':nth-child(7) > .border').type('Test description');
        cy.get(':nth-child(8) > .border').type('2023-05-02T20:00');
        cy.get(':nth-child(9) > .border').type('2023-05-02T08:30');

        cy.contains('button', 'Create the event').click();
        cy.contains('End time can not be earlier, then the Start time!');
         
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

        cy.wait(3000);
        cy.refreshDatabase().seed();
         
     });



});