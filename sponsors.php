<?php
	$pagename = "Our Sponsors";
	$pagecolor = "orange";
	require 'load/header.php';
	$sponsors = simplexml_load_file('load/sponsors.xml');
?>

<h1 class="<?php echo "col-$pagecolor"; ?>"><?php echo "$ssyear"; ?> Sponsors</h1>
<?php
foreach ($sponsors->sponsor as $currentsponsor) {
	if ($currentsponsor['level']=="0") {
		echo "<div class='sponsor-lv0' style='background-image:url($currentsponsor->logo);'><strong>" . $currentsponsor->name . "</strong><br />$currentsponsor->address<br />$currentsponsor->phone<br />";
		if($currentsponsor->url <> "") {
			echo "<a href='$currentsponsor->url'>$currentsponsor->linkname</a>";
		}
		echo "</div>";
	}
}

foreach ($sponsors->sponsor as $currentsponsor) {
	if ($currentsponsor['level']=="1") {
		echo "<div class='sponsor-lv1' style='background-image:url($currentsponsor->logo);'><strong>" . $currentsponsor->name . "</strong><br />$currentsponsor->address<br />$currentsponsor->phone<br /><a href='$currentsponsor->url'>$currentsponsor->linkname</a></div>";
	}
}
foreach ($sponsors->sponsor as $currentsponsor) {
	if ($currentsponsor['level']=="2") {
		echo "<div class='sponsor-lv2' style='background-image:url($currentsponsor->logo);'><strong>" . $currentsponsor->name . "</strong><br />$currentsponsor->address<br />$currentsponsor->phone<br /><a href='$currentsponsor->url'>$currentsponsor->linkname</a></div>";
	}
} ?>

<div class="sponsor-lv3">
	<ul>
		<?php
		foreach ($sponsors->sponsor as $currentsponsor) {
			if ($currentsponsor['level']=="3") {
				echo "<li><strong>" . $currentsponsor->name . "</strong> ";
				if ($currentsponsor->phone != ''){
					echo "Ph: $currentsponsor->phone; ";
				}
				if ($currentsponsor->address != ''){
					echo "$currentsponsor->address ";
				}
				if ($currentsponsor->url !=''){
					echo "<a href='$currentsponsor->url'>$currentsponsor->linkname</a>";
				}
				echo "</li>";
			}
		} ?>
	</ul>
</div>

<?php
	require 'load/footer.php';
?>
