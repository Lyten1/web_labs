<?php namespace Vasya\Lab18\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class ControlerLab18 extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Vasya.Lab18', 'lab18');
    }
}
