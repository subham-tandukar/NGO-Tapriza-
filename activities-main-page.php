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

<section class="main-activities">
    <div class="uk-container uk-margin-top">
        <div class="wrapper uk-grid uk-child-width-1-2@m">
            <div>
                <div class="activities-img" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                    <img src="./assets/img/img.png" alt="">
                </div>
            </div>

            <div class="wrap" uk-scrollspy="cls: uk-animation-slide-bottom;  delay: 700; repeat: false">
                <h4>Activities Title</h4>
                <div class="content">
                    <p>We provide every services for needy.We provide every services for needy.We provide every services for needy.We provide every services for needy.We provide every services for needy.
                    We provide every services for needy.We provide every services for needy.We provide every services for needy.We provide every services for needy.We provide every services for needy.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="activities other-activities">
    <div class="title">
        <h3>Other activities</h3>
    </div>

   
    <?php 
    include "activities-pages.php";
    ?>

</section>

<?php 
   include "footer.php";
?>