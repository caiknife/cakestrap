<?php $this->extend('admin_template');?>

<?php $this->start('content_right');?>
<div class="container-fluid">
    <div calss="row-fluid">
        <div class="alert alert-block alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>上传 Excel 文件注意事项</strong>
            <ul>
                <li>Excel 文件内必须在第一个 Worksheet 内填充数据 。</li>
                <li>Worksheet 内包含 18 列数据（ A - R ），否则无法上传成功。</li>
                <li>Worksheet 第一行数据必须是字段说明，不能填充需要上传的数据。</li>
                <li>请不要一次性上传过多数据。</li>
            </ul>
        </div>
    </div>
    <div class="row-fluid page-header">
        <div class="span7">
            <h4>人才库</h4>
        </div>
        <div class="span5 pull-right">
            <?php echo $this->Form->create('Trainee', array(
                'url'   => array(
                    'controller' => 'content',
                    'action'     => 'uploadtrainee',
                    'admin'      => true,
                ),
                'type'  => 'file',
                'class' => 'navbar-search form-search',
            ));?>
            <div>
                <?php echo $this->Form->file('upload');?>
                <button class="btn btn-success" type="submit">上传</button>
            </div>
            <?php echo $this->Form->end();?>
        </div>
    </div>
    <div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="span1">ID</th>
                    <th>姓名</th>
                    <th>身份证号</th>
                    <th>性别</th>
                    <th>所属行业</th>
                    <th>职务</th>
                    <th>职称</th>
                    <th class="span2">操作</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($trainees as $item):?>
                <tr>
                    <td><?php echo $item['Trainee']['id']?></td>
                    <td><?php echo h($item['Trainee']['name'])?></td>
                    <td><?php echo h($item['Trainee']['identity'])?></td>
                    <td><?php echo h($item['Trainee']['gender'])?></td>
                    <td><?php echo h($item['Trainee']['suoshuhangye'])?></td>
                    <td><?php echo h($item['Trainee']['zhiwu'])?></td>
                    <td><?php echo h($item['Trainee']['zhicheng'])?></td>
                    <td>
                        <a href="<?php echo $this->Html->url(array(
                            'controller' => 'content', 'action' => 'detailtrainee',
                            'admin' => true, $item['Trainee']['id'],
                        ))?>" class="btn btn-info btn-mini detail" data-toggle="modal" data-target="#myModal<?php echo $item['Trainee']['id']?>"
                           data-remote="<?php echo $this->Html->url(array(
                               'controller' => 'content', 'action' => 'detailtrainee',
                               'admin' => true, $item['Trainee']['id'],
                           ))?>">详细</a>
                        <a href="<?php echo $this->Html->url(array(
                            'controller' => 'content', 'action' => 'deletetrainee',
                            'admin' => true, $item['Trainee']['id'],
                        ))?>" class="btn btn-warning btn-mini delete">删除</a>
                        <!-- Modal -->
                        <div id="myModal<?php echo $item['Trainee']['id']?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">详细信息</h3>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <?php echo $this->element('admin/pagination');?>
</div>
<?php $this->end();?>