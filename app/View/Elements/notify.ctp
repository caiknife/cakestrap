<div id="flashMessage" class="alert alert-<?php echo isset($status) ? $status : 'block'; ?> text-center">
    <a class="close" data-dismiss="alert">×</a>
    <?php echo h($message)?>
</div>