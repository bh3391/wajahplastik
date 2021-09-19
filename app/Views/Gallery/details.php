<?= $this->extend('_layouts') ?>

<?= $this->section('content') ?>

<div class="flex flex-wrap bg-gray-50 md:grid-cols-2 md:mx-auto my-5 hover:m-1 ">
    <div class="w-full md:w-1/2  p-5 flex  hover:z-10 hover:mx-1 transform hover:scale-150 hover:absolute  delay-100 duration-1000 transition-all hover:p-1 hover:bg-gray-600 ">
        <img loading="lazy" class="  object object-cover border border-black m-auto bg-gray-50 p-1 md:p-5 md:w-2/3" src="<?= base_url() ?>/assets/images/<?= $gallery->gallery_image ?>" alt="dummy">
    </div>
    <div class="w-full md:w-1/2 md:my-auto bg-gray-50 p-1 md:p-5 gap-3 ">
        <? echo view('components/_googleads');?>
        <h1 class="p-1 md:px-10 text-red-600 font-semibold uppercase"><?= $gallery->gallery_judul ?></h1>
        <p class="p-1 md:px-10 text-gray-500 font-semibold "><?= $gallery->gallery_deskripsi ?></p>
        <p class="p-1 md:px-10 text-gray-500 ">Nomor Sertifikat : <?= $gallery->gallery_sertilengkap ?></p>
        <p class="p-1 md:px-10 text-gray-500  ">Kategori : <?= $gallery->gallery_kategori ?></p>
        <p class="p-1 md:px-10 text-gray-500  ">Harga : Rp <?php
                                                            $angka = $gallery->gallery_harga;
                                                            $angka_format = number_format($angka, 2);
                                                            echo $angka_format;
                                                            // 1,999.89
                                                            ?></p><br>
        <a href="https://wa.link/kqshtu" class="p-1 md:my-2  md:ml-10 md:px-10 text-white shadow-sm font-bold rounded-lg bg-blue-500"><i class="fas fa-shopping-cart p-1 "></i>Beli Sekarang</a>


    </div>






    <?= $this->endSection() ?>