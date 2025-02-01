<?php require '../resources/views/admin-components/header.php'; ?>

    <title>Sozlamalar - Admin Panel</title>

<body class="bg-gray-100">
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <?php include '../resources/views/admin-components/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-2xl font-bold">Sozlamalar</h1>
                <p class="text-gray-600">Tizim sozlamalarini boshqarish</p>
            </div>

            <!-- Settings Sections -->
            <div class="space-y-6">
                <!-- Profile Settings -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold mb-4">Profil Sozlamalari</h2>
                    <form id="profileForm" class="space-y-4">

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">Ism</label>
                                <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Familiya</label>
                                <input type="text" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Email</label>
                                <input type="email" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Telefon</label>
                                <input type="tel" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Security Settings -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold mb-4">Xavfsizlik</h2>
                    <form id="securityForm" class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium mb-1">Joriy Parol</label>
                            <input type="password" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Yangi Parol</label>
                            <input type="password" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Parolni Tasdiqlash</label>
                            <input type="password" class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                        </div>
                    </form>
                </div>

                <!-- Notification Settings -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold mb-4">Bildirishnomalar</h2>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="font-medium">Email bildirishnomalari</h3>
                                <p class="text-sm text-gray-500">Yangiliklar va o'zgarishlar haqida email orqali xabar olish</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                            </label>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="font-medium">SMS bildirishnomalari</h3>
                                <p class="text-sm text-gray-500">Muhim xabarlarni SMS orqali olish</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Save Button -->
                <div class="flex justify-end">
                    <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                        Saqlash
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="module">
    import { default as apiFetch } from '/js/utils/allFetch.js';

    // Form submission handlers
    document.addEventListener('DOMContentLoaded', function() {
        setupFormHandlers();
        setupImageUpload();
        loadUserData();
    });

    function setupFormHandlers() {
        const profileForm = document.getElementById('profileForm');
        const securityForm = document.getElementById('securityForm');

        if (profileForm) {
            profileForm.addEventListener('submit', handleProfileSubmit);
        }
        if (securityForm) {
            securityForm.addEventListener('submit', handleSecuritySubmit);
        }
    }

    async function handleProfileSubmit(event) {
        event.preventDefault();
        try {
            const formData = new FormData(event.target);
            const response = await apiFetch('/api/settings/profile', {
                method: 'POST',
                body: formData
            });
            showNotification('Profil muvaffaqiyatli yangilandi');
        } catch (error) {
            handleError(error);
        }
    }

    async function handleSecuritySubmit(event) {
        event.preventDefault();
        try {
            const formData = new FormData(event.target);
            const response = await apiFetch('/api/settings/security', {
                method: 'POST',
                body: formData
            });
            showNotification('Parol muvaffaqiyatli o\'zgartirildi');
        } catch (error) {
            handleError(error);
        }
    }

    function setupImageUpload() {
        const imageInput = document.querySelector('input[type="file"]');
        if (imageInput) {
            imageInput.addEventListener('change', handleImageUpload);
        }
    }

    async function handleImageUpload(event) {
        try {
            const file = event.target.files[0];
            if (!file) return;

            const formData = new FormData();
            formData.append('image', file);

            const response = await apiFetch('/api/settings/profile-image', {
                method: 'POST',
                body: formData
            });

            // Update profile image preview
            const profileImage = document.querySelector('img[alt="Profile"]');
            if (profileImage && response.imageUrl) {
                profileImage.src = response.imageUrl;
            }
        } catch (error) {
            handleError(error);
        }
    }

    async function loadUserData() {
        try {
            const response = await apiFetch('/api/user/profile');
            fillFormData(response);
        } catch (error) {
            handleError(error);
        }
    }

    function fillFormData(data) {
        // Fill form fields with user data
        const fields = ['firstName', 'lastName', 'email', 'phone'];
        fields.forEach(field => {
            const input = document.querySelector(`input[name="${field}"]`);
            if (input && data[field]) {
                input.value = data[field];
            }
        });
    }

    function showNotification(message) {
        // Add your notification logic here
        alert(message); // Replace with better notification system
    }

    function handleError(error) {
        console.error('Error:', error);
        showNotification('Xatolik yuz berdi. Qaytadan urinib ko\'ring.');
    }
</script>
</body>
<?php require '../resources/views/admin-components/footer.php'; ?>
</html>