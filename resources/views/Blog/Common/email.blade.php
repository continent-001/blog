<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Free社区激活邮件</title>
</head>
<body>
    <div id="qm_con_body"><div id="mailContentContainer" class="qmbox qm_con_body_content qqmail_webmail_only" style="">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 600px; border: 1px solid #ddd; border-radius: 3px; color: #555; font-family: 'Helvetica Neue Regular',Helvetica,Arial,Tahoma,'Microsoft YaHei','San Francisco','微软雅黑','Hiragino Sans GB',STHeitiSC-Light; font-size: 12px; height: auto; margin: auto; overflow: hidden; text-align: left; word-break: break-all; word-wrap: break-word;">
                <tbody style="margin: 0; padding: 0;"> <tr style="background-color: #393D49; height: 60px; margin: 0; padding: 0;">
                    <td style="margin: 0; padding: 0;"> <div style="color: #5EB576; margin: 0; margin-left: 30px; padding: 0;">
                            <a style="font-size: 14px; margin: 0; padding: 0; color: #5EB576; text-decoration: none;" href="#" target="_blank" rel="noopener">Free社区</a>
                        </div>
                    </td>
                </tr>
                <tr style="margin: 0; padding: 0;">
                    <td style="margin: 0; padding: 30px;">
                        <p style="line-height: 20px; margin: 0; margin-bottom: 10px; padding: 0;">
                            Hi，<em style="font-weight: 700;">{{$nick_name}}</em>，请完成以下操作： </p>
                        <div style="">
                            <a href="{{$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST']}}/check_email?user_no={{$user_no}}" style="background-color: #009E94; color: #fff; display: inline-block; height: 32px; line-height: 32px; margin: 0 15px 0 0; padding: 0 15px; text-decoration: none;" target="_blank" rel="noopener">立即激活邮箱</a>
                        </div>
                        <p style="line-height: 20px; margin-top: 20px; padding: 10px; background-color: #f2f2f2; font-size: 12px;"> 如果该邮件不是由你本人操作，请勿进行激活！否则你的邮箱将会被他人绑定。 </p>
                    </td> </tr>
                <tr style="background-color: #fafafa; color: #999; height: 35px; margin: 0; padding: 0; text-align: center;">
                    <td style="margin: 0; padding: 0;">系统邮件，请勿直接回复。</td>
                </tr>
                </tbody>
            </table>
            <style type="text/css">.qmbox style, .qmbox script, .qmbox head, .qmbox link, .qmbox meta {display: none !important;}</style></div></div>
</body>
</html>
