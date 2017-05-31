@extends('admin.layout.master')
@section('title','| Menu ')
@section('content')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Menu
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
                                <th>Title</th>
                                <th>Order</th>
                                <th>Link</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php $stt = 0 ?>
                    @foreach ($menu as $item)
                    <?php $stt = $stt + 1 ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!! $stt !!}</td>
                        <td>{!! $item["title"] !!}</td>
                        <td>{!! $item["numbers"] !!}</td>
                        <td>{!! $item["link"] !!}</td>
                        {!! Form::open(['route' => ['menu.destroy', $item->id], 'method' => 'DELETE']) !!}


                        <td class="center"><a onclick="return xacnhanxoa('Bạn Có Chắc Là Muốn Xóa Không')" >
                        {!! Form::submit('Delete',['class' => 'btn btn-danger '])!!}</a></td>
                        {!! Form::close() !!}
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('menu.edit',$item['id']) !!}">Edit</a></td>
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