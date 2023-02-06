   <!-- ======= Contact Section ======= -->
   <!-- <section id="contact" class="contact" >

      <div class="container" style="padding-top:10%">

        <div class="section-title">
          <h2>contact/</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Dar es Salaam road street,near by kisasa petrol station</p>
                <p>Dodoma,Makulu Ward</p>
                <p>P.o.Box 2954</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@tanzaniastepupfoundation.co.tz</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+255 763 966 297</p>
              </div>

            </div>

          </div>
          <div class="col-lg-8 mt-5 mt-lg-0"  data-aos-delay="200">
            <form method="post" wire:submit.prevent="Emailsend"  class="php-email-form">
              <div class="row">
              <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name"  placeholder="Your Name" required wire:model="name">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required  wire:model="email">
                </div>
                 <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required wire:model="subject" >
                 </div>
                 <div class="form-group mt-3">
                   <textarea class="form-control"  type="text" name="message" rows="5" id="message" placeholder="Message" required wire:model="message"></textarea>
                  </div>
                <div class="loading">Loading</div>
                @if(Session::has('error'))
                <div class="error-message">{{ Session::get('error') }}</div>
                 @endif
                 @if(Session::has('success'))
                <div class="sent-message">{{ Session::get('success') }}</div>
                 @endif
                 </div>
                 <div class="text-center">
                   <button type="submit" style="background-color: LightSeaGreen">Send</button>
                 </div>
              </div>
            </form>

          </div>

        </div>

      </div>
    </section> -->




     <section class="contact-section">
            <div class="container">
                
    
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" method="post" wire:submit.prevent="Emailsend"  action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Messege" wire:model="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" wire:model="name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" wire:model="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" wire:model="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>India</h3>
                                <p>India ,,12334</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+255 621 590 901</h3>
                                <h3>+255 753 570 624</h3>
                                <h3>+91 7300 897 612</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@carlinternational.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>