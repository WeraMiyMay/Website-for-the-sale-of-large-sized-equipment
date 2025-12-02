
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
