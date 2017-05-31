@extends('admin.layout.master')
@section('title','|Add Category')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Add</small>
                </h1>
            </div>

            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="{{ URL::route('cate.add.postAdd') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Category Parent</label>
                        <select class="form-control" name="sltParent">
                            <option value="0">Please Choose Category</option>
                            <?php cate_parent($parent); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter Category Name" />
                    </div>
                    <div class="form-group">
                        <label>Category Order</label>
                        <input class="form-control" name="order" placeholder="Please Enter Category Order" />
                    </div>
                    
                   
                    <button type="submit" class="btn btn-default">Category Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection