<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ getLanguageDirection() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ __('index.Your partner account has been approved') }}</title>
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
      padding: 24px;
      border-left: 1px solid #E5E7EB;
      border-right: 1px solid #E5E7EB;
    }
    .section-title {
      font-weight: bold;
      font-size: 15px;
      color: #003581;
      margin: 16px 0 8px;
      border-bottom: 1px solid #E5E7EB;
      padding-bottom: 4px;
    }
    .credential-box {
      background-color: #ffffff;
      border: 1px solid #E5E7EB;
      border-radius: 6px;
      padding: 16px 20px;
      margin-bottom: 16px;
    }
    .credential-row {
      display: flex;
      margin-bottom: 10px;
    }
    .credential-label {
      font-weight: bold;
      color: #6B7280;
      min-width: 100px;
    }
    .credential-value {
      color: #111827;
      font-family: monospace;
      font-size: 15px;
    }
    .referral-box {
      background-color: #EFF6FF;
      border: 2px solid #003581;
      border-radius: 6px;
      padding: 16px 20px;
      text-align: center;
      margin: 16px 0;
    }
    .referral-code {
      font-size: 28px;
      font-weight: bold;
      font-family: monospace;
      letter-spacing: 4px;
      color: #003581;
    }
    .btn {
      display: inline-block;
      background-color: #003581;
      color: white !important;
      text-decoration: none;
      padding: 12px 28px;
      border-radius: 6px;
      font-weight: bold;
      margin-top: 16px;
    }
    .warning {
      background-color: #FFFBEB;
      border: 1px solid #FCD34D;
      border-radius: 4px;
      padding: 10px 14px;
      font-size: 13px;
      color: #92400E;
      margin-top: 12px;
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
  </style>
</head>
<body>
  <div class="container">

    <div class="header">
      <a href="{{ config('app.url') }}" style="color:white;text-decoration:none;">
        <img loading="lazy" src="{{ Vite::asset('resources/images/logo-w.png') }}"
             alt="{{ config('app.name') }}" style="max-width:100px;height:auto;">
      </a>
      <h1 style="margin:10px 0 0;font-size:20px;">
        🎉 {{ __('index.Your partner account has been approved') }}
      </h1>
    </div>

    <div class="content">
      <p>{{ __('index.Hello') }}, <strong>{{ $partner->name }}</strong>,</p>
      <p>{{ __('index.Partner approval email intro') }}</p>

      {{-- Login Credentials --}}
      <div class="section-title">{{ __('index.Your login credentials') }}</div>
      <div class="credential-box">
        <div class="credential-row">
          <span class="credential-label">{{ __('index.email') }}:</span>
          <span class="credential-value">{{ $partner->email }}</span>
        </div>
        <div class="credential-row">
          <span class="credential-label">{{ __('index.Password') }}:</span>
          <span class="credential-value">{{ $plainPassword }}</span>
        </div>
      </div>
      <div class="warning">
        ⚠️ {{ __('index.Please change your password after first login') }}
      </div>

      {{-- Referral Code --}}
      <div class="section-title">{{ __('index.Your referral code') }}</div>
      <div class="referral-box">
        <p style="margin:0 0 8px;color:#6B7280;font-size:14px;">{{ __('index.Share this code with your clients') }}</p>
        <div class="referral-code">{{ $partner->referral_code }}</div>
      </div>

      {{-- Commission --}}
      <p style="margin-top:12px;">
        {{ __('index.Commission rate') }}: <strong>{{ $partner->commission_rate }}%</strong>
      </p>

      {{-- CTA --}}
      <div style="text-align:center;margin-top:20px;">
        <a href="{{ config('app.url') }}/partner/dashboard" class="btn">
          {{ __('index.Go to your dashboard') }}
        </a>
      </div>
    </div>

    <div class="footer">
      <p>{{ __('index.This is an automated message, please do not reply to this email') }}</p>
      <p>&copy; {{ date('Y') }} {{ config('app.name') }}</p>
    </div>

  </div>
</body>
</html>
