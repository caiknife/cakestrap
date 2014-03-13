<?php echo $this->Html->docType('html5');?>
<html>
<head>
    <?php echo $this->Html->charset();?>
    <title><?php echo h($title_for_layout);?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('/bs/css/bootstrap.css');
    echo $this->Html->css('/bs/css/bootstrap-responsive.css');
    echo $this->Html->css('front/layout.css');
    echo $this->Html->script('jquery/jquery-1.8.3.min.js');
    echo $this->Html->script('/bs/js/bootstrap.min.js');
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
<body id="top">
    <?php echo $this->element('front/header')?>
    <?php echo $this->fetch('content');?>
    <?php echo $this->element('front/footer')?>
</body>
</html>