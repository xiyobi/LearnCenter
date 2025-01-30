<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Vazifa Yuklash</title>
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-4xl mx-auto bg-white p-6 shadow-md rounded-lg">
    <h2 class="text-2xl font-bold mb-4">📌 Vazifa Yuklash</h2>

    <!-- O'qituvchi vazifa yuklaydi -->
    <div class="mb-6">
        <label class="block font-semibold">Vazifa nomi:</label>
        <input type="text" class="w-full p-2 border rounded mt-1" placeholder="Masalan, Matematika 5-mashq">
    </div>
    <div class="mb-6">
        <label class="block font-semibold">Vazifa tavsifi:</label>
        <textarea class="w-full p-2 border rounded mt-1" rows="3" placeholder="Vazifa tavsifini kiriting..."></textarea>
    </div>
    <div class="mb-6">
        <label class="block font-semibold">Muddati:</label>
        <input type="date" class="w-full p-2 border rounded mt-1">
    </div>
    <button class="bg-blue-500 text-white px-4 py-2 rounded">Vazifani joylash</button>
</div>

<!-- O'quvchi vazifa yuklaydi -->
<div class="max-w-4xl mx-auto bg-white p-6 shadow-md rounded-lg mt-8">
    <h2 class="text-2xl font-bold mb-4">📂 Vazifani Yuklash</h2>
    <div class="mb-6">
        <label class="block font-semibold">Fayl yuklash (PDF, DOCX, JPG):</label>
        <input type="file" class="w-full p-2 border rounded mt-1">
    </div>
    <div class="mb-6">
        <label class="block font-semibold">Izoh qoldirish:</label>
        <textarea class="w-full p-2 border rounded mt-1" rows="3" placeholder="Izoh yozing..."></textarea>
    </div>
    <button class="bg-green-500 text-white px-4 py-2 rounded">Yuborish</button>
</div>
</body>
</html>
