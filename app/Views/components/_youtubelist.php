
<div class="container mt-10 mx-auto">
    <div data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500" class="judul text-center md:w-3/6 mx-auto ">
        <h1 class="text-2xl text-gray-800 font-bold mt-5">Youtube Made Oplas</h1>
        <p class="p-5 italic text-gray-500 font-light">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum aliquam, sit molestias magnam deserunt dignissimos ducimus ab, veniam temporibus debitis, quam distinctio</p>
    </div>



    <div class=" flex flex-col justify-center md:grid grid-flow grid-cols-3  gap-2 mx-auto p-5 justify-items-center  bg-gray-50 my-5">
        <?php foreach ($youtube as $row) : ?>
            
            <div data-aos="flip-down" class="youtube-player" data-id="<?= $row['youtube_link']; ?>">
            <span class="rounded-md shadow hover:text-red-600  transition duration-500"><a class="hover:underline px-3 "target="_blank" href="https://www.youtube.com/watch?v=<?= $row['youtube_link']; ?>"><i class="px-2 text-red-600 fab fa-youtube"></i>Watch Now on Youtube</a></span>
        </div>
        
            
            <!-- <iframe loading="lazy" class="w-full h-auto p-1 md:p-5 duration-500 hover:bg-blue-600 hover:rounded-lg md:h-72" src="https://www.youtube.com/embed/<?= $row['youtube_link']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        <?php endforeach; ?>
    </div>
</div>


