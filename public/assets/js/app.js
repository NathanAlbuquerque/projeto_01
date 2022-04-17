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

  nextButton[index].addEventListener('click', () => {
    if (currentSlideIndex[index] === slides[index].length -1) {
      currentSlideIndex[index] = 0
    } else {
      currentSlideIndex[index]++
    }

    slides[index].forEach( slide => {
      slide.classList.remove('vaso__item--visible')
    })

    slides[index][currentSlideIndex[index]].classList.add('vaso__item--visible')
  })

  prevButton[index].addEventListener('click', () => {
    if (currentSlideIndex[index] === 0) {
      currentSlideIndex[index] = slides[index].length -1
    } else {
      currentSlideIndex[index]--
    }
  
    slides[index].forEach( slide => {
      slide.classList.remove('vaso__item--visible')
    })
  
    slides[index][currentSlideIndex[index]].classList.add('vaso__item--visible')
  })
  
}
