<?php 
   include "header.php";
?>

<section class="breadcrumb">
    <div class="uk-container uk-container-expand">

        <div class="txt">
            <div>
                <h3>Our Partners</h3>
            </div>
            <div class="uk-flex uk-flex-middle">
                <a href="index.php">Home</a>
                <span>|</span>
                <p>Partner</p>
            </div>
        </div>
    </div>
</section>

<section class="partners">
    <div class="title">
        <h3>category 1</h3>
    </div>
    
    <div class="wrapper">
        <div class="uk-grid uk-child-width-1-3@s" uk-scrollspy="cls: uk-animation-fade; target: .wrap; delay: 300; repeat: false">
            <div class="wrap">
                <div class="content">
                    <img src="./assets/img/logo.png" alt="">
                    <h5>Partner Name</h5>
                </div>
            </div>
            <div class="wrap">
                <div class="content">
                    <img src="./assets/img/logo.png" alt="">
                    <h5>Partner Name</h5>
                </div>
            </div>
            <div class="wrap">
                <div class="content">
                    <img src="./assets/img/logo.png" alt="">
                    <h5>Partner Name</h5>
                </div>
            </div>
           
        </div>
    </div>

    <div class="title uk-padding-remove">
        <h3>category 2</h3>
    </div>
    
    <div class="wrapper">
        <div class="uk-grid uk-child-width-1-3@s" uk-scrollspy="cls: uk-animation-fade; target: .wrap; delay: 300; repeat: false">
            <div class="wrap">
                <div class="content">
                    <img src="./assets/img/logo.png" alt="">
                    <h5>Partner Name</h5>
                </div>
            </div>
            <div class="wrap">
                <div class="content">
                    <img src="./assets/img/logo.png" alt="">
                    <h5>Partner Name</h5>
                </div>
            </div>
           
        </div>
    </div>

</section>

<?php 
   include "footer.php";
?>