<?php require '../resources/views/components/header.php'; ?>
<div class="bg-gradient-to-b from-gray-50 to-gray-100">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4">
            <a href="/"><h1 class="text-2xl font-bold text-blue-600">MyTeach</h1></a>
            <nav>
                <ul class="flex space-x-6 text-gray-700">
                    <li><a href="/" class="hover:text-blue-600">Home</a></li>
                    <li><a href="/teachers" class="hover:text-blue-600">Teacher</a></li>
                    <li><a href="/news" class="hover:text-blue-600">News</a></li>
                    <li><a href="/contacts" class="hover:text-blue-600">Contacts</a></li>
                </ul>
            </nav>
            <div class="flex items-center space-x-4">
                <label for="language-selector"></label><select class="border border-gray-300 rounded-md p-2" id="language-selector">
                    <option value="en">English</option>
                    <option value="ru">Русский</option>
                    <option value="uz">Oʻzbek</option>
                </select>
                <a href="/login" class="text-sm font-medium text-gray-700 hover:text-blue-600">Login</a>
                <a href="/register" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Sign Up</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-blue-100 py-12 mx-auto">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">MyTeach</h2>
                <p class="text-gray-700 mb-6">
                    Quyidagi reklama matni sizning kurslaringizni targ‘ib qilish uchun mos bo‘lishi mumkin: <br>

                    📚 Ona tili va adabiyot kurslari – savodxonlik va nutq mahoratini oshiring! 🇺🇿<br>

                    Siz maktab o‘quvchisi yoki talaba bo‘lsangiz ham, ona tilida mukammal yozish va ravon gapirishni o‘rganmoqchimisiz? Unda bizning kurslarimiz aynan siz uchun!<br>

                    ✅ Maktab o‘quvchilari uchun:<br>
                    🔹 Imtihonlarga tayyorgarlik (DTM, maktab nazorat ishlari)<br>
                    🔹 Yozma va og‘zaki nutqni rivojlantirish<br>
                    🔹 She’riy va badiiy matnlarni tahlil qilish<br>

                    ✅ Talabalar uchun:<br>
                    🔹 Ilmiy va rasmiy yozishmalarni to‘g‘ri yuritish<br>
                    🔹 Matn yozish ko‘nikmalarini rivojlantirish<br>
                    🔹 Adabiyot va tilshunoslik bo‘yicha chuqur tahlillar<br>

                    📍 Onlayn va oflayn darslar<br>
                    📆 Moslashuvchan jadval<br>
                    🎯 Amaliy mashg‘ulotlar va individual yondashuv<br>

                    📩 Ro‘yxatdan o‘tish uchun: [Telefon raqam yoki Telegram manzil]<br>

                    🚀 Ona tilingizni chuqur o‘rganing va imkoniyatlaringizni kengaytiring!<br></p>
                <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700">Learn More</a>
            </div>
            <!--            <img src="https://assets-eu-01.kc-usercontent.com/3b3d460e-c5ae-0195-6b86-3ac7fb9d52db/3c5d91ad-f15a-4645-afa9-4b158a2ccbda/7c0f1f2e1303456088b15eb4c90a45a5.jpeg" alt="Geely Monjaro" class="w-full rounded-lg shadow-md">-->

            <!-- This is an example component -->
            <div class="md:w-1/2 mt-8 md:mt-0 ">

                <div id="default-carousel" class="relative" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQa3RHAKuv2CNMBFURjiHZD-i8x_QI5iQcvVA&s" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXQC9efMySS51y0At3GGISaYIrdLfV6LO-DQ&s" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQe1eaPt_4Bn2ThffuQS4OE7aTrW8K_iWFT2Q&s" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="hidden">Previous</span>
            </span>

                    </button>
                    <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="hidden">Next</span>
            </span>
                    </button>
                </div>
                <p class="mt-5">This carousel slider component is part of a larger, open-source library of Tailwind CSS components. Learn
                    more
                    by going to the official <a class="text-blue-600 hover:underline"
                                                href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite Documentation</a>.
                </p>

                <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
            </div>
        </div>
    </section>

<section class="container mx-auto py-12">
    <h2 class="text-2xl font-bold text-gray-900 mb-6">Car Catalog</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Car Item -->
        <div class="bg-white shadow-md rounded-lg p-4">
            <a href="/product-card"><img src="https://as2.ftcdn.net/v2/jpg/04/62/88/97/1000_F_462889752_tSWP7qDYpUIL6QRlbyIC8v68jaXwVXyx.jpg" alt="Car 1" class="w-full rounded-lg mb-4"></a>
            <h3 class="text-lg font-bold text-gray-900">Hyundai Solaris 2022</h3>
            <p class="text-gray-700">19,000 $</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <a href="/product-card"><img src="https://as2.ftcdn.net/v2/jpg/04/62/88/97/1000_F_462889752_tSWP7qDYpUIL6QRlbyIC8v68jaXwVXyx.jpg" alt="Car 1" class="w-full rounded-lg mb-4"></a>
            <h3 class="text-lg font-bold text-gray-900">BMW 740</h3>
            <p class="text-gray-700">160,000 $</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <a href="/product-card"><img src="https://as2.ftcdn.net/v2/jpg/04/62/88/97/1000_F_462889752_tSWP7qDYpUIL6QRlbyIC8v68jaXwVXyx.jpg" alt="Car 1" class="w-full rounded-lg mb-4"></a>
            <h3 class="text-lg font-bold text-gray-900">Mercedes-Benz S-Class</h3>
            <p class="text-gray-700">180,000 $</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4">
            <a href="/product-card"><img src="https://as2.ftcdn.net/v2/jpg/04/62/88/97/1000_F_462889752_tSWP7qDYpUIL6QRlbyIC8v68jaXwVXyx.jpg" alt="Car 1" class="w-full rounded-lg mb-4"></a>
            <h3 class="text-lg font-bold text-gray-900">Kia K5 2021</h3>
            <p class="text-gray-700">35,000 $</p>
        </div>
    </div>
</section>


<div class="bg-gray-50">
    <!-- Why Us Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8 text-center">Why us?</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white shadow-lg p-6 text-center">
                    <img src="https://akme.uz/bahor-qaytsaydi-yana/2021/03/kognit.jpg" alt="Icon" class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Tajribali o‘qituvchilar</h3>
                    <p class="text-gray-600">Key transfer reliability</p>
                </div>
                <div class="bg-white shadow-lg p-6 text-center">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShdYBFLDvyEdnyOFcrjWNJPiWlciSoE23kwg&s" alt="Icon" class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Online 24/7</h3>
                    <p class="text-gray-600">Always ready to help</p>
                </div>
                <div class="bg-white shadow-lg p-6 text-center">
                    <img src="https://ahaslides.com/wp-content/uploads/2023/02/SEO2373-thumb.png" alt="Icon" class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Moslashuvchan dars jadvali </h3>
                    <p class="text-gray-600">Siz istalgan joydan, istalgan vaqtda ta’lim olishingiz mumkin.</p>
                </div>
                <div class="bg-white shadow-lg p-6 text-center">
                    <img src="data:image/jpeg;base64,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REBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERB//2Q==" alt="Icon" class="mx-auto mb-4">
                    <h3 class="text-lg font-semibold mb-2">Amaliy va interaktiv o‘qitish </h3>
                    <p class="text-gray-600">Bizning kurslarimiz nazariyadan tashqari, amaliy mashg‘ulotlarga asoslangan.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-2xl font-bold mb-4">O'quv markazimiz haqida va assoschisi  haqida</h2>
                <p class="text-gray-600 mb-6">
                    <h6>
                    Biz haqimizda
                    Bizning MyTeach – innovatsion va sifatli ta’lim berishga ixtisoslashgan zamonaviy online o‘quv markazi. Maqsadimiz – o‘quvchilarga yuqori sifatli bilim berish va ularning kelajakdagi muvaffaqiyatiga hissa qo‘shish.

                    Nega bizni tanlash kerak?<br>
                    🔹 Tajribali ustozlar – Har bir o‘qituvchimiz o‘z sohasida yetuk mutaxassis bo‘lib, real tajribaga ega.<br>
                    🔹 Online ta’lim imkoniyati – Istalgan joydan, istalgan vaqtda ta’lim olish imkoniyati.<br>
                    🔹 Interaktiv darslar – Darslar amaliy mashg‘ulotlar, testlar va real loyihalar bilan boyitilgan.<br>
                    🔹 Moslashuvchan jadval – O‘quvchilar o‘zlariga qulay vaqtda darslarni o‘rganishlari mumkin.<br>
                    🔹 Sertifikat va qo‘llab-quvvatlash – Kursni muvaffaqiyatli tamomlaganlar xalqaro darajadagi sertifikatga ega bo‘ladilar.<br>

                    <br>Yo‘nalishlarimiz!<br>

                    📌 IT (Frontend, Backend, Fullstack, Mobile Development)<br>
                    📌 Dasturlash (Python, Java, PHP, Web Development)<br>
                    📌 Tillar (Ingliz, Rus, Nemis)<br>
                    📌 Grafik dizayn va UX/UI<br>
                    📌 Biznes va marketing<br>
                    📌 Matematika va fizika tayyorgarlik kurslari<br><br>
                    Biz bilan zamonaviy kasblarni o‘rganing va kelajak sari ishonch bilan qadam qo‘ying!
                    </h6>
                    </p>

            </div>
            <div class="text-center py-12">
                <img src="https://arton.uz/_next/image?url=%2Fimages%2Fflex-slider%2Fimg3.png&w=3840&q=100" alt="Company" class="mx-auto">
            </div>
        </div>
    </section>
    <!-- Brands Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8 text-center">O'rgatiladigan Kitoblar</h2>
            <div class="grid grid-cols-3 md:grid-cols-6 gap-6 py-6">
                <img src="https://eduproger.uz/articles/max_q9eqrkm8ojeb3pdul9t9.jpg" alt="Kitob" class="mx-auto">
                <img src="https://sayt.tstu.uz/storage/app/public/images/2023-01-17/hYuLvkOEjFovernUodfBr03RF3OOocUTM0UXwssO.jpg" alt="Kitob" class="mx-auto">
                <img src="https://prep.uz/storage/posts/March2020/istockphoto-1047570732-612x6121.jpg" alt="Kitob" class="mx-auto">
                <img src="https://abt.uz/blog/matnga-asoslangan-ingliz-tili-testlarini-bajarish" alt="Kitob" class="mx-auto">
                <img src="https://sayt.tstu.uz/storage/app/public/images/2023-01-17/hYuLvkOEjFovernUodfBr03RF3OOocUTM0UXwssO.jpg" alt="Kitob" class="mx-auto">
                <img src="https://abt.uz/blog/matnga-asoslangan-ingliz-tili-testlarini-bajarish" alt="Kitob" class="mx-auto">
                <img src="https://sayt.tstu.uz/storage/app/public/images/2023-01-17/hYuLvkOEjFovernUodfBr03RF3OOocUTM0UXwssO.jpg" alt="Kitob" class="mx-auto">
                <img src="https://sayt.tstu.uz/storage/app/public/images/2023-01-17/hYuLvkOEjFovernUodfBr03RF3OOocUTM0UXwssO.jpg" alt="Kitob" class="mx-auto">
                <img src="https://xorazmnoma.uz/wp-content/uploads/2022/09/1643000701_51-papik-pro-p-risunok-na-temu-matematika-54.jpg" alt="Kitob" class="mx-auto">
                <img src="https://eduproger.uz/articles/max_q9eqrkm8ojeb3pdul9t9.jpg" alt="Kitob" class="mx-auto">
                <img src="https://prep.uz/storage/posts/March2020/istockphoto-1047570732-612x6121.jpg" alt="Kitob" class="mx-auto">
                <img src="https://xorazmnoma.uz/wp-content/uploads/2022/09/1643000701_51-papik-pro-p-risunok-na-temu-matematika-54.jpg" alt="Kitob" class="mx-auto">
            </div>
        </div>
    </section>
    <!-- News Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8 text-center">Teams</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-gray-100 shadow-lg rounded-lg p-6">
                    <img src="https://play-lh.googleusercontent.com/FooPX0bHfSsItnnwCzysdIXHtn0MjfSTsuvOXtMZBtY0acgVQgMonDhu4yBRGOorIA" alt="News" class="rounded-lg mb-4">
                    <h3 class="text-lg font-semibold mb-2">Assochisi</h3>
                    <p class="text-gray-600 mb-4">Qisqacha tavsifi.</p>
                    <a href="/news" class="text-blue-600 hover:underline">Batafsil</a>
                </div>
                <div class="bg-gray-100 shadow-lg rounded-lg p-6">
                    <img src="https://play-lh.googleusercontent.com/FooPX0bHfSsItnnwCzysdIXHtn0MjfSTsuvOXtMZBtY0acgVQgMonDhu4yBRGOorIA" alt="News" class="rounded-lg mb-4">
                    <h3 class="text-lg font-semibold mb-2">Dusturchilar</h3>
                    <p class="text-gray-600 mb-4">Qisqacha tavsifi.</p>
                    <a href="/news" class="text-blue-600 hover:underline">Batafsil</a>
                </div>
                <div class="bg-gray-100 shadow-lg rounded-lg p-6">
                    <img src="https://kursy.uz/images/stories/king-ru-20-07-2023-2.jpg" alt="News" class="rounded-lg mb-4">
                    <h3 class="text-lg font-semibold mb-2"> Rus tili O'qituvchi</h3>
                    <p class="text-gray-600 mb-4">Qisqacha tavsifi.</p>
                    <a href="/news" class="text-blue-600 hover:underline">Batafsil</a>
                </div>
                <div class="bg-gray-100 shadow-lg rounded-lg p-6">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/C_Hello_World_Program.png/1100px-C_Hello_World_Program.png" alt="News" class="rounded-lg mb-4">
                    <h3 class="text-lg font-semibold mb-2">IT o'ituvchi</h3>
                    <p class="text-gray-600 mb-4">Qisqacha tavsifi.</p>
                    <a href="/news" class="text-blue-600 hover:underline">Batafsil</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Reviews Section -->
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Site Navigation -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4" data-lang="footer-nav">
                    <span class="lang-en">Navigation</span>
                    <span class="lang-ru">Навигация</span>
                    <span class="lang-uz">Navigatsiya</span>
                </h3>
                <ul class="space-y-2">
                    <li><a href="/catalog" class="hover:text-blue-400">
                            <span class="lang-en">Catalog</span>
                            <span class="lang-ru">Каталог</span>
                            <span class="lang-uz">Katalog</span>
                        </a></li>
                    <li><a href="/about" class="hover:text-blue-400">
                            <span class="lang-en">About Us</span>
                            <span class="lang-ru">О нас</span>
                            <span class="lang-uz">Biz haqimizda</span>
                        </a></li>
                    <li><a href="/contacts" class="hover:text-blue-400">
                            <span class="lang-en">Contacts</span>
                            <span class="lang-ru">Контакты</span>
                            <span class="lang-uz">Kontaktlar</span>
                        </a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4" data-lang="footer-social">
                    <span class="lang-en">Follow Us</span>
                    <span class="lang-ru">Мы в соцсетях</span>
                    <span class="lang-uz">Bizni kuzating</span>
                </h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Legal -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4" data-lang="footer-legal">
                    <span class="lang-en">Legal</span>
                    <span class="lang-ru">Правовая информация</span>
                    <span class="lang-uz">Huquqiy ma'lumot</span>
                </h3>
                <ul class="space-y-2">
                    <li><a href="/privacy" class="hover:text-blue-400">
                            <span class="lang-en">Privacy Policy</span>
                            <span class="lang-ru">Политика конфиденциальности</span>
                            <span class="lang-uz">Maxfiylik siyosati</span>
                        </a></li>
                    <li><a href="/terms" class="hover:text-blue-400">
                            <span class="lang-en">Terms of Service</span>
                            <span class="lang-ru">Условия использования</span>
                            <span class="lang-uz">Foydalanish shartlari</span>
                        </a></li>
                </ul>
            </div>

            <!-- Language Selection -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4" data-lang="footer-language">
                    <span class="lang-en">Language</span>
                    <span class="lang-ru">Язык</span>
                    <span class="lang-uz">Til</span>
                </h3>
                <select
                        id="footer-language-selector"
                        class="bg-gray-700 text-white border border-gray-600 rounded px-4 py-2 w-full"
                        aria-label="Select Language"
                >
                    <option value="en">English</option>
                    <option value="ru">Русский</option>
                    <option value="uz">O'zbek</option>
                </select>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="mt-12 pt-8 border-t border-gray-700 text-sm text-gray-400">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p>© 2024 YouCar. All rights reserved.</p>
                <p class="mt-4 md:mt-0">
                    <span class="lang-en">Designed & Developed by YouCar Team</span>
                    <span class="lang-ru">Дизайн и разработка команды YouCar</span>
                    <span class="lang-uz">YouCar jamoasi tomonidan ishlab chiqilgan</span>
                </p>
            </div>
        </div>
    </div>
</footer>


<script>
    const languageSelector = document.getElementById('language-selector');
    languageSelector.addEventListener('change', (event) => {
        const selectedLanguage = event.target.value;
        alert(Selected language: ${selectedLanguage});
        // Add logic here for updating the page language dynamically
    });
</script>
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</div>
<?php require '../resources/views/components/footer.php'; ?>
