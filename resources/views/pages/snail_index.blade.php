@extends('layouts.master')
@section('content')
    <div class="container p-3">
        <table class="table">
            <a class="nav-link" href="{{route('get_create_page')}}">新增</a>
            </button>
            <thead>
            <tr>
                <td>名字</td>
                <td>電話</td>
                <td>操作</td>

            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <td class="col-sm-3">{{$row->t_name}}</td>
                    <td class="col-sm-3">{{$row->t_phone}}</td>
                    <td class="col-sm-3">
                        <button class="btn btn-outline-success"
                                onclick=edit_data({{$row->t_id}})><span class="glyphicon glyphicon-search" aria-hidden="true"></span>修改
                        </button>
                        <button class="btn btn-outline-danger"
                                onclick=delete_data({{$row->t_id}})>刪除
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
        function create_data(id) {
            window.location.href = "{{route('delete_data')}}" + "?id=" + id;
        }

        function delete_data(id) {
            window.location.href = "{{route('delete_data')}}" + "?id=" + id;
        }

        function edit_data(id) {
            window.location.href = "{{route('get_edit_page')}}" + "?id=" + id;
        }
    </script>
@endsection
