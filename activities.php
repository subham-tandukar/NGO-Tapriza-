<?php 
   include "header.php";
?>

<section class="breadcrumb">
    <div class="uk-container uk-container-expand">

        <div class="txt">
            <div>
                <h3>Our Activities</h3>
            </div>
            <div class="uk-flex uk-flex-middle">
                <a href="index.php">Home</a>
                <span>|</span>
                <p>Activities</p>
            </div>
        </div>
    </div>
</section>

<section class="activities">
    <div class="title">
        <h3>our activities</h3>
    </div>
        
    <?php 
    include "activities-pages.php";
    ?>

</section>

<?php 
   include "footer.php";
?>