<div class="judul text-center m-1 md:w-3/6 mx-auto " id="youtube">
        <h1 class="text-2xl text-gray-800 font-bold mt-5">Youtube Made Oplas</h1>
        <p class="p-5 italic text-gray-500 font-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum aliquam, sit molestias magnam deserunt dignissimos ducimus ab, veniam temporibus debitis, quam distinctio</p>
    </div>
    <div class=" flex flex-col justify-center md:grid grid-flow grid-cols-3  gap-2 mx-auto p-5 justify-items-center  bg-gray-50 my-5">
    <?php foreach ($youtube as $row) : ?>   
    <iframe loading="lazy" class="w-full h-auto p-1 md:p-5 hover:bg-blue-600 hover:rounded-lg md:h-72" src="https://www.youtube.com/embed/<?= $row['youtube_link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php endforeach; ?>
    </div>

