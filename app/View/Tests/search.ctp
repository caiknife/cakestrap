<div>
    <?= $this->element('tests/h1')?>
    <p>You query word is: <strong><?= $content?></strong></p>
    <div>
        <?= $this->Form->create('Search', 
                array(
                    'type' => 'post', 
                    'url' => array(
                        'controller' => $this->request->params['controller'],
                        'action' => $this->request->params['action'],
                    )
                )
            )?>
        <?= $this->Form->text('query')?>
        <?= $this->Form->submit('Search')?>
        <?= $this->Form->end()?>
    </div>
</div>
