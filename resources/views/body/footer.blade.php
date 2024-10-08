<footer class="main-footer">
    <div class="footer-top bg-color-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>About Kise</h3>
                        </div>
                        <div class="text">
                            <p>With Kise, you can easily categorize your spending, monitor your income streams, and gain
                                valuable insights into your financial habits. Our user-friendly interface and robust
                                features make it simple for anyone to manage their finances, regardless of their
                                financial literacy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list class">
                                <li><a href="index.html">About Us</a></li>
                                <li><a href="index.html">Listing</a></li>
                                <li><a href="index.html">How It Works</a></li>
                                <li><a href="index.html">Our Services</a></li>
                                <li><a href="index.html">Our Blog</a></li>
                                <li><a href="index.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title">
                            <h3>Top News</h3>
                        </div>
                        <div class="post-inner">
                            <div class="post">
                                <figure class="post-thumb"><a href="blog-details.html"><img
                                            src="{{ asset('frontend/assets/images/resource/footer-post-1.jpg') }}"
                                            alt=""></a></figure>
                                <h5><a href="blog-details.html">The Added Value Social Worker</a></h5>
                                <p>Mar 25, 2020</p>
                            </div>
                            <div class="post">
                                <!-- <figure class="post-thumb"><a href="blog-details.html"><img
                                            src="{{ asset('frontend/assets/images/resource/footer-post-2.jpg') }}"
                                            alt=""></a></figure> -->
                                <h5><a href="blog-details.html">Ways to Increase Trust</a></h5>
                                <p>Mar 24, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contacts</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>Flat 20, Reynolds Neck, North
                                    Helenaville, FV77 8WS</li>
                                <li><i class="fas fa-microphone"></i><a href="tel:23055873407">+2(305)
                                        587-3407</a></li>
                                <li><i class="fas fa-envelope"></i><a
                                        href="mailto:info@example.com">info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <!-- <figure class="footer-logo"><a href="index.html"><img
                            src="{{ asset('frontend/assets/images/footer-logo.png') }}" alt=""></a>
                        </figure> -->
                <div class="copyright pull-left">
                    <p id="copyright"><a href="index.html">Kise</a> &copy; 2021 All Right Reserved</p>
                </div>
                <!-- <ul class="footer-nav pull-right clearfix">
                    <li><a href="index.html">Terms of Service</a></li>
                    <li><a href="index.html">Privacy Policy</a></li>
                </ul> -->
            </div>
        </div>
    </div>
</footer>
<style>
    .main-footer {
        background-color: #1d1d1f;
        /* Example background color */
    }

    .auto-container {
        padding: 30px 0;
        /* Example padding */
    }

    .footer-widget h3 {
        font-size: 18px;
        color: #669;
        margin-bottom: 15px;
    }

    .footer-widget p {
        font-size: 14px;
        color: #669;
        line-height: 1.5;
    }

    .footer-widget a {
        color: #669;
        transition: all 0.3s ease;
    }

    .footer-widget a:hover {
        color: #007bff;
        /* Example hover color */
    }

    .footer-logo img {
        width: 150px;
        /* Example width */
        height: auto;
    }

    .copyright p {
        font-size: 14px;
        color: #669;
    }

    .footer-nav a {
        color: #669;
        transition: all 0.3s ease;
    }

    .footer-nav a:hover {
        color: #007bff;
        /* Example hover color */
    }

    ul {
        list-style-type: none;
    }

    #copyright {
        text-align: Center;
    }

    /* Media queries for responsive adjustments (optional) */
    @media (max-width: 768px) {
        /* ... */
    }
</style>