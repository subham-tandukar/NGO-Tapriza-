<?php 
   include "header.php";
?>

<section class="breadcrumb">
    <div class="uk-container uk-container-expand">

        <div class="txt">
            <div>
                <h3>Our Events</h3>
            </div>
            <div class="uk-flex uk-flex-middle">
                <a href="index.php">Home</a>
                <span>|</span>
                <p>Event</p>
            </div>
        </div>
    </div>
</section>

<section class="event">
    <div class="title">
        <h3>our events</h3>
    </div>

        
        <?php 
        include "event-pages.php";
        ?>

</section>

<?php 
   include "footer.php";
?>