describe('Registration form authentication', () => {
    it('Is empty: All fields', () => {
        cy.refreshDatabase().seed();

        cy.visit('/register');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please fill out this field.');
         })


        
    });

    it('Is empty: Full name', () => {

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

    it('Is empty: Nickname', () => {

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

    it('Is empty: Email address', () => {

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

    it('Is empty: Password', () => {

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

    it('Is empty: Password verification', () => {

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

    it('Wrong format: Passwords', () => {

        cy.visit('/register');
        cy.get('#name').type('Test Elek');
        cy.get('#username').type('test');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('1234');
        cy.get('#password_confirmation').type('1234');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('The password field must be at least 8 characters.');
         })
        
    });

    
    it('Wrong format: Full name', () => {

        cy.visit('/register');
        cy.get('#name').type('Test12 Elek');
        cy.get('#username').type('test');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test1234');
        cy.get('#password_confirmation').type('test1234');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('The name field format is invalid.');
         })
        
    });

    it('Wrong format: Email', () => {

        cy.visit('/register');
        cy.get('#name').type('Test Elek');
        cy.get('#username').type('test');
        cy.get('#email').type('test');
        cy.get('#password').type('test1234');
        cy.get('#password_confirmation').type('test1234');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please include an "@" in the email address. "test" is missing an "@".');
         })
        
    });

    it('Not matching: Passwords', () => {

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

    it('Already exists: Email address', () => {
        cy.refreshDatabase().seed();

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

    it('Already exists: Username', () => {
        cy.refreshDatabase().seed();

        cy.create('App\\Models\\User', { username: 'test' });
        cy.visit('/register');
        cy.get('#name').type('Test Elek');
        cy.get('#username').type('test');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test1234');
        cy.get('#password_confirmation').type('test1234');
        cy.contains('button', 'Register').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('The username has already been taken.');
         })
        
    });


    it('Succesfull: Registration', () => {

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
});

describe('Login form authentication', () => {

    it('Invalid: Login credentials', () => {
        
        

        cy.visit('/login');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test0000');
        cy.get('.bg-green-500').click();
        cy.contains('These credentials do not match our records.');

    });

    it('Is empty: All login credentials', () => {
        
        cy.visit('/login');
        cy.get('.bg-green-500').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please fill out this field.');
         })

    });

    it('Is empty: Login email', () => {
        
        cy.visit('/login');
        cy.get('#password').type('test0000');
        cy.get('.bg-green-500').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please fill out this field.');
         })

    });

    it('Is empty: Login password', () => {
        
        cy.visit('/login');
        cy.get('#email').type('test@gmail.com');
        cy.get('.bg-green-500').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please fill out this field.');
         })

    });

    it('Wrong format: Login email', () => {
        
        cy.visit('/login');
        cy.get('#email').type('test');
        cy.get('#password').type('test0000');
        cy.get('.bg-green-500').click();
        cy.on('window:alert',(txt)=>{
            expect(txt).to.contains('Please include an "@" in the email address. "test" is missing an "@".');
         })

    });

    it('Succesfull: Login', () => {

        cy.visit('/login');
        cy.get('#email').type('test@gmail.com');
        cy.get('#password').type('test1234');
        cy.get('.bg-green-500').click();
        

    }); 
});
