<section class="text-gray-600 body-font">

  <div class="container px-5 py-24 mx-auto">
    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-5 text-gray-900">Achievement</h1>
    <div class="h-1 w-20 bg-red-600 rounded"></div>
    <div class="flex flex-wrap m-4">
      <?php foreach ($achievement as $a) :?>
      <div class=" bg-gray-100 delay-500 duration-500 hover:bg-gray-900 hover:text-white hover:shadow-lg transition rounded-lg lg:w-1/3 lg:mb-0 mb-2 p-4">
        <div class="h-full text-center ">
          <img alt="testimonial" class="w-40 h-40 mb-8 object-cover object-center rounded-lg inline-block border-2 border-gray-200 bg-gray-100" src="<?=base_url()?>/assets/images/<?=$a['News_image']?>">
          
          
          <h2 class="text-blue-600 font-medium title-font tracking-wider text-sm"><?=$a['News_category']?></h2>
          <p class="text-red-600 font-bold"><?=$a['News_title']?></p>
          <p class="leading-relaxed p-2 text-justify"><?=$a['News_description']?></p>
        </div>
      </div>
      <?php endforeach ;?>

    </div>
  </div>
</section>