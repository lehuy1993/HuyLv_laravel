@extends('admin.layout.master')
@section('title','| List reservations')
@section('content')

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Rseservations
                            <small>List</small>
                        </h1>
                    </div>
                  
                    <!-- /.col-lg-12 -->
                   <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>STT</th>
                        <th>Name</th>
                        <th>Email </th>
                        <th>Date</th>
                        <th>Party_number </th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $stt = 0 ?>
                    @foreach($reservations as $item)
                    <?php $stt = $stt + 1 ?>
                    <tr class="odd gradeX" align="center">
                        <td>{!! $stt !!}</td>
                        <td>{!! $item["name"] !!}</td>
                        <td>{{$item['email']}}</td>
                        <td>{{$item['date']}}</td>
                        <td>{{$item['party_number']}}</td>

                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route('reservations.getDel',$item['id']) !!}" onclick="return xacnhanxoa('Do You Want To Delete This Reservations')"> Delete</a></td>
                       
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
@endsection