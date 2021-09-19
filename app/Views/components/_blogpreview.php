<section class="text-gray-600 body-font" id="news">
  <div class="container md:px-5 py-10 px-5 mx-auto">
    <div class="flex flex-wrap w-full mb-10">
      <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Berita dan Publikasi</h1>
        <div class="h-1 w-20 bg-red-600 rounded"></div>
      </div>
      <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Wajah Plastik Sudah Diliput dan diBeritakan oleh Media, Baik Media Online maupun Offline, Berikut Beberapa Berita dan Publikasi yang telah diperoleh Wajahplastik&trade;</p>
    </div>
    <div class="flex flex-col md:flex-row ">
      <?php foreach ($news as $row) :?>
      <div class="w-full p-2 xl:w-1/3 md:p-4">
        <div class="bg-gray-100 p-3 rounded-lg hover:scale-110 transition delay-100 hover:bg-gray-200 hover:shadow-lg">
          <img class="h-40 rounded w-full object-cover object-center mb-6" src="<?=base_url()?>/assets/images/<?=$row['news_image']?>" alt="content">
          <h3 class="tracking-widest text-red-600 text-xs font-medium title-font"><?=$row['news_category']?></h3>
          <a href="<?=base_url()?>/News/artikel/<?=$row['news_slug']?>"class="text-lg text-gray-900 font-medium title-font mb-4"><?=$row['news_title']?></a>
          <p class="l text-justify leading-relaxed text-xxs"><?=$row['news_description']?> <a class="font-bold underlined text-red-600" href="<?=base_url()?>/News/artikel/<?=$row['news_slug']?>"> <br>Baca Selengkapnya>>></a></p>
        </div>
        
      </div>
      <?php endforeach?>
    </div>
  </div>
</section>