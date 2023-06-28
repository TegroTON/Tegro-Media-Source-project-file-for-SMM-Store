document.addEventListener('DOMContentLoaded', function() {

    // Сhange Theme
    const btn = document.querySelector(".toggle-theme");
    const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
    const themeSwitch = document.getElementById("themeSwitch");
    const themeIcon = document.querySelector(".theme-icon");

    // Function for updating the icon based on the theme
    function updateThemeIcon(theme) {
        themeIcon.classList.toggle("fa-lightbulb-on", theme === "light");
        themeIcon.classList.toggle("fa-lightbulb", theme === "dark");
    }

    // Function for setting the theme and updating the checkbox state
    function setTheme(theme) {
        document.body.classList.remove("dark", "light");
        document.body.classList.add(theme);
        themeSwitch.checked = theme === "dark";
        updateThemeIcon(theme);
        document.cookie = "theme=" + theme;
    }

    // Reading the value of a cookie on page load
    window.addEventListener("DOMContentLoaded", function() {
        const themeCookie = document.cookie.match(/theme=(dark|light)/);
        const theme = themeCookie ? themeCookie[1] : prefersDarkScheme.matches ? "dark" : "light";
        setTheme(theme);
    });

    btn.addEventListener("click", function() {
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
                var icon; // Declaring the variable 'icon'

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

    // Adds a link obtained from the DOM to a field (from Fast Start)
    window.addEventListener("DOMContentLoaded", function() {
        if (document.getElementById("receivedData")) {
            var receivedData = localStorage.getItem("link");

            if (receivedData) {
                var receivedDataField = document.getElementById("receivedData");
                receivedDataField.value = receivedData;
                receivedDataField.focus();

                // Clearing data from localStorage after use
                localStorage.removeItem("link");
            }
        }
    });

    // Function for updating the selected tariff
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

        // Event handler for selecting a tariff plan
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

        // Event handler for changing the number of subscribers
        const subscriberCountElement = document.getElementById('subscriber-count');
        subscriberCountElement?.addEventListener('input', updateSelectedTariff);

        // Event handler for pressing the increase and decrease buttons
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

        // Initializing the state of fields on page load
        updateSelectedTariff();

    }

    // Event handler for changing the amount
    function updateResult() {
        const amountInputElement = document.getElementById('amount-input');
        const amount = amountInputElement.value;

        let bonus = 0;
        let bonusAmount = 0;

        if (amount >= 1000 && amount < 2000) {
            bonus = 0.1; // 10% bonus if the amount is greater than or equal to 1000 and less than 2000
        } else if (amount >= 2000) {
            bonus = 0.07; // 7% bonus if the amount is greater than or equal to 2000
        }

        bonusAmount = (amount * bonus).toFixed(0);
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


    // Categories Slider
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
    input.setSelectionRange(0, 99999);

    document.execCommand("copy");

    var toastElement = document.getElementById("copyToast");
    var toast = new bootstrap.Toast(toastElement);
    toast.show();
}


// Mobile menu - Active Link
var currentUrl = window.location.href;

var links = document.getElementsByTagName('a');

for (var i = 0; i < links.length; i++) {
    if (links[i].href === currentUrl) {
        links[i].classList.add('active-link');
    }
}

//Dropdown Menu when hover
// document.addEventListener('DOMContentLoaded', function() {
//     var navLinks = document.querySelectorAll('.nav-link-dropdown');
//     var dropdownMenus = document.querySelectorAll('.dropdown-menu');

//     navLinks.forEach(function(navLink, index) {
//         var dropdownMenu = dropdownMenus[index];

//         navLink.addEventListener('mouseenter', function() {
//             closeAllDropdownMenus();
//             dropdownMenu.classList.add('show');
//         });

//         dropdownMenu.addEventListener('mouseleave', function() {
//             dropdownMenu.classList.remove('show');
//         });

//         document.addEventListener('click', function(event) {
//             var isClickInside = navLink.contains(event.target) || dropdownMenu.contains(event.target);
//             if (!isClickInside) {
//                 dropdownMenu.classList.remove('show');
//             }
//         });
//     });

//     function closeAllDropdownMenus() {
//         dropdownMenus.forEach(function(menu) {
//             menu.classList.remove('show');
//         });
//     }
// });

// Получаем форму и ее поля
const form = document.getElementById('myForm');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const ageInput = document.getElementById('age');
const nameError = document.getElementById('nameError');
const emailError = document.getElementById('emailError');
const ageError = document.getElementById('ageError');

// Функция валидации формы
function validateForm(event) {
  // Отключаем стандартное поведение формы
  event.preventDefault();

  // Проверка на стороне клиента (frontend validation)
  if (!form.checkValidity()) {
    // Показываем сообщения об ошибках
    form.reportValidity();
    return;
  }

  // Проверка на стороне сервера (backend validation)
  // Можно отправить данные на сервер для дополнительной проверки

  // Обеспечение консистентности данных
  const age = parseInt(ageInput.value);
  if (age < 18 || age > 99) {
    ageError.textContent = 'Пожалуйста, введите возраст от 18 до 99 лет.';
    return;
  }

  // Если все проверки пройдены успешно, можно отправить данные на сервер
  // form.submit();
}

// Функция очистки сообщений об ошибках
function clearErrors() {
  nameError.textContent = '';
  emailError.textContent = '';
  ageError.textContent = '';
}

// Обработчик события отправки формы
form.addEventListener('submit', validateForm);

// Обработчик события изменения полей ввода
nameInput.addEventListener('input', clearErrors);
emailInput.addEventListener('input', clearErrors);
ageInput.addEventListener('input', clearErrors);
