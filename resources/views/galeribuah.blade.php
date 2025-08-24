<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Buah</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-sans leading-normal tracking-normal">
    <nav class="bg-white shadow-lg">
    <div class="max-w-8xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">

            <div>
                <a href="/" class="text-xl font-bold text-violet-400">
                    Galeri Buah
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-4">
                <a href="#home" class="py-2 px-3 text-violet-400 hover:text-violet-800 font-semibold transition-colors duration-200">Home</a>
                <a href="#kategori" class="py-2 px-3 text-violet-400 hover:text-violet-800 font-semibold transition-colors duration-200">Kategori</a>
                <a href="#tentangsaya" class="py-2 px-3 text-violet-400 hover:text-violet-800 font-semibold transition-colors duration-200">Tentang Saya</a>
            </div>
</nav>


<script>
    const button = document.querySelector('#menu-button');
    const menu = document.querySelector('.mobile-menu');

    button.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-violet-400 to-blue-500 text-white py-10 px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold">Halo, Selamat Datang di Galeri Buah-buahan!</h1>
        <p class="mt-4 text-lg">Temukan beragam buah berdasarkan warnanya.</p>
    </section>

    <!-- Category & Fruits Section -->
    <section class="py-10 px-4">
        <h2 class="text-violet-400 text-3xl font-bold text-center mb-6">Pilih Kategori Warna</h2>
        <div class="flex flex-wrap justify-center gap-4 mb-10">
            <a href="#kuning" class="bg-yellow-400 hover:bg-yellow-800 text-white font-bold py-2 px-4 rounded-full transition-colors duration-300">Kuning</a>
            <a href="#merah" class="bg-red-500 hover:bg-red-800 text-white font-bold py-2 px-4 rounded-full transition-colors duration-300">Merah</a>
            <a href="#hijau" class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full transition-colors duration-300">Hijau</a>
            <a href="#ungu" class="bg-purple-500 hover:bg-purple-800 text-white font-bold py-2 px-4 rounded-full transition-colors duration-300">Ungu</a>
        </div>

        <div id="kuning" class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h3 class="text-2xl font-bold mb-4 text-center text-yellow-600">Buah Kuning</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
               
            <div class="group text-center p-4 bg-yellow-50 hover:bg-yellow-100 transition-colors duration-200 
            transition-transform duration-300 hover:scale-105 rounded-lg shadow-md">
             <p class="font-semibold text-yellow-600">Pisang</p>    
            <img src="{{ asset('buah/pisang.jpg') }}" alt="Pisang" class="w-full h-48 object-cover rounded-lg mb-2"> 
            <div class="hidden group-hover:block">
        <p class="text-sm font-regular text-yellow-600 pt-2">
            Pisang berasal dari Asia Tenggara, khususnya dari hutan-hutan Malaysia, Indonesia, dan Filipina, tempat varietas liar pisang masih banyak tumbuh. Budidaya pisang diperkirakan dimulai 7.000 hingga 10.000 tahun yang lalu di Papua Nugini dan Delta Mekong. Dari Asia Tenggara, pisang disebarkan oleh pedagang dan pelaut ke India, Timur Tengah, Afrika, dan kemudian ke Amerika, menjadi tanaman pokok penting di banyak wilayah, terutama setelah varietas tanpa biji dan manis dikembangkan melalui persilangan alami. 
        </p>   
            </div>
            </div>

               <div class="group text-center p-4 bg-yellow-50 hover:bg-yellow-100 transition-colors duration-200 
            transition-transform duration-300 hover:scale-105 rounded-lg shadow-md">
    <p class="font-semibold text-yellow-600">Lemon</p>
    <img src="{{ asset('buah/lemon.jpg') }}" alt="Lemon" class="w-full h-48 object-cover rounded-lg mb-2">
    <div class="hidden group-hover:block">
        <p class="text-sm font-regular text-yellow-600 pt-2">
            Sejarah lemon dimulai di Asia Tenggara (terutama India, Tiongkok, dan Burma),
            lalu menyebar ke Timur Tengah dan akhirnya ke Eropa melalui bangsa Arab pada abad ke-2 Masehi.
            Christopher Columbus membawa biji lemon ke Amerika pada 1493, dan budidaya skala besar dimulai di Genoa
            pada abad ke-15 dan kemudian di Amerika Serikat pada abad ke-19. Dari simbol status dan tanaman hias, lemon kini menjadi komoditas pertanian global dengan beragam kegunaan kuliner dan obat-obatan.
        </p>
    </div>
    
</div>

   <div class="group text-center p-4 bg-yellow-50 hover:bg-yellow-100 transition-colors duration-200 
            transition-transform duration-300 hover:scale-105 rounded-lg shadow-md">
    <p class="font-semibold text-yellow-600">Lemon</p>
    <img src="{{ asset('buah/lemon.jpg') }}" alt="Lemon" class="w-full h-48 object-cover rounded-lg mb-2">
    <div class="hidden group-hover:block">
        <p class="text-sm font-regular text-yellow-600 pt-2">
            Sejarah lemon dimulai di Asia Tenggara (terutama India, Tiongkok, dan Burma),
            lalu menyebar ke Timur Tengah dan akhirnya ke Eropa melalui bangsa Arab pada abad ke-2 Masehi.
            Christopher Columbus membawa biji lemon ke Amerika pada 1493, dan budidaya skala besar dimulai di Genoa
            pada abad ke-15 dan kemudian di Amerika Serikat pada abad ke-19. Dari simbol status dan tanaman hias, lemon kini menjadi komoditas pertanian global dengan beragam kegunaan kuliner dan obat-obatan.
        </p>
    </div>
    
</div>

   <div class="group text-center p-4 bg-yellow-50 hover:bg-yellow-100 transition-colors duration-200 
            transition-transform duration-300 hover:scale-105 rounded-lg shadow-md">
    <p class="font-semibold text-yellow-600">Lemon</p>
    <img src="{{ asset('buah/lemon.jpg') }}" alt="Lemon" class="w-full h-48 object-cover rounded-lg mb-2">
    <div class="hidden group-hover:block">
        <p class="text-sm font-regular text-yellow-600 pt-2">
            Sejarah lemon dimulai di Asia Tenggara (terutama India, Tiongkok, dan Burma),
            lalu menyebar ke Timur Tengah dan akhirnya ke Eropa melalui bangsa Arab pada abad ke-2 Masehi.
            Christopher Columbus membawa biji lemon ke Amerika pada 1493, dan budidaya skala besar dimulai di Genoa
            pada abad ke-15 dan kemudian di Amerika Serikat pada abad ke-19. Dari simbol status dan tanaman hias, lemon kini menjadi komoditas pertanian global dengan beragam kegunaan kuliner dan obat-obatan.
        </p>
    </div>
    
</div>
                <!-- Tambahkan buah kuning lainnya di sini -->
            </div>
        </div>

        <div id="merah" class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h3 class="text-2xl font-bold mb-4 text-center text-red-600">Buah Merah</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="text-center p-4 bg-red-50 rounded-lg">
                    <img src="https://via.placeholder.com/150/ef4444/fff?text=Apel" alt="Apel" class="w-full h-auto rounded-lg mb-2">
                    <p class="font-semibold">Apel</p>
                </div>
                <div class="text-center p-4 bg-red-50 rounded-lg">
                    <img src="https://via.placeholder.com/150/ef4444/fff?text=Stroberi" alt="Stroberi" class="w-full h-auto rounded-lg mb-2">
                    <p class="font-semibold">Stroberi</p>
                </div>
                <!-- Tambahkan buah merah lainnya di sini -->
            </div>
        </div>

        <div id="hijau" class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h3 class="text-2xl font-bold mb-4 text-center text-green-600">Buah Hijau</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="text-center p-4 bg-green-50 rounded-lg">
                    <img src="https://via.placeholder.com/150/22c55e/fff?text=Apel+Hijau" alt="Apel Hijau" class="w-full h-auto rounded-lg mb-2">
                    <p class="font-semibold">Apel Hijau</p>
                </div>
                <div class="text-center p-4 bg-green-50 rounded-lg">
                    <img src="https://via.placeholder.com/150/22c55e/fff?text=Kiwi" alt="Kiwi" class="w-full h-auto rounded-lg mb-2">
                    <p class="font-semibold">Kiwi</p>
                </div>
            </div>
        </div>

        <div id="ungu" class="bg-white rounded-lg shadow-lg p-6 mb-8">
            <h3 class="text-2xl font-bold mb-4 text-center text-purple-600">Buah Ungu</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="text-center p-4 bg-purple-50 rounded-lg">
                    <img src="https://via.placeholder.com/150/a855f7/fff?text=Anggur" alt="Anggur" class="w-full h-auto rounded-lg mb-2">
                    <p class="font-semibold">Anggur</p>
                </div>
                <div class="text-center p-4 bg-purple-50 rounded-lg">
                    <img src="https://via.placeholder.com/150/a855f7/fff?text=Mangga+Ungu" alt="Mangga Ungu" class="w-full h-auto rounded-lg mb-2">
                    <p class="font-semibold">Mangga Ungu</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Me Section -->
    <section class="bg-gradient-to-r from-violet-400 to-blue-500 text-white py-10 px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">Tentang Saya</h2>
        <p class="text-lg">Dibuat oleh Intan Arini</p>
        <div class="flex justify-center gap-4 mt-4">
            <a href="#" class="text-white hover:text-blue-400">
                <!-- Masukkan icon sosmed di sini, misal: -->
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-2-8c.553 0 1 .448 1 1s-.447 1-1 1-1-.448-1-1 .447-1 1-1zm13 8h-2v-4c0-.882-.206-1.579-1.299-1.579-1.096 0-1.42.812-1.42 1.579v4h-2v-6h2v.975c.348-.621 1.055-1.127 2.129-1.127 2.052 0 3.12 1.412 3.12 3.864v3.288z"></path></svg>
            </a>
            <a href="#" class="text-white hover:text-blue-400">
                <!-- Icon lainnya -->
            </a>
        </div>
    </section>

</body>
</html>