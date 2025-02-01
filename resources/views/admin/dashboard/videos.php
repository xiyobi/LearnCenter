<?php require '../resources/views/admin-components/header.php'; ?>
<script src="/js/dashboard/getUserInfo.js"></script>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Darslar</title>
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <?php include '../resources/views/admin-components/sidebar.php'; ?>

    <!-- Main Content - Fixed typo in div -->
    <div class="ml-64 flex-1 p-8">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-2xl font-bold">Video Darslar</h1>
            <button
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 flex items-center"
                    onclick="openAddVideoModal()"
            >
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Yangi Video Qo'shish
            </button>
        </div>

        <!-- Search and Filter -->
        <div class="bg-white p-4 rounded-lg shadow mb-6">
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-1">
                    <input
                            type="text"
                            id="searchInput"
                            placeholder="Videoni qidirish..."
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
                <select
                        id="courseFilter"
                        class="px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
                    <option value="">Barcha kurslar</option>
                    <option value="php">PHP</option>
                    <option value="javascript">JavaScript</option>
                    <option value="python">Python</option>
                </select>
            </div>
        </div>

        <!-- Error Display -->
        <div id="error" class="mb-4"></div>

        <!-- Video Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="videoGrid">
            <!-- Video Card Template -->
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <div class="relative pb-[56.25%] bg-gray-100">
                    <img src="/api/placeholder/400/225" alt="Video thumbnail" class="absolute h-full w-full object-cover">
                    <span class="absolute bottom-2 right-2 bg-black bg-opacity-75 text-white px-2 py-1 rounded text-sm">15:30</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold mb-2">PHP asoslari: Kirish</h3>
                    <div class="text-sm text-gray-500 mb-2">234 ko'rilgan • 2 kun oldin</div>
                    <div class="flex justify-between items-center">
                        <span class="text-sm text-blue-600">PHP kursi</span>
                        <div class="flex space-x-2">
                            <button
                                    class="p-2 hover:bg-gray-100 rounded-full"
                                    aria-label="Tahrirlash"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </button>
                            <button
                                    class="p-2 hover:bg-gray-100 rounded-full text-red-500"
                                    aria-label="O'chirish"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
            <nav class="flex flex-wrap gap-2">
                <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">Oldingi</a>
                <a href="#" class="px-3 py-2 rounded-lg bg-blue-600 text-white">1</a>
                <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">2</a>
                <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">3</a>
                <a href="#" class="px-3 py-2 rounded-lg bg-gray-200 text-gray-700 hover:bg-gray-300">Keyingi</a>
            </nav>
        </div>
    </div>
</div>

<script type="module">
    import { default as apiFetch } from '/js/utils/allFetch.js';

    // Initialize search and filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const courseFilter = document.getElementById('courseFilter');

        if (searchInput) {
            searchInput.addEventListener('input', debounce(handleSearch, 300));
        }
        if (courseFilter) {
            courseFilter.addEventListener('change', handleFilter);
        }
    });

    // Debounce function for search
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

    // Handle search
    async function handleSearch(event) {
        try {
            const searchTerm = event.target.value;
            // Implement search logic here
        } catch (error) {
            handleError(error);
        }
    }

    // Handle filter
    async function handleFilter(event) {
        try {
            const filterValue = event.target.value;
            // Implement filter logic here
        } catch (error) {
            handleError(error);
        }
    }

    // Create quiz function
    window.createQuiz = async function(event) {
        event.preventDefault();
        const form = document.getElementById("quizForm");
        if (!form) return;

        try {
            const formData = new FormData(form);
            const response = await apiFetch('/quizzes', {
                method: "POST",
                body: formData
            });
            console.log(response);
            // Handle successful response
        } catch (error) {
            handleError(error);
        }
    };

    // Error handling
    function handleError(error) {
        const errorDiv = document.getElementById('error');
        if (!errorDiv) return;

        errorDiv.innerHTML = '';
        if (error.data?.errors) {
            Object.values(error.data.errors).forEach(errorMessage => {
                errorDiv.innerHTML += `<p class="text-red-500 mt-1">${errorMessage}</p>`;
            });
        } else {
            errorDiv.innerHTML = `<p class="text-red-500 mt-1">Xatolik yuz berdi. Qaytadan urinib ko'ring.</p>`;
        }
    }
</script>
</body>
<?php require '../resources/views/admin-components/footer.php'; ?>
</html>