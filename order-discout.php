<?php
   require "components/_header.php";
?>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-6 col-xl-7">
         <div class="card mb-4">
            <div class="card-header">
               <h1 class="m-0 fs-20 fw-700">Пакет услуг в Инстаграм</h1>
            </div>
            <form action="">
            <div class="card-body">
               <div class="form-group mb-3">
                  <div class="input-group"> <!-- class: validation--error -->
                     <span class="input-group-text fs-20 text-secondary"><i class="fa-brands fa-instagram"></i></span>
                     <input type="text" class="form-control" id="receivedData"
                        placeholder="https://www.instagram.com/username" required="">
                     <span class="input-group-text fs-20" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Укажите ссылку на ваш профиль в формате показаном в поле">
                     <i class="fa-solid fa-circle-info ph-color"></i>
                     </span>
                  </div>
                  <div class="feedback-message d-none">Ссылка обязательна к запонению</div>
               </div>
               <div id="tariffDescription" class="tag-box d-flex flex-wrap">
                  <div class="tag-box__item flex-fill text-center"><span>👨 5000 подписчиков</span></div>
                  <div class="tag-box__item flex-fill text-center"><span>🧡 1000 лайков</span></div>
                  <div class="tag-box__item flex-fill text-center"><span>💬 200 комментариев</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>🚀 Высокая скорость</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>🛡️ Гарантия 60 дней</span></div>
               </div>
            </div>
            </form>
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
                  <div id="selectedTariffName" class="fw-500 ms-auto"></div>
               </div>
               <div class="card-list__item d-flex align-items-center box h-48 py-3 ">
                  <div class="text-secondary">Цена за действие:</div>
                  <div class="ms-auto fw-500"><span id="selectedTariffPrice"></span> RUB / шт.</div>
               </div>
               <div class="card-list__item d-flex align-items-center box h-48">
                  <div class="text-secondary">Подписчиков:</div>
                  <div class="ms-auto fw-500">5000 шт.</div>
               </div>
               <div class="card-list__item d-flex align-items-center box h-48">
                  <div class="text-secondary">Лайков:</div>
                  <div class="ms-auto fw-500">2000 шт.</div>
               </div>
               <div class="card-list__item d-flex align-items-center box h-48">
                  <div class="text-secondary">Комментариев:</div>
                  <div class="ms-auto fw-500">200 шт.</div>
               </div>
               <div class="card-list__item d-flex align-items-center box h-48 border-0">
                  <div class="text-secondary">К оплате:</div>
                  <div class="ms-auto fw-500">2000 RUB</div>
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