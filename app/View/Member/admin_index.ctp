<?php $this->extend('admin_template');?>

<?php $this->start('member_right');?>
<div class="container-fluid">
    <div class="row-fluid page-header">
        <div class="span8">
            <h4><?php echo h($typeId == 0 ? '普通用户' : '机构用户');?></h4>
        </div>
        <div class="span4">
            <?php if ($typeId == 1):?>
            <div class="pull-right">
                <a href="<?php echo $this->Html->url(array('controller' => 'member', 'action' => 'add',
                                                           'admin' => true, 'type' => $typeId,
                ))?>" class="btn btn-info">添加用户</a>
            </div>
            <?php endif;?>
        </div>
    </div>
    <div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="span1">ID</th>
                    <th>登录名</th>
                    <th>电子邮箱</th>
                    <?php if ($typeId == 0):?>
                    <th>会员姓名</th>
                    <?php else:?>
                    <th>机构名称</th>
                    <?php endif;?>
                    <th class="span3">操作</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($members as $item):?>
                <tr>
                    <td><?php echo h($item['Member']['id'])?></td>
                    <td><?php echo h($item['Member']['username'])?></td>
                    <td><?php echo h($item['Member']['email'])?></td>
                    <?php if ($typeId == 0):?>
                        <td><?php echo h($item['Member']['huiyuanxingming'])?></td>
                    <?php else:?>
                        <td><?php echo h($item['Member']['jigoumingcheng'])?></td>
                    <?php endif;?>
                    <td>
                        <a href="<?php echo $this->Html->url(array('controller' => 'member', 'action' => 'edit', 'admin' => true, $item['Member']['id'], 'type' => $typeId))?>"
                           class="btn btn-info btn-mini">编辑</a>
                        <a href="<?php echo $this->Html->url(array('controller' => 'member', 'action' => 'delete', 'admin' => true, $item['Member']['id'], 'type' => $typeId))?>"
                           class="btn btn-warning btn-mini delete">删除</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <?php echo $this->element('admin/pagination');?>
</div>
<?php $this->end();?>