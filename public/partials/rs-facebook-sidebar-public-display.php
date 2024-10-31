<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.xtendify.com/en/user/2-rosinghal
 * @since      1.0.0
 *
 * @package    Rs_Facebook_Sidebar
 * @subpackage Rs_Facebook_Sidebar/public/partials
 */
?>

<?php
$options = get_option($this->plugin_name);
$social_sidebar_facebook = $options['facebook_page_id'];
$social_sidebar_widget_alignment = $options['widget_alignment'];
$social_sidebar_icon_alignment = $options['icon_alignment'];
?>
<?php if($social_sidebar_facebook) { ?>
<div class="ss-wrapper first-wrapper first-wrapper-<?php echo $social_sidebar_icon_alignment.'-'.$social_sidebar_widget_alignment; ?>">
	<div class="ss-icon facebook-icon first-icon-<?php echo $social_sidebar_icon_alignment.'-'.$social_sidebar_widget_alignment; ?>"></div>
	<div class="facebook-body">
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1743237475891456";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<div class="fb-page" data-href="https://www.facebook.com/<?php echo $social_sidebar_facebook; ?>" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/Xtendify/"><a href="https://www.facebook.com/<?php echo $social_sidebar_facebook; ?>"><?php echo $social_sidebar_facebook; ?></a></blockquote></div></div>
    </div>
</div>
<?php } ?>