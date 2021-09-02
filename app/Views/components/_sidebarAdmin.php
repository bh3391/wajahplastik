<div class="flex-grow md:block pb-4 md:pb-0 text-md ">

        <a class="flex title-font font-medium items-center text-gray-900 mb-4  p-2 md:mb-0">
            <img src="assets/img/bj.jpg" alt="logo" class="h-12 w-12 rounded-full">
            <span class="ml-3 text-xl">Wajahplastik</span>
        </a>
        <hr>
        <div>
            <h1 class="pb-4 text-left p-2"><i class="fas fa-user-circle p-2"></i>Hello! <?= $user ?></h1>
        </div>
        <div class="hover:bg-black rounded-l-full p-3 shadow-sm   hover:text-white">
            <i class="fas fa-rss-square"></i><a class="side-menu p-2 " href="/dashboard/blogList">Berita dan Publikasi</a>
        </div>
        <div class="hover:bg-black  rounded-l-full p-3 shadow-sm  hover:text-white">
            <i class="fas fa-images"></i><a class="side-menu p-2  " href="/">Gallery</a>
        </div>
        <div class="hover:bg-black  rounded-l-full p-3 shadow-sm  hover:text-white">
            <i class="fab fa-youtube"></i><a class="side-menu p-2  " href="/">Youtube</a>
        </div>
        <div class="hover:bg-black rounded-l-full  p-3  shadow-sm hover:text-white">
            <i class="fas fa-trophy"></i><a class="side-menu p-2  " href="/">Achievement</a>
        </div>
        <hr>
        <div class="hover:bg-red-600 rounded-l-full  p-3  shadow-sm hover:text-white">
            <i class="fas fa-sign-out-alt"></i><a class="side-menu p-2 " href="/login/logout">Log Out</a>
        </div>
    </div>