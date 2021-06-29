<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/wamp64/www/DMDExhibitions/user/plugins/flex-objects/blueprints/flex-objects.yaml',
    'modified' => 1624051935,
    'data' => [
        'type' => 'flex-objects',
        'form' => [
            'fields' => [
                'tools_section' => [
                    'type' => 'section',
                    'field_classes' => 'overlay bottom',
                    'fields' => [
                        '_post_entries_save' => [
                            'label' => 'PLUGIN_FLEX_OBJECTS.AFTER_SAVE',
                            'type' => 'save-redirect',
                            'default' => 'create-new'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
