<div class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="six columns">
                    <h2 class="contact-heading">Say <strong>Hello</strong></h2>
                    <p class="contact-subheading">Don´t be shy, drop us an email and say hello! We are a really nice
                        bunch of people :)</p>
                    <ul class="contact-methods">
                        <li>
                            <span class="contact-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </span>
                            (123) 456-7890
                        </li>
                        <li>
                            <span class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </span>
                            hello@dahoam.com
                        </li>
                        <li>
                            <span class="contact-icon">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </span>
                            @dahoam
                        </li>
                        <li>
                            <span class="contact-icon">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </span>
                            facebook.com/dahoam
                        </li>
                        <li>
                            <span class="contact-icon">
                                <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                            </span>
                            google.com/dahoam
                        </li>
                        <li>
                            <span class="contact-icon">
                                <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                            </span>
                            pinterest.com/dahoam
                        </li>
                    </ul>
                </div>
                <div class="six columns">
                    <?php if (isset($_GET['contacted'])): ?>
                        <p id="contact-success">Das Formular wurde erfolgreich verschickt.</p>
                        <?php endif; ?>
                    <form class="contact-form" action="form.php" method="POST">
                        <label for="contact-name" class="contact-label">Your Name *</label>
                        <input name="name" id="contact-name" class="contact-input" type="text" placeholder="Your Name *" required />

                        <label for="contact-email" class="contact-label">Your Email *</label>
                        <input name="email" id="contact-email" class="contact-input" type="text" placeholder="Your Email *" required />

                        <label for="contact-message" class="contact-label">Your message</label>
                        <textarea name="message" id="contact-message" class="contact-input contact-message" placeholder="Your message *"
                            required="required"></textarea>

                        <input class="contact-submit" type="submit" value="Submit Message" />
                    </form>
                </div>
            </div>
        </div>
    </div>