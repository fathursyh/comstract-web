const changeURL = (url) => {
  window.location.href = url;
}
// WARNA BIRU NAV YANG DIPILIH
const selectedNavItem = () => {
  const currentPage = window.location.pathname.split('/')[1];
  const peserta = document.querySelector('#navigasi > li > button') || null;
  const navigasi = document.querySelectorAll('#navigasi > li > a');
  // DATA PESERTA (ADMIN)
  if (peserta !== null) {
    currentPage === peserta.dataset.page ?
      peserta.classList.add('text-blue-500') :
      peserta.classList.remove('text-blue-500');
  }
  // NAVIGASI PUBLIC
  navigasi.forEach(element => {
    currentPage === element.dataset.page ?
      element.classList.add('text-blue-500') :
      element.classList.remove('text-blue-500');
  });
}

function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
};

function insertList(body) {
  const searchResult = document.getElementById('listSearch');
  const data = `
      <li><a href="" class="w-full px-4 py-2 font-normal text-base">${body}</a></li>
    `;
  searchResult.insertAdjacentHTML('afterbegin', data);
};

const input = document.querySelector('#search');
const debouncedSearch = debounce(function (event) {
  document.getElementById('listSearch').innerHTML = '';
  const url = `/fetchPeserta`;
  fetch(url, {
    method: 'POST',
    mode: 'cors',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
    body: new URLSearchParams({
      'search': input.value
    }),
  }).then((res) => {
    return res.json()
  }).then((data) => {
    if (input.value != '') {
      data.forEach(peserta => {
        insertList(peserta['nama']);
      })
    }
  }).catch((err) => {
    console.log(err)
  });
}, 450);

input.addEventListener('input', debouncedSearch);

window.addEventListener('DOMContentLoaded', () => {
  selectedNavItem();
});

window.onbeforeunload = function () {
  window.scrollTo({
    left: 0,
    top: 0,
    behavior: 'smooth',
  });
}
