<?php echo $this->Html->docType($name = 'html5');?>
<html>
<head>
    <?php echo $this->Html->charset();?>
    <title>Simple Layout</title>
    <?php echo $this->Html->script('jquery/jquery-1.8.3.min');?>
</head>
<body>
    <div id="container">
        <div id="header"></div>
        <div id="content">
            <?php $this->fetch('content');?>
        </div>
        <div id="footer"></div>
    </div>
</body>
</html>