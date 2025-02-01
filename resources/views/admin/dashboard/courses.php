<?php require '../resources/views/admin-components/header.php'; ?>
<script src=" /js/dashboard/getUserInfo.js"></script>
<body class="bg-gray-100">
<div class="min-h-screen flex">
    <!-- Sidebar -->
    <?php require '../resources/views/admin-components/sidebar.php'; ?>
    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
        <!-- Top Navigation -->
        <header class="bg-white shadow-sm">
            <div class="h-16 flex items-center justify-between px-4">
                <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')">
                    <i class="fas fa-bars text-xl"></i>
                </button>
                <div class="flex items-center space-x-4">

                    <div class="flex items-center space-x-2">
                        <img src="https://images.newscientist.com/wp-content/uploads/2024/05/07141222/SEI_203029555.jpg" alt="Profile" class="w-10 h-10 rounded-full">
                        <span class="text-gray-700 font-medium" id="username"></span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Area -->
        <main class="flex-1 p-4 md:p-6">
            <!-- Quick Actions -->
            <div class="mb-8">
                <div class="flex flex-wrap gap-4">
                    <a class="flex-1 min-w-[200px] bg-blue-600 text-white p-4 rounded-lg shadow hover:bg-blue-700 transition">
                        <i class="fas fa-book mb-2 text-2xl"></i>
                        <h3 class="font-semibold">My Teach</h3>
                        <h1 class="text-sm opacity-90">Start creating a course</h1>
                        <h1 class="text-gray-900 font-medium" id="createdAt"></h1>
                    </a>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-500">Wallet</h3>
                        <i class="fas fa-book text-blue-500"></i>
                    </div>
                    <p class="text-2xl font-bold mt-2">UZS</p>
                    <p class="text-sm text-green-500 mt-2" id="wallet">Sum</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-500">Teacher has</h3>
                        <i class="fas fa-check-circle text-green-500"></i>
                    </div>
                    <p class="text-2xl font-bold mt-2">Teacher name</p>
                    <p class="text-sm text-green-500 mt-2" id="teacher">teacher</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-500">Do homework</h3>
                        <i class="fas fa-star text-yellow-500"></i>
                    </div>
                    <p class="text-2xl font-bold mt-2">Fan nomi</p>
                    <p class="text-sm text-green-500 mt-2">0</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <div class="flex items-center justify-between">
                        <h3 class="text-gray-500">Update Time</h3>
                        <i class="fas fa-clock text-purple-500"></i>
                    </div>
                    <p class="text-2xl font-bold mt-2">Tizimga kirilgan vaqti</p>
                    <p class="text-sm text-green-500 mt-2" id="updateAt">updateAt</p>
                </div>
            </div>

            <!-- Recent Activity -->
            <div class="bg-white rounded-lg shadow p-4 mb-8">
                <h2 class="text-xl font-semibold mb-4">Kurs kitoblari</h2>
                <div class="space-y-4">
                    <div class="flex items-center gap-4 pb-4 border-b">
                        <div class="bg-blue-100 p-2 rounded-lg">
                            <i class="fas fa-plus text-blue-500"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-medium">Kurs kitob</h4>
                            <p class="text-sm text-gray-500">Mathematics book- Advanced Level</p>
                        </div>
                        <span class="text-sm text-gray-500">yuklangan vaqti</span>
                    </div>
                    <div class="flex items-center gap-4 pb-4 border-b">
                        <div class="bg-green-100 p-2 rounded-lg">
                            <i class="fas fa-check text-green-500"></i>
                        </div>
                        <div class="flex-1">
                            <h4 class="font-medium">Qo'shimcha kitob</h4>
                            <p class="text-sm text-gray-500">kitob nomi</p>
                        </div>
                        <span class="text-sm text-gray-500">yuklangan vaqti</span>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<?php require '../resources/admin-components/footer.php'; ?>
