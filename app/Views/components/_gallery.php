<div class="container p-5 p-t-10 mx-auto">
  <div class="flex flex-col text-center w-full mb-20">
    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Karya Tematik <span class="text-red-600 font-bold">Wajah</span> Plastik &trade;</h1>
    <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom.</p>
  </div>
  

  <div class=" px-4">
    <div class="flex flex-wrap mx-4 overflow-auto gap-4">
      <?php foreach ($tematik as $t) : ?>
        <div class="p-2 w-full md:w-1/3 bg-gray-50 rounded-md border transition delay-100 hover:bg-red-600 hover:shadow-lg">
          <img loading="lazy" src="/assets/images/<?= $t['gallery_image'] ?>" alt="<?= $t['gallery_image'] ?>" class="rounded-md">
          
        </div>
        <?php endforeach; ?>
      
    </div>
  </div>
</div>
</div>