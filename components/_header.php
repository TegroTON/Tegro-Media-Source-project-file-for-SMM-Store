<?php
$themeClass = '';
if (!empty($_COOKIE['theme'])) {
    if ($_COOKIE['theme'] == 'dark') {
        $themeClass = 'dark';
    } else if ($_COOKIE['theme'] == 'light') {
        $themeClass = 'light';
    }
} 
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>SMM продвижение в социальных сетях</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="robots" content="index, follow">
<meta name="color-scheme" content="dark light">
<meta name="keywords" content="Лайки, подписчики, репосты и десятки других услуг для популярных социальных сетей">
<meta name="description" content="Не упусти возможность комплексного продвижения своей странички в соцсетях">
<link rel="icon" href="/assets/images/logo/header__logo.png" type="image/x-icon">
<link rel="shortcut icon" href="/assets/images/logo/header__logo.png" type="image/x-icon">
<link rel="apple-touch-icon" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/images/logo/apple-touch-icon-192x192.png">
<link rel="canonical" href="https://<?php echo $_SERVER['HTTP_HOST']; ?>/order">
<meta property="og:title" content="SMM продвижение в социальных сетях">
<meta property="og:description" content="Не упусти возможность комплексного продвижения своей странички в соцсетях.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/">
<meta property="og:image" content="https://<?php echo $_SERVER['HTTP_HOST']; ?>/assets/images/website.png">
<meta property="og:site_name" content="Tegro SMM">
<link rel="manifest" href="manifest.json" />

<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/main.css?v=<?=time()?>">
</head>
<body class="<?php echo $themeClass; ?>">
<main class="wrapper border-page-right border-page-left">
    <?php if($_SERVER['REQUEST_URI'] == '/order.php') { ?>
<div class="alert m-0 bg-gradient p-0 fs-14 fw-500 rounded-0">
   <div class="container d-flex align-items-center justify-content-center text-center text-white">
    Авторизируйтесь для отслеживания и управления своими заказами. 
    <button type="button" class="btn btn-icon text-white ms-3" data-bs-dismiss="alert" aria-label="Close"><i class="fas fa-xmark"></i></button>
   </div>
</div>
<?php }?>
<header class="header">
    <nav class="navbar navbar-expand-lg" id="scrollNavbar">
        <div class="container-fluid px-0">
            <a class="navbar-brand me-3 m-lg-0" href="/"><img src="/assets/images/logo/header-logo.png" width="32" height="32" alt="Tegro SMM"></a>
            <button class="navbar-toggler btn btn-secondary ms-auto me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon me-2"></span>Каталог
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown"><a class="nav-link nav-link-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="nav-link__icon fa-brands fa-instagram instagram-color"></i>Instagram</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/order-discout.php" class="dropdown-item active d-flex align-items">
                                    <i class="nav-link__icon far fa-box me-3"></i>
                                    Пакет услуг
                                    <span class="px-2 py-1 rounding-6 bg-red text-white fs-12 fw-500 ms-auto">-60%</span>
                                </a>
                            </li>
                            <li><a href="/order.php" class="dropdown-item"><i class="nav-link__icon far fa-users me-3"></i>Подписчики</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-thumbs-up me-3"></i>Лайки</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-play me-3"></i>IGTV</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-history me-3"></i>Истории</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-bullhorn me-3"></i>Трансляции</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-comments-alt me-3"></i>Комментарии</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-star me-3"></i>Сохранения</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-share-alt me-3"></i>Охват и показы</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link nav-link-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="nav-link__icon fa-brands fa-tiktok tiktok-color"></i>TikTok</a>
                        <ul class="dropdown-menu">
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-eye me-3"></i>Просмотры</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-users me-3"></i>Подписчики</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-heart me-3"></i>Лайки</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-comments-alt me-3"></i>Комментарии</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link nav-link-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="nav-link__icon fa-brands fa-youtube youtube-color"></i>Youtube</a>
                        <ul class="dropdown-menu">
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-eye me-3"></i>Просмотры</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-users me-3"></i>Подписчики</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-heart me-3"></i>Лайки</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-comments-alt me-3"></i>Комментарии</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link nav-link-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="nav-link__icon fa-brands fa-telegram telegram-color"></i>Telegram</a>
                        <ul class="dropdown-menu">
                            <li><a href="/telegram-analysis.php" class="dropdown-item"><i class="nav-link__icon far fa-chart-pie me-3"></i>Аналитика канала</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-eye me-3"></i>Просмотры</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-users me-3"></i>Подписчики</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-face-grin-hearts me-3"></i>Реакции</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown d-lg-none d-xl-block"><a class="nav-link nav-link-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="nav-link__icon fa-brands fa-facebook facebook-color"></i>Facebook</a>
                        <ul class="dropdown-menu">
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-eye me-3"></i>Просмотры</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-users me-3"></i>Подписчики</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-heart me-3"></i>Лайки</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-comments-alt me-3"></i>Комментарии</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown d-lg-none d-xl-block"><a class="nav-link nav-link-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="nav-link__icon fa-brands fa-spotify spotify-color"></i>Spotify</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-eye me-3"></i>Просмотры</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-users me-3"></i>Подписчики</a></li>
                            <li><a href="#!" class="dropdown-item"><i class="nav-link__icon far fa-heart me-3"></i>Лайки</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link nav-link-dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Прочие соцсети">
                         Ещё<i class="fas fa-angle-down ms-2 d-none d-lg-block"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="nav-link__icon fab fa-pinterest-p pinterest-color"></i>Pinterest</a></li>
                            <li><a class="dropdown-item" href="#"><i class="nav-link__icon far fa-headphones music-color"></i>Music</a></li>
                            <li><a class="dropdown-item" href="#"><i class="nav-link__icon fab fa-wikipedia-w wiki-color"></i>Wikipedia</a></li>
                            <li><a class="dropdown-item" href="#"><i class="nav-link__icon fab fa-odnoklassniki ok-color"></i>Odnoklassniki</a></li>
                            <li><a class="dropdown-item" href="#"><i class="nav-link__icon far fa-circle-play rutube-color"></i>Rutube</a></li>
                            <li><a class="dropdown-item" href="#"><i class="nav-link__icon fab fa-vk vk-color"></i>VK</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a class="btn btn-secondary me-2" href="/login.php">Войти</a>
            <div class="dropdown">
                <button class="btn btn-secondary btn-icon" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Меню"><i class="fas fa-bars fs-20"></i></button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="/sing-up.php"><i class="far fa-right-to-bracket me-3"></i>Регистрация</a></li>
                    <li>
                        <a class="dropdown-item form-check form-switch d-flex align-items-center toggle-theme active border mt-1" href="javascript://">
                            <span class="theme-icon me-3 icon-box w-16 far "></span>
                            <span class="me-auto" for="themeSwitch">Тёмная тема:</span>
                            <input class="form-check-input px-3 py-2" type="checkbox" id="themeSwitch">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>



		