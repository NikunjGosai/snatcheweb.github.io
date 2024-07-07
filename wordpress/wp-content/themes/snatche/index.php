<?php /**
Template Name: Home-page
*/ 
?> 

<?php get_header(); ?>

<div class="main-wrapper">
    <?php 
        echo include('elements/premiumseller.php');
        echo include('elements/lowestfees.php');
        echo include('elements/sellingshoes.php');
        echo include('elements/originalverified.php');
        echo include('elements/contactform.php');
    ?>  
</div>
<?php get_footer(); ?>