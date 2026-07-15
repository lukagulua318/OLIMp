<?php
/**
 * OLIMP - Catalog Page (კატალოგი)
 * This is a standalone self-contained PHP page.
 */

require_once 'images.php';

// Define products array in PHP
$PRODUCTS = [
    [
        'id' => 'sports-1',
        'name' => 'OLIMP AERO-TEC TECH JACKET',
        'category' => 'sports',
        'price' => '289 ₾',
        'image' => $IMAGES['sportsJacket'],
        'description' => 'ულტრა-მსუბუქი და ქარმედეგი სპორტული ქურთუკი რეფლექტორული დეტალებითა და თერმორეგულაციის უახლესი ტექნოლოგიით. უზრუნველყოფს მაქსიმალურ კომფორტს აქტიური ვარჯიშის დროს.',
        'features' => [
            'ქარისა და წვიმის საწინააღმდეგო მემბრანა',
            'სუნთქვადი მიკროპერფორირებული ზონები',
            'წყალგაუმტარი ფარული ელვა-შესაკრავები',
            'მინიმალისტური ერგონომიული ჭრილი'
        ],
        'sizes' => ['S', 'M', 'L', 'XL'],
        'color' => 'ატმოსფერული ნაცრისფერი / მქრქალი შავი'
    ],
    [
        'id' => 'sports-2',
        'name' => 'PRO-COMPRESSION SEAMLESS SET',
        'category' => 'sports',
        'price' => '249 ₾',
        'image' => $IMAGES['sportsLeggings'],
        'description' => 'უვიზუალურო და უნაკერო ორიგინალური სპორტული კომპლექტი, რომელიც იდეალურად ერგება სხეულს და უზრუნველყოფს კუნთების ოპტიმალურ მხარდაჭერას.',
        'features' => [
            'Seamless (უნაკერო) ქსოვის ტექნოლოგია',
            'ტენიანობის დამზოგავი მაღალტექნოლოგიური ბოჭკო',
            '360-გრადუსიანი ელასტიურობა',
            'სქელი, დამალული წელის ზოლი მაღალი ფიქსაციისთვის'
        ],
        'sizes' => ['XS', 'S', 'M', 'L'],
        'color' => 'ღრმა მქრქალი ნახშირი / ოქროსფერი ლოგო'
    ],
    [
        'id' => 'street-1',
        'name' => 'OVERSIZED HEAVYWEIGHT HOODIE',
        'category' => 'street',
        'price' => '189 ₾',
        'image' => $IMAGES['streetwearHoodie'],
        'description' => 'მძიმე პრემიუმ კლასის ორგანული ბამბისგან დამზადებული ჰუდი, თავისუფალი მხრების ხელწერითა და მყუდრო რბილი შიდა ფაქტურით.',
        'features' => [
            '100% ორგანული მძიმე ბამბა (450 GSM)',
            'ჩამოწეული მხრების ხაზები (Dropped shoulders)',
            'ორმაგი მყარი კაპიუშონი მეტალის დეტალების გარეშე',
            'გრავირებული ფარული ლოგო ზურგზე'
        ],
        'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
        'color' => 'ინტენსიური ღრმა შავი'
    ],
    [
        'id' => 'street-2',
        'name' => 'NERO SILHOUETTE BOMBER',
        'category' => 'street',
        'price' => '329 ₾',
        'image' => $IMAGES['streetwearBomber'],
        'description' => 'კლასიკური ავიატორის ინსპირაციით შექმნილი ქუჩის ბომბერი, რომელსაც აქვს მინიმალისტური დიზაინი, წყალგაუმტარი მასალა და პრემიუმ ოქროსფერი ელვა.',
        'features' => [
            'პოლიესტერის პრემიუმ ატლასისებრი ფაქტურა',
            'Custom ოქროსფერი მეტალის უმაღლესი ხარისხის ელვა',
            'დაბალი საყელო და ელასტიური მანჟეტები',
            'ქარგაუმტარი შიდა სარჩული'
        ],
        'sizes' => ['M', 'L', 'XL', 'XXL'],
        'color' => 'სამეფო შავი / მქრქალი ოქროსფერი დეტალები'
    ]
];

// Determine the active category filter from URL query, default to 'all'
$activeCategory = isset($_GET['category']) ? $_GET['category'] : 'all';
if (!in_array($activeCategory, ['all', 'sports', 'street'])) {
    $activeCategory = 'all';
}
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>კატალოგი - OLIMP</title>
    
    <!-- Link to single CSS file -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    },
                    colors: {
                        brand: {
                            dark: '#0D0D0D',
                            card: '#161616',
                            input: '#1A1A1A',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-brand-dark text-white font-sans flex flex-col justify-between min-h-screen selection:bg-amber-400 selection:text-black">

    <!-- Upper Top Minimalist Banner - Brand Alert -->
    <div class="bg-brand-card border-b border-white/5 text-[10px] text-center tracking-[0.3em] font-mono py-2.5 px-4 text-white/60 uppercase">
        უფასო მიწოდება თბილისში • კოლექცია <span class="text-amber-400 font-medium">ZEUS AW26</span> ანონსირებულია
    </div>

    <!-- Navigation Bar -->
    <header class="sticky top-0 z-40 bg-brand-dark/90 backdrop-blur-md border-b border-white/5 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 h-20 flex justify-between items-center">
            
            <!-- Logo Section -->
            <a href="index.php" class="flex items-center gap-2 group">
                <span class="font-serif text-2xl tracking-[0.3em] font-light text-white group-hover:text-amber-400 transition-colors">
                    OLIMP
                </span>
            </a>

            <!-- Desktop Nav Links -->
            <nav class="hidden md:flex items-center gap-10">
                <a href="catalog.php" class="text-xs uppercase tracking-[0.25em] font-medium text-white border-b border-amber-400 pb-1">
                    კატალოგი
                </a>
                <a href="announcements.php" class="text-xs uppercase tracking-[0.25em] font-medium text-white/60 hover:text-white transition-colors duration-300">
                    ანონსები
                </a>
                <a href="about.php" class="text-xs uppercase tracking-[0.25em] font-medium text-white/60 hover:text-white transition-colors duration-300">
                    ჩვენს შესახებ
                </a>
                <a href="contact.php" class="text-xs uppercase tracking-[0.25em] font-medium text-white/60 hover:text-white transition-colors duration-300">
                    კონტაქტი
                </a>
            </nav>

            <!-- Menu Action Buttons -->
            <div class="flex items-center gap-4">
                <a href="catalog.php" class="px-5 py-2.5 bg-white/5 border border-white/10 hover:border-amber-400 text-xs tracking-widest text-white hover:text-amber-400 uppercase transition-all duration-300">
                    შესვლა
                </a>
                
                <button onclick="toggleMobileMenu()" class="md:hidden text-white/80 hover:text-white focus:outline-none" aria-label="Toggle menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Nav Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-brand-card border-b border-white/5 px-6 py-8 space-y-6">
            <a href="catalog.php" class="block text-xs uppercase tracking-[0.2em] text-white">კატალოგი</a>
            <a href="announcements.php" class="block text-xs uppercase tracking-[0.2em] text-white/70 hover:text-white">ანონსები</a>
            <a href="about.php" class="block text-xs uppercase tracking-[0.2em] text-white/70 hover:text-white">ჩვენს შესახებ</a>
            <a href="contact.php" class="block text-xs uppercase tracking-[0.2em] text-white/70 hover:text-white">კონტაქტი</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow animate-fadeIn py-16 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            
            <!-- Header Statement -->
            <div class="text-center mb-16 md:mb-24">
                <span class="text-amber-500 text-[10px] uppercase font-mono tracking-[0.3em] inline-flex items-center gap-2 mb-4">
                    <svg class="w-3.5 h-3.5 text-amber-500 animate-pulse" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" />
                    </svg>
                    ოლიმპიური ესთეტიკა და კომფორტი
                </span>
                <h2 class="text-4xl md:text-5xl font-serif tracking-[0.15em] font-light text-white mb-6 uppercase">
                    ექსკლუზიური კატალოგი
                </h2>
                <p class="text-white/60 text-sm md:text-base max-w-xl mx-auto tracking-wide font-light leading-relaxed">
                    ჩვენი სამოსი შექმნილია პრემიუმ მასალებით, სადაც სპორტული ინოვაცია ერწყმის თანამედროვე ქუჩის სტილს.
                </p>
            </div>

            <!-- Split Category Selector Switcher -->
            <div class="flex justify-center items-center gap-4 mb-16 border-b border-white/5 pb-8">
                <div class="grid grid-cols-3 gap-2 p-1.5 bg-brand-card border border-white/5 rounded-none max-w-md w-full">
                    <button onclick="filterCategory('all')" id="tab-all" class="py-3 text-xs uppercase tracking-[0.2em] transition-all duration-300 <?php echo $activeCategory === 'all' ? 'bg-amber-400 text-black font-semibold' : 'text-white/60 hover:text-white'; ?>">
                        სრული კოლექცია
                    </button>
                    <button onclick="filterCategory('sports')" id="tab-sports" class="py-3 text-xs uppercase tracking-[0.2em] transition-all duration-300 <?php echo $activeCategory === 'sports' ? 'bg-amber-400 text-black font-semibold' : 'text-white/60 hover:text-white'; ?>">
                        სპორტული
                    </button>
                    <button onclick="filterCategory('street')" id="tab-street" class="py-3 text-xs uppercase tracking-[0.2em] transition-all duration-300 <?php echo $activeCategory === 'street' ? 'bg-amber-400 text-black font-semibold' : 'text-white/60 hover:text-white'; ?>">
                        ქუჩის სტილი
                    </button>
                </div>
            </div>

            <!-- Catalog Showcase Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-12 lg:gap-16">
                <?php foreach ($PRODUCTS as $product): ?>
                    <div 
                        data-category="<?php echo $product['category']; ?>"
                        class="product-card group flex flex-col justify-between bg-brand-card border border-white/5 p-6 md:p-8 hover:border-amber-400/40 transition-all duration-700 <?php echo ($activeCategory !== 'all' && $activeCategory !== $product['category']) ? 'hidden' : ''; ?>"
                    >
                        <div>
                            <!-- Product Image Frame -->
                            <div class="relative overflow-hidden aspect-[3/4] bg-brand-dark border border-white/5 mb-6">
                                <img
                                    src="<?php echo $product['image']; ?>"
                                    alt="<?php echo $product['name']; ?>"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-1000 ease-out"
                                />
                                
                                <!-- Category Accent Badge -->
                                <span class="absolute top-4 left-4 bg-black/80 text-amber-500 px-3 py-1 text-[9px] uppercase tracking-widest font-mono border border-amber-500/30">
                                    <?php echo $product['category'] === 'sports' ? 'SPORTSWEAR' : 'STREETWEAR'; ?>
                                </span>

                                <!-- Image Overlay quick actions -->
                                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center gap-4">
                                    <button
                                        onclick="openDetail(<?php echo htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8'); ?>)"
                                        class="bg-white text-black px-6 py-4 rounded-none uppercase text-xs tracking-widest font-semibold flex items-center gap-2 hover:bg-amber-400 hover:text-black transition-colors duration-300"
                                    >
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg> 
                                        დეტალურად
                                    </button>
                                </div>
                            </div>

                            <!-- Info Text -->
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h3 class="font-serif text-lg tracking-widest uppercase text-white font-medium group-hover:text-amber-300 transition-colors duration-300">
                                        <?php echo $product['name']; ?>
                                    </h3>
                                    <p class="text-[10px] tracking-widest text-white/40 uppercase font-mono mt-1">
                                        <?php echo $product['color']; ?>
                                    </p>
                                </div>
                                <span class="text-amber-400 font-mono tracking-wider text-lg">
                                    <?php echo $product['price']; ?>
                                </span>
                            </div>

                            <p class="text-white/60 text-sm font-light leading-relaxed mb-6 line-clamp-2">
                                <?php echo $product['description']; ?>
                            </p>
                        </div>

                        <!-- View details button bottom -->
                        <button
                            onclick="openDetail(<?php echo htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8'); ?>)"
                            class="w-full py-4 bg-transparent border border-white/10 text-center text-xs tracking-[0.25em] h-12 uppercase group-hover:border-amber-400/65 group-hover:text-amber-400 transition-all duration-500 flex items-center justify-center gap-2"
                        >
                            დეტალების ნახვა
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Dynamic Detailed Dialog (Drawer style modal) -->
            <div id="product-detail-modal" class="fixed inset-0 z-50 flex items-center justify-end hidden modal-backdrop">
                <div class="w-full max-w-2xl h-full bg-brand-dark border-l border-white/10 text-white p-8 md:p-12 overflow-y-auto flex flex-col justify-between transition-all duration-500 transform translate-x-full" id="modal-container">
                    
                    <div>
                        <!-- Modal Header Actions -->
                        <div class="flex justify-between items-center mb-8 pb-4 border-b border-white/10">
                            <span class="text-[10px] tracking-[0.3em] uppercase text-white/40 font-mono" id="modal-breadcrumb">
                                პროდუქტის პროფილი / სპორტული ხაზი
                            </span>
                            <button onclick="closeDetail()" class="px-3 py-1.5 border border-white/10 hover:border-white text-xs tracking-widest text-white/60 hover:text-white uppercase transition-colors">
                                დახურვა [esc]
                            </button>
                        </div>

                        <!-- Split Display inside Modal -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                            <div class="aspect-[3/4] overflow-hidden border border-white/10 bg-brand-dark">
                                <img id="modal-image" src="" alt="" class="w-full h-full object-cover" />
                            </div>

                            <div class="flex flex-col justify-between">
                                <div>
                                    <h3 class="font-serif text-2xl tracking-[0.10em] text-white uppercase font-light mb-1" id="modal-title">
                                        PRODUCT NAME
                                    </h3>
                                    <p class="text-amber-400 text-2xl font-mono tracking-wider mb-6" id="modal-price">
                                        0.00 ₾
                                    </p>

                                    <div class="space-y-4 mb-6">
                                        <p class="text-xs text-white/60 font-light leading-relaxed" id="modal-desc">
                                            Description goes here...
                                        </p>
                                        <div>
                                            <span class="text-[10px] uppercase tracking-widest text-white/40 block mb-1 font-mono">
                                                ფერი:
                                            </span>
                                            <span class="text-sm font-light text-white/80" id="modal-color">
                                                Color description
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Size Selector -->
                                <div>
                                    <span class="text-[10px] uppercase tracking-widest text-white/40 block mb-3 font-mono">
                                        ზომის არჩევა:
                                    </span>
                                    <div class="flex flex-wrap gap-2 mb-4" id="modal-sizes-container">
                                        <!-- Dynamic buttons will be inserted here -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- High quality specification section -->
                        <div class="border-t border-white/10 pt-8 mt-4">
                            <h4 class="text-xs uppercase tracking-[0.25em] text-amber-500 font-semibold mb-4">
                                ტექნიკური მახასიათებლები და მასალა
                            </h4>
                            <ul class="space-y-2.5" id="modal-features-container">
                                <!-- Dynamic specs will be inserted here -->
                            </ul>
                        </div>
                    </div>

                    <!-- Purchase Button Action -->
                    <div class="border-t border-white/10 pt-10 mt-10">
                        <button id="add-to-bag-btn" onclick="addToBagMock()" class="w-full py-5 bg-amber-400 text-black hover:bg-white hover:text-black font-semibold text-xs tracking-[0.25em] uppercase transition-all duration-500 flex items-center justify-center gap-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            <span id="add-to-bag-text">დამატება კალათაში • <span id="modal-selected-size-label">S</span></span>
                        </button>
                        <p class="text-[10px] text-white/40 text-center mt-3 font-light tracking-wide">
                            პროდუქცია იგზავნება უფასოდ თბილისის მასშტაბით 2-3 სამუშაო დღეში.
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </main>

    <!-- Brand Footer -->
    <footer id="app-footer" class="bg-brand-dark text-white border-t border-white/5 py-16 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                
                <!-- Brand Info -->
                <div class="md:col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                        <span class="font-serif text-2xl tracking-[0.3em] uppercase text-white">
                            OLIMP
                        </span>
                    </div>
                    <p class="text-white/40 text-xs tracking-wider uppercase font-mono max-w-sm">
                        ოლიმპიური ჰარმონია • სპორტული ინოვაციები • უნაკლო ქუჩის სტილი
                    </p>
                    <p class="text-white/30 text-xs font-light leading-relaxed mt-4 max-w-xs">
                        OLIMP წარმოადგენს ქართულ პრემიუმ ტანსაცმლის ბრენდს, სადაც ყოველი სერია იქმნება შეზღუდული რაოდენობით, კლასიკური არქიტექტურული ხასიათითა და საინჟინრო სიზუსტით.
                    </p>
                </div>

                <!-- Quick Links Column -->
                <div>
                    <span class="text-[10px] text-white/40 uppercase tracking-[0.3em] font-mono block mb-6">
                        ნავიგაცია
                    </span>
                    <ul class="space-y-3.5">
                        <li><a href="catalog.php" class="text-xs text-white border-b border-amber-400 pb-0.5 uppercase tracking-widest">კატალოგი</a></li>
                        <li><a href="announcements.php" class="text-xs text-white/40 hover:text-amber-500 transition-colors uppercase tracking-widest">ანონსები</a></li>
                        <li><a href="about.php" class="text-xs text-white/40 hover:text-amber-500 transition-colors uppercase tracking-widest">ჩვენს შესახებ</a></li>
                        <li><a href="contact.php" class="text-xs text-white/40 hover:text-amber-500 transition-colors uppercase tracking-widest">კონტაქტი</a></li>
                    </ul>
                </div>

                <!-- Customer Service Column -->
                <div>
                    <span class="text-[10px] text-white/40 uppercase tracking-[0.3em] font-mono block mb-6">
                        კონფიდენციალურობა
                    </span>
                    <ul class="space-y-3.5 text-xs text-white/40 font-light">
                        <li class="hover:text-neutral-300 transition-colors cursor-pointer">წესები და პირობები</li>
                        <li class="hover:text-neutral-300 transition-colors cursor-pointer">მიწოდების პოლიტიკა</li>
                        <li class="hover:text-neutral-300 transition-colors cursor-pointer">დაბრუნების წესები</li>
                    </ul>
                </div>
            </div>

            <!-- Closing details & Scroll-to-top -->
            <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-6">
                <p class="text-[10px] text-white/30 tracking-wider">
                    © <?php echo date('Y'); ?> OLIMP. ყველა უფლება დაცულია. დიზაინი შექმნილია მინიმალისტურ სტილში.
                </p>

                <button onclick="scrollToTop()" class="flex items-center gap-2 px-4 py-2 border border-white/10 hover:border-white/30 text-[10px] tracking-widest text-white/40 hover:text-white uppercase transition-colors rounded-none cursor-pointer">
                    <span>ზემოთ დაბრუნება</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                </button>
            </div>
        </div>
    </footer>

    <!-- Interactive JS Functions -->
    <script>
        var currentProduct = null;
        var selectedSize = '';

        function toggleMobileMenu() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        // JS-based Category Filtering (preserving reactive feels)
        function filterCategory(cat) {
            // Update tabs style
            ['all', 'sports', 'street'].forEach(function(item) {
                var btn = document.getElementById('tab-' + item);
                if (item === cat) {
                    btn.className = 'py-3 text-xs uppercase tracking-[0.2em] transition-all duration-300 bg-amber-400 text-black font-semibold';
                } else {
                    btn.className = 'py-3 text-xs uppercase tracking-[0.2em] transition-all duration-300 text-white/60 hover:text-white';
                }
            });

            // Filter cards
            var cards = document.querySelectorAll('.product-card');
            cards.forEach(function(card) {
                if (cat === 'all' || card.getAttribute('data-category') === cat) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });

            // Update URL query state without page reload
            var newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname;
            if (cat !== 'all') {
                newUrl += '?category=' + cat;
            }
            window.history.pushState({path:newUrl}, '', newUrl);
        }

        // Modal interactions
        function openDetail(product) {
            currentProduct = product;
            selectedSize = product.sizes[0] || '';

            document.getElementById('modal-breadcrumb').innerText = 'პროდუქტის პროფილი / ' + (product.category === 'sports' ? 'სპორტული ხაზი' : 'ქუჩის ხაზი');
            document.getElementById('modal-image').src = product.image;
            document.getElementById('modal-image').alt = product.name;
            document.getElementById('modal-title').innerText = product.name;
            document.getElementById('modal-price').innerText = product.price;
            document.getElementById('modal-desc').innerText = product.description;
            document.getElementById('modal-color').innerText = product.color;
            document.getElementById('modal-selected-size-label').innerText = selectedSize;

            // Render sizes buttons
            var sizesContainer = document.getElementById('modal-sizes-container');
            sizesContainer.innerHTML = '';
            product.sizes.forEach(function(size) {
                var btn = document.createElement('button');
                btn.innerText = size;
                btn.className = 'w-10 h-10 border text-xs font-mono transition-all duration-300 flex items-center justify-center cursor-pointer ' + 
                    (size === selectedSize 
                        ? 'border-amber-400 bg-amber-400 text-black font-semibold' 
                        : 'border-white/10 text-white/60 hover:border-white/40 hover:text-white');
                
                btn.onclick = function() {
                    selectedSize = size;
                    document.getElementById('modal-selected-size-label').innerText = size;
                    // Update active styles on size buttons
                    var buttons = sizesContainer.querySelectorAll('button');
                    buttons.forEach(function(b) {
                        if (b.innerText === size) {
                            b.className = 'w-10 h-10 border text-xs font-mono transition-all duration-300 flex items-center justify-center cursor-pointer border-amber-400 bg-amber-400 text-black font-semibold';
                        } else {
                            b.className = 'w-10 h-10 border text-xs font-mono transition-all duration-300 flex items-center justify-center cursor-pointer border-white/10 text-white/60 hover:border-white/40 hover:text-white';
                        }
                    });
                };
                sizesContainer.appendChild(btn);
            });

            // Render specifications / features
            var featuresContainer = document.getElementById('modal-features-container');
            featuresContainer.innerHTML = '';
            product.features.forEach(function(feat) {
                var li = document.createElement('li');
                li.className = 'flex items-start gap-3.5 text-xs text-white/60 font-light';
                li.innerHTML = '<span class="w-1.5 h-1.5 bg-amber-400 rounded-full mt-1.5 shrink-0"></span><span>' + feat + '</span>';
                featuresContainer.appendChild(li);
            });

            // Reset add to bag button state
            var bagBtn = document.getElementById('add-to-bag-btn');
            bagBtn.disabled = false;
            bagBtn.className = 'w-full py-5 bg-amber-400 text-black hover:bg-white hover:text-black font-semibold text-xs tracking-[0.25em] uppercase transition-all duration-500 flex items-center justify-center gap-3';
            document.getElementById('add-to-bag-text').innerHTML = 'დამატება კალათაში • <span id="modal-selected-size-label">' + selectedSize + '</span>';

            // Show modal
            var backdrop = document.getElementById('product-detail-modal');
            var container = document.getElementById('modal-container');
            backdrop.classList.remove('hidden');
            setTimeout(function() {
                container.classList.remove('translate-x-full');
            }, 50);
        }

        function closeDetail() {
            var container = document.getElementById('modal-container');
            var backdrop = document.getElementById('product-detail-modal');
            container.classList.add('translate-x-full');
            setTimeout(function() {
                backdrop.classList.add('hidden');
            }, 400);
        }

        function addToBagMock() {
            var bagBtn = document.getElementById('add-to-bag-btn');
            bagBtn.disabled = true;
            bagBtn.className = 'w-full py-5 bg-emerald-600 text-white font-medium text-xs tracking-[0.25em] uppercase transition-all duration-500 flex items-center justify-center gap-3';
            document.getElementById('add-to-bag-text').innerHTML = '<svg class="w-4 h-4 text-white animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg> კალათაში დამატებულია (' + selectedSize + ')';
            
            setTimeout(function() {
                closeDetail();
            }, 1800);
        }

        // Esc key closes modal
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeDetail();
            }
        });
    </script>
</body>
</html>
