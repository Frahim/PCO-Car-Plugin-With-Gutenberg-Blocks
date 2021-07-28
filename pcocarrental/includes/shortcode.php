<?php

// All Shortcode
function pcocar_shortcode() {
  ob_start();
// Create the Query   
  $args = array('post_type' => 'pcocar', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC');
  $loop = new WP_Query($args);
  echo '<div class="pco_Wrapper"><div class="pco_row">';
  while ($loop->have_posts()) {
    $loop->the_post();
    ?>                                   <div class="col4 pco_item"> 
      <div class="pco_title col12"><?php echo the_title(); ?></div>  
      <div class="pco_thumb col12">
        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo the_title(); ?>"/>
      </div>        
      <div class="pco_row">   
        <div class="pco_rent col6">from £<?php echo carbon_get_the_post_meta('crb_weekly_rent'); ?> Per Week</div> 
        <div class="ancor col6"><a href="<?php echo get_permalink(); ?>">Read More</a> </div>   
      </div>           
    </div>             
    <?php
    wp_reset_query();
  }

  echo '</div></div>';
// Reset query to prevent conflicts  
  $output = ob_get_clean();
  return $output;
}

add_shortcode('PCO_Car', 'pcocar_shortcode');

// Date Reminder
function datereminder_shortcode() {
  ob_start();
  $args = array('post_type' => 'pcocar', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC');
  $loop = new WP_Query($args);

  echo '<div class="pco_Wrapper"><div class="pco_row"><table class="table"><thead><th>REG NO</th><th>PCO/MOT DUE ON</th><th>MOT YEAREND</th><th>ROAD TAX EXP</th><th>PCO ENDS</th><th>PCO TO DATE</th><th>SERVICE DUE</th></thead><tbody>';
  while ($loop->have_posts()) {
    $loop->the_post();
    
      $driver = carbon_get_the_post_meta( 'crb_pco_driver_association' );
       if (!empty($driver)):
      echo get_the_title( $driver[0]['id'] );
        endif;
    ?>    

    <tr>
      <td><?php the_title(); ?></td>
      <td><?php
        $date_now = new DateTime();
        $moto_due = carbon_get_the_post_meta('crb_moto_end_date');
        if (!empty($moto_due)):
          $exp_date = date_create($moto_due);
          $dudate = date_sub($exp_date, date_interval_create_from_date_string("6 month"));
          echo date_format($dudate, "d M Y") . '<br/>';
          $motodate_diff = date_diff($dudate, $date_now);
          $d = $motodate_diff->format("%a");
          if ($d < 15)
          //echo $motodate_diff->d . ;
            echo $d . ' Days';
        endif;
        ?> 
      </td>
      <td>
        <?php
        if (!empty($moto_due)):
          echo $moto_due . '<br/>';
          //$moto_yearend_date = date_create($moto_due);
          $moto_diff = date_diff($date_now, $exp_date);
          $mot_dif_d = $moto_diff->format("%a");
          if ($mot_dif_d < 15)
            echo $mot_dif_d . ' Days Left';
        endif;
        ?>

      </td>
      <td><?php
        //ROAD TAX EXP
        $rtex_day = carbon_get_the_post_meta('crb_rted_date');
        if (!empty($rtex_day)):
          $rtex_date = date_create($rtex_day);
          echo date_format($rtex_date, "d M Y") . '</br>';
          $rtex_diff = date_diff($rtex_date, $date_now);
          $rtex_notis = $rtex_diff->format("%a");
          if ($rtex_notis < 15)
            echo $rtex_notis . ' Days';
        endif;
        ?></td>
      <td><?php
        //PCO END
        $pco_date = carbon_get_the_post_meta('crb_pco_date');
        if (!empty($pco_date)):
          $pco_day = date_create($pco_date);
          echo date_format($pco_day, "d M Y") . '</br>';

          $pcoend_diff = date_diff($pco_day, $date_now);
          $pcoend_notis = $pcoend_diff->format("%a");
          // echo '</br>'. $pco_notis .'</br>';
          if ($pcoend_notis < 30)
            echo $pcoend_notis . ' Days';
        endif;
        ?></td>
      <td><?php
        //PCO TO DATE
        if (!empty($pco_date)):
          $pcotoday = date_add($pco_day, date_interval_create_from_date_string("12 month"));
          echo date_format($pcotoday, "M Y");

          $pco_diff = date_diff($pcotoday, $date_now);
          $pco_notis = $pco_diff->format("%a");
          // echo '</br>'. $pco_notis .'</br>';
          if ($pco_notis < 30)
            echo $pco_notis . ' Days';
        endif;
        ?></td>
      <td><?php 
     //Service Due DATE
     $srv_date = carbon_get_the_post_meta('crb_srv_date');
        if (!empty($srv_date)):
          $srv_day = date_create($srv_date);
          $srvday = date_add($srv_day, date_interval_create_from_date_string("6 month"));
          echo date_format($srvday, "d M Y");

          $srv_diff = date_diff($srvday, $date_now);
          $srv_notis = $srv_diff->format("%a");
          // echo '</br>'. $pco_notis .'</br>';
          if ($srv_notis < 30)
            echo $srv_notis . ' Days';
        endif;
     
      ?></td>
    </tr> 

    <?php
    wp_reset_query(); 
  }

  echo '</tbody></table></div></div>';
// Reset query to prevent conflicts  
  $output = ob_get_clean();
  return $output;
}

add_shortcode('date_reminder', 'datereminder_shortcode');
