<aside class="bg-white w-64 min-h-screen flex flex-col shadow-lg transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in fixed md:static z-30" id="sidebar">
    <div class="p-4 border-b flex items-center justify-between">
        <h2 class="text-2xl font-bold text-gray-800">My Teach</h2>
        <div>
            <button class="md:hidden text-gray-600" onclick="document.getElementById('sidebar').classList.toggle('-translate-x-full')">
                <i class="fas fa-close text-xl"></i>
            </button>
        </div>
    </div>
    <nav class="flex-grow p-4" id="sideBar"></nav>
</aside>
<script>
    let sideBarItem = [
        {
            'name': 'Courses',
            'uri': '/admin/dashboard/courses',
            'icon': 'fas fa-book mr-2'
        },
        {
            'name': 'Students',
            'uri': '/admin/dashboard/students',
            'icon': 'fas fa-users mr-2'
        },
        {
            'name': 'Videos',
            'uri': '/admin/dashboard/videos',
            'icon': 'fas fa-video mr-2'
        },
        {
            'name': 'Settings',
            'uri': '/admin/dashboard/settings',
            'icon': 'fas fa-cog mr-2'

        },
        {
            'name': 'Log out',
            'uri': '/admin/dashboard/logout',
            'icon': 'fas fa-sign-out-alt mr-2'
        }


    ];
    let sideBar = document.getElementById('sideBar');
    sideBarItem.forEach(item => {
        let isActive = window.location.pathname === item.uri ? 'bg-gray-100' : 'hover:bg-gray-100';
        sideBar.innerHTML += `<a href="${item.uri}" class="block p-3 mb-2 text-gray-600 ${isActive} rounded-lg">
                <i class="${item.icon}"></i> ${item.name}</a>`;

    });

</script>