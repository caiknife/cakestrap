<?php
class EventsController extends AppController {
    /**
     * [$uses description]
     * @var array
     */
    public $uses = array();

    /**
     * [beforeFilter description]
     * @return [type] [description]
     */
    public function beforeFilter() {
        parent::beforeFilter();
        
        $this->getEventManager()->attach(function($profile){
            pr('In an anonymous function.');
            pr($profile);
            // return 'anonymous function';
        }, 'Controller.events.index', array(
            'passParams' => true,
            'priority' => 2,
        ));

        $this->getEventManager()->attach('print_profile', 
            'Controller.events.index', 
            array(
                'passParams' => true,
                'priority' => 1,
            ));

        $this->getEventManager()->attach(array($this, '_profile'), 
            'Controller.events.index',
            array('priority' => -1)
        );

        $this->getEventManager()->attach(new ProfileListener());
    }
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index() {
        $event = new CakeEvent('Controller.events.index', 
            $this, 
            array(
                'profile' => func_get_args(),
            )
        );
        $this->getEventManager()->dispatch($event);

        debug($event->result);
    }

    public function _profile($event) {
        pr('In an class method.');
        pr($event->data);
        $event->result[__METHOD__] = 'class method';
    }
}

function print_profile($profile) {
    pr('In an pre-defined function.');
    pr($profile);
    // return 'pre-defined function';
}

class ProfileListener implements CakeEventListener {
    public function implementedEvents() {
        return array(
            'Controller.events.index' => array('callable' => 'profile' , 'priority' => -2),
        );
    }

    public function profile($event) {
        pr('In an class listener.');
        pr($event->data);
        $event->result[__METHOD__] = 'class method';
    }
}