@extends('admin.layout.master')
@section('title','| Product add')
@section('content')
  <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form enctype="multipart/form-data" action="{{url('/admin/product/add')}}" method="post">
                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                        <label>Category Parent</label>
                        <select class="form-control" name="sltParent">
                            <option value="">Please Choose Category</option>
                            <?php cate_parent($parent,0,'--',old('sltParent')) ; ?>
                        </select>
                        </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter name" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" placeholder="Please Enter price" />
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                                <script type="text/javascript">ckeditor('description')</script>
                            </div>
                            
                             <div class="form-group">
                                <label>Special</label>
                                <label class="radio-inline">
                                    <input name="special" value="1" checked="" type="radio">Yes
                                </label>
                                <label class="radio-inline">
                                    <input name="special" value="2" type="radio">
                                    No
                                </label>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Product Add</button>
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