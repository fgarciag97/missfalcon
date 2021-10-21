//============================================================================================
$('document').ready(() => {
    $('.moneda').mask('000,000,000,000,000.00', {
        reverse: true
    })
    $('.phone_with_ddd').mask('(0000) 000-0000')
})
//============================================================================================
//Cierre del FLASH
setTimeout(function() {
    $('.alert').fadeOut('slow')
}, 4000)
//============================================================================================
function mayus(e) {
    e.value = e.value.toUpperCase()
}

function soloNum(e) {
    key = e.keyCode || e.which
    tecla = String.fromCharCode(key).toLowerCase()
    letras = '1234567890'
    especiales = '8'
    tecla_especial = false
    for (const i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true
            break
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false
    }
}
//Función para permitir solo numeros
function soloNumPunto(e) {
    var key = window.Event ? e.which : e.keyCode
    return (key >= 48 && key <= 57) || key == 8 || key == 46 || key == 44
}
// Función para permitir solo letras
function soloLetras(e) {
    key = e.keyCode || e.which
    tecla = String.fromCharCode(key).toLowerCase()
    letras = ' áéíóúabcdefghijklmnñopqrstuvwxyz'
    especiales = '8-37-39-46'
    tecla_especial = false
    for (const i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true
            break
        }
    }
    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
        return false
    }
}
