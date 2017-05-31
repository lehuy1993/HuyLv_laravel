@extends('admin.layout.master')
@section('title','|Edit User')
@section('content')
       <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Edit - {{$User->username}}</small>
                        </h1>
                        
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="name" value="{{$User->name}}" disabled />
                            </div>

                    <div class="form-group">
                   
                            <input id="changepw" type="checkbox" name="changepassword" value="">
                        <label>Đổi mật khẩu</label>
                        <input   disabled="" class="form-control password" name="txtPass" type="password" placeholder="Please Enter Category Keywords" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại Password</label>
                        <input id="password" disabled="" class="form-control password" name="txtRePass" type="password" placeholder="Please Enter Category Keywords" />
                    </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value="{{$User->email}}"  name="email" placeholder="Please Enter Email" />
                            </div>
                            @if(Auth::User()->id != $id)
                            <div class="form-group">
                                <label>User Level</label>
                                <label class="radio-inline">
                            <input name="level" value="1"  type="radio"
                                @if($User->level == 1)
                                {{'checked'}}
                                @endif >
                            Admin
                        </label>
                        <label class="radio-inline">
                            <input name="level" value="2"  type="radio"
                            @if($User->level == 2)
                                {{'checked'}}
                              
                                @endif
                                >
                                Member
                            </div>
                            @endif
                            <button type="submit" class="btn btn-default">User Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#changepw').change(function(){
                    if($(this).is(":checked"))
                    {
                        $(".password").removeAttr('disabled')()
                    }else
                    {
                        $(".password").attr('disabled','');
                    }
            });
        });
    </script>
@endsection