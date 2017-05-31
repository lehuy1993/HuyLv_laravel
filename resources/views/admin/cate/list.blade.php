@extends('admin.layout.master')
@section('title','| List cate')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                <!--     if(session('flash_message'))
                    <div class="alert alert-success">
                        session('flash_message')}}
                    </div>
                endif -->
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category Parent</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php $stt = 0 ?>
                    @foreach ($cate as $item)
                    <?php $stt = $stt + 1 ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!! $stt !!}</td>
                        <td>{!! $item["name"] !!}</td>
                        <td>
                            @if ($item["parent_id"] == 0)
                                {!! "None" !!}
                            @else
                                <?php 
                                    $parent = DB::table('cates')->where('id',$item["parent_id"])->first();
                                    echo $parent->name;
                                ?>
                            @endif

                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn Có Chắc Là Muốn Xóa Không')" href="{!! URL::route('cate.getDel',$item['id']) !!}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('cate.getEdit',$item['id']) !!}">Edit</a></td>
                            </tr>
                        @endforeach   
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection()