<?= $this->extend('_layoutsAdmin') ?>


<?= $this->section('content') ?>
<div class="container w-4/5">
<h1 class="p-3">Selamat Datang <?= $user ?></h1>

<hr>

<div class="p-5 w-full text-white bg-gray-200 flex flex-row grid-cols-2 place-content-around">
    <div class="w-full p-2 mx-1 bg-green-800 rounded shadow"> Jumlah Pengunjung
    <a  class="text-sm"href="http://s05.flagcounter.com/more/lv"><img src="https://s05.flagcounter.com/mini/lv/bg_FFFFFF/txt_000000/border_CCCCCC/flags_0/" alt="Free counters!" border="0"></a>
    </div>
    <div class=" w-full text-center p-2 mx-1 bg-blue-900 rounded shadow">
        <div> Wajahplastik&trade;</div>
        <div class="text-2xl shadow"><?= $count ?></div>
    </div>
    <!-- <div class="p-2 mx-1 bg-yellow-900 rounded shadow"> Total Page Views</div> -->
</div>
<hr>
<h1>Karya Wajah Plastik</h1>
<hr>
<div class=" flex flex-wrap justify-center md:grid grid-flow-row grid-cols-3  gap-5 mx-auto p-5 justify-items-center md:w-5/6 bg-gray-50 my-5 h-auto">
    <?php foreach ($gallery as $row) : ?>
        <div data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500" class="text-center border-1 rounded border-gray-800 shadow p-3  hover:bg-red-600 duration-1000 hover:text-white hover:rounded-md ">
            <img loading="lazy" class=" bg-gray-800 p-1 " src="../assets/images/<?= $row["gallery_image"] ?>" alt="dummy">
            <h1 class="p-1  font-semibold uppercase"><?= $row["gallery_judul"] ?></h1>
            
            <a href='gallery/details/<?= $row["gallery_slug"] ?>'>show details</a>
        </div>
    <?php endforeach; ?>
</div>
</div>

<hr>





<?= $this->endSection('content') ?>