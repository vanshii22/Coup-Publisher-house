<?php $current_page_url = "https:www.thecouppublishinghouse.in/contact-us.php";
$title = 'The Coup Publishing House | Contact Us';
$description = 'Get in touch with The Coup Publishing House. We are here to answer your questions, provide support, or help you discover your next great read.';
$keywords = 'contact, The Coup Publishing House, customer support, inquiries, book publishing';
include_once 'components/navbar.php'; ?>

<!-- breadcrumbt start -->
<section id="breadcrumb" class="contact-page">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="#">Contact Us</a></li>
        </ol>
    </nav>
</section>
<!-- breadcrumb end -->
<!-- Contact -->
<section class="section contact " id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="section-heading">
                    <h2 class="mb-2 text-lg">Contact Author</h2>
                    <p>Whether you have questions or you would just like to say hello, contact
                        us.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7 col-sm-12">
                <form class="contact__form form-row contact-form" method="POST" name="contact"
                    action="" id="contactForm">
                    <input type="hidden" name="formType" value="contact">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12 mb-3">
                            <div class="form-group">
                                <input type="text" id="name" name="Name" class="form-control"
                                    placeholder="Enter Your Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <input type="email" name="Email" id="email" class="form-control"
                                    placeholder="Enter Your Email Address">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-3">
                            <div class="form-group">
                                <input type="number" id="phone" name="Phone" class="form-control"
                                    placeholder="Enter Your Phone Number">
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="form-group">
                                <input type="text" name="Location" id="location" class="form-control"
                                    placeholder="Enter Your location">
                            </div>
                        </div>

                        <div class="col-lg-12 col-12">
                            <div class="form-group">
                                <textarea id="message" name="Message" cols="30" rows="6" class="form-control"
                                    placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-lg-flex justify-content-between align-items-center mt-4">
                                <p class="mb-2 mb-lg-0">* Rest assured. We will not spam your inbox.</p>
                                <input id="submit" name="submit" type="submit" class="btn btn-main btn-rounded"
                                    value="Send Message">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-5 col-sm-12 mt-5 mt-md-0">
                <div class="contact-info-block mb-4">
                    <h4 class="mb-2">Contact</h4>
                    <p>+91 8267992305</p>
                </div>

                <div class="contact-info-block mb-4">
                    <h4 class="mb-2">Email</h4>
                    <p>thecouppublishinghouse@gmail.com</p>
                </div>

                <div class="contact-info-block mb-4">
                    <h4 class="mb-2">Location</h4>
                    <p>Narayanam-47 Baghpat Road Meerut</p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Contact end -->

<!-- Seller Section -->
<section class="bestseller py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 mb-3">
                <a href="our-books.php"><img src="assets/images/section3contact.webp" alt="The Coup Publishing House Best Seller" class="w-100"></a>
            </div>
            <div class="col-md-6 col-sm-12">
                <a href="our-books.php"><img src="assets/images/contactsec3-2.webp" alt="The Coup Publishing House new realease" class="w-100"></a>
            </div>
        </div>
    </div>

</section>
<!-- Seller Section End-->

<!-- Newsletter section  start-->
<?php include_once 'includes/newsletter.php' ?>
<!-- section end -->

<!-- Footer -->
<?php include_once 'components/footer.php'; ?>