const selectedSideNav = () => {
  const currentPage = window.location.pathname.slice(11);
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