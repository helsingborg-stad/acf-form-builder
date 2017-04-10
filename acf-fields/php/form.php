<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_58eb301ecb36a',
    'title' => __('Form', 'modularity-form-builder'),
    'fields' => array(
        0 => array(
            'layouts' => array(
                0 => array(
                    'key' => '58eb3033e588f',
                    'name' => 'sender',
                    'label' => 'Sender',
                    'display' => 'block',
                    'sub_fields' => array(
                        0 => array(
                            'layout' => 'vertical',
                            'choices' => array(
                                'firstname' => 'Firstname',
                                'lastname' => 'Lastname',
                                'email' => 'Email',
                                'phone' => 'Phone',
                                'address' => 'Address',
                            ),
                            'default_value' => array(
                                0 => 'firstname',
                                1 => 'lastname',
                                2 => 'email',
                            ),
                            'allow_custom' => 0,
                            'save_custom' => 0,
                            'toggle' => 0,
                            'return_format' => 'value',
                            'key' => 'field_58eb3944f7086',
                            'label' => 'Fields to display',
                            'name' => 'fields',
                            'type' => 'checkbox',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        1 => array(
                            'layout' => 'vertical',
                            'choices' => array(
                                'firstname' => 'Firstname',
                                'lastname' => 'Lastname',
                                'email' => 'Email',
                                'phone' => 'Phone',
                                'address' => 'Address',
                            ),
                            'default_value' => array(
                                0 => 'firstname',
                                1 => 'lastname',
                                2 => 'email',
                            ),
                            'allow_custom' => 0,
                            'save_custom' => 0,
                            'toggle' => 0,
                            'return_format' => 'value',
                            'key' => 'field_58eb3a9bf7087',
                            'label' => 'Required fields',
                            'name' => 'required_fields',
                            'type' => 'checkbox',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                1 => array(
                    'key' => '58eb3f2cd914a',
                    'name' => 'message',
                    'label' => 'Message',
                    'display' => 'block',
                    'sub_fields' => array(
                        0 => array(
                            'default_value' => 'Message',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'key' => 'field_58eb3f37d914b',
                            'label' => 'Field label',
                            'name' => 'label',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        1 => array(
                            'default_value' => 0,
                            'message' => 'Required field',
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                            'key' => 'field_58eb3f5ed914c',
                            'label' => 'Required',
                            'name' => 'required',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                2 => array(
                    'key' => '58eb552a8189e',
                    'name' => 'input',
                    'label' => 'Input',
                    'display' => 'block',
                    'sub_fields' => array(
                        0 => array(
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'key' => 'field_58eb55338189f',
                            'label' => 'Field label',
                            'name' => 'label',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        1 => array(
                            'multiple' => 0,
                            'allow_null' => 0,
                            'choices' => array(
                                'text' => 'Text',
                                'number' => 'Number',
                                'email' => 'Email',
                                'tel' => 'Phone number',
                                'color' => 'Color',
                                'date' => 'Date',
                                'month' => 'Month',
                                'week' => 'Week',
                                'range' => 'Range',
                                'search' => 'Search',
                                'time' => 'Time',
                                'url' => 'Url',
                            ),
                            'default_value' => array(
                            ),
                            'ui' => 0,
                            'ajax' => 0,
                            'placeholder' => '',
                            'return_format' => 'value',
                            'key' => 'field_58eb5547818a0',
                            'label' => 'Field value type',
                            'name' => 'value_type',
                            'type' => 'select',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        2 => array(
                            'default_value' => '',
                            'min' => '',
                            'max' => '',
                            'step' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'key' => 'field_58eb572440304',
                            'label' => 'Min value',
                            'name' => 'min_value',
                            'type' => 'number',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                0 => array(
                                    0 => array(
                                        'field' => 'field_58eb5547818a0',
                                        'operator' => '==',
                                        'value' => 'number',
                                    ),
                                ),
                                1 => array(
                                    0 => array(
                                        'field' => 'field_58eb5547818a0',
                                        'operator' => '==',
                                        'value' => 'range',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '33.3333',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        3 => array(
                            'default_value' => '',
                            'min' => '',
                            'max' => '',
                            'step' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'key' => 'field_58eb574140305',
                            'label' => 'Max value',
                            'name' => 'max_value',
                            'type' => 'number',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                0 => array(
                                    0 => array(
                                        'field' => 'field_58eb5547818a0',
                                        'operator' => '==',
                                        'value' => 'number',
                                    ),
                                ),
                                1 => array(
                                    0 => array(
                                        'field' => 'field_58eb5547818a0',
                                        'operator' => '==',
                                        'value' => 'range',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '33.3333',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        4 => array(
                            'default_value' => '',
                            'min' => '',
                            'max' => '',
                            'step' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'key' => 'field_58eb57a645640',
                            'label' => 'Step',
                            'name' => 'step',
                            'type' => 'number',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                0 => array(
                                    0 => array(
                                        'field' => 'field_58eb5547818a0',
                                        'operator' => '==',
                                        'value' => 'number',
                                    ),
                                ),
                                1 => array(
                                    0 => array(
                                        'field' => 'field_58eb5547818a0',
                                        'operator' => '==',
                                        'value' => 'range',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '33.3333',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        5 => array(
                            'display_format' => 'Y-m-d',
                            'return_format' => 'Y-m-d',
                            'first_day' => 1,
                            'key' => 'field_58eb62d1ec890',
                            'label' => 'Min date',
                            'name' => 'min_value',
                            'type' => 'date_picker',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                0 => array(
                                    0 => array(
                                        'field' => 'field_58eb5547818a0',
                                        'operator' => '==',
                                        'value' => 'date',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        6 => array(
                            'display_format' => 'Y-m-d',
                            'return_format' => 'Y-m-d',
                            'first_day' => 1,
                            'key' => 'field_58eb62feec891',
                            'label' => 'Max date',
                            'name' => 'max_value',
                            'type' => 'date_picker',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => array(
                                0 => array(
                                    0 => array(
                                        'field' => 'field_58eb5547818a0',
                                        'operator' => '==',
                                        'value' => 'date',
                                    ),
                                ),
                            ),
                            'wrapper' => array(
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        7 => array(
                            'default_value' => 0,
                            'message' => 'Required',
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                            'key' => 'field_58eb5614c5514',
                            'label' => 'Required',
                            'name' => 'required',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                3 => array(
                    'key' => '58eb670839fee',
                    'name' => 'radio',
                    'label' => 'Radio',
                    'display' => 'block',
                    'sub_fields' => array(
                        0 => array(
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'key' => 'field_58eb675039ff1',
                            'label' => 'Field label',
                            'name' => 'label',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        1 => array(
                            'sub_fields' => array(
                                0 => array(
                                    'default_value' => '',
                                    'maxlength' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'key' => 'field_58eb672c39ff0',
                                    'label' => 'Value',
                                    'name' => 'value',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                ),
                            ),
                            'min' => 2,
                            'max' => 0,
                            'layout' => 'table',
                            'button_label' => '',
                            'collapsed' => '',
                            'key' => 'field_58eb670d39fef',
                            'label' => 'Field values',
                            'name' => 'values',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        2 => array(
                            'default_value' => 0,
                            'message' => 'Required',
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                            'key' => 'field_58eb699755795',
                            'label' => 'Required',
                            'name' => 'required',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                4 => array(
                    'key' => '58eb6b023b076',
                    'name' => 'checkbox',
                    'label' => 'Checkbox',
                    'display' => 'block',
                    'sub_fields' => array(
                        0 => array(
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'key' => 'field_58eb6b023b077',
                            'label' => 'Field label',
                            'name' => 'label',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        1 => array(
                            'sub_fields' => array(
                                0 => array(
                                    'default_value' => '',
                                    'maxlength' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'key' => 'field_58eb6b023b079',
                                    'label' => 'Value',
                                    'name' => 'value',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                ),
                            ),
                            'min' => 1,
                            'max' => 0,
                            'layout' => 'table',
                            'button_label' => '',
                            'collapsed' => '',
                            'key' => 'field_58eb6b023b078',
                            'label' => 'Field values',
                            'name' => 'values',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        2 => array(
                            'default_value' => 0,
                            'message' => 'Required',
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                            'key' => 'field_58eb6b023b07a',
                            'label' => 'Required',
                            'name' => 'required',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
                5 => array(
                    'key' => '58eb6bd234c19',
                    'name' => 'select',
                    'label' => 'Select',
                    'display' => 'block',
                    'sub_fields' => array(
                        0 => array(
                            'default_value' => '',
                            'maxlength' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'key' => 'field_58eb6bd334c1a',
                            'label' => 'Field label',
                            'name' => 'label',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 1,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        1 => array(
                            'sub_fields' => array(
                                0 => array(
                                    'default_value' => '',
                                    'maxlength' => '',
                                    'placeholder' => '',
                                    'prepend' => '',
                                    'append' => '',
                                    'key' => 'field_58eb6bd334c1c',
                                    'label' => 'Value',
                                    'name' => 'value',
                                    'type' => 'text',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                ),
                            ),
                            'min' => 1,
                            'max' => 0,
                            'layout' => 'table',
                            'button_label' => '',
                            'collapsed' => '',
                            'key' => 'field_58eb6bd334c1b',
                            'label' => 'Field values',
                            'name' => 'values',
                            'type' => 'repeater',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                        2 => array(
                            'default_value' => 0,
                            'message' => 'Required',
                            'ui' => 0,
                            'ui_on_text' => '',
                            'ui_off_text' => '',
                            'key' => 'field_58eb6bd334c1d',
                            'label' => 'Required',
                            'name' => 'required',
                            'type' => 'true_false',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                        ),
                    ),
                    'min' => '',
                    'max' => '',
                ),
            ),
            'min' => 1,
            'max' => '',
            'button_label' => 'Add form field',
            'key' => 'field_58eb302883a68',
            'label' => __('Fields', 'modularity-form-builder'),
            'name' => 'form_fields',
            'type' => 'flexible_content',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        1 => array(
            'default_value' => 'Send',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'key' => 'field_58eb3700191e7',
            'label' => __('Text on submit button', 'modularity-form-builder'),
            'name' => 'submit_button_text',
            'type' => 'text',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
        2 => array(
            'sub_fields' => array(
                0 => array(
                    'default_value' => '',
                    'placeholder' => '',
                    'prepend' => '',
                    'append' => '',
                    'key' => 'field_58eb6f389aa7d',
                    'label' => __(__(__('Email address', 'modularity-form-builder'), 'modularity-form-builder'), 'modularity-form-builder'),
                    'name' => 'email',
                    'type' => 'email',
                    'instructions' => '',
                    'required' => 1,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                ),
            ),
            'min' => 0,
            'max' => 0,
            'layout' => 'table',
            'button_label' => __('Add email', 'modularity-form-builder'),
            'collapsed' => '',
            'key' => 'field_58eb6ee89aa7c',
            'label' => __('Notifications on form submission', 'modularity-form-builder'),
            'name' => 'notify',
            'type' => 'repeater',
            'instructions' => __('Notifications will be sent to below added email addresses when receiving a new form submission.', 'modularity-form-builder'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-form',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));
}