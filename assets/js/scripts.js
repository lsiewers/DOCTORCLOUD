function loadscreen() {

  document.addEventListener("DOMContentLoaded", function(event){
    document.body.classList.add('load--complete')
  });
} loadscreen();

function toggleMenu () {
  if (!document.body.classList.contains('menu--open')) {
    document.body.classList.add('menu--open')
  } else {
    document.body.classList.replace('menu--open', 'menu--close');
  }
}


function loadImg() {
  event.target.classList.replace('is--loading', 'is--loaded');
}
