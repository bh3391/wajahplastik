<?= $this->extend('_layouts') ?>


<?= $this->section('content') ?>
    
    <?= view('components/_hero')?>
    <br>
    
    <?= view('components/_aboutUs')?>
    <hr>
    <?= view('components/_value')?>
    <hr>
    <?= view('components/_gallery')?>
    <hr>
    <?= view('components/_blogpreview')?>
    <hr>
    <?= view('components/_youtubelist')?>
    <hr>
    <?= view('components/_achievement')?>
    <?= view('components/_cta')?>
    <hr>
    <?= view('components/_team')?>
   



<?= $this->endSection() ?>