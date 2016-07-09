<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>On My Heart - How do I get it?</title>
	<meta name="description" content="Lutheran Memory Masters">
	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="scripts/script.js"></script>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
		$(document).ready(function() {
			//$(".selectionDisabled").hide();
   			$("#selectCatechism").change(function(event) {
				$(".selectBible").val("0");
				$("#selectSet").val("0");
				$("#downloadStep3 .selectionDisabled").removeClass("hidden");
				if($(this).val() != 0){
					$("#downloadStep2 .selectionDisabled").addClass("hidden");
					if($(this).val() === "ELS"){
						$(".selectBible").addClass("hidden");
						$(".elsBibleTranslations").removeClass("hidden");
					}
					else{
						$(".selectBible").addClass("hidden");
						$(".welsBibleTranslations").removeClass("hidden");
					}
				}
				else{
					$(".selectionDisabled").removeClass("hidden");
					$(".selectBible").addClass("hidden");
					$("#downloadStep2 .emptySelector").removeClass("hidden");
					$(".selectSet").addClass("hidden");
					$("#downloadStep3 .emptySelector").removeClass("hidden");
				}
			});
			
			$(".selectBible").change(function(event) {
				$("#selectSet").val("0");
				if($(this).val() != 0){
					$("#downloadStep3 .selectionDisabled").addClass("hidden");
					$(".selectSet").addClass("hidden");
					$(".sets").removeClass("hidden");
	
				}
				else{
					$("#downloadStep4 .selectionDisabled").removeClass("hidden");
					$("#downloadStep3 .selectionDisabled").removeClass("hidden");
					$(".selectSet").addClass("hidden");
					$("#downloadStep3 .emptySelector").removeClass("hidden");
				}
			});
			$(".selectSet").change(function(event) {
				if($(this).val() != 0){
					$("#downloadStep4 .selectionDisabled").addClass("hidden");
				}
				else{
					$("#downloadStep4 .selectionDisabled").removeClass("hidden");
				}
			});
			$("#downloadButton").click(function(event) {
				if($("#selectCatechism").val() == "ELS"){
					var file = $("#selectCatechism").val() + "-" + $("#selectELSBible").val() + "-" + $("#selectSet").val() + ".zip"
				}
				else{
					var file = $("#selectCatechism").val() + "-" + $("#selectWELSBible").val() + "-" + $("#selectSet").val() + ".zip"	
				}
				
				window.location.replace("download/"+ file);
			});
			
 		});
	</script>
</head>
<body class="howdoigetit">
<div id="main">
<header class="website">
	<img src="images/Logo_OnMyHeart.png" width="282" height="99" alt="On My Heart Lutheran Memory Work Program" id="siteLogo" />
	<img src="images/DownloadArrow.png" width="88" height="52" alt="Download" id="downloadArrow" />
	<p id="contactUs"><a href="#">Contact Us</a></p>
	<nav>
		<a href="index.php" class="firstLink">Home</a><a href="whatIsIt.php">What is it?</a><a href="howdoesitwork.php">How does it work?</a><a href="#" class="active">How do I get it?</a><a href="howdoiuseit.php" class="lastLink">How do I use it?</a>	</nav>
</header>
<section>
<header>
	<h1>How do I get it?</h1>
</header>
<p>Each semester in The On My Heart Lutheran Memory Work Program is available as a free downloadable ZIP file. Each ZIP file contains 4 PDFs: the content cards, the covers, a curriculum guide, and a brief timeline teacher's guide. Once you download the files, you can print and assemble them. See the print and assembly instructions for help.
</p>
<form id="download">
	<fieldset>
	<legend>Download</legend>
	<div id="downloadStep1" class="downloadStep">
		<span class="number">1.</span>
		<div class="field">
			<label for="selectCatechism">Select the Catechism translation:</label>
			<select name="selectCatechism" id="selectCatechism">
				<option value="0">Select One</option>
				<option value="ELS">ELS</option>
				<option value="WELS">WELS</option>
			</select>
		</div>
	</div>
	<div id="downloadStep2" class="downloadStep">
		<div class="selectionDisabled"></div>
		<span class="number">2.</span>
		<div class="field">
			<label for="selectBible" class="disabled">Select the Bible translation:</label>
			<select name="selectBibleEmptySelector" id="selectBibleEmptySelector" class="selectBible emptySelector">
				<option value="0">&nbsp;</option>
			</select>
			<select name="selectELSBible" id="selectELSBible" class="selectBible elsBibleTranslations hidden">
				<option value="0">Select One</option>
				<option value="ESV">ESV</option>
                <option value="KJV">KJV</option>
				<option value="NKJV">NKJV</option>
			</select>
			<select name="selectWELSBible" id="selectWELSBible" class="selectBible welsBibleTranslations hidden">
				<option value="0">Select One</option>
                <option value="EHV">EHV</option>
				<option value="NIV1984">NIV 1984</option>
				<option value="NKJV">NKJV</option>
			</select>
		</div>
	</div>
	<div id="downloadStep3" class="downloadStep">
		<div class="selectionDisabled"></div>
		<span class="number">3.</span>
		<div class="field">
			<label for="selectSet">Select the Set:</label>
			<select name="selectSetEmptySelector" id="selectSetEmptySelector" class="selectSet emptySelector">
				<option value="0">&nbsp;</option>
			</select>
			<select name="selectSet" id="selectSet" class="selectSet sets hidden">
				<option value="0">Select One</option>
				<option value="Set1">Set 1</option>
				<option value="Set2">Set 2</option>
				<option value="Set3">Set 3</option>
				<option value="Set4">Set 4</option>
			</select>
		</div>
	</div>
	<div id="downloadStep4" class="downloadButton">
		<div class="selectionDisabled"></div>
		<input type="button" value="Download" name="downloadButton" id="downloadButton" class="downloadButton" />
	</div>
	</fieldset>	
</form>

<article>
<h2>Printing Instructions</h2>
<ul>
	<li>Select the Catechism and Bible translation your church uses and download the ZIP file provided. If your chosen translation is not available, please contact us and we'll do our best to provide it. </li>
	<li>The PDF with the covers is a single page and contains front and back covers for six rings. </li>
	<li>The PDF with the content cards is twelve pages long and should be printed double sided. This PDF contains the cards to make one ring. </li>

<li>The cards should be printed on 8 ½in x 11in 110lb (199g/m<sup>2</sup>) card stock using a color printer. A color laser printer is the most cost-effective way to print multiple rings.</li>

</article>
<article>
<h2>Assembly Instructions</h2>
<ul>
	<li>The cards should be bound using 1.5 or 2 in binder rings.</li>
	<li>Cut out and hole-punch the cards using the guidelines provided. Stack the cards in each category by order of week with week 15 on the bottom and week 1 on the top of the stack and the holes to the left.</li>

<li>Assemble the cards on a binder ring from the bottom as follows: back cover, green timeline stack, yellow Bible verse stack, blue Catechism stack, red Bible books stack, and front cover.</li>
</ul>
</article>
</section>
</div>
<footer class="website">
<p id="copyright">&copy;<?php echo date("Y") ?> On My Heart, Lutheran Memory Work Program, All Rights Reserved</p>
</footer>
<?php
include 'includes/contact.html';
?>
</body>
</html>