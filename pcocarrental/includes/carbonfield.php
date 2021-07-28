<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

function crb_attach_theme_options() {
  Container::make('post_meta', 'PCO CARS')
          ->where('post_type', '=', 'pcocar')
          ->add_tab(__('Car Information'), array(
              Field::make('date', 'crb_reg_date', 'REG  Date')
              ->set_storage_format('Y-m-d'),
              Field::make('date', 'crb_pco_date', 'PCO  Date')
              ->set_storage_format('Y-m-d'),
              Field::make('date', 'crb_buying_date', 'Buying Date')
              ->set_storage_format('Y-m-d'),
              Field::make('date', 'crb_moto_end_date', 'MOT END Date')
              ->set_storage_format('Y-m-d'),
              Field::make('date', 'crb_rted_date', 'Road Tax EXP Date')
              ->set_storage_format('Y-m-d'),
              Field::make('date', 'crb_srv_date', 'Service Date')
              ->set_storage_format('Y-m-d'),
              Field::make('separator', 'crb_separator', 'Price'),
              Field::make('text', 'crb_price_date', 'Price'),
              Field::make('text', 'crb_sprice_date', 'Seling Price'),
              Field::make('text', 'crb_weekly_rent', 'Weekly Rent Amount'),
          ))
          ->add_tab(__('Driver Information'), array(
              Field::make('association', 'crb_pco_driver_association', __('Association'))
              ->set_types(array(
                  array(
                      'type' => 'post',
                      'post_type' => 'pco_driver',
                  )
              )) 
  ));
}

add_action('after_setup_theme', 'crb_load_for_pcocar');

function crb_load_for_pcocar() {
  require_once( 'vendor/autoload.php' );
  \Carbon_Fields\Carbon_Fields::boot();
}
