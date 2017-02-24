<?php namespace LincolnBrito\Projects\Models;

use Backend\Models\User;
use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Team Model
 */
class Team extends Model
{
    use Validation;

    public $rules = [
        'name' => 'required'
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'lincolnbrito_projects_teams';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [
        'projects'  => '\LincolnBrito\Projects\Models\Projects',
        'users'      => '\Backend\Models\User'
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

    public function getUsersOptions()
    {
        return User::lists('login','id');
    }
}
