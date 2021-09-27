<?= $this->extend('_layoutsAdmin') ?>

<?= $this->section('content') ?>

<div class="my-5 hover:scale-125">
    <?php if (session()->getFlashdata('Berhasil')) : ?>
        <div class="alert text-white  p-2 bg-green-500 rounded-sm shadow text-sm text-left"><i class="fas fa-check p-2"></i><?= session()->getFlashdata('Berhasil') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('err')) : ?>
        <div class="alert text-white  p-2 bg-red-400 rounded-lg shadow text-sm text-left"><i class="fas fa-trash-alt p-2"></i><?= session()->getFlashdata('err') ?></div>
    <?php endif; ?>


    <h1 class="flex-shrink-0 p-2 bg-blue-500 shadow hover:bg-red-600 ease-in-out duration-500 hover:-translate-y-1 text-white rounded-lg transition" type="submit">
        <i class="far fa-edit mx-1 "></i> Update Gallery
    </h1>



    <form method="post" action="<?= base_url(); ?>/Dashboard/updateGallery" enctype="multipart/form-data" class="w-2/3 ">
        <div class="block items-center  p-2">
            <input required class=" border-b-2 border-gray-300 my-2 focus:outline-none bg-gray-50 block w-full py-2 px-4 rounded-lg " type="text" placeholder="Masukan Judul Karya" name="gallery_judul" value="<?= $gallery->gallery_judul ?>">
            <textarea required class="bg-transparent border-2 border-gray-300 my-2 focus:outline-none bg-gray-50 block w-full py-2 px-4 rounded-lg " type="textarea" placeholder="Deskripsi" name="gallery_deskripsi"><?= $gallery->gallery_deskripsi ?></textarea>
            <input required class="bg-transparent border-2 border-gray-300 my-2 focus:outline-none bg-gray-50 block w-full py-2 px-4 rounded-lg " type="number" placeholder="Harga" name="gallery_harga" value="<?= $gallery->gallery_harga ?>">
            <input required class="bg-transparent border-2 border-gray-300 my-2 focus:outline-none bg-gray-50 block w-full py-2 px-4 rounded-lg " type="date" placeholder="Nomor Sertifikat" name="gallery_sertifikatid" value="<?= $gallery->gallery_sertifikatid ?>">
            <input required class="bg-transparent border-2 border-gray-300 my-2 focus:outline-none bg-gray-50 block w-full py-2 px-4 rounded-lg " type="text" placeholder="Nomor Sertifikat Lengkap" name="gallery_sertilengkap" value="<?= $gallery->gallery_sertilengkap ?>">
            <label for="Kategori">Pilih Kategori:</label>
            <select class="m-2 bg-gray-200 border-2 p-1 rounded-lg" id="kategori" name="gallery_kategori">
                <option value="tematik">Tematik</option>
                <option value="Custom">Custom</option>
            </select>
            <input type="hidden" name="gallery_id" value="<?= $gallery->gallery_id ?>" <div>
            <img src="<?= base_url() ?>/assets/images/<?= $gallery->gallery_image ?>" alt="<?= $gallery->gallery_image ?>" class="w-40">
        </div>
        <div class="col-md-12 p-3">
            <label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Photo</label>
            <div class="form-group">
                <input required type="file" name="gallery_image" class="form-control">
            </div>
        </div>
        <button class="flex-shrink-0 bg-blue-500 hover:bg-green-700  text-md text-white py-1 px-2 rounded-lg" type="submit">
            Submit
        </button>
        <a href="<?=base_url()?>/dashboard/galleryList" class="flex-shrink-0 bg-red-600 hover:bg-red-700  text-md text-white py-1 px-2 rounded-lg" type="submit">
            Batal
        </a>
</div>
</form>

</div>

//<?= $this->endSection() ?>