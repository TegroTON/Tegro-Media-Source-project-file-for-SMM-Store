<?php
   require "components/_header-login.php";
   ?>
<div class="container pt-md-4">
   <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
         <div class="card mb-32">
            <div class="p-4 pb-0">
               <div class="fs-24 fw-700">Настройки</div>
            </div>
            <form class="card-body">
                  <div class="form-group mb-4">
                     <label for="" class="mb-2 fw-500">Логин</label>
                     <div class="input-group">
                     <span class="input-group-text fs-20 text-secondary"><i class="far fa-user"></i></span>
                      <input type="text" class="form-control" value="uNerd">
                     </div>
                  </div>
                   <div class="form-group mb-4 pb-4 border-bottom">
                     <label for="" class="mb-2 fw-500">Email</label>
                     <div class="input-group disabled">
                     <span class="input-group-text fs-20 text-secondary"><i class="far fa-at"></i></span>
                      <input type="text" class="form-control" value="unerd@gmail.com" disabled>
                     </div>
                  </div>
                  <div class="form-group mb-4">
                     <label for="" class="mb-2 fw-500">Сменить пароль</label>
                     <div class="input-group mb-3">
                     <span class="input-group-text fs-20 text-secondary"><i class="far fa-unlock-alt"></i></span>
                     <input type="password" class="form-control" id="password" placeholder="Пароль" required>
                      <div class="btn px-3 text-secondary rounding-6" id="passwordIcon" onclick="showPassword('password', 'passwordIcon')">
                        <i class="far fa-eye-slash"></i>
                     </div>
                  </div>
                  <div class="input-group">
                     <span class="input-group-text fs-20 text-secondary"><i class="far fa-lock-alt"></i></span>
                     <input type="password" class="form-control" id="confirmPassword" placeholder="Повторите пароль" required>
                     <div class="btn px-3 text-secondary rounding-6" id="confirmPasswordIcon" onclick="showPassword('confirmPassword', 'confirmPasswordIcon')">
                        <i class="far fa-eye-slash"></i>
                     </div>
                  </div>
                   <div class="alert alert-danger mt-3">
                  <i class="fas fa-circle-info me-2"></i>
                  Пароли не совпадают
               </div>
                  </div>
               <div class="text-center">
                  <button type="submit" class="btn btn-primary px-5">Войти</button>
               </div>
            </form>
         </div>
         <div class="soclogin-box text-center mb-32">
            <div class="fs-14 fw-500 mb-4">Привязать соцсети:</div>
            <div class="d-flex align-items-center justify-content-center">
               <a href="#!" class="soclogin-box__link google me-3"><i class="fab fa-google"></i></a>
               <a href="#!" class="soclogin-box__link telegram me-3 opacity-50"><i class="fab fa-telegram"></i></a>
               <a href="#!" class="soclogin-box__link yandex me-3 opacity-50"><i class="fab fa-yandex"></i></a>
               <a href="#!" class="soclogin-box__link vk opacity-50"><i class="fab fa-vk"></i></a>
            </div>
         </div>
         <div class="btn btn-secondary d-block">
            Выйти <i class="far fa-right-to-bracket ms-3"></i>
         </div>
      </div>
   </div>
</div>
<?php
   require "components/_footer.php";
   ?>