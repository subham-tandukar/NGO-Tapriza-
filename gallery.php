<?php 
   include "header.php";
?>

<section class="breadcrumb">
    <div class="uk-container uk-container-expand">

        <div class="txt">
            <div>
                <h3>Gallery</h3>
            </div>
            <div class="uk-flex uk-flex-middle">
                <a href="index.php">Home</a>
                <span>|</span>
                <p>Gallery</p>
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="title">
        <h3>our gallery</h3>
    </div>

    <div class="uk-flex uk-flex-center uk-margin-small-top">
        <div class="photo-btn uk-margin-small-right">
            <button class="p">Photo</button>
        </div>
        <div class="video-btn uk-margin-small-left">
            <button class="v">Video</button>
        </div>
    </div>

    <div class="gallery-pages uk-container">
        <div class=" uk-margin-top photo uk-grid uk-child-width-1-3@m uk-child-width-1-2@s" uk-scrollspy="cls: uk-animation-slide-bottom; target: .wrapper; delay: 300; repeat: false">
            <?php 
            include "photo-pages.php";
            ?>
            </div>

            <div class="uk-margin-top video d-none uk-grid uk-child-width-1-3@m uk-child-width-1-2@s" uk-scrollspy="cls: uk-animation-slide-bottom; target: .wrapper; delay: 300; repeat: false">
            <?php 
            include "video-pages.php";
            ?>
            </div>
        </div>
</section>

<?php 
   include "footer.php";
?>