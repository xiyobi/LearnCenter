<?php require '../resources/views/components/header.php'; ?>
<script src=" /js/dashboard/getUserInfo.js"></script>
<body class="bg-gray-100">
<div class="min-h-screen flex">
    <!-- Sidebar -->
    <?php require '../resources/views/teacher-components/sidebar.php'; ?>
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

        <div class="p-6 max-w-4xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">O‘quvchilar Ro‘yxati</h1>
        <input
                type="text"
                placeholder="Qidirish..."
                class="mb-4 w-full p-2 border border-gray-300 rounded-md"
                onkeyup="searchStudents()"
                id="searchBox"
        />
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="w-full border-collapse" id="studentsTable">
                <thead class="bg-gray-200">
                <tr>
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Ism</th>
                    <th class="p-3 text-left">Email</th>
                    <th class="p-3 text-left">Telefon</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-3">1</td>
                    <td class="p-3">Ali Hasanov</td>
                    <td class="p-3">ali@example.com</td>
                    <td class="p-3">+998901234567</td>
                </tr>
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-3">2</td>
                    <td class="p-3">Zarina Karimova</td>
                    <td class="p-3">zarina@example.com</td>
                    <td class="p-3">+998931112233</td>
                </tr>
                <tr class="border-b hover:bg-gray-100">
                    <td class="p-3">3</td>
                    <td class="p-3">Javohir Rahimov</td>
                    <td class="p-3">javohir@example.com</td>
                    <td class="p-3">+998977776655</td>
                </tr>
                </tbody>
            </table>
        </div>
        <script>
            function searchStudents() {
                let input = document.getElementById("searchBox").value.toLowerCase();
                let rows = document.querySelectorAll("#studentsTable tbody tr");
                rows.forEach(row => {
                    let name = row.cells[1].textContent.toLowerCase();
                    row.style.display = name.includes(input) ? "" : "none";
                });
            }
        </script>
        </div>

<?php require '../resources/views/components/footer.php'; ?>