<?php
	
    if (isset($_POST["update_settings"])) {  
        // Do the saving  
              
        $setting['svs_color'] = esc_attr($_POST["svs_color"]);      
        $setting['svs_enable'] =  empty($_POST["svs_enable"]) ? "on" : esc_attr($_POST["svs_enable"]);	
		
        //update setting
        foreach ($setting as $key => $value) {
            update_option("osc_".$key, $value);
        }
		?>
		<div id="message" class="updated">
			<p><strong><?php _e('Settings saved.') ?></strong></p>
		</div>
		<?php		
    }  
    //get setting       
    $svs_color = get_option("osc_svs_color");       
    $svs_enable = get_option("osc_svs_enable");
       
  ?>