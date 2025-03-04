let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () => {
  searchForm.classList.toggle('active');
  shoppingCart.classList.remove('active');
  loginForm.classList.remove('active');
  navbar.classList.remove('active');

}


let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () => {
  shoppingCart.classList.toggle('active');
  searchForm.classList.remove('active');
  loginForm.classList.remove('active');
  navbar.classList.remove('active');
}


let loginForm = document.querySelector('.log');

document.querySelector('#login-btn').onclick = () => {
  loginForm.classList.toggle('active');
  navbar.classList.remove('active');
  searchForm.classList.remove('active');
  shoppingCart.classList.remove('active');
}


let navbar = document.querySelector('.navbar');
document.querySelector('#menu-btn').onclick = () => {
  navbar.classList.toggle('active');
  searchForm.classList.remove('active');
  shoppingCart.classList.remove('active');
  loginForm.classList.remove('active');

}

window.onscroll = () => {
  shoppingCart.classList.remove('active');
  searchForm.classList.remove('active');
  loginForm.classList.remove('active');
  navbar.classList.remove('active');
}


var swiper = new Swiper(".product-slider",
  {
    loop: true,
    spaceBetween: 20,

    autoplay: {
      delay: 3050,
      disableOnInstraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
       
      },
      768: {
        slidesPerView: 2,
       

      },
      840: {
        slidesPerView: 3,
        
      },
      1020: {
        slidesPerView: 4,
      },
    },
  });
