<?php

return [
    'list' => [
        'filter' => [],
        'toolbar' => [
            'buttons' => [
                'create' => [
                    'label' => 'lang:admin::lang.button_new',
                    'class' => 'btn btn-primary',
                    //    'href' => 'test/helloworld/{{lower_plural_name}}/create'
                    'href' => 'test/helloworld/child1/create'
                ],
                'delete' => [
                    'label' => 'lang:admin::lang.button_delete',
                    'class' => 'btn btn-danger',
                    'data-attach-loading' => '',
                    'data-request-form' => '#list-form',
                    'data-request' => 'onDelete',
                    'data-request-data' => "_method:'DELETE'",
                    'data-request-confirm' => 'lang:admin::lang.alert_warning_confirm'
                ],
            ],
        ],
        'columns' => [
            'id' => [
                'label' => 'ID'
            ],
            'text' => [
                'label' => 'Text'
            ]
        ],
    ],
    'form' => [
        'toolbar' => [
            'buttons' => [
                'save' => [
                    'label' => 'lang:admin::lang.button_save',
                    'partial' => 'form/toolbar_save_button',
                    'class' => 'btn btn-primary',
                    'data-request' => 'onSave',
                    'data-progress-indicator' => 'lang:admin::lang.text_saving'
                ],
                'delete' => [
                    'label' => 'lang:admin::lang.button_icon_delete', 'class' => 'btn btn-danger',
                    'data-request' => 'onDelete', 'data-request-data' => "_method:'DELETE'",
                    'data-progress-indicator' => 'lang:admin::lang.text_deleting',
                    'data-request-confirm' => 'lang:admin::lang.alert_warning_confirm', 'context' => ['edit'],
                ],
            ],
        ],
        'fields' => [],
        'tabs' => [
            'fields' => [
                'id' => [
                    'label' => 'ID',
                    'type' => 'number',
                ],
                'text' => [
                    'label' => 'Text',
                    'type' => 'text',
                ]
            ]
        ]
    ],
];
