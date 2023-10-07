<?php 
$current_page = 'cattype';
include 'header.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Giống Mèo và Đặc Điểm</title>
    <link rel="stylesheet" type="text/css" href="cattype.css">
</head>
<body>
    <div class="container">
        <div class="cat-list">
            <div class="cat-item">
                <img src="cattype/anhlongngan.webp" alt="Mèo 1" onclick="openPopup(1)">
                <p class="cat-name">Mèo Anh lông ngắn</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/muop.webp" alt="Mèo 2" onclick="openPopup(2)">
                <p class="cat-name">Mèo mướp</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/anhlongdai.webp" alt="Mèo 3" onclick="openPopup(3)">
                <p class="cat-name">Mèo Anh lông dài</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/batu.webp" alt="Mèo 4" onclick="openPopup(4)">
                <p class="cat-name">Mèo Ba Tư</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/bali.webp" alt="Mèo 5" onclick="openPopup(5)">
                <p class="cat-name">Mèo Bali</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/aicap.webp" alt="Mèo 6" onclick="openPopup(6)">
                <p class="cat-name">Mèo Ai Cập</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/anhlongngan.webp" alt="Mèo 1" onclick="openPopup(1)">
                <p class="cat-name">Mèo Anh lông ngắn</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/muop.webp" alt="Mèo 2" onclick="openPopup(2)">
                <p class="cat-name">Mèo mướp</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/anhlongdai.webp" alt="Mèo 3" onclick="openPopup(3)">
                <p class="cat-name">Mèo Anh lông dài</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/batu.webp" alt="Mèo 4" onclick="openPopup(4)">
                <p class="cat-name">Mèo Ba Tư</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/bali.webp" alt="Mèo 5" onclick="openPopup(5)">
                <p class="cat-name">Mèo Bali</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/aicap.webp" alt="Mèo 6" onclick="openPopup(6)">
                <p class="cat-name">Mèo Ai Cập</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/anhlongngan.webp" alt="Mèo 1" onclick="openPopup(1)">
                <p class="cat-name">Mèo Anh lông ngắn</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/muop.webp" alt="Mèo 2" onclick="openPopup(2)">
                <p class="cat-name">Mèo mướp</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/anhlongdai.webp" alt="Mèo 3" onclick="openPopup(3)">
                <p class="cat-name">Mèo Anh lông dài</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/batu.webp" alt="Mèo 4" onclick="openPopup(4)">
                <p class="cat-name">Mèo Ba Tư</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/bali.webp" alt="Mèo 5" onclick="openPopup(5)">
                <p class="cat-name">Mèo Bali</p>
                <div class="cat-details">
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/aicap.webp" alt="Mèo 6" onclick="openPopup(6)">
                <p class="cat-name">Mèo Ai Cập</p>
                <div class="cat-details">
                </div>
            </div>
        </div>
    </div>
    <!-- Phần tử popup chung -->
    <div class="popup" id="popup">
        <div class="popup-content">
            <span class="close-popup" onclick="closePopup()">&times;</span>
            <div id="popup-content">
                <!-- Nội dung popup sẽ được cập nhật bằng JavaScript -->
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>
