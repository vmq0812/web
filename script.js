function openPopup(index) {
    const catItems = document.querySelectorAll('.cat-item');
    const popup = document.getElementById('popup');
    const popupContent = document.getElementById('popup-content');

    const selectedCat = catItems[index - 1];

    // Lấy thông tin từ phần tử đã chọn
    const catName = selectedCat.querySelector('.cat-name').textContent;
    const catDetails = selectedCat.querySelector('.cat-details').innerHTML;

    // Thiết lập nội dung popup
    popupContent.innerHTML = `
        ${catDetails}
    `;

    popup.style.display = 'block';
}

function closePopup() {
    const popup = document.getElementById('popup');
    popup.style.display = 'none';
}

const navbar = document.querySelector("[data-navbar]");
const navbarLinks = document.querySelectorAll("[data-nav-link]");
const navbarToggler = document.querySelector("[data-nav-toggler]");

navbarToggler.addEventListener("click", function () {
    navbar.classList.toggle("active");
    this.classList.toggle("active");
});

for (let i = 0; i < navbarLinks.length; i++) {
    navbarLinks[i].addEventListener("click", function () {
        navbar.classList.remove("active");
        navbarToggler.classList.remove("active");
    });
}




const searchTogglers = document.querySelectorAll("[data-search-toggler]");
const searchBox = document.querySelector("[data-search-box]");

for (let i = 0; i < searchTogglers.length; i++) {
    searchTogglers[i].addEventListener("click", function () {
        searchBox.classList.toggle("active");
    });
}





const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", function () {
    if (window.scrollY >= 200) {
        header.classList.add("active");
        backTopBtn.classList.add("active");
    } else {
        header.classList.remove("active");
        backTopBtn.classList.remove("active");
    }
});

// Chuyển ảnh banner
var arr = [
    'bn1.png',
    'bn2.png',
    'bn3.png',
    'bn4.png',
    'bn5.png',

];
var i = 0;
function next() {
    i++;
    if (i >= arr.length)
        i = 0;
    var anh = document.getElementById('anh');
    anh.src = arr[i];
}
setInterval('next()', 5000)



