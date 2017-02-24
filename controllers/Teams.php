<?php namespace LincolnBrito\Projects\Controllers;

use Backend\Models\User;
use BackendMenu;
use Backend\Classes\Controller;
use LincolnBrito\Projects\Models\Team;
use October\Rain\Support\Facades\Flash;

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

    public function create_onSave()
    {
        $inputs = post('Team');

        //save the team
        $teamModel = new Team;
        $teamModel->name = $inputs['name'];
        $teamModel->save();

        if(isset($inputs['users']) && count($inputs['users'])>0){
            // update users team_id
            User::whereIn('id', $inputs['users'])
                ->update(['team_id' => $teamModel->id]);
        }

        Flash::success("Team saved sucessfully");

        return $this->makeRedirect('update',$teamModel);
    }
}
