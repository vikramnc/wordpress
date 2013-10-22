<?php
/*
Plugin Name: Sample
Plugin URI: http://not-real.just-sample-url.com
Description: My first plugin, Still learning. not sure what it does.
Version: 0.1
Author: Cyrus
Author URI: http://mitalicyrus.blogspot.in
License: GPL2
*/
?>
<div class="wrap">
<h2>Sample Plugin</h2>

<h3>Instructions</h3>

<ol>
<li> Add a new post/page.</li>
<li> In its content part, wherever you want to add the slider, do this,<br>
[sample_slider] (your_images_will_go_here) [/sample_slider]<b> NOTE: <span style="color:red">UNSERSCORES</span></b></li>
<li> Then replace (your_images_will_go_here) by inserting your images through add_media.</li>
</ol>
<b>NOTE: Make sure that you do not give any space or breaks. </b><br>
<img src="<?php echo plugins_url('../documentation/img/code_sample.png', __FILE__); ?>">



<!--
 <form method="post" action="options.php">

<?php settings_fields( 'sample-settings-group' ); ?>

<?php do_settings_sections('sample-settings-group' ); ?>

<table class="form-table">

<tr valign="top">

<th scope="row">Name (First/Last/Both)</th>

<td><input type="text" name="name" value="<?php echo get_option('name'); ?>" /></td>

</tr>

<tr valign="top">

<th scope="row">Age</th>

<td><input type="text" name="age" value="<?php echo get_option('age'); ?>" /> years</td> 

</tr>

<tr valign="top">

<th scope="row">Nickname</th>

<td><input type="text" name="nickname" value="<?php echo get_option('nickname'); ?>" /></td>

</tr>

</table>

<?php submit_button(); ?>

</form> -->

</div>