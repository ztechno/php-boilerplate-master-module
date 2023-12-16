<?php 

return [
    'master_academic_years' => [
        'name' => [
            'label' => __('master.label.name'), 
            'type' => 'text', 
        ],
        'description' => [
            'label' => __('master.label.description'), 
            'type' => 'textarea', 
        ],
        'status' => [
            'label' => __('master.label.status'), 
            'type' => 'options:ACTIVE|INACTIVE', 
        ],
    ],
    'master_people' => [
        'code' => [
            'label' => __('master.label.code'),
            'type'  => 'text'
        ],
        'name' => [
            'label' => __('master.label.name'),
            'type'  => 'text'
        ],
        'address' => [
            'label' => __('master.label.address'),
            'type'  => 'textarea'
        ],
        'phone' => [
            'label' => __('master.label.phone'),
            'type'  => 'tel'
        ],
        'email' => [
            'label' => __('master.label.email'),
            'type'  => 'email'
        ],
        'gender' => [
            'label' => __('master.label.gender'),
            'type'  => 'options:MALE|FEMALE'
        ],
        'pic_url' => [
            'label' => __('master.label.pic_url'),
            'type'  => 'file'
        ],
    ],
    'master_study_groups' => [
        'name' => [
            'label' => __('master.label.name'),
            'type'  => 'text'
        ],
    ],
    'master_study_group_level' => [
        'study_group_id' => [
            'label' => __('master.label.study_group'),
            'type'  => 'options-obj:master_study_groups,id,name'
        ],
        'name' => [
            'label' => __('master.label.name'),
            'type'  => 'text'
        ],
        'level' => [
            'label' => __('master.label.level'),
            'type'  => 'number'
        ],
    ],
    'master_study_subjects' => [
        'name' => [
            'label' => __('master.label.name'),
            'type'  => 'text'
        ],
    ],
];