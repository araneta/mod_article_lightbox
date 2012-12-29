<?php
// no direct access
defined('_JEXEC') or die;
?>
<div id="box-content" class="article_lightbox<?php echo $moduleclass_sfx ?>">
	<?php echo $fullArticle;?>
</div>
<a id="box-link" href="#box-content" rel="superbox[content]"></a>
<script type="text/javascript" src="<?php echo $tmpl_url;?>jquery.superbox.js"></script>
<link href="<?php echo $tmpl_url;?>jquery.superbox.css" media="all" rel="stylesheet" type="text/css"></link>
<script type="text/javascript">
    jQuery(document).ready(function($){      
		$.superbox.settings = {
			bgcolor:'<?php echo $dim_color;?>',
			bordercolor: '<?php echo $border_color;?>'
		};
		$.superbox();				
		setTimeout("jQuery('#box-link').click()",2000);
    }); 
</script>
