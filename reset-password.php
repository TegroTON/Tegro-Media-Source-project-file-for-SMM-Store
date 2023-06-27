<?php
   require "components/_header.php";
   ?>
<div class="container pt-md-4">
   <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
         <div class="card p-32 mb-32">
            <div class="mb-32">
               <div class="fs-24 fw-700">Забыли пароль?</div>
            </div>
            <form action="/reset-password-confirm.php">
               <div class="form-group mb-32">
                  <div class="input-group">
                     <span class="input-group-text fs-20 text-secondary"><i class="far fa-at"></i></span>
                     <input type="email" class="form-control" placeholder="Почта или логин" required>
                  </div>
               </div>
               <div class="text-center">
                  <button type="submit" class="btn btn-primary">Сбросить пароль</button>
               </div>
            </form>
         </div>
         <div class="soclogin-box text-center mb-32">
            <div class="fs-14 fw-500 mb-4">Войти через соцсети:</div>
            <div class="d-flex align-items-center justify-content-center">
               <a href="#!" class="icon-box wh-48 fs-24 bg-google rounding-8 hover-opacity me-3"><i class="fab fa-google"></i></a>
               <a href="#!" class="icon-box wh-48 fs-24 bg-telegram rounding-8 hover-opacity me-3"><i class="fab fa-telegram"></i></a>
               <a href="#!" class="icon-box wh-48 fs-24 bg-yandex rounding-8 hover-opacity me-3"><i class="fab fa-yandex"></i></a>
               <a href="#!" class="icon-box wh-48 fs-24 bg-vk rounding-8 hover-opacit4"><i class="fab fa-vk"></i></a>
            </div>
         </div>
         <div class="bg-second rounding-8 p-3 text-secondary text-center">
            Вспомнили пароль? <a href="/login.php" class="ms-2"><u>Войти</u></a>
         </div>
      </div>
   </div>
</div>
<?php
   require "components/_footer.php";
   ?>