<?php
   require "components/_header.php";
?>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-6 col-xl-7">
         <div class="card mb-4">
            <div class="card-header">
               <h1 class="m-0 fs-20 fw-700">Анализ телеграм канала</h1>
            </div>
            <form action="">
            <div class="card-body">
               <div class="form-group mb-4">
                  <div class="input-group"> <!-- class: validation--error -->
                     <span class="input-group-text fs-24"><i class="fa-brands fa-telegram telegram-color"></i></span>
                     <input type="text" class="form-control" id="receivedData"
                        placeholder="https://www.instagram.com/username" required="">
                     <span class="input-group-text fs-20" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Укажите ссылку на ваш профиль в формате показаном в поле">
                     <i class="fa-solid fa-circle-info ph-color"></i>
                     </span>
                  </div>
                  <div class="feedback-message d-none">Ссылка обязательна к запонению</div>
               </div>
            </div>
            </form>
         </div>
         <div class="card mb-4">
             <div class="card-header d-flex align-items-center">
               <h2 class="m-0 fs-20 fw-700">Выберите тариф</h2>
               <a href="/telegram-analysis.php" class="btn btn-secondary fs-14 box px-3 h-32 ms-auto">О тарифах</a>
            </div>
            <div class="card-body">
               <div class="row payment-method">
                  <div class="col-6 px-2" data-id="1">
                    <div class="payment-method__item d-flex flex-column align-items-center">
                      <input type="radio" class="form-check-input" name="tariffSystemId" value="1" id="ts_1" checked="">
                      <p class="text-secondary mb-1">Базовый</p>
                      <div class="fs-24 fw-700">3 500 ₽</div>
                      <label class="payment-method__label form-check-label" for="ts_1"></label>
                    </div>
                  </div>
                  <div class="col-6 px-2" data-id="2">
                    <div class="payment-method__item h-100">
                      <input type="radio" class="form-check-input" name="tariffSystemId" value="2" id="ts_2">
                      <p class="text-secondary mb-1">Детальный</p>
                        <div class="fs-24 fw-700">7 000 ₽</div>
                      <label class="payment-method__label form-check-label" for="ts_2"></label>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <!--Payment-->
         <div class="card">
            <div class="card-header">
               <h2 class="m-0 fs-20 fw-700">Выберите платежную систему:</h2>
            </div>
            <div class="card-body">
               <?php
                  require "components/_payment-card.php";
                  ?>
            </div>
         </div>
      </div>

      <div class="col-lg-4 col-xl-3 mt-4 mt-lg-0">
         <div class="sticky-top" style="top: 94px">
         <div class="card-border p-3 mb-4 overflow-hidden">
            <h3 class="mb-1 fs-20 fw-700">Итого:</h3>
            <div class="card-list mb-2 fs-14">
               <div class="card-list__item d-flex align-items-center box h-48">
                  <div class="text-secondary">Тариф</div>
                  <div class="fw-500 ms-auto">«Базовый»</div>
               </div>
               <div class="card-list__item d-flex align-items-center box h-48 border-0">
                  <div class="text-secondary">К оплате:</div>
                  <div class="ms-auto fw-500">3 500 RUB</div>
               </div>
            </div>
            <div class="form-group fs-14 mb-3">
               <div class="input-group mb-2">
                  <span class="input-group-text text-secondary"><i class="fas fa-percent"></i></span>
                  <input type="text" class="form-control fs-14" id="receivedData" value="TegroDiscount60"
                     placeholder="Введите промокод">
               </div>
                <div class="bg-second rounding-6 text-secondary d-flex align-items-center m-0 p-3 fs-14 mb-3">
                    <div>Ваша скидка:</div>
                    <div class="ms-auto fw-500">-60% / 3000 RUB</div>
                </div>
            </div>
            <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#OrderPaymentModal">Подтвердить заказ</button>
         </div>
         
         <div class="bg-second rounding-12 p-4">
             <h3 class="fw-700 fs-16 mb-2">Обратите внимание</h3>
             <p class="text-secondary fs-14 mb-0">
                Подтверждая заказ вы соглашаетесь с положениями, прописанными в <a class="text-primary" href="#!" title="Пользовательское соглашение">соглашении</a>.
                <a class="d-block mt-2 fs-12" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Подробнее <i class="far fa-angle-down ms-1"></i>
               </a>
             </p>
             <div class="collapse pt-3" id="collapseExample">
             <p class="text-secondary fs-14 d-flex">
                <span class="me-2">—</span>
                При оплате криптовалютой срок зачисления платежа может достигать 1 часа, пока не будут получены все подтверждения транзакции.
                
             </p>
             <p class="text-secondary fs-14 d-flex m-0">
                <span class="me-2">—</span>
                При оплате через электронные кошельки может взиматься дополнительная комиссия шлюза (партнера), через который осуществляется прием средств.
             </p>
               </div>
            </div>
            </div>
            </div>
      </div>
   </div>
</div>
<?php
   require "components/_footer.php";
?>