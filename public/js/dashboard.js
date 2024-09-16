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

window.addEventListener('DOMContentLoaded', () => {
  selectedSideNav();
});

const changeURL = (url) => {
  window.location.href = url;  
}