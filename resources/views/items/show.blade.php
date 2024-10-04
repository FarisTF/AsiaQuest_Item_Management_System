@extends('layouts.app_AQ')
@section('title', '商品詳細')
@section('content')
    <p>ID:{{ $item->id }}</p>
    <p>商品名：{{ $item->name }}</p>
    <p>詳細：{{ $item->description }}</p>
    <p>Stock Quantity：{{ $item->stock_quantity }}</p>
    <p>値段：{{ $item->price }}</p>
    <p>画像URL:{{ $item->image_url }}</p>
    <p>登録日：{{ $item->created_at }}</p>
    <p>更新日：{{ $item->updated_at }}</p>
@endsection
