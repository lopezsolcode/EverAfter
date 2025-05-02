let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true,
    spaceBetween:20,
    grabCursor:true,
    pagination: {
        el: ".swiper-pagination",
        clickable:true,

    },
});

var swiper = new Swiper(".service-slider", {
    loop:true,
    spaceBetween:20,
    grabCursor:true,
    pagination: {
        el: ".swiper-pagination",
        clickable:true,

    },
    breakpoints:{
    450: {
        slidesPerView: 1,
    },
    768: {
        slidesPerView: 2,
    },
    1000: {
        slidesPerView: 3,
    },
    },
});

const $form = document.getElementById('contact-form');
$form.addEventListener('submit', handleSubmit);

async function handleSubmit(e) {
  e.preventDefault();
  const form = new FormData(e.target);
  
  const response = await fetch(e.target.action, {
    method: e.target.method,
    body: form,
    headers: {
      'Accept': 'application/json'
    }
  });

  if (response.ok) {
    document.getElementById('success-modal').style.display = 'flex';
  } else {
    console.error("Error al enviar el formulario");
  }
}

function closeModal() {
document.getElementById('success-modal').style.display = 'none';
document.getElementById('contact-form').reset();
}
