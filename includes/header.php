<div class="">
    <!-- navigation-transparent -->
    <div class="header">
        <!-- navigation -->
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <a class="logo" href="index.php"><img src="images/logo.png" alt=""></a>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div id="navigation" class="navigation">
                        <ul class="pull-right">
                            <?php 
		 	$pname=basename($_SERVER['PHP_SELF']);
			?>
                            <li <?php if($pname=="index.php" or $pname==""){ ?>class="active"<?php } ?>><a href="index.php" title="Home" class="animsition-link">Home</a></li>
                            <li <?php if($pname=="about-us.php" or $pname==""){ ?>class="active"<?php } ?>><a href="about-us.php" title="About Us" class="animsition-link">About Us</a></li>
                            <li <?php if($pname=="service-list.php" or $pname==""){ ?>class="active"<?php } ?>> <a href="service-list.php" title="Services" class="animsition-link">Services</a>

                            </li>
                            <?php /*?><li <?php if($pname=="gallery.php" or $pname==""){ ?>class="active"<?php } ?>> <a href="gallery.php" title="Gallery" class="animsition-link">Gallery</a>

                            </li><?php */?>
                            <li <?php if($pname=="courses.php" or $pname==""){ ?>class="active"<?php } ?>><a href="courses.php" title="Blog" class="animsition-link">Our Yoga Courses</a>
                                <ul>
                                    <li><a href="meditation.php" title="Yoga & Meditation Retreat" class="animsition-link">Yoga & Meditation Retreat</a></li>
                                    <li><a href="training-hour2.php" title="200 Hours Yoga Teacher Training" class="animsition-link">200 Hours Yoga Teacher Training</a></li>
                                    <li><a href="training-hour3.php" title="300 Hour Yoga Teacher Training Course" class="animsition-link">300 Hour Yoga Teacher Training Course</a></li>
                                    <li><a href="training-hour6.php" title="60 Minutes Regular Group Yoga Classes" class="animsition-link">60 Minutes Regular Group Yoga Classes</a></li>
                                    <li><a href="training-fee.php" title="Yoga Training Dates fees" class="animsition-link">Yoga Training Dates fees</a></li>
                                </ul>
                            </li>
                            <li <?php if($pname=="blog.php" or $pname==""){ ?>class="active"<?php } ?>><a href="blog.php" title="Blog" class="animsition-link">Blog</a>
<!--                                <ul>
                                    <li><a href="blog.php" title="Blog" class="animsition-link">Blog</a></li>
                                </ul>-->
                            </li>
                            <li <?php if($pname=="contact-us.php" or $pname==""){ ?>class="active"<?php } ?>><a href="contact-us.php" title="Contact Us" class="animsition-link">Contact Us</a></li>
<!--                            <li><a href="testimonials.php" title="Testimonials" class="animsition-link">Testimonials</a></li>                            -->
                        </ul>
                    </div>
                </div>
<!--                <div class="col-md-1 hidden-sm hidden-xs navigation-search">
                    <a href="#"><i class="fa fa-search"></i></a>
                </div>-->
            </div>
        </div>
    </div>
</div>