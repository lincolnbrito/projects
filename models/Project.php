<?php namespace LincolnBrito\Projects\Models;

use Model;

/**
 * Project Model
 */
class Project extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'lincolnbrito_projects_projects';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Dates
     */
    protected $dates = ['ends_at'];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
        'team' => '\LincolnBrito\Projects\Models\Team'
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getTeamIdOptions()
    {
        $teams = Team::all(['id','name']);
        $teamsOptions = [];

        $teams->each( function($team) use (&$teamsOptions) {
           $teamsOptions[$team->id]  = $team->name;
        });

        return $teamsOptions;
    }
}
