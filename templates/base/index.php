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
<?php
# AntiBotLinks START
?>
<script style="text/javascript">
$(function() {
  var clicks = 0;
  $('.antibotlinks').click(function() {
    clicks++;
    $('#antibotlinks').val($('#antibotlinks').val()+' '+$(this).attr('rel'));
    if(clicks == <?php echo $antibotlinks->get_link_count(); ?>) {
      var rand = Math.floor((Math.random() * clicks) + 1);
      var button = '<input type="submit" class="btn btn-primary btn-lg" value="Get Reward!">';
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
<?php
# AntiBotLinks END
?> 
</head>
<body>
<div class="container">
    <div class="row">
    <div id="page">
    <div id="left">
        <ul>
        <?php foreach($data["user_pages"] as $page): ?>
            <li><a href="?p=<?php echo $page["url_name"]; ?>"><?php echo $page["name"]; ?></a></li>
        <?php endforeach; ?>
        </ul>
        <?php echo $data["custom_left_ad_slot"]; ?>
    </div>
        <div id="center">
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
                <input type="hidden" name="antibotlinks" id="antibotlinks" value="" />
                <?php if(!$antibotlinks->is_valid()): ?>
                <p class="alert alert-danger">Invalid AntiBot verification!</p>
                <?php endif; ?> 
                
            <div class="input-group">
                <span class="input-group-addon text-primary"><i class="fa fa-btc"></i> Address</span>
                <input type="text" name="<?php echo $data["address_input_name"]; ?>" class="form-control" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                <input type="checkbox" name="honeypot" style="position: absolute; position: fixed; left: -99999px; top: -99999px; opacity: 0; width: 1px; height: 1px">
                <input type="text" name="<?php echo $data["address_input_name"]; ?>" class="form-control" placeholder="i.e. 1DT5CupfxUn6UJK97ocVnWN2CzQPn8MgrN" value="<?php echo $data["address"]; ?>" autocomplete="off">
            </div>
            <br></br>

                <table style="width:100%">
                  <tr>
                    <td>
                        <?php echo $data["custom_right_ad_slot"]; ?>
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
                        <?php echo $data["custom_right_ad_slot"]; ?>
                    </td>
                  </tr>
                  <tr>
                </table>
                <div>
                    <input type="submit" class="btn btn-primary-outline" data-toggle="modal" data-target="#botSystemModal" value="Get reward!">
                </div>
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
        <?php break; case "user_page": ?>
        <?php echo $data["user_page"]["html"]; ?>
        <?php break; endswitch; ?>
    </div>
    <div id="right">
        <?php echo $antibotlinks->show_info(); ?> 
    </div>
    <?php if($data['button_timer']): ?>
    <script type="text/javascript" src="libs/button-timer.js"></script>
    <script> startTimer(<?php echo $data['button_timer']; ?>); </script>
    <?php endif; ?>
    <?php if($data['block_adblock'] == 'on'): ?>
    <script type="text/javascript" src="libs/advertisement.js"></script>
    <script type="text/javascript" src="libs/check.js"></script>
    <?php endif; ?>
    <br></br>
    <table style="width:100%">
    <tr>
        <td align="justify">
            What is a faucet?

            A faucet is a site that allows people to earn bitcoin (BTC) virtual currency by completing simple 
            tasks, such as viewing a webpage for a specified amount of time, 
            viewing ad content, even solving CAPTCHAs and playing games. The payout from each faucet task is 
            generally quite small, but over time as you accumulate bitcoin currency through multiple tasks, 
            and as the value of the BTC increases relative to other currencies (which it is expected to do), 
            the earnings from bitcoin faucets could be substantial. Because bitcoin currency is being released 
            on a deflationary schedule, due to laws of supply and demand, it is expected to grow stronger 
            over time compared to other currencies. In order to receive bitcoin currency, either through direct 
            purchase or from a faucet, you will first need to have a bitcoin wallet.
        </td>
        <td>
            <div id="coindesk-widget" data-size="mpu" data-align="center"></div>
            <script type="text/javascript" src="//widget.coindesk.com/bpiticker/coindesk-widget.min.js?88e6a4"></script>
        </td>
    </tr>
    <tr>
        <td>
            <center>
                <iframe data-aa='110890' src='https://ad.a-ads.com/110890?size=300x250' scrolling='no' style='width:300px; height:250px; border:0px; padding:0;overflow:hidden' allowtransparency='true' frameborder='0'></iframe>
            </center>
        </td>
        <td align="justify">
            What is bitcoin?

            Bitcoin is a payment system introduced as open-source software in 2009 by developer Satoshi Nakamoto. The payments in the system are recorded in a public ledger using its own unit of account, which is also called bitcoin. Payments work peer-to-peer without a central repository or single administrator, which has led the US Treasury to call bitcoin a decentralized virtual currency. Although its status as a currency is disputed, media reports often refer to bitcoin as a cryptocurrency or digital currency.

            Bitcoins are created as a reward for payment processing work in which users offer their computing power to verify and record payments into the public ledger. Called mining, individuals or companies engage in this activity in exchange for transaction fees and newly created bitcoins. Besides mining, bitcoins can be obtained in exchange for fiat money, products, and services. Users can send and receive bitcoins electronically for an optional transaction fee using wallet software on a personal computer, mobile device, or a web application.
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $antibotlinks->show_link(); ?>
            <?php echo $antibotlinks->show_link(); ?> 
            <?php echo $antibotlinks->show_link(); ?> 
            <?php echo $antibotlinks->show_link(); ?> 
            <?php echo $antibotlinks->show_link(); ?>  
        </td>
        <td>
            
        </td>
        <td>
            
        </td>
    </tr>
    </table>
    </div>
    </div>
</div>
</body>
</html>
