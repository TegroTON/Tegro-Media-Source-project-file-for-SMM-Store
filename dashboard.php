<?php
   require "components/_header-login.php";
?> <div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-xxl-10">
      <div class="row flex-nowrap overflow-auto pb-4 mb-lg-2">
        <div class="col-10 col-sm-8 col-md-5 col-lg-4">
          <div class="card shadow--hover p-4 fw-500">
            <div class="mb-4">Баланс</div>
            <div class="fs-24 fw-700">17 860.8 ₽</div>
            <div class="fs-14 text-secondary">
              <span class="color-green">+960 ₽</span> / на этой неделе
            </div>
            <div class="fs-28 position-absolute top-0 end-0 my-2 mx-3 color-gradient">
              <i class="fal fa-wallet"></i>
            </div>
          </div>
        </div>
        <div class="col-10 col-sm-8 col-md-5 col-lg-4">
          <div class="card shadow--hover p-4 fw-500">
            <div class="mb-4">Ваши заказы</div>
            <div class="fs-24 fw-700">18</div>
            <div class="fs-14 text-secondary">
              <span class="color-green">4</span> / на этой неделе
            </div>
            <div class="fs-28 position-absolute top-0 end-0 my-2 mx-3 color-gradient">
              <i class="fal fa-list"></i>
            </div>
          </div>
        </div>
        <div class="col-10 col-sm-8 col-md-5 col-lg-4">
          <div class="card shadow--hover p-4 fw-500">
            <div class="mb-4">Бюджет</div>
            <div class="fs-24 fw-700">18 819 ₽</div>
            <div class="fs-14 text-secondary"> Общая сумма за всё время </div>
            <div class="fs-28 position-absolute top-0 end-0 my-2 mx-3 color-gradient">
              <i class="fal fa-coins"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="content-nav-pills nav nav-pills d-flex align-items-center mb-4">
        <ul class="d-flex flex-nowrap overflow-auto me-auto">
          <li class="nav-item ucatSlider__item">
            <a href="/dashboard-none.php" class="nav-link btn active">Все заказы</a>
          </li>
          <li class="nav-item ucatSlider__item">
            <a href="#!" class="nav-link btn">В процессе</a>
          </li>
          <li class="nav-item ucatSlider__item">
            <a href="#!" class="nav-link btn">Завершён</a>
          </li>
          <li class="nav-item ucatSlider__item">
            <a href="#!" class="nav-link btn">Отменён</a>
          </li>
        </ul>
        <form class="flex-fill m-1 ms-lg-5 ">
          <div class="input-group rounfing-8">
            <span class="input-group-text">
              <i class="fa-regular fa-magnifying-glass"></i>
            </span>
            <input type="text" class="form-control" placeholder="Поиск по ссылке или ID">
          </div>
        </form>
      </div>
      <div class="flex-table">
        <div class="flex-thead mb-3">
          <div class="flex-th">Заказ</div>
          <div class="flex-th d-none d-lg-block text-end pe-4">Коль-во</div>
          <div class="flex-th d-none d-lg-block text-center">Цена</div>
          <div class="flex-th d-none d-lg-block text-center ps-4">Статсус</div>
        </div>
        <div class="flex-tbody">
          <!--item-->
          <div class="flex-tr flex-row" data-bs-toggle="modal" data-bs-target="#OrderActiveModal">
            <div class="flex-td d-flex align-items-center">
              <div class="icon-box wh-40 rounding-8 bg-second me-4">
                <i class="fab fa-instagram fs-24 instagram-color"></i>
              </div>
              <div class="__box">
                <div class="flex-td__OrderName">Подписчики (Эконом +)</div>
                <div class="text-secondary fs-14">20 мая, 14:24</div>
              </div>
            </div>
            <div class="flex-td text-end d-none d-md-block pe-0 pe-lg-4">
              <div class="flex-td__Volume">2500</div>
              <div class="text-secondary fs-14">Подписчиков</div>
            </div>
            <div class="flex-td d-none d-md-block text-center">
              <span> 541 ₽</span>
            </div>
            <div class="flex-td">
              <div class="d-flex align-items-center justify-content-center color-green fs-14">
                <span class="circle bg-green me-2"></span> В процессе
              </div>
            </div>
          </div>
          <!--item-->
          <div class="flex-tr flex-row">
            <div class="flex-td d-flex align-items-center">
              <div class="icon-box wh-40 rounding-8 bg-second me-4">
                <i class="fab fa-tiktok fs-24 tiktok-color"></i>
              </div>
              <div class="__box">
                <div class="flex-td__OrderName">Лайки (Премиум)</div>
                <div class="text-secondary fs-14">19 мая, 17:16</div>
              </div>
            </div>
            <div class="flex-td d-none d-md-block text-end pe-0 pe-lg-4">
              <div class="flex-td__Volume">800</div>
              <div class="text-secondary fs-14">Лайков</div>
            </div>
            <div class="flex-td d-none d-md-block text-center">
              <span>1999 ₽</span>
            </div>
            <div class="flex-td">
              <div class="d-flex align-items-center justify-content-center color-green fs-14">
                <span class="circle bg-green me-2"></span> В процессе
              </div>
            </div>
          </div>
          <!--item-->
          <div class="flex-tr flex-row" data-bs-toggle="modal" data-bs-target="#OrderNotPaidModal">
            <div class="flex-td d-flex align-items-center">
              <div class="icon-box wh-40 rounding-8 bg-second me-4">
                <i class="fab fa-youtube fs-24 youtube-color"></i>
              </div>
              <div class="__box">
                <div class="flex-td__OrderName">Комплексный пакет услуг</div>
                <div class="text-secondary fs-14">5 апр., 21:40</div>
              </div>
            </div>
            <div class="flex-td d-none d-md-block text-end pe-0 pe-lg-4">
              <i class="far fa-list-ul text-secondary fs-20"></i>
            </div>
            <div class="flex-td d-none d-md-block text-center">
              <span>2499 ₽</span>
            </div>
            <div class="flex-td">
              <div class="d-flex align-items-center justify-content-center color-red fs-14">
                <span class="circle bg-red me-2"></span> Не оплачен
              </div>
            </div>
          </div>
          <!--item-->
          <div class="flex-tr flex-row">
            <div class="flex-td d-flex align-items-center">
              <div class="icon-box wh-40 rounding-8 bg-second me-4">
                <i class="fab fa-telegram fs-24 telegram-color"></i>
              </div>
              <div class="__box">
                <div class="flex-td__OrderName">Реакции на пост</div>
                <div class="text-secondary fs-14">5 апр., 18:13</div>
              </div>
            </div>
            <div class="flex-td d-none d-md-block text-end pe-0 pe-lg-4">
              <div class="flex-td__Volume">100</div>
              <div class="text-secondary fs-14">Реакций</div>
            </div>
            <div class="flex-td d-none d-md-block text-center">
              <span>360 ₽</span>
            </div>
            <div class="flex-td">
              <div class="d-flex align-items-center justify-content-center text-secondary fs-14">
                <span class="circle me-2"></span> Завершён
              </div>
            </div>
          </div>
          <!--item-->
          <div class="flex-tr flex-row">
            <div class="flex-td d-flex align-items-center">
              <div class="icon-box wh-40 rounding-8 bg-second me-4">
                <i class="fab fa-facebook fs-24 facebook-color"></i>
              </div>
              <div class="__box">
                <div class="flex-td__OrderName">Подписчики в группу (Эконом +)</div>
                <div class="text-secondary fs-14">1 апр., 09:02</div>
              </div>
            </div>
            <div class="flex-td d-none d-md-block text-end pe-0 pe-lg-4">
              <div class="flex-td__Volume">6000</div>
              <div class="text-secondary fs-14">Подписчиков</div>
            </div>
            <div class="flex-td d-none d-md-block text-center">
              <span>820 ₽</span>
            </div>
            <div class="flex-td">
              <div class="d-flex align-items-center justify-content-center color-green fs-14">
                <span class="circle bg-green me-2"></span> В процессе
              </div>
            </div>
          </div>
          <!--item-->
          <div class="flex-tr flex-row">
            <div class="flex-td d-flex align-items-center">
              <div class="icon-box wh-40 rounding-8 bg-second me-4">
                <i class="fab fa-twitter fs-24 twitter-color"></i>
              </div>
              <div class="__box">
                <div class="flex-td__OrderName">Репосты на пост</div>
                <div class="text-secondary fs-14">26 марта, 13:10</div>
              </div>
            </div>
            <div class="flex-td d-none d-md-block text-end pe-0 pe-lg-4">
              <div class="flex-td__Volume">350</div>
              <div class="text-secondary fs-14">Репостов</div>
            </div>
            <div class="flex-td d-none d-md-block text-center">
              <span>440 ₽</span>
            </div>
            <div class="flex-td">
              <div class="d-flex align-items-center justify-content-center color-green fs-14">
                <span class="circle bg-green me-2"></span> В процессе
              </div>
            </div>
          </div>
          <!--item-->
          <div class="flex-tr flex-row">
            <div class="flex-td d-flex align-items-center">
              <div class="icon-box wh-40 rounding-8 bg-second me-4">
                <i class="fab fa-twitch fs-24 twitch-color"></i>
              </div>
              <div class="__box">
                <div class="flex-td__OrderName">Подписчики (Бизнес +)</div>
                <div class="text-secondary fs-14">24 марта, 16:11</div>
              </div>
            </div>
            <div class="flex-td d-none d-md-block text-end pe-0 pe-lg-4">
              <div class="flex-td__Volume">9000</div>
              <div class="text-secondary fs-14">Подписчиков</div>
            </div>
            <div class="flex-td d-none d-md-block text-center">
              <span>2300 ₽</span>
            </div>
            <div class="flex-td">
              <div class="d-flex align-items-center justify-content-center text-secondary fs-14">
                <span class="circle me-2"></span> Завершён
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <button class="btn btn-secondary">Показать ещё</button>
      </div>
    </div>
  </div>
</div>
</div> 



<?php
   require "components/_footer.php";
?>