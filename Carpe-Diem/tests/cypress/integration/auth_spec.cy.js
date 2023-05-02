describe('authentication', () => {
    it('provides feedback for empty user registration fields', () => {
        cy.refreshDatabase().seed();

        cy.visit('/register');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please fill out this field.');
         })


        
    });

    it('provides feedback for empty full name field', () => {

        cy.visit('/register');
        cy.get('#username').type('test');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test1234');
        cy.get('#password_confirmation').type('test1234');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please fill out this field.');
         })


        
    });

    it('provides feedback for empty nickname field', () => {

        cy.visit('/register');
        cy.get('#name').type('Test Elek');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test1234');
        cy.get('#password_confirmation').type('test1234');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please fill out this field.');
         })


        
    });

    it('provides feedback for empty email address field', () => {

        cy.visit('/register');
        cy.get('#name').type('Test Elek');
        cy.get('#username').type('test');
        cy.get('#password').type('test1234');
        cy.get('#password_confirmation').type('test1234');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please fill out this field.');
         })


        
    });

    it('provides feedback for empty password field', () => {

        cy.visit('/register');
        cy.get('#name').type('Test Elek');
        cy.get('#username').type('test');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password_confirmation').type('test1234');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please fill out this field.');
         })


        
    });

    it('provides feedback for empty password verification field', () => {

        cy.visit('/register');
        cy.get('#name').type('Test Elek');
        cy.get('#username').type('test');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test1234');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please fill out this field.');
         })


        
    });

    it('provides feedback for not matching passwords', () => {

        cy.visit('/register');
        cy.get('#name').type('Test Elek');
        cy.get('#username').type('test');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test1234');
        cy.get('#password_confirmation').type('12345678987654321');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('The password field confirmation does not match.');
         })
        
    });

    it('provides feedback for already existing email address', () => {
        cy.create('App\\Models\\User', { email: 'test@gmail.com' });

        cy.visit('/register');
        cy.get('#name').type('Test Elek');
        cy.get('#username').type('test');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test1234');
        cy.get('#password_confirmation').type('test1234');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('The email has already been taken.');
         })
        
    });





    it('provides feedback for succesfull user registration', () => {

        cy.refreshDatabase().seed();
        
        cy.visit('/register');
        cy.get('#name').type('Test Elek');
        cy.get('#username').type('test');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test1234');
        cy.get('#password_confirmation').type('test1234');
        cy.get('.bg-green-500').click();

        cy.contains('button', 'Logout').click();
        
    });




    it('provides feedback for invalid login credentials', () => {
        
        

        cy.visit('/login');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test0000');
        cy.get('.bg-green-500').click();
        cy.contains('These credentials do not match our records.');

    });

    it('provides feedback for valid login credentials', () => {

        cy.visit('/login');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test1234');
        cy.get('.bg-green-500').click();
        

    }); 
});