
document.addEventListener('DOMContentLoaded', function() {

// Сhange Theme
const btn = document.querySelector(".toggle-theme");
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
const themeSwitch = document.getElementById("themeSwitch");
const themeIcon = document.querySelector(".theme-icon");

// Функция для обновления иконки на основе темы
function updateThemeIcon(theme) {
  themeIcon.classList.toggle("fa-lightbulb-on", theme === "light");
  themeIcon.classList.toggle("fa-lightbulb", theme === "dark");
}

// Функция для установки темы и обновления состояния checkbox
function setTheme(theme) {
  document.body.classList.remove("dark", "light");
  document.body.classList.add(theme);
  themeSwitch.checked = theme === "dark";
  updateThemeIcon(theme);
  document.cookie = "theme=" + theme;
}

// Чтение значения cookie при загрузке страницы
window.addEventListener("DOMContentLoaded", function() {
  const themeCookie = document.cookie.match(/theme=(dark|light)/);
  const theme = themeCookie ? themeCookie[1] : prefersDarkScheme.matches ? "dark" : "light";
  setTheme(theme);
});

btn.addEventListener("click", function () {
  let theme;
  if (document.body.classList.contains("dark")) {
    document.body.classList.remove("dark");
    document.body.classList.add("light");
    theme = "light";
  } else if (document.body.classList.contains("light")) {
    document.body.classList.remove("light");
    document.body.classList.add("dark");
    theme = "dark";
  } else {
    if (prefersDarkScheme.matches) {
      document.body.classList.add("light");
      theme = "light";
    } else {
      document.body.classList.add("dark");
      theme = "dark";
    }
  }
  setTheme(theme);
});




  
  // Fast Start 
  const orderForm = document.getElementById("fastStart");
  const socialLinkInput = document.getElementById("socialLink");
  const socialIcon = document.querySelector(".social-icon");
  
  if (orderForm) {
    orderForm.addEventListener("submit", function(event) {
      event.preventDefault();
  
      var socialLink = document.getElementById("socialLink").value;
  
      if (socialLink.includes("t.me")) {
        localStorage.setItem("link", socialLink);
        window.location.href = "/order-telegram.php";
      } else if (socialLink.includes("instagram")) {
        localStorage.setItem("link", socialLink);
        window.location.href = "/order.php";
      } else if (socialLink.includes("tiktok")) {
        localStorage.setItem("link", socialLink);
        window.location.href = "/order-tiktok.php";
      } else {
        document.getElementById("socialLink").classList.add("is-invalid");
      }
    });
  
    if (socialLinkInput) {
      socialLinkInput.addEventListener("input", function() {
        var socialLink = this.value;
        var icon; // Объявляем переменную icon
  
        while (socialIcon.firstChild) {
          socialIcon.firstChild.remove();
        }
  
        if (socialLink.includes("t.me")) {
          icon = document.createElement("i");
          icon.classList.add("fab", "fa-telegram", "telegram-color");
          socialIcon.appendChild(icon);
        } else if (socialLink.includes("instagram")) {
          icon = document.createElement("i");
          icon.classList.add("fab", "fa-instagram", "instagram-color");
          socialIcon.appendChild(icon);
        } else if (socialLink.includes("tiktok")) {
          icon = document.createElement("i");
          icon.classList.add("fab", "fa-tiktok", "tiktok-color");
          socialIcon.appendChild(icon);
        } else {
          var defaultIcon = document.createElement("i");
          defaultIcon.classList.add("fas", "fa-link");
          socialIcon.appendChild(defaultIcon);
        }
      });
    }
  }

// Добавляет ссылку полуеную из DOM в поле (от Fast Start)
window.addEventListener("DOMContentLoaded", function() {
  if (document.getElementById("receivedData")) {
    var receivedData = localStorage.getItem("link");

    if (receivedData) {
      var receivedDataField = document.getElementById("receivedData");
      receivedDataField.value = receivedData;
      receivedDataField.focus();

      // Очистка данных из localStorage после использования
      localStorage.removeItem("link");
    }
  }
});

// Order Form
// Функция обновления выбранного тарифа
if (document.querySelector('#tariffDropdownButton')) {
function updateSelectedTariff() {
  const tariffButton = document.getElementById('tariffDropdownButton');
  const selectedTariff = document.querySelector('.item-tariff.active');
  const subscriberCountInput = document.getElementById('subscriber-count');
  const inputGroup = document.getElementById('subscriber-input-group');
  const selectedTariffNameElement = document.getElementById('selectedTariffName');
  const selectedTariffPriceElement = document.getElementById('selectedTariffPrice');
  const selectedSubscriberCountElement = document.getElementById('selectedSubscriberCount');
  const totalAmountElement = document.getElementById('totalAmount');

  if (selectedTariff) {
    const tariffName = selectedTariff.innerHTML;
    const tariffPrice = parseFloat(selectedTariff.getAttribute('data-price'));
    const subscriberCount = parseInt(subscriberCountInput.value);
    const totalAmount = tariffPrice * subscriberCount;

    selectedTariffNameElement.innerHTML = tariffName;
    selectedTariffPriceElement.innerHTML = `${tariffPrice.toFixed(2)}`;
    selectedSubscriberCountElement.innerHTML = `${subscriberCount}`;
    totalAmountElement.innerHTML = `${totalAmount.toFixed(2)}`;

    subscriberCountInput.disabled = false;
    inputGroup.classList.remove('disabled');
  } else {
    selectedTariffNameElement.innerHTML = '«Не выбран»';
    selectedTariffPriceElement.innerHTML = '0.00';
    selectedSubscriberCountElement.innerHTML = '0';
    totalAmountElement.innerHTML = '0.00';

    subscriberCountInput.disabled = true;
    inputGroup.classList.add('disabled');
  }
}

// Обработчик события выбора тарифного плана
const dropdownItems = document.querySelectorAll('.item-tariff');
dropdownItems.forEach((item) => {
  item.addEventListener('click', (event) => {
    event.preventDefault();

    dropdownItems.forEach((item) => {
      item.classList.remove('active');
    });

    item.classList.add('active');

    const tariffButton = document.getElementById('tariffDropdownButton');
    tariffButton.innerHTML = item.innerHTML;

    const tariffDescriptionHtml = item.getAttribute('data-description');
    document.getElementById('tariffDescription').innerHTML = tariffDescriptionHtml;

    updateSelectedTariff();
  });
});

// Обработчик события изменения количества подписчиков
const subscriberCountElement = document.getElementById('subscriber-count');
subscriberCountElement?.addEventListener('input', updateSelectedTariff);

// Обработчик события нажатия на кнопки увеличения и уменьшения
const incrementBtnElement = document.getElementById('increment-btn');
const decrementBtnElement = document.getElementById('decrement-btn');
const subscriberCountInputElement = document.getElementById('subscriber-count');

if (incrementBtnElement && decrementBtnElement && subscriberCountInputElement) {
  incrementBtnElement.addEventListener('click', () => handleButtonClick(10));
  decrementBtnElement.addEventListener('click', () => handleButtonClick(-10));
}

function handleButtonClick(amount) {
  const subscriberCount = parseInt(subscriberCountInputElement.value) + amount;
  if (subscriberCount > 150 || amount > 0) {
    changeSubscriberCount(subscriberCount);
    updateSelectedTariff();
  }
}

function changeSubscriberCount(count) {
  subscriberCountInputElement.value = count;
  subscriberCountInputElement.dispatchEvent(new Event('input'));
}

// Инициализация состояния полей при загрузке страницы
updateSelectedTariff();

}


// Обработчик события изменения суммы
function updateResult() {
  const amountInputElement = document.getElementById('amount-input');
  const amount = amountInputElement.value;

  let bonus = 0;
  let bonusAmount = 0;

  if (amount >= 1000 && amount < 2000) {
    bonus = 0.1; // 10% бонус, если сумма больше или равна 1000 и меньше 2000
  } else if (amount >= 2000) {
    bonus = 0.07; // 7% бонус, если сумма больше или равна 2000
  }

  bonusAmount = (amount * bonus).toFixed(2); // Округляем значение до 2 десятичных знаков
  const bonusPercentage = (bonus * 100).toFixed(0); // Округляем процентное значение до целого числа
  const totalAmount = +amount + +bonusAmount; // Прибавляем сумму бонуса к исходной сумме

  document.getElementById('balanceResult').innerHTML = `${amount} RUB`;
  document.getElementById('bonusResult').innerHTML = `${bonusAmount} RUB / ${bonusPercentage}%`;
  document.getElementById('totalAmountResult').innerHTML = `${totalAmount} RUB`;
  document.getElementById('totalAmountResultMobile').innerHTML = `${totalAmount} RUB`;
}

window.insertAmount = function(amount) {
  const amountInputElement = document.getElementById('amount-input');
  if (amountInputElement) {
    amountInputElement.value = amount;
    updateResult();
  }
}

const amountInputElement = document.getElementById('amount-input');
if (amountInputElement) {
  amountInputElement.addEventListener('input', updateResult);
}


// Catego Slider
if (document.querySelector('.ucatSlider')) {
  const slider = document.querySelector('.ucatSlider');
  const sliderWrapper = document.querySelector('.ucatSlider__wrapper');
  const sliderItems = document.querySelectorAll('.ucatSlider__item');
  const prevButton = document.querySelector('.prev-button');
  const nextButton = document.querySelector('.next-button');

  let position = 0;
  let touchStartX = 0;
  const visibleItems = Math.floor(slider.offsetWidth / sliderItems[0].offsetWidth);

  const updateButtonStates = () => {
    const minPosition = -(sliderItems.length - visibleItems) * sliderItems[0].offsetWidth;
    prevButton.disabled = position >= 0;
    nextButton.disabled = position <= minPosition;
  };

  const updateSliderPosition = () => {
    slider.style.transform = `translateX(${position}px)`;
  };

  prevButton.addEventListener('click', () => {
    if (position < 0) {
      position += 2 * sliderItems[0].offsetWidth;
      position = Math.min(position, 0);
      updateSliderPosition();
      updateButtonStates();
    }
  });

  nextButton.addEventListener('click', () => {
    const minPosition = -(sliderItems.length - visibleItems) * sliderItems[0].offsetWidth;
    if (position > minPosition) {
      position -= 2 * sliderItems[0].offsetWidth;
      position = Math.max(position, minPosition);
      updateSliderPosition();
      updateButtonStates();
    }
  });



  window.addEventListener('resize', () => {
    position = 0;
    updateSliderPosition();
    updateButtonStates();
  });

  updateButtonStates();
}



// Landing Slider 
if (document.querySelector('.uslider')) {
  const slider = document.querySelector('.uslider');
  const slideContainer = document.querySelector('.uslider-container');
  const slides = document.querySelectorAll('.uslide');
  const prevBtn = document.querySelector('.prev-btn');
  const nextBtn = document.querySelector('.next-btn');

  let slideIndex = 0;
  let slidesVisible = 1;
  let touchStartX = 0;
  let touchEndX = 0;

  const updateSliderAndSetActiveSlide = () => {
    const windowWidth = window.innerWidth;

    if (windowWidth >= 1400) {
      slidesVisible = 3;
    } else if (windowWidth >= 800) {
      slidesVisible = 2;
    } else {
      slidesVisible = 1;
    }

    const slideWidth = slider.offsetWidth / slidesVisible;

    slideContainer.style.width = `${slideWidth * slides.length}px`;
    slides.forEach((slide, index) => {
      const isSlideActive = index === slideIndex;
      slide.style.width = `${slideWidth}px`;
      slide.classList.toggle('active', isSlideActive);
    });

    prevBtn.disabled = slideIndex === 0;
    nextBtn.disabled = slideIndex >= slides.length - slidesVisible;

    slideContainer.style.transform = `translateX(-${slideWidth * slideIndex}px)`;
  };

  const handleTouchStart = (event) => {
    touchStartX = event.touches[0].clientX;
  };

  const handleTouchEnd = (event) => {
    touchEndX = event.changedTouches[0].clientX;
    handleGesture();
  };

  const handleGesture = () => {
    if (touchEndX < touchStartX) {
      // Swipe left
      updateIndexAndSlider('next');
    }

    if (touchEndX > touchStartX) {
      // Swipe right
      updateIndexAndSlider('prev');
    }
  };

  const updateIndexAndSlider = (direction) => {
    if (direction === 'prev') {
      slideIndex = slideIndex === 0 ? 0 : slideIndex - 1;
    } else {
      slideIndex = slideIndex >= slides.length - slidesVisible ? slideIndex : slideIndex + 1;
    }

    updateSliderAndSetActiveSlide();
  };

  prevBtn.addEventListener('click', () => updateIndexAndSlider('prev'));
  nextBtn.addEventListener('click', () => updateIndexAndSlider('next'));
  slideContainer.addEventListener('touchstart', handleTouchStart);
  slideContainer.addEventListener('touchend', handleTouchEnd);

  window.addEventListener('resize', updateSliderAndSetActiveSlide); // Добавляем обработчик события resize

  updateSliderAndSetActiveSlide();
}

});



// Password eye 
function showPassword(inputId, iconId) {
  var passwordInput = document.getElementById(inputId);
  var passwordIcon = document.getElementById(iconId);

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    passwordIcon.innerHTML = "<i class='far fa-eye'></i>";
  } else {
    passwordInput.type = "password";
    passwordIcon.innerHTML = "<i class='far fa-eye-slash'></i>";
  }
}

// Tooltips
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))


  var lazyloadImages = document.querySelectorAll(".lazyload");
  var imageObserver = new IntersectionObserver(function(entries, observer) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        var image = entry.target;
        image.src = image.dataset.src;
        image.classList.remove("lazyload");
        imageObserver.unobserve(image);
      }
    });
  });

  lazyloadImages.forEach(function(image) {
    imageObserver.observe(image);
  });

// Copy Text
      function copyToClipboard(inputId) {
        var input = document.getElementById(inputId);
        input.select();
        input.setSelectionRange(0, 99999); // Для мобильных устройств

        document.execCommand("copy");

        // Отображение Toasts
        var toastElement = document.getElementById("copyToast");
        var toast = new bootstrap.Toast(toastElement);
        toast.show();
      }
      
      
// Получаем текущий URL страницы
var currentUrl = window.location.href;

// Получаем все ссылки на странице
var links = document.getElementsByTagName('a');

// Перебираем все ссылки и добавляем класс 'active' к активной странице
for (var i = 0; i < links.length; i++) {
  if (links[i].href === currentUrl) {
    links[i].classList.add('active-link');
  }
}


