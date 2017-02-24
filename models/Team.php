<?php namespace LincolnBrito\Projects\Models;

use Model;

/**
 * Team Model
 */
class Team extends Model
{
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
        'user'      => '\Backend\Models\User'
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
