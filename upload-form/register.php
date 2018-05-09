<?php

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_mietpreis',
    'title' => 'Mietpreis',
    'fields' => array (
      array (
        'key' => 'field_5af2b08939ca9',
        'label' => 'monatlicher Mietpreis',
        'name' => 'rent_per_month',
        'type' => 'number',
        'instructions' => 'Bitte gib den Betrag an, den Du monatlich als Miete bezahlst.',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => 10,
      ),
      array (
        'key' => 'field_5af2b11239caa',
        'label' => 'Datum des Vertragbeginns',
        'name' => 'contract_start',
        'type' => 'date_picker',
        'required' => 1,
        'date_format' => 'yymmdd',
        'display_format' => 'dd.mm.yy',
        'first_day' => 1,
      ),
      array (
        'key' => 'field_5af2b19639cab',
        'label' => 'Datum des Vertragsendes',
        'name' => 'contract_end',
        'type' => 'date_picker',
        'date_format' => 'yymmdd',
        'display_format' => 'dd.mm.yy',
        'first_day' => 1,
      ),
      array (
        'key' => 'field_5af2b1b3e7f81',
        'label' => 'Mietfläche',
        'name' => 'appartment_size',
        'type' => 'number',
        'instructions' => 'Gib die Größe der Wohnung in Quadratmetern an',
        'required' => 1,
        'default_value' => '',
        'placeholder' => '',
        'prepend' => 'm²',
        'append' => '',
        'min' => '',
        'max' => '',
        'step' => 1,
      ),
      array (
        'key' => 'field_5af2eda0b9499',
        'label' => 'Scan des Mietvertrages',
        'name' => 'contract_scan',
        'type' => 'file',
        'instructions' => 'Lade hier einen Scan des Mietvertrages hoch und anonymisiere diesen davor.',
        'save_format' => 'object',
        'library' => 'uploadedTo',
      )
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'ml_rental_contract',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
