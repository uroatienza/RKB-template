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
    <style type="text/css">
    	iframe { border: none !important;}
	</style>

    
    <script type="text/javascript">
	    $(function(){
		var factsheetstyling = $('#factsheetstyling');
		if (factsheetstyling.length === 0){
			return;
		}else {
			$('.fs-header').append("<img class='factsheetImages-header' src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/fs-header.jpg'/>");
			$('.fs-footer').append("<img class='factsheetImages-footer' src='<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/fs-footer.jpg'/>");
		}
		});
    </script>
    <style type="text/css">
    	.factsheetImages-header {width:100%;}
    	.factsheetImages-footer {width:100%;}
    </style>

</head>
<body class="contentpane">
<div class="fs-header"></div>
	<jdoc:include type="message" />
    <jdoc:include type="component" />
<div class="fs-footer"></div>
</body>
</html>
