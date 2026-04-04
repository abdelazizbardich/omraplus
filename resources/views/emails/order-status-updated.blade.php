<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ getLanguageDirection() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ __('index.Your order has been updated') }} #{{ $order->id }}</title>
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
    .logo {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .content {
      background-color: #F9FAFB;
      padding: 20px;
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
    .field {
      margin-bottom: 10px;
    }
    .field-label {
      font-weight: bold;
      color: #6B7280;
      display: inline;
    }
    .field-value {
      display: inline;
      margin-left: 6px;
    }
    .change-row {
      background-color: #ffffff;
      border: 1px solid #E5E7EB;
      border-radius: 4px;
      padding: 10px 14px;
      margin-bottom: 8px;
    }
    .badge {
      display: inline-block;
      padding: 2px 10px;
      border-radius: 12px;
      font-size: 13px;
      font-weight: bold;
    }
    .badge-pending  { background-color: #FEF9C3; color: #854D0E; }
    .badge-approved { background-color: #D1FAE5; color: #065F46; }
    .badge-rejected { background-color: #FEE2E2; color: #991B1B; }
    .badge-default  { background-color: #F3F4F6; color: #374151; }
    .arrow { margin: 0 6px; color: #6B7280; }
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
      <div class="logo">
        <a href="{{ config('app.url') }}" style="color:white;text-decoration:none;">
          <img loading="lazy" src="{{ Vite::asset('resources/images/logo-w.png') }}"
               alt="{{ config('app.name') }}" style="max-width:100px;height:auto;">
        </a>
      </div>
      <h1 style="margin:0;font-size:20px;">
        {{ __('index.Your order has been updated') }}
      </h1>
      <p style="margin:6px 0 0;font-size:14px;opacity:.85;">
        {{ __('index.Order') }} #{{ $order->id }}
      </p>
    </div>

    <div class="content">

      <p>{{ __('index.Hello') }}, <strong>{{ $order->user->name }}</strong>,</p>
      <p>{{ __('index.The following changes were made to your order') }}:</p>

      {{-- What changed --}}
      @foreach ($changes as $field => $change)
        <div class="change-row">
          <div style="font-size:13px;color:#6B7280;margin-bottom:4px;">
            {{ __('index.' . $field) }}
          </div>
          @php
            $statusFields = ['status', 'payment_status'];
            $useBadge = in_array($field, $statusFields);
          @endphp
          @if ($useBadge)
            <span class="badge badge-{{ $change['from'] ?? 'default' }}">{{ __('index.' . $change['from']) }}</span>
            <span class="arrow">→</span>
            <span class="badge badge-{{ $change['to'] ?? 'default' }}">{{ __('index.' . $change['to']) }}</span>
          @else
            <span class="field-value">{{ __('index.' . $change['from']) }}</span>
            <span class="arrow">→</span>
            <span class="field-value" style="font-weight:bold;">{{ __('index.' . $change['to']) }}</span>
          @endif
        </div>
      @endforeach

      {{-- Order summary --}}
      <div class="section-title">{{ __('index.Order Details') }}</div>

      <div class="field">
        <span class="field-label">{{ __('index.Flight') }}:</span>
        <span class="field-value">{{ $order->flight()->title }}</span>
      </div>
      <div class="field">
        <span class="field-label">{{ __('index.Program') }}:</span>
        <span class="field-value">{{ $order->program()->name() }}</span>
      </div>
      <div class="field">
        <span class="field-label">{{ __('index.Room') }}:</span>
        <span class="field-value">{{ $order->room()->name }}</span>
      </div>
      <div class="field">
        <span class="field-label">{{ __('index.Pilgrims count') }}:</span>
        <span class="field-value">{{ $order->pilgrims_count }}</span>
      </div>
      <div class="field">
        <span class="field-label">{{ __('index.Total Price') }}:</span>
        <span class="field-value" style="font-weight:bold;">
          {{ money($order->total_price) }} {{ __('index.dh') }}
        </span>
      </div>

    </div>

    <div class="footer">
      <p>{{ __('index.This is an automated message, please do not reply to this email') }}.</p>
      <p>© {{ date('Y') }} {{ config('app.name') }}. {{ __('index.All rights reserved') }}.</p>
    </div>

  </div>
</body>
</html>
