</main>
<footer class="footer border-top">
  <div class="container">
    <div class="row">

      <div class="col-md-8 col-lg-4 mb-5 mb-lg-0 mx-auto">
        <div class="d-flex">
          <img data-src="/assets/images/logo/footer-logo.png" width="56" alt="Company Tegro LLC" class="footer__logo lazyload" loading="lazy">
          <div class="ps-4">
            <p class=" mb-0">
              Tegro - сервис раскрутки в социальных сетях с личной командой профессионалов в области рекламы и
              продвижения.
            </p>
            <div class="footer-soclinks d-flex mt-4">
              <a href="https://www.instagram.com/tontgr/" class="soclinks__item" aria-label="Instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.reddit.com/r/tegro/" class="soclinks__item" target="_blank" aria-label="Reddit"><i class="fa-brands fa-reddit-alien"></i></a>
              <a href="https://t.me/TgrTon" class="soclinks__item" target="_blank" aria-label="Telegram"><i class="fa-brands fa-telegram"></i></a>
              <a href="https://twitter.com/TGRtoken" class="soclinks__item" target="_blank" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
              <a href="https://tegromoney.medium.com" class="soclinks__item" target="_blank" aria-label="Medium"><i class="fa-brands fa-medium"></i></a>
              <a href="https://github.com/TegroTON" class="soclinks__item" target="_blank" aria-label="Github"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.linkedin.com/company/tegromoney/" class="soclinks__item" target="_blank" aria-label="Linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg-2 ms-auto mb-5 mb-md-0">
        <div class="footer__title fs-20 mb-3">Продукты</div>
        <a href="https://tegro.finance" target="_blank" class="d-block mb-2 fs-14">DEX для TON</a>
        <a href="https://dev.uniton.app/" target="_blank" class="d-block mb-2 fs-14">Кошелек TON</a>
        <a href="https://libermall.com/" target="_blank" class="d-block mb-2 fs-14">NFT - Маркет</a>
        <a href="https://ru.tegro.io/commerce/" class="d-block mb-2 fs-14">Платёжная система</a>
      </div>

      <div class="col-6 col-md-4 col-lg-2 mb-5 mb-md-0">
        <div class="footer__title fs-20 mb-3">Ресурсы</div>
        <a href="https://tegro.money/docs/en/" target="_blank" class="d-block mb-2 fs-14">Документация</a>
        <a href="https://tegro.money/referral-program/" target="_blank" class="d-block mb-2 fs-14">Партнерская
          программа</a>
        <a href="https://tegro.gitbook.io/ru/" target="_blank" class="d-block mb-2 fs-14">Дорожная карта</a>
      </div>

      <div class="col-6 col-md-4 col-lg-2">
        <div class="footer__title fs-20 mb-3">Компания</div>
        <a href="/policy" class="d-block mb-2 fs-14">Конфиденциальность</a>
        <a href="/offer" class="d-block mb-2 fs-14">Соглашение</a>
        <a href="https://tegro.money/branding/" target="_blank" class="d-block mb-2 fs-14">Активы бренда</a>
      </div>

    </div>

    <div class="footer__bottom fs-14 fw-medium text-center">
      © Tegro
      <?php
        $year = date("Y");
        echo "" . $year; 
      ?>. 
      Все права защищены.
    </div>

  </div>
</footer>

<div class="mobile-menu d-flex justify-content-between d-md-none w-100 p-2 bg-card border-top text-center text-secondary sticky-bottom z-2" style="bottom: 0;">
  <a href="/dashboard.php" class="flex-fill">
    <i class="fad fa-chart-bar fs-24"></i>
    <p class="m-0 fs-12 fw-500 mt-1">Заказы</p>
  </a>
  <a href="/balance.php" class="flex-fill">
    <i class="fad fa-wallet fs-24"></i>
    <p class="m-0 fs-12 fw-500 mt-1">Баланс</p>
  </a>
  <a href="#!" class="flex-fill" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fad fa-compass fs-24"></i>
    <p class="m-0 fs-12 fw-500 mt-1">Услуги</p>
  </a>
  <a href="#!" class="flex-fill">
    <i class="fad fa-user-headset fs-24"></i>
    <p class="m-0 fs-12 fw-500 mt-1">Помощь</p>
  </a>
</div>

<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/main.js?v=<?=time()?>"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
  var script = document.createElement('script');
  script.src = '/assets/js/fonts.js?v=<?=time()?>';
  document.body.appendChild(script);

   if('serviceWorker' in navigator){
     navigator.serviceWorker.register('/webapp.js');
   } else {
     console.log("Service worker is not supported");
   }
   
});
 </script>


<?php
   require "components/_dashboard-modals.php";
?>

</body>
</html>