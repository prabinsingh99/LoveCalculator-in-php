<?php include("./brand.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./head.php"); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Love Calculator</title>
    <meta name="description" content"">
    <meta name="keywords" content"">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Responsive image styles */
        .responsive-img {
            max-width: 50%;
            height: auto;
            display: block;
            margin: auto;
        }

        /* Additional style to set a specific width if needed */
        /* .responsive-img {
            width: 70%; 
        } */
    </style>
</head>
<body>
    <?php include("./header.php"); ?>
        
        <!-- ADVERTISEMENT Code -->
        
        

        <!-- ADVERTISEMENT Code -->

<!-- Add YourContent -->
      
       <div class="row">
        <h2 style="text-align: center;">Love Calculator Article</h2> 
        <p style="text-align: center;">paragraph here</p>
        
        <! <!-- Add IMG --> 
        <?php
// Replace "path/to/your/image.jpg" with the actual path to your image.
$imagePath = "./img/love-calculator.png";
?>

<!-- Responsive image with PHP variable -->
<img src="<?php echo $imagePath; ?>" alt="Responsive Image" class="responsive-img">

<!-- Add IMG --> 
        </div>
<!-- Add YourContent -->

    

    <?php include("./footer.php"); ?>
</body>
</html>
