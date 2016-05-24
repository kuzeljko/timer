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
);
