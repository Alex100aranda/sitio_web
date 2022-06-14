addEventListener('DOMContentLoaded', () => {
    /*las imagenes a mostrara en el carrusel con su variable*/
    const imagenes = ['img/foto1.jpg', 'img/foto2.jpg', 'img/foto3.jpg', 'img/foto4.jpg','img/foto5.jpg' ]
    
    /*creamos la variable i para la animacin del carrusel*/
    let i = 1
    const img1 = document.querySelector('#img1')
    const img2 = document.querySelector('#img2')
    const progressBar = document.querySelector('#progress-bar')
    const divIndicadores = document.querySelector('#indicadores')
    const adelanteBtn = document.querySelector(".Adelante")
    const atrasBtn = document.querySelector(".Atras")
    
    let porcentaje_base = 100/imagenes.length
    let porcentaje_actual = porcentaje_base
    
    /*bucle de las imagenes para su transicion de los indicadores*/
    for (let index = 0; index < imagenes.length; index++){
        const div = document.createElement('div')
        div.classList.add('circles')/*clase de los indicadores*/
        div.id = index
        divIndicadores.appendChild(div)
    }
    /*agregamos el ancho por defecto de nuestro progress bar*/
    progressBar.style.width = '${porcentaje_base}%'
    img1.src = imagenes[0]/*seleccionamos ña imagen que se cargara primero*/
    const circulos = document.querySelectorAll('.circles')
    circulos[0].classList.add('resaltado')/*calse resaltado patra inidcar la imagen actualizada*/
    
    /*agregamos la transicioón para la imagen 2*/
    const slideshow = () => {
        img2.src = imagenes[i]
        const circulo_actual = Array.from(circulos).find(el => el.id == i)
        Array.from(circulos).forEach(cir => cir.classList.remove('resaltado'))
        circulo_actual.classList.add('resaltado')
    
        img2.classList.add('active')
        i++
        porcentaje_actual+=porcentaje_base
        progressBar.style.width = '${porcentaje_actual}%'
        if (i==imagenes.length) {
            i = 0
            porcentaje_actual = porcentaje_base - porcentaje_base
    
        }
            setTimeout(() => {
                img1.src = img2.src
                img2.classList.remove('active')
            }, 1000)
            
    }
    
    setInterval(slideshow, 4000)
    
    })
    
    