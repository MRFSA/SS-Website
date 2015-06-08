<?php
	$pagename = "Our Sponsors";
	require 'load/header.php';
	$pagecolor = "orange";
	
	$sponsors = simplexml_load_file('load/sponsors.xml');
?>

<h1 class="<?php echo "col-$pagecolor"; ?>"><?php echo "$ssyear"; ?> Sponsors</h1>
<p><?php 
foreach ($sponsors->sponsor as $currentsponsor) {
	if ($currentsponsor['level']=="1") {
		echo "<div class='sponsor-lv1' style='background-image:url($currentsponsor->logo);'><strong>" . $currentsponsor->name . "</strong><br />$currentsponsor->address</div>";
	}
} ?>

<?php
foreach ($sponsors->sponsor as $currentsponsor) {
	if ($currentsponsor['level']=="2") {
		echo "<div class='sponsor-lv2' style='background-image:url($currentsponsor->logo);'><strong>" . $currentsponsor->name . "</strong><br />$currentsponsor[level]</div>";
	}
} ?>

<div class="sponsor-lv3">
	<ul>
		<?php
		foreach ($sponsors->sponsor as $currentsponsor) {
			if ($currentsponsor['level']=="3") {
				echo "<li><strong>" . $currentsponsor->name . "</strong><br />$currentsponsor[level]</li>";
			}
		} ?>
	</ul>
</div>

<?php
	require 'load/footer.php';
?>