<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-control | max-age=1000000" content="public">
    <meta name="Description" content="Sebuah Seni Kreatif Ilustrasi Wajah dari Sampah Plastik" />
    <meta name="keywords" content="Wajahplastik" />
    <meta name="author" content="I Gede Bhakti Pratama">
    <meta name="Application-name" content="Wajah Plastik">
    <link href="<?= base_url() ?>/favicon.ico" rel="icon" type="image/gif">

    <link href="<?= base_url() ?>/assets/css/styles.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="<?= base_url() ?>/assets/js/main.js" defer></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond&family=Poppins&display=swap');

        * {
            font-family: 'EB Garamond',
                serif;
            font-family: 'Poppins',
                sans-serif;
        }
    </style>


    <title><?= $judul ?></title>
</head>

<body class=" mx-0">
</body>
<?= view('components/_navbar') ?>

<?= $this->renderSection('content') ?>


<?= view('components/_footer') ?>
<script  src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>


</html>NODE_ENV=production npx tailwindcss -i ./public/assets/css/tailwind.css -o ./dist/tailwind.css --minify