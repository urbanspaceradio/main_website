<?php
/* Template name: Contacts Page */
defined('ABSPATH') || exit;
get_header();
?>
  <div class="contacts">
    <div class="siteWrapper">
      <section class="contacts-header">
        <div class="header-mainText contacts-header_mainText">
          <h1>НАШІ КОНТАКТИ</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent in augue nunc. Fusce in consectetur mi.
            Nullam a congue sapien. Nulla in vulputate mauris, in tempor eros.</p>
          <p>Aliquam ut mollis tortor, at lobortis quam. Sed tempus aliquam ultricies. Mauris enim felis, accumsan ac
            elementum ac, varius nec purus.</p>
        </div>
      </section>
      <section class="contacts-values">
        <div class="contacts-values_item">
          <div class="img">
            <img alt="No img" src="assets/img/no_img.png">
          </div>
          <div class="description">
            <h2 class="description-title">ПОДЗВОНИТИ</h2>
            <div class="description-phone"><a href="#">0800 00 52 35</a></div>
            <div class="text">
              <p>- щирість</p>
              <p>- відкритість</p>
              <p>- гідність</p>
              <p>- проактивність</p>
            </div>
          </div>
        </div>
        <div class="contacts-values_item">
          <div class="img">
            <img alt="No img" src="assets/img/no_img.png">
          </div>
          <div class="description">
            <h2 class="description-title">НАПИСАТИ</h2>
            <div class="description-email"><a href="#">urbanspace@mail.com</a></div>
            <div class="text">
              <p>Підтримка зрілості у суспільстві через <br> україномовний аудіальний продукт.</p>
            </div>
          </div>
        </div>
        <div class="contacts-values_item">
          <div class="img">
            <img alt="No img" src="assets/img/no_img.png">
          </div>
          <div class="description">
            <h2 class="description-title">ЗАВІТАТИ</h2>
            <div class="text">
              <p>Розвиток форматності аудіального продукту та незалежного україномовного <br> подкастингу через
                партнерства та співпраці.</p>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="divider"></div>
    <div class="siteWrapper">
      <section class="aboutUSR contacts-form">
        <h2>БУДЕМО РАДІТИ СПІВПРАЦІ</h2>
        <form class="contact-form">
          <input placeholder="Ім’я" type="text"/>
          <input placeholder="Емейл" type="text"/>
          <select>
            <option value="Член команди">Член команди</option>
            <option value="Партнер">Партнер</option>
            <option value="Автор">Автор</option>
          </select>
          <textarea placeholder="Повідомлення" rows="7"></textarea>
          <div class="btn-greenHover btn-green-main contacts-btn">
            <a href="#">надіслати</a>
          </div>
        </form>
      </section>
    </div>
  </div>
<?php get_footer();
?>