<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BBM Healthcare - Medsky</title>
    <meta name="description" content="Free Bootstrap Theme by touchsky.in">
    <!-- <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template"> -->
    <!-- <script data-require="jquery@*" data-semver="2.1.3" src="https://code.jquery.com/jquery-2.1.3.min.js"></script> -->
    <!-- <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script> -->

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
    </script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

    <!--  <script type="text/javascript">
    var title = ['clinic', 'nursing home', 'hospital', 'laboratory', 'pharmacy'];
    var i = 0;  // the index of the current item to show
    setInterval(function() {            // setInterval makes it run repeatedly
        document.getElementById('healthcare_item')
            .innerHTML = title[i++];    // get the item and increment i to move to the next
        if (i == title.length) i = 0;   // reset to first element if you've reached the end
    }, 1000); 

      </script> -->
    <!-- Latest compiled and minified CSS -->

    <style>
        .justify_content {
            text-align: justify;
            text-justify: auto;
        }
    </style>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
    <!--Advertisement banner-->
	 <div id="adv_Modal" class="adv_modal">
	  <!-- Modal content -->
	  <div class="modal-content">
		<span class="close">&times;</span>
		<img src="img/promo/medicall2019.jpeg" width="100%"  border="0" alt="">
	  </div>


	</div>
    <section id="banner" class="banner">
        <div class="bg-color">
            <nav class="navbar navbar-default navbar-fixed-top " role="navigation">
                <div class="container">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button data-toggle="collapse" data-target="#myNavbar" class="navbar-toggle" type="button">&nbsp;</button>
                            <a class="navbar-brand" href="#"><img style="width:200px;height:auto;margin-top: -25px;" class="img-responsive" src="img/bbm_big.png" /></a>
                        </div>
                        <div id="myNavbar" class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav">
                                <li class="active "><a href="#banner">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#service">Services</a></li>
                                <!-- <li><a href="#testimonial">Testimonial</a></li> -->
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="banner-info">
                        <div class="banner-logo text-center"> <img class="img-responsive" src="img/logo.png" />
                        </div>
                        <div class="banner-text text-center">
                            <h1 class="white">Healthcare at your desk!!</h1>

                            <div>
                                <p>Simplifying Healthcare Solutions For </p>
                                <h1 class="white " id="healthcare_item"> CLINIC</h1>
								
								<script>
									var testimonial = ['CLINIC', 'LABORATORTY', 'HOSPITAL','PHARMACY'];
									var numTestimonials = testimonial.length;
									var index = 0;

									setInterval(()=>{
										 $('#healthcare_item').text(testimonial[index]);        
										index = (index + 1) % numTestimonials;
											
									},2000)



								

								</script>
								
								
								</h1>
                            </div>

                            <a class="btn btn-appoint" href="#contact">Make an Appointment.</a>
                            <a class="btn btn-appoint" data-toggle="modal" data-target="#myModal">Download E-Brochure</a>

                        </div>

                        <div class="overlay-detail text-center"> <a href="#service">&nbsp;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ banner-->

    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-image: url('img/form_bg.png'); background-repeat: no-repeat;background-clip: content-box;background-position-y: -15px">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Fill in your details</h4>
                </div>
                <div class="modal-body">

                    <form class="form-horizontal" name="myform" action="brochure.php" method="post" id="myform">
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword3" name="name" placeholder="Enter Your Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Phone</label>
                            <div class="col-sm-10">
                                <input type="number" min="5999999999" max="9999999999" class="form-control" id="inputPassword3" name="phone" placeholder="Enter Your Phone Number" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" for="submit-form" form="myform" name="download_brochure" class="btn btn-appoint">Download Now</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--service-->
    <section id="service" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- <a download="" href="downloads/BBM_Health_Broucher.pdf">download E-brochure</a> -->

                <div class="col-md-12 col-sm-4 justify_content">
                    <h2 class="ser-title">MedSky</h2>
                    <hr class="botm-line" />
                    <p>MEDSKY provides the Enhanced administration with improved response to patient care and efficient information management via electronic patient files. Modern healthcare industry gains lot of benefits by implementation of automated IT solution. With this aim MEDSKY offers a complete portfolio of integrated healthcare solutions to deliver what your hospital needs.

                    </p>
                </div>
                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">
                        <div class="icon">&nbsp;

                        </div>
                        <div class="icon-info">
                            <h4>OPD</h4>
                            <p>Outpatient Module provides complete assistance to manage patient information and stores electronic records. Get a consolidated view of patients Medical History with past visits, past medications, payment history and lab results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">
                        <div class="icon">&nbsp;

                        </div>
                        <div class="icon-info">
                            <h4>APPOINTMENT</h4>
                            <p>LThe Registration and Appointment scheduling module is an efficient patient management system that captures information of the patients. The scheduling of patient and Physician appointments can be done from this module.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">
                        <div class="icon">&nbsp;

                        </div>
                        <div class="icon-info">
                            <h4>E-PRESCRIPTION</h4>
                            <p>Electronic prescribing is a technology framework that allows physicians and other medical practitioners to write and send prescriptions to a participating pharmacy electronically instead of using handwritten notes. E-Prescribing or electronic prescribing improves accuracy and enhances patient care since there is no handwriting for the pharmacist to interpret or calling in prescriptions.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">
                        <div class="icon">&nbsp;
                        </div>
                        <div class="icon-info">
                            <h4>TOKEN DISPLAY </h4>
                            <p>Having an efficient hospital queue management system has now become a necessity at healthcare institutions, especially when the patients visiting the facility are either in pain or frail health, making it difficult for them to queue for long periods of time until a medical practitioner is available to treat them. Hospital token management system is specially designed for outpatient clinics and multi-specialty hospitals.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">
                        <div class="icon">&nbsp;
                        </div>
                        <div class="icon-info">
                            <h4>PHARMACY</h4>
                            <p>The Pharmacy Management module helpful in managing drug distribution, stock management and monitoring functions of an incorporated pharmacy outlet in a health care center. You can sell the drugs based on prescriptions received through the system, identify substitutes and fulfill the patient requirements. The batch nos., drug interactions, Mfg. Dates, Expiry Dates and all the related details are properly displayed to avoid wrong medicine distribution.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">
                        <div class="icon">&nbsp;

                        </div>
                        <div class="icon-info">
                            <h4>IPD</h4>
                            <p>The inpatient Management module provides bed management functions. It allows ordering investigations, writing Medication, Discharge Summary, Case Sheet, Doctor Note, progress notes, bed transfers, marking patient discharges. You can write discharge summaries in various user customizable formats. The module is linked with the Billing, Consultation, Investigations (Lab, Radiology) and Pharmacy for sending the request and receiving the information from them.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">
                        <div class="icon">&nbsp;

                        </div>
                        <div class="icon-info">
                            <h4>LAB</h4>
                            <p>The Billing module automates the whole billing process, making it easy with all the backend calculations.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">
                        <div class="icon">&nbsp;

                        </div>
                        <div class="icon-info">
                            <h4>BILLING</h4>
                            <p>The Billing module automates the whole billing process, making it easy with all the backend calculations.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">

                        <div class="icon">&nbsp;

                        </div>
                        <div class="icon-info">
                            <h4>INSURANCE</h4>
                            <p>The Module handles insurance patient’s billing, insurance approval process, claims settlement, outstanding monitoring.</p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">
                        <div class="icon">&nbsp;

                        </div>
                        <div class="icon-info">
                            <h4>SURGERY</h4>
                            <p>Surgery Module offers an optimum usage and tracks all surgeries that can take place in the hospital. Right from scheduling the operation, managing the surgery team, recording details. </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">
                        <div class="icon">&nbsp;

                        </div>
                        <div class="icon-info">
                            <h4>IMMUNIZATION</h4>
                            <p>Manage documentation of your patients’ entire immunization history in one convenient electronic file. Track patients’ growth and development over time to make sure they’re maintaining the correct height and weight development for their age.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4  justify_content">
                    <div class="service-info">

                        <div class="icon">&nbsp;

                        </div>
                        <div class="icon-info">
                            <h4>STORE</h4>
                            <p>The general store module is designed to handle transactions related to all non-medical inventory in a hospital. This Module helps in tracking the inward/outward goods, stock level, cost of inventory and planning on stocking. This also deals with purchases, distribution, payments to suppliers and Stock Maintenance.</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-4  justify_content">
                <div class="service-info">

                    <div class="icon">&nbsp;
                    </div>
                    <div class="icon-info">
                        <h4>ACCOUNTS </h4>
                        <p>Our financial accounts module provides reports to the management unit for analysis of the effectiveness of the various functions performed within the organization. It provides statistical tools for the analysis of data and supports the decision making process of the management. This module provides the facility to export the data into various formats for further manipulation.</p>
                    </div>

                </div>
            </div>

        </div>
        </div>

    </section>
    <!--/ service-->
    <hr style="margin-top: 0px; margin-bottom: 0px;" class="style13" />
    <!--cta-->
    <section id="cta-1" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="schedule-tab">
                    <div class="col-md-4 col-sm-4 bor-left  justify_content">
                        <div class="mt-boxy-color"></div>
                        <div class="medi-info">
                            <h3>For Support</h3>
                            <p>Our support team is there to assist you by email, telephone, remote support, and even on the ground at your facilities. </p> <a class="medi-info-btn" href="#">CONTACT</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4  justify_content">
                        <div class="medi-info">
                            <h3>For Demo Appointment</h3>
                            <p>Schedule a free demo to know more details about our product.</p> <a class="medi-info-btn" href="#">CONTACT</a>

                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 mt-boxy-3  justify_content">
                        <div class="mt-boxy-color"></div>
                        <div class="time-info">
                            <h3>Opening Hours</h3>
                            <table style="margin: 8px 0px 0px;">
                                <tbody>
                                    <tr>
                                        <td>Monday - Friday</td>
                                        <td>9.00AM - 9.00PM</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td>9.00AM - 5.00PM</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td>Holiday</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cta-->
    <hr style="margin-top: 0px; margin-bottom: 0px;" class="style13" />
    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12  justify_content">
                    <div class="section-title">
                        <h2 class="head-title lg-line">Our Team</h2>
                        <hr class="botm-line" />
                        <p class="sec-para">BBM Healthcare is running by a group of qualified Professional Bio Medical Engineers with more experience in Healthcare Industry. Serious efforts are being made to provide excellence after sales support to its customers.</p>
                        <!-- <a style="color: rgb(12, 184, 182); padding-top: 10px;" href="">Know more..</a> -->

                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12  justify_content">
                    <div style="visibility: visible;" class="col-sm-12 more-features-box">
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon">&nbsp;

                            </div>
                            <div class="more-features-box-text-description">
                                <h3>Software Team</h3>
                                <p>We have employed a team of painstaking personnel who have wide expertise in the healthcare field. Our skilled developers designed MEDSKY to incorporate the requirements of each individual medical institution. Our prime focus on maintaining quality in our products have established ourselves as valued firm among our clients. </p>
                            </div>
                        </div>
                        <div class="more-features-box-text">
                            <div class="more-features-box-text-icon">&nbsp;

                            </div>
                            <div class="more-features-box-text-description">
                                <h3>Bio Medical Team</h3>
                                <p>We have qualified Bio Medical Engineers who have wide knowledge in Medical Equipment.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="testimonial" class="section-padding">
        <div id="" class="container">
            <div id="carousel-example-generic" data-ride="carousel" class="carousel slide">
                <div role="listbox" class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="ser-title">see what clients are saying about MedSky?</h2>
                                <hr class="botm-line" />
                            </div>
                            <div class="col-md-4 col-sm-4  justify_content">
                                <div class="testi-details">
    
                                    <p>MEDSKY provides the Enhanced administration with improved response to patient care and efficient information management via electronic patient files.
                                        <br /> Modern healthcare industry gains lot of benefits by implementation of automated IT solution. With this aim MEDSKY offers a complete portfolio of integrated healthcare solutions to deliver what your hospital needs.</p>
                                </div>
                                <div class="testi-info">
                                    <a href="#"><img alt="" class="img-responsive" src="img/thumb.png" /></a>
                                    <h3>Dr.Arunachalam<span style="font-size: 15px;">Diabetologist</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4  justify_content">
                                <div class="testi-details">
    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="testi-info">
                                    <a href="#"><img alt="" class="img-responsive" src="img/thumb.png" /></a>
                                    <h3>Dr.Dhanesh Kumar<span style="font-size: 15px;">Orthopedic Surgeon</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4  justify_content">
                                <div class="testi-details">
    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="testi-info">
                                    <a href="#"><img alt="" class="img-responsive" src="img/thumb.png" /></a>
                                    <h3>Dr.Srinivasan<span style="font-size: 15px;">General Physician</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="ser-title">see what dosctors are saying about MedSky?</h2>
                                <hr class="botm-line" />
                            </div>
                            <div class="col-md-4 col-sm-4  justify_content">
                                <div class="testi-details">
    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="testi-info">
                                    <a href="#"><img alt="" class="img-responsive" src="img/thumb.png" /></a>
                                    <h3>Dr.Arunachalam<span style="font-size: 15px;">Diabetologist</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4  justify_content">
                                <div class="testi-details">
    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="testi-info">
                                    <a href="#"><img alt="" class="img-responsive" src="img/thumb.png" /></a>
                                    <h3>Dr.Dhanesh Kumar<span style="font-size: 15px;">Orthopedic Surgeon</span></h3>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4  justify_content">
                                <div class="testi-details">
    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="testi-info">
                                    User Image
                                    <a href="#"><img alt="" class="img-responsive" src="img/thumb.png" /></a>
                                    <h3>Dr.Srinivasan<span style="font-size: 15px;">General Physician</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </section> -->

    <!--cta 2-->
    <section id="cta-2" class="section-padding">
        <div class="container">
            <div class=" row">
                <!-- <div class="col-md-2"></div>  -->
                <div class="text-right-md col-md-3 col-sm-4 col-md-offset-1">
                    <h2 class="section-title white lg-line">Who <br />We Are?</h2>
                </div>
                <div class="col-md-7 col-sm-7  justify_content"> Founded in 2013, BBM Healthcare has extended its service to healthcare providers, offering end to end software solutions. We are a team of qualified Biomedical Engineers who have an understanding of the healthcare domain, analyze your business needs and deliver the best of all solutions. Serious efforts are being taken in providing excellent after sale support to our customers.

                    <p class="text-right text-primary"><i>— BBM Healthcare</i></p>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
    <!--cta-->
    <!--contact-->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- <div class="col-md-12"> <h2 class="ser-title">Contact us</h2> <hr class="botm-line" /> 
      </div>  -->
                <div class="col-md-4 col-sm-4">
                    <h3>Contact Info</h3>
                    <div class="space"></div>
                    <p>#97/55, Nathigam Complex,
                        <br /> N.S.Krishnan Salai,
                        <br /> Kodambakkam,
                        <br /> Chennai - 600 024</p>
                    <div class="space"></div>
                    <p>bbmhealthcare@gmail.com</p>
                    <div class="space"></div>
                    <p>+91 7418 8844 18</p>
                    <div class="space"></div>
                    <p>+91 7418 8844 19</p>
                </div>
                <div class="col-md-8 col-sm-8 marb20">
                    <div class="contact-info">
                        <h3 class="cnt-ttl">Having Any Query! Or Book an appointment</h3>
                        <div class="space"></div>
                        <div id="sendmessage">Your message has been sent. Thank you!

                        </div>
                        <div id="errormessage"></div>
                        <form action="" method="post" role="form" class="contactForm">
                            <div class="form-group">
                                <input name="name" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" class="form-control br-radius-zero" type="text" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" class="form-control br-radius-zero" type="email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input name="subject" id="subject" placeholder="Mobile Number" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" class="form-control br-radius-zero" type="text" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" class="form-control br-radius-zero" type="textarea"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="form-action">
                                <button class="btn btn-form" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="">
        <div id="" class="container-fluid">
            <div id="" class="row">
                <iframe width="100%" height="450" frameborder="0" allowfullscreen="" style="border: 0px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.728916056415!2d80.22072881527058!3d13.052919490802537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5266f23a31b543%3A0x4345a0704cf96af6!2sBBM+HEALTHCARE!5e0!3m2!1sen!2sin!4v1527414868283"></iframe>
            </div>
        </div>
    </section>
    <!--/ contact-->
    <!--footer-->
    <footer id="footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 marb20  justify_content">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">About Us</h4>
                        </div>
                        <div class="info-sec">
                            <p>MEDSKY provides the Enhanced administration with improved response to patient care and efficient information management via electronic patient files. Modern healthcare industry gains lot of benefits by implementation of automated IT solution. With this aim MEDSKY offers a complete portfolio of integrated healthcare solutions to deliver what your hospital needs.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Quick Links</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="quick-info">
                                <li><a href="#banner">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#service">Service</a></li>
                                <li><a href="#testimonial">Testimonials</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                            <h4 class="white no-padding">Follow us</h4>
                        </div>
                        <div class="info-sec">
                            <ul class="social-icon">

                                <a href="https://www.facebook.com/bbmhealthcare">
                                    <li class="bglight-blue fa fa-facebook">&nbsp;</li>
                                </a>

                                <a href="https://plus.google.com/u/1/100544584732572370689">
                                    <li class="bgred fa fa-google">&nbsp;</li>
                                </a>

                                <a href="https://www.linkedin.com/in/boomingbiomedicals/">
                                    <li class="bgdark-blue fa fa-linkedin">&nbsp;</li>
                                </a>

                                <a href="https://twitter.com/bbm_healthcare">
                                    <li class="bglight-blue fa fa-twitter">&nbsp;</li>
                                </a>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        ©Copyright bbm healthcare. All Rights Reserved
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer-->

    <!-- <script src="/spaw/empty/js/jquery.min.js">
</script> 
<script src="/spaw/empty/js/jquery.easing.min.js">
</script> 
<script src="/spaw/empty/js/bootstrap.min.js">
</script> 
<script src="/spaw/empty/js/custom.js">
</script> 
<script src="js/main.js">
</script> 
<script src="/spaw/empty/contactform/contactform.js">
</script>
   -->
  	<!-- The Modal -->
	
	<script>

			  		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		  document.getElementById("adv_Modal").style.display = "none";
		}

		function advertise(){
			setTimeout(()=>{document.getElementById("adv_Modal").style.display = "block";},2000)
		   
		}

	</script>

</body>

</html>