<?php require '../resources/views/components/header.php'; ?>
<script src=" /js/dashboard/getUserInfo.js"></script>
<body class="bg-gray-100">
<div class="min-h-screen flex">
    <!-- Sidebar -->
    <?php require '../resources/views/components/sidebar.php'; ?>
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
        <div class="flex-1 p-10">
            <h1 class="text-3xl font-bold mb-6">Assignments</h1>
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-xl font-semibold mb-4">Your Assignments</h2>
                <button class="mb-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">+ Add Assignment</button>
                <ul class="space-y-3">
                    <li class="flex justify-between items-center p-3 border rounded-lg bg-gray-50">
                        <span>Assignment 1</span>
                        <span class="text-sm text-gray-600">Due: Jan 31, 2025</span>
                        <span class="text-green-600 font-medium">Completed</span>
                        <a href="#" class="text-blue-500 font-medium">Download</a>
                        <a href="/user/dashboard/homework" class="px-3 py-1 bg-blue-500 text-white rounded">Submit</a>
                    </li>
                    <li class="flex justify-between items-center p-3 border rounded-lg bg-gray-50">
                        <span>Assignment 2</span>
                        <span class="text-sm text-gray-600">Due: Feb 5, 2025</span>
                        <span class="text-red-600 font-medium">Pending</span>
                        <a href="#" class="text-blue-500 font-medium">Download</a>
                        <a href="/user/dashboard/homework" class="px-3 py-1 bg-blue-500 text-white rounded">Submit</a>
                    </li>
                    <li class="flex justify-between items-center p-3 border rounded-lg bg-gray-50">
                        <span>Assignment 3</span>
                        <span class="text-sm text-gray-600">Due: Feb 10, 2025</span>
                        <span class="text-red-600 font-medium">Pending</span>
                        <a href="#" class="text-blue-500 font-medium">Download</a>
                        <a href="/user/dashboard/homework" class="px-3 py-1 bg-blue-500 text-white rounded">Submit</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

