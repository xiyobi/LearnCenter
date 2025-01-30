<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">



<!-- Header -->
<header class="bg-white shadow">
    <div class="container mx-auto flex justify-between items-center py-4 px-6">
        <a href="/">  <h1 id="header-title" class="text-xl font-bold">MyTeach</h1></a>
        <nav>
            <ul class="flex items-center gap-4 space-x-4">
                <li><a href="/" id="home-link" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="/catalog" id="catalog-link" class="text-gray-700 hover:text-blue-500">Catalog</a></li>
                <li><a href="/contacts" id="contact-link" class="text-gray-700 hover:text-blue-500">Contact</a></li>
                <div class="flex items-center">
                    <label for="language-switcher"></label><select id="language-switcher" class="bg-white text-gray-700 p-2 rounded">
                        <option value="en" selected>English</option>
                        <option value="uz">O'zbekcha</option>
                    </select>
                </div>
            </ul>
        </nav>
    </div>
</header>

<!-- Main Content -->
<div class="container mx-auto mt-8 px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Images -->
        <div>
            <img src="https://as2.ftcdn.net/v2/jpg/04/62/88/97/1000_F_462889752_tSWP7qDYpUIL6QRlbyIC8v68jaXwVXyx.jpg" alt="Car" class="w-full rounded-lg shadow">
        </div>

        <!-- Car Details -->
        <div>
            <h2 id="car-title" class="text-2xl font-bold">Math Teacher</h2>
            <p id="availability" class="text-gray-600 mt-2">Available</p>
            <p id="price" class="text-xl font-bold text-blue-500 mt-4">Price: 400,000 UZS</p>

            <div class="mt-6">
                <h3 class="text-lg font-semibold">Description</h3>
                <p id="description" class="text-gray-700 mt-2">Has 12 years of experience and teaches mathematics. Earns 6 million UZS per month.</p>
            </div>

            <div class="mt-6">
                <h3 class="text-lg font-semibold">Specifications</h3>
                <ul class="text-gray-700 mt-2 space-y-1">
                    <li><strong>Teacher name:</strong> Olimjon Rahimov</li>
                    <li><strong>Science:</strong> Math</li>
                    <li><strong>Experience:</strong> 5 years</li>
                    <li><strong>Earns:</strong> 14,000,000 UZS</li>
                    <li><strong>University:</strong> TUIT</li>
                    <li><strong>Country:</strong> Tashkent</li>
                </ul>
            </div>
            <button id="contact-button" class="mt-6 w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Contact Seller</button>
        </div>
    </div>

    <!-- Seller Contact Section -->


    <!-- Similar Cars -->
    <div class="mt-12">
        <h3 id="similar-cars-title" class="text-xl font-bold">Similar Teachers</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="bg-white rounded-lg shadow p-4">
                <img src="https://as2.ftcdn.net/v2/jpg/04/62/88/97/1000_F_462889752_tSWP7qDYpUIL6QRlbyIC8v68jaXwVXyx.jpg" alt="Similar Car" class="w-full rounded-lg">
                <h4 class="text-lg font-bold mt-4">Math</h4>
                <p class="text-blue-500 font-semibold">400,000 UZS</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <img src="https://as2.ftcdn.net/v2/jpg/04/62/88/97/1000_F_462889752_tSWP7qDYpUIL6QRlbyIC8v68jaXwVXyx.jpg" alt="Similar Car" class="w-full rounded-lg">
                <h4 class="text-lg font-bold mt-4">English</h4>
                <p class="text-blue-500 font-semibold">500,000 UZS</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <img src="https://as2.ftcdn.net/v2/jpg/04/62/88/97/1000_F_462889752_tSWP7qDYpUIL6QRlbyIC8v68jaXwVXyx.jpg" alt="Similar Car" class="w-full rounded-lg">
                <h4 class="text-lg font-bold mt-4">Chemistry</h4>
                <p class="text-blue-500 font-semibold">460,000 UZS</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <img src="https://as2.ftcdn.net/v2/jpg/04/62/88/97/1000_F_462889752_tSWP7qDYpUIL6QRlbyIC8v68jaXwVXyx.jpg" alt="Similar Car" class="w-full rounded-lg">
                <h4 class="text-lg font-bold mt-4">IT</h4>
                <p class="text-blue-500 font-semibold">560,000 UZS</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <img src="https://as2.ftcdn.net/v2/jpg/04/62/88/97/1000_F_462889752_tSWP7qDYpUIL6QRlbyIC8v68jaXwVXyx.jpg" alt="Similar Car" class="w-full rounded-lg">
                <h4 class="text-lg font-bold mt-4">Math 2 (Advanced)</h4>
                <p class="text-blue-500 font-semibold">760,000 UZS</p>
            </div>
            <div class="bg-white rounded-lg shadow p-4">
                <img src="https://as2.ftcdn.net/v2/jpg/04/62/88/97/1000_F_462889752_tSWP7qDYpUIL6QRlbyIC8v68jaXwVXyx.jpg" alt="Similar Car" class="w-full rounded-lg">
                <h4 class="text-lg font-bold mt-4">Math 3 (Expert)</h4>
                <p class="text-blue-500 font-semibold">800,000 UZS</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-12 mt-4">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Site Navigation -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4">
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
                <h3 class="text-xl font-semibold mb-4">
                    <span class="lang-en">Follow Us</span>
                    <span class="lang-ru">Мы в соцсетях</span>
                    <span class="lang-uz">Bizni kuzating</span>
                </h3>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="..."></path>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="..."></path>
                        </svg>
                    </a>
                    <a href="#" class="hover:text-blue-400">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="..."></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Legal -->
            <div class="space-y-4">
                <h3 class="text-xl font-semibold mb-4">
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
                <h3 class="text-xl font-semibold mb-4">
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
    const languageSwitcher = document.getElementById('language-switcher');

    languageSwitcher.addEventListener('change', (event) => {
        const lang = event.target.value;

        const translations = {
            en: {
                "header-title": "YourAuto",
                "home-link": "Home",
                "catalog-link": "Catalog",
                "about-link": "About Us",
                "contact-link": "Contact",
                "car-title": "Hyundai Solaris, 2 Restyling",
                "availability": "Available",
                "price": "Price: 19,000 $",
                "description": "The car is available at Autocapital dealership. You can view it, test drive it, and purchase it.",
                "questions-title": "Questions for the Seller",
                "contact-button": "Contact Seller",
                "hello-button": "Hello",
                "delivery-button": "What is the delivery time?",
                "registration-button": "Is the registration original?",
                "mileage-button": "Is the mileage original?",
                "similar-cars-title": "Similar Cars"
            },
            uz: {
                "header-title": "SizningAvto",
                "home-link": "Bosh sahifa",
                "catalog-link": "Katalog",
                "about-link": "Biz haqimizda",
                "contact-link": "Aloqa",
                "car-title": "Hyundai Solaris, 2 Restyling",
                "availability": "Mavjud",
                "price": "Narxi: 19,000 $",
                "description": "Avtomobil Autocapital avtosalonida mavjud. Uni ko'rib chiqishingiz, sinov haydashingiz va sotib olishingiz mumkin.",
                "questions-title": "Sotuvchiga savollar",
                "contact-button": "Sotuvchi bilan bog'lanish",
                "hello-button": "Salom",
                "delivery-button": "Yetkazib berish muddati qanday?",
                "registration-button": "Ro'yxatdan o'tish originalmi?",
                "mileage-button": "Yurilgan masofa originalmi?",
                "similar-cars-title": "O'xshash avtomobillar"
            }
        };

        const currentLang = translations[lang];

        for (const key in currentLang) {
            document.getElementById(key).textContent = currentLang[key];
        }
    });
</script>
</body>
</html>
