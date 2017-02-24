<?php

return [
    'plugin' => [
        'name'              => 'Projects',
        'description'       => 'Manage your teams and projects.'
    ],
    'navigation' => [
        'projects' => [
            'label'=> 'Projects',
            'sideMenu' => [
                'projects' => 'Projects',
                'teams' => 'Teams'
            ]
        ]
    ],
    'permissions' => [
        'tab'               => 'Projects',
        'manage_projects'   => 'Manage Projects',
        'manage_teams'      => 'Manage Teams'
    ],
    'list' => [
        'list_title' => [
            'projects' => 'Manage Projects',
            'teams' => 'Manage Teams'
        ],
        'toolbar' => [
            'projects' => [
                'new_project' => 'New Project'
            ],
            'teams' => [
                'new_team' => 'New Team'
            ]
        ],
        'filter' => [
            'projects' => [
                'team' => 'Team',
                'hide_past_due' => 'Hide past due',
                'published_at' => 'Date'
            ],
            'teams' => []
        ],
        'columns' => [
            'projects' => [
                'id' => ['label' => 'ID'],
                'name' => ['label' => 'Name'],
                'description' => ['label' => 'Description'],
                'ends_at' => ['label' => 'Ends At'],
                'team' => ['label' => 'Team']
            ],
            'teams' => [
                'id' => ['label' => 'ID'],
                'name' => ['label' => 'Name'],
                'users' => ['label' => 'Users'],
            ]
        ]
    ],
    'form' => [
        'create' => [
            'form_title' => [
                'projects'  => 'Create Project',
                'teams'     => 'Create Team'
            ],
            'breadcrumb' => [
                'projects' => 'Projects',
                'teams'    => 'Teams'
            ],
            'fields' => [
                'projects' => [
                    'id'            => ['label'=>'ID'],
                    'name'          => ['label'=>'Name'],
                    'description'   => ['label'=>'Description'],
                    'ends_at'       => ['label'=>'Ends At'],
                    'team_id'       => ['label'=>'Team','placeholder'=>'Please, select a team'],
                ],
                'teams' => []
            ],
            'buttons' => [
                'create' => 'Create',
                'create_close' => 'Creante and Close',
                'or' => 'or',
                'cancel' => 'Cancel'
            ],
            'messages' => [
                'projects' => [
                    'creating_project' => 'Creating Project...'
                ],
                'teams' => [
                    'creating_team' => 'Creating Team...'
                ]
            ]
        ],
        'update' => [
            'form_title' => [
                'projects'  => 'Update Project',
                'teams'     => 'Update Team'
            ],
            'breadcrumb' => [
                'projects' => 'Projects',
                'teams'    => 'Teams'
            ],
            'buttons' => [
                'save' => "<u>S</u>ave",
                'save_close' => 'Save and close',
                'or' => 'or',
                'cancel' => 'Cancel'
            ],
            'messages' => [
                'projects' => [
                    'saving_project' => 'Saving Project...'
                ],
                'teams' => [
                    'saving_team' => 'Salving Team...'
                ]
            ]
        ],
        'preview' => [
            'form_title' => [
                'projects'  => 'Preview Project',
                'teams'     => 'Preview Team'
            ],
            'breadcrumb' => [
                'projects' => 'Projects',
                'teams'    => 'Teams'
            ],
        ]
    ]
];