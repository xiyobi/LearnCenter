<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Video Upload</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<div class="max-w-lg w-full bg-white p-6 rounded-lg shadow-md">
    <h2 class="text-xl font-semibold mb-4">Teacher uchun Video Qo'shish</h2>
    <form id="uploadForm" class="space-y-4">
        <div>
            <label for="title" class="block font-medium">Sarlavha:</label>
            <input type="text" id="title" name="title" required class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-300">
        </div>
        <div>
            <label for="description" class="block font-medium">Tavsif:</label>
            <textarea id="description" name="description" class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-300"></textarea>
        </div>
        <div>
            <label for="video" class="block font-medium">Video yuklash:</label>
            <input type="file" id="video" name="video" accept="video/*" class="w-full px-3 py-2 border rounded-md focus:ring focus:ring-blue-300">
            <p id="fileName" class="mt-2 text-gray-600"></p>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">Yuklash</button>
    </form>
    <p id="message" class="mt-4 text-center text-red-500"></p>
</div>

<script>
    document.getElementById("video").addEventListener("change", function() {
        const file = this.files[0];
        if (file) {
            document.getElementById("fileName").textContent = "Tanlangan fayl: " + file.name;
        }
    });

    document.getElementById("uploadForm").addEventListener("submit", async function(event) {
        event.preventDefault();
        const formData = new FormData(this);

        if (!formData.get("video")) {
            document.getElementById("message").textContent = "Iltimos, video fayl yuklang!";
            return;
        }

        try {
            const response = await fetch("https://api.example.com/upload", {
                method: "POST",
                body: formData,
            });
            document.getElementById("message").textContent = "Video muvaffaqiyatli yuklandi!";
        } catch (error) {
            document.getElementById("message").textContent = "Xatolik yuz berdi, qayta urinib ko'ring!";
        }
    });
</script>
</body>
</html>
