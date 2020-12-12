<?php 
include 'service-manage.php'; 
if(isset($_REQUEST["q"])) {
    $place = $_REQUEST["q"];
    setUpContent($place);
}else{
    header("Location: http://www.inspireholidays.in"); 
}

?>

<main class="service-detail package-detail inner-page grey-bg">

    <section class="content">

        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="head pb-0">
                        <h2 data-aos="fade-down" data-aos-delay="180"><?php echo $title;?></h2>
                        <div class="desc" data-aos="fade-down" data-aos-delay="200"><span class="days">
                                <!--Single
                               Service</span><span class="price">₹ 1235/
                                service</span> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="featured-img container-fluid">
            <img src="images/services.jpg" alt="" class="img-fluid service-img" data-aos="fade-right"
                data-aos-offset="300">
        </div>

        <div class="container">

            <div class="row">
                <div class="col-10">
                    <div class="matter pb-0">
                        <p data-aos="fade-down" data-aos-delay="300">
                            <?php echo $content;?>
                        </p>

                    </div>
                </div>

            </div>
        </div>

    </section>
</main>

<?php include 'footer.php'; ?>