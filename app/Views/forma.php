<?php
helper('form');
echo form_open();
#text control
$data = ['name'          => 'text1',
        'id'            => 'text1',
        'value'         => 'ura',
        'maxlength'     => '100',
        'size'          => '30',
       ];
#label
echo form_label('Username ', 'text1');
echo form_input($data);
echo "<br><br>";
#password control
$pass = ['name'          => 'pass1',
        'id'            => 'pass1',
        'maxlength'     => '100',
        'size'          => '30',
       ];
echo form_label('Password ', 'pass1');
echo form_password($pass);
echo "<br><br>";
#textarea
$text1 = ['name'          => 'textarea1',
          'id'            => 'textarea1',
          'value'         => 'ura',
         'rows'     => '5',
         'cols'          => '30',
       ];
#label
echo form_label('Details ', 'textarea1');
echo form_textarea($text1);
echo "<br><br>";
#fieldset
echo form_fieldset('Checkbox');
#checkbox1
$check1 = ['name'          => 'check1',
          'id'            => 'check1',
          'value'         => 'check1',
       ];
#label
echo form_label('Elev ', 'check1');
echo form_checkbox($check1);
echo "<br><br>";
#checkbox2
$check2 = ['name'          => 'check2',
          'id'            => 'check2',
          'value'         => 'check2',
       ];
#label
echo form_label('Student ', 'check2');
echo form_checkbox($check2);

#fieldset close
echo form_fieldset_close();
echo "<br><br>";
#fieldset
echo form_fieldset('Radio');
#radio1
$radio1=['name'          => 'radio1',
          'id'            => 'radio1',
          'value'         => 'Male',
        'checked'=>set_radio('gender', 'Male', FALSE),
];
#label
echo form_label('Male ', 'radio1');
echo form_radio($radio1);