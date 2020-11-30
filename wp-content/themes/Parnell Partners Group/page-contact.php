<?php get_header()?>

<div data-index='4' class="wrapper contact-page">
    <main>

        <div class="contact-top-image">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/the-lighthouse/the-light-house-auckland-live-4.jpg" alt="">
            <h1>Let's discuss this</h1>
        </div>

        <div class="contact-form-section">
            <form action="" method="post" class="form">
                <div class="name-form-group">
                    <div class="group">
                        <p>Name<span>*</span></p>
                        <div class="formGroup">
                            <input type="text" name="firstName" id="firstName" placeholder="">
                        </div>
                    </div>

                    <div class="group">
                        <p>Last Name<span>*</span></p>
                        <div class="formGroup">
                            <input type="text" name="lastName" id="lastName" placeholder="">
                        </div>
                    </div>

                    <div class="group">
                        <p>Subject</p>
                        <div class="formGroup">
                            <input type="text" name="subject" id="subject" placeholder="">
                        </div>
                    </div>

                    <div class="group">
                        <p>Email<span>*</span></p>
                        <div class="formGroup">
                            <input type="text" name="email" id="email" placeholder="">
                        </div>
                    </div>
                </div>

                <div class="group">
                    <p>Message</p>
                    <div class="formGroup">
                        <textarea name="message" rows="10" cols="30"></textarea>
                    </div>
                </div>

                <div class="submit">
                    <input name="submit" id="submit" type="submit" value="Submit" />
                </div>
            </form>
        </div>

        <!----------------------------------------------------->
        <!----------------- Address Section ------------------->
        <!----------------------------------------------------->

        <div class="contact-address-section">
            <div class="contact-auckland face" data-state="closed">
                <h3>Auckland</h3>
            </div>
            <div class="contact-addresses">
                <ul>
                    <li>
                        <div class="phone-container address">
                            <a href="tel:09 30 4 0036">
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="phone">
                                    <h3><span>Phone</span><br>+64 9 304 0036</h3>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="email-container address">
                            <a href="mailto:info@parnellpartnersgroup.com">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="email">
                                    <h3><span>E-mail</span><br>info@parnellpartnersgroup.com</h3>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="address-container address">
                            <a href="#">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="street-address">
                                    <h3><span>Address</span><br>Parnell Partners Group NZ<br>
                                        Level 1, 272 Parnell Road, Auckland, New Zealand</h3>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="contact-autralia face" data-state="closed">
                <h3>Australia</h3>
                <p>Melbourne | Brisbane</p>
            </div>
            <div class="contact-addresses">
                <ul>
                    <!-- <li>
                        <div class="phone-container address">
                            <a href="tel:09 30 4 0036">
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="phone">
                                    <h3><span>Phone</span><br>+64 9 304 0036</h3>
                                </div>
                            </a>
                        </div>
                    </li> -->
                    <li>
                        <div class="email-container address">
                            <a href="mailto:info@parnellpartnersgroup.com">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="email">
                                    <h3><span>E-mail</span><br>info@parnellpartnersgroup.com</h3>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="address-container address">
                            <a href="#">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="street-address">
                                    <h3><span>Address</span><br>Parnell Partners Group Australia<br>
                                        Parnell Partners Group (PPG Australia)
                                        Melbourne, Australia – 12/72 Luck Street Eltham Vic 3095
                                        Brisbane, Australia P. +61730406019
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="contact-asia face" data-state="closed">
                <h3>Asia</h3>
                <p>Singapore</p>
            </div>
            <div class="contact-addresses">
                <ul>
                    <!-- <li>
                        <div class="phone-container address">
                            <a href="tel:09 30 4 0036">
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="phone">
                                    <h3><span>Phone</span><br>+64 9 304 0036</h3>
                                </div>
                            </a>
                        </div>
                    </li> -->
                    <li>
                        <div class="email-container address">
                            <a href="mailto:info@parnellpartnersgroup.com">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="email">
                                    <h3><span>E-mail</span><br>info@parnellpartnersgroup.com</h3>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="address-container address">
                            <a href="#">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="street-address">
                                    <h3><span>Address</span><br>Level 25, One Raffles Quay,
                                        Singapore 048503</h3>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="contact-north-america face" data-state="closed">
                <h3>North America</h3>
            </div>
            <div class="contact-addresses">
                <ul>
                    <li>
                        <div class="email-container address">
                            <a href="mailto:info@parnellpartnersgroup.com">
                                <div class="icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="email">
                                    <h3><span>E-mail</span><br>usa@parnellpartnersgroup.com</h3>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="address-container address">
                            <a href="#">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="street-address">
                                    <h3><span>Address</span><br>(Boulder, Colorado)<br>
                                        3189 5th Street Boulder
                                        Colorado, USA 80304</h3>
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</div>

        <?php get_footer()?>