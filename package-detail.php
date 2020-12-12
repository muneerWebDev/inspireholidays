<?php 
include 'detail-manage.php';
if(isset($_REQUEST["q"])) {
    $place = $_REQUEST["q"];
    setUpContent($place);
}else{
    header("Location: http://www.inspireholidays.in"); 
}
?>

<main class="package-detail inner-page grey-bg">

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="head">
                        <h2 data-aos="fade-down" data-aos-delay="180"><?php echo $title; ?></h2>
                        <div class="desc" data-aos="fade-down" data-aos-delay="200"><span
                                class="days"><?php echo $package; ?></span>
                            <!--<span class="price">₹ 1235/
                                Person</span> -->
                        </div>
                    </div>
                </div>

                <div class="col-md-10">

                    <div class="text">

                        <?php
                            $fadeDownSpeed = 300;
                            foreach($content as $para){
                                echo "<p data-aos='fade-down' data-aos-delay='$fadeDownSpeed'>$para</p>";
                                $fadeDownSpeed = $fadeDownSpeed + 100;
                              }
                        ?>

                        <!-- <p data-aos='fade-down' data-aos-delay='300'></p>

                        <p data-aos="fade-down" data-aos-delay="400"></p>

                        <p data-aos="fade-down" data-aos-delay="500"> </p> -->
                    </div>

                </div>
                <div class="col-12">

                    <!-- <div class="featured_vedio">
                        <video>
                            <source src="videos/1.mp4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                        <button class="play-btn"><i class="fas fa-play"></i></button>
                    </div> -->

                    <div class="featured_vedio" data-aos="fade-right" data-aos-offset="300">

                        <iframe class="video" src=<?php echo $vedio; ?> frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                        <button class="play-btn"><i class="fas fa-play"></i></button>
                    </div>

                    <div class="attractions-head d-flex">
                        <h4 class="mb-5">Main Attractions</h4>
                        <div class="btn-grp ml-auto d-none">
                            <button class="arrw-lft arrw"><i class="fas fa-caret-left"></i></button>
                            <button class="arrw-rt arrw"><i class="fas fa-caret-right"></i></button>
                        </div>
                    </div>

                </div>

            </div>
        </div>


        <div class="attractions-content">
            <div class="slider">

                <?php
                    for($i=0; $i < count($img); $i++){
                        echo "<div class='item'>
                              <div class='image'>
                                <img src='" . $img[$i] . "' alt='' class='img-fluid'>
                              </div>
                             <div class='text'>
                               <h6>" . $imgTitle[$i] . "</h6>
                              <p>" . $imgContent[$i] . "</p>
                            </div>
                            </div>";
                    }
                ?>


                <!-- <div class='item'>
                    <div class='image'>
                        <img src='images/goa-package/1.jpg' alt='' class='img-fluid'>
                    </div>
                    <div class='text'>
                        <h6>Place Name</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et dignissim
                            mauris, ac Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et
                            dignissim </p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="images/goa-package/2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="text">
                        <h6>Place Name</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et dignissim
                            mauris, ac Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et
                            dignissim </p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="images/goa-package/3.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="text">
                        <h6>Place Name</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et dignissim
                            mauris, ac Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et
                            dignissim </p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="images/goa-package/4.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="text">
                        <h6>Place Name</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et dignissim
                            mauris, ac Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et
                            dignissim </p>
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="images/goa-package/5.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="text">
                        <h6>Place Name</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et dignissim
                            mauris, ac Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et
                            dignissim </p>
                    </div>
                </div> -->



            </div>
        </div>
    </section>

</main>

<?php include 'footer.php'; ?>