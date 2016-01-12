<!DOCTYPE html>
<?php
function checkProxy($ip){
        $contactEmail="EMAIL";
        $timeout=3; 
        $banOnProability=0.99;
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_URL, "http://check.getipintel.net/check.php?ip=$ip");
        $response=curl_exec($ch);
        
        curl_close($ch);
        
        
        if ($response > $banOnProability) {
                return true;
        } else {
            if ($response < 0 || strcmp($response, "") == 0 ) {
                //The server returned an error, you might want to do something
                //like write to a log file or email yourself
                //This could be true due to an invalid input or you've exceeded
                //the number of allowed queries. Figure out why this is happening
                //because you aren't protected by the system anymore
                //Leaving this section blank is dangerous because you assume
                //that you're still protected, which is incorrect
                //and you might think GetIPIntel isn't accurate anymore
                //which is also incorrect.
                //failure to implement error handling is bad for the both of us
            }
                return false;
        }
}
$ip=$_SERVER['REMOTE_ADDR'];
if (checkProxy($ip)) {
    echo "It would apprear you're using a proxy, so please, go fuck yourself! <br />";
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $data["name"]; ?></title>
<script src="//cdn.jsdelivr.net/jquery/2.1.4/jquery.min.js"></script>
<link rel="stylesheet" href="http://www.top-bit.com/dist/css/bootstrap.css">
<link rel="stylesheet" href="http://www.top-bit.com/dist/css/flaticon.css">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script type="text/javascript" src="libs/mmc.js"></script>
<style>
body{
padding: 0;
margin: 0;
font-family: 'Roboto', sans-serif;
color: #ffffff;
background: #151F2A;
background-image:url('http://www.top-bit.com/images/dark-blocks-blue.jpg');
background-repeat: repeat-x;
background-attachment: fixed;
}

table {
  border-collapse: separate;
  border-spacing:  5px;
}

.wf{
max-width: 1200px;
margin: 0 auto;
}

p {
 color: #b7c9da;
}

.link{
padding: 0;
margin: 0;
text-align: center;
font-size: x-small;
color: #b7c9da;
}

#page{
padding: 2% 3%;
min-height: 100%;
border: 3px outset #2B3947;
background: #415160;
border-radius:25px;
color: #B7C9DA;
box-shadow: 0 0 10px #1F1F1F;
background: #000000;
background-attachment: fixed;
}
hr{ 
color: #b7c9da;
}

#page a{
color: #E1771E;
}

#page-cols{
width: 100%;
margin-collapse: collapse;
}

#page-cols .page-col-ad{
width: 200px;
}

#page-cols .page-col-body{
vertical-align: top;
}

p.rewards{
margin-top: 0;
background: #354455;
padding: 12px 18px;
font-size: 20px;
font-weight: 300;
border: 2px outset #7A8EA1;
border-radius: 10px;
}

p.rewards > span{
font-size: .6em;
}

input{
font-family: 'Roboto', sans-serif;
outline: none;
border: 0;
padding: 5px 10px;
}

form{
text-align: center;

}

.taw0 .rh3 .rhbutton {
    background: #924d13;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    border-width: 0px;
    height: 49px;
    min-width: 142px;
    max-width: 296px;
}
.rhbutton {
    cursor: pointer;
    display: inline-block;
    margin: 0;
    text-align: center;
    transition: position, z-index, opacity;
    transition-delay: 0.3s;
    visibility: visible;
    white-space: nowrap;
}

.main-input{
display: block;
margin: 5px 0;
width: 100%;
box-sizing: border-box;
background: #1F1F1F; //#FC3A51;
font-size: 16px;
font-weight: 300;
text-align: center;
border-bottom: 5px solid #B4192B;
border-radius: 5px;
}

.main-input.normal{
background: #667E94;
border-color: #465668;
}

.main-input.normal::-webkit-input-placeholder { color: #415264; }
.main-input.normal::-moz-placeholder { color: #415264; }
.main-input.normal:-ms-input-placeholder { color: #415264; }
.main-input.normal:-moz-placeholder { color: #415264; }

.main-input-label{
display: block;
margin-bottom: -5px;
font-size: 16px;
}


::-webkit-input-placeholder { color: #9C1E2D; }
::-moz-placeholder { color: #9C1E2D; }
:-ms-input-placeholder { color: #9C1E2D; }
input:-moz-placeholder { color: #9C1E2D; }

.btn-re {
    -moz-box-shadow: 0px 10px 14px -7px #000000;
    -webkit-box-shadow: 0px 10px 14px -7px #000000;
    box-shadow: 0px 10px 14px -7px #000000;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #924c13), color-stop(1, #924c13));
    background:-moz-linear-gradient(top, #924c13 5%, #924c13 100%);
    background:-webkit-linear-gradient(top, #924c13 5%, #924c13 100%);
    background:-o-linear-gradient(top, #924c13 5%, #924c13 100%);
    background:-ms-linear-gradient(top, #924c13 5%, #924c13 100%);
    background:linear-gradient(to bottom, #924c13 5%, #924c13 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#924c13', endColorstr='#924c13',GradientType=0);
    background-color:#924c13;
    -moz-border-radius:6px;
    -webkit-border-radius:6px;
    border-radius:6px;
    border:1px solid #924c13;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Courier New;
    font-size:23px;
    font-weight:bold;
    padding:10px 60px;
    text-decoration:none;
    text-shadow:0px 1px 0px #924c13;
}
.btn-re:hover {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #924c13), color-stop(1, #924c13));
    background:-moz-linear-gradient(top, #924c13 5%, #924c13 100%);
    background:-webkit-linear-gradient(top, #924c13 5%, #924c13 100%);
    background:-o-linear-gradient(top, #924c13 5%, #924c13 100%);
    background:-ms-linear-gradient(top, #924c13 5%, #924c13 100%);
    background:linear-gradient(to bottom, #924c13 5%, #924c13 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#924c13', endColorstr='#924c13',GradientType=0);
    background-color:#924c13;
}
.btn-re:active {
    position:relative;
    top:1px;
}

#footer{
margin: 2% 0;
text-align: center;
font-weight: 300;
color: #d4a237;
}

#footer a{
color: #c0c0c0;
}

.alert{
color: #FC3A51;
font-size: 15px;
font-weight: 500;
text-transform: uppercase;
letter-spacing: 2px;
border-bottom: 1px dashed #FC3A51;
width: auto;
display: inline-block;
}

.bown{
border-radius: 200px 0px 200px 200px;
-moz-border-radius: 200px 0px 200px 200px;
-webkit-border-radius: 200px 0px 200px 200px;
border: 3px solid #ffffff;
background-color: #e7a61a;
text-align: center;
padding: 5px;
color: #000000;
}

.alert-success{
color: #1BA81B;
border-color: #1BA81B;
font-weight: normal;
font-size: 18px;
}

.alert a{
color: inherit;
text-decoration: none;
font-weight: bold;
}

#disabled-box{
text-align: center;
font-size: 80px;
font-weight: 500;
color: #FC3A51;
margin: 11.2% 0;
}

#disabled-box .desc{
font-size: 25px;
}

#disabled-box a{
color: #FC3A51;
}

#recaptcha_area {
margin: 3% auto 0;
}

#adcopy-outer {
margin: 3% auto 0 !important;
}

.center{
text-align: center;
}

.captcha-switcher{
padding-top: 5px;
font-size: 12px;
}

.captcha-switcher a{
text-decoration: none;
}

.captcha-switcher b{
font-weight: 500;
color: #86ADC3;
}

#captchme_widget_div{
margin: 0 auto;
width: 315px;
}

.g-recaptcha{
width: 304px;
margin: 0 auto;
margin-top: 20px;
}

.reklamper-widget-holder{
margin: auto;
}

.timer{
text-align: center;
font-size: 45px;
font-weight: 300;
padding: 30px 0;
}
</style>
<script style="text/javascript">
$(function() {
  var clicks = 0;
  $('.antibotlinks').click(function() {
    clicks++;
    $('#antibotlinks').val($('#antibotlinks').val()+' '+$(this).attr('rel'));
    if(clicks == <?php echo $antibotlinks->get_link_count(); ?>) {
      var rand = Math.floor((Math.random() * clicks) + 1);
      var button = '<input type="submit" class="btn-re" value=" > ">';
      var z=0;
      $('.antibotlinks').each(function(){
        z++;
        if (z==rand) {
          $(this).replaceWith(button);
        }
      });
      
    }
    $(this).hide();
    return false;
  });
});
</script>

</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div class="container">
    <div class="row">
    <div id="page">
    <div id="left" style="width:30%">
        <ul>
        <?php foreach($data["user_pages"] as $page): ?>
            <li><a href="?p=<?php echo $page["url_name"]; ?>"><?php echo $page["name"]; ?></a></li>
        <?php endforeach; ?>
        </ul>
        <table style="width:100%">
        <td><?php echo $data["custom_left_ad_slot"]; ?>
        </td>
        </table>
        <br>
    </div>
    <div id="center" style="width:40%">
        <?php if($data["error"]) echo $data["error"]; ?>
        <?php switch($data["page"]):
                case "disabled": ?>
            FAUCET DISABLED. Go to <a href="?p=admin">admin page</a> and fill all required data!
        <?php break; case "paid":
                echo $data["paid"];
              break; case "eligible": ?>
            <form method="POST">
                <div>
                    <?php if(!$data["captcha_valid"]): ?>
                    <center><p class="alert alert-danger" role="alert">Invalid Captcha!</p></center>
                    <?php endif; ?>
                </div>

                <!-- Antibot -->
                <div align="center">
                <input type="hidden" name="antibotlinks" id="antibotlinks" value="" />
                <?php if(!$antibotlinks->is_valid()): ?>
                <center><p class="alert alert-danger" role="alert">Invalid AntiBot verification!</p></center>
                <?php endif; ?>
                </div>
            </br>
                <table style="width:100%">
                  <tr>
                    <td><div style=”display:block;”>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 300 Negro Naranja -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:300px;height:250px"
                             data-ad-client="ca-pub-1321388824434022"
                             data-ad-slot="3467311194"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                        </div>
                        <center class="link" style="display:block;"><?php echo $antibotlinks->show_link(); ?></center>
                    </td>
                    <td>
                        <?php echo $data["captcha"]; ?>
                        <div class="text-center">
                        <?php
                        if (count($data['captcha_info']['available']) > 1) {
                            foreach ($data['captcha_info']['available'] as $c) {
                                if ($c == $data['captcha_info']['selected']) {
                                    echo '<b>' .$c. '</b> ';
                                } else {
                                    echo '<a href="?cc='.$c.'">'.$c.'</a> ';
                                }
                            }
                        }
                        ?>
                        </div>
                    </td>
                    <td>
                        <center>
                        <div id="coindesk-widget" data-size="mpu" data-align="center"></div>
                        <script type="text/javascript" src="//widget.coindesk.com/bpiticker/coindesk-widget.min.js?88e6a4"></script>
                        </center>
                    </td>
                  </tr>
                  <tr>
                </table>
                <!--
                <div>
                    <input type="submit" class="btn btn-primary-outline" data-toggle="modal" data-target="#botSystemModal" value="Get reward!">
                </div>
                -->
                <div>
                    <table align="center" style="width:80%">
                    <tr>
                        <td>
                            <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                            <!-- Texto 728 Fondo negro -->
                            <ins class="adsbygoogle"
                                 style="display:inline-block;width:728px;height:15px"
                                 data-ad-client="ca-pub-1321388824434022"
                                 data-ad-slot="6560378394"></ins>
                            <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </td>
                        <td>
                            <p align="left" class="link" style="display:block;"><?php echo $antibotlinks->show_link(); ?></p>
                        </td>
                    </tr>
                </div>
                <br></br>
                <table style="width:100%">
                <tr>
                    <td align="justify" width="50%">
                        <p class="bown"></p>
                        <p>What is Bitcoin Faucet?</p>
                        <p>Faucets are the pages that make 'micro' who come to them from time to time; depending on the Faucet this time can result in a few minutes, hours or even a day. They exist as an incentive to encourage new users of BTC, and generally give very small amounts so that you can gather up to a minimum amount of retirement, and thus achieve spend the money earned our wallet Bitcoin, which is the account where we store our money.</p>
                        <center><?php echo $antibotlinks->show_info(); ?></center>
                    </td>
                    <td width="50%">
                        <p class="bown"></p>
                        <div style=”display:block;”>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 300 Negro Naranja -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:300px;height:250px"
                             data-ad-client="ca-pub-1321388824434022"
                             data-ad-slot="3467311194"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                        </div>
                        <center class="link" style="display:block;"><?php echo $antibotlinks->show_link(); ?></center>
                        <div class="input-group" align="center">
                            <span class="input-group-addon text-primary"><i class="fa fa-btc"></i> Address</span>
                            <input type="text" name="<?php echo $data["address_input_name"]; ?>" class="form-control" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                            <input type="checkbox" name="honeypot" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                            <input type="text" name="<?php echo $data["address_input_name"]; ?>" class="form-control" placeholder="i.e. 1DT5CupfxUn6UJK97ocVnWN2CzQPn8MgrN" value="<?php echo $data["address"]; ?>" autocomplete="off">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="bown"></p>
                        <div style=”display:block;”>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 300 Negro Naranja -->
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:300px;height:250px"
                             data-ad-client="ca-pub-1321388824434022"
                             data-ad-slot="3467311194"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                        </div>
                        <center class="link" style="display:block;"><?php echo $antibotlinks->show_link(); ?></center>
                    </td>
                    <td align="justify">
                        <p class="bown"></p>
                        <p>How to earn Bitcoins Faucet with?</p>
                        <p>Win Bitcoin Faucet with pages is very simple, as you only have to enter your purse BitCoin and solve a captcha. Rarely you will ask to make a record but it is very easy to do and wont take more than 20 seconds to do so.</p>
                        <p>Bitcoin and Forex</p>
                        <p>The forex market is the foreign exchange market. Forex is short for Foreign Exchange market. It is the world's largest, with a volume of over 4 trillion dollars daily business financial market. To understand what this means turnover, it is what can move the NYSE (the largest in the world) throughout a trading month.</p>
                    </td>
                </tr>
                <tr>
                    <td align="justify">
                        <p class="bown"></p>
                        <center>
                            <iframe data-aa='110890' src='https://ad.a-ads.com/110890?size=300x250' scrolling='no' style='width:300px; height:250px; border:0px; padding:0;overflow:hidden' allowtransparency='true' frameborder='0'></iframe>
                        </center>
                    </td>
                    <td align="justify">
                        <p class="bown"></p>
                        <table align="center">
                        <tr>
                            <td>
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- 468 Text negro naranja -->
                                <ins class="adsbygoogle"
                                     style="display:inline-block;width:468px;height:15px"
                                     data-ad-client="ca-pub-1321388824434022"
                                     data-ad-slot="4944044398"></ins>
                                <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </td>
                        </tr>
                        <tr>
                            <p>Insurance is a contract by which one person (the insurer) agrees, by charging a premium and if the event occurs whose risk is hedged to compensate within the agreed limits, the damage produced to the insured or meet capital, income or other agreed services. They define the first article of Law 50/1980, of 8 October, on Insurance Contracts (BOE no. 250, of October 17, 1980), which is valid in Spain.</p>
                            <p>This contract involved an insurer or insurance company, which is who sells insurance and who covers the risk and the insured or policyholder, is the person buying the insurance policy and pay the premium. Sometimes it's not the same person, for one can be who has purchased the policy, which is the policyholder and be different who is guaranteed or insured, as for example in collective accident insurance recruited by enterprises on behalf of their workers.</p>
                        </tr>
                        <center class="link" style="display:block;"><?php echo $antibotlinks->show_link(); ?></center>
                        </table>
                    </td>
                </tr>
                </table>
            </form>
        <?php break; case "visit_later": ?>
            <table style="width:100%">
                <tr>
                    <td>
                        <?php echo $data["custom_right_ad_slot"]; ?>
                    </td>
                    <td>
                        <center><p class="alert alert-danger" role="alert">You have to wait <?php echo $data["time_left"]; ?></p></center>
                    </td>
                    <td>
                        <?php echo $data["custom_right_ad_slot"]; ?>
                    </td>
                </tr>
            </table>
            <br></br>
                <table style="width:100%">
                <tr>
                    <td align="justify">
                        <p class="bown"></p>
                        <p>What is Bitcoin Faucet?</p>
                        <p>Faucets are the pages that make 'micro' who come to them from time to time; depending on the Faucet this time can result in a few minutes, hours or even a day. They exist as an incentive to encourage new users of BTC, and generally give very small amounts so that you can gather up to a minimum amount of retirement, and thus achieve spend the money earned our wallet Bitcoin, which is the account where we store our money.</p>
                    </td>
                    <td>
                        <p class="bown"></p>
                        
                        <center>
                        <script type="text/javascript">
                            google_ad_client = "ca-pub-1321388824434022";
                            google_ad_slot = "3467311194";
                            google_ad_width = 300;
                            google_ad_height = 250;
                        </script>
                        <!-- 300 Negro Naranja -->
                        <script type="text/javascript"
                        src="//pagead2.googlesyndication.com/pagead/show_ads.js">
                        </script>
                        </center>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="bown"></p>
                        <center>
                            <iframe data-aa='110890' src='https://ad.a-ads.com/110890?size=300x250' scrolling='no' style='width:300px; height:250px; border:0px; padding:0;overflow:hidden' allowtransparency='true' frameborder='0'></iframe>
                        </center>
                    </td>
                    <td align="justify">
                        <p class="bown"></p>
                        <p>How to earn Bitcoins Faucet with?</p>
                        <p>Win Bitcoin Faucet with pages is very simple, as you only have to enter your purse BitCoin and solve a captcha. Rarely you will ask to make a record but it is very easy to do and wont take more than 20 seconds to do so.</p>
                        <p>Bitcoin and Forex</p>
                        <p>The forex market is the foreign exchange market. Forex is short for Foreign Exchange market. It is the world's largest, with a volume of over 4 trillion dollars daily business financial market. To understand what this means turnover, it is what can move the NYSE (the largest in the world) throughout a trading month.</p>
                        </td>
                </tr>
                <tr>
                    <td align="justify">
                        <p class="bown"></p>
                        <center>
                            <iframe data-aa='110890' src='https://ad.a-ads.com/110890?size=300x250' scrolling='no' style='width:300px; height:250px; border:0px; padding:0;overflow:hidden' allowtransparency='true' frameborder='0'></iframe>
                        </center>
                    </td>
                    <td align="justify">
                        <p class="bown"></p>
                        
                        <center><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle"
                             style="display:inline-block;width:200px;height:90px"
                             data-ad-client="ca-pub-1321388824434022"
                             data-ad-slot="8286607193"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script></center>
                        <p>Insurance is a contract by which one person (the insurer) agrees, by charging a premium and if the event occurs whose risk is hedged to compensate within the agreed limits, the damage produced to the insured or meet capital, income or other agreed services. They define the first article of Law 50/1980, of 8 October, on Insurance Contracts (BOE no. 250, of October 17, 1980), which is valid in Spain.</p>
                        <p>This contract involved an insurer or insurance company, which is who sells insurance and who covers the risk and the insured or policyholder, is the person buying the insurance policy and pay the premium. Sometimes it's not the same person, for one can be who has purchased the policy, which is the policyholder and be different who is guaranteed or insured, as for example in collective accident insurance recruited by enterprises on behalf of their workers.</p>
                    </td>
                </tr>
                </table>

        <?php break; case "user_page": ?>
        <?php echo $data["user_page"]["html"]; ?>
        <?php break; endswitch; ?>
    </div>
    <?php if($data['button_timer']): ?>
    <script type="text/javascript" src="libs/button-timer.js"></script>
    <script> startTimer(<?php echo $data['button_timer']; ?>); </script>
    <?php endif; ?>
    <?php if($data['block_adblock'] == 'on'): ?>
    <script type="text/javascript" src="libs/advertisement.js"></script>
    <script type="text/javascript" src="libs/check.js"></script>
    <?php endif; ?>
    </div>
    </div>
</div>
</body>
</html>
