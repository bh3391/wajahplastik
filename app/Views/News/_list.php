<?= $this->extend('_layouts') ?>

<?= $this->section('content') ?>

<section class="text-gray-600 body-font overflow-hidden">

  <div class="container px-5 md:py-10 mx-auto">
    <div class="judul text-left  mx-auto ">
      <h1 class="text-2xl text-gray-800 font-bold mt-5">Berita dan Publikasi</h1>
      <p class="italic text-gray-500 font-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum aliquam, sit molestias magnam deserunt dignissimos ducimus ab, veniam temporibus debitis, quam distinctio</p>
    </div>
    <div class=" ">>
    <?php foreach ($News as $row) : ?>
      
      <div class="my-4 divide-y-2 divide-gray-100">
        <div class="py-8 flex flex-wrap ">
          <div class="mx-2 md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
            <span class="font-semibold title-font text-gray-700"><?= $row['News_category'] ?></span>
            <span class="mt-1 text-gray-500 text-sm"><?= $row['News_category'] ?></span>
            <img  loading="lazy"class="rounded-lg shadow-lg"src="<?= base_url() ?>/assets/images/<?= $row['News_image'] ?>" alt="<?= $row['News_image'] ?>">
          </div>
          <div class="md:p-2 md:flex-grow">
            <h2 class="text-2xl font-medium text-gray-900 title-font mb-2"><?= $row['News_title'] ?></h2>
            <p class="leading-relaxed"><?= $row['News_description'] ?></p>
            <a class="text-pink-500 inline-flex items-center mt-4">Learn More

            </a>
          </div>

        </div>
      <?php endforeach; ?>
      </div>
      </div>



</section>




<?= $this->endSection() ?>