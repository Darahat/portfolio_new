<template>
    <div id="contact" class="contact-area pt-160 pb-140">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="title text-center">
                        <span
                            class="meta-text-color text-uppercase d-block mb-6"
                            >Contact</span
                        >
                        <h2>Get in Touch</h2>
                    </div>
                    <!-- /title -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <div class="row contact-wrapper mt-80">
                <div
                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"
                    data-aos-anchor-placement="top-bottom"
                    data-aos-duration="600"
                >
                    <div
                        class="single-contact white-bg shadow-hover transition3 border-radius10 mb-30"
                    >
                        <div class="contact-icon d-inline-block mb-30">
                            <img
                                src="/images/icon/map-marker.webp"
                                alt="map marker"
                            />
                        </div>
                        <!-- /contact-icon -->
                        <div class="contact-text">
                            <h3>Location</h3>
                            <p>Mymensingh, Bangladesh</p>
                        </div>
                    </div>
                    <!-- /single-contact -->
                </div>
                <!-- /col -->
                <div
                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"
                    data-aos-anchor-placement="top-bottom"
                    data-aos-duration="700"
                >
                    <div
                        class="single-contact white-bg shadow-hover transition3 border-radius10 mb-30"
                    >
                        <div class="contact-icon d-inline-block mb-30">
                            <img
                                src="/images/icon/ser-icon3.webp"
                                alt="contact icon"
                            />
                        </div>
                        <!-- /contact-icon -->
                        <div class="contact-text">
                            <h3>Email</h3>
                            <p>darahat42@gmail.com</p>
                        </div>
                    </div>
                    <!-- /single-contact -->
                </div>
                <!-- /col -->
                <div
                    class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12"
                    data-aos-anchor-placement="top-bottom"
                    data-aos-duration="800"
                >
                    <div
                        class="single-contact white-bg shadow-hover transition3 border-radius10 mb-30"
                    >
                        <div class="contact-icon d-inline-block mb-30">
                            <img
                                src="/images/icon/ser-icon4.webp"
                                alt="contact icon"
                            />
                        </div>
                        <!-- /contact-icon -->
                        <div class="contact-text">
                            <h3>Phone</h3>
                            <p>+8801765849345</p>
                        </div>
                    </div>
                    <!-- /single-contact -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
            <div class="row contact-form-wrapper mt-80">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div
                        class="contact-form white-bg shadow-hover transition3 border-radius10 pt-60 pr-60 pb-60 pl-60"
                    >
                        <form
                            id="contact-form"
                            action="php/mail.php"
                            method="POST"
                        >
                            <div class="row">
                                <div
                                    class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"
                                >
                                    <input
                                        type="text"
                                        name="name"
                                        placeholder="Your Name"
                                    />
                                </div>
                                <!-- /col -->
                                <div
                                    class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12"
                                >
                                    <input
                                        type="email"
                                        name="email"
                                        placeholder="Your Email"
                                    />
                                </div>
                                <!-- /col -->
                                <div
                                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                >
                                    <input
                                        type="text"
                                        name="subject"
                                        placeholder="Your Subject"
                                    />
                                </div>
                                <!-- /col -->
                                <div
                                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                >
                                    <textarea
                                        name="message"
                                        cols="30"
                                        rows="10"
                                        placeholder="Your Message"
                                    ></textarea>
                                </div>
                                <!-- /col -->
                                <div
                                    class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12"
                                >
                                    <button
                                        class="btn position-relative over-hidden theme-bg text-uppercase"
                                        type="submit"
                                    >
                                        Send Message
                                    </button>
                                </div>
                                <!-- /col -->
                            </div>
                            <!-- /row -->
                        </form>
                        <p class="ajax-response"></p>
                    </div>
                    <!-- /contact-form -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
</template>
