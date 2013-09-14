<section>
    <div class="container">
        <div class="row">
            <div class="span8">
                <label class="label label-info">代码标题</label>
                <p class="well well-small"><?php echo $code['Code']['title']?></p>
            </div>            
            <div class="span4">
                <label class="label label-info">语言类型</label>
                <p class="well well-small"><?php echo $code['Code']['type']?></p>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="pull-right">
                    <label class="label label-info">创建时间</label>
                    <span class="label label-success"><?php echo $code['Code']['created']?></span>
                    <label class="label label-info">修改时间</label>
                    <span class="label label-important"><?php echo $code['Code']['modified']?></span>
                </div>
                <label class="label label-info">代码内容</label>
                <pre><code data-language="<?php echo $code['Code']['type']?>"><?php echo h($code['CodeContent']['content'])?></code></pre>
            </div>
        </div>
    </div>
</section>
<?php echo $this->Html->css('/rainbow/themes/github.css')?>
<?php echo $this->Html->script(
    array(
        '/rainbow/rainbow.min.js',
        '/rainbow/generic.js',
        '/rainbow/language/' . $code['Code']['type'] . '.js',
    ), 
    array('inline'=>false))?>