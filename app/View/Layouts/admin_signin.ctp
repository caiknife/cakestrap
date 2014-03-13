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
    echo $this->Html->script('jquery/jquery-1.8.3.min.js');
    echo $this->Html->script('/themes/cerulean/js/bootstrap.min.js');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
    <!-- Le styles -->
    <style type="text/css">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 300px;
            padding: 19px 29px 29px;
            margin: 0 auto 20px;
            background-color: #fff;
            border: 1px solid #e5e5e5;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
            box-shadow: 0 1px 2px rgba(0,0,0,.05);
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            font-size: 16px;
            height: auto;
            margin-bottom: 15px;
            padding: 7px 9px;
        }
        /* Main marketing message and sign up button */
        .jumbotron {
            margin: 60px 0;
            text-align: center;
        }
        .jumbotron h1 {
            font-size: 60px;
            line-height: 1;
        }
    </style>
</head>
<body>
<?php echo $this->fetch('content');?>
<!-- /container -->
</body>
</html>
