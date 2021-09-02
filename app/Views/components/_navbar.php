<header id="navbar" x-transition class="text-gray-600 body-font sticky top-0 z-50 bg-blue-50 " x-data="{ open: true }">
  <div class="container mx-auto flex flex-shrink w-full  p-5 flex-col md:flex-row items-left md:items-center">
    <a class="flex title-font font-medium items-center place-content-between text-gray-900 mb-4 md:mb-0">
      <img src="<?= base_url() ?>/assets/img/bj.jpg" alt="logo" class="h-12 w-12 rounded-full">
      <span class="ml-3 text-2xl"><span class="text-red-600 font-bold">Wajah</span>  plastik &trade;</span>
      <button @click="open= !open " class="  md:hidden "><i class="fas fa-bars p-2 m-1"></i>
      </button>
    </a>



    <button @click="open= !open " class="  hidden md:flex "><i class="fas fa-bars p-2 m-1"></i>
    </button>
    <nav x-show="open" x-transition.duration.1000ms x-transition.scale.80 x-transition.delay.50ms @click.away="open=false" id="menu" class=" transition-all md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-col md:flex-row flex-wrap items-left md:items-center text-base justify-center">

      <a href='/' target='_self' class=" transition-all mr-5 hover:text-red-600 hover:underline">Home</a>
      <a href='/#about' class=" transition-all mr-5 hover:text-red-600 hover:underline">About us</a>
      <a href='/gallery' class=" transition-all mr-5 hover:text-red-600 hover:underline">Gallery</a>
      <a href='/#news' class=" transition-all mr-5 hover:text-red-600 hover:underline">News</a>
      <a class=" transition-all mr-5 hover:text-red-600 hover:underline">Achievement</a>
      <a href='/youtube' class="transition-all mr-5 hover:text-red-600 hover:underline">Youtube</a>
    </nav>
  </div>

</header>
<script>
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-500px";
    }
    prevScrollpos = currentScrollPos;
  }
</script>