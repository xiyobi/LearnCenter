<?php require '../resources/views/components/header.php'; ?>
<script src=" /js/dashboard/getUserInfo.js"></script>


<div class="bg-gray-100">
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <?php include '../resources/views/components/sidebar.php'; ?>
        <!-- Content -->
        <div class="ml-64 flex-1">
            <!-- Top Navigation -->
            <div class="bg-white h-16 flex items-center justify-between px-6 shadow">
                <h1 class="text-xl font-bold">Video Darslar</h1>
                <div class="flex items-center">
                    <div class="relative mr-4">
                        <input type="text" placeholder="Qidirish..." class="pl-10 pr-4 py-2 border rounded-lg">
                        <svg class="w-5 h-5 text-gray-500 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <div class="flex items-center">
                        <span id="username" class="ml-2">Foydalanuvchi</span>
                    </div>
                </div>
            </div>

            <!-- Video Content -->
            <div class="p-6">
                <!-- Course Progress -->
                <div class="bg-white rounded-lg shadow mb-6 p-6">
                    <h2 class="text-lg font-bold mb-4">Kurs jarayoni</h2>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-blue-600 h-4 rounded-full" style="width: 65%"></div>
                    </div>
                    <div class="flex justify-between mt-2 text-sm text-gray-600">
                        <span>Ko'rilgan: 13 ta video</span>
                        <span>Umumiy: 20 ta video</span>
                    </div>
                </div>

                <!-- Video Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Video Card 1 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="relative">
                            <img src="https://via.placeholder.com/400x225" alt="Video thumbnail" class="w-full">
                            <span class="absolute bottom-2 right-2 bg-black bg-opacity-75 text-white px-2 py-1 rounded text-sm">15:30</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold mb-2">1-dars: PHP asoslari</h3>
                            <p class="text-gray-600 text-sm mb-4">PHP dasturlash tiliga kirish va o'rnatish</p>
                            <div class="flex items-center justify-between">
                                <span class="text-green-600 text-sm">Ko'rilgan ✓</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                    Davom etish
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card 2 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="relative">
                            <img src="https://via.placeholder.com/400x225" alt="Video thumbnail" class="w-full">
                            <span class="absolute bottom-2 right-2 bg-black bg-opacity-75 text-white px-2 py-1 rounded text-sm">20:45</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold mb-2">2-dars: O'zgaruvchilar</h3>
                            <p class="text-gray-600 text-sm mb-4">PHP da o'zgaruvchilar bilan ishlash</p>
                            <div class="flex items-center justify-between">
                                <span class="text-yellow-600 text-sm">Davom etmoqda...</span>
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                                    Davom etish
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Video Card 3 -->
                    <div class="bg-white rounded-lg shadow overflow-hidden">
                        <div class="relative">
                            <img src="https://via.placeholder.com/400x225" alt="Video thumbnail" class="w-full">
                            <span class="absolute bottom-2 right-2 bg-black bg-opacity-75 text-white px-2 py-1 rounded text-sm">18:15</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold mb-2">3-dars: Massivlar</h3>
                            <p class="text-gray-600 text-sm mb-4">PHP da massivlar bilan ishlash</p>
                            <div class="flex items-center justify-between">
                                <span class="text-gray-600 text-sm">Boshlangan emas</span>
                                <button class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300">
                                    Boshlash
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="flex justify-center mt-8">
                    <nav class="flex items-center space-x-2">
                        <button class="px-3 py-2 rounded hover:bg-gray-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button class="px-3 py-2 bg-blue-600 text-white rounded">1</button>
                        <button class="px-3 py-2 hover:bg-gray-100 rounded">2</button>
                        <button class="px-3 py-2 hover:bg-gray-100 rounded">3</button>
                        <button class="px-3 py-2 rounded hover:bg-gray-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<script>
    async function createQuiz() {
        event.preventDefault();
        let form = document.getElementById("quizForm"),
            formData = new FormData(form);
        const { default: apiFetch } = await import('/js/utils/allFetch.js');
        await apiFetch('/quizzes', {
            method: "Post", body: formData
        }).then(data =>{
            console.log(data);
        })
            .catch((error)=>{
                console.error(error.data.errors);
                document.getElementById('error').innerHTML = "";
                Object.keys(error.data.errors).forEach(err => {
                    document.getElementById('error').innerHTML += `
                <p class="text-red-500 mt-1">${error.data.errors[err]}</p>`;

                })
            });
    }

</script>
<?php require '../resources/views/components/footer.php'; ?>
