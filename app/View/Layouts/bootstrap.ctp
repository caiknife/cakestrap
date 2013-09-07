<?php echo $this->Html->docType('html5');?>
<html lang="zh-CN">
<head>
    <?php echo $this->Html->charset();?>
    <title><?php echo $title_for_layout;?></title>
    <?php 
        echo $this->Html->meta('icon');
        echo $this->Html->meta(array('name' => 'viewport','content' => 'width=device-width, initial-scale=1.0'));
        echo $this->Html->css('bootstrap.min.css');
        echo $this->Html->css('bootstrap-responsive.min.css');
        echo $this->Html->css('other.css');
        echo $this->Html->script('jquery/jquery-1.8.3.min');
        echo $this->Html->script('bootstrap.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>
<body id="top" class="other-preview" data-spy="scroll" data-target=".other-subnav" data-offset="80">
    <div class="navbar navbar-fixed-top">
        <?php echo $this->element('bootstrap_header')?>
    </div>
    <div class="container">
        <?php echo $this->fetch('content');?>
    </div>
    <div class="navbar navbar-fixed-bottom">
        <?php echo $this->element('bootstrap_footer')?>
    </div>
</html>