<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond&family=Poppins&display=swap');
        * {
            font-family: 'EB Garamond',
                serif;
            font-family: 'Poppins',
                sans-serif;
        }
    </style>

    <title><?= $judul ?></title>
</head>

<body class="bg-gray-50">

    <div class="side-nav inline h-full bg-gray-100 w-full md:w-60 shadow-lg   absolute text-left">


        <!-- Bagian Menu -->

        <div x-data="{ open: true }"class="flex-grow md:block pb-4 md:pb-0 text-md h-screen">
            <div href="/dashboard" class="flex flex-row flex-growtitle-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="<?= base_url("/assets/img/bj.jpg") ?>" alt="logo" class="h-12 w-12 rounded-full">
                <div class="p-1 text-xl"><h1><span class="text-red-600 font-bold">Wajah</span>Plastik&trade;</h1></div>
                <button @click="open= !open " ><i class="fas fa-bars p-2 m-1"></i></button>
    </div>
            <hr>
            <div div x-show="open" >
            <div >
                <h1 class="pb-4 text-left p-2"><i class="fas fa-user-circle p-2"></i>Hello! <?= $user ?></h1>
            </div>
            <div class="hover:bg-black rounded-l-full p-3 shadow-sm   hover:text-white">
                <i class="fas fa-rss-square"></i><a class="side-menu p-2 " href="/dashboard/blogList">Berita dan Publikasi</a>
            </div>
            <div class="hover:bg-black  rounded-l-full p-3 shadow-sm  hover:text-white">
                <i class="fas fa-images"></i><a class="side-menu p-2  " href="/dashboard/galleryList">Gallery</a>
            </div>
            <div class="hover:bg-black  rounded-l-full p-3 shadow-sm  hover:text-white">
                <i class="fab fa-youtube"></i><a class="side-menu p-2  " href="/dashboard/youtubeAdmin">Youtube</a>
            </div>
            <div class="hover:bg-black rounded-l-full  p-3  shadow-sm hover:text-white">
                <i class="fas fa-trophy"></i><a class="side-menu p-2  " href="/">Achievement</a>
            </div>
            <hr>
            <div class="hover:bg-red-600 rounded-l-full  p-3  shadow-sm hover:text-white">
                <i class="fas fa-sign-out-alt"></i><a class="side-menu p-2 " href="/login/logout">Log Out</a>
            </div>
            </div>
        </div>
    </div>
    <div class="ml-60 h-screen bg-gray-50 px-5 pt-9 ">
        <div class="bg-blue-100 p-1 rounded-lg">
            <h1 class="text-lg p-1"><a href="/dashboard">Dashboard</a><?= $breadcrumb ?> </h1>
        </div>
        
        <hr>
        <?= $this->renderSection('content') ?>


    </div>




</body>

</html>