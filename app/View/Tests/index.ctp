<div>
    <?= $this->element('tests/h1')?>
    <p><?= $content;?></p>
    <?php echo $this->Form->create('User')?>
    <div>
        <?php echo $this->Form->search('query');?>
    </div>
</div>
<?php echo $this->Html->script('custom/hello', array('inline' => false));?>