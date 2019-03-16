<?php include ( 'nav.html'); ?>
<link href="./assets/css/boot.min.css" rel="stylesheet" id="bootstrap-css">
<link href="./assets/css/style.css" rel="stylesheet" id="bootstrap-css">
<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.js"></script>
<script src="./js/map.js"></script>
<script src="./js/datepicker.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/jquery.datetimepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
<section class="main">
    <div class="container top">
        <div class="row">
            <div class="col-md-5">
               
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="tabbable-panel margin-tops4 ">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs tabtop  tabsetting">
                                <li class="active"> <a href="#1" data-toggle="tab">Minicabee</a> 
                                </li>
                                <li> <a href="#2" data-toggle="tab">Airport Journey</a> 
                                </li>
                                <li> <a href="#3" data-toggle="tab">Long Trips</a> 
                                </li>
                                <li> <a href="#4" data-toggle="tab"> Corporate Bookings </a> 
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="1">
                                    <br>
                                    <br>
                                    <h4 class="heading4">Ride with a Comfort and Flexi Fare!</h4>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <select id="way" class="selectit controls" name="np" required="">
                                                <option value="oneway">Single Way</option>
                                                <option value="twoway">Two Way</option>

                                            </select>
                                        </div>

                                        <div class="col-md-4">
                                            <button class="buttonvia" data-toggle="collapse" data-target="#demo">Need Via point ?</button>
                                        </div>
                                        <div class="col-md-12">
                                            <input id="autocomplete" class="controls" type="text" placeholder="Enter Pickup Location or Postcode " name="pick" required="" autocomplete="off">
                                        </div>
                                         <div id="demo" class="collapse">
                                              <div class="col-md-12">
                                            <input id="autocomplete2" class="controls" type="text" placeholder="Add Via Point 1" name="pick" required="" autocomplete="off">
                                        </div>
                                           
                                        </div>
                                        <div class="col-md-12">
                                            <input id="autocomplete3" class="controls" type="text" placeholder="Enter Dropoff Location or Postcode" name="drop" required="" autocomplete="off">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="selectit controls" name="np" required="">
                                                <option value="1">1 Pass</option>
                                                <option value="2">2 Pass</option>
                                                <option value="3">3 Pass</option>
                                                <option value="4">4 Pass</option>
                                                <option value="5">5 Pass</option>
                                                <option value="6">6 Pass</option>
                                                <option value="7">7 Pass</option>
                                                <option value="8">8 Pass</option>
                                                <option value="9">9 Pass</option>
                                                <option value="10">10 Pass</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="selectit controls" name="nl" data-toggle="tooltip" data-placement="auto" required="">
                                                <option value="1" selected="">0 Lugg</option>
                                                <option value="1">1 Lugg</option>
                                                <option value="2">2 Lugg</option>
                                                <option value="3">3 Lugg</option>
                                                <option value="4">4 Lugg</option>
                                                <option value="5">5 Lugg</option>
                                                <option value="6">6 Lugg</option>
                                                <option value="7">7 Lugg</option>
                                                <option value="8">8 Lugg</option>
                                                <option value="9">9 Lugg</option>
                                                <option value="10">10 Lugg</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <input id="datetimepicker2" class="controls" type="text" placeholder="Pickup Date & Time" name="drop" required="" autocomplete="off">

                                        </div>
                                        <div id="twoway" class="colors" style="display:none">
                                            <div class="col-md-6">


                                                <input id="datetimepicker" class="controls" type="text" placeholder="Return Pickup Date & Time" name="drop" required="" autocomplete="off">
                                            </div>
                                            <div class="col-md-6">
                                                <select class="selectit controls" name="np" required="">
                                                    <option value="1">Same Locations</option>
                                                    <option value="2">Different Locations</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <center>
                                        <button class="buttonexplore">Get Instant Quote</button>
                                    </center>
                                </div>
                                
                                                                <div class="tab-pane fade in" id="2">
                                    <br>
                                    <br>
                                    <h4 class="heading4">Get <span>10% Discount</span> on Airport Trips!</h4>
                                    <br>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <select id="way1" class="selectit controls" name="np" required="">
                                                <option value="oneway1">Single Way</option>
                                                <option value="twoway1">Two Way</option>

                                            </select>
                                        </div>

                                       
                                        <div class="col-md-12">
                                            <input id="autocomplete" class="controls" type="text" placeholder="Enter Pickup Airport or Location" name="pick" required="" autocomplete="off">
                                        </div>
                                          <div id="demo" class="collapse">
                                               <div class="col-md-12">
                                            <input id="autocomplete" class="controls" type="text" placeholder="Enter Pickup Airport or Location" name="pick" required="" autocomplete="off">
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                            <input id="autocomplete2" class="controls" type="text" placeholder="Enter Dropoff Airport or Location" name="drop" required="" autocomplete="off">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="selectit controls" name="np" required="">
                                                <option value="1">1 Pass</option>
                                                <option value="2">2 Pass</option>
                                                <option value="3">3 Pass</option>
                                                <option value="4">4 Pass</option>
                                                <option value="5">5 Pass</option>
                                                <option value="6">6 Pass</option>
                                                <option value="7">7 Pass</option>
                                                <option value="8">8 Pass</option>
                                                <option value="9">9 Pass</option>
                                                <option value="10">10 Pass</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="selectit controls" name="nl" data-toggle="tooltip" data-placement="auto" required="">
                                                <option value="1" selected="">0 Lugg</option>
                                                <option value="1">1 Lugg</option>
                                                <option value="2">2 Lugg</option>
                                                <option value="3">3 Lugg</option>
                                                <option value="4">4 Lugg</option>
                                                <option value="5">5 Lugg</option>
                                                <option value="6">6 Lugg</option>
                                                <option value="7">7 Lugg</option>
                                                <option value="8">8 Lugg</option>
                                                <option value="9">9 Lugg</option>
                                                <option value="10">10 Lugg</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <input id="datetimepicker3" class="controls" type="text" placeholder="Pickup Date & Time" name="drop" required="" autocomplete="off">

                                        </div>
                                        <div id="twoway1" class="colors" style="display:none">
                                            <div class="col-md-6">


                                                <input id="datetimepicker4" class="controls" type="text" placeholder="Return Pickup Date & Time" name="drop" required="" autocomplete="off">
                                            </div>
                                            <div class="col-md-6">
                                                <select class="selectit controls" name="np" required="">
                                                    <option value="1">Same Locations</option>
                                                    <option value="2">Different Locations</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <center>
                                        <button class="buttonexplore">Get Instant Quote</button>
                                    </center>
                                </div>
                                                      <div class="tab-pane fade in" id="3">
                                    <br>
                                    <br>
                                    <h4 class="heading4">Looking for Long Trip in Budget Fare!</h4>
                                    <br>

                                    <div class="row">
                                      
                                        <div class="col-md-12">
                                            <input id="autocomplete" class="controls" type="text" placeholder="Enter Pickup Postcode" name="pick" required="" autocomplete="off">
                                        </div>
                                        <div class="col-md-12">
                                            <input id="autocomplete3" class="controls" type="text" placeholder="Enter Dropoff Postcode" name="drop" required="" autocomplete="off">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <select class="selectit controls" name="np" required="">
                                                <option value="1">1 Pass</option>
                                                <option value="2">2 Pass</option>
                                                <option value="3">3 Pass</option>
                                                <option value="4">4 Pass</option>
                                                <option value="5">5 Pass</option>
                                                <option value="6">6 Pass</option>
                                                <option value="7">7 Pass</option>
                                                <option value="8">8 Pass</option>
                                                <option value="9">9 Pass</option>
                                                <option value="10">10 Pass</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="selectit controls" name="nl" data-toggle="tooltip" data-placement="auto" required="">
                                                <option value="1" selected="">0 Lugg</option>
                                                <option value="1">1 Lugg</option>
                                                <option value="2">2 Lugg</option>
                                                <option value="3">3 Lugg</option>
                                                <option value="4">4 Lugg</option>
                                                <option value="5">5 Lugg</option>
                                                <option value="6">6 Lugg</option>
                                                <option value="7">7 Lugg</option>
                                                <option value="8">8 Lugg</option>
                                                <option value="9">9 Lugg</option>
                                                <option value="10">10 Lugg</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <input id="datetimepicker5" class="controls" type="text" placeholder="Pickup Date & Time" name="drop" required="" autocomplete="off">

                                        </div>
                                       
                                    </div>
                                    <br>
                                    <center>
                                        <button class="buttonexplore">Get Instant Quote</button>
                                    </center>
                                </div>
                                
                                
                                                                              <div class="tab-pane  fade in" id="4">
                                    <br>
                                    <br>
                                    <h4 class="heading4">Huge Discounts on Group Bookings!</h4>
                                    <br>

                                    <div class="row">
                                      
                                        <div class="col-md-12">
                                            <input class="controls" type="text" placeholder="Enter Business Email" name="pick" required="" autocomplete="off">
                                        </div>
                                        <div class="col-md-12">
                                            <input  class="controls" type="text" placeholder="Enter Contact Number" name="drop" required="" autocomplete="off">

                                        </div>
                                          <div class="col-md-12">
                                              <textarea  class="controls textarea"  type="text" placeholder="Enter your Queries" name="drop" required="" autocomplete="off"></textarea>

                                        </div>
                                    </div>
            
                                    <br>
                                    <center>
                                        <button class="buttonexplore">Submit Query</button>
                                    </center>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<br><br><br><br><br><br>

</section>
<section class="offers container1">
    
 <div class="carousel slide media-carousel cardwhite" id="media">
        <div class="carousel-inner">
          <div class="item  active container">
                <div class="row">
              <div class="col-md-4 col-xs-12 padright">
                   <div class="row">
                    <div class="col-xs-9">
                    <h3>Cheaper Airport Rides</h3>
<p>Get a discount Fare on each of the Airport pickups.</p>
</div>
<div class="col-xs-3"><img src="./assets/images/travel.png" style="margin-top:30px;"></div>
</div>
                    </div>           
              <div class="col-md-4 col-xs-12 padright">
                 <div class="row">
                    <div class="col-xs-9">
                            <h3>Two Way Discounts</h3>
<p>Book a Two way Trip and grab your discounts </p>
                    </div> 
                    <div class="col-xs-3"><img src="./assets/images/two.png" style="margin-top:30px;"></div>   </div>
</div>  
            <div class="col-md-4 col-xs-12  padno">
                 <div class="row">
                    <div class="col-xs-9">
                    <h3>Offer for Corporate</h3>
<p>Get Flat Discount on the Bulk Bookings.</p>
                    </div> 
                      <div class="col-xs-3"><img src="./assets/images/voucher.png" style="margin-top:30px;"></div>
                    </div></div>            
            </div>
           </div>
          <div class="item container">
           <div class="row">
              <div class="col-md-4 padright">
           <div class="row">
                    <div class="col-xs-9">
                    <h3>No Hidden Charges</h3>
<p>There is no waiting charges upto an hour.</p>
                    </div> 
   <div class="col-xs-3"><img src="./assets/images/stopwatch.png" style="margin-top:30px;"></div>
                     </div></div>         
              <div class="col-md-4 padright">
                 <div class="row">
                    <div class="col-xs-9">
                            <h3> Newbie Discounts</h3>
<p>A Welcome Surpise Fare for Newbie Customers</p>
                    </div> 
                       <div class="col-xs-3"><img src="./assets/images/community.png" style="margin-top:30px;"></div>
    </div></div> 
            <div class="col-md-4 padno">
               <div class="row">
                    <div class="col-xs-9">
                    <h3>Earlybird Bookings</h3>
<p>Book As Earlier as possible and get Huge Discount! </p>
                    </div> 
 <div class="col-xs-3"><img src="./assets/images/calendar.png" style="margin-top:30px;"></div>
                     </div></div>           
            </div>
          </div>
         
        </div>
        <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
        <a data-slide="next" href="#media" class="right carousel-control">›</a>
     
      </div>                          
    </div>
  </div>
</div>


</section>
<section class="about  container">
<br>
<center><h2>Minicabee Quote Comparison</h2>
 <img src="./assets/images/line-under.png">
</center>
<br>
<div class="row">
    <div class="col-md-6"><img src="./assets/images/about-img.jpg" style="max-width:500px;width:100%;"></div>
    <div class="col-md-6">
<p>Minicabee helps to get a best with cheap fare minicab and Taxi services. MiniCabee is the best one for get the reliable with the comfortbale cab serivice with the base of price comparsion Booking system where we provide Quotes to your different pickups and dropoff. We are 100% guarantee you will get the best cab service provider for your journey before you leving our website</p>
<br>
<p>Using Minicab Services in United Kingdom is Usual but you want to be your minicab ride with comfortable price and comfortable time with quality of service works only at Minicabee, We cover all over United Kingdom especially airports ,stations , sea ports , hotels , schools , universities , hospitals , events ,etc,... Book a cheap taxi online in MiniCabee and enjoy your ride with best in class . MiniCabee offer taxis for all your needs in all around UK. 
</p>
</div>
</section>
<section class="why container">
<br>
<center><h2>Why Minicabee?</h2>
<p>Reach your Travel Destiny without Hassle</p>
 <img src="./assets/images/line-under.png">
</center>
<br>
<div class="row">

    <div class="col-md-6"> 
        <div class="row color">
         <div class="col-xs-3">
                    <img src="./assets/images/shield.png" style="margin-top:30px;"></div>
                    <div class="col-xs-9">
                    <h3>Secure and Safer Rides</h3>
                    <p>Well Experince Drivers with all the required documents verified. Any Issue with Driver Immediate Actions Noted.</p>
                     </div> 
                     </div></div>
     <div class="col-md-6">
           <div class="row color">
         <div class="col-xs-3">
                    <img src="./assets/images/hidden.png" style="margin-top:30px;"></div>
                    <div class="col-xs-9">
                    <h3>No Hidden Charges</h3>
                    <p>There is Hidden Charges applied for the customers at any cost.Passengers are acknowledged by the Fares and Additional charges. </p>
                     </div> 
                     </div>

     </div>
    </div><br><br>
    <div class="row">

    <div class="col-md-6"> 
        <div class="row color">
         <div class="col-xs-3">
                    <img src="./assets/images/car.png" style="margin-top:30px;"></div>
                    <div class="col-xs-9">
                    <h3>Comfortable Cabs</h3>
                    <p>No Adjustment in Minicabee at anytime. Customer's Comfort are focused rather than Money.</p>
                     </div> 
                     </div></div>
     <div class="col-md-6">
           <div class="row color">
         <div class="col-xs-3">
                    <img src="./assets/images/discount.png" style="margin-top:30px;"></div>
                    <div class="col-xs-9">
                    <h3>Discount for Sure</h3>
                    <p>Providing Offers and Discount on every festival and even normal occasions. so offer is sure in minicabee.</p>
                     </div> 
                     </div>

     </div>
    </div>
    </section>
<br><br>

<?php include ( 'foot.html'); ?>

<script>
    $(document).ready(function() {
        $.datetimepicker.setLocale('pt-EN');
        $('#datetimepicker').datetimepicker({
            // var u="60:00";
            datepicker: true,
            allowTimes: [
                '00:00', '00:15', '00:30', '00:45', '01:00', '01:15', '01:30', '01:45', '02:00', '02:15', '02:30', '02:45', '03:00', '03:15', '03:30', '03:45', '04:00', '04:15', '04:30', '04:45', '05:00', '05:15', '05:30', '05:45', '06:00', '06:15', '06:30', '06:45', '07:00', '07:15', '07:30', '07:45', '08:00', '08:15', '08:30', '08:45', '09:00', '09:15', '09:30', '09:45', '10:00', '10:15', '10:30', '10:45', '11:00', '11:15', '11:30', '11:45', '12:00', '12:15', '12:30', '12:45', '13:00', '13:15', '13:30', '13:45', '14:00', '14:15', '14:30', '14:45', '15:00', '15:15', '15:30', '15:45', '16:00', '16:15', '16:30', '16:45', '17:00', '17:15', '17:30', '17:45', '18:00', '18:15', '18:30', '18:45', '19:00', '19:15', '19:30', '19:45', '20:00', '20:15', '20:30', '20:45', '21:00', '21:15', '21:30', '21:45', '22:00', '22:15', '22:30', '22:45', '23:00', '23:15', '23:30', '23:45'
            ]
        });

    });
</script>
<script>
    $(document).ready(function() {
        $.datetimepicker.setLocale('pt-EN');
        $('#datetimepicker2').datetimepicker({
            // var u="60:00";
            datepicker: true,
            allowTimes: [
                '00:00', '00:15', '00:30', '00:45', '01:00', '01:15', '01:30', '01:45', '02:00', '02:15', '02:30', '02:45', '03:00', '03:15', '03:30', '03:45', '04:00', '04:15', '04:30', '04:45', '05:00', '05:15', '05:30', '05:45', '06:00', '06:15', '06:30', '06:45', '07:00', '07:15', '07:30', '07:45', '08:00', '08:15', '08:30', '08:45', '09:00', '09:15', '09:30', '09:45', '10:00', '10:15', '10:30', '10:45', '11:00', '11:15', '11:30', '11:45', '12:00', '12:15', '12:30', '12:45', '13:00', '13:15', '13:30', '13:45', '14:00', '14:15', '14:30', '14:45', '15:00', '15:15', '15:30', '15:45', '16:00', '16:15', '16:30', '16:45', '17:00', '17:15', '17:30', '17:45', '18:00', '18:15', '18:30', '18:45', '19:00', '19:15', '19:30', '19:45', '20:00', '20:15', '20:30', '20:45', '21:00', '21:15', '21:30', '21:45', '22:00', '22:15', '22:30', '22:45', '23:00', '23:15', '23:30', '23:45'
            ]
        });

    });
</script>
<script>
    $(document).ready(function() {
        $.datetimepicker.setLocale('pt-EN');
        $('#datetimepicker3').datetimepicker({
            // var u="60:00";
            datepicker: true,
            allowTimes: [
                '00:00', '00:15', '00:30', '00:45', '01:00', '01:15', '01:30', '01:45', '02:00', '02:15', '02:30', '02:45', '03:00', '03:15', '03:30', '03:45', '04:00', '04:15', '04:30', '04:45', '05:00', '05:15', '05:30', '05:45', '06:00', '06:15', '06:30', '06:45', '07:00', '07:15', '07:30', '07:45', '08:00', '08:15', '08:30', '08:45', '09:00', '09:15', '09:30', '09:45', '10:00', '10:15', '10:30', '10:45', '11:00', '11:15', '11:30', '11:45', '12:00', '12:15', '12:30', '12:45', '13:00', '13:15', '13:30', '13:45', '14:00', '14:15', '14:30', '14:45', '15:00', '15:15', '15:30', '15:45', '16:00', '16:15', '16:30', '16:45', '17:00', '17:15', '17:30', '17:45', '18:00', '18:15', '18:30', '18:45', '19:00', '19:15', '19:30', '19:45', '20:00', '20:15', '20:30', '20:45', '21:00', '21:15', '21:30', '21:45', '22:00', '22:15', '22:30', '22:45', '23:00', '23:15', '23:30', '23:45'
            ]
        });

    });
</script>
<script>
    $(document).ready(function() {
        $.datetimepicker.setLocale('pt-EN');
        $('#datetimepicker4').datetimepicker({
            // var u="60:00";
            datepicker: true,
            allowTimes: [
                '00:00', '00:15', '00:30', '00:45', '01:00', '01:15', '01:30', '01:45', '02:00', '02:15', '02:30', '02:45', '03:00', '03:15', '03:30', '03:45', '04:00', '04:15', '04:30', '04:45', '05:00', '05:15', '05:30', '05:45', '06:00', '06:15', '06:30', '06:45', '07:00', '07:15', '07:30', '07:45', '08:00', '08:15', '08:30', '08:45', '09:00', '09:15', '09:30', '09:45', '10:00', '10:15', '10:30', '10:45', '11:00', '11:15', '11:30', '11:45', '12:00', '12:15', '12:30', '12:45', '13:00', '13:15', '13:30', '13:45', '14:00', '14:15', '14:30', '14:45', '15:00', '15:15', '15:30', '15:45', '16:00', '16:15', '16:30', '16:45', '17:00', '17:15', '17:30', '17:45', '18:00', '18:15', '18:30', '18:45', '19:00', '19:15', '19:30', '19:45', '20:00', '20:15', '20:30', '20:45', '21:00', '21:15', '21:30', '21:45', '22:00', '22:15', '22:30', '22:45', '23:00', '23:15', '23:30', '23:45'
            ]
        });

    });
</script>
<script>
    $(document).ready(function() {
        $.datetimepicker.setLocale('pt-EN');
        $('#datetimepicker5').datetimepicker({
            // var u="60:00";
            datepicker: true,
            allowTimes: [
                '00:00', '00:15', '00:30', '00:45', '01:00', '01:15', '01:30', '01:45', '02:00', '02:15', '02:30', '02:45', '03:00', '03:15', '03:30', '03:45', '04:00', '04:15', '04:30', '04:45', '05:00', '05:15', '05:30', '05:45', '06:00', '06:15', '06:30', '06:45', '07:00', '07:15', '07:30', '07:45', '08:00', '08:15', '08:30', '08:45', '09:00', '09:15', '09:30', '09:45', '10:00', '10:15', '10:30', '10:45', '11:00', '11:15', '11:30', '11:45', '12:00', '12:15', '12:30', '12:45', '13:00', '13:15', '13:30', '13:45', '14:00', '14:15', '14:30', '14:45', '15:00', '15:15', '15:30', '15:45', '16:00', '16:15', '16:30', '16:45', '17:00', '17:15', '17:30', '17:45', '18:00', '18:15', '18:30', '18:45', '19:00', '19:15', '19:30', '19:45', '20:00', '20:15', '20:30', '20:45', '21:00', '21:15', '21:30', '21:45', '22:00', '22:15', '22:30', '22:45', '23:00', '23:15', '23:30', '23:45'
            ]
        });

    });
</script>
<script>
    var placeSearch, autocomplete, autocomplete2, autocomplete3, autocomplete4;

    function initAutocomplete() {

        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */
            (document.getElementById('autocomplete')), {
                types: ['geocode'],
                componentRestrictions: {
                    country: 'uk'
                }
            });




        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);


        autocomplete2 = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */
            (document.getElementById('autocomplete2')), {
                types: ['geocode'],
                componentRestrictions: {
                    country: 'uk'
                }
            });




        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete2.addListener('place_changed', fillInAddress);


        autocomplete3 = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */
            (document.getElementById('autocomplete3')), {
                types: ['geocode'],
                componentRestrictions: {
                    country: 'uk'
                }
            });


  // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete3.addListener('place_changed', fillInAddress);


        autocomplete4 = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */
            (document.getElementById('autocomplete4')), {
                types: ['geocode'],
                componentRestrictions: {
                    country: 'uk'
                }
            });

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete4.addListener('place_changed', fillInAddress);


    }


    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
        var place = autocomplete2.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }

        var place = autocomplete3.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }

         var place = autocomplete4.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }


    }
</script>
<script>
    $(function() {
        $('#way').change(function() {
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });
    $(function() {
        $('#way1').change(function() {
            $('.colors').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgJNbx7wr01p7h2a0psOsVieTc7Ge1LB8&libraries=places&callback=initAutocomplete" async defer></script>
