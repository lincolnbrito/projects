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

    /**
     * Create a Team
     * @return mixed
     */
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

    /**
     * Update the team
     * @param $teamId
     */
    public function update_onSave($teamId)
    {
        $inputs = post('Team');

        //update team
        $teamModel = Team::findOrFail($teamId);
        $teamModel->name = $inputs['name'];
        $teamModel->save();

        //update users team_id
        if(isset($inputs['users']) && count($inputs['users'])>0) {
            User::where('team_id', $teamModel->id)
                ->update(['team_id' => 0]);
            User::whereIn('id', $inputs['users'])
                ->update(['team_id' => $teamModel->id]);
        }

        Flash::success('Team updated successfully');
    }

    /**
     * Delete the team
     * @param $teamId
     * @return mixed
     */
    public function update_onDelete($teamId)
    {
        $teamModel = Team::findOrFail($teamId);
        //reset the team_id
        User::where('team_id', $teamModel->id)
            ->update(['team_id' => 0]);

        $teamModel->delete();

        Flash::success('Team deleted successfully');

        return $this->makeRedirect('delete', $teamModel);

    }

    public function formExtendFields($form)
    {
        if ( $form->getContext() == 'update' )
        {

            $team = $form->model;

            $userField = $form->getField('users');

            $userField->value = User::where('team_id', $team->id)->lists('id');;
        }
    }

}
