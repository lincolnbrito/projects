<?php namespace LincolnBrito\Projects\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Teams Back-end Controller
 */
class Teams extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('LincolnBrito.Projects', 'projects', 'teams');
    }
}
