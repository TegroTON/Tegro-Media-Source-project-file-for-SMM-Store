<?php
   require "components/_header.php";
  ?>

<section class="hero border-bottom">
    <div class="container">
        <div class="row align-items-center text-center text-lg-start">
            <div class="col-lg-6 col-xl-5">
                <div class="hero__uptitle">Быстрое и доступное</div>
                <h1 class="hero__headline mb-3">Продвижение <span class="d-block">в соцсетях</span></h1>
                <div class="fs-18 text-secondary mb-40">Лайки, подписчики, репосты и десятки других услуг для популярных социальных сетей.</div>
                <form id="fastStart" class="needs-validation" novalidate>
                    <div class="input-group">
                        <div class="input-group-text">
                            <div class="social-icon icon-24 fs-24"><i class="far fa-link"></i></div>
                        </div>
                        <input class="form-control" id="socialLink" placeholder="Ссылка на ваш профиль" required>
                        <div class="input-group-text p-1">
                            <button class="btn btn-primary d-none d-sm-block">Быстрый старт</button>
                            <button class="btn btn-primary btn-icon d-block d-sm-none" aria-label="Быстрый старт"><i class="fal fa-paper-plane me-1 fs-22"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="hero-present col-lg-6 col-xl-4 text-center d-none d-lg-block">
                <picture>
                    <source srcset="assets/images/webp/hero-image.webp" type="image/webp"></source>
                    <source srcset="assets/images/hero-image.png" type="image/jpeg">
                    <img class="hero-present__image hide" src="assets/images/hero-image.png" alt="Продвижение в соцсетях" width="214" height="650">
                    </source>
                </picture>
                <div class="hero-present__oval"></div>
                <div class="hero-present__oval-2"></div>
            </div>
            <div class="hero__list col-lg-12 col-xl-3 d-flex flex-row flex-lg-wrap d-xl-block mt-5 mt-xl-0 pt-5 pt-xl-0 overflow-auto">
                <div class="hero-card col-6 col-xl-12 mb-32">
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <div class="card-icon wh-56 me-lg-4 mb-4 mb-lg-0"><i class="fal fa-badge-check"></i></div>
                        <div class="hero-card__body">
                            <div class="fs-24 fw-800">2 941 244</div>
                            <div class="text-secondary px-3 px-sm-0">Завершенных заказов</div>
                        </div>
                    </div>
                    <div class="hero-card__line mt-4"></div>
                </div>
                <div class="hero-card col-6 col-xl-12 mb-32">
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <div class="card-icon wh-56 me-lg-4 mb-4 mb-lg-0"><i class="fal fa-users"></i></div>
                        <div class="hero-card__body">
                            <div class="fs-24 fw-800">98 041</div>
                            <div class="text-secondary px-3 px-sm-0">Постоянных клиентов</div>
                        </div>
                    </div>
                    <div class="hero-card__line mt-4"></div>
                </div>
                <div class="hero-card col-6 col-xl-12 mb-32">
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <div class="card-icon wh-56 me-lg-4 mb-4 mb-lg-0"><i class="fal fa-comments"></i></div>
                        <div class="hero-card__body">
                            <div class="fs-24 fw-800">32 000</div>
                            <div class="text-secondary px-3 px-sm-0">Отзывов</div>
                        </div>
                    </div>
                    <div class="hero-card__line mt-4"></div>
                </div>
                <div class="hero-card col-6 col-xl-12">
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <div class="card-icon wh-56 me-lg-4 mb-4 mb-lg-0"><i class="fal fa-face-grin-hearts"></i></div>
                        <div class="hero-card__body">
                            <div class="fs-24 fw-800">100%</div>
                            <div class="text-secondary px-3 px-sm-0">Рейтинг на Trustpilot</div>
                        </div>
                    </div>
                    <div class="hero-card__line d-block d-xl-none mt-4 mt-xl-0"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section border-bottom">
    <div class="container">
        <div class="text-center mb-64">
            <h2 class="section__heading mb-3">Еженедельные скидки</h2>
            <p class="mb-0 text-secondary fs-18">Не упусти возможность комплексного продвижения <span class="d-block">своей странички по хорошим скидкам!</span></p>
        </div>
        <?php require "components/_slider.php" ?>
    </div>
</section>
<section class="section border-bottom">
    <div class="container">
        <div class="text-center mb-64">
            <h2 class="section__heading mb-3">Каталог услуг</h2>
            <p class="mb-0 text-secondary fs-18">Обширный каталог услуг по продвижению <span class="d-block">профилей в социальных.</span></p>
        </div>
        <?php require "components/_service-catalog.php"; ?>
    </div>
</section>
<section class="section border-bottom">
    <div class="container">
        <div class="mb-64">
            <h2 class="section__heading mb-3">Преимущества</h2>
            <p class="mb-0 text-secondary fs-18">Привлекайте новых клиентов и повышайте доверие <span class="d-block">к своему бизнесу за счет высокой активности</span> в социальных сетях.</p>
        </div>
        <div class="row d-flex flex-nowrap flex-md-wrap overflow-auto">
            <div class="col-11 col-sm-10 col-md-6 col-lg-4 mb-4">
                <div class="card shadow--hover p-32 h-100">
                    <div class="card-icon wh-72 mb-32 rounding-16"><i class="fal fa-shield-alt fs-40"></i></div>
                    <div class="fs-24 fw-700 mb-2">100% Гарантия</div>
                    <p class="text-secondary mb-0">Если ваш заказ не был выполнен - мы вернем Вам денежные средства в 100% полном объеме!</p>
                </div>
            </div>
            <div class="col-11 col-sm-10 col-md-6 col-lg-4 mb-4">
                <div class="card shadow--hover p-32 h-100">
                    <div class="card-icon wh-72 mb-32 rounding-16"><i class="fal fa-tachometer-alt-fastest fs-40"></i></div>
                    <div class="fs-24 fw-700 mb-2">Быстрое выполнение</div>
                    <p class="text-secondary mb-0">Вы можете наблюдать первые результаты рекламной кампании сразу после заказа.</p>
                </div>
            </div>
            <div class="col-11 col-sm-10 col-md-6 col-lg-4 mb-4">
                <div class="card shadow--hover p-32 h-100">
                    <div class="card-icon wh-72 mb-32 rounding-16"><i class="fal fa-badge-percent fs-40"></i></div>
                    <div class="fs-24 fw-700 mb-2">30% Cкидок и бонусов</div>
                    <p class="text-secondary mb-0">Большие накопительные 15% скидки и 15% бонусы к пополнению баланса позволят Вам сэкономить до 30%.</p>
                </div>
            </div>
            <div class="col-11 col-sm-10 col-md-6 col-lg-4 mb-4">
                <div class="card shadow--hover p-32 h-100">
                    <div class="card-icon wh-72 mb-32 rounding-16"><i class="fal fa-user-chart fs-40"></i></div>
                    <div class="fs-24 fw-700 mb-2">Живая система</div>
                    <p class="text-secondary mb-0">Исключительно безопасные методы привлечения целевой аудитории для живой раскрутки.</p>
                </div>
            </div>
            <div class="col col-md-6 col-lg-4 mb-4">
                <div class="card shadow--hover p-32 h-100">
                    <div class="card-icon wh-72 mb-32 rounding-16"><i class="fal fa-user-secret fs-40"></i></div>
                    <div class="fs-24 fw-700 mb-2">Конфиденциально</div>
                    <p class="text-secondary mb-0">Никто не узнает кто заказывает услуги, потому что мы не передаём данные третьим лицам.</p>
                </div>
            </div>
            <div class="col-11 col-sm-10 col-md-6 col-lg-4 mb-4">
                <div class="card shadow--hover p-32 h-100">
                    <div class="card-icon wh-72 mb-32 rounding-16"><i class="fal fa-life-ring fs-40"></i></div>
                    <div class="fs-24 fw-700 mb-2">24/7 Помощь</div>
                    <p class="text-secondary mb-0">Ни одно письмо в Службу Поддержку не останется без ответа наших специалистов.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="rocket-box d-none d-lg-block">
        <picture>
            <source srcset="assets/images/webp/rocket.webp" type="image/webp"></source>
            <source srcset="assets/images/rocket.png" type="image/jpeg"><img class="rocket__image lazyload" loading="lazy" data-src="assets/images/hero-image.png" alt="Продвижение в соцсетях" width="312" height="482"></source>
        </picture>
        <div class="rocket-box__oval"></div>
        <div class="rocket-box__oval-2"></div>
    </div>
</section>
<section class="section about-section">
    <div class="container pb-150">
        <div class="bg-gradient py-104 rounding-12">
            <div class="row">
                <div class="hero-present col-lg-5 d-none d-lg-block">
                    <picture>
                        <source srcset="assets/images/webp/about.webp?v=2" type="image/webp"></source>
                        <source srcset="assets/images/about.png?v=2" type="image/jpeg"><img class="about__image lazyload" loading="lazy" data-src="assets/images/about.png?v=2" alt="Tegro - сервис раскрутки " width="408" height="580"></source>
                    </picture>
                    <div class="hero-present__oval"></div>
                    <div class="hero-present__oval-2"></div>
                </div>
                <div class="col-lg-6 text-white px-5 px-lg-0">
                    <h2 class="section__heading mb-3">Готовы начать?</h2>
                    <p class="mb-40 fs-18">Tegro - сервис раскрутки в социальных сетях с личной <span class="d-block">командой профессионалов в области рекламы и продвижения.</span> <span class="d-block">Автоматическая система используется для 100% реальной,</span> живой и эффективной раскрутки.</p>
                    <form id="fastStart" class="needs-validation col-lg-9" novalidate>
                        <div class="input-group">
                            <div class="input-group-text">
                                <div class="social-icon icon-24 fs-20"><i class="fas fa-link"></i></div>
                            </div>
                            <input class="form-control" id="socialLinkFooter" placeholder="Ссылка на ваш профиль" required>
                            <div class="input-group-text p-1">
                                <button class="btn btn-primary fs-14 d-none d-sm-block">Быстрый старт</button>
                                <button class="btn btn-primary btn-icon d-block d-sm-none" aria-label="Быстрый старт"><i class="fal fa-paper-plane me-1 fs-22"></i></button>
                            </div>
                            <div class="valid-tooltip">Пожалуйста, введите корректную ссылку на соцсеть.</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
   require "components/_footer.php";
?>