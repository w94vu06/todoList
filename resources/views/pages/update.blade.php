@extends('layouts.master')
@section('content')
    <div class="container">
        <form class="form-group m-5" action="{{route('store_edit_data')}}" method="post">
            @csrf
            <div class="row form-group">
                <label class="col-sm-3 text-right">標題</label>
                <input class="form-control col-sm-6" name="t_name" value="{{$data->t_name}}">
            </div>
            <div class="row form-group">
                <label class="col-sm-3 text-right">內容</label>
                <input class="form-control col-sm-6" name="t_phone" value="{{$data->t_phone}}">
            </div>
            <div class="row form-group justify-content-center">
                <button class="btn btn-outline-info col-sm-3" type="submit">送出儲存</button>
            </div>
            <input type="hidden" name="id" value="{{$data->t_id}}"/>
    </form>
    </div>


@endsection
