<?php
/**
 * OLIMP - Contact Page (კონტაქტი)
 * This is a standalone self-contained PHP page.
 */

require_once 'images.php';

$submitted = false;
$name = '';
$email = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    if (!empty($name) && !empty($email) && !empty($message)) {
        $submitted = true;
        // Optionally store messages or mail here in future expansions
    }
}

$contactDetails = [
    [
        'icon' => '<svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>',
        'label' => 'შოურუმის მისამართი',
        'value' => 'თბილისი, მერაბ კოსტავას ქ. 12',
        'actionLabel' => 'რუკაზე ნახვა',
        'href' => 'https://maps.google.com'
    ],
    [
        'icon' => '<svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>',
        'label' => 'საინფორმაციო ცენტრი',
        'value' => '+995 999 999 999',
        'actionLabel' => 'დარეკვა',
        'href' => 'tel:+995999999999'
    ],
    [
        'icon' => '<svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>',
        'label' => 'ელ-ფოსტა',
        'value' => 'olimp.ge',
        'actionLabel' => 'მოგვწერეთ',
        'href' => 'mailto:olimp.ge'
    ]
];
?>
<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>კონტაქტი - OLIMP</title>
    
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
                <a href="about.php" class="text-xs uppercase tracking-[0.25em] font-medium text-white/60 hover:text-white transition-colors duration-300">
                    ჩვენს შესახებ
                </a>
                <a href="contact.php" class="text-xs uppercase tracking-[0.25em] font-medium text-white border-b border-amber-400 pb-1">
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
            <a href="about.php" class="block text-xs uppercase tracking-[0.2em] text-white/70 hover:text-white">ჩვენს შესახებ</a>
            <a href="contact.php" class="block text-xs uppercase tracking-[0.2em] text-white">კონტაქტი</a>
        </div>
    </header>

    <!-- Main Content -->
    <main class="flex-grow animate-fadeIn py-16 px-6 lg:px-12">
        <div class="max-w-7xl mx-auto">
            
            <!-- Title Block -->
            <div class="text-center mb-16 md:mb-24">
                <span class="text-amber-500 text-[10px] uppercase font-mono tracking-[0.3em] block mb-4">
                    დაინტერესდით ჩვენი პროდუქციით?
                </span>
                <h2 class="text-4xl md:text-5xl font-serif tracking-[0.15em] font-light text-white mb-6 uppercase">
                    კონტაქტი
                </h2>
                <p class="text-white/60 text-sm md:text-base max-w-xl mx-auto tracking-wide font-light leading-relaxed">
                    დაგვიკავშირდით ნებისმიერი კითხვის შემთხვევაში ან ეწვიეთ ჩვენს შოურუმს ექსკლუზიური მოდელების დასათვალიერებლად.
                </p>
            </div>

            <!-- Action Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 md:gap-24 items-start">
                
                <!-- Info Details Row -->
                <div class="space-y-12">
                    <div>
                        <h3 class="font-serif text-2xl tracking-[0.1em] text-white uppercase font-light mb-6">
                            ურთიერთობა
                        </h3>
                        <p class="text-white/60 text-sm font-light leading-relaxed mb-6">
                            ჩვენი კოლექტივი ყოველთვის მზად არის დაგეხმაროთ შესაფერისი ზომის არჩევაში, შეკვეთის გაფორმებასა თუ კორპორატიული თანამშრომლობის დაგეგმვაში.
                        </p>
                    </div>

                    <!-- Structured details list -->
                    <div class="space-y-6">
                        <?php foreach ($contactDetails as $detail): ?>
                            <div class="flex gap-4 p-5 hover:bg-brand-card/60 border border-white/5 hover:border-white/10 transition-all duration-300">
                                <div class="p-3 bg-brand-dark border border-white/10 shrink-0 h-10 w-10 flex items-center justify-center">
                                    <?php echo $detail['icon']; ?>
                                </div>
                                <div class="flex-1">
                                    <span class="text-[10px] text-white/40 uppercase tracking-widest font-mono block mb-1">
                                        <?php echo $detail['label']; ?>
                                    </span>
                                    <p class="text-sm font-light text-white/80">
                                        <?php echo $detail['value']; ?>
                                    </p>
                                </div>
                                <?php if (!empty($detail['href'])): ?>
                                    <a
                                        href="<?php echo $detail['href']; ?>"
                                        class="self-center text-[10px] text-amber-500 tracking-widest uppercase hover:text-white transition-colors border-b border-amber-500/30 pb-0.5"
                                    >
                                        <?php echo $detail['actionLabel']; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Socials Connection -->
                    <div class="pt-6 border-t border-white/10">
                        <span class="text-[10px] text-white/40 uppercase tracking-widest font-mono block mb-4">
                            გამოგვიყევით სოციალურ ქსელში
                        </span>
                        <div class="flex gap-4">
                            <a
                                href="https://instagram.com"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center gap-3 px-5 py-3 border border-white/10 hover:border-amber-400/50 hover:text-amber-400 text-xs tracking-widest uppercase transition-all duration-300 w-full md:w-auto"
                            >
                                <svg class="w-4 h-4 text-amber-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.051.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                                <span>@olimp.couture</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Interactive Contact Form Box -->
                <div class="bg-brand-card border border-white/5 p-8 md:p-12 relative overflow-hidden">
                    <h3 class="font-serif text-2xl tracking-[0.1em] text-white uppercase font-light mb-8">
                        მოგვწერეთ შეტყობინება
                    </h3>

                    <?php if ($submitted): ?>
                        <div class="py-16 text-center animate-fadeIn">
                            <div class="w-16 h-16 bg-amber-400 text-black mx-auto flex items-center justify-center rounded-none mb-6 animate-bounce">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <h4 class="font-serif text-xl uppercase tracking-widest text-white mb-3">
                                მადლობა!
                            </h4>
                            <p class="text-white/60 text-xs font-light tracking-wide max-w-sm mx-auto">
                                თქვენი შეტყობინება წარმატებით გაიგზავნა. OLIMP-ის წარმომადგენელი უახლოეს პერიოდში დაგიკავშირდებათ ელ-ფოსტაზე.
                            </p>
                            <div class="mt-8">
                                <a href="contact.php" class="px-6 py-3 border border-white/10 hover:border-white text-xs tracking-widest uppercase text-white/70 hover:text-white transition-colors">ახალი შეტყობინება</a>
                            </div>
                        </div>
                    <?php else: ?>
                        <form method="POST" action="contact.php" class="space-y-6">
                            <div>
                                <label for="user-name" class="text-[10px] uppercase tracking-widest text-white/40 font-mono block mb-2">
                                    სახელი და გვარი
                                </label>
                                <input
                                    id="user-name"
                                    name="name"
                                    type="text"
                                    required
                                    placeholder="მაგ: გიორგი კალანდაძე"
                                    class="w-full bg-brand-input border border-white/10 focus:border-amber-400 px-4 py-3.5 text-sm text-white rounded-none outline-none transition-colors"
                                />
                            </div>

                            <div>
                                <label for="user-email" class="text-[10px] uppercase tracking-widest text-white/40 font-mono block mb-2">
                                    ელექტრონული ფოსტა
                                </label>
                                <input
                                    id="user-email"
                                    name="email"
                                    type="email"
                                    required
                                    placeholder="მაგ: example@domain.com"
                                    class="w-full bg-brand-input border border-white/10 focus:border-amber-400 px-4 py-3.5 text-sm text-white rounded-none outline-none transition-colors"
                                />
                            </div>

                            <div>
                                <label for="user-message" class="text-[10px] uppercase tracking-widest text-white/40 font-mono block mb-2">
                                    შეტყობინების ტექსტი
                                </label>
                                <textarea
                                    id="user-message"
                                    name="message"
                                    required
                                    rows="4"
                                    placeholder="დაწერეთ თქვენი შეკითხვა..."
                                    class="w-full bg-brand-input border border-white/10 focus:border-amber-400 px-4 py-3.5 text-sm text-white rounded-none outline-none transition-colors resize-none font-sans"
                                ></textarea>
                            </div>

                            <button
                                type="submit"
                                class="w-full py-4 bg-amber-400 text-black font-semibold text-xs tracking-[0.25em] uppercase hover:bg-white transition-colors duration-500 flex items-center justify-center gap-3 cursor-pointer"
                            >
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" /></svg> შეტყობინების გაგზავნა
                            </button>
                        </form>
                    <?php endif; ?>
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
                        <li><a href="announcements.php" class="text-xs text-white/40 hover:text-amber-500 transition-colors uppercase tracking-widest">ანონსები</a></li>
                        <li><a href="about.php" class="text-xs text-white/40 hover:text-amber-500 transition-colors uppercase tracking-widest">ჩვენს შესახებ</a></li>
                        <li><a href="contact.php" class="text-xs text-white border-b border-amber-400 pb-0.5 uppercase tracking-widest">კონტაქტი</a></li>
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
