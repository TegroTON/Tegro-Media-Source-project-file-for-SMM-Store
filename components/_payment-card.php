<form action="">
<ul class="row nav nav-pills flex-nowrap justify-vontent-between overflow-auto mb-4" id="pills-tab" role="tablist">
  <li class="nav-item col-8 col-sm-5 col-md-4 px-2" role="presentation">
    <button class="nav-link w-100 fw-medium fs-16 active" id="pills-cards-tab" data-bs-toggle="pill" data-bs-target="#pills-cards" type="button" role="tab" aria-controls="pills-cards" aria-selected="true">
      <i class="fa-regular fa-credit-card me-2"></i>Карты </button>
  </li>
  <li class="nav-item col-8 col-sm-5 col-md-4 px-2" role="presentation">
    <button class="nav-link w-100 fw-medium fs-16" id="pills-ewallets-tab" data-bs-toggle="pill" data-bs-target="#pills-ewallets" type="button" role="tab" aria-controls="pills-ewallets" aria-selected="false" tabindex="-1">
      <i class="fa-brands fa-paypal me-2"></i>Е-кошельки </button>
  </li>
  <li class="nav-item col-8 col-sm-5 col-md-4 px-2" role="presentation">
    <button class="nav-link w-100 fw-medium fs-16" id="pills-crypto-tab" data-bs-toggle="pill" data-bs-target="#pills-crypto" type="button" role="tab" aria-controls="pills-crypto" aria-selected="false" tabindex="-1">
      <i class="fa-solid fa-bitcoin-sign me-2"></i>Криптовалюты </button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade active show" id="pills-cards" role="tabpanel" aria-labelledby="pills-cards-tab" tabindex="0">
    <div class="row payment-method">
      <div class="col-6 col-md-4 mb-4  px-2" data-id="79">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="79" id="ps_79" aria-label="Карта (рубли)" checked="">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/card-rub.png" alt="Карта (рубли)">
          <div class="fs-14 fw-500 mt-3"> Карта (рубли) </div>
          <label class="payment-method__label form-check-label" for="ps_79"></label>
        </div>
      </div>
      <div class="col-6 col-md-4 mb-4  px-2" data-id="78">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="78" id="ps_78" aria-label="Карта (доллары)">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/card-dollar.png" alt="Карта (доллары)">
          <div class="fs-14 fw-500 mt-3"> Карта (доллары) </div>
          <label class="payment-method__label form-check-label" for="ps_78"></label>
        </div>
      </div>
      <div class="col-6 col-md-4 mb-4  px-2" data-id="71">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="71" id="ps_71" aria-label="Yandex Pay">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/yandex.png" alt="Yandex Pay">
          <div class="fs-14 fw-500 mt-3"> Yandex Pay </div>
          <label class="payment-method__label form-check-label" for="ps_71"></label>
        </div>
      </div>
      <div class="col-6 col-md-4 mb-4  px-2" data-id="80">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="80" id="ps_80" aria-label="СБП (карты РФ)">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/sbp.png" alt="СБП (карты РФ)">
          <div class="fs-14 fw-500 mt-3"> СБП (карты РФ) </div>
          <label class="payment-method__label form-check-label" for="ps_80"></label>
        </div>
      </div>
      <div class="col-6 col-md-4 mb-4  px-2" data-id="42">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="42" id="ps_42" aria-label="Сбербанк">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/sberbank.png" alt="Сбербанк">
          <div class="fs-14 fw-500 mt-3"> Сбербанк </div>
          <label class="payment-method__label form-check-label" for="ps_42"></label>
        </div>
      </div>
      <div class="col-6 col-md-4 mb-4  px-2" data-id="51">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="51" id="ps_51" aria-label="Карта МИР">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/mir.png" alt="Карта МИР">
          <div class="fs-14 fw-500 mt-3"> Карта МИР </div>
          <label class="payment-method__label form-check-label" for="ps_51"></label>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-ewallets" role="tabpanel" aria-labelledby="pills-ewallets-tab" tabindex="0">
    <div class="row payment-method">
      <div class="col-6 col-md-4 mb-4  px-2" data-id="32">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="32" id="ps_32" aria-label="Payeer">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/payeer.png" alt="Payeer">
          <div class="fs-14 fw-500 mt-3"> Payeer </div>
          <label class="payment-method__label form-check-label" for="ps_32"></label>
        </div>
      </div>
      <div class="col-6 col-md-4 mb-4  px-2" data-id="75">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="75" id="ps_75" aria-label="ЮMoney">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/ymoney.png" alt="ЮMoney">
          <div class="fs-14 fw-500 mt-3"> ЮMoney </div>
          <label class="payment-method__label form-check-label" for="ps_75"></label>
        </div>
      </div>
      <div class="col-6 col-md-4 mb-4  px-2" data-id="69">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="69" id="ps_69" aria-label="QIWI">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/qiwi.png" alt="QIWI">
          <div class="fs-14 fw-500 mt-3"> QIWI </div>
          <label class="payment-method__label form-check-label" for="ps_69"></label>
        </div>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="pills-crypto" role="tabpanel" aria-labelledby="pills-crypto-tab" tabindex="0">
    <div class="row payment-method">
      <div class="col-6 col-md-4 mb-4  px-2" data-id="36">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="36" id="ps_36" aria-label="Coinpayments">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/coinpayments.png" alt="Coinpayments">
          <div class="fs-14 fw-500 mt-3"> Coinpayments </div>
          <label class="payment-method__label form-check-label" for="ps_36"></label>
        </div>
      </div>
      <div class="col-6 col-md-4 mb-4  px-2" data-id="73">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="73" id="ps_73" aria-label="Binance Pay">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/binance.png" alt="Binance Pay">
          <div class="fs-14 fw-500 mt-3"> Binance Pay </div>
          <label class="payment-method__label form-check-label" for="ps_73"></label>
        </div>
      </div>
      <div class="col-6 col-md-4 mb-4  px-2" data-id="74">
        <div class="payment-method__item h-100">
          <input type="radio" class="form-check-input" name="paySystemId" value="74" id="ps_74" aria-label="Tether USDT">
          <img class="payment-method__image lazyload" loading="lazy" data-src="/assets/images/payment-icons/tether.png" alt="Tether USDT">
          <div class="fs-14 fw-500 mt-3"> Tether USDT </div>
          <label class="payment-method__label form-check-label" for="ps_74"></label>
        </div>
      </div>
    </div>
  </div>
</div>
</form>