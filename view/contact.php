<?php
include "header.php";
?>
<!-- Form contact start -->
<div class="contact" align="center">
    <div class="text_contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1861.8524353936534!2d105.7505076458626!3d21.044491691083362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454ec11b21551%3A0xc9bea012fcb770e7!2zMzUgTmfDtSAyLCBQaMO6YyBEaeG7hW4sIELhuq9jIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1659355260592!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="form_contact">
        <p>Mọi ý kiến & đóng góp xin gửi về hòm thư:<br>silonvn@gmail.com</p>
        <form action="" method="post">
            <label for="name">
                <input type="text" id="name" placeholder="Họ và tên">
            </label><br>
            <label for="email">
                <input type="email" name="email" id="email" placeholder="Email">
            </label><br>
            <textarea name="typing" id="typing" cols="30" rows="10" placeholder="Hãy nhập gì đó"></textarea><br>
            <input type="submit" value="Gửi" id="send">
        </form>
    </div>
</div>
<!-- Form contact end -->
<?php
include "footer.php";
?>