const selectedSideNav = () => {
  const currentPage = window.location.pathname.split('/')[2]?? '';
  const menu = document.querySelectorAll('#side-nav > li > a');
  
  // NAVIGASI DASHBOARD
  menu.forEach(element=>{
      currentPage === element.dataset.nav?
          element.classList.add('bg-gray-100'):
          element.classList.remove('bg-gray-100');
  });
}

const changeURL = (url) => {
  window.location.href = url;  
}
const previousPage = () => {
  window.history.back();  
}

window.addEventListener('DOMContentLoaded', () => {
  selectedSideNav();
});


