describe('Módulo de Cursos', () => {
    it('Muestra la página principal de cursos', () => {
      cy.visit('http://localhost:8000/cursos')
      cy.contains('Listado de todos los cursos disponibles')
    })
  
    it('Muestra información de un curso específico', () => {
      cy.visit('http://localhost:8000/cursos/laravel')
      cy.contains('Información del curso: laravel')
    })
  
    it('Muestra información de un curso con categoría', () => {
      cy.visit('http://localhost:8000/cursos/laravel/backend')
      cy.contains('Curso: laravel de la categoría: backend')
    })
  
    it('Muestra formulario para crear curso', () => {
      cy.visit('http://localhost:8000/cursos/crear')
      cy.contains('Formulario para crear un nuevo curso')
    })
  })

  