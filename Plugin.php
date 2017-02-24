<?php namespace LincolnBrito\Projects;

use Backend;
use System\Classes\PluginBase;

/**
 * Projects Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Projects',
            'description' => 'Manage your teams and projects',
            'author'      => 'LincolnBrito',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {
        Backend\Models\User::extend(function($model){
           $model->belongsTo['team'] = ['\LincolnBrito\Projects\Models\Team'];
        });
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'LincolnBrito\Projects\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'lincolnbrito.projects.manage_teams' => [
                'tab' => 'Projects',
                'label' => 'Manage Teams'
            ],
            'lincolnbrito.projects.manage_projects' => [
                'tab' => 'Projects',
                'label' => 'Manage Projects'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'projects' => [
                'label'       => 'Projects',
                'url'         => Backend::url('lincolnbrito/projects/projects'),
                'icon'        => 'icon-leaf',
                'permissions' => ['lincolnbrito.projects.*'],
                'order'       => 500,
                'sideMenu' => [
                    'posts' => [
                        'label'       => 'Projects',
                        'icon'        => 'icon-cube',
                        'url'         => Backend::url('lincolnbrito/projects/projects'),
                        'permissions' => ['lincolnbrito.projects.manage_projects']
                    ],
                    'categories' => [
                        'label'       => 'Teams',
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('lincolnbrito/projects/teams'),
                        'permissions' => ['lincolnbrito.projects.manages_teams']
                    ]
                ]
            ],
        ];
    }
}
