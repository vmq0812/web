// script.js
function openPopup(index) {
    const popup = document.getElementById('popup');
    const popupContent = document.getElementById('popup-content');

    // Thêm thông tin cụ thể của Mèo tại đây
    popupContent.innerHTML = `
        <h3> Đặc Điểm ${index}</h3>
        <p><strong>Tên:</strong> Tên Mèo ${index}</p>
        <p><strong>Tuổi thọ:</strong> Tuổi Mèo ${index}</p>
        <p><strong>Mức độ thân thiện:</strong> Mức độ thân thiện Mèo ${index}</p>
        <p><strong>Giá tiền:</strong> Giá tiền Mèo ${index}</p>
        <p><strong>Nhiệt độ nuôi thích hợp:</strong> Nhiệt độ nuôi thích hợp Mèo ${index}</p>
    `;

    popup.style.display = 'block';
}

function closePopup() {
    const popup = document.getElementById('popup');
    popup.style.display = 'none';
}
