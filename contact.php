<!DOCTYPE html>


<?php
    include_once("layouts/header.php")
?>
<body>
    <div class="theme-layout">

        <?php
            include_once("layouts/nav-menu.php")
        ?>
        
        <div class="page-top">
            <div class="parallax" style="background:url(images/parallax1.jpg);"></div>	
            <div class="container"> 
                <h1>CONTACT <span>US</span></h1>
                <ul>
                    <li><a href="index.php" title="">Home</a></li>
                    <li><a href="contact.php" title="">Contact Us</a></li>
                </ul>
            </div>
        </div><!--- PAGE TOP -->

        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.301345457225!2d-2.3315483854644605!3d7.320007694717135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdacf16de27b9c3%3A0xa849476e1d3eec30!2sSunyani%2C%20Tonsuom%20estate!5e0!3m2!1sen!2sgh!4v1583616399107!5m2!1sen!2sgh" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>	
                            </div><!--- GOOGLE MAP -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="block remove-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title2">
                                <!-- <span>Pellent Esque Tellus</span> -->
                                <h2>LET'S <span>GET IN TOUCH</span></h2>
                            </div>

                            <div class="row">
                                <div class="col-md-6 column">
                                    <h4>CONTACT INFORMATION</h4>
                                    <div class="space"></div>
                                    <p>Vision Sanctuary International is a family and as such we always have the time to attend to your spiritual, emotional and psychological needs.
                                        Feel free to contact us via any of the channels that suit you. You can also send us a quick message and we'll gladly respond to you.
                                        <br/>
                                        Thank you for taking time to visit us online.
                                        <br/>
                                        God Richly Bless you.
                                    </p>
                                    <div class="space"></div>
                                    <ul class="social-media">
                                        <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div><!--- CONTACT INFORMATION -->
                                <div class="col-md-6 column">
                                    <h4>FILL IN THE FORM BELOW</h4>
                                    <div class="space"></div>
                                    <div id="message"></div>
                                    <form class="theme-form" method="post" action="https://html.webinane.com/deeds/contact.php" name="contactform" id="contactform">
                                        <input name="name" class="half-field form-control" type="text" id="name"  placeholder="Name" />
                                        <input name="email" class="half-field form-control" type="text" id="email" placeholder="Email" />
                                        <textarea name="comments" class="form-control" id="comments" placeholder="Description" ></textarea>
                                        <div class="g-recaptcha" data-sitekey="6LelmzAUAAAAAHBE2SJeRMfnzYVxH9RMGQstUij2"></div>
                                        <input class="submit" type="submit"  id="submit" value="SUBMIT" />
                                    </form><!--- FORM -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>	

        <section>
            <div class="block remove-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-info">
                                <div class="col-md-3">
                                    <div class="info-block">
                                        <i class="fa fa-home"></i>
                                        <p>Tonsuom Estate Sunyani, Ghana - West Africa</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="info-block">
                                        <i class="fa fa-info"></i>
                                        <p>www.vsi.org</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="info-block">
                                        <i class="fa fa-envelope-o"></i>
                                        <p>info@vsi.org</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="info-block">
                                        <i class="fa fa-mobile"></i>
                                        <p>(+233 54 268 6533)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--- CONTACT INFORMATION -->

        <?php
            include_once("layouts/footer.php")
        ?>

    </div>

    <!-- SCRIPTS-->
    <!-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="js/modernizr.custom.17475.js"></script>
    <script src="js/jquery.1.10.2.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.poptrox.min.js" type="text/javascript"></script>
    <script src="js/enscroll-0.5.2.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/ajax.contact-form.js"></script>
    <script src="js/styleswitcher.js"></script>
    <script src="../../www.google.com/recaptcha/api.js"></script>
    <script type="text/javascript" src="js/jquery.downCount.js"></script>  -->

    <?php
        include_once("layouts/footer-scripts.php")
    ?>


</body>