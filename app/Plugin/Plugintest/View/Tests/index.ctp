<div>plugin controller: <?php debug($this->request->params['controller'])?></div>
<div>plugin action: <?php debug($this->request->params['action'])?></div>
<div>plugin name: <?php debug($this->request->params['plugin'])?></div>
<div>url with plugin: <?php debug($this->Html->url(array('controller' => 'tests')));?></div>
<div>url without plugin: <?php debug($this->Html->url(array('controller' => 'tests', 'plugin' => false)));?></div>