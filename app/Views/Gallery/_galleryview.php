<?= $this->extend('_layouts') ?>

<?= $this->section('content') ?>
<div class="container md:mt-10 mx-auto">
    <div data-aos="fade-down" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500" class="judul text-center md:w-3/6 mx-auto ">
        <h1 class="text-2xl text-gray-800 font-bold mt-5">Gallery <span class="text-red-600 font-bold">Wajah</span> Plastik</h1>
        <p class="p-5 italic text-gray-500 font-light">Semua Hasil Karya <span class="text-red-600 font-bold">Wajah</span> Plastik Original Telah di Upload pada Galeri ini, Untuk mengecek Originalitas <span class="text-red-600 font-bold">Wajah</span> Plastik &trade; Anda Silahkan Gunakan Form Pencarian Dibawah ini </p>
    </div>

    <!-- Bagian Pencarian -->
    <div class="item-center mx-auto">
        <form action="gallery/search" method="post" class="w-full p-2 " x-data="{search : ' ' }">

            <div class="flex items-center border-b border-gray-200 py-2 md:mx-20 ">
                <input x-model="search" required class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" name="nama" placeholder="Masukan Nama Anda . . . . .">
                <button class="flex-shrink-0 bg-green-500 hover:bg-green-700 border-green-500 hover:border-green-700 text-sm border-4 text-white py-1 px-4 rounded" type="submit">
                    Cari
                </button>
            </div>
            Searching for: <span x-text="search" class="py-2 md:mx-20"></span>
        </form>
    </div>


    <?php if (session()->getFlashdata('Berhasil')) : ?>
        <div data-aos="flip-up" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500" class="alert text-white  p-2 bg-green-500 rounded-sm shadow text-sm text-left"><i class="fas fa-check"></i><?= session()->getFlashdata('Berhasil') ?></div>
        <div class=" flex flex-wrap justify-center md:grid grid-flow-row grid-cols-4  gap-5 mx-auto p-5 justify-items-center md:w-5/6 bg-gray-50 my-5 h-auto">
            <?php foreach ($result as $row) : ?>
                <span class="text-center border-1 border-gray-800 shadow p-2 ">
                    <img loading="lazy" class=" bg-gray-800 p-1" src="../assets/images/<?= $result["gallery_image"] ?>" alt="dummy">
                    <h1 class="p-1 text-red-500 font-semibold uppercase"><?= $result["gallery_judul"] ?></h1>
                    <h2><?= $result["created_date"] ?></h2>
                    <a href='gallery/details/<?= $result["gallery_id"] ?>'>show details</a>
                </span>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('Gagal')) : ?>
        <div data-aos="flip-up" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500" class="alert text-white  p-2 bg-red-600 rounded-lg shadow text-sm text-left"><i class="fas fa-trash-alt p-2"></i><?= session()->getFlashdata('Gagal') ?></div>
    <?php endif; ?>


    <div class=" flex flex-wrap justify-center md:grid grid-flow-row grid-cols-4   gap-5 mx-auto p-5 justify-items-center md:w-5/6 bg-gray-50 my-5 h-auto">


        <?php foreach ($gallery as $row) : ?>
            <div data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500" class="text-center border-1 rounded border-gray-800 shadow p-3  hover:bg-red-600 duration-1000 hover:text-white hover:rounded-md ">
                <img loading="lazy" class=" bg-gray-800 p-1 " src="../assets/images/<?= $row["gallery_image"] ?>" alt="dummy">
                <h1 class="p-1  font-semibold uppercase"><?= $row["gallery_judul"] ?></h1>
                <h2>No: <?= $row["gallery_sertilengkap"] ?></h2>
                <a href='gallery/details/<?= $row["gallery_slug"] ?>'>show details</a>
            </div>
        <?php endforeach; ?>
    </div>



</div>

<?= view('components/_cta') ?>



<?= $this->endSection() ?>