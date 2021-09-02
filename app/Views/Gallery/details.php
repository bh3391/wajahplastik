<?= $this->extend('_layouts') ?>

<?= $this->section('content') ?>

<div class="flex flex-wrap md:grid-cols-2 md:mx-10 my-5 m-1 ">
    <div class="w-full md:w-1/2 bg-gray-50 p-5 flex   ">
        <img loading="lazy" class=" border border-black m-auto bg-gray-50 p-1 md:p-5 md:w-2/3" src="<?= base_url() ?>/assets/images/<?= $gallery->gallery_image ?>" alt="dummy">
    </div>
    <div class="w-full md:w-1/2 bg-gray-50 p-1 md:p-5 ">
        <h1 class="p-1 md:px-10 text-red-500 font-semibold uppercase"><?= $gallery->gallery_judul ?></h1>
        <p class="p-1 md:px-10 text-gray-800 font-semibold "><?= $gallery->gallery_deskripsi ?></p>
    </div>




    

    <?= $this->endSection() ?>