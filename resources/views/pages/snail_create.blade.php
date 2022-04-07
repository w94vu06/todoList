@extends('layouts.master')
@section('content')
    <div class="container">
        <form class="form-group m-5" action="{{route('store_create_data')}}" method="post">
            @csrf
            <div class="row form-group">
                <label class="col-sm-3 text-right">名稱</label>
                <input class="form-control col-sm-6" name="t_name">
            </div>
            <div class="row form-group">
                <label class="col-sm-3 text-right">電話</label>
                <input class="form-control col-sm-6" name="t_phone">
            </div>
            <div class="row form-group justify-content-center">
                <button class="btn btn-outline-info col-sm-3" type="submit">送出新增</button>
            </div>
        </form>
    </div>
@endsection
