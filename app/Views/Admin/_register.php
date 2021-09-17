<?= $this->extend('_layouts') ?>
<?= $this->section('content') ?>

<div class="flex flex-1 my-10  items-center justify-center">
    <div class="border-2 border-gray-200  bg-gray-300 p-5 rounded-lg">
        <h1 class="font-bold tracking-wider text-2xl mb-8  w-full text-gray-600">Daftar</h1>
        <?php if (isset($validation)) : ?>
            <div class="text-red-600"><?= $validation->listErrors() ?></div>
        <?php endif; ?>
        <form action="/register/save" method="post">
            <div class="mb-3">
                <input type="text" name="name" class=" border-2 border-gray-100 focus:outline-none  block w-full py-2 px-4 rounded-lg" id="InputForName" placeholder="Masukan Nama Anda" value="<?= set_value('name') ?>">
            </div>
            <div class="mb-3">

                <input type="email" name="email" class="border-2 border-gray-100 focus:outline-none  block w-full py-2 px-4 rounded-lg" placeholder="Masukan Alamat E-mail" id="InputForEmail" value="<?= set_value('email') ?>">
            </div>
            <div class="mb-3">

                <input type="password" name="password" placeholder="Masukan Password" class="border-2 border-gray-100 focus:outline-none  block w-full py-2 px-4 rounded-lg" id="InputForPassword">
            </div>
            <div class="mb-3">

                <input type="password" name="confpassword" placeholder="Konfirmasi Password Anda" class="border-2 border-gray-100 focus:outline-none  block w-full py-2 px-4 rounded-lg" id="InputForConfPassword">
            </div>
            <button type="submit" class="bg-black hover:bg-red-1000 text-white font-bold py-2 px-4 border-b-4 border-white hover:border-red-1000 rounded-lg">Register</button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>