<!DOCTYPE html>
<?php
	$pagetitle = "Saratoga Spectacular";
	$ssyear = "2015";
	$sscode = "SSV";
	$ssdates = "3 & 4 October";
	$pagecolor = "blue";
	$ssSaturday = date_create("2015-10-03");
	$ssSunday = date_create(date_format($ssSaturday,'Y-m-d') . "+ 1 day");
	$ssFriday = date_create(date_format($ssSaturday,'Y-m-d') . "- 1 day");
	$ssEarlyCutoff = date_create(date_format($ssFriday,'Y-m-d') . "-1 week");
	
	if (isset($pagename)) {
		$pagetitle = $pagetitle . " " . $ssyear . " - " . $pagename;
	} else {
		$pagetitle = $pagetitle . " " . $ssyear;
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
</head>
<body>

<a class="logo" id="ss-cornerlogo" href="/ssv"><?php echo "Saratoga Spectacular $ssyear"; ?></a>
<a class="logo" id="mrfsa-cornerlogo" href="http://mrfsa.org.au">Presented by MRFSA</a>
<div id="headerbox">
	<span class="mrfsa"><a href="http://mrfsa.org.au">Mackenzie River Fish Stocking Association Inc.</a> Presents</span><br />
	<a href="/ssv" class="ss">Saratoga Spectacular 2015</a>
</div>