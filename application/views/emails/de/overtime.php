<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2017 itahmid
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/itahmid/LeaveManagementSystem
 * @since         0.1.0
 */
?>
<html lang="en">
    <body>
        <h3>{Title}</h3>
        {Firstname} {Lastname} beantragt Überstunden. Hier die Details dazu:
        <table border="0">
            <tr>
                <td>Datum &nbsp;</td><td>{Date}</td>
            </tr>
            <tr>
                <td>Dauer &nbsp;</td><td>{Duration}</td>
            </tr>
            <tr>
                <td>Begründung &nbsp;</td><td>{Cause}</td>
            </tr>
        </table>
        <a href="{UrlAccept}">Akzeptieren</a>
        <a href="{UrlReject}">Ablehnen</a>
    </body>
</html>
