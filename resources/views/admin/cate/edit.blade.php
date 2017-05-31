@extends('admin.layout.master')
@section('title','| Category edit')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Edit</small>
                </h1>
               
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                 {{ csrf_field() }}
                    <div class="form-group">
                        <label>Category Parent</label>
                        <select class="form-control" name="sltParent">
                            <option  value="0">Please Choose Category</option>
                            <?php cate_parent($parent,0,"--",$Cate->parent_id); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" value="{{$Cate->name}}" name="name" placeholder="Please Enter Category Name" />
                    </div>
                    <div class="form-group">
                        <label>Category Order</label>
                        <input class="form-control" value="{{$Cate->order}}" name="order" placeholder="Please Enter Category Order" />
                    </div>
                    
                    <button type="submit" class="btn btn-default">Category Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()