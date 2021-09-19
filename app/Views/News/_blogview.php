<?= $this->extend('_layoutsblog') ?>
<?= $this->section('content') ?>

<div class="md:flex md:flex-row border">
    
    <div class="container md:w-4/6 bg-white h-auto mx-auto border-r m-1 p-7 md:px-20 md:py-10">
        <!-- Bagian Blog -->
        <div class="breadcrumb inline underlined px-2 bg-blue-50 text-blue-800 my-4">
            <a href="/">Home >> </a>
            <a href="/News">Berita dan Publikasi >></a>
            <a href=""><?= $News->News_category ?></a>
        </div>
        <hr>

        <div class="judul my-3">
            <h1 class="text-2xl font-bold text-left"><?= $News->News_title ?></h1>
        </div>
        <div class="tanggal inline text-xs text-gray-600 italic">
            <?php 
            $originalDate = $News->News_date;
            $newDate = date('d F Y', strtotime($originalDate));
            echo $newDate
            ?></div>
        <hr class="font-bold bg-black">
        <div class="text-left  my-3 text-sm text-gray-800 ">
            <div class="penulis inline italic"><strong>Penulis</strong> : <?= $News->News_writer ?></div>
            <div class="editor inline italic"><strong>Editor</strong> : <?= $News->News_editor ?></div>

        </div>


        <div class="gambar justify-center m-4 ">
            <img class="rounded-lg shadow-lg max-h-2/4 " src="<?= base_url() ?>/assets/images/<?= $News->News_image ?>" alt=" gambar">
            <div class="italic text-sm my-2  "><span class="bg-yellow-100 p-1 rounded text-yellow-800 border border-yellow-500">"<?= $News->News_tags ?>"</span></div>
        </div>
        <div class="item-right p-3  my-3">
            <span class="text-white font-bold bg-gray-600 rounded-lg shadow p-1">Bagikan :</span>
            <div class="sharethis-inline-share-buttons m-1"></div>
        </div>
        <div class="content text-justify text-md">
            <p>
                <span class="font-bold text-xl md:text-lg"><?= $News->News_content ?>
            </p>
        </div>
        <div class="text-left  my-3 text-sm text-gray-800 ">
            <div class="Sumber inline italic"><strong>Sumber</strong> : <?= $News->News_source ?></div>

        </div>
        <div class="text-left  my-3 text-sm text-gray-800 ">
            <div class="Tags  italic"><strong>Tags</strong> : <?= $News->News_tags ?></div>
        </div>
        <!-- <div class="text-left  my-3 text-md font-bold text-gray-800 ">
            <div class="bg-yellow-100 p-1 rounded text-yellow-800 border border-yellow-500"><strong>Baca Juga :</strong> <a href="">Random Artikel</a></div>
        </div> -->



    </div>
    <div class="container md:w-2/6 bg-white h-screen md:mx-auto p-5">
        <!-- Bagian side untuk iklan -->
        <iframe class="p-2 m-2"src="https://calendar.google.com/calendar/embed?height=300&wkst=1&bgcolor=%23ffffff&ctz=Asia%2FMakassar&src=MHZ0cGJjYTVtZ20wYWpsMnFic2hvZGJkMmdAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23F4511E&showTitle=0&showNav=0&showPrint=0&showTabs=0&showCalendars=0&showTz=0&mode=MONTH&title" style="border:solid 1px #777" width="400" height="300" frameborder="0" scrolling="no"></iframe>
        <div class="grid  ">
                    <h1 class=" underline  text-xl font-bold my-2 text-gray-700"><i class="fas fa-rss"></i>  Artikel Terbaru</h1>
            <?php foreach ($title as $row) : ?>
                <a href="<?= base_url() ?>/News/artikel/<?= $row['news_slug'] ?>" class=" my-1  text-left text-bold text-gray-700 px-1 hover:underline shadow "><?= $row['news_title'] ?></a>
            <?php endforeach; ?>
        </div>
        <div class="Tags my-3">
            <h1 class=" underline text-xl font-bold text-gray-700"> <i class="fas fa-hashtag"></i>  TAGS</h1>
            <?php foreach ($title as $row) : ?>
                <a href="<?= base_url() ?>/News" class="bg-gray-200 text-gray-800 px-1 rounded-lg shadow flex-row">#<?= $row['news_tags'] ?></a>
            <?php endforeach; ?>
        </div>
        <div class="Kategori my-3">
            <h1 class=" underline text-xl font-bold text-gray-700"><i class="fas fa-key"></i>  Keyword</h1>
            <?php foreach ($title as $row) : ?>
                <a href="<?= base_url() ?>/News" class="flex-row bg-yellow-200 text-bold text-yellow-800 p-1 rounded-lg shadow "><?= $row['news_keyword'] ?></a>
            <?php endforeach; ?>
        </div>

    </div>
</div>


<?= $this->endSection() ?>