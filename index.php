<?php
// index.php

// Define content
$pageTitle = "Welcome to My Website";
$headerImage = "https://scontent.fmnl35-1.fna.fbcdn.net/v/t39.30808-6/538541092_25123237597309991_7998484165652237404_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeERe0edfiYVqM4vdy_uuBwK6EIJHvBayAHoQgke8FrIAQGThePhmC1vz_T3qQJ27Lx4Rm5Udm12HlrLytfgpF3Y&_nc_ohc=THCFYIlWJk8Q7kNvwHTpHpg&_nc_oc=AdmVoQJIBVlsvIgVVztoOXubfQ-MfEDeqhOsVgswnsRVvL61YRl-beMXTAZzak9EuHw&_nc_zt=23&_nc_ht=scontent.fmnl35-1.fna&_nc_gid=fyVRbD0z64K58Uia0vbnfg&oh=00_AfimP12NoicttWeQJ5sncI22aCKLgBYYPzvIVKoiYvc-KA&oe=6921D10D"; // URL of your header image
$bodyContent = "
<p>I Love You Mommy Kors.</p>
<ul>
    <li>I Love You Mommy Kors</li>
    <li>I Love You Mommy Kors</li>
    <li>I Love You Mommy Kors</li>
</ul>
";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        header img {
            max-width: 100%;
            height: auto;
        }
        main {
            padding: 20px;
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
        }
        footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: #fff;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <img src="<?php echo $headerImage; ?>" alt="Header Image">
    <h1><?php echo $pageTitle; ?></h1>
</header>

<main>
    <?php echo $bodyContent; ?>
</main>

<footer>
    &copy; <?php echo date("Y"); ?> My Website. All rights reserved.
</footer>

</body>
</html>
