<?= $this->extend('_layoutsAdmin') ?>
<?= $this->section('content') ?>
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
<div class="flex items-center justify-left  bg-gray-50">
    <div class="col-span-12 ">
        <div class="my-5 hover:scale-125"><a class="text-md m-1 shadow-md hover:shadow-lg    bg-green-600 text-white hover:bg-green-500 p-3 rounded-xl" href="<?php echo base_url(); ?>/dashboard/blogForm"> <i class="fa fa-plus-circle p-1" aria-hidden="true"></i>Tambahkan Berita</a>
        </div>
        <div class="my-2 overflow-scroll p-2 ">
        <?php if (session()->getFlashdata('Publish')) : ?>
                <div class="alert text-yellow-800  p-2 bg-yellow-500 rounded-sm shadow text-sm text-left"><i class="fas fa-check p-2"></i><?= session()->getFlashdata('Publish') ?></div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert text-white  p-2 bg-green-500 rounded-sm shadow text-sm text-left"><i class="fas fa-check p-2"></i><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('Hapus')) : ?>
                <div class="alert text-white  p-2 bg-red-500 rounded-sm shadow text-sm text-left"><i class="fas fa-trash-alt p-2"></i><?= session()->getFlashdata('Hapus') ?></div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('err')) : ?>
                <div class="alert text-white  p-2 bg-red-400 rounded-lg shadow text-sm text-left"><i class="fas fa-trash-alt p-2"></i><?= session()->getFlashdata('err') ?></div>
            <?php endif; ?>

            <table class="min-w-max w-full  table-auto css-serial table my-2">
                <thead>
                    <tr class="bg-gray-500 text-white uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Nama Penulis</th>
                        <th class="py-3 px-6 text-left"> Judul</th>
                        <th class="py-3 px-6 text-center">Tanggal</th>

                        <th class="py-3 px-6 text-center">Status</th>
                        <th class="py-3 px-6 text-center">Action</th>
                    </tr>
                </thead>
                
                <tbody class="text-gray-600 text-sm ">
                <?php foreach ($News as $row) : ?>
                    <tr class="border-b border-gray-200 hover:bg-green-100">
                        <td class="py-3 px-6 text-center"></td>
                        <td class="py-3 px-6 text-left"><span class="inline-block w-2 h-2 mr-2 bg-green-600 rounded-full"></span> <?=$row['News_writer']?></td>
                        <td class="py-3 px-1 text-left"><?=$row['News_title']?></td>
                        <td class="py-3 px-6 text-left"><?=$row['News_date']?></td>

                        <td class="py-3 px-6 text-center"><a href="/dashboard/blogPublish/<?=$row["News_id"];?>"><?=$row['News_status']?></a></td>
                        <td class="py-1 px-1 text-center ">
                            <a href="../News/artikel/<?=$row["News_slug"];?>"><i class="p-3 far fa-eye hover:bg-gray-500 rounded-lg hover:text-gray-50"></i></a>
                            <a href="/dashboard/blogEdit"><i class="p-3 far fa-edit hover:bg-blue-500 rounded-lg hover:text-gray-50"></i></a>
                            <a href=/dashboard/blogDelete/<?=$row["News_id"];?>><i class="p-3 far fa-trash-alt hover:bg-red-600 rounded-lg hover:text-gray-50"></i></a>


                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection('content') ?>