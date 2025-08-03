<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>邮箱验证码</title>
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
        
        .message {
            font-size: 16px;
            color: #666666;
            margin-bottom: 30px;
            line-height: 1.5;
        }
        
        .verification-container {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 30px;
            margin: 25px 0;
        }
        
        .verification-message {
            font-size: 16px;
            color: #4682B4;
            margin-bottom: 20px;
            font-weight: 500;
        }
        
        .verification-button {
            display: inline-block;
            background-color: #4682B4;
            color: #ffffff;
            text-decoration: none;
            padding: 14px 32px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            margin: 10px 0;
        }
        
        .verification-button:hover {
            background-color: #2c5282;
        }
        
        .verification-link {
            background-color: #ffffff;
            border: 2px solid #4682B4;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            word-break: break-all;
            font-size: 14px;
            color: #4682B4;
        }
        
        .verification-link a {
            color: #4682B4;
            text-decoration: none;
        }
        
        .verification-link a:hover {
            text-decoration: underline;
        }
        
        .time-notice {
            background-color: #e3f2fd;
            border: 1px solid #4682B4;
            border-radius: 6px;
            padding: 15px;
            margin: 20px 0;
            font-size: 14px;
            color: #4682B4;
        }
        
        .action-section {
            margin: 30px 0;
        }
        
        .login-button {
            display: inline-block;
            background-color: #4682B4;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 30px;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            margin: 10px 0;
        }
        
        .login-button:hover {
            background-color: #2c5282;
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
            
            .verification-container {
                padding: 20px;
            }
            
            .verification-button,
            .login-button {
                display: block;
                margin: 15px 0;
            }
            
            .verification-link {
                font-size: 12px;
                padding: 15px;
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
            <div class="header-icon">🔐</div>
            <h1 class="email-title">{{$name}}</h1>
        </div>
        
        <div class="email-content">
            <div class="greeting">Dear Customer</div>
            
            <div class="message">
                您正在登入到 {{$name}}，请在 5 分钟内点击下方链接进行登入。如果您未授权该登入请求，请无视。
            </div>
            
            <div class="verification-container">
                <!--[if mso]>
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="center">
                            <div style="font-size: 16px; color: #4682B4; margin-bottom: 20px; font-weight: 500;">
                                请点击下方按钮完成登录验证：
                            </div>
                            <table border="0" cellpadding="14" cellspacing="0" style="background-color: #4682B4; border-radius: 6px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$link}}" style="color: #ffffff; text-decoration: none; font-size: 16px; font-weight: 500;">立即登录</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <![endif]-->
                
                <!--[if !mso]><!-->
                <div class="verification-message">
                    请点击下方按钮完成登录验证：
                </div>
                <a href="{{$link}}" class="verification-button">立即登录</a>
                <!--<![endif]-->
                
                <div class="verification-link">
                    <strong>或复制以下链接到浏览器中打开：</strong><br>
                    <a href="{{$link}}">{{$link}}</a>
                </div>
            </div>
            
            <div class="time-notice">
                ⏰ 验证链接有效期为 5 分钟，请及时使用。如果您未发起此次登录请求，请忽略此邮件。
            </div>
            
            <div class="action-section">
                <a href="{{$url}}" class="login-button">访问 {{$name}}</a>
            </div>
            
            <div class="divider"></div>
            
            <div class="footer-note">
                本邮件由系统自动发出，请勿直接回复。<br>
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
