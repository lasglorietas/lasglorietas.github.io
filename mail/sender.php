<?php

if(!$_POST){	$_POST["name"] = "Test User"; $_POST["gender"] = "o";	}

$pagina = <<<EOPAGE
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta property="og:title" content="Revista Las Glorietas" />
</head>
  <body style="margin: 0;mso-line-height-rule: exactly;padding: 0;min-width: 100%"><style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Bitter:400,700,400italic);@import url(https://fonts.googleapis.com/css?family=Bitter:400,700,400italic);@import url(https://fonts.googleapis.com/css?family=Bitter:400,700,400italic);@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400);@import url(https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400);@import url(https://fonts.googleapis.com/css?family=Bitter:400,700,400italic);.wrapper,.separator,.preheader-buffer,.header,.one-col-bg,.two-col-bg,.three-col-bg,.one-col-feature-bg{background-color:#f4f5f2}h1{color:#58595b}.wrapper h1{}.wrapper h1{font-family:Georgia,serif}@media only screen and (min-width: 0){.wrapper h1{font-family:Bitter,Georgia,serif !important}}h1{}.one-col h1,.one-col-feature h1{line-height:36px}.two-col h1{line-height:30px}.three-col 
h1{line-height:28px}h2{color:#58595b}.wrapper h2{}.wrapper h2{font-family:Georgia,serif}@media only screen and (min-width: 0){.wrapper h2{font-family:Bitter,Georgia,serif !important}}h2{}.one-col h2,.one-col-feature h2{line-height:30px}.two-col h2{line-height:26px}.three-col h2{line-height:24px}h3{color:#58595b}.wrapper h3{}.wrapper h3{font-family:Georgia,serif}@media only screen and (min-width: 0){.wrapper h3{font-family:Bitter,Georgia,serif !important}}h3{}.one-col h3,.one-col-feature h3{line-height:26px}.two-col h3{line-height:22px}.three-col h3{line-height:21px}p,ol,ul{color:#808285}.wrapper p,.wrapper ol,.wrapper ul{}.wrapper p,.wrapper ol,.wrapper ul{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper p,.wrapper ol,.wrapper ul{font-family:"Open Sans",sans-serif !important}}p,ol,ul{}.one-col p,.one-col ol,.one-col ul,.one-col-feature p,.one-col-feature 
ol,.one-col-feature ul{line-height:22px}.two-col p,.two-col ol,.two-col ul{line-height:21px;Margin-bottom:21px}.three-col p,.three-col ol,.three-col ul{line-height:20px;Margin-bottom:20px}.divider{background-color:#e6e6e7}.border{background-color:#edeee9}.wrapper a{color:#808285}.wrapper a:hover{color:#686868 !important}.wrapper .logo{color:#778ea3}.wrapper .logo{font-family:Georgia,serif}@media only screen and (min-width: 0){.wrapper .logo{font-family:Bitter,Georgia,serif !important}}.wrapper .logo a{color:#778ea3}.wrapper .logo a:hover{color:#778ea3 !important}.btn a{}.wrapper .btn a{}.wrapper .btn a{font-family:sans-serif}@media only screen and (min-width: 0){.wrapper .btn a{font-family:"Open Sans",sans-serif !important}}.wrapper .btn a{background-color:#8f687e;color:#fff}.wrapper .btn a:hover{background-color:#a68497 !important;color:#fff 
!important}.preheader{background-color:#edeee9}.preheader .title,.preheader .webversion{color:#9a9c9e}.preheader .title,.preheader .webversion{font-family:sans-serif}@media only screen and (min-width: 0){.preheader .title,.preheader .webversion{font-family:"Open Sans",sans-serif !important}}.preheader .title a,.preheader .webversion a{color:#9a9c9e}.preheader .title a:hover,.preheader .webversion a:hover{color:#9a9c9e !important}.footer,.emb-editor-canvas{background-color:#edeee9}.footer td{color:#9a9c9e}.footer td{font-family:sans-serif}@media only screen and (min-width: 0){.footer td{font-family:"Open Sans",sans-serif !important}}.wrapper .footer a{color:#9a9c9e}.wrapper .footer a:hover{color:#9a9c9e !important}.social,.social a{color:#9a9c9e}.social a:hover{color:#9a9c9e !important}@media (min-width:0){body{background-color:#edeee9}}@media 
(-webkit-min-device-pixel-ratio:1.5),(min-resolution:144dpi){.one-col ul{border-left:30px solid #fff}}
</style>
    <center class="wrapper" style="display: table;table-layout: fixed;width: 100%;min-width: 620px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;background-color: #f4f5f2">
      <table class="preheader" style="border-collapse: collapse;border-spacing: 0;width: 100%;background-color: #edeee9">
        <tbody><tr>
          <td class="webversion" style="padding: 9px;vertical-align: top;font-size: 11px;line-height: 16px;text-align: right;width: 250px;color: #9a9c9e;font-family: sans-serif">
          </td>
        </tr>
        <tr><td class="preheader-buffer" style="padding: 0;vertical-align: top;background-color: #f4f5f2;font-size: 20px;line-height: 20px" colspan="2">&nbsp;</td></tr>
      </tbody></table>
      <table class="header centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 100%;background-color: #f4f5f2">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top">&nbsp;</td>
          <td class="logo" style="padding: 0;vertical-align: top;mso-line-height-rule: at-least;font-size: 38px;line-height: 50px;padding-top: 20px;padding-bottom: 10px;width: 600px;color: #778ea3;font-family: Georgia,serif">
            <div class="logo-center" style="text-align: center" align="center" id="emb-email-header"><img style="border: 0;-ms-interpolation-mode: bicubic;display: block;Margin-left: auto;Margin-right: auto;max-width: 600px" src="images/banner.jpg" alt="" width="600" height="132" /></div>
          </td>
          <td style="padding: 0;vertical-align: top">&nbsp;</td>
        </tr>
      </tbody></table>
      
          <table class="one-col-bg" style="border-collapse: collapse;border-spacing: 0;width: 100%;background-color: #f4f5f2">
            <tbody><tr>
              <td style="padding: 0;vertical-align: top" align="center">
                <table class="one-col" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px;border-radius: 0px;-moz-border-radius: 0px">
                  <tbody><tr>
                    <td class="column" style="padding: 0;vertical-align: top;text-align: left">
                      <table class="contents" style="border-collapse: collapse;border-spacing: 0;width: 100%;border-radius:0px;-moz-border-radius: 0px;background-color: #ffffff">
                        <tbody><tr>
                          <td style="padding: 0;vertical-align: top">
                            <div><div class="column-top" style="font-size: 30px;line-height: 30px">&nbsp;</div></div>
                              <table style="border-collapse: collapse;border-spacing: 0;width: 100%" width="100%">
                                <tbody><tr>
                                  <td class="padded" style="padding: 0;vertical-align: top;padding-left: 40px;padding-right: 40px;text-align: left">
                                    
            <h1 style="Margin-top: 0;font-weight: normal;color: #58595b;font-family: Georgia,serif;font-size: 26px;Margin-bottom: 12px;line-height: 36px">
            Que tal $_POST[name], &#191;Estas list$_POST[gender] para aumentar tus ventas&#63; </h1>
            <p style="Margin-top: 0;font-weight: normal;color: #808285;font-family: sans-serif;font-size: 14px;Margin-bottom: 10px;line-height: 22px">
           	Queremos invitarte a formar parte de la mejor revista publicitaria. </p>
            <p style="Margin-top: 0;font-weight: normal;color: #808285;font-family: sans-serif;font-size: 14px;Margin-bottom: 20px;line-height: 22px">
            La revista <strong style="font-weight: bold">Las Glorietas</strong>, te ofrece la oportunidad de darte a conocer a traves de 2000 ejemplares mensuales, 
            perfectamente distribuidos en casas, cotos, empresas y negocios de Ciudad Granja.</p>
          
                                  </td>
                                </tr>
                              </tbody></table>
                            
                            <div class="column-bottom" style="font-size: 10px;line-height: 10px">&nbsp;</div>
                          </td>
                        </tr>
                      </tbody></table>
                    </td>
                  </tr>
                </tbody></table>
              </td>
            </tr>
          </tbody></table>
        
          <div class="separator" style="font-size: 20px;line-height: 20px;background-color: #f4f5f2">&nbsp;</div>
        
          <table class="two-col-bg" style="border-collapse: collapse;border-spacing: 0;width: 100%;background-color: #f4f5f2">
            <tbody><tr>
              <td style="padding: 0;vertical-align: top" align="center">
                <table class="two-col centered" style="border-collapse: collapse;border-spacing: 0;Margin-left: auto;Margin-right: auto;width: 600px">
                  <tbody><tr>
                    <td class="column-wider first" style="padding: 0;vertical-align: top;width: 390px">
                      <table class="contents" style="border-collapse: collapse;border-spacing: 0;width: 100%;border-radius: 0px;-moz-border-radius: 0px;background-color: #ffffff">
                        <tbody><tr>
                          <td style="padding: 0;vertical-align: top">
                            <div><div class="column-top" style="font-size: 20px;line-height: 20px">&nbsp;</div></div>
                              <table style="border-collapse: collapse;border-spacing: 0" width="100%">
                                <tbody><tr>
                                  <td class="padded" style="padding: 0;vertical-align: top;padding-left: 40px;padding-right: 40px;text-align: left">
                                    
            <h1 style="Margin-top: 0;font-weight: normal;color: #58595b;font-family: Georgia,serif;font-size: 22px;Margin-bottom: 12px;line-height: 30px">Precios Accesibles</h1>
            <p style="Margin-top: 0;font-weight: normal;color: #808285;font-family: sans-serif;font-size: 14px;line-height: 21px;Margin-bottom: 20px">
            No hay pretexto para mejorar tu presencia y sobre todo tus ventas, <strong>Las Glorietas</strong> tiene el espacio indicado para tus necesidades. <br/>
            Asi es, anunciate desde <b><i>$150.00</i></b> al mes. <br /> &#191;Que esperas&#63; Contactanos ya. <br /><br />
          
           <a href="https://apps.facebook.com/lasglorietas/"> <button style="cursor:pointer;padding:10px;background-color:#fabb1b;color:white;border:0px solid red"> <img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle" src="images/forward-dark.png" alt="" width="13" height="10"> Visitar revista del mes </button></a> </p>
          
                                  </td>
                                </tr>
                              </tbody></table>
                            
                            <div class="column-bottom" style="font-size: 0px;line-height: 0px">&nbsp;</div>
                          </td>
                        </tr>
                      </tbody></table>
                    </td>
                    <td class="gutter" style="padding: 0;vertical-align: top;width: 20px;font-size: 1px;line-height: 1px">&nbsp;</td>
                    <td class="column-narrower last" style="padding: 0;vertical-align: top;width: 190px">
                      <table class="contents" style="border-collapse: collapse;border-spacing: 0;width: 100%;border-radius: 0px;-moz-border-radius: 0px;background-color: #ffffff">
                        <tbody><tr>
                          <td style="padding: 0;vertical-align: top">
                            <div><div class="column-top" style="font-size: 20px;line-height: 20px">&nbsp;</div></div>
                              <table style="border-collapse: collapse;border-spacing: 0" width="100%">
                                <tbody><tr>
                                  <td class="padded" style="padding: 0;vertical-align: top;padding-left: 20px;padding-right: 20px;text-align: left">
                                    
            
<h1 style="Margin-top: 0;font-weight: normal;color: #58595b;font-family: Georgia,serif;font-size: 20px;Margin-bottom: 14px;line-height: 30px">Beneficios</h1>
<ul style="Margin-top: 0;padding-left: 0;font-weight: normal;color: #808285;font-family: sans-serif;font-size: 14px;Margin-left: 18px;line-height: 21px;Margin-bottom: 20px">
<li style="Margin-top: 0;padding-left: 12px;list-style-type: circle;list-style-position: outside;list-style-image: url(https://i9.createsend1.com/static/eb/master/10-hue/images/bullet.png);Margin-bottom: 10px">Cupones de Descuento.</li><li style="Margin-top: 0;padding-left: 12px;list-style-type: circle;list-style-position: outside;list-style-image: 
url(https://i9.createsend1.com/static/eb/master/10-hue/images/bullet.png);Margin-bottom: 10px">Social Media.</li><li style="Margin-top: 0;padding-left: 12px;list-style-type: circle;list-style-position: outside;list-style-image: url(https://i9.createsend1.com/static/eb/master/10-hue/images/bullet.png);Margin-bottom: 10px">Reparto consciente y personalizado.</li></ul>
          
                                  </td>
                                </tr>
                              </tbody></table>
                            
                            <div class="column-bottom" style="font-size: 0px;line-height: 0px">&nbsp;</div>
                          </td>
                        </tr>
                      </tbody></table>
                    </td>
                  </tr>
                </tbody></table>
              </td>
            </tr>
          </tbody></table>
        
          <div class="separator" style="font-size: 20px;line-height: 20px;background-color: #f4f5f2">&nbsp;</div>
        
      <table class="footer" style="border-collapse: collapse;border-spacing: 0;table-layout: fixed;width: 100%;background-color: #edeee9">
        <tbody><tr>
          <td style="padding: 0;vertical-align: top;text-align: left;color: #9a9c9e;font-family: sans-serif">&nbsp;</td>
          <td class="inner" style="padding: 0;vertical-align: top;text-align: left;color: #9a9c9e;font-family: sans-serif;padding-top: 40px;padding-bottom: 75px;width: 560px">
            <table style="border-collapse: collapse;border-spacing: 0;width: 100%">
              <tbody><tr>
                <td class="campaign" style="padding: 0;vertical-align: top;text-align: left;color: #9a9c9e;font-family: sans-serif;font-size: 12px;line-height: 20px">
                  
                  
                  <div style="display:block; color:gray">
                    <span>
                      <span class="block">
                 <b>Revista Las Glorietas</b> <br />
                 <img src="images/icono-telefono.png" style="vertical-align: middle" width="20" /> <span > (044) 3315121240</span>
                    </span>
                  </div>
                </td>
                <td class="social" style="padding: 0;vertical-align: top;color: #9a9c9e;text-align: left;font-family: sans-serif;text-transform: uppercase;width: 190px">
                  <div class="padded" style="padding-left: 40px;padding-right: 40px;Margin-left: 20px;padding: 0">
                    <div style="Margin-bottom: 10px">
                      <a href="https://www.facebook.com/lasglorietasdeciudadgranja"><fblike><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle" src="images/facebook-dark.png" alt="" width="38" height="30" /><span>Like</span></fblike></a>
                    </div>
                    <div style="Margin-bottom: 10px">
                      <a href="https://twitter.com/lasglorietasdcg"><tweet><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle" src="images/twitter-dark.png" alt="" width="38" height="30" /><span>Tweet</span></tweet></a>
                    </div>
                    <div style="Margin-bottom: 10px; display:none">
                      <a href="*|FORWARD|*"><forwardtoafriend><img style="border: 0;-ms-interpolation-mode: bicubic;vertical-align: middle" src="images/forward-dark.png" alt="" width="38" height="30" /><span>Reenviar</span></forwardtoafriend></a>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody></table>
          </td>
          <td style="padding: 0;vertical-align: top;text-align: left;color: #9a9c9e;font-family: sans-serif">&nbsp;</td>
        </tr>
      </tbody></table>
    </center>
  
</body></html>
EOPAGE;

require_once('class.phpmailer.php');
include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer();
echo $pagina;

if($_POST["subject"])
{
	echo "\n\n\n\nprkjkcsjdnkcjnsdkcnjsdkjcnsdkjcnskdjcn\n\n\n\n";
		$body = $pagina;
		$name = $_POST["name"];
		$subject = $_POST["subject"];
	    $mail->IsSMTP();
	    $mail->SMTPAuth   = true;
	    $mail->Host       = "smtpout.secureserver.net";
	    $mail->Port       = 3535;
	    $mail->Username   = "webmaster@ciudadgranja.com";
	    $mail->Password   = "fosforo";
	    $mail->From       = "webmaster@ciudadgranja.com";
	    $mail->FromName   = "Revista Las Glorietas";
	    $mail->AddReplyTo("webmaster@ciudadgranja.com","Revista Las Glorietas");
	    $mail->Subject    = $name . $subject;
	    $mail->MsgHTML($body);
	    $address = $_POST["email"];
	    $mail->AddAddress($address, $name);
	    
	    if(!$mail->Send()) {
	      echo "Mailer Error: " . $mail->ErrorInfo;
	    } else {
	      echo "Message sent!";
	      echo $pagina;
	    }
}    

?>