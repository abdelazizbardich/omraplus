@extends('errors::minimal')

@section('title', __('index.Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden message'))
