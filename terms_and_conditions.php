<?php
include("admin/include/config.php");
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Vcard - Directory & Listings HTML Template</title>
        <!--====== Favicon Icon ======-->
        <?php
            $sql=mysqli_query($conn,"Select * from general_settings");
               while($arr=mysqli_fetch_array($sql)){
             ?>
        <link rel="shortcut icon" href="assets/images/bg/<?php echo $arr['select_favicon'] ?>" type="image/png">
        <?php } ?>
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--====== FontAwesoem css ======-->
        <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--====== Slick css ======-->
        <link rel="stylesheet" href="assets/css/slick.css">
        <!--====== Nice-select css ======-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--====== Jquery ui css ======-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <img src="assets/images/loader.png" alt="loader">
            </div>
        </div>
        <!--====== End Preloader ======-->
        <!--====== Start Header Section ======-->
        <?php include("assets/include/header.php") ?>
        <!--====== End Header Section ======-->
        <!--====== Start Hero Section ======-->
        <section class="hero-area">
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="page-title">
                                <h1 class="title">Terms & Conditions</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Terms & Conditions</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="pricing pricing-1 pt-10">
        <div class="container" >
            <div class="default-section-title default-section-title-middle" style="text-align:center;">
                <h3 class="pt-5" >Introduction</h3>
            </div>
            <div class="setion-content">
                <div class="row justify-content-center pt-5">
                    <div class="col-8">
                        <label>The Services of ‘Digiinfromatrics’ is provided by Tectignis It Solutions Private Limited, a company incorporated under the Companies Act, 1956 and having its registered office at C.S.N-2122,2123 Mumbai ,TALUKA- panvel DISTRICT – Raighadh, STATE- MAHARASHTRA INDIA , PIN.-400706 and it is the platform created with clear vision of Digitally Empowering Local Indian Businesses, makes it easy to Local Indian Businesses to create their business listings & to connect with their customers. One-Stop for all their digital presence & marketing needs. For more details please refer about us page- <a target="_blank"
                                href="http://demo.digiinfromatrics.com" class="text-danger" style="text-decoration:none">http://demo.digiinfromatrics.com</a></label>
                     <label>Digiinfromatrics also provides search engine directory services to its Website & App Visitors as per their requirements & searches made on Digiinfromatrics portals to find the up-to-date information about Vendors (defined hereinafter) of various products and services (“Information”) in selected towns and cities in India (“Service”) to end users.</label>
                        </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <h5>SUBSCRIPTION :</h5>
                        <label>Digiinfromatrics provides Free & Premium Listings &  Other Services as may be introduced by Digiinfromatrics from time to time .Small Medium Enterprises, Corporate Entities, Individual Free Lancers ,Vendors can subscribe to the Digiinfromatrics Listing Service in order to list their company or business on Digiinfromatrics Portal.</label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <h5>LISTINGS :</h5>
                        <label>Listings are the location based services in the selected categories and pin codes in respect of specific area search, the listing of the vendors will appear on those positions, which have been opted by them. The packages value may vary based upon the listing features , additional services offering as may be identified by Digiinfromatrics packages. Please refer pricing plans https://cardsmela.com/pricing-plan/ </label>
                        <label>After claim approval Listing Owner can access the listing backend dashboard to add, delete, modify description, images , keywords or pin-codes. Listing owner can also use exclusive ad campaigning services.</label>
                        </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <h5>PAYMENT MODES : </h5>
                        <label>Digiinfromatrics allows the Listing Owner  to make the payments for the Listing & Digital Marketing  by way any of the following modes</label>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-8">
                        <label><b>1.</b>  Cheque</label>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-8">
                        <label><b>2.</b>  RTGS  (Real Time Gross Settlement)</label>
                            
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-8">
                        <label><b>3.</b>  UPI Services</label>
                    </div>
                </div>
               
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <h5>PAYMENT TERMS : </h5>
                        <label>Listing Owner agrees to pay a  Subscription Fee for the Services that will be determined by Digiinfromatrics at the time of accepting the Service. Digiinfromatrics will send the customer receipt/Invoice to Listing Owners registered Mobile Number and email ID, simultaneously after receipt of payment from Listing Owner.</label>
                   <label>Digiinfromatrics shall, at its sole discretion, reserve its right to decide the Service Fee for the Services, from time to time.</label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <h5>REFUNDS POLICY : </h5>
                        <label>Subscription Fee paid by you to Digiinfromatrics are final and non-refundable. </label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <h5>PUSH NOTIFICATION AGREEMNT : </h5>
                        <label>You agree and confirm that listing data you post on Digiinfromatrics platform will be shared with subscribers  of Digiinfromatrics.</label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <h5>HOSTING AGREEMNT : </h5>
                        <label>Digiinfromatrics agrees to host and maintain your business listing details on our secure server(s). Digiinfromatrics on best effort basis will take all reasonable precautions to implement data backup services on the data stored in your listing. Digiinfromatrics agrees to monitor hosting services and make listings available to Internet users. However, Digiinfromatrics is not responsible for unintentional damages or loss, either incidental or direct, caused by a loss of your information. </label>
                    </div>
                </div>

                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <h5>PRIVACY POLICY : </h5>
                        <label>Digiinfromatrics is committed to protecting the privacy and confidentiality of any personal information that it may request and receive from its clients, business partners and other users of the Website. You hereby confirm and acknowledge that the contact details and other details provided by you to Digiinfromatrics will be used and forwarded by Digiinfromatrics to the respective listing owners /enquirers for which call or enquiry has been made.</label>
                    </div>
                </div>
                <div class="row justify-content-center pt-3">
                    <div class="col-8">
                        <h5>DISCLAIMER : </h5>
                        <label>Information provided by Listing Owners through the Digiinfromatrics may contain links to third party websites that are not owned or controlled by Digiinfromatrics. Digiinfromatrics has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party websites.</label>
                    <label>By using the Service, you expressly acknowledge and agree that Digiinfromatrics shall not be responsible for any damages, claims or other liability arising from or related to your use of any third-party website. You understand that the information and opinions in the third party content represent solely the thoughts of the author and is neither endorsed by nor does it necessarily reflect Digiinfromatrics belief.</label>
                    </div>
                </div>

                <div class="row justify-content-center pt-3">
                    <div class="col-8 pb-5">
                        <h5>GOVERNING LAW & JURISDICTION: </h5>
                        <label>This Terms of Use shall be governed and construed in accordance with the laws in India. Any dispute arising hereunder shall be subject to the exclusive jurisdiction of the courts in Mumbai, India.</label>
                    <label>If you have any questions or concerns  please write us to  <a target="_blank"
                                href="http://demo.digiinfromatrics.com" class="text-danger" style="text-decoration:none">http://digiinfromatrics.com</a></label>
                    </div>
                </div>
            </div>
        </div>
    </div>






        <!--====== End Hero Section ======-->
        <!--====== Start Contact Section ======-->
      
        <!--====== End Contact Section ======-->
        <!--====== Start Map section ======-->
        <section class="contact-page-map">
            
        </section><!--====== End Map section ======-->
        <!--====== Start Footer ======-->
       <?php include("assets/include/Footer.php") ?>
       <!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="ti-angle-up"></i></a>
        <!--====== Jquery js ======-->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <!--====== Popper js ======-->
        <script src="assets/js/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="assets/js/slick.min.js"></script>
        <!--====== Magnific Popup js ======-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!--====== Nice-select js ======-->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!--====== counterup js ======-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--====== waypoints js ======-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--====== Ui js ======-->
        <script src="assets/js/jquery-ui.min.js"></script>
        <!--====== Wow js ======-->
        <script src="assets/js/wow.min.js"></script>
        <!--====== Main js ======-->
        <script src="assets/js/main.js"></script>
    </body>
</html>