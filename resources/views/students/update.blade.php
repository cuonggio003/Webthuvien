@extends('master')
@section('title', 'Thêm mới sinh vien')
@section('content')
    <div class="pcoded-content">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Chỉnh sửa thông tin người mượn </h3>
                        </div>

                        <div class="card-body">
                            <form action="" class="form" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" value="{{ $student->name }}" class="form-control" name="name">
                                </div>

                                <div class="form-group">
                                    <label>Mã sinh viên</label>
                                    <strong class="text-danger">*</strong>
                                    <input type="text" value="{{ $student->student_code }}"
                                           class="form-control @error('student_code') is-invalid  @enderror" name="student_code">
                                    @error('student_code')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <strong class="text-danger">*</strong>
                                    <input type="email" value="{{ $student->email }}"
                                           class="form-control @error('email') is-invalid  @enderror" name="email">
                                    @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <strong class="text-danger">*</strong>
                                    <input type="text" value="{{ $student->address }}"
                                           class="form-control @error('address') is-invalid  @enderror" name="address">
                                    @error('address')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Ảnh</label>
                                    <strong class="text-danger">*</strong>
                                    <input type="file" name="avatar" class="form-control-file">
                                </div>

                                <div class="form-group">
                                    <label>Phone</label>
                                    <strong class="text-danger">*</strong>
                                    <input type="text" value="{{ $student->phone }}"
                                           class="form-control @error('phone') is-invalid  @enderror" name="phone">
                                    @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>


                                <button type="submit" class="btn btn-primary">Lưu</button>
                                <a type="button" class="btn btn-danger" href="{{route('students.index')}}">Hủy</a>

                                {{--                                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>--}}
                                <p>Trường <strong class="text-danger"> * </strong> là trường bắt buộc!</p>
                            </form>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    </div>
    <!-- /.content -->
@endsection
