const avatarIcon = document.getElementById("avatarnya");
let name = document.getElementById("username");
let forms = document.getElementsByClassName("form")[0];

function avatar() {
  const avatarAPI = `https://avatars.dicebear.com/api/adventurer/${name.value}.svg`;

  avatarIcon.setAttribute("src", avatarAPI);
  console.log(avatarnya);
  console.log(avatarAPI);
}

forms.addEventListener("input", avatar);

const tabs = document.querySelectorAll(".tab");
const tabContents = document.querySelectorAll(".tab-content");

tabs.forEach(function (tab) {
  tab.addEventListener("click", function () {
    const tabIndex = Array.prototype.indexOf.call(tabs, this);
    tabs.forEach(function (tab) {
      tab.classList.remove("active");
    });
    tabContents.forEach(function (tabContent) {
      tabContent.classList.remove("active");
    });
    tab.classList.add("active");
    tabContents[tabIndex].classList.add("active");
  });
});

// document.addEventListener("DOMContentLoaded", function () {
//   // Selenkap semua baris pada tabel
//   var rows = document.querySelectorAll("tr");
//   // Tambahkan nomor pada setiap baris
//   rows.forEach(function (row, index) {
//     // Selenkap kolom nomor pada baris
//     var numberColumn = row.querySelector("td:first-child");
//     // Tambahkan nomor pada kolom nomor
//     numberColumn.innerHTML = index + 1;
//     // Tambahkan nomor sebagai ID pada baris
//     row.id = "row-" + (index + 1);
//   });
// });
