<?php
$phpSelf = htmlspecialchars($_SERVER['PHP_SELF']);
$pathParts = pathinfo($phpSelf);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Artist sit for Fauna">
    <title>Fauna</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" integrity="your-integrity-code" crossorigin="anonymous">
   
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link media="(max-width: 800px)" rel="stylesheet" type="text/css" href="style/style-tablet.css?version=<?php print time(); ?>">
    <link media = "(max-width: 600px)" rel="stylesheet" type="text/css" href="style/style-mobile.css?version=<?php print time(); ?>">
</head>
<body>
<?php
include 'connect-DB.php';
?>