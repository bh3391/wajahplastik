<div class="container p-5 p-t-10 mx-auto">
  <div data-aos="fade-left" data-aos-duration="950" data-aos-delay="50" class="flex flex-col text-center w-full mb-20">
    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Karya Tematik <span class="text-red-600 font-bold">Wajah</span> Plastik &trade;</h1>
    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Berikut adalah karya tematik <span class="text-red-600 font-bold">Wajah</span> Plastik &trade;. <br>Karya tematik memiliki tema dan pesan yang berbeda disetiap karyanya.</p>
  </div>
  

  <div class=" px-4">
    <div  class="flex flex-wrap mx-4 overflow-auto gap-4">
      <?php foreach ($tematik as $t) : ?>
        <div data-aos="flip-left" data-aos-duration="950" data-aos-delay="50"class="duration-1000 transition-colors hover:text-white p-2 w-full md:w-1/3 bg-gray-50 rounded-md border  delay-100 hover:bg-red-600 hover:shadow-lg">
          <img loading="lazy" src="/assets/images/<?= $t['gallery_image'] ?>" alt="<?= $t['gallery_image'] ?>" class="rounded-md">
          <h1 class="text-xl p-3 text-center  font-bold uppercase duration-1000 transition-colors"><?=$t['gallery_judul']?></h1>
          <span class="text-center font-bold underline"><a href="<?=base_url()?>/gallery/details/<?=$t['gallery_slug']?>"><i class="p-1 far fa-eye"></i>Lihat Details >>></a></span>
          
        </div>
        <?php endforeach; ?>
      
    </div>
  </div>
</div>
</div>