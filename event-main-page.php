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

<section class="main-event">
    <div class="uk-container uk-margin-top">
        <div class="wrapper uk-grid uk-child-width-1-2@m">
            <div>
                <div class="event-img" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                    <img src="./assets/img/img.png" alt="">
                </div>
            </div>

            <div class="wrap" uk-scrollspy="cls: uk-animation-slide-bottom;  delay: 700; repeat: false">
                <h4>Event Title</h4>
                <div class="content">
                    <p>Tapriza has always been helpful and supporting to those who are in bad condition.
                    </p>
                    <div class="info uk-grid uk-child-width-1-2@s">
                        <div>
                            <span><i class="fas fa-clock"></i>Time: 12:00 am - 5:00pm</span>
                        </div>
                        <div>
                            <span><i class="fas fa-map-marker-alt"></i>Venue: Dolpa, Nepal</span>
                        </div>
                        <div>
                            <span><i class="fas fa-calendar-alt"></i>Date: December 1, 2022</span>
                        </div>
                        <div>
                            <span><i class="fas fa-phone-alt"></i>Contact: 014963468</span>
                        </div>
                        <div>
                            <span><i class="fas fa-user"></i>Organized by: Semduk Lama</span>
                        </div>
                        <div>
                            <span><i class="fas fa-envelope"></i>Email: tashi.d@tapriza.org</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="event other-events">
    <div class="title">
        <h3>Other events</h3>
    </div>


    <?php 
    include "event-pages.php";
    ?>
</section>

<?php 
   include "footer.php";
?>