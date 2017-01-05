<?php
/**
 * Email template.You can change the content of this template
 * @copyright  Copyright (c) 2017 itahmid
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/itahmid/LeaveManagementSystem
 * @since         0.4.5
 */
?>
<html lang="vi">
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <meta charset="UTF-8">
        <style>
            table {width:50%;margin:5px;border-collapse:collapse;}
            table, th, td {border: 1px solid black;}
            th, td {padding: 20px;}
            h5 {color:red;}
        </style>
    </head>
    <body>
        <h3>{Title}</h3>
        {Firstname} {Lastname} đã gửi thời gian làm thêm giờ. Xem chi tiết bên dưới:<br />
        <table border="0">
            <tr>
                <td>Ngày</td><td>{Date}</td>
            </tr>
            <tr>
                <td>Khoảng thời gian</td><td>{Duration}</td>
            </tr>
            <tr>
                <td>Lý do</td><td>{Cause}</td>
            </tr>
        </table>
        <a href="{UrlAccept}">Chấp nhận</a>
        <a href="{UrlReject}">Từ chối</a>
        <hr>
        <h5>*** Đây là tin nhắn được tạo tự động, xin đừng trả lời tin nhắn này. ***</h5>
    </body>
</html>