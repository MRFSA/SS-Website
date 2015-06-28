<!DOCTYPE html>
<?php
	$pagetitle = "Saratoga Spectacular";
	$ssyear = "2015";
	$sscode = "SSV";
	$ssdates = "3 & 4 October";
	$ssSaturday = date_create("2015-10-03");
	$ssSunday = date_create(date_format($ssSaturday,'Y-m-d') . "+ 1 day");
	$ssFriday = date_create(date_format($ssSaturday,'Y-m-d') . "- 1 day");
	$ssEarlyCutoff = date_create(date_format($ssFriday,'Y-m-d') . "-1 week");

	if (isset($pagename)) {
		$pagetitle = $pagetitle . " " . $ssyear . " - " . $pagename;
	} else {
		$pagetitle = $pagetitle . " " . $ssyear;
	}

	if (isset($pagecolor)) {
		switch ($pagecolor) {
			case "purple":
				$pagecolorhex = "#6d3d96";
				break;
			case "red":
				$pagecolorhex = "#c11e54";
				break;
			case "green":
				$pagecolorhex = "#8eb73e";
				break;
			case "blue":
				$pagecolorhex = "#0b99d6";
				break;
			case "pink":
				$pagecolorhex = "#cb4597";
				break;
			case "orange":
				$pagecolorhex = "#d25727";
				break;
			case "lightgrey":
				$pagecolorhex = "#dddddb";
				break;
			case "darkgrey":
				$pagecolorhex = "#363636";
				break;
		}
	} else {
		$pagecolor = "blue";
		$pagecolorhex = "#0b99d6";
	}

?>
<html>
<head>
	<title><?php echo $pagetitle; ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ['Roboto Slab']
			}
		});
	</script>
	<link rel="stylesheet/less" type="text/css" href="load/style.less">
	<script src="load/less.min.js"></script>
	<meta content="Official Website of the MRFSA's Saratoga Spectacular. The next comp is <?php echo $ssdates . " " . $ssyear; ?>" name="Description" />
	<meta name="theme-color" content="<?php echo $pagecolorhex; ?>">
	<link rel="icon" sizes="192x192" href="images/favicon.png">
</head>
<body>

<a class="logo" id="ss-cornerlogo" href="/ssv"><?php echo "Saratoga Spectacular $ssyear"; ?></a>
<a class="logo" id="mrfsa-cornerlogo" href="http://mrfsa.org.au">Presented by MRFSA</a>
<div id="headerbox">
	<span class="mrfsa"><a href="http://mrfsa.org.au">Mackenzie River Fish Stocking Association Inc.</a> Presents</span><br />
	<a href="/ssv" class="ss">Saratoga Spectacular 2015</a>
</div>
