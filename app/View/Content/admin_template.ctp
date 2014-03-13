<section>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2 bs-docs-sidebar dropdown clearfix">
                <?php echo $this->element('admin/content/menu');?>
            </div>
            <div class="span10">
                <?php echo $this->fetch('content_right');?>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
$(function(){

// 上传文件 file input 控件样式修改
$(':file').filestyle({
    buttonText: "请选择文件"
});

// 删除条目
$('a.delete').click(function(){
    var $this = $(this);
    if (confirm('确定删除该条记录？')) {
        $.get($this.attr('href'), function(data){
            window.location.reload();
        }, 'json');
    }
    return false;
});

});
</script>