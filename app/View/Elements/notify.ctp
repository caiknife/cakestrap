<div id="flashMessage" class="alert <?php echo isset($status) ? 'alert-' . $status : ''; ?> <?php echo isset($block) && $block ? 'alert-block' : ''; ?> text-center">
    <a class="close" data-dismiss="alert">×</a>
    <?php echo h($message)?>
</div>