<!DOCTYPE html>
<html lang="en">

<head>
   @include('layoutsweb.head')
   @yield('customhead')
</head>

<body data-rsssl=1
   class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
   <div class="body-wrapper  float-menu">


      @include('layoutsweb.header')
      @yield('content')
      @include('layoutsweb.foot')
      @yield('customfooter')
      @include('layoutsweb.footer')
      <div class="greennature-payment-lightbox-overlay" id="greennature-payment-lightbox-overlay"></div>
      <div class="greennature-payment-lightbox-container" id="greennature-payment-lightbox-container">
         <div class="greennature-payment-lightbox-inner">
            <form class="greennature-payment-form" id="greennature-payment-form">
               <h3 class="greennature-payment-lightbox-title">
                  <span class="greennature-head">PANACEU :</span>
                  <span class="greennature-tail">Engineering Beyond Thoughts</span>
               </h3>

               <div class="greennature-payment-amount">
                  <div class="greennature-payment-amount-head">Fill out the below form. </div>
                  <!-- <a class="greennature-payment-price-preset greennature-active" data-val="10">$10</a>
                  <a class="greennature-payment-price-preset" data-val="20">$20</a>
                  <a class="greennature-payment-price-preset" data-val="30">$30</a> -->
                  <!-- <input class="greennature-payment-price-fill" type="text" placeholder="Or Your Amount(USD)" />
                  <input class="greennature-payment-price" type="hidden" name="amount" value="10" /> -->

                  <input class="greennature-payment-price" type="hidden" name="a3" value="10">
               </div>

               <div class="greennature-paypal-attribute">
                  <span class="greennature-head">How do you find us?</span>
                  <span class="greennature-subhead">I have knew Panaceu through</span>
                  <select name="t3" class="greennature-recurring-option">
                     <option value="0">Internet Search</option>
                     <option value="W">Telephonic Call</option>
                     <option value="M">Social Sites</option>
                     <option value="Y">Recommendation</option>
                  </select>
                  <span class="greennature-subhead"></span>
                  <input type="hidden" name="p3" value="1" />
                  <div class="greennature-recurring-time-wrapper">
                     <span class="greennature-subhead">How many times would you like this to recur?  *</span>
                     <select name="srt" class="greennature-recurring-option">
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                     </select>
                  </div>
                  <input type="hidden" name="cmd" value="_xclick">
                  <input type="hidden" name="bn" value="PP-BuyNowBF">
                  <input type="hidden" name="src" value="1">
                  <input type="hidden" name="sra" value="1">
               </div>

               <div class="greennature-form-fields">
                  <div class="six columns">
                     <div class="columns-wrap greennature-left">
                        <span class="greennature-head">Name *</span>
                        <input class="greennature-require" type="text" name="name">
                     </div>
                  </div>
                  <div class="six columns">
                     <div class="columns-wrap greennature-right">
                        <span class="greennature-head">Last Name *</span>
                        <input class="greennature-require" type="text" name="last-name">
                     </div>
                  </div>
                  <div class="clear"></div>
                  <div class="six columns">
                     <div class="columns-wrap greennature-left">
                        <span class="greennature-head">Email *</span>
                        <input class="greennature-require greennature-email" type="text" name="email">
                     </div>
                  </div>
                  <div class="six columns">
                     <div class="columns-wrap greennature-right">
                        <span class="greennature-head">Phone</span>
                        <input type="text" name="phone">
                     </div>
                  </div>
                  <div class="clear"></div>
                  <div class="six columns">
                     <div class="columns-wrap greennature-left">
                        <span class="greennature-head">Address</span>
                        <textarea name="address"></textarea>
                     </div>
                  </div>
                  <div class="six columns">
                     <div class="columns-wrap greennature-right">
                        <span class="greennature-head">Additional Note</span>
                        <textarea name="additional-note"></textarea>
                     </div>
                  </div>
                  <div class="clear"></div>
               </div>

               <div class="greennature-payment-method">
                  <img class="greennature-active" src="images/paypal.png" alt="paypal" /><img src="images/stripe.png"
                     alt="stripe" />
                  <input type="hidden" name="payment-method" value="paypal" />
               </div>
               <div class="greennature-message"></div>
               <div class="greennature-loading">Loading...</div>
               <input type="submit" value="Submit Now" />
            </form>
         </div>
      </div>
   </div>

</body>

</html>