@extends('layouts.app_AQ')
@section('title', '商品編集')
@section('content')
    {{ Form::open(['route' => ['category.update', $category->id], 'method' => 'put']) }}
    <div class="form-group">
        {{ Form::label('name', '商品名：') }}
        {{ Form::text('name', $category->name, ['class' => 'form-control']) }}
        @if ($errors->first('name'))
            <p class="validation">※{{$errors->first('name')}}</p>
        @endif
    </div>
    <div class="form-group">
        {{ Form::submit('更新', ['class' => 'btn btn-success form-control']) }}
    </div>
    {{ Form::close() }}
@endsection
