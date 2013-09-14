/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.24 : Database - ckpage
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `code_contents` */

DROP TABLE IF EXISTS `code_contents`;

CREATE TABLE `code_contents` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `code_contents` */

LOCK TABLES `code_contents` WRITE;

insert  into `code_contents`(`id`,`created`,`modified`,`content`) values (1,'2013-09-14 16:02:21','2013-09-14 16:02:21','<?php\r\n/**\r\n * Index\r\n *\r\n * The Front Controller for handling every request\r\n *\r\n * PHP 5\r\n *\r\n * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)\r\n * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)\r\n *\r\n * Licensed under The MIT License\r\n * For full copyright and license information, please see the LICENSE.txt\r\n * Redistributions of files must retain the above copyright notice.\r\n *\r\n * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)\r\n * @link          http://cakephp.org CakePHP(tm) Project\r\n * @package       app.webroot\r\n * @since         CakePHP(tm) v 0.2.9\r\n * @license       http://www.opensource.org/licenses/mit-license.php MIT License\r\n */\r\n\r\n/**\r\n * Use the DS to separate the directories in other defines\r\n */\r\nif (!defined(\'DS\')) {\r\n	define(\'DS\', DIRECTORY_SEPARATOR);\r\n}\r\n\r\n/**\r\n * These defines should only be edited if you have cake installed in\r\n * a directory layout other than the way it is distributed.\r\n * When using custom settings be sure to use the DS and do not add a trailing DS.\r\n */\r\n\r\n/**\r\n * The full path to the directory which holds \"app\", WITHOUT a trailing DS.\r\n *\r\n */\r\nif (!defined(\'ROOT\')) {\r\n	define(\'ROOT\', dirname(dirname(dirname(__FILE__))));\r\n}\r\n\r\n/**\r\n * The actual directory name for the \"app\".\r\n *\r\n */\r\nif (!defined(\'APP_DIR\')) {\r\n	define(\'APP_DIR\', basename(dirname(dirname(__FILE__))));\r\n}\r\n\r\n/**\r\n * The absolute path to the \"cake\" directory, WITHOUT a trailing DS.\r\n *\r\n * Un-comment this line to specify a fixed path to CakePHP.\r\n * This should point at the directory containing `Cake`.\r\n *\r\n * For ease of development CakePHP uses PHP\'s include_path. If you\r\n * cannot modify your include_path set this value.\r\n *\r\n * Leaving this constant undefined will result in it being defined in Cake/bootstrap.php\r\n *\r\n * The following line differs from its sibling\r\n * /lib/Cake/Console/Templates/skel/webroot/index.php\r\n */\r\n//define(\'CAKE_CORE_INCLUDE_PATH\', ROOT . DS . \'lib\');\r\n\r\n/**\r\n * Editing below this line should NOT be necessary.\r\n * Change at your own risk.\r\n *\r\n */\r\nif (!defined(\'WEBROOT_DIR\')) {\r\n	define(\'WEBROOT_DIR\', basename(dirname(__FILE__)));\r\n}\r\nif (!defined(\'WWW_ROOT\')) {\r\n	define(\'WWW_ROOT\', dirname(__FILE__) . DS);\r\n}\r\n\r\n// for built-in server\r\nif (php_sapi_name() == \'cli-server\') {\r\n	$uri = str_replace($_SERVER[\'SCRIPT_FILENAME\'], WWW_ROOT, \'\');\r\n	if ($_SERVER[\'REQUEST_URI\'] !== \'/\' && file_exists(WWW_ROOT . $uri)) {\r\n		return false;\r\n	}\r\n	$_SERVER[\'PHP_SELF\'] = \'/\' . basename(__FILE__);\r\n}\r\n\r\nif (!defined(\'CAKE_CORE_INCLUDE_PATH\')) {\r\n	if (function_exists(\'ini_set\')) {\r\n		ini_set(\'include_path\', ROOT . DS . \'lib\' . PATH_SEPARATOR . ini_get(\'include_path\'));\r\n	}\r\n	if (!include (\'Cake\' . DS . \'bootstrap.php\')) {\r\n		$failed = true;\r\n	}\r\n} else {\r\n	if (!include (CAKE_CORE_INCLUDE_PATH . DS . \'Cake\' . DS . \'bootstrap.php\')) {\r\n		$failed = true;\r\n	}\r\n}\r\nif (!empty($failed)) {\r\n	trigger_error(\"CakePHP core could not be found. Check the value of CAKE_CORE_INCLUDE_PATH in APP/webroot/index.php. It should point to the directory containing your \" . DS . \"cake core directory and your \" . DS . \"vendors root directory.\", E_USER_ERROR);\r\n}\r\n\r\nApp::uses(\'Dispatcher\', \'Routing\');\r\n\r\n$Dispatcher = new Dispatcher();\r\n$Dispatcher->dispatch(\r\n	new CakeRequest(),\r\n	new CakeResponse()\r\n);\r\n'),(2,'2013-09-14 16:37:21','2013-09-14 16:37:21','    $(function(){\r\n        // prevent default click event;\r\n        $(\'a\').click(function(e){\r\n            if ($(this).attr(\'href\') == \'#\') {\r\n                e.preventDefault();\r\n            }\r\n        });\r\n\r\n        $(\'[data-toggle=\"tooltip\"]\').tooltip();\r\n        $(\'[data-toggle=\"popover\"]\').popover();\r\n\r\n        // back to top link show and hide\r\n        var $win = $(window),\r\n            $backToTop = $(\'a#backToTop\');\r\n\r\n            $win.on(\'scroll\', function(){\r\n                if ( $win.scrollTop() >= $win.height() ) {\r\n                    $(\'a#backToTop\').show();    \r\n                } else {\r\n                    $(\'a#backToTop\').hide();\r\n                }\r\n            }).scroll();\r\n    });'),(3,'2013-09-14 17:45:39','2013-09-14 17:45:39','<section>\r\n    <div class=\"container\">\r\n        <?php echo $this->Form->create(\'Code\', \r\n            array(\r\n                \'type\' => \'post\', \r\n                \'url\'  => array(\r\n                    \'controller\' => \'code\',\r\n                    \'action\'     => \'add\',\r\n                )\r\n            )\r\n        );?>\r\n        <div class=\"row\">\r\n            <div class=\"span8\">\r\n                <label class=\"label label-info\">代码标题</label>\r\n                <p><?php echo $this->Form->text(\'title\', array(\'class\' => \'input-block-level\'));?></p>\r\n            </div>\r\n            <div class=\"span4\">\r\n                <label class=\"label label-info\">语言类型</label>\r\n                <p><?php echo $this->Form->select(\'type\', $langTypes, array(\'class\' => \'input-block-level\', \'empty\' => false))?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span12\">\r\n                <label class=\"label label-info\">代码内容</label>\r\n                <p><?php echo $this->Form->textarea(\'CodeContent.content\', array(\'class\' => \'input-block-level\', \'rows\' => 12));?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span2 offset4\">\r\n                <?php echo $this->Form->button(\'提 交\', array(\'class\'=>\'btn btn-primary input-block-level\', \'type\' => \'submit\'));?>\r\n            </div>\r\n            <div class=\"span2\">\r\n                <?php echo $this->Form->button(\'重 置\', array(\'class\'=>\'btn btn-warning input-block-level\', \'type\' => \'reset\'));?>\r\n            </div>\r\n        </div>\r\n        <?php echo $this->Form->end();?>\r\n    </div>\r\n</section>'),(4,'2013-09-14 17:49:29','2013-09-14 17:49:29','<section>\r\n    <div class=\"container\">\r\n        <?php echo $this->Form->create(\'Code\', \r\n            array(\r\n                \'type\' => \'post\', \r\n                \'url\'  => array(\r\n                    \'controller\' => \'code\',\r\n                    \'action\'     => \'add\',\r\n                )\r\n            )\r\n        );?>\r\n        <div class=\"row\">\r\n            <div class=\"span8\">\r\n                <label class=\"label label-info\">代码标题</label>\r\n                <p><?php echo $this->Form->text(\'title\', array(\'class\' => \'input-block-level\'));?></p>\r\n            </div>\r\n            <div class=\"span4\">\r\n                <label class=\"label label-info\">语言类型</label>\r\n                <p><?php echo $this->Form->select(\'type\', $langTypes, array(\'class\' => \'input-block-level\', \'empty\' => false))?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span12\">\r\n                <label class=\"label label-info\">代码内容</label>\r\n                <p><?php echo $this->Form->textarea(\'CodeContent.content\', array(\'class\' => \'input-block-level\', \'rows\' => 12));?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span2 offset4\">\r\n                <?php echo $this->Form->button(\'提 交\', array(\'class\'=>\'btn btn-primary input-block-level\', \'type\' => \'submit\'));?>\r\n            </div>\r\n            <div class=\"span2\">\r\n                <?php echo $this->Form->button(\'重 置\', array(\'class\'=>\'btn btn-warning input-block-level\', \'type\' => \'reset\'));?>\r\n            </div>\r\n        </div>\r\n        <?php echo $this->Form->end();?>\r\n    </div>\r\n</section>'),(5,'2013-09-14 17:50:33','2013-09-14 17:50:33','<section>\r\n    <div class=\"container\">\r\n        <?php echo $this->Form->create(\'Code\', \r\n            array(\r\n                \'type\' => \'post\', \r\n                \'url\'  => array(\r\n                    \'controller\' => \'code\',\r\n                    \'action\'     => \'add\',\r\n                )\r\n            )\r\n        );?>\r\n        <div class=\"row\">\r\n            <div class=\"span8\">\r\n                <label class=\"label label-info\">代码标题</label>\r\n                <p><?php echo $this->Form->text(\'title\', array(\'class\' => \'input-block-level\'));?></p>\r\n            </div>\r\n            <div class=\"span4\">\r\n                <label class=\"label label-info\">语言类型</label>\r\n                <p><?php echo $this->Form->select(\'type\', $langTypes, array(\'class\' => \'input-block-level\', \'empty\' => false))?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span12\">\r\n                <label class=\"label label-info\">代码内容</label>\r\n                <p><?php echo $this->Form->textarea(\'CodeContent.content\', array(\'class\' => \'input-block-level\', \'rows\' => 12));?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span2 offset4\">\r\n                <?php echo $this->Form->button(\'提 交\', array(\'class\'=>\'btn btn-primary input-block-level\', \'type\' => \'submit\'));?>\r\n            </div>\r\n            <div class=\"span2\">\r\n                <?php echo $this->Form->button(\'重 置\', array(\'class\'=>\'btn btn-warning input-block-level\', \'type\' => \'reset\'));?>\r\n            </div>\r\n        </div>\r\n        <?php echo $this->Form->end();?>\r\n    </div>\r\n</section>'),(6,'2013-09-14 17:51:54','2013-09-14 17:51:54','<section>\r\n    <div class=\"container\">\r\n        <?php echo $this->Form->create(\'Code\', \r\n            array(\r\n                \'type\' => \'post\', \r\n                \'url\'  => array(\r\n                    \'controller\' => \'code\',\r\n                    \'action\'     => \'add\',\r\n                )\r\n            )\r\n        );?>\r\n        <div class=\"row\">\r\n            <div class=\"span8\">\r\n                <label class=\"label label-info\">代码标题</label>\r\n                <p><?php echo $this->Form->text(\'title\', array(\'class\' => \'input-block-level\'));?></p>\r\n            </div>\r\n            <div class=\"span4\">\r\n                <label class=\"label label-info\">语言类型</label>\r\n                <p><?php echo $this->Form->select(\'type\', $langTypes, array(\'class\' => \'input-block-level\', \'empty\' => false))?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span12\">\r\n                <label class=\"label label-info\">代码内容</label>\r\n                <p><?php echo $this->Form->textarea(\'CodeContent.content\', array(\'class\' => \'input-block-level\', \'rows\' => 12));?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span2 offset4\">\r\n                <?php echo $this->Form->button(\'提 交\', array(\'class\'=>\'btn btn-primary input-block-level\', \'type\' => \'submit\'));?>\r\n            </div>\r\n            <div class=\"span2\">\r\n                <?php echo $this->Form->button(\'重 置\', array(\'class\'=>\'btn btn-warning input-block-level\', \'type\' => \'reset\'));?>\r\n            </div>\r\n        </div>\r\n        <?php echo $this->Form->end();?>\r\n    </div>\r\n</section>'),(7,'2013-09-14 17:52:39','2013-09-14 17:52:39','<section>\r\n    <div class=\"container\">\r\n        <?php echo $this->Form->create(\'Code\', \r\n            array(\r\n                \'type\' => \'post\', \r\n                \'url\'  => array(\r\n                    \'controller\' => \'code\',\r\n                    \'action\'     => \'add\',\r\n                )\r\n            )\r\n        );?>\r\n        <div class=\"row\">\r\n            <div class=\"span8\">\r\n                <label class=\"label label-info\">代码标题</label>\r\n                <p><?php echo $this->Form->text(\'title\', array(\'class\' => \'input-block-level\'));?></p>\r\n            </div>\r\n            <div class=\"span4\">\r\n                <label class=\"label label-info\">语言类型</label>\r\n                <p><?php echo $this->Form->select(\'type\', $langTypes, array(\'class\' => \'input-block-level\', \'empty\' => false))?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span12\">\r\n                <label class=\"label label-info\">代码内容</label>\r\n                <p><?php echo $this->Form->textarea(\'CodeContent.content\', array(\'class\' => \'input-block-level\', \'rows\' => 12));?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span2 offset4\">\r\n                <?php echo $this->Form->button(\'提 交\', array(\'class\'=>\'btn btn-primary input-block-level\', \'type\' => \'submit\'));?>\r\n            </div>\r\n            <div class=\"span2\">\r\n                <?php echo $this->Form->button(\'重 置\', array(\'class\'=>\'btn btn-warning input-block-level\', \'type\' => \'reset\'));?>\r\n            </div>\r\n        </div>\r\n        <?php echo $this->Form->end();?>\r\n    </div>\r\n</section>'),(8,'2013-09-14 17:52:52','2013-09-14 17:52:52','<section>\r\n    <div class=\"container\">\r\n        <?php echo $this->Form->create(\'Code\', \r\n            array(\r\n                \'type\' => \'post\', \r\n                \'url\'  => array(\r\n                    \'controller\' => \'code\',\r\n                    \'action\'     => \'add\',\r\n                )\r\n            )\r\n        );?>\r\n        <div class=\"row\">\r\n            <div class=\"span8\">\r\n                <label class=\"label label-info\">代码标题</label>\r\n                <p><?php echo $this->Form->text(\'title\', array(\'class\' => \'input-block-level\'));?></p>\r\n            </div>\r\n            <div class=\"span4\">\r\n                <label class=\"label label-info\">语言类型</label>\r\n                <p><?php echo $this->Form->select(\'type\', $langTypes, array(\'class\' => \'input-block-level\', \'empty\' => false))?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span12\">\r\n                <label class=\"label label-info\">代码内容</label>\r\n                <p><?php echo $this->Form->textarea(\'CodeContent.content\', array(\'class\' => \'input-block-level\', \'rows\' => 12));?></p>\r\n            </div>\r\n        </div>\r\n        <div class=\"row\">\r\n            <div class=\"span2 offset4\">\r\n                <?php echo $this->Form->button(\'提 交\', array(\'class\'=>\'btn btn-primary input-block-level\', \'type\' => \'submit\'));?>\r\n            </div>\r\n            <div class=\"span2\">\r\n                <?php echo $this->Form->button(\'重 置\', array(\'class\'=>\'btn btn-warning input-block-level\', \'type\' => \'reset\'));?>\r\n            </div>\r\n        </div>\r\n        <?php echo $this->Form->end();?>\r\n    </div>\r\n</section>'),(9,'2013-09-14 17:55:10','2013-09-14 17:55:10','<?php echo $this->Session->flash(); ?>'),(10,'2013-09-14 18:11:50','2013-09-14 18:11:50','<textarea id=\"CodeContentContent\" class=\"input-block-level\" required=\"required\" rows=\"12\" name=\"data[CodeContent][content]\"></textarea>'),(11,'2013-09-14 18:13:56','2013-09-14 18:13:56','<textarea id=\"CodeContentContent\" class=\"input-block-level\" required=\"required\" rows=\"12\" name=\"data[CodeContent][content]\"></textarea>');

UNLOCK TABLES;

/*Table structure for table `codes` */

DROP TABLE IF EXISTS `codes`;

CREATE TABLE `codes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `content_id` int(10) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

/*Data for the table `codes` */

LOCK TABLES `codes` WRITE;

insert  into `codes`(`id`,`created`,`modified`,`title`,`content_id`,`type`) values (1,'2013-09-14 16:02:21','2013-09-14 16:02:21','PHP Test Code',1,'php'),(2,'2013-09-14 16:37:21','2013-09-14 16:37:21','javascript code test',2,'javascript'),(6,'2013-09-14 17:45:39','2013-09-14 17:45:39','PHP + HTML混合输入',3,'php'),(7,'2013-09-14 17:49:29','2013-09-14 17:49:29','PHP + HTML混合输入',4,'php'),(8,'2013-09-14 17:50:33','2013-09-14 17:50:33','PHP + HTML混合输入',5,'php'),(9,'2013-09-14 17:51:54','2013-09-14 17:51:54','PHP + HTML混合输入',6,'php'),(10,'2013-09-14 17:52:39','2013-09-14 17:52:39','PHP + HTML混合输入',7,'php'),(11,'2013-09-14 17:52:52','2013-09-14 17:52:52','PHP + HTML混合输入',8,'php'),(12,'2013-09-14 17:55:10','2013-09-14 17:55:10','PHP + HTML混合输入',9,'c'),(13,'2013-09-14 18:11:50','2013-09-14 18:11:50','javascript code test',10,'html'),(14,'2013-09-14 18:13:56','2013-09-14 18:13:56','PHP + HTML混合输入',11,'html');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
