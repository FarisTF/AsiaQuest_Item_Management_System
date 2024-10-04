@extends('layouts.app_AQ')
@section('title', '商品一覧')
@section('content')
    {{ link_to_route('category.create', '新規登録', [], ['class' => 'btn btn-primary']) }}
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>商品名</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ link_to_route('category.show', $category->id, ['category' => $category->id]) }}</td>
                <td>{{$category->name}}</td>
                <td>{{ link_to_route('category.edit', 'Edit', ['category' => $category->id], ['class' => 'btn btn-primary']) }}</td>
                <td>
                    {{ Form::open(['route' => ['category.destroy', $category->id], 'method' => 'delete']) }}
                    {{ Form::submit('削除', ['class' => 'btn btn-danger']) }}
                    {{ Form::close() }}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
