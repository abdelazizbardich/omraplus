@extends('errors::minimal')

@section('title', __('index.Too Many Requests'))
@section('code', '429')
@section('message', __('index.Too Many Requests message'))
