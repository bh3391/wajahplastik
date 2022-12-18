<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link href="<?= base_url() ?>/assets/css/styles.css" rel="stylesheet">
    <link href="<?= base_url() ?>/favicon.ico" rel="icon" type="image/gif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script defer src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="<?= base_url() ?>/assets/js/main.js" defer></script>

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

<body class="bg-gray-800 p-2">
    <div class="container w-full " x-data="{ open: true }">
        <div href="/dashboard" class="flex flex-row flex-grow title-font font-medium items-center text-white bg-gray-800 mb-4 md:mb-0">
            <img src="<?= base_url("/assets/img/bj.jpg") ?>" alt="logo" class="h-12 w-12 rounded-full">
            <div class="p-1 text-xl">
                <h1><span class="text-red-600 font-bold">Wajah</span>Plastik&trade;</h1>
            </div>
            <button @click="open= !open "><i class="fas fa-bars p-2 m-1"></i></button>
        </div>
        <div class=" side-nav  mb-0 p-5   space-between flex flex-row  w-full shadow-lg   text-left">


            <!-- Bagian Menu -->

            <div data-aos="fade-right" x-transition x-show="open" class="   border-r-2  delay-100 border-red-600  relative w-1/5 mr-5 md:block pb-4 md:pb-0 text-md  bg-gray-800 text-white ">

                <hr>
                <div  >
                    <div>
                        <h1 class="pb-4 text-left p-1"><i class="fas fa-user-circle p-2"></i> <?= $user ?></h1>
                    </div>
                    <div class="hover:bg-black  p-3 shadow-sm   hover:text-white">
                        <i class="fas fa-home"></i><a class="side-menu p-2 " href="/dashboard">Dashboard</a>
                    </div>
                    <div class="hover:bg-black  p-3 shadow-sm   hover:text-white">
                        <i class="fas fa-rss-square"></i><a class="side-menu p-2 " href="/dashboard/blogList">Blog</a>
                    </div>
                    <div class="hover:bg-black   p-3 shadow-sm  hover:text-white">
                        <i class="fas fa-images"></i><a class="side-menu p-2  " href="/dashboard/galleryList">Gallery</a>
                    </div>
                    <div class="hover:bg-black   p-3 shadow-sm  hover:text-white">
                        <i class="fab fa-youtube"></i><a class="side-menu p-2  " href="/dashboard/youtubeAdmin">Youtube</a>
                    </div>
                    <!-- <div class="hover:bg-black rounded-l-full  p-3  shadow-sm hover:text-white">
                        <i class="fas fa-trophy"></i><a class="side-menu p-2  " href="/">Achievement</a>
                    </div> -->
                    <hr>
                    <div class="hover:bg-red-600  p-3  shadow-sm hover:text-white">
                        <i class="fas fa-sign-out-alt"></i><a class="side-menu p-2 " href="/login/logout">Log Out</a>
                    </div>
                </div>
            </div>

            <div x-transition class=" flex-grow h-screen w-auto  rounded-lg bg-gray-50   items-center p-5  m-1 relative ">
                <div class="bg-blue-100 p-1 rounded-lg">
                    <h1 class="text-lg p-1"><a href="/dashboard">Dashboard</a><?= $breadcrumb ?> </h1>
                </div>

                <hr>
                <div class="static  ">
                    <?= $this->renderSection('content') ?>
                </div>


            </div>
        </div>
    </div>



    <script  src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>


</html>