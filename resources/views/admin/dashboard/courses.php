<?php require '../resources/views/admin-components/header.php'; ?>

<body class="bg-gray-100">
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <?php include '../resources/views/admin-components/sidebar.php'; ?>

    <!-- Main Content -->
    <div class="flex-1 p-8">
        <!-- Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-gray-500">Jami Kurslar</h3>
                    <i class="fas fa-book text-blue-500"></i>
                </div>
                <p class="text-2xl font-bold mt-2">24</p>
                <p class="text-sm text-green-500 mt-2">+3 bu oy</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-gray-500">Faol O'quvchilar</h3>
                    <i class="fas fa-users text-green-500"></i>
                </div>
                <p class="text-2xl font-bold mt-2">1,234</p>
                <p class="text-sm text-green-500 mt-2">+12% o'sish</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-gray-500">O'rtacha Reyting</h3>
                    <i class="fas fa-star text-yellow-500"></i>
                </div>
                <p class="text-2xl font-bold mt-2">4.8</p>
                <p class="text-sm text-gray-500 mt-2">Jami 856 baho</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-gray-500">Umumiy Daromad</h3>
                    <i class="fas fa-dollar-sign text-green-500"></i>
                </div>
                <p class="text-2xl font-bold mt-2">12,450,000 UZS</p>
                <p class="text-sm text-green-500 mt-2">+8% o'sish</p>
            </div>
        </div>

        <!-- Course Management -->
        <div class="bg-white rounded-lg shadow mb-8">
            <div class="p-6 border-b">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold">Kurslar</h2>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        Yangi Kurs
                    </button>
                </div>
            </div>

            <!-- Filters -->
            <div class="p-4 border-b">
                <div class="flex flex-wrap gap-4">
                    <input
                            type="text"
                            placeholder="Kursni qidirish..."
                            class="flex-1 min-w-[200px] px-4 py-2 border rounded-lg"
                    >
                    <select class="px-4 py-2 border rounded-lg">
                        <option>Barcha Kategoriyalar</option>
                        <option>Dasturlash</option>
                        <option>Dizayn</option>
                        <option>Marketing</option>
                    </select>
                    <select class="px-4 py-2 border rounded-lg">
                        <option>Holati</option>
                        <option>Faol</option>
                        <option>Qoralama</option>
                        <option>Arxivlangan</option>
                    </select>
                </div>
            </div>

            <!-- Course List -->
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left p-4">Nomi</th>
                        <th class="text-left p-4">O'qituvchi</th>
                        <th class="text-left p-4">Kategoriya</th>
                        <th class="text-left p-4">Narxi</th>
                        <th class="text-left p-4">O'quvchilar</th>
                        <th class="text-left p-4">Holati</th>
                        <th class="text-left p-4">Amallar</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y">
                    <tr class="hover:bg-gray-50">
                        <td class="p-4">
                            <div class="flex items-center">
                                <img src="/api/placeholder/40/40" alt="" class="w-10 h-10 rounded mr-3">
                                <div>
                                    <div class="font-medium">Web Dasturlash</div>
                                    <div class="text-sm text-gray-500">12 soat • 24 dars</div>
                                </div>
                            </div>
                        </td>
                        <td class="p-4">Abdulloh Mahmudov</td>
                        <td class="p-4">Dasturlash</td>
                        <td class="p-4">1,200,000 UZS</td>
                        <td class="p-4">156</td>
                        <td class="p-4">
                                    <span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                        Faol
                                    </span>
                        </td>
                        <td class="p-4">
                            <div class="flex space-x-2">
                                <button class="p-2 hover:bg-gray-100 rounded-full">
                                    <i class="fas fa-edit text-blue-500"></i>
                                </button>
                                <button class="p-2 hover:bg-gray-100 rounded-full">
                                    <i class="fas fa-trash text-red-500"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="p-4 border-t">
                <div class="flex items-center justify-between">
                    <p class="text-gray-500">1-10 dan 24 ta</p>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 border rounded hover:bg-gray-50">Oldingi</button>
                        <button class="px-3 py-1 border rounded bg-blue-600 text-white">1</button>
                        <button class="px-3 py-1 border rounded hover:bg-gray-50">2</button>
                        <button class="px-3 py-1 border rounded hover:bg-gray-50">3</button>
                        <button class="px-3 py-1 border rounded hover:bg-gray-50">Keyingi</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white rounded-lg shadow">
            <div class="p-6 border-b">
                <h2 class="text-xl font-bold">So'nggi Faoliyatlar</h2>
            </div>
            <div class="p-6">
                <div class="space-y-6">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-plus text-blue-500"></i>
                        </div>
                        <div>
                            <p class="font-medium">Yangi kurs qo'shildi: "Python Asoslari"</p>
                            <p class="text-sm text-gray-500">2 soat oldin • Abdulloh Mahmudov tomonidan</p>
                        </div>
                    </div>

                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <i class="fas fa-edit text-green-500"></i>
                        </div>
                        <div>
                            <p class="font-medium">"Web Dasturlash" kursi yangilandi</p>
                            <p class="text-sm text-gray-500">5 soat oldin • Abror Anvarov tomonidan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="module">
    import { default as apiFetch } from '/js/utils/allFetch.js';

    document.addEventListener('DOMContentLoaded', function() {
        initializeFilters();
        loadCourses();
        setupEventListeners();
    });

    function initializeFilters() {
        const searchInput = document.querySelector('input[type="text"]');
        if (searchInput) {
            searchInput.addEventListener('input', debounce(handleSearch, 300));
        }
    }

    async function loadCourses(filters = {}) {
        try {
            const response = await apiFetch('/api/courses', {
                method: 'GET',
                params: filters
            });
            renderCourses(response.data);
        } catch (error) {
            handleError(error);
        }
    }

    function renderCourses(courses) {
        const tbody = document.querySelector('tbody');
        if (!tbody) return;

        tbody.innerHTML = courses.map(course => `
                <tr class="hover:bg-gray-50">
                    <td class="p-4">
                        <div class="flex items-center">
                            <img src="${course.thumbnail}" alt="" class="w-10 h-10 rounded mr-3">
                            <div>
                                <div class="font-medium">${course.title}</div>
                                <div class="text-sm text-gray-500">${course.duration} • ${course.lessons} dars</div>
                            </div>
                        </div>
                    </td>
                    <td class="p-4">${course.instructor}</td>
                    <td class="p-4">${course.category}</td>
                    <td class="p-4">${formatPrice(course.price)}</td>
                    <td class="p-4">${course.students}</td>
                    <td class="p-4">
                        <span class="px-2 py-1 bg-${getStatusColor(course.status)}-100
                                   text-${getStatusColor(course.status)}-800 rounded-full text-sm">
                            ${course.status}
                        </span>
                    </td>
                    <td class="p-4">
                        <div class="flex space-x-2">
                            <button onclick="editCourse(${course.id})" class="p-2 hover:bg-gray-100 rounded-full">
                                <i class="fas fa-edit text-blue-500"></i>
                            </button>
                            <button onclick="deleteCourse(${course.id})" class="p-2 hover:bg-gray-100 rounded-full">
                                <i class="fas fa-trash text-red-500"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            `).join('');
    }

    function getStatusColor(status) {
        const colors = {
            'Faol': 'green',
            'Qoralama': 'yellow',
            'Arxivlangan': 'gray'
        };
        return colors[status] || 'gray';
    }

    function formatPrice(price) {
        return new Intl.NumberFormat('uz-UZ', {
            style: 'currency',
            currency: 'UZS'
        }).format(price);
    }

    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    function handleError(error) {
        console.error('Error:', error);
        // Add your error notification logic here
    }

    // Make functions available globally
    window.editCourse = async function(courseId) {
        // Add your edit course logic here
    };

    window.deleteCourse = async function(courseId) {
        if (!confirm('Haqiqatan ham bu kursni o\'chirmoqchimisiz?')) return;

        try {
            await apiFetch(`/api/courses/${courseId}`, {
                method: 'DELETE'
            });
            loadCourses(); // Reload the courses list
        } catch (error) {
            handleError(error);
        }
    };
</script>
</body>
<?php require '../resources/views/admin-components/footer.php'; ?>
</html>