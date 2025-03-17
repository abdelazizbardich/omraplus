<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Contact Form Submission</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      color: #333333;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
    }
    .header {
      background-color: #003581;
      color: white;
      padding: 20px;
      text-align: center;
      border-radius: 5px 5px 0 0;
    }
    .content {
      background-color: #F9FAFB;
      padding: 20px;
      border-left: 1px solid #E5E7EB;
      border-right: 1px solid #E5E7EB;
    }
    .footer {
      background-color: #F3F4F6;
      padding: 15px;
      text-align: center;
      font-size: 12px;
      color: #6B7280;
      border-radius: 0 0 5px 5px;
      border: 1px solid #E5E7EB;
    }
    .field {
      margin-bottom: 15px;
    }
    .field-label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
      color: #003581;
    }
    .field-value {
      background-color: white;
      padding: 10px;
      border: 1px solid #E5E7EB;
      border-radius: 4px;
    }
    .button {
      display: inline-block;
      background-color: #6366F1;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 4px;
      margin-top: 15px;
    }
    .logo {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <div class="logo">
        <a href="{{ config('app.url') }}" style="color: white; text-decoration: none;">
          <img src="{{ Vite::asset('resources/images/logo-w.png') }}" alt="{{ config('app.name') }}" style="max-width: 100px; height: auto;">
        </a>
      </div>
      <h1>New Contact Form Submission</h1>
    </div>
    
    <div class="content">
      <p>You have received a new message from your website contact form. Here are the details:</p>
      
      <div class="field">
        <div class="field-label">Name:</div>
        <div class="field-value">{{$name}}</div>
      </div>
      
      <div class="field">
        <div class="field-label">Email:</div>
        <div class="field-value">{{$email}}</div>
      </div>
      
      <div class="field">
        <div class="field-label">Message:</div>
        <div class="field-value">{{$body}}</div>
      </div>
    </div>
    
    <div class="footer">
      <p>This is an automated message from your website contact form.</p>
      <p>© {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
    </div>
  </div>
</body>
</html>