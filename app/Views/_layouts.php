<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Sebuah Seni Kreatif Ilustrasi Wajah dari Sampah Plastik" />
    <meta name="keywords"   content="Wajahplastik"/>
    <meta name="author" content="I Gede Bhakti Pratama">
    <meta name="Application-name" content="Wajah Plastik">
    <link href="<?= base_url() ?>/favicon.ico" rel="icon" type="image/gif">

    <link href="<?= base_url() ?>/assets/css/output.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script src="//unpkg.com/alpinejs" defer></script>
    

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

<body>
</body>
<?= view('components/_navbar') ?>

<?= $this->renderSection('content') ?>
<?= view('components/_footer') ?>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
  </script>
</body>


</html>