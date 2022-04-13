const navTab = document.querySelector('.home-pendiri .nav-pills');
const liActive = document.querySelectorAll('#tab-menu');

liActive.forEach(function (el) {
   el.addEventListener('click', function(e) {
      if (e.target.parentElement.className === 'nav-link') {      
         e.target.setAttribute('src', 'images/home/img-tab-active-0.png');
      }
      else {
         
      }
      console.log(e.target.parentElement.className === 'nav-link');
   // console.log(e.target.parentElement.className);
   });
   console.log(el.src);   
});