<?= $this->extend('_layouts') ?>
<?= $this->section('content') ?>

<section class="min-h-screen flex flex-col bg-gradient-to-tr from-blue-600 via-purple-600 to-orange-500">
            
            <div class="flex flex-1 items-center justify-center  ">
                <div class="rounded-lg sm:border-2 px-4 lg:px-24 bg-gray-100 py-16 lg:max-w-xl sm:max-w-md w-full text-center">
                
                    <form action="/login/auth" method="post" class="text-center">
                        <h1 class="font-bold tracking-wider text-3xl mb-8 w-full text-gray-600">
                            Hello Agoes Djanar, How Are You Today ?
                        </h1>
                        <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert text-red-500 text-sm text-left"><?= session()->getFlashdata('msg') ?></div>
                <?php endif;?>
                        <div class="py-2 text-left">
                            <input type="email" class="bg-gray-200 border-2 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700 " placeholder="Email" name="email" />
                        </div>
                        <div class="py-2 text-left">
                            <input type="password" class="bg-gray-200 border-2 border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700 " placeholder="Password" name="password" />
                        </div>
                        <div class="py-2">
                            <button type="submit" class="border-2 border-gray-100 focus:outline-none bg-black text-white font-bold tracking-wider block w-full p-2 rounded-lg focus:border-gray-700 hover:bg-blue-700">
                                Lets Make Some Art!
                            </button>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="#" class="hover:underline">it Only One Password I hope you dont forget it </a>
                    </div>
                    
                </div>
            </div>
        </section>

   
<?= $this->endSection() ?>
