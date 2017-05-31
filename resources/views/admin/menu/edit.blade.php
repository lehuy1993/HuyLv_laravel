@extends('admin.layout.master')
@section('title','| Menu edit')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Menu
                    <small>Edit - {{$menu->title}}</small>
                </h1>
               
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                {!! Form::model($menu, ['route' => ['menu.update', $menu->id], 'method' => 'PUT']) !!}
                    
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" value="{{$menu->title}}" name="title" placeholder="Please Enter Title" />
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input class="form-control" value="{{$menu->link}}" name="link" placeholder="Please Enter Link" />
                    </div>
                    <div class="form-group">
                        <label>Order</label>
                        <input class="form-control" value="{{$menu->numbers}}" name="order" placeholder="Please Enter Order" />
                    </div>
                            
                    
                   
                    {{ Form::submit('Menu Edit', ['class' => 'btn btn-default']) }}
                    <button type="reset" class="btn btn-default">Reset</button>
                {!! Form::close() !!}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@stop