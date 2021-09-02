<?= $this->extend('_layoutsAdmin') ?>


<?= $this->section('content') ?>

<h1 class="p-3">Selamat Datang <?= $user ?></h1>

<script>
    function openNav() {
        document.getElementById("side-dashboard").style.visibility = "visible";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("side-dashboard").style.visibility = "hidden";
    }
</script>
<?= $this->endSection('content') ?>