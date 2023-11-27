<footer>
  <div class="footer-left">
    <img src="./picture/HappyHouseimg.png" alt="Logo">
    <p>@ Công ty trách nhiệm hữu hạn Happy House </p>
  </div>
  <div class="footer-right">
    <p>Số điện thoại: 0373316044</p>
    <p>Email: happyhouse@gmail.com</p>
    <p>Địa chỉ: 123 đường Tố Hữu, Phường Đống Đa, Thành phố Quy Nhơn</p>
  </div>
</footer>
<style>
footer {
  padding: 20px;
  display: flex;
  justify-content: center;
}


.footer-left, .footer-right {
  flex-basis: 50%;
}

.footer-left {
  display: flex;
  align-items: center;
  justify-content: center;
}

.footer-left img {
  width: 130px;
  height: 130px;
}

.footer-right {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin-left: 20px;
}

.footer-right p {
  margin-bottom: 5px;
}
</style>
