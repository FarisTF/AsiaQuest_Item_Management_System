@extends('layouts.app_AQ')
@section('title', '商品登録')
@section('content')
    {{ Form::open(['route' => 'items.store']) }}
    <div class="form-group">
        {{ Form::label('name', '商品名：') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}
        @if ($errors->first('name'))
            <p class="validation">※{{$errors->first('name')}}</p>
        @endif
    </div>
    <br>
    <div class="form-group">
        {{ Form::label('description', '商品説明：') }}
        {{ Form::text('description', null, ['class' => 'form-control']) }}
        @if ($errors->first('description'))
            <p class="validation">※{{$errors->first('description')}}</p>
        @endif
    </div>
    <br>
    <div class="form-group">
        {{ Form::label('stock_quantity', 'Stock Quantity：') }}
        {{ Form::number('stock_quantity', null, ['class' => 'form-control']) }}
        @if ($errors->first('stock_quantity'))
            <p class="validation">※{{$errors->first('stock_quantity')}}</p>
        @endif
    </div>
    <br>
    <div class="form-group">
        {{ Form::label('price', '価格：') }}
        {{ Form::number('price', null, ['class' => 'form-control']) }}
        @if ($errors->first('price'))
            <p class="validation">※{{$errors->first('price')}}</p>
        @endif
    </div>
    <br>
    <div class="form-group">
        {{ Form::label('image_url', '画像URL:') }}
        {{ Form::text('image_url', null, ['class' => 'form-control']) }}
        @if ($errors->first('image_url'))
            <p class="validation">※{{$errors->first('image_url')}}</p>
        @endif
    </div>
    <br>
    <div class="form-group">
        {{ Form::label('category_id', 'Category') }}
        {{ Form::select('category_id', $categories, null, ['class'=>'form-control']) }}
    </div>
    <br>

    <div class="form-group">
        {{ Form::submit('登録', ['class' => 'btn btn-primary form-control']) }}
    </div>
    {{ Form::close() }}
@endsection
