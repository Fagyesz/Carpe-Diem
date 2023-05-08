describe('Create a new event', () => {

    it('Login auth', () => {
        cy.refreshDatabase().seed();

        cy.visit('/');
        cy.get('[href="/profile"]').click();
        cy.contains('Email');
        
    });

    it('Is empty: All fields', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/profile/edit');

      cy.get(':nth-child(4) > .border').clear();
      cy.get(':nth-child(5) > .border').clear();
      cy.get(':nth-child(6) > .border').clear();
      cy.get(':nth-child(7) > .border').clear();
      cy.get(':nth-child(8) > .border').clear();
      cy.get(':nth-child(9) > .border').clear();
      cy.get(':nth-child(10) > .border').clear();
      cy.get(':nth-child(12) > .border').clear();

      cy.contains('button', 'Edit profile').click();
      cy.contains('The username field is required.');
      cy.contains('The name field is required.');
      cy.contains('The email field is required.');

       
   });

   it('Is empty: Username', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/profile/edit');

      cy.get(':nth-child(4) > .border').clear();

      cy.contains('button', 'Edit profile').click();
      cy.contains('The username field is required.');

       
   });

   it('Is empty: Name', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/profile/edit');

      cy.get(':nth-child(5) > .border').clear();

      cy.contains('button', 'Edit profile').click();
      cy.contains('The name field is required.');

       
   });

   it('Is empty: Email', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/profile/edit');

      cy.get(':nth-child(6) > .border').clear();

      cy.contains('button', 'Edit profile').click();
      cy.contains('The email field is required.');

       
   });

   it('Wrong format: Email', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/profile/edit');

      cy.get(':nth-child(6) > .border').clear();
      cy.get(':nth-child(6) > .border').type('test');

      cy.contains('button', 'Edit profile').click();
      cy.contains('The email field must be a valid email address.');

       
   });

   it('Wrong format: Phone', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/profile/edit');

      cy.get(':nth-child(8) > .border').clear();
      cy.get(':nth-child(8) > .border').type('1234');

      cy.contains('button', 'Edit profile').click();
      cy.contains('The phone field format is invalid.');

       
   });

   it('Wrong format: Country', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/profile/edit');

      cy.get(':nth-child(9) > .border').clear();
      cy.get(':nth-child(9) > .border').type('1234');

      cy.contains('button', 'Edit profile').click();
      cy.contains('The country field format is invalid.');

       
   });

   it('Wrong format: Name', () => {

      cy.login({ username: 'TestElek' });
      cy.visit('/profile/edit');

      cy.get(':nth-child(5) > .border').clear();
      cy.get(':nth-child(5) > .border').type('1234');

      cy.contains('button', 'Edit profile').click();
      cy.contains('The name field format is invalid.');

       
   });




});