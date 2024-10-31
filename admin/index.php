<?php 
include_once dirname( __FILE__ ).'/save.php';
 ?>
<div class="wrap">
<?php if ( current_user_can('manage_options') ) : ?>
<div class="tool-box">
    <div class="icon32" id="icon-options-general"><br /></div>
    <h2>SeeVolution Script Settings</h2>
	<form method="POST" action="">				
        <table class="form-table">  
			<tr valign="top"> 
				<th scope="row">  
                    <label for="svs_enable">  
                        Enable the plugin:                       
                    </label>  
                </th>  			
                <td>  
					<select name="svs_enable" id="svs_enable">
					<option value="off" <?php echo $svs_enable == "off" ?  "selected" : ""; ?>>No</option>
					 <option value="on" <?php echo $svs_enable == "on" ?  "selected" : ""; ?>>Yes</option>					 
					 </select>                     
                </td>  
            </tr>
			<tr valign="top">  
                <th scope="row">  
                    <label for="svs_color">  
                       Underscore color:                       
                    </label>  
                </th>  
                <td> 
					<input type="text" name="svs_color" id="svs_color" size="20" value="<?php echo $svs_color;?>" />                     
                </td>  
            </tr> 					
        </table>  			
			
        <input type="hidden" name="update_settings" value="Y" />  
        <input type="submit" value="Save" class="button-primary" style="float: left;margin-top: 20px; width:70px"/>
          
    </form>  
	
</div>
<?php
endif;
?>
</div>