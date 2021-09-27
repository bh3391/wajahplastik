<?= $this->extend('_layouts') ?>


<?= $this->section('content') ?>
    <div class="div" data-aos="fade-in" data-aos-duration="3000">
    <?= view('components/_hero')?>
    </div><br>
    
    <?= view('components/_aboutUs')?>
    <hr>
    <?= view('components/_value')?>
    <hr>
    <?= view('components/_gallery')?>
    <hr>
    <?= view('components/_blogpreview')?>
    <hr>
    <?= view('components/_youtube')?>
    <hr>
    <?= view('components/_achievement')?>
    <?= view('components/_cta')?>
    <hr>
    <?= view('components/_team')?>
   



<?= $this->endSection() ?>