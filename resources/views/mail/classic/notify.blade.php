<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>网站通知</title>
    <!--[if mso]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333333;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px 0;
        }
        
        .email-wrapper {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .email-header {
            background-color: #4682B4;
            color: #ffffff;
            text-align: center;
            padding: 40px 20px;
        }
        
        .header-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
        }
        
        .email-title {
            font-size: 24px;
            font-weight: 600;
            margin: 0;
        }
        
        .email-content {
            padding: 40px 30px;
        }
        
        .greeting {
            font-size: 20px;
            color: #333333;
            margin-bottom: 30px;
            font-weight: 500;
            text-align: center;
        }
        
        .notification-content {
            background-color: #f8f9fa;
            border-left: 4px solid #4682B4;
            border-radius: 6px;
            padding: 25px;
            margin: 25px 0;
            font-size: 16px;
            line-height: 1.8;
            color: #4a5568;
        }
        
        .notification-content h1,
        .notification-content h2,
        .notification-content h3,
        .notification-content h4 {
            color: #2d3748;
            margin: 20px 0 15px 0;
        }
        
        .notification-content h1 { font-size: 24px; }
        .notification-content h2 { font-size: 20px; }
        .notification-content h3 { font-size: 18px; }
        .notification-content h4 { font-size: 16px; }
        
        .notification-content p {
            margin-bottom: 15px;
        }
        
        .notification-content ul,
        .notification-content ol {
            padding-left: 20px;
            margin-bottom: 15px;
        }
        
        .notification-content li {
            margin-bottom: 8px;
        }
        
        .notification-content strong {
            color: #4682B4;
            font-weight: 600;
        }
        
        .notification-content a {
            color: #4682B4;
            text-decoration: none;
        }
        
        .notification-content a:hover {
            text-decoration: underline;
        }
        
        .timestamp {
            background-color: #e3f2fd;
            border: 1px solid #4682B4;
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
            text-align: center;
            font-size: 14px;
            color: #4682B4;
        }
        
        .action-button {
            display: inline-block;
            background-color: #4682B4;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            margin: 20px 0;
        }
        
        .action-button:hover {
            background-color: #2c5282;
        }
        
        .action-section {
            text-align: center;
            margin: 30px 0;
        }
        
        .divider {
            height: 1px;
            background-color: #e0e0e0;
            margin: 30px 0;
        }
        
        .footer-note {
            font-size: 14px;
            color: #888888;
            line-height: 1.5;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .email-footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
        }
        
        .footer-links {
            margin-bottom: 15px;
        }
        
        .footer-links a {
            color: #4682B4;
            text-decoration: none;
            margin: 0 10px;
            font-size: 14px;
        }
        
        .copyright {
            font-size: 12px;
            color: #999999;
        }
        
        @media only screen and (max-width: 480px) {
            .email-wrapper {
                margin: 0 10px;
            }
            
            .email-content {
                padding: 30px 20px;
            }
            
            .notification-content {
                padding: 20px;
            }
            
            .action-button {
                display: block;
                margin: 15px 0;
            }
        }
    </style>
</head>
<body>
    <!--[if mso]>
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f5f5f5;">
        <tr>
            <td align="center" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color: #ffffff;">
    <![endif]-->
    
    <div class="email-wrapper">
        <div class="email-header">
            <div class="header-icon">📢</div>
            <h1 class="email-title">网站通知</h1>
        </div>
        
        <div class="email-content">
            <div class="greeting">亲爱的用户，您好！</div>
            
            <div class="notification-content">
                {!! nl2br($content) !!}
            </div>
            
            <div class="timestamp">
                通知发送时间：{{ date('Y-m-d H:i:s') }}
            </div>
            
            <div class="action-section">
                <a href="{{$url}}" class="action-button">访问 {{$name}}</a>
            </div>
            
            <div class="divider"></div>
            
            <div class="footer-note">
                此邮件由系统自动发送，请勿回复。<br>
                如有疑问，请通过官方渠道联系我们。
            </div>
        </div>
        
        <div class="email-footer">
            <div class="footer-links">
                <a href="{{$url}}/#/subscribe">我的订阅</a>
                <a href="{{$url}}/#/knowledge">使用教程</a>
                <a href="{{$url}}/#/support">技术支持</a>
            </div>
            <div class="copyright">
                &copy; {{$name}}. All Rights Reserved.
            </div>
        </div>
    </div>
    
    <!--[if mso]>
                </table>
            </td>
        </tr>
    </table>
    <![endif]-->
</body>
</html>
