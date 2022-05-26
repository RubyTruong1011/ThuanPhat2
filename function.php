add_action('wp_footer','tn_chat');
function tn_chat(){?>
  <ul id="tnContact">
    <li>
      <a href="https://messenger.com/t/temnerhome" class="iconfb" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
      <span class="label fb" >Chat Facebook</span>
    </li>
    <li>
      <a href="https://zalo.me/0899326019" class="iconzalo" target="_blanl">
        <img src="https://caohungphat.com/wp-content/uploads/2019/07/icon_zalomessage.png" alt="">
      </a>
      <span class="label zalo">Nhắn tin zalo</span>
    </li>
    <li>
      <a href="sms:0899326019" class="iconsms">
        <i class="fas fa-sms"></i>
      </a>
      <span class="label sms">Nhắn tin điện thoại</span>
    </li>
    <li>
      <a href="tel:0899326019" class="iconcall">
        <i class="fas fa-phone"></i>
      </a>
      <span class="label call">Gọi điện thoại</span>
    </li>
  </ul><?php
}