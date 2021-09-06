<?= $this->extend('_layoutsAdmin') ?>

<?= $this->section('content') ?>

<div class="my-5 hover:scale-125" x-data="{ open: false }">


    <button @click="open=!open" class="p-2 bg-blue-500 shadow hover:bg-red-600 ease-in-out duration-500 hover:-translate-y-1 text-white rounded-lg transition"><i class="far fa-plus-square mx-1 "></i>Tambahkan Wajah Plastik</button>

    <?php if (session()->getFlashdata('Berhasil')) : ?>
        <div class="mt-4 alert text-white  p-2 bg-green-500 rounded-sm shadow text-sm text-left"><i class="fas fa-check p-2"></i><?= session()->getFlashdata('Berhasil') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('Update')) : ?>
        <div class="mt-4 alert text-white  p-2 bg-green-500 rounded-sm shadow text-sm text-left"><i class="fas fa-check p-2"></i><?= session()->getFlashdata('Update') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('err')) : ?>
        <div class="mt-4 alert text-white  p-2 bg-red-400 rounded-lg shadow text-sm text-left"><i class="fas fa-trash-alt p-2"></i><?= session()->getFlashdata('err') ?></div>
    <?php endif; ?>
    <form x-show="open " x-transition method="post" action="<?= base_url(); ?>/Dashboard/galleryAdd" enctype="multipart/form-data" class="w-2/3 ">
        <div class="block items-center  p-2">
            <input required class=" border-b-2 border-gray-300 my-2 focus:outline-none bg-gray-50 block w-full py-2 px-4 rounded-lg " type="text" placeholder="Masukan Judul Karya" name="gallery_judul">
            <textarea required class="bg-transparent border-2 border-gray-300 my-2 focus:outline-none bg-gray-50 block w-full py-2 px-4 rounded-lg " type="textarea" placeholder="Deskripsi" name="gallery_deskripsi"></textarea>
            <input required class="bg-transparent border-2 border-gray-300 my-2 focus:outline-none bg-gray-50 block w-full py-2 px-4 rounded-lg " type="number" placeholder="Harga" name="gallery_harga">
            <input required class="bg-transparent border-2 border-gray-300 my-2 focus:outline-none bg-gray-50 block w-full py-2 px-4 rounded-lg " type="text" placeholder="Nomor Sertifikat" name="gallery_sertifikatid">
            <input required class="bg-transparent border-2 border-gray-300 my-2 focus:outline-none bg-gray-50 block w-full py-2 px-4 rounded-lg " type="text" placeholder="Nomor Sertifikat Lengkap" name="gallery_sertilengkap">
            <label for="Kategori">Pilih Kategori:</label>
            <select class="m-2 bg-gray-200 border-2 p-1 rounded-lg" id="kategori" name="gallery_kategori">
                <option value="tematik">Tematik</option>
                <option value="personal">Personal</option>
            </select>

            <div class="col-md-12 p-3">
                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Photo</label>
                <div class="form-group">
                    <input required type="file" name="gallery_image" class="form-control">
                </div>
            </div>
            <button class="flex-shrink-0 bg-green-500 hover:bg-green-700 border-green-500 hover:border-green-700 text-sm border-4 text-white py-1 px-2 rounded" type="submit">
                Submit
            </button>
        </div>
    </form>

</div>


<!-- <div class="gallerylist">
    <div class="flex-row">
        <h1>Gallery Anda</h1>
    </div>

    <div class=" flex flex-wrap ">
        <?php foreach ($gallery as $row) : ?>
            <div class="bg-gray-100 p-3 item-center m-2 rounded-lg shadow w-1/5 hover:bg-gray-50 hover:shadow-xl transition duration-150 ease-in-out">
                <img alt="gallery" class=" m-1 rounded-lg" src="../assets/images/<?= $row["gallery_image"] ?>">
                <h1 class="text-red-500 font-bold uppercase p-1 my-1 text-lg"><?= $row["gallery_judul"] ?></h1>
                <hr>
                <p class="text-gray-700 p-2 "><?= $row["gallery_deskripsi"] ?></p>
                <div class="text-center">
                    <h2 class="text-red-600 font-light p-2 text-3xl"><?= $row["gallery_harga"] ?></h2>
                </div>
                <div class=" my-1 transition duration-150 ease-in-out bg-red-500 hover:bg-red-600 p-2 text-white text-center rounded-lg shadow-md"><i class="fab fa-whatsapp p-2"></i><a>Beli Sekarang</a></div>
                <div class=" underlined transition duration-150 ease-in-out bg-blue-500 hover:bg-blue-600 p-2 text-white text-center rounded-lg shadow-md"><i class="far fa-eye  p-2"></i><a>Lihat Detail</a></div>

                <hr>
                <div class="text-center bg-black font-semibold">
                    <a href='/dashboard/galleryDelete/<?= $row["gallery_id"] ?>' class="text-red-600"><i class="p-3 m-1 far fa-trash-alt "></i>Hapus</a>
                    <a href="galleryEdit/<?= $row["gallery_id"] ?>" class="text-blue-600"><i class="p-3 m-1 far fa-edit"></i>Edit Photo</a>
                </div>
            </div>
        <?php endforeach; ?>


    </div> -->

<div class="my-2 ">
    <style>
        .css-serial {
            counter-reset: serial-number;
            /* Atur penomoran ke 0 */
        }

        .css-serial td:first-child:before {
            counter-increment: serial-number;
            /* Kenaikan penomoran */
            content: counter(serial-number);
            /* Tampilan counter */
        }
    </style>
    <div class="shadow flex">
        <input class="w-full rounded p-2" type="text" placeholder="Search...">
        <button class="bg-white w-auto flex justify-end items-center text-blue-500 p-2 hover:text-blue-400">
            <i class="material-icons">search</i>
        </button>
    </div>
    <table class="min-w-max w-full table-auto css-serial table">
        <thead>
            <tr class="bg-gray-500 text-white uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">No</th>
                <th class="py-3 px-6 text-left">Judul</th>
                <th class="py-3 px-6 text-left"> Nomor Sertifikat</th>
                <th class="py-3 px-6 text-center">Tanggal Pembuatan</th>

                <th class="py-3 px-6 text-center">Kategori</th>
                <th class="py-3 px-6 text-center">Action</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm ">
            <?php foreach ($gallery as $row) : ?>
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-center"></td>
                    <td class="py-3 px-6 text-left"><span class="inline-block w-2 h-2 mr-2 bg-green-600 rounded-full"></span> <?= $row["gallery_judul"] ?></td>
                    <td class="py-3 px-6 text-left"><?= $row["gallery_sertilengkap"] ?></td>
                    <td class="py-3 px-6 text-left"><?= $row["created_date"] ?></td>

                    <td class="py-3 px-6 text-center"><?= $row["gallery_kategori"] ?></td>
                    <td class="py-1 px-1 text-center ">
                        <a href="../gallery/details/<?= $row["gallery_slug"] ?>"><i class="px-3 far fa-eye"></i></a>
                        <a href="galleryEdit/<?= $row["gallery_id"] ?>"><i class="px-3 far fa-edit"></i></a>
                        <a href="/dashboard/galleryDelete/<?= $row["gallery_id"] ?>"><i class="px-3 far fa-trash-alt"></i></a>


                    </td>
                </tr>
        </tbody>
    <?php endforeach; ?>
    </table>

</div>



<?= $this->endSection() ?>