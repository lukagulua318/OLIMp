<?php
/**
 * OLIMP - About Page (ჩვენს შესახებ)
 * This is a standalone self-contained PHP page.
 */

require_once 'images.php';

// Define brand pillars
$brandPillars = [
    [
        'icon' => '<svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5a2 2 0 10-2 2h2zm0 0h4m-4 0H8m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>',
        'title' => 'ოლიმპიური ჰარმონია',
        'desc' => 'ლოგოზე გამოსახული ზეთისხილის გვირგვინი და ბერძნული მეანდრის სილამაზე გვახსენებს ფიზიკურ და ესთეტიკურ სრულყოფილებას. ჩვენი მიზანია ტანსაცმელში ამ კლასიკური არქიტექტორული პრინციპების ჩაქსოვა.'
    ],
    [
        'icon' => '<svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg>',
        'title' => 'ინოვაცია & ფუნქციონალი',
        'desc' => 'სპორტული კოლექცია ორიენტირებულია თერმორეგულაციასა და ბიო-ადაპტირებადობაზე. ჩვენი ინჟინრები მუშაობენ უახლეს სინთეზურ ძაფებზე, რათა სამოსმა უზრუნველყოს სხეულის სრული თავისუფლება.'
    ],
    [
        'icon' => '<svg class="w-6 h-6 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>',
        'title' => 'ეკოლოგიური კულტურა',
        'desc' => 'ჩვენს ურბანულ და ქუჩის (Streetwear) ხაზში ვიყენებთ 100% ორგანულ მძიმე ბამბას (450+ GSM), რომელიც უზრუნველყოფს ხაზების მკვეთრ სილუეტს, ხანგრძლივ გამძლეობასა და გარემოს დაცვას.'
    ]
];
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ჩვენს შესახებ - OLIMP</title>
    
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
                <a href="announcements.php" class="text-xs uppercase tracking-[0.25em] font-medium text-white/60 hover:text-white transition-colors duration-300">
                    ანონსები
                </a>
                <a href="about.php" class="text-xs uppercase tracking-[0.25em] font-medium text-white border-b border-amber-400 pb-1">
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
            <a href="announcements.php" class="block text-xs uppercase tracking-[0.2em] text-white/70 hover:text-white">ანონსები</a>
            <a href="about.php" class="block text-xs uppercase tracking-[0.2em] text-white">ჩვენს შესახებ</a>
            <a href="contact.php" class="block text-xs uppercase tracking-[0.2em] text-white/70 hover:text-white">კონტაქტი</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow animate-fadeIn py-16 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            
            <!-- Banner Frame -->
            <div class="relative h-[450px] overflow-hidden border border-white/5 mb-16 md:mb-24">
                <img
                    src="<?php echo $IMAGES['aboutBanner']; ?>"
                    alt="OLIMP Showroom Concept"
                    class="w-full h-full object-cover filter brightness-[0.45] scale-102"
                />
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/45 to-transparent"></div>
                <div class="absolute bottom-10 left-6 md:left-12 max-w-xl">
                    <span class="text-[10px] text-amber-500 uppercase tracking-[0.3em] font-mono block mb-2">
                        ჩვენი ფილოსოფია
                    </span>
                    <h2 class="text-3xl md:text-5xl font-serif tracking-widest font-light uppercase text-white mb-4">
                        OLIMP CONCEPT
                    </h2>
                    <p class="text-white/60 text-sm md:text-base font-light leading-relaxed">
                        ინოვაციური სპორტული ტანსაცმლისა და მინიმალისტური ურბანული სტილის უნაკლო შერწყმა თბილისიდან.
                    </p>
                </div>
            </div>

            <!-- Narrative columns -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 mb-24 items-start">
                <div>
                    <span class="text-amber-500 text-[10px] font-mono uppercase tracking-[0.35em] block mb-4">
                        ისტორია & იდენტობა
                    </span>
                    <h3 class="text-3xl font-serif font-light tracking-widest uppercase text-white mb-6">
                        როგორ დაიბადა OLIMP
                    </h3>
                    <div class="space-y-6 text-white/60 text-sm md:text-base leading-relaxed font-light">
                        <p>
                            ბრენდი <strong class="text-white font-medium">OLIMP</strong> დაარსდა იმ იდეით, რომ თანამედროვე ტემპით ცხოვრებას სჭირდება სამოსი, რომელიც არ არჩევს გარემოს. სპორტული დარბაზიდან ქუჩაში გასვლისას თქვენ უნდა გქონდეთ კიმონოსებრი სიმსუბუქე, მონოლითური პროპორციები და კლასიკური ჰარმონია.
                        </p>
                        <p>
                            ჩვენ არ მივდევთ სწრაფ მოდას (Fast Fashion). ჩვენი სამოსი იქმნება მინისაბადო დამოუკიდებელი ხაზებით, სადაც ყოველი ნაკერი, ელვა და ჯიბის განლაგება გათვლილია გეომეტრიული სიზუსტით.
                        </p>
                        <p>
                            ზეთისხილის ოქროსფერი გვირგვინი, რომელიც ჩვენს ემბლემას ამშვენებს, ტრიუმფის და შეუჩერებელი განვითარების სიმბოლოა. ყოველი მომხმარებელი, რომელიც ატარებს OLIMP-ს, ხდება ამ კულტურის თანამონაწილე.
                        </p>
                    </div>
                </div>

                <div class="bg-brand-card border border-white/5 p-8 md:p-12 space-y-10">
                    <div class="flex items-center gap-2 text-xs uppercase tracking-widest text-amber-500 font-mono mb-2">
                        <svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="animation-duration: 8s;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" /></svg> ჩვენი ძირითადი ფასეულობები
                    </div>
                    <?php foreach ($brandPillars as $pillar): ?>
                        <div class="flex gap-5">
                            <div class="p-3 bg-brand-dark border border-white/10 shrink-0 h-12 w-12 flex items-center justify-center">
                                <?php echo $pillar['icon']; ?>
                            </div>
                            <div>
                                <h4 class="font-serif text-base tracking-widest text-white uppercase font-medium mb-2">
                                    <?php echo $pillar['title']; ?>
                                </h4>
                                <p class="text-xs text-white/60 font-light leading-relaxed">
                                    <?php echo $pillar['desc']; ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Highlight quote -->
            <div class="border-y border-white/5 py-16 text-center max-w-3xl mx-auto my-12">
                <p class="font-serif text-2xl md:text-3xl italic text-white/80 font-light tracking-wide leading-relaxed">
                    "სრულყოფილება არ არის კონკრეტული დანიშნულების წერტილი, ის მუდმივი პროცესია, რომელსაც სტილითა და კომფორტით მივაღწევთ."
                </p>
                <span class="text-[10px] text-amber-500 tracking-[0.4em] uppercase font-mono block mt-6">
                    — OLIMP DESIGN STUDIO
                </span>
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
                        <li><a href="announcements.php" class="text-xs text-white/40 hover:text-amber-500 transition-colors uppercase tracking-widest">ანონსები</a></li>
                        <li><a href="about.php" class="text-xs text-white border-b border-amber-400 pb-0.5 uppercase tracking-widest">ჩვენს შესახებ</a></li>
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
    </script>
</body>
</html>
