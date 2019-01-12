<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>RPTOPS - Planning and Forecasting </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo base_url()?>assets/css/material-dashboard.css" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url()?>assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <style type="text/css">
        .has-error{
            color: red;
        }
     .card-header.text-center {
        background: #1a4bb1 !important;
    }
        button.btn.btn-rose.btn-simple.btn-wd.btn-lg {
    border: solid 1px;
    color: red;
    }

    .card-header.text-center {
        background: #0c72af  !important;
    }

    .full-page:before {
        background: none !important;
    }
     
    .form-group.label-floating {
        margin-left: 87px;
    }

.col-md-offset-4 {
    /*margin-left: 96.333333% !important;
    margin-top: -8% !important;*/
}

a.delete {
    color: dodgerblue !important;
}

a.status {
    color: dodgerblue !important;
}

th.sorting {
    color: dodgerblue !important;
}

    </style>
</head>
  <body>
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="<?php echo base_url()?>">  </a>
            </div>
            
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="black" data-image="<?php echo base_url()?>assets/img/amimg3.png">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form action="<?php echo base_url();?>signin" method = "post">
                                <div class="card card-login card-hidden">
                                    <div class="card-header text-center" data-background-color="rose">
                                        <h4 class="card-title">American Airlines - RPT OPS </h4>
                                    </div>
                                    <p class="category text-center"></p>
                                    <div class="card-content">
                                        <?php 
                                            if(isset($error)) {
                                                echo '<div class="has-error" align="center">'.$error.'</div>';  
                                            } 
                                        ?> 
                                       
                                        <div class="input-group">
                                           
                                            <div class="form-group label-floating">
                                                <label class="control-label">Please Enter Email</label>
                                                <input type="email" name="email"  class="form-control">
                                            </div>
                                        </div>
                                         <div class="input-group">
                                           
                                            <div class="form-group label-floating">
                                                <label class="control-label">Please Enter Password</label>
                                                <input type="password" name="password"  class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer text-center">
                                        <button type="submit" name="loginBtn" class="btn btn-rose btn-simple btn-wd btn-lg">login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
  </body>
 <!--   Core JS Files   -->
<!--   Core JS Files   -->
<script src="<?php echo base_url()?>assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/material.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url()?>assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url()?>assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?php echo base_url()?>assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url()?>assets/js/bootstrap-notify.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?php echo base_url()?>assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?php echo base_url()?>assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Select Plugin -->
<script src="<?php echo base_url()?>assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?php echo base_url()?>assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?php echo base_url()?>assets/js/sweetalert2.js"></script>
<!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url()?>assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?php echo base_url()?>assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?php echo base_url()?>assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url()?>assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url()?>assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>

<?php

 require("sendgrid-php/sendgrid-php.php");

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("mysparsh69@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("rahuliitm69@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('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'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}

?>

<?php

// require 'sendgrid-php/vendor/autoload.php';
// //Dotenv::load(__DIR__);
// $sendgrid_apikey = getenv('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');
// $sendgrid = new SendGrid($sendgrid_apikey);
// $url = 'https://api.sendgrid.com/';
// $pass = $sendgrid_apikey;
// $template_id = '<your_template_id>';
// $js = array(
//   'sub' => array(':name' => array('Elmer')),
//   'filters' => array('templates' => array('settings' => array('enable' => 1, 'template_id' => $template_id)))
// );

// $params = array(
//     'to'        => "rahuliitm69@gmail.com",
//     'toname'    => "Example User",
//     'from'      => "mysparsh69@gmail.com",
//     'fromname'  => "Your Name",
//     'subject'   => "PHP Test",
//     'text'      => "I'm text!",
//     'html'      => "<strong>I'm HTML!</strong>",
//     'x-smtpapi' => json_encode($js),
//   );

// $request =  $url.'api/mail.send.json';

// // Generate curl request
// $session = curl_init($request);
// // Tell PHP not to use SSLv3 (instead opting for TLS)
// curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
// curl_setopt($session, CURLOPT_HTTPHEADER, array('Authorization: Bearer ' . $sendgrid_apikey));
// // Tell curl to use HTTP POST
// curl_setopt ($session, CURLOPT_POST, true);
// // Tell curl that this is the body of the POST
// curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// // Tell curl not to return headers, but do return the response
// curl_setopt($session, CURLOPT_HEADER, false);
// curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// // obtain response
// $response = curl_exec($session);
// curl_close($session);

// // print everything out
// print_r($response);

?>


