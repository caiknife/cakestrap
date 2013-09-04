<div>
    <?= $this->element('tests/h1')?>
    <p><?= $content;?></p>
</div>
<?php echo $this->Html->script('custom/hello', array('inline' => false));?>