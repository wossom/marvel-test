describe('Menu Bar tests', () => {
    beforeEach(() => {
        cy.visit('/index.php?controller=character&action=characters');
    });

    it('User can see Marvel logo', () => {
        cy.get('[testid=marvel-logo]').should('be.visible');
    });

    it('User can see Characters link', () => {
        cy.get('[testid=characters-link]').should('be.visible');
    });

    it('User can see Find Character link', () => {
        cy.get('[testid=findCharacter-link]').should('be.visible');
    });

    it('User can see Find Comic link', () => {
        cy.get('[testid=findComic-link]').should('be.visible');
    });

    it('User can see Character Comic link', () => {
        cy.get('[testid=characterComic-link]').should('be.visible');
    });

    it('User can see Comic author link', () => {
        cy.get('[testid=comicAuthor-link]').should('be.visible');
    });
});