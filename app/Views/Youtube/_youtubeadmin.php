<?= $this->extend('_layoutsAdmin') ?>
<?= $this->section('content') ?>

<div class="my-5 hover:scale-125">
    <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert text-white  p-2 bg-green-500 rounded-sm shadow text-sm text-left"><i class="fas fa-check"></i><?= session()->getFlashdata('msg') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('Hapus')) : ?>
        <div class="alert text-white  p-2 bg-red-400 rounded-lg shadow text-sm text-left"><i class="fas fa-trash-alt p-2"></i><?= session()->getFlashdata('Hapus') ?></div>
    <?php endif; ?>
    <form action="youtubeAdd" method="post" class="w-1/2 ">

        <div class="flex items-center border-b border-teal-500 py-2">
            <input required class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" type="text" name="youtube_link" placeholder="Masukan Link Video Youtube Anda">
            <button class="flex-shrink-0 p-2 bg-blue-500 shadow hover:bg-red-600 ease-in-out duration-500 hover:-translate-y-1 text-white rounded-lg transition" type="submit">
            <i class="far fa-plus-square mx-1 "></i> Tambahkan Video
            </button>
        </div>
    </form>


    <p class="text-xs text-blue-800 border-gray-300 bg-gray-50 m-2">*https://www.youtube.com/watch?v=MmtRfo1Lnz8<br>
        Masukan kode dibelakang v= <br>
        contoh : MmtRfo1Lnz8

    </p>
</div>
<hr>

<div class="youtubelist">
    <h1>Your Videos</h1>
    <div class=" flex flex-wrap ">
        <?php foreach ($youtube as $row) : ?>

            <div>
                <iframe loading="lazy" class="border shadow-lg hover:scale-200 m-1 p-1 rounded-lg" width="300" height="200" src="https://www.youtube.com/embed/<?= $row['youtube_link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>

                <a class="p-3"href ="/dashboard/youtubeDelete/<?=$row["youtube_id"];?>"><i class="p-3 m-1 far fa-trash-alt">Hapus Video</i></a>
            </div>
        <?php endforeach; ?>

    </div>
</div>
<?= $this->endSection('content') ?>