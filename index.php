<?php include 'layout.php'; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
 <style>
     :root {
            --primary-orange: #F4B942;
            --dark-bg: #2C2C2C;
            --light-bg: #F8F9FA;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

      /* для Header Top с логотипом и соц сетями */
.header-top {
    background: #f8f9fa;
    border-bottom: 1px solid #e9ecef;
    padding: 12px 0;
    font-size: 13px;
}

.header-top-item {
    display: flex;
    align-items: center;
    margin-right: 40px;
    color: #666;
}

.header-top-item i {
    background: var(--primary-orange);
    color: white;
    width: 24px;
    height: 24px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 8px;
    font-size: 10px;
}

.header-top-text {
    line-height: 1.3;
}

.header-top-label {
    font-weight: 500;
    color: #333;
    display: block;
}

.header-top-value {
    color: #666;
    font-size: 12px;
}
@media (max-width: 768px) {
    .header-top {
        display: none;
    }
}
/* Стили для логотипа в header-top */

.logo {
    display: flex;
    align-items: center;
    text-decoration: none;
}

.logo img {
    height: 40px;
    width: auto;
    margin-left: 12px;
}

/* Обновленные стили для логотипа в боковом меню */
.side-menu-logo img {
    height: 32px;
    width: auto;
}

/* Адаптивные размеры логотипа */
@media (max-width: 768px) {
    .logo img {
        height: 32px;
        margin-left: 8px;
    }
}

@media (max-width: 576px) {
    .logo img {
        height: 28px;
        margin-left: 8px;
    }
    
    .side-menu-logo img {
        height: 28px;
    }
}

/* Стили для социальных сетей */
.social-links {
    display: flex;
    gap: 10px;
}

.social-link {
    width: 32px;
    height: 32px;
    background: var(--primary-orange);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    transition: all 0.3s;
    font-size: 14px;
}

.social-link:hover {
    background: #e6a535;
    color: white;
    transform: translateY(-2px);
}

/* Обновленные стили для header-main */
.header-main {
    background: var(--dark-bg);
    padding: 15px 0;
}

.main-nav {
  display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 0;
    margin-left: -150px; 
}

.nav-link {
    color: white !important;
    text-transform: lowercase;
    padding: 12px 35px !important;
    transition: all 0.3s;
    font-size: 16px;
    font-weight: 400;
    border: none;
    background: none;
    position: relative;
}
.nav-link:hover {
    color: var(--primary-orange) !important;
    background: rgba(244, 185, 66, 0.1);
}

.nav-link.active {
    color: var(--primary-orange) !important;
}

.btn-order {
    background: var(--primary-orange);
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 25px;
    font-weight: 500;
    font-size: 16px;
    transition: all 0.3s;
    text-transform: lowercase;
}

.btn-order:hover {
    background: #e6a535;
    transform: translateY(-1px);
}

.menu-toggle {
    background: none;
    border: none;
    color: white;
    font-size: 18px;
    padding: 8px;
    border-radius: 4px;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.menu-toggle:hover {
    background: rgba(255, 255, 255, 0.1);
}
@media (max-width: 768px) {
    .header-main .row {
        position: relative;
    }
    
    .header-main .col-md-2:last-child {
        position: absolute;
        top: 0;
        right: 15px;
        width: auto;
    }
    
    .btn-order {
        font-size: 14px;
        padding: 8px 16px;
        border-radius: 20px;
    }
}
/* Медиа-запросы для адаптивности */
@media (max-width: 768px) {
    .header-top-item {
        margin-right: 20px;
        margin-bottom: 5px;
    }
    
    .header-top-item:last-child {
        margin-right: 0;
    }
    
    .logo {
        font-size: 20px;
    }
    
    .logo-icon {
        width: 28px;
        height: 28px;
    }
    
    .social-links {
        gap: 8px;
    }
    
    .social-link {
        width: 28px;
        height: 28px;
        font-size: 12px;
    }
}

@media (max-width: 576px) {
    .header-top {
        padding: 8px 0;
    }
    
    .header-top-item {
        margin-right: 15px;
        font-size: 12px;
    }
    
    .header-top-value {
        font-size: 11px;
    }
    
    .logo {
        font-size: 18px;
    }
    
    .logo-icon {
        width: 24px;
        height: 24px;
        margin-right: 8px;
    }
}

/* Боковое Menu */
.side-menu {
    position: fixed;
    top: 0;
    left: -350px;
    width: 350px;
    height: 100vh;
    background: white;
    z-index: 1000;
    transition: left 0.3s ease;
    box-shadow: 2px 0 10px rgba(0,0,0,0.1);
    overflow-y: auto;
}

.side-menu.active {
    left: 0;
}

.side-menu-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    background: rgba(0,0,0,0.5);
    z-index: 999;
    display: none;
    transition: opacity 0.3s;
}

.side-menu-overlay.active {
    display: block;
}

.side-menu-header {
    padding: 25px;
    border-bottom: 1px solid #f0f0f0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.side-menu-logo {
    font-size: 20px;
    font-weight: bold;
    color: var(--dark-bg);
}

.side-menu-close {
    background: none;
    border: none;
    font-size: 24px;
    color: #999;
    cursor: pointer;
    padding: 0;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.side-menu-nav {
    padding: 20px 0;
}

.side-menu-nav .nav-link {
    color: #333 !important;
    padding: 15px 25px !important;
    display: block;
    text-decoration: none;
    border-bottom: 1px solid #f8f9fa;
    transition: all 0.3s;
    text-transform: lowercase;
    font-size: 15px;
}

.side-menu-nav .nav-link:hover {
    background: #f8f9fa;
    color: var(--primary-orange) !important;
    padding-left: 35px !important;
}

.side-menu-contact {
    padding: 25px;
    border-top: 1px solid #f0f0f0;
    background: #f8f9fa;
}

.side-menu-contact h6 {
    color: var(--dark-bg);
    font-weight: 600;
    margin-bottom: 15px;
}

.side-menu-contact-item {
    margin-bottom: 12px;
    font-size: 13px;
    color: #666;
}

.side-menu-contact-item strong {
    color: #333;
}

        /* Hero */
        .hero-section {
            position: relative;
            height: 600px;
            overflow: hidden;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.5)), 
                        url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .hero-slide.active {
            opacity: 1;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6));
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
        }

        .hero-badge {
            color: var(--primary-orange);
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .hero-title {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-subtitle {
            font-size: 18px;
            margin-bottom: 30px;
            opacity: 0.9;
            max-width: 600px;
        }

        .hero-buttons .btn {
            margin-right: 15px;
            margin-bottom: 10px;
        }

        .hero-indicators {
            position: absolute;
            right: 30px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 3;
        }

        .hero-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            margin: 10px 0;
            cursor: pointer;
            transition: background 0.3s;
        }

        .hero-indicator.active {
            background: var(--primary-orange);
        }

        /* Feature Boxes */

.feature-boxes {
    position: absolute;
    right: 150px;
    bottom: 20px;
    z-index: 3;
    width: 580px;
}

.feature-boxes .row {
    --bs-gutter-x: 20px;
    align-items: flex-end;
}

.feature-box {
    background: rgba(0,0,0,0.2);
    backdrop-filter: blur(8px);
    border-radius: 30px;
    padding: 25px;
    color: white;
    border: 1px solid rgba(255,255,255,0.2);
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
}

/* - иконку из первого блока */
.feature-boxes .col-md-6:first-child .feature-icon {
    display: none;
}

.feature-icon {
    color: var(--primary-gray);
    font-size: 28px;
    margin-bottom: 25px;
    display: block;
}

.feature-content {
    display: flex;
    flex-direction: column;
}

.feature-box h5 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 8px;
    color: white;
}

.feature-box p {
    font-size: 14px;
    margin: 0;
    opacity: 0.7;
    line-height: 1.5;
}

/* Адаптивность для планшетов */
@media (max-width: 1200px) {
    .feature-boxes {
        right: 80px;
        width: 480px;
    }
}

@media (max-width: 992px) {
    .feature-boxes {
        position: static;
        transform: none;
        width: 100%;
        margin-top: 40px;
        right: auto;
        bottom: auto;
    }
    
    .feature-boxes .row {
        align-items: stretch;
    }
    
    .feature-box {
        justify-content: flex-start;
    }
    
    .feature-boxes .col-md-6:first-child .feature-icon {
        display: block;
    }
}

@media (max-width: 768px) {
    .feature-boxes {
        display: none;
    }
}


        .popular-section {
            padding: 80px 0;
            background: var(--light-bg);
        }

        .section-title {
            text-align: center;
            font-size: 36px;
            font-weight: bold;
            color: var(--dark-bg);
            margin-bottom: 50px;
        }

        .equipment-slider {
            position: relative;
        }

        .equipment-slide {
            display: none;
        }

        .equipment-slide.active {
            display: block;
        }

        .equipment-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            margin: 0 15px;
        }

        .equipment-card:hover {
            transform: translateY(-5px);
        }

        .equipment-img {
            height: 30px;
            background: #f0f0f0;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .equipment-info {
            padding: 25px;
        }

        .equipment-name {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
            color: var(--dark-bg);
        }

        .equipment-specs {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
        }

        .equipment-price {
            font-size: 18px;
            font-weight: bold;
            color: var(--dark-bg);
            margin-bottom: 20px;
        }
.dimension-separator {
    color: #999;
    font-size: 12px;
    align-self: center;
    margin: 0 2px;
}


        .slider-controls {
            position: absolute;
            right: -60px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
        }

        .slider-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #ccc;
            margin: 10px 0;
            cursor: pointer;
            transition: background 0.3s;
        }

        .slider-indicator.active {
            background: var(--primary-orange);
        }

        .slider-arrows {
            text-align: right;
            margin-top: 30px;
        }

  .slider-arrow {
    background: none;
    border: 2px solid #555;
    color: #555;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    justify-content: center;
}

.slider-arrow:hover {
    background: #555;
    color: white;
}

       


/* для блока популярной техники */
.equipment-card {
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.08);
    transition: transform 0.3s;
    margin: 0 10px;
    border: 1px solid #f0f0f0;
}

.equipment-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 20px rgba(0,0,0,0.12);
}

.equipment-img {
    height: 220px;
    border-radius: 10px;
    background: #f8f9fa;
    background-size: cover;
    background-position: center;
    position: relative;
    margin: 15px; /* Добавляет отступы 15px со всех сторон */
}
.equipment-info {
    padding: 20px;
}

.equipment-name {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 12px;
    color: #333;
    line-height: 1.3;
}

.equipment-dimensions {
    font-size: 14px;
    color: #888;
    margin-bottom: 12px;
    line-height: 1.4;
}

.dimension-label {
    font-weight: 500;
    color: #666;
    margin-bottom: 4px;
}

.dimensions-text {
    color: #666;
    font-weight: 400;
}

.equipment-price {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
}


.equipment-dimensions {
    font-size: 14px;
    margin-bottom: 15px;
    display: flex;
    align-items: flex-start;
    gap: 8px;
}

.dimension-label {
    font-weight: 500;
    color: #666;
    white-space: nowrap;
    margin-top: 2px;
}

.dimensions-list {
    display: flex;
    flex-wrap: wrap;
    gap: 4px;
    flex: 1;
}

.dimension-item {
    background: #f5f5f5;
    color: #666;
    padding: 2px 8px;
    border-radius: 8px;
    font-size: 13px;
    font-weight: 400;
}

.equipment-divider {
    height: 1px;
    background: #e9ecef;
    margin: 15px 0;
}

.equipment-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.equipment-price {
    font-size: 16px;
    font-weight: 600;
    color: #333;
    margin: 0;
}

.price-prefix {
    font-size: 14px;
    font-weight: 400;
    color: #888;
}

.btn-equipment {
    background: var(--primary-orange);
    color: white;
    border: none;
    padding: 8px 14px;
    border-radius: 20px;
    font-weight: 500;
    font-size: 14px;
    transition: all 0.3s;
    text-transform: lowercase;
    white-space: nowrap;
}

.btn-equipment:hover {
    background: #e6a535;
    color: white;
    transform: translateY(-1px);
}
/* Стили для кнопки "узнать стоимость" на главном слайдере */
.btn-cost-inquiry {
    background: transparent;
    border: none;
    color: white;
    padding: 12px 20px 12px 24px;
    border-radius: 50px;
    font-weight: 500;
    font-size: 16px;
    transition: all 0.3s ease;
    text-transform: lowercase;
    display: inline-flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.btn-cost-inquiry:hover {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    transform: translateY(-1px);
}

.btn-cost-inquiry .arrow-circle {
    width: 32px;
    height: 32px;
    background: transparent;
    border: 1px solid rgba(255, 255, 255, 0.4);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 12px;
    transition: all 0.3s ease;
}

.btn-cost-inquiry:hover .arrow-circle {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.6);
}

.btn-cost-inquiry .arrow-circle i {
    font-size: 14px;
    color: white;
}

 </style>
 
</head>
<body>
 <!-- Header Top -->
<div class="header-top">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <div class="logo me-4">
    <div class="logo-icon"></div>
    <img src="images/logo.png" alt="BERKANA">
</div>
                <div class="d-flex flex-wrap align-items-center">
                    <div class="header-top-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="header-top-text">
                            <span class="header-top-label">Санкт-Петербург</span>
                            <span class="header-top-value">пр-кт Индустриальный, 44/2 лит А, оф. 527</span>
                        </div>
                    </div>
                    <div class="header-top-item">
                        <i class="fas fa-clock"></i>
                        <div class="header-top-text">
                            <span class="header-top-label">время работы</span>
                            <span class="header-top-value">пн-пт: с 8.00 до 22.00</span>
                        </div>
                    </div>
                    <div class="header-top-item">
                        <i class="fas fa-phone"></i>
                        <div class="header-top-text">
                            <span class="header-top-label">контакты</span>
                            <span class="header-top-value">+7 812 561-82-17</span>
                        </div>
                    </div>
                    <div class="header-top-item">
                        <i class="fas fa-envelope"></i>
                        <div class="header-top-text">
                            <span class="header-top-label">электронная почта</span>
                            <span class="header-top-value">ai@berkana.spb.ru</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="social-links">
                    <a href="#" class="social-link" title="Telegram">
                        <i class="fab fa-telegram-plane"></i>
                    </a>
                    <a href="#" class="social-link" title="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Header Main -->
<div class="header-main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2">
                <button class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="col-md-8">
                <nav class="main-nav d-none d-md-flex">
                    <a class="nav-link" href="#catalog">каталог техники</a>
                    <a class="nav-link" href="#prices">цены</a>
                    <a class="nav-link" href="#clients">клиентам</a>
                    <a class="nav-link" href="#about">о нас</a>
                    <a class="nav-link" href="#articles">статьи</a>
                    <a class="nav-link" href="#contacts">контакты</a>
                </nav>
            </div>
            <div class="col-md-2 text-end">
                <button class="btn btn-order">заказать звонок</button>
            </div>
        </div>
    </div>
</div>

<!-- Side Menu -->
<div class="side-menu-overlay" id="sideMenuOverlay"></div>
<div class="side-menu" id="sideMenu">
    <div class="side-menu-header">
        <div class="side-menu-logo">BERKANA</div>
        <button class="side-menu-close" id="sideMenuClose">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <div class="side-menu-nav">
        <a href="#catalog" class="nav-link">каталог техники</a>
        <a href="#prices" class="nav-link">цены</a>
        <a href="#clients" class="nav-link">клиентам</a>
        <a href="#about" class="nav-link">о нас</a>
        <a href="#articles" class="nav-link">статьи</a>
        <a href="#contacts" class="nav-link">контакты</a>
    </div>
    <div class="side-menu-contact">
        <h6>Контактная информация</h6>
        <div class="side-menu-contact-item">
            <strong>Адрес:</strong><br>
            Санкт-Петербург, пр-кт Индустриальный, 44/2 лит А, оф. 527
        </div>
        <div class="side-menu-contact-item">
            <strong>Телефон:</strong><br>
            +7 812 561-82-17
        </div>
        <div class="side-menu-contact-item">
            <strong>Email:</strong><br>
            ai@berkana.spb.ru
        </div>
        <div class="side-menu-contact-item">
            <strong>Время работы:</strong><br>
            пн-пт: с 8.00 до 22.00
        </div>
    </div>
</div>

    <!-- Hero Section -->
    <section class="hero-section">
        <?php foreach ($hero_slides as $index => $slide): ?>
        <div class="hero-slide <?php echo $index === 0 ? 'active' : ''; ?>" 
             style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)), url('<?php echo htmlspecialchars($slide['image']); ?>');">
            <div class="hero-overlay"></div>
            <div class="container">
                <div class="hero-content">
                    <div class="row">
                        <div class="col-lg-7">
                            <p class="hero-badge">современная спецтехника</p>
                            <h1 class="hero-title"><?php echo htmlspecialchars($slide['title']); ?></h1>
                            <p class="hero-subtitle"><?php echo htmlspecialchars($slide['subtitle']); ?></p>
                            <div class="hero-buttons">
                 <a href="<?php echo htmlspecialchars($slide['btn_link']); ?>" class="btn btn-warning btn-lg rounded-pill text-white">
    <?php echo htmlspecialchars($slide['btn_text']); ?>
</a>
                               <button class="btn btn-cost-inquiry">
    узнать стоимость
    <span class="arrow-circle">
        <i class="fas fa-arrow-right"></i>
    </span>
</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <!-- Hero Indicators -->
        <div class="hero-indicators">
            <?php foreach ($hero_slides as $index => $slide): ?>
            <div class="hero-indicator <?php echo $index === 0 ? 'active' : ''; ?>" data-slide="<?php echo $index; ?>"></div>
            <?php endforeach; ?>
        </div>

        <!-- Feature Boxes -->
<div class="feature-boxes">
    <div class="row">
        <div class="col-md-6">
            <div class="feature-box">
                <div class="feature-content">
             
                    <h5>Гибкие условия аренды</h5>
                    <p>Краткосрочная и долгосрочная аренда, мы подстраиваемся под ваши требования.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="feature-box">
                <div class="feature-content">
                    <div class="feature-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h5>Профессиональное обслуживание</h5>
                    <p>Наша команда экспертов всегда готова помочь вам выбрать подходящую технику и ответить на все вопросы.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>

    <!--  Equipment  -->
    <section class="popular-section" id="catalog">
        <div class="container">
            <h2 class="section-title">Популярная спецтехника</h2>
            
            <div class="position-relative">
                <div class="equipment-slider">
                    <?php foreach ($popular_chunks as $chunk_index => $chunk): ?>
                    <div class="equipment-slide <?php echo $chunk_index === 0 ? 'active' : ''; ?>">
                        <div class="row">
                            <?php foreach ($chunk as $equipment): ?>
<div class="col-md-4 mb-4">
    <div class="equipment-card">
        <div class="equipment-img" 
             style="background-image: url('<?php echo htmlspecialchars($equipment['image']); ?>');"></div>
    <div class="equipment-info">
    <h5 class="equipment-name"><?php echo htmlspecialchars($equipment['name']); ?></h5>
<div class="equipment-dimensions">
    <span class="dimension-label">Габариты:</span>
    <div class="dimensions-list">
        <span class="dimension-item"><?php echo htmlspecialchars($equipment['dimensions']['length']); ?></span>
        <span class="dimension-separator">×</span>
        <span class="dimension-item"><?php echo htmlspecialchars($equipment['dimensions']['width']); ?></span>
        <span class="dimension-separator">×</span>
        <span class="dimension-item"><?php echo htmlspecialchars($equipment['dimensions']['height']); ?></span>
    </div>
</div>
    <div class="equipment-divider"></div>
    <div class="equipment-footer">
        <div class="equipment-price">
            <span class="price-prefix">от</span> <?php echo htmlspecialchars(str_replace('от ', '', $equipment['price'])); ?>
        </div>
        <a href="<?php echo htmlspecialchars($equipment['details_link']); ?>" class="btn btn-equipment">заказать</a>
    </div>
</div>
    </div>
</div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Slider Controls -->
                <div class="slider-controls">
                    <?php foreach ($popular_chunks as $index => $chunk): ?>
                    <div class="slider-indicator <?php echo $index === 0 ? 'active' : ''; ?>" data-slide="<?php echo $index; ?>"></div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Slider Arrows -->
       <div class="slider-arrows">
    <button class="slider-arrow" id="prevSlide">
        <i class="fas fa-arrow-left"></i>
    </button>
    <button class="slider-arrow" id="nextSlide">
        <i class="fas fa-arrow-right"></i>
    </button>
</div>
        </div>
    </section>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
 
        let currentHeroSlide = 0;
        const heroSlides = document.querySelectorAll('.hero-slide');
        const heroIndicators = document.querySelectorAll('.hero-indicators .hero-indicator');
        
        function showHeroSlide(index) {
            heroSlides.forEach(slide => slide.classList.remove('active'));
            heroIndicators.forEach(indicator => indicator.classList.remove('active'));
            
            heroSlides[index].classList.add('active');
            heroIndicators[index].classList.add('active');
        }
        
        function nextHeroSlide() {
            currentHeroSlide = (currentHeroSlide + 1) % heroSlides.length;
            showHeroSlide(currentHeroSlide);
        }
        

        setInterval(nextHeroSlide, 5000);
        

        heroIndicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentHeroSlide = index;
                showHeroSlide(index);
            });
        });


        let currentPopularSlide = 0;
        const popularSlides = document.querySelectorAll('.equipment-slide');
        const popularIndicators = document.querySelectorAll('.slider-controls .slider-indicator');
        
        function showPopularSlide(index) {
            popularSlides.forEach(slide => slide.classList.remove('active'));
            popularIndicators.forEach(indicator => indicator.classList.remove('active'));
            
            popularSlides[index].classList.add('active');
            popularIndicators[index].classList.add('active');
        }
        

        document.getElementById('prevSlide').addEventListener('click', () => {
            currentPopularSlide = currentPopularSlide > 0 ? currentPopularSlide - 1 : popularSlides.length - 1;
            showPopularSlide(currentPopularSlide);
        });
        
        document.getElementById('nextSlide').addEventListener('click', () => {
            currentPopularSlide = (currentPopularSlide + 1) % popularSlides.length;
            showPopularSlide(currentPopularSlide);
        });
        

        popularIndicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentPopularSlide = index;
                showPopularSlide(index);
            });
        });


const menuToggle = document.getElementById('menuToggle');
const sideMenu = document.getElementById('sideMenu');
const sideMenuOverlay = document.getElementById('sideMenuOverlay');
const sideMenuClose = document.getElementById('sideMenuClose');

function toggleSideMenu() {
    sideMenu.classList.toggle('active');
    sideMenuOverlay.classList.toggle('active');
}

function closeSideMenu() {
    sideMenu.classList.remove('active');
    sideMenuOverlay.classList.remove('active');
}

if (menuToggle) {
    menuToggle.addEventListener('click', toggleSideMenu);
}

if (sideMenuClose) {
    sideMenuClose.addEventListener('click', closeSideMenu);
}

if (sideMenuOverlay) {
    sideMenuOverlay.addEventListener('click', closeSideMenu);
}


document.querySelectorAll('.side-menu .nav-link').forEach(link => {
    link.addEventListener('click', closeSideMenu);
});
    </script>
</body>
</html>