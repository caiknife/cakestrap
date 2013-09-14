<section>
    <div class="container">
        <?php echo $this->Form->create('Code', 
            array(
                'type' => 'post', 
                'url'  => array(
                    'controller' => 'code',
                    'action'     => 'add',
                )
            )
        );?>
        <div class="row">
            <div class="span8">
                <label class="label label-info">代码标题</label>
                <p><?php echo $this->Form->text('title', array('class' => 'input-block-level'));?></p>
            </div>
            <div class="span4">
                <label class="label label-info">语言类型</label>
                <p><?php echo $this->Form->select('type', $langTypes, array('class' => 'input-block-level', 'empty' => false))?></p>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <label class="label label-info">代码内容</label>
                <p><?php echo $this->Form->textarea('CodeContent.content', array('class' => 'input-block-level', 'rows' => 12));?></p>
            </div>
        </div>
        <div class="row">
            <div class="span2 offset4">
                <?php echo $this->Form->button('提 交', array('class'=>'btn btn-primary input-block-level', 'type' => 'submit'));?>
            </div>
            <div class="span2">
                <?php echo $this->Form->button('重 置', array('class'=>'btn btn-warning input-block-level', 'type' => 'reset'));?>
            </div>
        </div>
        <?php echo $this->Form->end();?>
    </div>
</section>

