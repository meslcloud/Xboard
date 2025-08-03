<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>到期提示</title>
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
            text-align: center;
        }
        
        .greeting {
            font-size: 20px;
            color: #333333;
            margin-bottom: 30px;
            font-weight: 500;
        }
        
        .alert-box {
            background-color: #ffe6e6;
            border: 1px solid #ff4757;
            border-radius: 6px;
            padding: 20px;
            margin: 20px 0;
            color: #721c24;
        }
        
        .alert-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #4682B4;
        }
        
        .alert-message {
            font-size: 16px;
            line-height: 1.5;
        }
        
        .countdown-container {
            background-color: #f8f9fa;
            border: 2px solid #4682B4;
            border-radius: 8px;
            padding: 25px;
            margin: 25px 0;
        }
        
        .countdown-number {
            font-size: 42px;
            font-weight: bold;
            color: #4682B4;
            margin-bottom: 10px;
        }
        
        .countdown-label {
            font-size: 16px;
            color: #666;
            font-weight: 500;
        }
        
        .action-buttons {
            margin: 30px 0;
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
            margin: 5px 10px;
        }
        
        .action-button:hover {
            background-color: #2c5282;
        }
        
        .urgent-button {
            background-color: #ff4757;
        }
        
        .urgent-button:hover {
            background-color: #e84393;
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
            
            .countdown-number {
                font-size: 36px;
            }
            
            .action-button {
                display: block;
                margin: 10px 0;
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
            <div class="header-icon">⏰</div>
            <h1 class="email-title">到期提示</h1>
        </div>
        
        <div class="email-content">
            <div class="greeting">亲爱的用户，您好！</div>
            
            <div class="alert-box">
                <div class="alert-title">订阅套餐即将到期</div>
                <div class="alert-message">
                    为了确保您的服务不中断，请及时续费您的订阅套餐。
                </div>
            </div>
            
            <div class="countdown-container">
                <!--[if mso]>
                <table border="0" cellpadding="25" cellspacing="0" width="100%">
                    <tr>
                        <td align="center">
                            <div style="font-size: 42px; font-weight: bold; color: #4682B4; margin-bottom: 10px;">72</div>
                            <div style="font-size: 16px; color: #666; font-weight: 500;">小时内到期</div>
                        </td>
                    </tr>
                </table>
                <![endif]-->
                
                <!--[if !mso]><!-->
                <div class="countdown-number">24</div>
                <div class="countdown-label">小时内到期</div>
                <!--<![endif]-->
            </div>
            
            <div class="action-buttons">
                <a href="{{$url}}/#/subscribe" class="action-button urgent-button">立即续费</a>
                <a href="{{$url}}" class="action-button">登录 {{$name}}</a>
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
