@extends('master')
@section('title', 'Chỉnh sửa thông tin người dùng')
@section('content')
<div class="pcoded-content">  

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Chỉnh sửa thông tin người dùng</h3>
                        </div>
                        
                        <div class="card-body">
                            <form action="" class="form" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" value="{{ $user->name }}" class="form-control" name="name">
                                </div>
                               
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Ảnh</label>
                                    <strong class="text-danger">*</strong>
                                    <input type="file" name="avatar" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <strong class="text-danger">*</strong>
                                    @foreach($roles as $role)
                                        <div class="form-check">
                                            <input
                                                @if($user->checkRole($role->id))
                                                    checked
                                                @endif
                                                name="role[{{$role->id}}]" class="form-check-input" type="checkbox"
                                                value="{{ $role->id }}" id="role-{{$role->id}}">
                                            <label class="form-check-label" for="role-{{$role->id}}">
                                                {{ $role->name }}
                                            </label>
                                        </div> 
                                    @endforeach
                                </div>

                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </form>
                        </div>
                    
                    </div>
                  
                </div>
              
            </div>
           
        </div>
       
    </section>
</div>
@endsection
