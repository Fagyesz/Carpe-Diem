describe('authentication', () => {
    it('provides feedback for invalid login credentials', () => {
        

        cy.visit('/login');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('testtest');
        cy.get('.bg-green-500').click();
        cy.contains('These credentials do not match our records.');

    });

    it('provides feedback for valid login credentials', () => {
        
        cy.create('App\\Models\\User', { email: 'logintest@gmail.com', 
                                        password: 'password'});

        cy.visit('/login');
        cy.get('#email').type('logintest@gmail.com');
        cy.get('#password').type('password');
        cy.get('.bg-green-500').click();
        

    });
});