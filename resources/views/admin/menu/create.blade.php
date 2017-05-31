@extends('admin.layout.master')
@section('title','| Menu add')
@section('content')
  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Menu
                            <small>Add</small>
                        </h1>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form enctype="multipart/form-data" action="{{route('menu.store')}}" method="post">
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                    
                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" placeholder="Please Enter Title" />
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" name="link" placeholder="Please Enter Link" />
                            </div>
                            <div class="form-group">
                                <label>Order</label>
                                <input class="form-control" name="order" placeholder="Please Enter Order" />
                            </div>
                            
                            
                            <button type="submit" class="btn btn-default">Menu Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        
                    </div>
                   
        <form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection()