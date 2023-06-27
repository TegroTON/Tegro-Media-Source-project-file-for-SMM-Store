<?php
   require "components/_header.php";
?>
<div class="container pt-md-4">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-4">
            <div class="card p-4">
                <div class="mb-32 text-center">
                    <img class="mb-4" src="assets/images/emo/fingerup-emo.webp" alt="Продвижение в соцсетях" width="72"
                        height="72">
                    <div class="fs-24 fw-900">Оплата прошла <span class="d-block">успешно!</span></div>
                </div>
                <div class="card-list mb-2 fs-14">
                    <div class="card-list__item d-flex align-items-center box h-48">
                        <div class="text-secondary">Тариф</div>
                        <div class="fw-500 ms-auto">Эконом</div>
                    </div>
                    <div class="card-list__item d-flex align-items-center box h-48 py-3 ">
                        <div class="text-secondary">Цена за действие:</div>
                        <div class="ms-auto fw-500">0.23 RUB / шт.</div>
                    </div>
                    <div class="card-list__item d-flex align-items-center box h-48 border-0">
                        <div class="text-secondary">Подписчиков:</div>
                        <div class="ms-auto fw-500">5000 шт.</div>
                    </div>
                </div>
                <div class="bg-second rounding-6 text-secondary d-flex align-items-center m-0 p-3 fs-14 mb-3">
                    <div>Ваша скидка:</div>
                    <div class="ms-auto fw-600">-20% (120 RUB)</div>
                </div>
                <a class="btn btn-lg btn-primary w-100" href="/dashboard.php">Управление заказами <i class="fas fa-angle-right ms-2"></i></a>
            </div>
        </div>
    </div>
</div>
<?php
   require "components/_footer.php";
?>