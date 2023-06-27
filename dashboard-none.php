<?php
   require "components/_header-login.php";
?> <div class="container">
  <div class="row justify-content-center">
    <div class="col-12 col-xxl-10">
      <div class="row flex-nowrap mb-3 overflow-auto pb-4">
        <div class="col-md-6 col-lg-4">
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
        <div class="col-md-6 col-lg-4">
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
        <div class="col-md-6 col-lg-4">
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
            <a href="#!" class="nav-link btn active">Все заказы</a>
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
      <div class="card-border p-5 text-center">
      <img class="mb-3" src="assets/images/emo/sadface.png" loading="lazy" alt="Hamsa" width="64" height="64" />
          <p class="text-secondary mb-32">У вас ещё нет заказов</p>
          <a href="/order.php" class="link">Создать новый +</a>
      </div>
      </div>
    </div>
  </div>
</div>
</div> <?php
   require "components/_footer.php";
?>