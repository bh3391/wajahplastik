<?= $this->extend('_layouts') ?>


<?= $this->section('content') ?>
    
    
    <?= view('components/_aboutUs')?>
    <hr>
    <?= view('components/_value')?>
    <hr>
    
    <?= view('components/_team')?>
   



<?= $this->endSection() ?>