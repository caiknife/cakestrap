<?php echo $this->Html->docType('html5');?>
<html>
<head>
    <?php echo $this->Html->charset();?>
    <title><?php echo h($title_for_layout);?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->meta(array('name' => 'viewport','content' => 'width=device-width, initial-scale=1.0'));
    echo $this->Html->css('/themes/cerulean/css/bootstrap.min.css');
    echo $this->Html->css('/themes/cerulean/css/bootstrap-responsive.min.css');
    echo $this->Html->css('admin/layout.css');
    echo $this->Html->script('jquery/jquery-1.8.3.min.js');
    echo $this->Html->script('/themes/cerulean/js/bootstrap.min.js');
    echo $this->Html->script('bootstrap-filestyle');
    echo $this->Html->script('jquery/jquery.noty.packaged.min.js');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <script type="text/javascript">
        $(function(){
            // prevent default click event;
            $('a').click(function(e){
                if ($(this).attr('href') == '#') {
                    return false;
                }
            });

            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();
        });
    </script>
</head>
<body id="top" data-spy="scroll" data-target=".main-menu" data-offset="80">
    <div class="navbar navbar-fixed-top">
        <?php echo $this->element('admin/header')?>
    </div>
    <div class="container-fluid">
        <?php echo $this->Session->flash();?>
        <?php echo $this->fetch('content');?>
    </div>
    <div class="navbar navbar-fixed-bottom">
        <?php echo $this->element('admin/footer')?>
    </div>
</body>
</html>