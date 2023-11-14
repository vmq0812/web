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

