<?php
	$pagename = "The Rules";
	$pagecolor = "red";
	require 'load/header.php';
?>

<h1 class="<?php echo "col-$pagecolor"; ?>"><?php echo $pagename . " " . $ssyear; ?></h1>
<a href="files/rules<?php echo $sscode; ?>.pdf" class="<?php echo "$pagecolor"; ?> hideinprint">Download a (printer-friendly) PDF copy.</a>
<ol class="rules">
	<li>The decision of the Mackenzie River Fish Stocking Association (MRFSA) is final, and the committee has the right to withhold any prizes, pending an investigation.</li>
	<li><strong>Hours/Cutoff Times</strong>
		<ol>
			<li>
				<strong>Fishing</strong><br />
				Competition fishing starts at 5:00am on <?php echo date_format($ssSaturday,'l j F Y'); ?> and ends at 11:00am on <?php echo date_format($ssSunday,'l j F Y'); ?> &mdash; only fish caught between these times are eligible for measuring and recording.
			</li>
			<li>
				<strong>Nomination Tent</strong><br />
				The nomination Tent will only be open between the following hours:
				<ol>
					<li><span><?php echo date_format($ssFriday,'l j F Y'); ?>:</span> 5:00pm - 8:00pm</li>
					<li><span><?php echo date_format($ssSaturday,'l j F Y'); ?>:</span> 6:00am - 6:00pm</li>
					<li><span><?php echo date_format($ssSunday,'l j F Y'); ?>:</span> 6:00am - 9:00am</li>
				</ol>
			</li>
			<li>
				<strong>Weigh-Ins (Physical)</strong><br />
				The weigh in tent will only be open between the following hours:
				<ol>
					<li><span><?php echo date_format($ssSaturday,'l j F Y'); ?>:</span> 6:00am - 6:00pm</li>
					<li><span><?php echo date_format($ssSunday,'l j F Y'); ?>:</span> 6:00am - 11:00am</li>
				</ol>
			</li>
			<li>
				<strong>Weigh-Ins (Digital)</strong><br />
				Digital Weigh-ins from photographs submitted in person (for example, from a camera or compatible memory card) can be submitted only during Weigh-in tent hours (as set out in 2.3), at the Digital Weigh-In booth.
			</li>
		</ol>
	</li>
	<li><strong>Weigh-Ins</strong>
		<ol>
			<li>
				<strong>General</strong><br />
				Only Legal size fish will be accepted for weigh-in &mdash; nomination cards <span>must</span> be shown whenever weighing in fish. The competition is based on the length of the fish, and the weight of the fish is not recorded or considered during judging.
				<ol>
					<li>
						<strong>Live Fish</strong><br />
						All fish (excluding catfish) must be live when presented to the weigh-in tent, any dead fish presented to the weigh-in tent will be turned away.
					</li>
				</ol>
			</li>
			<li>
				<strong>Digital Weigh-Ins</strong><br />
				All digital weigh-ins are to be photographed being measured on a brag mat, with the head at the start of the measure. Two (2) photos <span>must</span> be submitted: one (1) of the whole fish/brag mat, and one (1) close/zoomed in on the tail, showing the length.<br />
				All photos must clearly show the front of the competitor's nomination card (displaying card number and name).<br />
				Photos can only be submitted at the Digital Weigh-In booth during Weigh-In tent hours as set out in <span>2.3</span> (There is no email inbox being monitored). You must be able to clearly show the actual length of the fish, in a format readable by MRFSA officals: either on the screen of your device, printed out, or provided on an SD memory card or USB device. It is your own responsibility to ensure Officials will be able to access your digital weigh-ins - if you are unsure, double check with an Official first.
			</li>
			<li>
				<strong>Eligible Species</strong><br />
				The species outlined in this section are the only species eligible to be weighed in during the <?php echo $ssyear ?> competition.
				<ol>
					<li>
						<strong>Length Categories</strong><br />
						These species will be measured as their length determines the winner.
							<ol>
								<li><span>Barramundi</span> - Lates Calcarifer</li>
								<li><span>Saratoga</span> (or <em>Southern Saratoga</em>) - Scleropages Leichardti</li>
								<li><span>Black Bream</span> (or <em>Sooty Grunter</em>) - Hephaestus Fuliginosus</li>
								<li><span>Sleepy Cod</span> - Oxyeleotris Lineolatus</li>
								<li><span>Yellowbelly</span> (or <em>Golden Perch</em>)- Macquaria Ambigua</li>
								<li><span>Eel Tailed Catfish</span> (or <em>Jewfish</em>) - Tandanus Tandanus</li>
							</ol>
					</li>
					<li>
						<strong>Lucky Draw Categories</strong><br />
						These species will not be measured as their length has no bearing on the competition.
							<ol>
								<li><span>Red Claw</span> - Cherax quadricarinatus</li>
								<li><span>Catfish</span></li>
							</ol>
					</li>
					The decision of which of the listed category a weighed-in fish should be registered to, if at all, is at the sole discretion of the MRFSA.
				</ol>
			</li>

		</ol>
	</li>
	<li><strong>Nominations</strong>
		<ol>
			<li>
				<strong>Age Categories</strong><br />
				Competitors under the age of 16 up to and including the last day of the competition must be nominated as a junior competitor. All other competitors must be nominated as Seniors.
			</li>
			<li>
				<strong>Nomination Cards</strong><br />
				Nomination cards are issued from the Nomination Tent. All competitors must hold their nomination card with them for the duration of the competition. They must be presneted with weighing in fish, collecting prizes and displayed in digital weigh-in pictures.
			</li>
			<li>
				<strong>Lost Cards</strong><br />
				Lost cards will be replaced where required, only during Nomination Tent Hours (as set out in <span>2.2</span>).<br />
				Any digital weigh-in's displaying the lost card must be submitted before the card is replaced &mdash; any submissions showing the lost card will not be accepted after the replacement is given.
				<ol>
					<li>
						<strong>Extra Replacement Time</strong><br />
						The MRFSA Nomination Team may choose to replace Lost Cards <span>up to 30 minutes before</span> the scheduled prize draw times on a particular day. Where the MRFSA has chosen to exercise this, a sign will be displayed at the Nomination Tent and an announcement made over the loudspeaker. Certain constraints may restrict the MRFSA's ability to provide this service and it cannot be guaranteed in advance. <span>New Nominations will never be taken outside of Nomination Tent Hours listed in 2.2)</span>
					</li>
				</ol>
			</li>
		</ol>
	</li>
	<li><strong>Prizes/Draws</strong>
		<ol>
			<li>
				<strong>Nomination Draws</strong><br />
				Nomination Draws will be held for all nominated competitors on <?php echo date_format($ssSaturday,'l j F Y'); ?> (starting at 7:00pm) and <?php echo date_format($ssSunday,'l j F Y'); ?> (starting at 12 Midday). To be in the draw on either day, competitors must be nominated before the Nomination Tent closes on that day (per hours listed in <span>2.2</span>). Once their nomination number has been called, competitors will have <span>60 seconds</span> to present themselves (with their nomination card) to collect their prize. For major prizes (such as, but not limited to, the boat) MRFSA may ask for proof of ID before presenting the prize.<br />
				Where a competitor does not present themselves <span>and</span> their nomination card within the given timeframe, the prize will redrawn for another competitor to claim.
				<ol>
					<li>
						<strong>Early Bird Draw</strong><br />
						To be eligible for the Early Bird Draw, competitors must have completed and submitted their nomination forms and payment before the cut-off date of <?php echo date_format($ssEarlyCutoff,'l j F Y'); ?> (or be postmarked on or before this dayte, for nominations submitted by post). The prize will be drawn on Saturday night, and competitors do not need to be present to collect this particular prize.
					</li>
				</ol>
			</li>
			<li>
				<strong>Fish Category Prizes</strong><br />
				The competitor with the longest weighed-in fish in each fish category listed in <span>3.3.1</span> will recieve a prize. Prizes are awarded at the draws held at Midday on <?php echo date_format($ssSunday,'l j F Y'); ?>. There are separate categories for senior competitors and junior competitors in each Fish Category &mdash; competitors are only eligible for prizes within their age category. Competitors must present their nomination card to collect their prize. MRFSA may ask for proof of ID before handing over prizes.
				<ol>
					<li>
						<strong>Tied/Drawn Category</strong><br />
						Where, at the conclusion of the competition, two or more competitors in a category have drawn for first place (i.e. they have both weighed in an equal length fish larger than any others in their category) the prize money will be split between the competitors at the discretion of the MRFSA.
					</li>
				</ol>
			</li>
			<li>
				<strong>Lucky Draw Fish Categories</strong><br />
				For each species listed in <span>3.3.2</span> a lucky draw will be held. When a competitor presents one of the species, they will be given an entry into that species draw. Only one (1) entry per competitor per species is permitted.<br />
				There are separate draws for senior competitors and junior competitors &mdash; competitors are only eligible for the draw in their age category.
				<ol>
					<li><strong>Catfish:</strong> spikes must be removed before presenting catfish to the weigh-in tent. It is the competitors responsibility to dispose of catfish after entry.</li>
				</ol>
			</li>
		</ol>
	</li>
	<li><strong>Boundaries:</strong> All fish are to be caught in the Mackenzie River/Bedford Weir.</li>
	<li><strong>Size, take and possession (Bag) Limits</strong><br />
		Size, take and possession limits for fresh waters (including the Mackenzie River) are specified by the Queensland Government Department of Agriculture, Fisheries and Forestry. It is the sole responsibility of each competitor to ensure they are not exceeding these limits. All nomination cards provided give an indication of these limits <span>as a guide only</span>. <a href="http://www.daff.qld.gov.au/fisheries/recreational/rules-regulations/size-possession-limits-fresh">Visit the DAFF website for full details</a>.

	</li>
	<li><strong>Cancellation:</strong> All entrants will be entitled to a full refunt of the nomination costs only in the event of the competition being cancelled.</li>
	<li>All persons operating boats must follow all current Queensland Department of Transport Regulations.</li>
	<li>The competition is BYO Alcohol, however MRFSA would ask that no glass be brought into the area, and would remind all competitors that it is an offence to supply alcohol to minors.</li>
	<li>The Mackenzie River Fish Stocking Association accepts no liability for injury, loss, damage of any person or property in the course of excursion, whether such injury or loss is due, or alleged to be due to any neglect or default of the Mackenzie River Fish Stocking Association or of any official or agent thereof, and all competitors fully understand that in so participating, they do so entirely at their own risk and agree to abide by all the rules and regulations.</li>
</ol>
<strong>Any action, incident, or situation not covered by these Rules shall be determined by the management of the Mackenzie River Fish Stocking Association if or when those conditions arise. Their decision will be FINAL.</strong>
<?php
	require 'load/footer.php';
?>
