<?php namespace LincolnBrito\Projects\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Projects Back-end Controller
 */
class Projects extends Controller
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

        BackendMenu::setContext('LincolnBrito.Projects', 'projects', 'projects');
    }

    public function listOverrideColumnValue( $record, $columnName )
    {
        if ( $columnName == 'description' && strlen($record->description) > 50 )
        {
            $description = substr($record->description, 0, 50);

            return "<span title='{$record->description}'>{$description}...</span>";
        }
    }
}
