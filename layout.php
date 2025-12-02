<?php
/**
Файл: layout.php
Описание: Чистый PHP-шаблон для страницы аренды спецтехники.
Верстка с использованием Bootstrap 5 (CDN)
Шапка с меню
Слайдер вверху (автопрокрутка)
Блок "Популярная спецтехника" со слайдером (ручное пролистывание)
*/

// Конфигурация страницы (через переменные)
$page_title = 'Аренда спецтехники - специализированная техника под любые задачи';
$meta_description = 'Аренда спецтехники: экскаваторы, погрузчики, автовышки и др. Современный парк, выгодные цены, оперативная доставка.';
$meta_keywords = 'аренда спецтехники, экскаватор, погрузчик, автовышка, самосвал, бульдозер';

// Данные: Слайды главного слайдера (3 слайда)
$hero_slides = [
    [
        'title' => 'Экскаваторы для любых работ',
        'subtitle' => 'Современные модели. Оперативная подача. Гибкие условия аренды.',
        'image' => 'https://specavto.ru/upload/uf/894/98nrodk7pharw0yumvf0r1ff5h2ymjfw.jpg', 
        'btn_text' => 'Подобрать технику',
        'btn_link' => '#catalog'
    ],
    [
        'title' => 'Автовышки и краны',
        'subtitle' => 'Высотные работы безопасно и эффективно.',
        'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/99/Kroll_10%27000.jpg',
        'btn_text' => 'Запросить расчет',
        'btn_link' => '#contact'
    ],
    [
        'title' => 'Аренда специальной техники для эффективных решений вашего бизнеса',
        'subtitle' => 'Мы предлагаем широкий ассортимент спецтехники в аренду, чтобы помочь вам успешно решать задачии в строительстве, ремонте, земельных работах и других сферах.',
        'image' => 'images/c7c22e64501205b742399b26280455e678d7eb36.jpg',
        'btn_text' => 'Заказать звонок',
        'btn_link' => '#catalog'
    ],
];

// Данные: Популярная спецтехника (каталог)
$popular_equipment = [
    [
        'name' => 'Экскаватор Volvo EC220',
        'image' => 'https://image.made-in-china.com/318f0j00sTBGguFqbkol/%E4%BA%A7%E5%93%81%E8%A7%86%E9%A2%91.mp4.webp',
        'price' => 'от 30 500 ₽/смена',
        'dimensions' => [
            'length' => '5.98 м',
            'width' => '3.10 м', 
            'height' => '9.91 м'
        ],
        'details_link'=> '#'
    ],
    [
        'name' => 'Фронтальный погрузчик CAT 950',
        'image' => 'https://mtarenda.ru/upload/resize_cache/iblock/e8f/1200_801_1f68bba9d3a5dfd94f1bdbead9e77e55f/Frontalnyy-pogruzchik-CAT-950-v-arendu.jpg',
        'price' => 'от 30 000 ₽/смена',
        'dimensions' => [
            'length' => '3.70 м',
            'width' => '3.45 м', 
            'height' => '8.00 м'
        ],
        'details_link'=> '#'
    ],
    [
        'name' => 'Автокран 25 т',
        'image' => 'https://ikran.su/upload/iblock/0ed/0ed56fe92edfe458f85d06c4c5aaeafc.jpg',
        'price' => 'от 38 000 ₽/смена',
        'dimensions' => [
            'length' => '10.50 м',
            'width' => '3.80 м', 
            'height' => '12.00 м'
        ],
        'details_link'=> '#'
    ],
    [
        'name' => 'Автовышка 22 м',
        'image' => 'https://rentakran-gomel.by/upload/resize_cache/iblock/9d1/1200_1200_140cd750bba9870f18aada2478b24840a/xne2jxfxc3m0ex6hn3b8yodoyhhr21n6.webp',
        'price' => 'от 29 000 ₽/смена',
        'dimensions' => [
            'length' => '8.10 м',
            'width' => '3.20 м', 
            'height' => '10.00 м'
        ],
        'details_link'=> '#'
    ],
    [
        'name' => 'Самосвал 20 м³',
        'image' => 'https://kamleasing.ru/upload/iblock/882/882d54a76a2e2239adf63b6938f9ce5d.jpg',
        'price' => 'от 27 000 ₽/смена',
        'dimensions' => [
            'length' => '9.00 м',
            'width' => '2.50 м', 
            'height' => '3.60 м'
        ],
        'details_link'=> '#'
    ],
    [
        'name' => 'Бульдозер Komatsu D65',
        'image' => 'https://www.inter-tractor.ru/upload/medialibrary/14f/14fdeeb6adaade4bc629f7ec08a73b26.jpg',
        'price' => 'от 36 000 ₽/смена',
        'dimensions' => [
            'length' => '6.00 м',
            'width' => '3.20 м', 
            'height' => '3.45 м'
        ],
        'details_link'=> '#'
    ],
    [
        'name' => 'Экскаватор — погрузчик JCB 4CX',
        'image' => 'images/экскаватор1.png',
        'price' => 'от 25 000 ₽/смена',
        'dimensions' => [
            'length' => '5.91 м',
            'width' => '2.35 м', 
            'height' => '2.88 м'
        ],
        'details_link'=> '#'
    ],
    [
        'name' => 'Экскаватор — погрузчик JCB 3CX',
        'image' => 'images/экскаватор2.png',
        'price' => 'от 25 000 ₽/смена',
        'dimensions' => [
                'length' => '5.62 м',
            'width' => '2.36 м', 
            'height' => '2.89 м'
        ],
        'details_link'=> '#'
    ],
    [
        'name' => 'Самосвал',
        'image' => 'images/самосвал.png',
        'price' => 'от 26 000 ₽/смена',
        'dimensions' => [
            'length' => '8.85 м',
            'width' => '2.49 м', 
            'height' => '3.49 м'
        ],
        'details_link'=> '#'
    ],
];
// Хелпер: разбить массив каталога на страницы (по 3 карточки на слайд)
function chunk_array(array $items, int $per_page = 3): array {
    $chunks = [];
    $chunk = [];
    foreach ($items as $i => $item) {
        $chunk[] = $item;
        if (count($chunk) === $per_page) {
            $chunks[] = $chunk;
            $chunk = [];
        }
    }
    if (!empty($chunk)) {
        $chunks[] = $chunk;
    }
    return $chunks;
}
$popular_chunks = chunk_array($popular_equipment, 3);
?>