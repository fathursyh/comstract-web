
const changeURL = (url) => {
    window.location.href = url;  
}
// WARNA BIRU NAV YANG DIPILIH
const selectedNavItem = () => {
    const currentPage = window.location.pathname.split('/')[1];
    const peserta = document.querySelector('#navigasi > li > button') || null;
    const navigasi = document.querySelectorAll('#navigasi > li > a');
    // DATA PESERTA (ADMIN)
    if(peserta !== null) {
        currentPage === peserta.dataset.page?
        peserta.classList.add('text-blue-500'):
        peserta.classList.remove('text-blue-500');
    }
    // NAVIGASI PUBLIC
    navigasi.forEach(element=>{
        currentPage === element.dataset.page?
            element.classList.add('text-blue-500'):
            element.classList.remove('text-blue-500');
    });
}

window.addEventListener('DOMContentLoaded', () => {
   selectedNavItem();
});