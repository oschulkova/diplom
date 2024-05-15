let elements = document.querySelectorAll('.subjects-section__item');
let itemContents = document.querySelectorAll('.section__item__content');
let itemsClicked = document.querySelectorAll('.subjects-section__item__wrapper');



for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', function(){
        itemContents[i].classList.toggle("hidden");
        itemsClicked[i].classList.toggle("clicked")
    })
}