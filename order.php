<?php
   require "components/_header.php";
?>
<div class="container">
   <div class="row justify-content-center">
      <div class="col-lg-12 col-xxl-10">
         <div class="ucatSlider__container">
            <div class="content-nav-pills nav nav-pills mb-4">
               <div class="ucatSlider">
                  <ul class="ucatSlider__wrapper">
                     <li class="nav-item ucatSlider__item">
                        <a href="/order" class="nav-link btn active"><i class="nav-link__icon far fa-users me-2"></i>Подписчики</a>
                     </li>
                     <li class="nav-item ucatSlider__item">
                        <a href="#!" class="nav-link btn"><i class="nav-link__icon far fa-thumbs-up me-2"></i>Лайки</a>
                     </li>
                     <li class="nav-item ucatSlider__item">
                        <a href="#!" class="nav-link btn"><i class="nav-link__icon far fa-play me-2"></i>IGTV</a>
                     </li>
                     <li class="nav-item ucatSlider__item">
                        <a href="#!" class="nav-link btn"><i class="nav-link__icon far fa-history me-2"></i>Истории</a>
                     </li>
                     <li class="nav-item ucatSlider__item">
                        <a href="#!" class="nav-link btn"><i class="nav-link__icon far fa-bullhorn me-2"></i>Трансляции</a>
                     </li>
                     <li class="nav-item ucatSlider__item">
                        <a href="#!" class="nav-link btn"><i
                           class="nav-link__icon far fa-comments-alt me-2"></i>Комментарии</a>
                     </li>
                     <li class="nav-item ucatSlider__item">
                        <a href="#!" class="nav-link btn"><i class="nav-link__icon far fa-star me-2"></i>Сохранения</a>
                     </li>
                     <li class="nav-item ucatSlider__item">
                        <a href="#!" class="nav-link btn"><i class="nav-link__icon far fa-share-alt me-2"></i>Охват и показы</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="ucatSlider__buttons">
               <button class="prev-button btn btn-icon" aria-label="Назад"><i class="fas fa-angle-left ph-color fs-20"></i></button>
               <button class="next-button btn btn-icon" aria-label="Вперёд"><i class="fas fa-angle-right ph-color fs-20"></i></button>
            </div>
         </div>
      </div>
   </div>
   
   <div class="row justify-content-center">
      <div class="col-lg-8 col-xxl-7">
         <div class="card mb-4">
            <div class="card-header">
               <h1 class="m-0 fs-20 fw-700">Подписчики в Инстаграм</h1>
            </div>
            <form action="">
            <div class="card-body">
               <div class="form-group mb-3">
                  <div class="input-group"> <!-- class: validation--error -->
                     <span class="input-group-text fs-24 text-secondary"><i class="fa-brands fa-instagram instagram-color"></i></span>
                     <input type="text" class="form-control" id="receivedData"
                        placeholder="https://www.instagram.com/username" required="">
                     <span class="input-group-text fs-20" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Укажите ссылку на ваш профиль в формате показаном в поле">
                     <i class="fa-solid fa-circle-info ph-color"></i>
                     </span>
                  </div>
                  <div class="feedback-message d-none">Ссылка обязательна к запонению</div>
               </div>
               <div class="dropdown mb-3">
                  <a class="tariff-dropdown fw-500" id="tariffDropdownButton" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Выберете тариф
                     <i class="fas fa-angle-down ms-auto"></i>
                  </a>
                  <ul class="dropdown-menu w-100 mt-1 border rounded-6" aria-labelledby="tariffDropdownButton">
                     <!--item-->
                     <li class="dropdown-item item-tariff btn d-flex align-items-center py-2 px-3" data-price="0.24"
                        data-description='
                        <div class="tag-box__item flex-fill text-center"><span>👨 Офферы</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>🚀 Медленная скорость</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>🛡️ Гарантия 60 дней</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>📦 От 150 шт.</span></div>
                        '>
                        <span class="me-auto">«Эконом+»</span>
                        <span class="ubadge fs-14 text-secondary">0.24 RUB / шт.</span>
                     </li>
                     <!--item-->
                     <li class="dropdown-item item-tariff btn d-flex align-items-center py-2 px-3" data-price="0.32"
                        data-description='
                        <div class="tag-box__item flex-fill text-center"><span>👨 Офферы</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>🚀 Средняя скорость</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>🛡️ Гарантия 60 дней</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>📦 От 150 шт.</span></div>
                        '>
                        <span class="me-auto">«Стандарт»</span>
                        <span class="ubadge fs-14 text-secondary">0.32 RUB / шт.</span>
                     </li>
                     <!--item-->
                     <li class="dropdown-item item-tariff btn d-flex align-items-center py-2 px-3" data-price="0.50"
                        data-description='
                        <div class="tag-box__item flex-fill text-center"><span>👨 Офферы</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>🚀 Средняя повышенная скорость</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>🛡️ Гарантия 45 дней</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>📦 От 150 шт.</span></div>
                        '>
                        <span class="me-auto">«Бизнес»</span>
                        <span class="ubadge fs-14 text-secondary">0.50 RUB / шт.</span>
                     </li>
                     <!--item-->
                     <li class="dropdown-item item-tariff btn d-flex align-items-center py-2 px-3" data-price="0.50"
                        data-description='
                        <div class="tag-box__item flex-fill text-center"><span>👨 Офферы</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>🚀 Высокая скорость</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>🛡️ Гарантия 60 дней</span></div>
                        <div class="tag-box__item flex-fill text-center"><span>📦 От 150 шт.</span></div>
                        '>
                        <span class="me-auto">«Премиум»</span>
                        <span class="ubadge fs-14 text-secondary">0.62 RUB / шт.</span>
                     </li>
                  </ul>
               </div>
               <div class="input-group mb-3" id="subscriber-input-group">
                  <div class="input-group-text p-0">
                     <button type="button" id="decrement-btn" class="btn icon-box wh-48 p-0 fs-18 ph-color" aria-label="Убавить подписчиков">
                        <i class="fas fa-minus"></i>
                     </button>
                  </div>
                  <input type="number" class="form-control text-center fs-20" id="subscriber-count" value="150"
                     aria-label="Кол-во подписчиков" required>
                  <div class="input-group-text p-0">
                     <button type="button" id="increment-btn" class="btn icon-box wh-48 p-0 fs-18 ph-color" aria-label="Добавить подписчиков">
                        <i class="fas fa-plus"></i>
                     </button>
                  </div>
                  <div class="input-group-text p-0 m-1">
                     <div class="rounding-6 py-2 px-3 bg-second text-secondary w-100">Подписчиков</div>
                  </div>
               </div>
               <div id="tariffDescription" class="tag-box d-flex flex-wrap"></div>
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

      <div class="col-lg-4 col-xxl-3 mt-4 mt-lg-0">
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
                  <div class="ms-auto fw-500"><span id="selectedSubscriberCount"></span> шт.</div>
               </div>
               <div class="card-list__item d-flex align-items-center box h-48 border-0">
                  <div class="text-secondary">К оплате:</div>
                  <div class="ms-auto fw-500"><span id="totalAmount"></span> RUB</div>
               </div>
            </div>
            <div class="form-group fs-14 mb-3">
               <div class="input-group mb-2">
                  <span class="input-group-text text-secondary"><i class="fas fa-percent"></i></span>
                  <input type="text" class="form-control fs-14" value="TegroDiscount20"
                     placeholder="Введите промокод">
               </div>
                <div class="bg-second rounding-6 text-secondary d-flex align-items-center m-0 p-3 fs-14 mb-3">
                    <div>Ваша скидка:</div>
                    <div class="ms-auto fw-600">-20% (120 RUB)</div>
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