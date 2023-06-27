<?php
   require "components/_header.php";
   ?>
<div class="container pt-md-4">
   <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
         <div class="card p-32 mb-32">
            <div class="mb-32">
               <div class="fs-24 fw-700">Войти</div>
               <div class="mb-0 fs-18 text-secondary">С возвращением 👋</div>
            </div>
            <form>
               <div class="alert alert-danger">
                  <i class="fas fa-circle-info me-2"></i>
                  Неправельный логин или пароль
               </div>
               <div class="form-group mb-3">
                  <div class="input-group">
                     <span class="input-group-text fs-20 text-secondary"><i class="far fa-at"></i></span>
                     <input type="text" class="form-control" placeholder="Почта или логин" required>
                  </div>
               </div>
               <div class="form-group mb-3">
                  <div class="input-group">
                     <span class="input-group-text fs-20 text-secondary"><i class="far fa-unlock-alt"></i></span>
                     <input type="password" class="form-control" placeholder="Пароль" required>
                  </div>
               </div>
               <div class="mb-32 d-flex align-items-center">
                  <a href="/reset-password.php" class="text-secondary ms-auto">Забыли пароль?</a>
               </div>
               <div class="text-center">
                  <button type="submit" class="btn btn-primary px-5">Войти</button>
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
            Ещё нет аккаунта? <a href="/sing-up.php" class="ms-2"><u>Создайте новый</u></a>
         </div>
      </div>
   </div>
</div>
<?php
   require "components/_footer.php";
   ?>