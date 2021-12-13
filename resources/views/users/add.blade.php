@extends('master')
@section('title', 'Thêm mới người dùng')
@section('content')
<div class="pcoded-content">
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
                        <div class="card-body">
                            <form action="{{ route('users.store') }}" class="form" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Tên</label><strong class="text-danger">*</strong>
                                    <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid  @enderror" name="name">
                                    @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Email</label><strong class="text-danger">*</strong>
                                    <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid  @enderror" name="email">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Ảnh</label>
                                    <strong class="text-danger">*</strong>
                                    <input type="file" name="avatar" class="form-control-file">
                                </div>
                                <div class="form-group">
                                    <label>Role</label><strong class="text-danger">*</strong>
                                    @foreach($roles as $role)
                                        <div class="form-check">
                                            <input name="role[{{$role->id}}]" class="form-check-input" type="checkbox" value="{{ $role->id }}" id="role-{{$role->id}}">
                                            <label class="form-check-label" for="role-{{$role->id}}">
                                                {{ $role->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="form-group">
                                    <label>Mật khẩu</label><strong class="text-danger">*</strong>
                                    <input type="password" class="form-control" name="password">
                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu</label><strong class="text-danger">*</strong>
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                                <button class="btn btn-secondary"
                                        onclick="window.history.go(-1); return false;">Hủy</button>
                                <p>Trường <strong class="text-danger"> * </strong> là trường bắt buộc!</p>
                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
</div>
@endsection
