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
        /* 重置样式 */
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
        
        /* 邮件容器 */
        .email-wrapper {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        /* 头部区域 */
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
        
        /* 内容区域 */
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
        
        /* 验证码容器 - 使用表格确保兼容性 */
        .code-container {
            margin: 30px auto;
            width: 100%;
            max-width: 400px;
        }
        
        .verification-code {
            background-color: #f8f9fa;
            border: 2px solid #4682B4;
            border-radius: 8px;
            padding: 20px;
            margin: 20px auto;
            text-align: center;
            display: block;
            width: 100%;
            max-width: 300px;
        }
        
        .code-text {
            font-family: 'Courier New', Courier, monospace, Arial;
            font-size: 28px;
            font-weight: bold;
            color: #4682B4;
            letter-spacing: 4px;
            margin: 0;
            padding: 10px;
        }
        
        /* 时间提示 */
        .time-warning {
            background-color: #e3f2fd;
            border: 1px solid #4682B4;
            border-radius: 4px;
            padding: 15px;
            margin: 20px auto;
            max-width: 400px;
            font-size: 14px;
            color: #4682B4;
        }
        
        /* 按钮 */
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
            border: none;
        }
        
        .action-button:hover {
            background-color: #2c5282;
        }
        
        /* 分割线 */
        .divider {
            height: 1px;
            background-color: #e0e0e0;
            margin: 30px 0;
        }
        
        /* 底部信息 */
        .footer-note {
            font-size: 14px;
            color: #888888;
            line-height: 1.5;
            margin-bottom: 20px;
        }
        
        /* 页脚 */
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
        
        /* Outlook 特定样式 */
        <!--[if mso]>
        .verification-code {
            background-color: #f8f9fa !important;
            border: 2px solid #4682B4 !important;
        }
        .code-text {
            font-family: Arial !important;
            color: #4682B4 !important;
        }
        <![endif]-->
        
        /* 响应式设计 */
        @media only screen and (max-width: 480px) {
            .email-wrapper {
                margin: 0 10px;
                border-radius: 4px;
            }
            
            .email-header {
                padding: 30px 15px;
            }
            
            .email-title {
                font-size: 20px;
            }
            
            .email-content {
                padding: 30px 20px;
            }
            
            .greeting {
                font-size: 18px;
            }
            
            .code-text {
                font-size: 24px;
                letter-spacing: 2px;
            }
            
            .action-button {
                padding: 10px 25px;
                font-size: 15px;
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
        <!-- 头部 -->
        <div class="email-header">
            <div class="header-icon">🔐</div>
            <h1 class="email-title">邮箱验证码</h1>
        </div>
        
        <!-- 内容 -->
        <div class="email-content">
            <div class="greeting">亲爱的用户，您好！</div>
            
            <div class="message">
                感谢您的注册，请使用以下验证码完成邮箱验证：
            </div>
            
            <!-- 验证码区域 -->
            <div class="code-container">
                <!--[if mso]>
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="center">
                            <table border="0" cellpadding="20" cellspacing="0" style="background-color: #f8f9fa; border: 2px solid #4682B4; border-radius: 8px;">
                                <tr>
                                    <td align="center">
                                        <div style="font-family: Arial; font-size: 28px; font-weight: bold; color: #4682B4; letter-spacing: 4px;">
                                            {{$code}}
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <![endif]-->
                
                <!--[if !mso]><!-->
                <div class="verification-code">
                    <div class="code-text">{{$code}}</div>
                </div>
                <!--<![endif]-->
            </div>
            
            <div class="time-warning">
                ⏰ 验证码有效期为 5 分钟，请及时使用
            </div>
            
            <a href="{{$url}}" class="action-button">立即登录 {{$name}}</a>
            
            <div class="divider"></div>
            
            <div class="footer-note">
                此邮件由系统自动发送，请勿直接回复。<br>
                如有疑问，请通过官方客服渠道联系我们。
            </div>
        </div>
        
        <!-- 页脚 -->
        <div class="email-footer">
            <div class="footer-links">
                <a href="{{$url}}/#/subscribe">我的订阅</a>
                <a href="{{$url}}/#/knowledge">使用教程</a>
                <a href="{{$url}}/#/support">技术支持</a>
            </div>
            <div class="copyright">
                © {{$name}}. All rights reserved.
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
