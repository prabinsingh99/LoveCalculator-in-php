<?php include("./brand.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./head.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Calculator Result</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php include("./header.php"); ?>
    <div class="container">
    <script type="text/javascript">
	atOptions = {
		'key' : 'c64b2a55e53369cb87a0a462f088d141',
		'format' : 'iframe',
		'height' : 90,
		'width' : 728,
		'params' : {}
	};
</script>
<script type="text/javascript" src="//www.topcreativeformat.com/c64b2a55e53369cb87a0a462f088d141/invoke.js"></script>
<br>
        <h1 style="text-align: center; font-weight: normal;">Love Calculator Result</h1>

        <div id="result" style="margin-top: 20px; text-align: center;">
            <?php
            if (isset($_GET['score'])) {
                $loveScore = $_GET['score'];
                $yourName = isset($_GET['yourName']) ? $_GET['yourName'] : "Your Name";
                $partnerName = isset($_GET['partnerName']) ? $_GET['partnerName'] : "Partner's Name";
            ?>
                <p><span style="font-size: 24px; font-weight: bold;">💞<?= $yourName ?> & <?= $partnerName ?>💞</span></p>
                <div class="big-heart">
                    <span class='heart'>❤️</span>
                    <p class="love-score"><?= $loveScore ?>%</p>
                </div>
                <p>Together, you create a love story that lasts a lifetime. Your love is a beautiful journey filled with joy, understanding, and endless affection. May your hearts continue to beat as one, and your days be filled with laughter and shared dreams.</p>
            <?php
            } else {
                echo "<p>No love score available.</p>";
            }
            ?>
        </div>

        <div class="social-links">
            <p>Share your result:</p>
            <!-- Replace the "#" in the href attributes with your actual social sharing URLs -->
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode("https://trafficridermod.pro/love.php?score=$loveScore&yourName=$yourName&partnerName=$partnerName") ?>" class="social-link facebook" target="_blank">Facebook</a>
            <a href="https://twitter.com/intent/tweet?url=<?= urlencode("https://trafficridermod.pro/love.php?score=$loveScore&yourName=$yourName&partnerName=$partnerName") ?>" class="social-link twitter" target="_blank">Twitter</a>
            <a href="https://api.whatsapp.com/send?text=<?= urlencode("Check out my love score: $loveScore%! https://trafficridermod.pro/love.php?score=$loveScore&yourName=$yourName&partnerName=$partnerName") ?>" class="social-link whatsapp" target="_blank">WhatsApp</a>
        </div>

        <div>
            <a class="back-button" href="index.php">Back to Love Calculator</a>
        </div>

        <!-- ADVERTISEMENT Code -->
        <script type="text/javascript">
	atOptions = {
		'key' : 'c64b2a55e53369cb87a0a462f088d141',
		'format' : 'iframe',
		'height' : 90,
		'width' : 728,
		'params' : {}
	};
</script>
<script type="text/javascript" src="//www.topcreativeformat.com/c64b2a55e53369cb87a0a462f088d141/invoke.js"></script>
        <!-- ADVERTISEMENT Code -->

        <?php include("./footer.php"); ?>
    </div>
</body>
</html>
