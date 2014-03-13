<?php $this->extend('admin_template');?>

<?php $this->start('member_right');?>
<?php echo $this->Form->create('Member', array(
    'url' => array('controller' => 'member', 'action' => 'create',
                   'admin' => true, 'type' => $typeId,
    ),
    'type' => 'post',
    'class' => 'form-search form-horizontal',
));?>
    <div class="container-fluid">
        <div class="row-fluid page-header">
            <div class="span6">
                <h4>新增用户</h4>
            </div>
            <div class="span6">
                <div class="pull-right">
                    <a class="btn" href="<?php echo $this->Html->url(array(
                        'controller' => 'member', 'action' => 'index', 'admin' => true,
                        'type' => $typeId,
                    ));?>">返回列表</a>
                    <button class="btn btn-success" type="submit">保存用户</button>
                </div>
            </div>
        </div>
        <?php echo $this->element('admin/member/form')?>
    </div>
<?php echo $this->Form->end();?>
<?php $this->end();?>