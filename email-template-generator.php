<?php
    /*
     * ______     ______     __   __     ______   __     ______
     * /\  ___\   /\  __ \   /\ "-.\ \   /\  ___\ /\ \   /\  ___\
     * \ \ \____  \ \ \/\ \  \ \ \-.  \  \ \  __\ \ \ \  \ \ \__ \
     *  \ \_____\  \ \_____\  \ \_\\"\_\  \ \_\    \ \_\  \ \_____\
     *   \/_____/   \/_____/   \/_/ \/_/   \/_/     \/_/   \/_____/
     *
     */
    $BG = '#b1221f';
    $lang = 'en'; // en - fr
    $website_name = 'Radimed';
    $website_url = 'http://www.radimed.ca/';
    $website_url_2 = 'www.radimed.ca';
    $logo_url = 'http://radimed.local/wp-content/uploads/2016/06/logo-mobile.png';
    $main_form_title = 'MRI Consent Form';

    //Lang
    if ( $lang == "en" ) {
        $lang = 'This e-mail was sent from a contact form';
    } else {
        $lang = 'Cet courriel a été envoyé via le formulaire de contact de';
    }

    $label = array(
                //     array("xxxxxxxxxxxxxxxxxx", 'xxxxxxxxxxxxxxxxxx', ''),
                array("Nom et prénom", '[name]', ''),
                array("Téléphone", '[tel]', ''),
                array("Date de naissance", '[date]', ''),
                array("Renseignements clinicques", '[clinic-info]', '1'),
                array("Pacemaker", '[form-1]', ''),
                array("Stent", '[form-2]', ''),
                array("Aneurysm clip", '[form-3]', ''),
                array("Ocular or cochlear implant", '[form-4]', ''),
                array("Metallic ocular foreign body", '[form-5]', ''),
                array("Insulin pump", '[form-6]', ''),
                array("Neuro or biostimulator", '[form-7]', ''),
                array("VP shunt", '[form-8]', ''),
                array("Electrode fragment (post cardiac sugery)", '[form-9]', ''),
                array("IVC filter (Birdnest)", '[form-10]', ''),
                array("Joint prosthesis", '[form-11]', ''),
                array("Metal pins, rods or screws in bones", '[form-12]', ''),
                array("Cotrel or Harrington rod", '[form-13]', ''),
                array("Metallic staples or sutures", '[form-14]', ''),
                array("Shrapnel, bullet, gunshot", '[form-15]', ''),
                array("Magnetic penile implant", '[form-16]', ''),
                array("Breast implant or marker", '[form-17]', ''),
                array("Nicotine / medicated patch", '[form-18]', ''),
                array("Tattoo, piercing or permanent makeup", '[form-19]', ''),
                array("Tinted contact lenses", '[form-20]', ''),
                array("Denture or teeth braces", '[form-21]', ''),
                array("Allergies / asthma", '[form-22]', ''),
                array("Pregnant", '[form-23]', ''),
                array("Breastfeeding", '[form-24]', ''),
                array("Iodine or gadolinium injection (last 48 hrs)", '[form-25]', ''),
                array("Renal failure (creatinine level)", '[form-26]', ''),
                array("Claustrophobic", '[form-27]', ''),
                array("Please prescribe an anxiolytic", '[form-28]', '')
            );



    /*
    * ______     ______     __   __     ______   __     ______
    * /\  ___\   /\  __ \   /\ "-.\ \   /\  ___\ /\ \   /\  ___\
    * \ \ \____  \ \ \/\ \  \ \ \-.  \  \ \  __\ \ \ \  \ \ \__ \
    *  \ \_____\  \ \_____\  \ \_\\"\_\  \ \_\    \ \_\  \ \_____\
    *   \/_____/   \/_____/   \/_/ \/_/   \/_/     \/_/   \/_____/
    *
    */









    $template = '
<table border="0" cellspacing="0" cellpadding="5" bgcolor="'.$BG.'" style="font-size: 18px; padding: 50px; width: 100%; max-width: 800px;">
    <tr bgcolor="#FFFFFF">
        <td colspan="2" bgcolor="#eff0f0" align="center" style="padding: 50px;">
            <a href="'.$website_url.'">
                <img src="'.$logo_url.'" border="0" alt="'.$website_name.'">
            </a>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td align="left" colspan="2" style="color: #000000; padding: 50px 50px 0 50px;"><h2 style="margin: 0; font-weight: bold;">'.$main_form_title.'</h2></td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td colspan="2" style="padding: 50px 50px 32px 50px;"><hr style="border: 0; width: 100%; height: 1px; margin: 0; background: #000000;" /></td>
    </tr>
    ';

    $i = 0;
    foreach ($label as $key) {
        if ( $key[2] == "" ) {
            $template .= '
    <tr bgcolor="#FFFFFF">
        <td width="50%" align="left" style="width: 50%; max-width: 400px; color: #000000; vertical-align: top; padding-left: 50px; font-weight: bold;">
            <span>'.$key[0].'</span>
        </td>
        <td width="50%" align="left" style="width: 50%; max-width: 400px; color: #969696; vertical-align: top; padding-right: 50px;">
            <span>'.$key[1].'</span>
        </td>
    </tr>
        ';
        } else {
            $template .= '
    <tr bgcolor="#FFFFFF">
        <td colspan="2" style="color: #969696; vertical-align: top; padding: 0 50px 50px;">
            <p style="color: #000000; font-weight: bold;">'.$key[0].'</p>
            <p>'.$key[1].'</p>
        </td>
    </tr>
        ';
        }

        $i++;
    }

    $template .= '
    <tr bgcolor="#FFFFFF">
        <td colspan="2" style="padding-bottom: 50px"></td>
    </tr>
    <tr>
        <td colspan="2" style="color: #FFF; text-align: center; vertical-align: middle; padding-top: 50px; font-size: 14px;">
            <p>'.$lang.' '.$website_name.'<br /><a href="'.$website_url.'" style="color: #FFF; font-weight: bold; text-decoration: none;">'.$website_url_2.'</a></p>
        </td>
    </tr>
</table>
    ';
?>

<!DOCTYPE html>
<html lang="en-US" ng-app="emailTemplateApp" ng-controller="emailTemplateController">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Email template generator</title>

    <style type="text/css">
        .container {
            width: 1400px;
            padding-bottom: 50px;
            margin: 0 auto;
        }

        .col-left {
            float: left;
            width: 48%;
            word-break: break-all;
        }

        .col-left pre {
            word-break: break-all;
            white-space: pre-wrap;
        }

        .col-left input[type=text] {
            width: 300px;
            height: 30px;
        }

        .col-right {
            float: right;
            width: 48%;
        }

        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }

        .clear {
            clear: both;
        }

        .template-code {
            border: 1px solid #000;
            padding: 50px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="starter-template">
            <h1>Email template generator</h1>
        </div>
        <div id="selectable" onclick="selectText('selectable')" class="col-left">
            <?php
                echo "<pre>";
                echo htmlspecialchars($template);
                echo "</pre>";
            ?>
        </div>
        <div class="col-right show-case">
            <?php echo $template; ?>
        </div>
        <div class="clear"></div>
        </div>
    </div><!-- /.container -->
    <script type="text/javascript">
        function selectText(containerid) {
            if (document.selection) {
                var range = document.body.createTextRange();
                range.moveToElementText(document.getElementById(containerid));
                range.select();
            } else if (window.getSelection) {
                var range = document.createRange();
                range.selectNode(document.getElementById(containerid));
                window.getSelection().addRange(range);
            }
        }
    </script>
</body>
</html>