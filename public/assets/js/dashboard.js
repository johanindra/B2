// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};


// tabel
document.addEventListener('DOMContentLoaded', function () {
  const tableBody = document.querySelector('#dataTable tbody');
  const searchInput = document.querySelector('#searchInput');
  const prevBtn = document.querySelector('#prevBtn');
  const nextBtn = document.querySelector('#nextBtn');
  const pageInfo = document.querySelector('#pageInfo');

  let currentPage = 1;
  const rowsPerPage = 5; // Ubah sesuai kebutuhan Anda

  // Contoh data tabel (dapat disesuaikan dengan data Anda)
  const data = [
      { nik: $nik, name: $nama, address: $alamat, letterType: $keterangan },
      // Tambahkan data lainnya sesuai kebutuhan Anda
  ];

  function displayData(data) {
      tableBody.innerHTML = '';
      const startIndex = (currentPage - 1) * rowsPerPage;
      const endIndex = startIndex + rowsPerPage;
      const paginatedData = data.slice(startIndex, endIndex);

      paginatedData.forEach(item => {
          const row = document.createElement('tr');
          row.innerHTML = `
              <td>${item.nik}</td>
              <td>${item.name}</td>
              <td>${item.address}</td>
              <td>${item.letterType}</td>
              <td><a href="#">Lihat Detail</a></td>
          `;
          tableBody.appendChild(row);
      });

      pageInfo.textContent = `Page ${currentPage} of ${Math.ceil(data.length / rowsPerPage)}`;
  }

  function searchTable() {
      const searchText = searchInput.value.toLowerCase();
      const filteredData = data.filter(item => {
          return (
              item.nik.toLowerCase().includes(searchText) ||
              item.name.toLowerCase().includes(searchText) ||
              item.address.toLowerCase().includes(searchText) ||
              item.letterType.toLowerCase().includes(searchText)
          );
      });

      currentPage = 1;
      displayData(filteredData);
  }

  searchInput.addEventListener('input', searchTable);

  prevBtn.addEventListener('click', function () {
      if (currentPage > 1) {
          currentPage--;
          displayData(data);
      }
  });

  nextBtn.addEventListener('click', function () {
      if (currentPage < Math.ceil(data.length / rowsPerPage)) {
          currentPage++;
          displayData(data);
      }
  });

  // Menampilkan data pada halaman pertama
  displayData(data);
});
