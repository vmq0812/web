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

<div class="slider-container">
    <div class="slider-content">
        <div class="slide">
            <img src="image/pexels-dids-1287518.jpg" alt="meo">
        </div>
        <div class ="content">
            <h1>GIỐNG MÈO VÀ ĐẶC ĐIỂM</h1>
            <p>Mỗi giống mèo lại có một đặc điểm riềng biệt, về ngoại hình hay về tính cách.Chính vì thế sẽ có những cách chăm sóc khác nhau</p>
            <p>Cùng tìm hiểu ngay dưới đây nhé ! </p>
        </div>
    </div>
</div>
<div class="boxx">
    <h1 class="da"> Danh sách các giống mèo</h1>
</div>

    <div class="container">
        <div class="cat-list">
            <div class="cat-item">
                <img src="cattype/anhlongngan.webp" alt="Mèo anh lông ngắn" onclick="openPopup(1)">
                <p class="cat-name">Mèo Anh lông ngắn</p>
                <div class="cat-details">
                        <p><strong>Tên:</strong> Mèo Anh lông ngắn (British Shorthair). </p>
                        <p><strong>Đặc điểm nhận dạng:</strong>Mèo Anh lông ngắn có kích thước trung bình đến lớn, hình dáng hơi tròn và cơ thể cường tráng. Lông mèo này ngắn, mượt và dày đặc, thường có màu sắc đa dạng, bao gồm xám, xanh, đen, trắng, và nhiều họa tiết khác nhau. Đặc điểm nổi bật là khuôn mặt hình trái xoài và đôi mắt lớn tròn</p>
                        <p><strong>Tuổi thọ:</strong> Mèo Anh lông ngắn có tuổi thọ trung bình từ 15 đến 20 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh. </p>
                        <p><strong>Mức độ thân thiện:</strong> Mèo Anh lông ngắn thường rất thân thiện và hiền lành. Họ thích sự cô đơn và có thể thích gắn bó với chủ nhân của họ </p>
                        <p><strong>Môi trường sống thích hợp:</strong> Mèo Anh lông ngắn thích môi trường yên tĩnh và thoải mái. Họ thích cảm giác ấm áp và nơi an toàn. Mèo này phù hợp sống trong nhà, và không phải ra ngoài nhiều. </p>
                        <p><strong>Giá tiền:</strong> Giá mua một con mèo Anh lông ngắn có thể biến đổi dựa trên nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc, và danh tiếng của người bán. Thông thường, giá một con mèo Anh lông ngắn có thể từ 500 USD đến 1.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo thuần chủng có giấy tờ </p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/muop.webp" alt="Mèo mướp" onclick="openPopup(2)">
                <p class="cat-name">Mèo mướp</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Mướp (Persian Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Mướp có kích thước trung bình đến lớn, hình dáng hơi tròn và cơ thể mạnh mẽ. Lông của chúng dày, mượt và dài, thường có màu sắc đa dạng, bao gồm xám, trắng, đen và nhiều họa tiết lông khác nhau. Đặc điểm nổi bật của mèo Mướp là khuôn mặt phẳng và đôi mắt lớn, tròn.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Mướp có tuổi thọ trung bình từ 12 đến 16 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Mướp thường rất thân thiện và tình cảm. Họ thích gắn bó với chủ nhân của họ và thể hiện tính cách nhã nhặn.</p>
                    <<p><strong>Môi trường sống thích hợp:</strong> Mèo Mướp thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Mướp có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Mướp có thể từ 800 USD đến 3.000 USD hoặc thậm chí cao hơn nếu đó là một con mèo Mướp thuần chủng có giấy tờ và họa tiết lông độc đáo.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/anhlongdai.webp" alt="Mèo anh lông dài" onclick="openPopup(3)">
                <p class="cat-name">Mèo Anh lông dài</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Anh lông dài (Balinese Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Anh lông dài có kích thước trung bình đến lớn và cơ thể mảnh mai và mềm mại. Lông mèo này dài, mượt và mảnh, thường có màu sắc đa dạng, bao gồm xám, hạt dẻ, màu sữa, và các biến thể lông khác. Đặc điểm nổi bật là khuôn mặt mảnh mai và đôi mắt lớn, tròn.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Anh lông dài có tuổi thọ trung bình từ 15 đến 20 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Anh lông dài thường rất thân thiện, tình cảm và thông minh. Họ thích tương tác với con người và có thể trở thành bạn đồng hành thân thiện.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Anh lông dài thích môi trường ấm áp và yên tĩnh. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Anh lông dài có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Anh lông dài có thể từ 800 USD đến 2.000 USD hoặc thậm chí cao hơn nếu đó là một con mèo Anh lông dài thuần chủng có giấy tờ và họa tiết lông độc đáo.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/batu.webp" alt="Mèo ba tư" onclick="openPopup(4)">
                <p class="cat-name">Mèo Ba Tư</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Ba Tư (Persian Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Ba Tư có kích thước trung bình đến lớn và cơ thể mảnh mai và mềm mại. Lông mèo này dày, mượt và mảnh, thường có màu sắc đa dạng, bao gồm xám, trắng, đen và nhiều biến thể lông khác. Đặc điểm nổi bật của mèo Ba Tư là khuôn mặt phẳng và đôi mắt lớn, tròn.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Ba Tư có tuổi thọ trung bình từ 12 đến 16 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Ba Tư thường rất thân thiện và tình cảm. Họ thích gắn bó với chủ nhân của họ và thể hiện tính cách nhã nhặn.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Ba Tư thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Ba Tư có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Ba Tư có thể từ 800 USD đến 3.000 USD hoặc thậm chí cao hơn nếu đó là một con mèo Ba Tư thuần chủng có giấy tờ và họa tiết lông độc đáo.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/bali.webp" alt="Mèo bali" onclick="openPopup(5)">
                <p class="cat-name">Mèo Bali</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Ba Li (Balinese Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Ba Li có kích thước trung bình đến lớn và cơ thể mảnh mai và mềm mại. Lông mèo này dài, mượt và mảnh, thường có màu sắc đa dạng, bao gồm xám, hạt dẻ, màu sữa, và các biến thể lông khác. Đặc điểm nổi bật của mèo Ba Li là khuôn mặt mảnh mai và đôi mắt lớn, tròn.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Ba Li có tuổi thọ trung bình từ 15 đến 20 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Ba Li thường rất thân thiện, tình cảm và thông minh. Họ thích tương tác với con người và có thể trở thành bạn đồng hành thân thiện.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Ba Li thích môi trường ấm áp và yên tĩnh. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Ba Li có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Ba Li có thể từ 800 USD đến 2.000 USD hoặc thậm chí cao hơn nếu đó là một con mèo Ba Li thuần chủng có giấy tờ và họa tiết lông độc đáo.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/abyssinian.webp" alt="Mèo abyssinian" onclick="openPopup(6)">
                <p class="cat-name">Mèo Abbyssinian</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Abyssinian (Abyssinian Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Abyssinian có kích thước trung bình và cơ thể thon gọn và mảnh mai. Lông mèo này ngắn và mượt, thường có màu rực rỡ và có vẻ hoang dã. Đặc điểm nổi bật của mèo Abyssinian là lớp lông mượt, đôi mắt lớn và tròn, và hàm răng cắn chặt.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Abyssinian có tuổi thọ trung bình từ 12 đến 15 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Abyssinian thường rất thân thiện, năng động và tò mò. Họ thích tương tác với con người và có tính cách mở cửa và thích khám phá.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Abyssinian thích môi trường ấm áp và có nhiều hoạt động. Họ cảm thấy thoải mái trong nhà và thường thích có không gian để chơi và thể hiện tính cách tò mò của họ.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Abyssinian có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Abyssinian có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Abyssinian thuần chủng có giấy tờ và họa tiết lông độc đáo.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/aicap.webp" alt="Mèo ai cập" onclick="openPopup(7)">
                <p class="cat-name">Mèo Ai CẬp</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Ai Cập (Egyptian Mau).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Ai Cập có kích thước trung bình và cơ thể mảnh mai và thể thao. Lông mèo này ngắn, mượt và dày, thường có họa tiết lông dạng hoa và màu sắc đa dạng. Đặc điểm nổi bật của mèo Ai Cập là vẻ hoang dã trong dáng vẻ, đôi mắt lớn và màu đậm ở mắt và đôi tai.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Ai Cập có tuổi thọ trung bình từ 13 đến 16 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Ai Cập thường rất thân thiện, năng động và đáng yêu. Họ thích gắn bó với con người và có tính cách tò mò và nhanh nhẹn.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Ai Cập thích môi trường có nhiều hoạt động và không gian để vận động. Họ thích tham gia vào hoạt động ngoại trời, nhưng cũng cảm thấy thoải mái trong nhà.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Ai Cập có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Ai Cập có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Ai Cập thuần chủng có giấy tờ và họa tiết lông độc đáo.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/allerca.webp" alt="Mèo Allerca" onclick="openPopup(8)">
                <p class="cat-name">Mèo Allerca</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Allerca (Hypoallergenic Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Allerca không phải là một giống mèo cụ thể, mà là một tập hợp các biến thể trong cơ đồ gen của mèo giúp giảm tiết chất gây dị ứng trong lông và da. Các biến thể này có thể dẫn đến lông mèo ít gãi ngứa hơn và tiết chất gây dị ứng ít hơn, làm cho mèo này phù hợp cho những người dễ bị dị ứng mèo.</p>
                    <p><strong>Tuổi thọ:</strong> Tuổi thọ của mèo Allerca không khác biệt so với mèo thông thường và có thể dao động từ 12 đến 20 năm, tùy thuộc vào chăm sóc và lối sống.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mức độ thân thiện và tính cách của mèo Allerca có thể biến đổi tùy theo giống mèo và cá nhân. Tuy nhiên, chúng thường được nuôi với mục đích làm thú cưng và có thể thân thiện và tình cảm.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Allerca thích môi trường ấm áp và thoải mái. Các nhu cầu về chỗ ở và chăm sóc không khác biệt so với mèo thông thường.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Allerca có thể cao hơn so với mèo thông thường do tính độc đáo của khả năng gây ít dị ứng. Tuy nhiên, giá tiền có thể biến đổi tùy theo nguồn gốc, giống mèo và danh tiếng của người bán.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/angora.webp" alt="Mèo angora" onclick="openPopup(9)">
                <p class="cat-name">Mèo Angora</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Angora (Angora Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Angora có kích thước trung bình và cơ thể thon gọn, mảnh mai. Lông mèo này dài, mượt và dày đặc, thường có màu sắc đa dạng, bao gồm trắng, xám, đen, và các biến thể lông khác. Đặc điểm nổi bật của mèo Angora là lớp lông mỏng và mềm mại, khuôn mặt thanh tú, và đôi tai dài.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Angora có tuổi thọ trung bình từ 15 đến 18 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Angora thường rất thân thiện, năng động và tò mò. Họ thích gắn bó với con người và có tính cách yêu thương và tình cảm.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Angora thích môi trường ấm áp và thoải mái. Họ thường cảm thấy thoải mái ở trong nhà và thích có không gian để thể hiện tính cách tò mò của họ.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Angora có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Angora có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Angora thuần chủng có giấy tờ và họa tiết lông độc đáo.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/bengal.webp" alt="Mèo bengal" onclick="openPopup(10)">
                <p class="cat-name">Mèo Bengal</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Bengal (Bengal Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Bengal có kích thước trung bình và cơ thể thon gọn, linh hoạt. Lông mèo này ngắn, mượt và có họa tiết lông giống với da báo hoặc hổ với các màu sắc đa dạng. Đặc điểm nổi bật của mèo Bengal là lớp lông với vẻ hoang dã, đôi mắt lớn và hàm răng cắn chặt.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Bengal có tuổi thọ trung bình từ 12 đến 15 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Bengal thường rất năng động, tò mò và thích tham gia vào hoạt động. Họ có tính cách trí thức và thích tương tác với con người.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Bengal cần môi trường có nhiều hoạt động và không gian để vận động. Họ thích tham gia vào hoạt động ngoại trời và có tính cách thích khám phá.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Bengal có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Bengal có thể từ 1.000 USD đến 4.000 USD hoặc thậm chí cao hơn nếu đó là một con mèo Bengal thuần chủng có giấy tờ và họa tiết lông độc đáo.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/chartreux.webp" alt="Mèo chartreux" onclick="openPopup(11)">
                <p class="cat-name">Mèo Chartreux</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Chartreux (Chartreux Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Chartreux có kích thước trung bình và cơ thể mảnh mai và mập mạp. Lông mèo này ngắn, mượt và màu xám xanh dương đặc trưng. Đặc điểm nổi bật của mèo Chartreux là đầu tròn, mắt lớn và tròn, và lông mày rất dày.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Chartreux có tuổi thọ trung bình từ 12 đến 15 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Chartreux thường rất thân thiện, hiền lành và yêu thương. Họ thích gắn bó với con người và có tính cách nhã nhặn và thân thiện.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Chartreux thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thích cảm giác ấm áp và an toàn.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Chartreux có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Chartreux có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Chartreux thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/exotic.webp" alt="Mèo exotic" onclick="openPopup(12)">
                <p class="cat-name">Mèo Exotic</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Exotic (Exotic Shorthair Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Exotic có kích thước trung bình đến lớn, hình dáng mập mạp và cơ thể cường tráng. Lông của mèo này ngắn, mượt và đa dạng về màu sắc, bao gồm các màu xám, trắng, đen và nhiều họa tiết lông khác nhau. Đặc điểm nổi bật của mèo Exotic là đầu tròn, mắt lớn và tròn, và một khuôn mặt đáng yêu với mũi phẳng.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Exotic có tuổi thọ trung bình từ 12 đến 15 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Exotic thường rất thân thiện, hiền lành và tình cảm. Họ thích gắn bó với con người và có tính cách nhã nhặn và thân thiện.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Exotic thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thích cảm giác ấm áp và an toàn.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Exotic có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Exotic có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Exotic thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/laperm.webp" alt="Mèo laperm" onclick="openPopup(13)">
                <p class="cat-name">Mèo Laperm</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo LaPerm (LaPerm Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo LaPerm có kích thước trung bình và cơ thể mảnh mai. Đặc điểm nổi bật của mèo LaPerm là bộ lông đặc trưng, có kiểu sóng hoặc xoắn ở cả lông ngắn và lông dài. Lông của mèo LaPerm thường màu xám, trắng, đỏ, hoặc các màu khác. Họ cũng có đầu tròn và đôi mắt lớn, thể hiện tính cách đáng yêu.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo LaPerm có tuổi thọ trung bình từ 10 đến 15 năm. Chăm sóc tốt và lối sống lành mạnh có thể giúp họ sống lâu hơn.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo LaPerm thường rất thân thiện, tình cảm và thân thiện. Họ thích gắn bó với con người và có tính cách tương đối hoà đồng.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo LaPerm thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thích cảm giác ấm áp và an toàn. Mèo LaPerm có lông đặc biệt nên cần chăm sóc lông thường xuyên.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo LaPerm có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm giới tính, họa tiết lông, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo LaPerm có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo LaPerm thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/longxoanselkirk.webp" alt="Mèo selkirk" onclick="openPopup(14)">
                <p class="cat-name">Mèo Lông Xoăn Selkirk</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Selkirk Rex (Selkirk Rex Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Selkirk Rex có kích thước trung bình và cơ thể mập mạp. Đặc điểm nổi bật của mèo Selkirk Rex là bộ lông xoắn, mượt và dày đặc. Lông của họ có thể có nhiều màu sắc khác nhau. Đầu mèo Selkirk Rex tròn và có đôi mắt lớn, tạo nên một diện mạo độc đáo.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Selkirk Rex có tuổi thọ trung bình từ 10 đến 15 năm, tùy thuộc vào chăm sóc và lối sống.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Selkirk Rex thường rất thân thiện và tình cảm. Họ thích gắn bó với con người và có tính cách thân thiện và thoải mái.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Selkirk Rex thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thích cảm giác ấm áp và an toàn.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Selkirk Rex có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm giới tính, họa tiết lông, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Selkirk Rex có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Selkirk Rex thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/mainecoon.webp" alt="Mèo maine coon" onclick="openPopup(15)">
                <p class="cat-name">Mèo Maine Coon</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Maine Coon (Maine Coon Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Maine Coon có kích thước lớn, hình dáng mảnh mai và cơ thể cường tráng. Bộ lông của họ dày, mượt và có màu sắc đa dạng, bao gồm xám, đỏ, đen, trắng và nhiều họa tiết lông khác nhau. Đặc điểm nổi bật là đầu mèo hình tam giác ngược và đôi mắt lớn và nổi bật.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Maine Coon có tuổi thọ trung bình từ 12 đến 15 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Maine Coon thường rất thân thiện, hoà đồng và tình cảm. Họ thích gắn bó với con người và có tính cách thoải mái.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Maine Coon thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Maine Coon có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm giới tính, họa tiết lông, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Maine Coon có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Maine Coon thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/manx.webp" alt="Mèo manx" onclick="openPopup(16)">
                <p class="cat-name">Mèo Manx</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Manx (Manx Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Manx có kích thước trung bình và cơ thể cường tráng. Đặc điểm nổi bật của mèo Manx là vùng đuôi ngắn hoặc không có đuôi (rất ngắn hoặc không có đuôi), tạo nên một diện mạo độc đáo. Bộ lông của họ mượt và có màu sắc đa dạng, bao gồm xám, đỏ, đen, trắng và nhiều họa tiết lông khác nhau. Đầu mèo Manx có hình tam giác và đôi mắt lớn.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Manx có tuổi thọ trung bình từ 8 đến 14 năm, tùy thuộc vào chăm sóc và lối sống.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Manx thường rất thân thiện, nhanh nhẹn và tình cảm. Họ thích gắn bó với con người và có tính cách thoải mái.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Manx thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Manx có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm giới tính, họa tiết lông, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Manx có thể từ 600 USD đến 2.000 USD hoặc thậm chí cao hơn nếu đó là một con mèo Manx thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/mien_dien.webp" alt="Mèo miến điện" onclick="openPopup(17)">
                <p class="cat-name">Mèo Miến Điện</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Miến Điện (Burmese Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Miến Điện có kích thước trung bình và cơ thể mảnh mai với hình dáng mạnh mẽ. Bộ lông của họ ngắn, mượt và bóng, thường có màu nâu sô cô la đậm và đôi mắt lớn màu vàng hoặc ngọc lam nổi bật.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Miến Điện có tuổi thọ trung bình từ 15 đến 18 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Miến Điện thường rất thân thiện, tình cảm và thông minh. Họ thích gắn bó với con người và có tính cách thoải mái và yêu thương.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Miến Điện thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thích cảm giác ấm áp và an toàn.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Miến Điện có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Miến Điện có thể từ 500 USD đến 1.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Miến Điện thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/munchkin.webp" alt="Mèo munchkin" onclick="openPopup(18)">
                <p class="cat-name">Mèo Munchkin</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Munchkin (Munchkin Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Munchkin có kích thước trung bình và cơ thể mập mạp với chân ngắn đặc trưng. Bộ lông của họ mượt và có màu sắc đa dạng, bao gồm xám, trắng, đen, và nhiều họa tiết lông khác nhau. Đầu mèo Munchkin có hình tam giác và đôi mắt lớn và nổi bật.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Munchkin có tuổi thọ trung bình từ 12 đến 15 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Munchkin thường rất thân thiện, nhanh nhẹn và tình cảm. Họ thích gắn bó với con người và có tính cách thoải mái.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Munchkin thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Munchkin có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm giới tính, họa tiết lông, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Munchkin có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Munchkin thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/my_tai_xoan.webp" alt="Mèo mỹ tai xoăn" onclick="openPopup(19)">
                <p class="cat-name">Mèo Mỹ Tai Xoăn</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Mỹ tài xoăn (American Curl).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Mỹ tài xoăn có kích thước trung bình và đặc điểm nổi bật là đôi tai cong vút ra phía sau, tạo nên vẻ độc đáo. Bộ lông của họ ngắn hoặc dài đều có thể, và có nhiều màu sắc khác nhau.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Mỹ tài xoăn có tuổi thọ trung bình từ 12 đến 16 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Mỹ tài xoăn thường rất thân thiện, hiền lành và thông minh. Họ thích gắn bó với con người và có tính cách tương đối hoà nhã.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Mỹ tài xoăn thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Mỹ tài xoăn có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Mỹ tài xoăn có thể từ 800 USD đến 2.000 USD hoặc thậm chí cao hơn nếu đó là một con mèo Mỹ tài xoăn thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/ragamuffin.webp" alt="Mèo ragamuffin" onclick="openPopup(20)">
                <p class="cat-name">Mèo Ragamuffin</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Ragamuffin.</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Ragamuffin có kích thước lớn và cơ thể mập mạp và cường tráng. Lông của họ dài, mượt và dày đặc, thường có màu sắc đa dạng, bao gồm xám, trắng, đen, và nhiều họa tiết lông khác nhau. Đặc điểm nổi bật là khuôn mặt hình trái xoài và đôi mắt lớn.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Ragamuffin có tuổi thọ trung bình từ 15 đến 20 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Ragamuffin thường rất thân thiện, tình cảm và thân thiện. Họ thích gắn bó với con người và có tính cách thoải mái.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Ragamuffin thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Ragamuffin có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Ragamuffin có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Ragamuffin thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/ragdoll.webp" alt="Mèo ragdoll" onclick="openPopup(21)">
                <p class="cat-name">Mèo Ragdoll</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Ragdoll.</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Ragdoll có kích thước lớn, hình dáng mảnh mai và mắt lớn đẹp mắt. Lông của họ dài, mượt và màu sắc đa dạng, thường có màu xanh dương và một số họa tiết lông khác nhau. Đặc điểm nổi bật là tính cách thân thiện và dễ dãi, khiến họ thường được mô tả như "búp bê bông thực sự."</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Ragdoll có tuổi thọ trung bình từ 15 đến 20 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Ragdoll thường rất thân thiện, hiền lành và thân thiện với con người. Họ thích được xã giao và thường không quá đốm đặt.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Ragdoll thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Ragdoll có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Ragdoll có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Ragdoll thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/rung_Nauy.webp" alt="Mèo rừng nauy" onclick="openPopup(22)">
                <p class="cat-name">Mèo Rừng Nauy</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo rừng Na Uy (Norwegian Forest Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo rừng Na Uy có kích thước lớn, hình dáng mảnh mai và cơ thể cường tráng. Lông của họ dày, dài và màu sắc đa dạng, thường có lớp lông ngoại cảm giác. Đặc điểm nổi bật là đôi tai mảnh mai và đuôi dày có lông rậm.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo rừng Na Uy có tuổi thọ trung bình từ 14 đến 16 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo rừng Na Uy thường thân thiện, hiền lành và đáng yêu. Họ thích gắn bó với con người và có tính cách thoải mái.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo rừng Na Uy thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo rừng Na Uy có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo rừng Na Uy có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo rừng Na Uy thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/savanah.webp" alt="Mèo savanah" onclick="openPopup(23)">
                <p class="cat-name">Mèo Savannah</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Savannah (Savannah Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Savannah có kích thước trung bình đến lớn và cơ thể mảnh mai và mảnh khảnh. Lông của họ ngắn và dày đặc, thường có màu vàng với họa tiết đốm đốm giống mèo hoang dã. Đặc điểm nổi bật là mặt đôi với đôi mắt lớn và tai dài.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Savannah có tuổi thọ trung bình từ 12 đến 20 năm, tùy thuộc vào hậu quả của sự lai tạo. Những cá thể lai tạo đặc biệt có thể sống lâu hơn.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Savannah thường thích gắn bó với chủ và có tính cách thông minh và năng động. Họ có khả năng tương tác với con người và thể hiện tính cách sáng tạo.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Savannah thích môi trường sống ngoại trời và không thích sự hạn chế trong không gian hẹp. Họ cần nhiều vận động và tương tác xã hội.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Savannah có thể rất đắt do tính hiếm có của chúng. Giá có thể biến đổi dựa trên họa tiết lông, giới tính, thế hệ, và danh tiếng của người bán. Thông thường, giá một con mèo Savannah có thể từ 1.000 USD đến 20.000 USD hoặc thậm chí cao hơn cho những cá thể đặc biệt.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/seberian.webp" alt="Mèo Seberian" onclick="openPopup(24)">
                <p class="cat-name">Mèo Seberian</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Siberian (Siberian Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Siberian có kích thước trung bình đến lớn, hình dáng mảnh mai và cơ thể cường tráng. Lông của họ dày, mượt và có lớp lông ngoại cảm giác. Màu lông đa dạng, từ xám đến màu vàng và nhiều họa tiết khác nhau. Đặc điểm nổi bật là đôi mắt lớn và tai có lông rậm.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Siberian có tuổi thọ trung bình từ 12 đến 16 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Siberian thường thân thiện và có tính cách thoải mái. Họ thích gắn bó với con người và có sự tinh tế và sự hiểu biết.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Siberian thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Siberian có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Siberian có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn nếu đó là một con mèo Siberian thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/somali.webp" alt="Mèo somali" onclick="openPopup(25)">
                <p class="cat-name">Mèo Somali</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Somali (Somali Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Somali có kích thước trung bình và cơ thể mảnh mai với dáng vẻ mảnh khảnh. Lông của họ dày, mượt và có màu vàng hoặc đỏ đậm đặc trưng. Đặc điểm nổi bật là tai mảnh mai, đôi mắt lớn và tròn, cùng với đuôi dài và mượt.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Somali có tuổi thọ trung bình từ 12 đến 16 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Somali thường thân thiện, hiền lành và thân thiện với con người. Họ có tính cách thông minh và năng động, thích tương tác với gia đình.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Somali thích môi trường sống ngoại trời và không thích sự hạn chế trong không gian hẹp. Họ cần nhiều vận động và tương tác xã hội.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Somali có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Somali có thể từ 800 USD đến 2.500 USD hoặc thậm chí cao hơn cho những cá thể đặc biệt.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/taicutScotland.webp" alt="Mèo tai cụt scotland" onclick="openPopup(26)">
                <p class="cat-name">Mèo Tai Cụt Scotland</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Scottish Fold (Scottish Fold Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Scottish Fold có kích thước trung bình với đặc điểm nhận dạng nổi bật là đôi tai gập về phía trước, tạo nên vẻ đáng yêu. Lông của họ ngắn đến trung bình và có màu lông đa dạng. Đặc điểm nổi bật là tai gập và đôi mắt to và tròn.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Scottish Fold có tuổi thọ trung bình từ 13 đến 15 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Scottish Fold thường thân thiện và có tính cách dễ thương. Họ thích tương tác với con người và thể hiện tính cách nhã nhặn và thân thiện.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Scottish Fold thích môi trường yên tĩnh và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Scottish Fold có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Scottish Fold có thể từ 800 USD đến 3.000 USD hoặc thậm chí cao hơn cho những cá thể đặc biệt.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/tamthe.webp" alt="Mèo tam thể" onclick="openPopup(27)">
                <p class="cat-name">Mèo Tam Thể</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Tam Thể (Calico Cat hoặc Tortoiseshell Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Tam Thể có bộ lông có ba màu chủ yếu hoặc ba màu rõ rệt trên cơ thể. Thường, các màu chủ yếu bao gồm màu đỏ, màu đen và màu trắng. Đặc điểm nổi bật là màu lông đa dạng và thường không có họa tiết lông đặc biệt.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Tam Thể có tuổi thọ trung bình từ 12 đến 16 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Tam Thể có tính cách đa dạng, tùy thuộc vào cá nhân từng con. Tuy nhiên, chúng có thể có tính cách tương đối độc lập và thường có thần thái mạnh mẽ.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Tam Thể thích môi trường sống ổn định và thoải mái. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Tam Thể có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Tam Thể có thể từ 200 USD đến 600 USD hoặc thậm chí cao hơn cho những cá thể đặc biệt.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/toyger.webp" alt="Mèo toyger" onclick="openPopup(28)">
                <p class="cat-name">Mèo Toyger</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Toyger (Toyger Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Toyger có kích thước trung bình và có bộ lông có mẫu vằn tương tự như lông hổ, tạo nên vẻ ngoạn mục và độc đáo. Đặc điểm nổi bật của họ là họa tiết lông dọc theo cơ thể giống lông hổ, đôi mắt lớn và tròn, cùng với dáng vẻ mạnh mẽ và cơ bắp.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Toyger có tuổi thọ trung bình từ 12 đến 15 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Toyger thường thân thiện và tương đối ngoan ngoãn. Họ thích tương tác với con người và có tính cách tự tin và dễ thương.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Toyger thích môi trường sống thoải mái và an toàn. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Toyger có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Toyger có thể từ 1.000 USD đến 4.000 USD hoặc thậm chí cao hơn cho những cá thể đặc biệt.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/turkish_van.webp" alt="Mèo Turkish Van" onclick="openPopup(29)">
                <p class="cat-name">Mèo Turkish Van</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Turkish Van (Turkish Van Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Turkish Van có kích thước trung bình và có một lớp lông dày màu trắng với màu đốm hoặc vằn màu đen hoặc đỏ, thường xuất hiện trên đầu và đuôi. Đặc điểm nổi bật của họ là mắt màu xanh lục và lông dày dặn.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Turkish Van có tuổi thọ trung bình từ 12 đến 16 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Turkish Van thường thân thiện và tương đối ngoan ngoãn. Họ có tính cách độc lập và có thể tương tác tốt với con người và là bạn đồng hành lý tưởng.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Turkish Van thích môi trường sống thoải mái và an toàn. Họ cảm thấy thoải mái ở trong nhà và thường không thích ra ngoài nhiều.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Turkish Van có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Turkish Van có thể từ 200 USD đến 600 USD hoặc thậm chí cao hơn cho những cá thể đặc biệt.</p>
                </div>
            </div>
            <div class="cat-item">
                <img src="cattype/xiem.webp" alt="Mèo xiem" onclick="openPopup(30)">
                <p class="cat-name">Mèo Xiêm</p>
                <div class="cat-details">
                    <p><strong>Tên:</strong> Mèo Xiêm (Siamese Cat).</p>
                    <p><strong>Đặc điểm nhận dạng:</strong> Mèo Xiêm có kích thước trung bình và cơ thể mảnh mai. Họ có bộ lông ngắn và mượt, thường có màu sắc đặc trưng với màu lông hổ và đôi mắt xanh lục hoặc xanh dương. Đặc điểm nổi bật của họ là bộ lông có màu sắc đặc trưng và hình dáng đầu hình tam giác.</p>
                    <p><strong>Tuổi thọ:</strong> Mèo Xiêm có tuổi thọ trung bình từ 12 đến 15 năm, nhưng có thể sống lâu hơn nếu được chăm sóc tốt và có lối sống lành mạnh.</p>
                    <p><strong>Mức độ thân thiện:</strong> Mèo Xiêm thường thân thiện, yêu thương và rất tương tác với con người. Họ có tính cách thông minh và nghị lực.</p>
                    <p><strong>Môi trường sống thích hợp:</strong> Mèo Xiêm thích môi trường sống thoải mái và ấm áp. Họ thường không thích sự cô đơn và thích tương tác với gia đình.</p>
                    <p><strong>Giá tiền:</strong> Giá mua một con mèo Xiêm có thể biến đổi tùy thuộc vào nhiều yếu tố, bao gồm họa tiết lông, giới tính, nguồn gốc và danh tiếng của người bán. Thông thường, giá một con mèo Xiêm có thể từ 400 USD đến 1.200 USD hoặc thậm chí cao hơn nếu đó là một con mèo Xiêm thuần chủng có giấy tờ và tiêu chuẩn chất lượng.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup" id="popup">
        <div class="popup-content">
            <span class="close-popup" onclick="closePopup()">&times;</span>
            <div id="popup-content">
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
<?php include 'footer.php'; ?>
