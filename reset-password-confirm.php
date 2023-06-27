<?php
   require "components/_header.php";
   ?>
<div class="container pt-md-4">
   <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
         <div class="card p-32">
            <div class="text-center text-secondary mb-32">
               <i class="fal fa-paper-plane mb-4 fs-48"></i>
               <p class="mb-0 px-4">Письмо для сброса пароля было отправлено по адресу: <span class="fw-500">username@gmail.com</span></p>
            </div>
            <div class="text-center">
               <a type="submit" class="btn btn-primary" href="/new-password.php">Открыть почту</a>
            </div>
         </div>
      </div>
   </div>
</div>
<?php
   require "components/_footer.php";
   ?>