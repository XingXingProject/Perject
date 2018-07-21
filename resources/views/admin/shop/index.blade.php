@extends('admin.layouts.default')
@section('title','商家显示页面')
@section('content')
    <form class="form-inline" action="" method="get">
        <div class="form-group navbar-right col-lg-3" >
            <input type="text" class="form-control" name="search" placeholder="搜索">
            <button type="submit" class="btn btn-default">搜索</button>
        </div>
        <div class="form-group">
        </div>
    </form>
    <a href="{{route('shop_user.add')}}" class="btn btn-info">添加</a>
    <table class="table table-bordered table-hover">
        <tr class="warning">
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>状态</th>
            <th>shop_id</th>
            <th>操作</th>
        </tr>
        @foreach($shops as $shop)
            <tr class="info">
                <td>{{$shop->id}}</td>
                <td>{{$shop->name}}</td>
                <td>{{$shop->email}}</td>
                <td>
                    @if($shop->status===1)
                    <span class="glyphicon glyphicon-ok"></span>
                    @endif

                </td>
                <td>{{$shop->shopInfo->shop_name}}</td>
                <td>
                    <a href="{{route('shop_user.edit',['id'=>$shop->id])}}" class=" btn btn-success">编辑</a>
                    <a href="{{route('shop_user.del',$shop->id)}}" class=" btn btn-danger">删除</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$shops->appends($query)->links()}}
@endsection