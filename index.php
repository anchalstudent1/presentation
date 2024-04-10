<?php
// Include the database connection file
include 'dbinfo.php';

// Fetch product from the database
$product_query = "SELECT * FROM product";
$product_result = mysqli_query($con, $product_query);

//Fetch data for "About us" from the database
$about_query = "SELECT * FROM about";
$about_result = mysqli_query($con, $about_query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My skill presentation</title>
</head>
<body>
<header style="background-image: url(https://wallpapers.com/images/featured/cool-nike-g2tprt4w49a0ps3t.jpg);">
    <h1> NIKE SHOES </h1>
    <a href="#ABOUT">About Us</a>

</header>
<main>
<?php while($product = mysqli_fetch_assoc($product_result)) { ?>
    <h2><?php echo $product['title']; ?></h2>
    <div>
    <img src="<?php echo $product['image_url']; ?>" alt="image description">
    <p class="content"><?php echo $product['content']; ?></p>   
    </div>
    <?php } ?>

    <section id="ABOUT">
    <?php while($about = mysqli_fetch_assoc($about_result)) { ?>
    <h3> About Us </h3>
     <p class="about"><?php echo $about['content']; ?></p>
     <?php } ?>
    </section>


</main>
<footer>
    <p> &copy; 2024 Anchal |Student ID: 202107495</p></footer>
    
</body>
</html>