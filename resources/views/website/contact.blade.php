@extends('layoutsweb.default')

@section('content')
<div class="content-wrapper">
<div class="greennature-content">
<section id="content-section-1">
                        <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all greennature-skin-dark-skin" id="greennature-parallax-wrapper-1" data-bgspeed="0" style="background-image: url('upload/about-title-bg.jpg'); padding-top: 260px; padding-bottom: 140px; ">
                            <div class="container">
                                <div class="greennature-title-item">
                                    <div class="greennature-item-title-wrapper greennature-item  greennature-center greennature-extra-large ">
                                        <div class="greennature-item-title-container container">
                                            <div class="greennature-item-title-head">
                                                <h3 class="greennature-item-title greennature-skin-title greennature-skin-border">Contact Details</h3>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
               



<!-- Sidebar With Content Section-->
<div class="with-sidebar-wrapper">
    <div class="with-sidebar-container container">
        <div class="with-sidebar-left eight columns">
            <div class="with-sidebar-content twelve columns">
                <section id="content-section-2">
                    <div class="section-container container">
                        <div class="greennature-item greennature-content-item" style="margin-bottom: 60px;"><span class="clear"></span><span class="greennature-space" style="margin-top: -22px; display: block;"></span>
                            <h5 class="greennature-heading-shortcode " style="font-weight: bold;">Please fill out the form below. </h5>
                            <p> <span class="clear"></span><span class="greennature-space" style="margin-top: 25px; display: block;"></span>
                                <div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
                                    <form class="contact" action="#" method="post" enctype="multipart/form-data" onclick="">
                                        @csrf

                                        <div class="quform-elements">
                                            <div class="quform-element">
                                                <p>
                                                    
                                                    <span class="wpcf7-form-control-wrap your-name">
                                                        <input id="name" type="text" name="name" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Name*">
                                                    </span> 
                                                </p>
                                            </div>
                                            <div class="quform-element">
                                                <p>
                                                    
                                                    <span class="wpcf7-form-control-wrap your-email">
                                                        <input id="email" type="text" name="email" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Email*">
                                                    </span> 
                                                </p>
                                            </div>
                                            <div class="quform-element">
                                                <p>
                                                    
                                                    <span class="wpcf7-form-control-wrap your-email">
                                                        <input id="phone" type="text" name="phone" size="40" class="input1" aria-required="true" aria-invalid="false" placeholder="Phone*">
                                                    </span> 
                                                </p>
                                            </div>
                                            <div class="quform-element">
                                                <p>
                                                    
                                                    <span class="wpcf7-form-control-wrap your-message">
                                                        <textarea  id="message" name="message" cols="40" rows="10" class="input1" aria-invalid="false" placeholder="Message*"></textarea>
                                                    </span>
                                                </p>
                                            </div>
                                            <p>
                                                <!-- Begin Submit button -->
                                                <div class="quform-submit">
                                                    <div class="quform-submit-inner">
                                                        <button type="submit" class="submit-button"><span>Send</span></button>
                                                    </div>
                                                    <div class="quform-loading-wrap"><span class="quform-loading"></span></div>
                                                </div>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </section>
            </div>

            <div class="clear"></div>
        </div>

        <div class="greennature-sidebar greennature-right-sidebar four columns">
            <div class="greennature-item-start-content sidebar-right-item">
                <!-- <div id="text-6" class="widget widget_text greennature-item greennature-widget">
                    <h3 class="greennature-widget-title">Before Contacting Us</h3>
                    <div class="clear"></div>
                    <div class="textwidget">.</div>
                </div> -->
                <div id="text-7" class="widget widget_text greennature-item greennature-widget">
                    <h3 class="greennature-widget-title">Contact Information</h3>
                    <div class="clear"></div>
                    <div class="textwidget">
                        <h4>Panaceu Systems Private Limited</h4>
                        <p>Address: Khushnuma Complex, 7- Meera Bai Marg, Hazratganj, Lucknow, UP, India. PIN-226001.</p>
                        <p><i class="greennature-icon fa fa-phone" style="vertical-align: middle; color: #444444; font-size: 16px; "></i> +91-88084-88084</p>
                        <p><i class="greennature-icon fa fa-phone" style="vertical-align: middle; color: #444444; font-size: 16px; "></i> +91-88084-88082</p>
                        <p><i class="greennature-icon fa fa-envelope" style="vertical-align: middle; color: #444444; font-size: 16px; "></i> info@panaceu.com</p>
                        <p><i class="greennature-icon fa fa-clock-o" style="vertical-align: middle; color: #444444; font-size: 16px; "></i> Weekdays(Mon-Sat) 09:00-17:00</p>
                    </div>
                </div>
                <div id="text-8" class="widget widget_text greennature-item greennature-widget">
                    <h3 class="greennature-widget-title">Social Media</h3>
                    <div class="clear"></div>
                    <div class="textwidget"><a href="#"><i class="greennature-icon fa fa-facebook" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href="#"><i class="greennature-icon fa fa-twitter" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href="#"><i class="greennature-icon fa fa-dribbble" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href="#"><i class="greennature-icon fa fa-pinterest" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href="#"><i class="greennature-icon fa fa-google-plus" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a> <a href="#"><i class="greennature-icon fa fa-instagram" style="vertical-align: middle; color: #444444; font-size: 28px; " ></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<!-- Below Sidebar Section-->
<div class="below-sidebar-wrapper">
    <section id="content-section-3">
        <div class="greennature-parallax-wrapper greennature-background-image gdlr-show-all no-skin" id="greennature-parallax-wrapper-1" data-bgspeed="0.2" style="background-image: url('upload/service-bg.jpg'); padding-top: 100px; padding-bottom: 50px; ">
            <div class="container">
                <div class="four columns">
                    <div class="greennature-box-with-icon-ux greennature-ux">
                        <div class="greennature-item greennature-box-with-icon-item pos-top type-circle">
                            <div class="box-with-circle-icon" style="background-color: #5dc269"><i class="fa fa-envelope" style="color:#ffffff;"></i>
                                <br>
                            </div>
                            <h4 class="box-with-icon-title">Contact By Email</h4>
                            <div class="clear"></div>
                            <div class="box-with-icon-caption">
                                <p>Email: info@panaceu.com</p>
                                <p>Email: psplcbg@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="four columns">
                    <div class="greennature-box-with-icon-ux greennature-ux">
                        <div class="greennature-item greennature-box-with-icon-item pos-top type-circle">
                            <div class="box-with-circle-icon" style="background-color: #5dc269"><i class="fa fa-phone" style="color:#ffffff;"></i>
                                <br>
                            </div>
                            <h4 class="box-with-icon-title">Contact By Phone</h4>
                            <div class="clear"></div>
                            <div class="box-with-icon-caption">
                                <p>+91-88084-88084</p>
                                <p>+91-88084-88082</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="four columns">
                    <div class="greennature-box-with-icon-ux greennature-ux">
                        <div class="greennature-item greennature-box-with-icon-item pos-top type-circle">
                            <div class="box-with-circle-icon" style="background-color: #5dc269"><i class="fa fa-home" style="color:#ffffff;"></i>
                                <br>
                            </div>
                            <h4 class="box-with-icon-title">Come To See Us</h4>
                            <div class="clear"></div>
                            <div class="box-with-icon-caption">
                                <p>Khushnuma Complex, 7- Meera Bai Marg, Hazratganj, Lucknow, UP, India. PIN-226001</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </section>
</div>
<!-- Above Sidebar Section-->
<div class="above-sidebar-wrapper">
    <section id="content-section-1">
        <div class="greennature-full-size-wrapper gdlr-show-all no-skin" style="padding-top: 91px; padding-bottom: 0px;  background-color: #ffffff; ">
            <div class="greennature-item greennature-content-item" style="margin-bottom: 0px;">
            <iframe style="width:100%; height:480px; border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.6072218427744!2d80.9526133!3d26.852442399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd0004429d3d%3A0x5bc138ae021ea02!2sPanaceu%20Systems%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1724059323827!5m2!1sen!2sin" loading="lazy"></iframe>
                <!-- <iframe style="width:100%; height:480px; border:0" src="https://maps.app.goo.gl/iQEs2KHrGC1Qukwr6" width="600" height="450" ></iframe> -->
                <div style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </section>
</div>

</div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
@endsection
