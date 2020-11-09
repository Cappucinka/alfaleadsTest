// Фиксированное меню
window.addEventListener('scroll', function(){
  let fixedMenu = document.querySelector('.header__nav');
  let fixedMenuHeight = fixedMenu.offsetHeight;
  let fixedMenuTop = fixedMenu.getBoundingClientRect().top;
  if (window.pageYOffset <= (fixedMenuTop + fixedMenuHeight)) {
    document.querySelector('.header__nav').classList.remove('header__nav_position_fixed');
  } else {
    document.querySelector('.header__nav').classList.add('header__nav_position_fixed');
  }
});

// Мобильное меню
document.querySelector('.mobile-menu-wrapper').addEventListener('click', function() {
  document.querySelector('.mobile-menu').classList.toggle('active');
  document.body.classList.toggle('overflow');
  document.querySelector('.menu-wrapper').classList.toggle('active');
});
document.querySelector('.logo').addEventListener('click', function() {
  document.querySelector('.mobile-menu').classList.remove('active');
  document.body.classList.remove('overflow');
  document.querySelector('.menu-wrapper').classList.remove('active');
});
document.querySelector('.menu').addEventListener('click', function() {
  document.querySelector('.mobile-menu').classList.remove('active');
  document.body.classList.remove('overflow');
  document.querySelector('.menu-wrapper').classList.remove('active');
});