<?php
	$pagecolor = "purple";
	$pagename = "Nominations";
	require 'load/header.php';
?>

<h1 class="<?php echo "col-$pagecolor"; ?>"><?php echo $pagename; ?></h1>
<p><a href="files/nom<?php echo $sscode; ?>.pdf" class="<?php echo "$pagecolor"; ?>">Download PDF Nomination Form</a></p>
<p>By nominating for the Saratoga Spectacular 2015 you agree to follow the <a href="rules.php" class="red">rules of the competition</a>
<h2>Ready to Nominate?</h2>
Download the <a href="/files/nomination2015.pdf" class="<?php echo "$pagecolor"; ?>">nomination form</a>, print it out and fill in all your details, then mail it (along with your payment) to:<br />
<em>MRFSA Inc, PO Box 302, Blackwater Q 4717</em><br />
And your nomination pack will be ready for you when you show up on the weekend of the competition</p>
<p><strong>Alternatively</strong> you can just bring the form and payment along with you to the competition and nominate there (or fill one out when you get there, whatever works for you).</p>
<h2>Early Bird</h2>
<p>Don't forget: if you nominate before XX/Sep/2015 (recieved and paid - or postmarked), you go in the draw for an extra prize. The Early Bird prize will be drawn on the Saturday Night of the competition and you don't need to be there to collect it.</p>
<?php
	require 'load/footer.php';
?>
