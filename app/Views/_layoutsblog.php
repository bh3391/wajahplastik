<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="<?= $News->News_title ?>" />
    <meta name="Description" content="<?= $News->News_description ?>, <?= base_url() ?>/News/Artikel/<?= $News->News_slug ?>" />
    <meta name="keywords"   content="<?= $News->News_keyword ?>"?>
    <meta name="author" content="I Gede Bhakti Pratama"/>
    <meta name="Application-name" content="Wajah Plastik">
    <link href="<?= base_url() ?>/assets/css/output.css" rel="stylesheet">
    <link href="<?= base_url() ?>/favicon.ico" rel="icon" type="image/gif">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=61306be6903bbd00124744d7&product=inline-share-buttons" async="async"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=EB+Garamond&family=Poppins&display=swap');

        * {
            font-family: 'EB Garamond',
                serif;
            font-family: 'Poppins',
                sans-serif;
        }
    </style>


    <title><?= $News->News_title ?></title>
</head>

<body>
</body>
<?= view('components/_navbar') ?>

<?= $this->renderSection('content') ?>
<?= view('components/_footer') ?>


</body>


</html>