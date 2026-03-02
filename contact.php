<?php include 'header.php'; ?>

<style>
.contact-details__info li .icon {
    min-width: 82px !important;
}
</style>
<!-- Start main-content -->
<section class="page-title" style="background-image: url(images/background/page-title.png);">
    <div class="auto-container">
        <div class="title-outer text-center">
            <h1 class="title">Contact Us</h1>
            <ul class="page-breadcrumb">
                <li><a href="index">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!-- end main-content -->

<!--Contact Details Start-->
<section class="contact-details">
    <div class="container ">
        <div class="row">
            <div class="col-xl-7 col-lg-6">
                <div class="sec-title">
                    <span class="sub-title">Contact Us</span>
                    <h2>Feel free to write</h2>
                </div>
                <!-- Contact Form -->
                <form id="contact_us_form">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <input name="form_name" class="form-control" type="text"
                                    placeholder="Enter Your Full Name*" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_phone" class="form-control" type="number"
                                    placeholder="Enter Phone Number*" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_address" class="form-control required" type="text"
                                    placeholder="Enter Your Address*">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_age" class="form-control required" type="text"
                                    placeholder="Enter Your Age" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input name="form_occupation" class="form-control required " type="text"
                                    placeholder="Enter Your Occupation*">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <textarea name="form_message" class="form-control " rows="7"
                            placeholder="Enter Message"></textarea>
                    </div>
                    <div class="mb-5">
                        <input name="form_botcheck" class="form-control" type="hidden" value="" />
                        <button type="submit" class="theme-btn btn-style-one mb-3 mb-xl-0"
                            data-loading-text="Please wait..."><span class="btn-title">Submit Inquiry</span></button>
                    </div>
                </form>
                <!-- Contact Form Validation-->
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="contact-details__right">
                    <div class="sec-title">
                        <span class="sub-title">Need any help?</span>
                        <h2>Get in touch with us</h2>
                        <div class="text" style="text-align: justify;">Get in touch with our team for reliable and
                            structured
                            corporate commute solutions. Whether you need daily office transportation or customized
                            corporate
                            packages, we’re here to assist you with prompt and professional support.</div>
                    </div>
                    <ul class="list-unstyled contact-details__info">
                        <li class="d-block d-sm-flex align-items-sm-center ">
                            <div class="icon">
                                <span class="lnr-icon-phone-plus"></span>
                            </div>
                            <div class="text ml-xs--0 mt-xs-10">
                                <h4>Have any question?</h4>
                                <a href="tel:+917500874763"> +91 7500874763</a>
                            </div>
                        </li>
                        <li class="d-block d-sm-flex align-items-sm-center ">
                            <div class="icon">
                                <span class="lnr-icon-envelope1"></span>
                            </div>
                            <div class="text ml-xs--0 mt-xs-10">
                                <h4>Write email</h4>
                                <a href="mailto:support@quikzycabs.com"><span>support@quikzycabs.com</span></a>
                            </div>
                        </li>
                        <li class="d-block d-sm-flex align-items-sm-center ">
                            <div class="icon">
                                <span class="lnr-icon-location"></span>
                            </div>
                            <div class="text ml-xs--0 mt-xs-10">
                                <h4>Location</h4>
                                <span>9th floor, Spaze i-Tech park, sector 49, Gurgaon (Haryana) 122018, India</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Details End-->

<!-- Map Section-->
<section class="map-section">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4226.484971809572!2d77.03860167606159!3d28.415490293902735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d2353b4d977a7%3A0xcc35d990a576e2b1!2sSpaze%20Tech%20Park!5e1!3m2!1sen!2sin!4v1772451355374!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<!--End Map Section-->

<?php include 'footer.php'; ?>