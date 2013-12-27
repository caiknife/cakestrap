<section>
    <h2>代码列表</h2>
    <div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>代码标题</th>
                    <th>语言类型</th>
                    <th>创建时间</th>
                    <th>修改时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($codes as $code):?>
                <tr>
                    <td><?php echo h($code['Code']['title'])?></td>
                    <td><?php echo h($code['Code']['type'])?></td>
                    <td><?php echo h($code['Code']['created'])?></td>
                    <td><?php echo h($code['Code']['modified'])?></td>
                    <td>
                        <a class="btn btn-info btn-small" href="<?php echo $this->Html->url(array('action'=>'view', $code['Code']['id']))?>">去看看</a>
                    </td> 
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <?php echo $this->element('pagination');?>
</section>