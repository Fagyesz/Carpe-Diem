describe('Registration form authentication', () => {

    it('Login auth', () => {
        cy.refreshDatabase().seed();

        cy.visit('/contact');
        cy.contains('Email');
        
    });

    it('Is empty: Message', () => {
        cy.login();

        cy.visit('/contact');

        cy.get(':nth-child(2) > .border').clear();
        cy.contains('button', 'Send message').click();
        cy.contains('The message field is required.');
        
    });

    it('Succesfull: Message send', () => {
        cy.login();

        cy.visit('/contact');

        cy.get(':nth-child(2) > .border').clear();
        cy.get(':nth-child(2) > .border').type('This is a test message!');

        cy.contains('button', 'Send message').click();
        cy.contains('Email sent succesfully!');
        
    });


        

});

