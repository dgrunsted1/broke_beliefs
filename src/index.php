
<?php include("includes/config.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head.php");?>
</head>
<body>

<?php
    
    include("includes/header.php");
    include("includes/nav.php");
    if ($CURRENT_TAB == 'Games'){
        include("includes/game_nav.php");
        if ($CURRENT_PAGE == 'wordle') {
            include("wordle/wordle.php");
            include("wordle/wordle.html"); ?>
            <script src='/src/wordle/wordle.js'> </script> <?php
        }
    }
    
?>

<?php include("includes/footer.php");?>
</body>
</html>