<?php
/**
* @package   yoo_infinite
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

// get html head data
$head = $this->getHeadData();

// remove deprecated meta-data (html5)
unset($head['metaTags']['http-equiv']);
unset($head['metaTags']['standard']['title']);
unset($head['metaTags']['standard']['rights']);
unset($head['metaTags']['standard']['language']);

$this->setHeadData($head);

?>
<!DOCTYPE HTML>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
	<meta charset="<?php echo $this->getCharset(); ?>" />
	<jdoc:include type="head" />
    
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/screen.css" type="text/css" />
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.js" type="text/javascript"></script>

    
    <script type="text/javascript">
	    $(function(){
	    	$('#category-print').hide();
	    	$('#category-print-go').show();
		});
    </script>


</head>
<body class="contentpane">
<div class="header"></div>
	<jdoc:include type="message" />
    <jdoc:include type="component" />
</body>
</html>
