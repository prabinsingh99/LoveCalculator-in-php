<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_GET['calculate'])) {
    $yourName = $_GET['yourName'];
    $partnerName = $_GET['partnerName'];

    // Basic love calculation (for demonstration purposes)
    $loveScore = rand(60, 100);

    // Construct the URL with parameters
    $redirectURL = "love.php?score=$loveScore&yourName=$yourName&partnerName=$partnerName";
    
    // Save the names to a file
    $entryData = "$yourName & $partnerName: Love Score = $loveScore%\n";
    file_put_contents('entries.txt', $entryData, FILE_APPEND);

    // Perform server-side redirection
    header("Location: $redirectURL");
    exit();
}
?>
<?php include("./brand.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Love Calculator</title>
    <?php include("./head.php"); ?>
    <link rel="stylesheet" href="style.css">
    
    <style>
        /* Responsive image styles */
        .responsive-img {
            max-width: 70%;
            height: auto;
            display: block;
            margin: auto;
        }
    </style>
    
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
        <h1 style="text-align: center;">💝Love Calculator💝</h1>
<br>

       <div class="d-flex md-col-2">
       

            <form method="get" action="" class="love-form">
                <div class="form-group">
                    <label for="yourName">Your Name:</label>
                    <input type="text" name="yourName" required>
                </div>

                <div class="form-group">
                    <label for="partnerName">Partner's Name:</label>
                    <input type="text" name="partnerName" required>
                </div>

                <button type="submit" name="calculate">Calculate</button>
            </form>
            
       </div>

        <br>
       

        <!-- ADVERTISEMENT Code -->
        
        <script async="async" data-cfasync="false" src="//pl23751071.highrevenuenetwork.com/522d25effe2492b2e7ba22cac04a4f7f/invoke.js"></script>
<div id="container-522d25effe2492b2e7ba22cac04a4f7f"></div>

        <!-- ADVERTISEMENT Code -->

        <!-- Add Your Content -->
        
        <!-- Add Your Content -->

        <?php include("./footer.php"); ?>
    </div>

</body>
</html>
