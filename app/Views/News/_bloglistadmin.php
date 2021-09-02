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
        <div class="my-5 hover:scale-125"><a class="text-md m-1 shadow-md hover:shadow-lg    bg-green-600 text-white hover:bg-green-500 p-3 rounded-xl" href="<?php echo base_url(); ?>/dashboard/blogAdd"> <i class="fa fa-plus-circle p-1" aria-hidden="true"></i>Tambahkan Berita</a>
        </div>
        <div class="my-2 ">

            <table class="min-w-max w-full table-auto css-serial table">
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
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-center"></td>
                        <td class="py-3 px-6 text-left"><span class="inline-block w-2 h-2 mr-2 bg-green-600 rounded-full"></span> I Gede Bhakti Pratama</td>
                        <td class="py-3 px-6 text-left">Karya Fenomenal Wajah Plastik</td>
                        <td class="py-3 px-6 text-left">Hari ini</td>
                        
                        <td class="py-3 px-6 text-center">Published</td>
                        <td class="py-1 px-1 text-center ">
                        <a href="../News/blogView"><i class="px-3 far fa-eye"></i></a>
                        <a href="/dashboard/blogEdit"><i class="px-3 far fa-edit"></i></a>
                        <a href=/dashboard/blogDelete><i class="px-3 far fa-trash-alt"></i></a>
                        

                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection('content') ?>