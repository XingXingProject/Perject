@extends('admin.layouts.default')
@section('title','商家信息显示页面')
@section('content')
    <form class="form-inline" action="" method="get">
        <div class="form-group navbar-right col-lg-3" >
            <input type="text" class="form-control" name="search" placeholder="搜索">
            <button type="submit" class="btn btn-default">搜索</button>
        </div>
        <div class="form-group">
        </div>
    </form>
   </a>
    <table class="table table-bordered table-hover">
        <tr class="warning">
            <th>bao</th>
            <th>shop_rating</th>
            <th>brand</th>
            <th>piao</th>
            <th>zhun</th>
            <th>start_send</th>
            <th>start_cost</th>
            <th>notice</th>
            <th>discount</th>
            <th>status</th>
            <th>操作</th>
        </tr>
            <tr class="info">
                <td>
                    @if($shop->bao===1)
                        <span class="glyphicon glyphicon-ok"></span>
                    @else
                        <span class="glyphicon glyphicon-remove"></span>
                    @endif</td></td>

                <td>
                    {{$shop->shop_rating}}
                </td>
                <td>
                    @if($shop->brand===1)
                        <span class="glyphicon glyphicon-ok"></span>
                    @endif
                </td>

                <td>
                    @if($shop->piao===1)
                        <span class="glyphicon glyphicon-ok"></span>
                    @else
                        <span class="glyphicon glyphicon-remove"></span>
                    @endif</td>
                <td>
                    @if($shop->zhun===1)
                        <span class="glyphicon glyphicon-ok"></span>
                    @else
                        <span class="glyphicon glyphicon-remove"></span>
                    @endif</td></td>
                <td>{{$shop->start_send}}</td>
                <td>{{$shop->start_cost}}</td>
                <td>{{$shop->notice}}</td>
                <td>{{$shop->discount}}</td>
                <td>
                    @if($shop->status===1)
                    <span class="glyphicon glyphicon-ok"></span>
                    @endif

                </td>
                <td>
                    <a href="{{route('shop_info.index',$shop->id)}}" class=" btn btn-success">返回</a>

                </td>

            </tr>
    </table>
@endsection