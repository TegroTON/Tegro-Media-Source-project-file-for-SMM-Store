<?php
   require "components/_header.php";
   ?>
<div class="container pt-md-4">
   <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
         <div class="card p-32 mb-32">
            <div class="mb-32">
               <div class="fs-24 fw-700">Регистрация</div>
               <div class="mb-0 fs-18 text-secondary">Создайте новый аккаунт</div>
            </div>
            <form>
               <div class="form-group mb-3">
                  <div class="input-group">
                     <span class="input-group-text fs-20 text-secondary"><i class="far fa-user"></i></span>
                     <input type="text" class="form-control" placeholder="Логин" required>
                  </div>
               </div>
               
               <div class="form-group mb-3">
                  <div class="input-group validation--error">
                     <span class="input-group-text fs-20 text-secondary"><i class="far fa-at"></i></span>
                     <input type="email" class="form-control" placeholder="Почта" required>
                  </div>
                  <div class="feedback-message">Такой email уже зарегистрирован</div>
               </div>
               
               <div class="form-group mb-3">
                  <div class="input-group">
                     <span class="input-group-text fs-20 text-secondary"><i class="far fa-unlock-alt"></i></span>
                     <input type="password" class="form-control" id="password" placeholder="Пароль" required>
                      <div class="btn px-3 text-secondary rounding-6" id="passwordIcon" onclick="showPassword('password', 'passwordIcon')">
                        <i class="far fa-eye-slash"></i>
                     </div>
                  </div>
               </div>
               
               <div class="form-group mb-32">
                  <div class="input-group">
                     <span class="input-group-text fs-20 text-secondary"><i class="far fa-lock-alt"></i></span>
                     <input type="password" class="form-control" id="confirmPassword" placeholder="Повторите пароль" required>
                     <div class="btn px-3 text-secondary rounding-6" id="confirmPasswordIcon" onclick="showPassword('confirmPassword', 'confirmPasswordIcon')">
                        <i class="far fa-eye-slash"></i>
                     </div>
                  </div>
               </div>
               
               <div class="text-center">
                  <button type="submit" class="btn btn-primary">Создать аккаунт</button>
               </div>
            </form>
         </div>
         <div class="soclogin-box text-center mb-32">
            <div class="fs-14 fw-500 mb-4">Регистрация через соцсети:</div>
             <div class="d-flex align-items-center justify-content-center">
               <a href="#!" class="icon-box wh-48 fs-24 bg-google rounding-8 hover-opacity me-3"><i class="fab fa-google"></i></a>
               <a href="#!" class="icon-box wh-48 fs-24 bg-telegram rounding-8 hover-opacity me-3"><i class="fab fa-telegram"></i></a>
               <a href="#!" class="icon-box wh-48 fs-24 bg-yandex rounding-8 hover-opacity me-3"><i class="fab fa-yandex"></i></a>
               <a href="#!" class="icon-box wh-48 fs-24 bg-vk rounding-8 hover-opacit4"><i class="fab fa-vk"></i></a>
            </div>
         </div>
         <div class="bg-second rounding-8 p-3 text-secondary text-center">
            Есть аккаунт? <a href="/login.php" class="ms-2"><u>Войти</u></a>
         </div>
      </div>
   </div>
</div>
<?php
   require "components/_footer.php";
   ?>