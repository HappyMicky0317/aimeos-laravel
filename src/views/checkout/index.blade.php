@extends('shop::base')

@section('aimeos_header')
    <title>{{ __( 'Checkout') }}</title>
    <?= $aiheader['checkout/standard'] ?>
    <?= $aiheader['catalog/search'] ?? '' ?>
    <?= $aiheader['catalog/tree'] ?? '' ?>
@stop

@section('aimeos_body')
    <div class="container-fluid">
        <?= $aibody['checkout/standard'] ?>
    </div>
@stop
