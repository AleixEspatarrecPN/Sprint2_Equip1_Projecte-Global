/**
 * Archivo que ejecuta la funcionalidad de activar y desactivar los cursos para el usuario
 */


/** Función que activa el curso */
function activarCurso(){
    let nombreCurso = document.getElementById('formulari').value;
    document.getElementById(nombreCurso).classList.remove("curso-no-comprado")
}

/** Función que desactiva el curso */
function desactivarCurso(){
    let nombreCurso = document.getElementById('formulari').value;
    document.getElementById(nombreCurso).classList.add("curso-no-comprado")
}
