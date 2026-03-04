// Funciones para manejar el hover en los enlaces
function linkhoverIn(element) {
    element.style.textDecoration = 'underline';
    element.style.transform = 'scale(1.5)';
    element.style.transition = 'transform 0.6s ease';
}

function linkhoverOut(element) {
    element.style.textDecoration = 'none';
    element.style.transform = 'scale(1)';
    element.style.transition = 'transform 0.6s ease';
}

// Funciones para manejar el hover en los botones
function buttonhoverIn(element) {
    element.style.transform = 'scale(1.2)';
    element.style.transition = 'transform 0.6s ease';
}

function buttonhoverOut(element) {
    element.style.transform = 'scale(1)';
    element.style.transition = 'transform 0.6s ease';
}