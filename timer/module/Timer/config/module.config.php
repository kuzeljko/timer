<?php
return array(
  'controllers' => array(
    'invokables' => array(
      'Timer\Controller\Timer' => 'Timer\Controller\TimerController',
    ),
  ),

  'view_manager' => array(
    'template_path_stack' => array(
      'timer' => __DIR__ . '/../view',
    ),
  ),

  'router' => array(
    'routes' => array(
      'timer' => array(
        'type'=> 'segment',
        'options' => array(
          'route' => '/timer[/:action][/:id]',
          'constraints' => array(
            'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
            'id' => '[0-9]+',
          ),
        ),
        'defaults' => array(
                        '__NAMESPACE__' => 'Timer\Controller',
          'controller' => 'Timer\Controller\Timer',
          'action' => 'index',
        ),
      ),
    ),
  ),

);
