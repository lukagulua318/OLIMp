<?php
/**
 * OLIMP - Announcements Page (სიახლეები და ანონსები)
 * This is a standalone self-contained PHP page.
 */

require_once 'images.php';

// Define announcements in PHP
$ANNOUNCEMENTS = [
    [
        'id' => 'ann-1',
        'title' => 'მომავალი კოლექცია: "ZEUS" AUTUMN / WINTER 2026',
        'date' => '15 ივლისი, 2026',
        'tag' => 'კოლექცია',
        'image' => $IMAGES['announcementsBanner'],
        'summary' => 'წარმოგიდგენთ OLIMP-ის ახალ სეზონურ ხაზს, რომელიც აერთიანებს ძველბერძნულ მონუმენტურ სილუეტებსა და თანამედროვე ურბანულ ტექნიკას.',
        'content' => 'ჩვენი მომავალი კოლექცია "ZEUS" განსაკუთრებულ აქცენტს აკეთებს სტრუქტურულ მინიმალისტურ ქურთუკებზე, მძიმე შალის პალტოებსა და ოქროსფერი მეანდრის ელემენტებით გაფორმებულ ქუჩის ტანსაცმელზე. თითოეული მოდელი შეზღუდული რაოდენობით დამზადდება და ხელმისაწვდომი იქნება მხოლოდ ჩვენს ონლაინ სივრცესა და თბილისის შოურუმში. გელოდებათ უმაღლესი ხარისხის ნედლეული იტალიიდან და უნაკლო ორნამენტული შესრულება.'
    ],
    [
        'id' => 'ann-2',
        'title' => 'OLIMP CONCEPT STORE-ის გახსნა თბილისში',
        'date' => '28 ივნისი, 2026',
        'tag' => 'სიახლე',
        'image' => $IMAGES['aboutBanner'],
        'summary' => 'ჩვენი პირველი ფლაგმანური შოურუმი, რომელიც დაპროექტებულია მონოლითური ბეტონისა და ოქროსფერი განათების სინთეზით, კარს უღებს მომხმარებლებს.',
        'content' => 'სივრცე შექმნილია მინიმალისტურ არქიტექტურულ სტილში. აქ თქვენ შეძლებთ პირადად მოიზომოთ სპორტული და ქუჩის კოლექციები, იგრძნოთ ქსოვილის ექსკლუზიური ხარისხი და გაეცნოთ მომავალი ნიმუშების გამოფენას. გახსნის დღეს კოლექციონერებისთვის წარმოდგენილი იქნება ექსკლუზიური სერიის მაისურები, რომელთა შეძენაც მხოლოდ ფიზიკურ მაღაზიაში იქნება შესაძლებელი. მისამართი: თბილისი, მერაბ კოსტავას ქ. 12.'
    ],
    [
        'id' => 'ann-3',
        'title' => 'OLYMPUS ELITE სერია სპორტსმენებისთვის',
        'date' => '02 ივნისი, 2026',
        'tag' => 'ანონსი',
        'image' => $IMAGES['sportsJacket'],
        'summary' => 'ინოვაციური ბიო-ადაპტირებადი ქსოვილების ტესტირება წარმატებით დასრულდა. სპორტული აქსესუარების ახალი ხაზი ივნისის ბოლოს ჩაეშვება.',
        'content' => 'გრძელვადიანი კვლევების შედეგად, ჩვენ შევქმენით მრავალშრიანი სავარჯიშო ეკიპირება, რომელიც ეხმარება სხეულს ტემპერატურის კონტროლში ყველაზე ინტენსიური დატვირთვის დროსაც კი. OLYMPUS ELITE სერია შეიქმნა პროფესიონალი ათლეტების გამოცდილებისა და მინიმალისტური ესთეტიკის გათვალისწინებით. მოემზადეთ უპრეცედენტო გამოცდილებისთვის.'
    ]
];
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ანონსები - OLIMP</title>
    
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
                <a href="catalog.php" class="text-xs uppercase tracking-[0.25em] font-medium text-white/60 hover:text-white transition-colors duration-300">
                    კატალოგი
                </a>
                <a href="announcements.php" class="text-xs uppercase tracking-[0.25em] font-medium text-white border-b border-amber-400 pb-1">
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
            <a href="catalog.php" class="block text-xs uppercase tracking-[0.2em] text-white/70 hover:text-white">კატალოგი</a>
            <a href="announcements.php" class="block text-xs uppercase tracking-[0.2em] text-white">ანონსები</a>
            <a href="about.php" class="block text-xs uppercase tracking-[0.2em] text-white/70 hover:text-white">ჩვენს შესახებ</a>
            <a href="contact.php" class="block text-xs uppercase tracking-[0.2em] text-white/70 hover:text-white">კონტაქტი</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow animate-fadeIn py-16 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            
            <!-- News Section Header -->
            <div class="text-center mb-16 md:mb-24">
                <span class="text-amber-500 text-[10px] uppercase font-mono tracking-[0.3em] inline-flex items-center gap-2 mb-4">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                    </svg> ექსკლუზიური სიახლეები & პროექტები
                </span>
                <h2 class="text-4xl md:text-5xl font-serif tracking-[0.15em] font-light text-white mb-6 uppercase">
                    ანონსები & კოლექციები
                </h2>
                <p class="text-white/60 text-sm md:text-base max-w-xl mx-auto tracking-wide font-light leading-relaxed">
                    გაეცანით ინფორმაციას მომავალი სეზონური ხაზების, ექსკლუზიური კოლაბორაციებისა და ფიზიკური შოურუმის სიახლეების შესახებ.
                </p>
            </div>

            <!-- Featured Big Announcement -->
            <?php if (!empty($ANNOUNCEMENTS)): $feat = $ANNOUNCEMENTS[0]; ?>
                <div id="featured-announcement" class="mb-16 border border-white/5 bg-brand-card p-6 md:p-10 group hover:border-amber-400/30 transition-all duration-700">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 items-center">
                        
                        <!-- Image side -->
                        <div class="lg:col-span-7 aspect-[16/9] overflow-hidden border border-white/10 bg-brand-dark">
                            <img
                                src="<?php echo $feat['image']; ?>"
                                alt="<?php echo $feat['title']; ?>"
                                class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-1000"
                            />
                        </div>

                        <!-- Text side -->
                        <div class="lg:col-span-5 flex flex-col justify-between h-full">
                            <div>
                                <div class="flex items-center gap-4 text-[10px] uppercase font-mono text-white/40 mb-4">
                                    <span class="flex items-center gap-1.5 text-amber-500">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M6 20a1 1 0 02-1-1v-2a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 02-1 1H6zM12 11V5a2 2 0 114 0v6M9 11v6a2 2 0 104 0v-6" /></svg>
                                        <?php echo $feat['tag']; ?>
                                    </span>
                                    <span class="flex items-center gap-1.5">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                        <?php echo $feat['date']; ?>
                                    </span>
                                </div>

                                <h3 class="font-serif text-2xl md:text-3xl tracking-wide uppercase text-white font-light mb-4 group-hover:text-amber-300 transition-colors duration-300">
                                    <?php echo $feat['title']; ?>
                                </h3>

                                <p class="text-white/60 text-sm font-light leading-relaxed mb-6">
                                    <?php echo $feat['summary']; ?>
                                </p>
                            </div>

                            <button
                                onclick="openAnnDetail(<?php echo htmlspecialchars(json_encode($feat), ENT_QUOTES, 'UTF-8'); ?>)"
                                class="self-start py-3.5 px-6 border border-white/10 text-xs tracking-widest uppercase text-white hover:bg-white hover:text-black hover:border-white transition-all duration-300 flex items-center gap-2 cursor-pointer"
                            >
                                სრულად წაკითხვა
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                            </button>
                        </div>

                    </div>
                </div>
            <?php endif; ?>

            <!-- Regular Announcements Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <?php for ($i = 1; $i < count($ANNOUNCEMENTS); $i++): $ann = $ANNOUNCEMENTS[$i]; ?>
                    <div class="border border-white/5 bg-brand-card p-6 md:p-8 flex flex-col justify-between group hover:border-amber-400/20 transition-all duration-500">
                        <div>
                            <div class="aspect-[16/10] overflow-hidden border border-white/10 bg-brand-dark mb-6">
                                <img
                                    src="<?php echo $ann['image']; ?>"
                                    alt="<?php echo $ann['title']; ?>"
                                    class="w-full h-full object-cover group-hover:scale-103 transition-transform duration-700"
                                />
                            </div>

                            <div class="flex items-center gap-4 text-[10px] uppercase font-mono text-white/40 mb-4">
                                <span class="flex items-center gap-1.5 text-amber-500">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M6 20a1 1 0 02-1-1v-2a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 02-1 1H6zM12 11V5a2 2 0 114 0v6M9 11v6a2 2 0 104 0v-6" /></svg>
                                    <?php echo $ann['tag']; ?>
                                </span>
                                <span class="flex items-center gap-1.5">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                                    <?php echo $ann['date']; ?>
                                </span>
                            </div>

                            <h3 class="font-serif text-lg tracking-wide uppercase text-white font-medium mb-3 group-hover:text-amber-300 transition-colors duration-300">
                                <?php echo $ann['title']; ?>
                            </h3>

                            <p class="text-white/60 text-xs md:text-sm font-light leading-relaxed mb-6">
                                <?php echo $ann['summary']; ?>
                            </p>
                        </div>

                        <button
                            onclick="openAnnDetail(<?php echo htmlspecialchars(json_encode($ann), ENT_QUOTES, 'UTF-8'); ?>)"
                            class="w-full py-3.5 text-center border border-white/10 hover:border-amber-400 text-xs tracking-widest uppercase text-white/60 hover:text-amber-400 transition-all duration-300 flex items-center justify-center gap-2 cursor-pointer"
                        >
                            დეტალურად გაცნობა 
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                        </button>
                    </div>
                <?php endfor; ?>
            </div>

            <!-- Announcement Modal Popup -->
            <div id="announcement-detail-popup" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/85 backdrop-blur-sm hidden">
                <div class="bg-brand-dark border border-white/10 max-w-2xl w-full max-h-[85vh] overflow-y-auto p-6 md:p-10 text-white scrollbar-thin">
                    
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <div class="flex items-center gap-4 text-[10px] uppercase font-mono text-white/40 mb-2">
                                <span class="text-amber-500" id="ann-modal-tag">TAG</span>
                                <span>•</span>
                                <span id="ann-modal-date">DATE</span>
                            </div>
                            <h3 class="font-serif text-xl md:text-2xl tracking-wide uppercase text-white font-light" id="ann-modal-title">
                                TITLE
                            </h3>
                        </div>
                        <button onclick="closeAnnDetail()" class="p-1 px-2 border border-white/10 hover:border-white text-white/60 hover:text-white text-xs cursor-pointer">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                        </button>
                    </div>

                    <div class="aspect-[16/9] overflow-hidden border border-white/10 bg-brand-dark mb-6">
                        <img id="ann-modal-image" src="" alt="" class="w-full h-full object-cover" />
                    </div>

                    <div class="space-y-4 text-sm text-white/80 leading-relaxed font-light">
                        <p class="text-white font-medium italic text-base border-l-2 border-amber-400 pl-4 py-1" id="ann-modal-summary">
                            Summary...
                        </p>
                        <div class="pt-2 text-white/60 whitespace-pre-line text-xs md:text-sm" id="ann-modal-content">
                            Content...
                        </div>
                    </div>

                    <div class="mt-8 pt-6 border-t border-white/10 flex justify-end">
                        <button onclick="closeAnnDetail()" class="px-6 py-3 bg-amber-400 text-black font-semibold text-xs tracking-widest uppercase hover:bg-white transition-colors cursor-pointer">
                            გაგება
                        </button>
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
                        <li><a href="catalog.php" class="text-xs text-white/40 hover:text-amber-500 transition-colors uppercase tracking-widest">კატალოგი</a></li>
                        <li><a href="announcements.php" class="text-xs text-white border-b border-amber-400 pb-0.5 uppercase tracking-widest">ანონსები</a></li>
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
        function toggleMobileMenu() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function openAnnDetail(ann) {
            document.getElementById('ann-modal-tag').innerText = ann.tag;
            document.getElementById('ann-modal-date').innerText = ann.date;
            document.getElementById('ann-modal-title').innerText = ann.title;
            document.getElementById('ann-modal-summary').innerText = ann.summary;
            document.getElementById('ann-modal-content').innerText = ann.content;
            document.getElementById('ann-modal-image').src = ann.image;
            document.getElementById('ann-modal-image').alt = ann.title;

            var popup = document.getElementById('announcement-detail-popup');
            popup.classList.remove('hidden');
        }

        function closeAnnDetail() {
            var popup = document.getElementById('announcement-detail-popup');
            popup.classList.add('hidden');
        }
    </script>
</body>
</html>
