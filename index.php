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
