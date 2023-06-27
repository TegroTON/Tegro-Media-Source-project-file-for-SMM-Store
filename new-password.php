<?php
   require "components/_header.php";
   ?>
<div class="container pt-md-4">
   <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
         <div class="card p-32 mb-32">
            <div class="mb-32">
               <div class="fs-24 fw-700">Новый пароль</div>
            </div>
            <form>
               <div class="alert alert-danger">
                  <i class="fas fa-circle-info me-2"></i>
                  Пароли не совпадают
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
                  <button type="submit" class="btn btn-primary">Сохранить и войти</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php
   require "components/_footer.php";
   ?>