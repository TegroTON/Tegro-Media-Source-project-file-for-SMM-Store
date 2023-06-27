<?php
   require "components/_header-login.php";
?>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-12 col-xxl-10 mb-4">
         <div class="content-nav-pills nav nav-pills d-flex align-items-center">
            <ul class="d-flex flex-nowrap overflow-auto me-auto w-100">
               <li class="nav-item ucatSlider__item">
                  <a href="/order.php" class="nav-link btn active">На счету: 17860.8 RUB</a>
               </li>
               <li class="nav-item ucatSlider__item ms-auto">
                  <button class="nav-link btn" type="button" data-bs-toggle="modal"
                     data-bs-target="#HistoryBalanceModal">
                     <i class="far fa-history me-2"></i>История
                  </button>
               </li>
            </ul>
         </div>
      </div>

       <div class="col-lg-8 col-xxl-7">
         <div class="bg-second rounding p-3 d-flex align-items-center mb-4 rounding-8">
            <i class="fad fa-info-circle ph-color fs-20"></i>
            <p class="mb-0 ms-3 fs-14 text-secondary">
               Пополняйте счёт от 1000 рублей и получайте бонусы от 7% до 10%
            </p>
         </div>
         <div class="card">
            <div class="card-header">
               <h1 class="m-0 fs-20 fw-700">Пополнить баланс</h1>
            </div>
            <div class="card-body">
               <div class="input-group mb-3">
                  <input type="number" id="amount-input" class="form-control" placeholder="Введите сумму пополнения" oninput="updateResult()">
                  <span class="input-group-text px-3"><i class="fas fa-ruble"></i></span>
               </div>
               <a href="#!" class="btn btn-secondary m-1 fw-500 fs-14 box h-32 px-3" onclick="insertAmount(500)">500
                  RUB</a>
               <a href="#!" class="btn btn-secondary m-1 fw-500 fs-14 box h-32 px-3" onclick="insertAmount(1000)">1000
                  RUB</a>
               <a href="#!" class="btn btn-secondary m-1 fw-500 fs-14 box h-32 px-3" onclick="insertAmount(1500)">1500
                  RUB</a>
               <a href="#!" class="btn btn-secondary m-1 fw-500 fs-14 box h-32 px-3" onclick="insertAmount(2000)">2000
                  RUB</a>
               <a href="#!" class="btn btn-secondary m-1 fw-500 fs-14 box h-32 px-3" onclick="insertAmount(5000)">5000
                  RUB</a>
            </div>
         </div>
         <!--Payment-->
         <div class="card mt-4">
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

      <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
         <div class="sticky-top" style="top: 94px">
            <div class="card-border p-3 mb-4 overflow-hidden">
               <h3 class="mb-1 fs-20 fw-700">Итого:</h3>
               <div class="card-list mb-2 fs-14">
                  <div class="card-list__item d-flex align-items-center box h-48">
                     <div class="text-secondary">Сумма пополнения:</div>
                     <div class="ms-auto fw-500" id="balanceResult">0 RUB</div>
                  </div>
                  <div class="card-list__item d-flex align-items-center box h-48 py-3 ">
                     <div class="text-secondary">Доступный бонус:</div>
                     <div class="ms-auto fw-500" id="bonusResult">0 RUB / 0%</div>
                  </div>
                  <div class="card-list__item d-flex align-items-center box h-48 border-0">
                     <div class="text-secondary">Будет зачислено:</div>
                     <div class="ms-auto fw-500" id="totalAmountResult">0 RUB</div>
                  </div>
               </div>
               <button class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#OrderPaymentModal">Перейти
                  к олпате</button>
            </div>
            <div class="bg-second rounding-12 p-4">
               <h3 class="fw-700 fs-16 mb-2">Обратите внимание</h3>
               <p class="text-secondary fs-14 mb-0">
                  Пополняя баланс вы соглашаетесь с положениями, прописанными в <a class="text-primary" href="#!"
                     title="Пользовательское соглашение">соглашении</a>.
                  <a class="d-block mt-2 fs-12" data-bs-toggle="collapse" href="#collapseExample" role="button"
                     aria-expanded="false" aria-controls="collapseExample">
                     Подробнее <i class="far fa-angle-down ms-1"></i>
                  </a>
               </p>
               <div class="collapse pt-3" id="collapseExample">
                  <p class="text-secondary fs-14 d-flex">
                     <span class="me-2">—</span>
                     При оплате криптовалютой срок зачисления платежа может достигать 1 часа, пока не будут получены все
                     подтверждения транзакции.

                  </p>
                  <p class="text-secondary fs-14 d-flex m-0">
                     <span class="me-2">—</span>
                     При оплате через электронные кошельки может взиматься дополнительная комиссия шлюза (партнера),
                     через который осуществляется прием средств.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!--<div class="mobile-paybox d-flex flex-wrap d-lg-none align-items-center">-->
<!--   <div class="me-auto m-1 flex-fill">-->
<!--      <p class="mb-0 fw-500">Будет зачислено:</p>-->
<!--      <span class="ms-auto fs-14 text-secondary fw-500 m-1 flex-fill" id="totalAmountResultMobile">0 RUB</span>-->
<!--   </div>-->
<!--   <button class="btn btn-primary">Олпатить</button>-->
<!--</div>-->


<?php
   require "components/_footer.php";
?>