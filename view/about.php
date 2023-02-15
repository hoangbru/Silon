<?php
include "header.php"
?>
<!-- About us start -->
<script>
    var index = 0;
    chuyenAnh = function() {
        var imgs = [
            "assets/images/slide/1.jpg",
            "assets/images/slide/2.jpg",
            "assets/images/slide/3.jpg",
        ]
        document.getElementById('anh').src = imgs[index];
        index++;
        if (index == 3) {
            index = 0;
        }
    }
    setInterval(chuyenAnh, 2000)
</script>
<div class="about_us" align="center">
    <img src="assets/images/slide/1.jpg" id="anh" alt="">
    <h2>Giới thiệu</h2>
    <p>Chào bạn, đã đến với Silon.</p>
    <p>Ở Silon, chúng mình bán tất-tần-tật những gì chúng mình yêu quý: từ quần áo, giày dép, và cả phụ
        kiện thời trang. Thật lòng mà nói là: "Yêu gì - bán nấy !"</p>
    <p>Hành trình mang thời trang đến gần hơn với giới trẻ Hà Nội của Silon bắt đầu từ 2017 với
        một cửa hàng nhỏ, cùng với niềm đam mê, nhiệt huyết lớn của những con người trẻ yêu thích thời trang
        2hand</p>
    <p>Với tiêu chí xây dựng Silon không đơn thuần chỉ là "một-shop-bán-đồ-second-hand", chúng mình mong muốn
        kể những “câu chuyện” thông qua từng bộ lookbook. Với sự chỉnh chu trong việc quản lý chất lượng sản
        phẩm, hình ảnh, và tạo ra một không gian mua sắm đậm chất retro, Silon đang cố gắng truyền tải
        thông điệp: Thời trang 2hand cần một chỗ đứng xứng đáng hơn.</p>
    <p>Qua nhiều năm, Silon đã nhận được rất nhiều sự yêu thương và ủng hộ từ các khách hàng thân thiết
        và anh chị em. Đây là động lực để Kho luôn cố gắng hoàn thiện hơn qua từng ngày.</p>
    <p>Website Silon là bước đệm cho những dự án tiếp theo của chúng mình để tiếp tục đưa cái tên Silon
        đến gần với nhiều khách hàng hơn. Hy vọng rằng, website này sẽ là người bạn thân thiết mới của
        bạn. Và hãy đồng hành cùng Silon, trong những chặng đường sắp tới bạn nhé !</p>
    <p>Thân mến,<br>
        Silon !</p>
</div>
<!-- About us end -->
<?php
include "footer.php"
?>