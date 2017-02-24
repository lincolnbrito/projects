<?php

return [
    'plugin' => [
        'name'              => 'Projetos',
        'description'       => 'Gerencie seus times e projetos.'
    ],
    'navigation' => [
        'projects' => [
            'label'=> 'Projetos',
            'sideMenu' => [
                'projects' => 'Projetos',
                'teams' => 'Times'
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
            'projects' => 'Gerenciar Projetos',
            'teams' => 'Gerenciar Times'
        ],
        'toolbar' => [
            'projects' => [
                'new_project' => 'Novo Projeto'
            ],
            'teams' => [
                'new_team' => 'Novo Time'
            ]
        ],
        'filter' => [
            'projects' => [
                'team' => 'Time',
                'hide_past_due' => 'Ocultar antigos',
                'published_at' => 'Data'
            ],
            'teams' => []
        ],
        'columns' => [
            'projects' => [
                'id' => ['label' => 'ID'],
                'name' => ['label' => 'Nome'],
                'description' => ['label' => 'Descrição'],
                'ends_at' => ['label' => 'Termina em'],
                'team' => ['label' => 'Time']
            ],
            'teams' => [
                'id' => ['label' => 'ID'],
                'name' => ['label' => 'Nome'],
                'users' => ['label' => 'Usuários'],
            ]
        ]
    ],
    'form' => [
        'create' => [
            'form_title' => [
                'projects'  => 'Criar Projeto',
                'teams'     => 'Criar Time'
            ],
            'breadcrumb' => [
                'projects' => 'Projetos',
                'teams'    => 'Times'
            ],
            'fields' => [
                'projects' => [
                    'id'            => ['label'=>'ID'],
                    'name'          => ['label'=>'Nome'],
                    'description'   => ['label'=>'Descrição'],
                    'ends_at'       => ['label'=>'Termina em'],
                    'team_id'       => ['label'=>'Time','placeholder'=>'Selecione um time'],
                ],
                'teams' => []
            ],
            'buttons' => [
                'create' => 'Criar',
                'create_close' => 'Criar e fechar',
                'or' => 'ou',
                'cancel' => 'Cancelar'
            ],
            'messages' => [
                'projects' => [
                    'creating_project' => 'Criando Projeto...'
                ],
                'teams' => [
                    'creating_team' => 'Criando Time...'
                ]
            ]
        ],
        'update' => [
            'form_title' => [
                'projects'  => 'Editar Projeto',
                'teams'     => 'Editar Time'
            ],
            'breadcrumb' => [
                'projects' => 'Projetos',
                'teams'    => 'Times'
            ],
            'buttons' => [
                'save' => "<u>S</u>alvar",
                'save_close' => 'Salvar e fechar',
                'or' => 'ou',
                'cancel' => 'Cancelar'
            ],
            'messages' => [
                'projects' => [
                    'saving_project' => 'Salvando Projeto...'
                ],
                'teams' => [
                    'saving_team' => 'Salvando Time...'
                ]
            ]
        ],
        'preview' => [
            'form_title' => [
                'projects'  => 'Pré-visualizar Projeto',
                'teams'     => 'Pré-visualizar Time'
            ],
        ]
    ]
];