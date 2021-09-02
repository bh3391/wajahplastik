<?= $this->extend('_layouts') ?>


<?= $this->section('content') ?>
    
    <?= view('components/_hero')?><br>
    <?= view('components/_aboutUs')?>
    <hr>
    <?= view('components/_step')?>
    <hr>
    <?= view('components/_gallery')?>
    <hr>
    <?= view('components/_blogpreview')?>
    <hr>
    <?= view('components/_youtube')?>
    <hr>
    <?= view('components/_testimonial')?>
    <?= view('components/_cta')?>
    <hr>
    <?= view('components/_team')?>
   



<?= $this->endSection() ?>