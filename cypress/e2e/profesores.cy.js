describe('Módulo de Profesores', () => {
    it('Muestra la página principal de profesores', () => {
      cy.visit('http://localhost:8000/profesores')
      cy.contains('Listado de todos los profesores')
    })
  
    it('Muestra información de un profesor específico', () => {
      cy.visit('http://localhost:8000/profesores/maria')
      cy.contains('Información del profesor: maria')
    })
  
    it('Muestra formulario para crear profesor', () => {
      cy.visit('http://localhost:8000/profesores/crear')
      cy.contains('Formulario para registrar un nuevo profesor')
    })
  })