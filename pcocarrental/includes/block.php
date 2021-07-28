<?php

// Guttenberg Block
use Carbon_Fields\Block;
//use Carbon_Fields\Container;
use Carbon_Fields\Field;

function pco_crb_load() {

  require_once( 'vendor/autoload.php' );

  \Carbon_Fields\Carbon_Fields::boot();

  // Slider blocks 

  Block::make(__('Short Code List'))
          ->add_fields(array(
              Field::make('select', 'crb_list', 'SC List')
              ->add_options(array(
                  'date_reminder' => 'Date Reminder',
                  'driver' => 'Driver',
                  'acount' => 'Account',
                  'PCO_Car' => 'PCO_Car',
              ))
          ))
          ->set_render_callback(function ( $fields, $attributes, $inner_blocks ) {
            ?> 
           
            <div class="icon__sec">[<?php echo $fields['crb_list']; ?>]</div>

            <?php
          });
}

add_action('after_setup_theme', 'pco_crb_load');
