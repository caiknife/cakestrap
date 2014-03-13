<section>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span2 bs-docs-sidebar dropdown clearfix">
                <?php echo $this->element('admin/member/menu');?>
            </div>
            <div class="span10">
                <?php echo $this->fetch('member_right');?>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
$(function(){

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