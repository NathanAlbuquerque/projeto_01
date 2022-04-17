/*
  - Implemente um vaso. O desafio é que o resultado final seja este: 
    https://youtu.be/Auw2VJgwRjo
  - As imagens, marcação HTML e estilos CSS estão feitos. Aqui no app.js você 
    fará os passos abaixo;
  - Quando o botão de "próximo slide" for clicado:
    1 Remova, de todos os slides, as classes que os deixam visíveis;
    2 Adicione, em todos os slides, as classes que os deixam invisíveis;
    3 Adicione, apenas no slide que deve ser exibido, a classe que deixa um 
      slide visível;
      3.1 Para saber qual slide deve ficar visível, quando o arquivo .js for 
        carregado, inicialize uma variável com 0. Ela representa o index do 
        slide exibido atualmente;
      3.2 Antes de adicionar e remover as classes dos slides, verifique o index 
        do slide exibido atualmente;
          3.3 Se ele corresponder ao index do último slide (3º), o 1º slide deve 
            ser exibido;
          3.4 Se ele não corresponder ao index do último slide, o próximo slide 
            deve ser exibido.
  - Quando o botão de "slide anterior" for clicado:
    1 Execute os passos 1, 2 e 3 acima;
    2 No passo 3.3, se o slide exibido atualmente corresponder ao index do 1º 
      slide, o último slide (3º) deve ser exibido;
    3 No passo 3.4, se o slide exibido atualmente não corresponder ao index do 
      1º slide, o slide anterior deve ser exibido.
*/

var slides = []
var nextButton = []
var prevButton = []
var currentSlideIndex = []

const products = document.querySelectorAll('[data-js="vaso"]')
for (let index = 1; index <= products.length; index++) {
  slides[index] = document.querySelectorAll('[data-js="vaso__item'+index+'"]')
  nextButton[index] = document.querySelector('[data-js="vaso__button--next'+index+'"]')
  prevButton[index] = document.querySelector('[data-js="vaso__button--prev'+index+'"]')
  currentSlideIndex[index] = 0
}

for (let index = 1; index <= products.length; index++) {
  console.log(slides[index])
  console.log(nextButton[index])
  console.log(prevButton[index])
  console.log(currentSlideIndex[index])
}

//const slides = document.querySelectorAll('[data-js="vaso__item"]')
//const nextButton = document.querySelector('[data-js="vaso__button--next"]')
//const prevButton = document.querySelector('[data-js="vaso__button--prev"]')

//let currentSlideIndex = 0

//console.log(products.length)

for (let index = 1; index <= products.length; index++) {

  nextButton+index.addEventListener('click', () => {
    if (currentSlideIndex[index] === slides[index].length -1) {
      currentSlideInde[index] = 0
    } else {
      currentSlideIndex[index]++
    }

    slides[index].forEach( slide => {
      slide.classList.remove('vaso__item--visible')
    })

    slides[index][currentSlideIndex[index]].classList.add('vaso__item--visible')
  })

}

prevButton.addEventListener('click', () => {
  if (currentSlideIndex === 0) {
    currentSlideIndex = slides.length -1
  } else {
    currentSlideIndex--
  }

  slides.forEach( slide => {
    slide.classList.remove('vaso__item--visible')
  })

  slides[currentSlideIndex].classList.add('vaso__item--visible')
})