<table border="0" cellspacing="0" cellpadding="5" bgcolor="#{{email_bg || 'b1221f'}}" style="font-size: 18px; padding: 50px; width: 100%; max-width: 800px;">
    <tr bgcolor="#FFFFFF">
        <td colspan="2" bgcolor="#eff0f0" align="center" style="padding: 50px;">
            <a href="{{site_url || 'http://www.walterinteractive.com/'}}">
                <img src="{{logo_url || 'walter-logo.png'}}" border="0" alt="{{site_name || 'Walter'}}">
            </a>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td align="left" colspan="2" style="color: #000000; padding: 50px 50px 0 50px;"><h2 style="margin: 0; font-weight: bold;">{{main_title || "Main title"}}</h2></td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td colspan="2" style="padding: 50px 50px 32px 50px;"><hr style="border: 0; width: 100%; height: 1px; margin: 0; background: #000000;" /></td>
    </tr>
    <tr bgcolor="#FFFFFF" ng-repeat="item in inputs">
        <td width="50%" align="left" style="width: 50%; max-width: 400px; color: #000000; vertical-align: top; padding-left: 50px; font-weight: bold;" ng-show="item.input_type == 'text'">
            <span>{{item.input_name || 'Name - Example'}}</span>
        </td>
        <td width="50%" align="left" style="width: 50%; max-width: 400px; color: #969696; vertical-align: top; padding-right: 50px;" ng-show="item.input_type == 'text'">
            <span>{{item.input_value || '[name_example]'}}</span>
        </td>
        <td colspan="2" style="color: #969696; vertical-align: top; padding: 0 50px 50px;" ng-show="item.input_type == 'textarea'">
            <p style="color: #000000; font-weight: bold;">{{item.input_name || 'Message - Example'}}</p>
            <p>{{item.input_value || '[message_example]'}}</p>
        </td>
    </tr>
    <tr bgcolor="#FFFFFF">
        <td colspan="2" style="padding-bottom: 50px"></td>
    </tr>
    <tr>
        <td colspan="2" style="color: #FFF; text-align: center; vertical-align: middle; padding-top: 50px; font-size: 14px;">
            <p>{{email_lang || 'Cet courriel a été envoyé via le formulaire de contact de'}} {{site_name || 'Walter'}}<br /><a href="http://www.radimed.ca" style="color: #FFF; font-weight: bold; text-decoration: none;">{{site_url || 'http://www.walterinteractive.com/'}}</a></p>
        </td>
    </tr>
</table>