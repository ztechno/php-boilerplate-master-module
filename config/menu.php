<?php

return [
    [
        'label' => 'master.menu.master',
        'icon'  => 'fa-fw fa-xl me-2 fa-solid fa-table',
        'activeState' => [
            'master.master_academic_years',
            'master.master_people',
            'master.master_study_groups',
            'master.master_study_group_level',
            'master.master_study_subjects',
        ],
        'items' => [
            [
                'label' => 'master.menu.academic_years',
                'route' => routeTo('crud/index',['table'=>'master_academic_years']),
                'activeState' => 'master.master_academic_years',
            ],
            [
                'label' => 'master.menu.people',
                'route' => routeTo('crud/index',['table'=>'master_people']),
                'activeState' => 'master.master_people'
            ],
            [
                'label' => 'master.menu.study_groups',
                'route' => routeTo('crud/index',['table'=>'master_study_groups']),
                'activeState' => 'master.master_study_groups'
            ],
            [
                'label' => 'master.menu.study_subjects',
                'route' => routeTo('crud/index',['table'=>'master_study_subjects']),
                'activeState' => 'master.master_study_subjects'
            ],
        ]
    ],
];