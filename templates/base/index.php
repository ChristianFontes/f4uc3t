<!DOCTYPE html>
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
color: #b7c9da;
background: #151F2A;
background-image:url('http://www.top-bit.com/images/dark-blocks-blue.jpg');
background-repeat: repeat-x;
background-attachment: fixed;
}

.wf{
max-width: 1200px;
margin: 0 auto;
}

p {
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
background-image:url('http://www.top-bit.com/images/blackbitcoin.jpg');
background-attachment: fixed;
}
hr { color: #b7c9da; }
#page a{
color: #B7C9DA;
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

.ref{
background: #354455;
padding: 12px 18px;
font-size: 16px;
font-weight: 300;
border: 2px outset #7A8EA1;
border-radius: 10px;
margin-top: 5%;
margin-bottom: 0;
}

.ref .t{
display: block;
font-weight: 500;
color: #7A8EA1;
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
</head>
<body>
    <div id="left">
        <ul>
        <?php foreach($data["user_pages"] as $page): ?>
            <li><a href="?p=<?php echo $page["url_name"]; ?>"><?php echo $page["name"]; ?></a></li>
        <?php endforeach; ?>
        </ul>
        <?php echo $data["custom_left_ad_slot"]; ?>
    </div>
        <div id="center">
        <p>Balance: <?php echo $data["balance"]." ".$data["unit"]; ?></p>
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
                    <p class="alert alert-danger" role="alert">Invalid Captcha!</p>
                    <?php endif; ?>
                </div>
                

                <div class="input-group">
                    <span class="input-group-addon text-primary"><i class="fa fa-btc"></i> Address</span>
                    <input type="text" name="address" class="form-control" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                    <input type="checkbox" name="honeypot" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                    <input type="text" name="2wrPrJn8O8asxdaHFPVKmdDWeyIihAeK" class="form-control normal" placeholder="i.e. 1DT5CupfxUn6UJK97ocVnWN2CzQPn8MgrN" value="" autocomplete="off">
                </div>



                <div>
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
                </div>
                <div>
                    <input type="submit" class="btn btn-primary btn-lg" value="Get reward!">
                </div>
            </form>
        <?php break; case "visit_later": ?>
            <p>You have to wait <?php echo $data["time_left"]; ?></p>
        <?php break; case "user_page": ?>
        <?php echo $data["user_page"]["html"]; ?>
        <?php break; endswitch; ?>
    </div>
    <div id="right">
        <?php echo $data["custom_right_ad_slot"]; ?>
    </div>
    <?php if($data['button_timer']): ?>
    <script type="text/javascript" src="libs/button-timer.js"></script>
    <script> startTimer(<?php echo $data['button_timer']; ?>); </script>
    <?php endif; ?>
    <?php if($data['block_adblock'] == 'on'): ?>
    <script type="text/javascript" src="libs/advertisement.js"></script>
    <script type="text/javascript" src="libs/check.js"></script>
    <?php endif; ?>
</body>
</html>
