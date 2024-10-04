@extends('layouts.app_AQ')
@section('title', '商品一覧')
@section('content')
    {{ link_to_route('items.create', '新規登録', [], ['class' => 'btn btn-primary']) }}
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>商品名</th>
            <th>Category</th>
            <th>商品説明</th>
            <th>Stock Quantity</th>
            <th>値段</th>
            <th>画像URL</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ link_to_route('items.shows', $item->id, ['item' => $item->id]) }}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->category->name}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->stock_quantity}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->image_url}}</td>
                <td>{{ link_to_route('items.edits', 'Edit', ['item' => $item->id], ['class' => 'btn btn-primary']) }}</td>
                <td>
                    {{ Form::open(['route' => ['items.destroys', $item->id], 'method' => 'delete']) }}
                    {{ Form::submit('削除', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
