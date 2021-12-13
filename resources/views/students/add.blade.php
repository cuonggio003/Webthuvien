@extends('master')

@section('content')
    <div class="pcoded-content">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Thêm mới người mượn </h3>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('students.store') }}" enctype="multipart/form-data"
                                    class="form" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <strong class="text-danger">*</strong>
                                        <input type="text" value="{{ old('name') }}"
                                            class="form-control @error('name') is-invalid  @enderror" name="name">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Mã sinh viên</label>
                                        <strong class="text-danger">*</strong>
                                        <input type="text" value="{{ old('student_code') }}"
                                            class="form-control @error('student_code') is-invalid  @enderror"
                                            name="student_code">
                                        @error('student_code')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <strong class="text-danger">*</strong>
                                        <input type="email" value="{{ old('email') }}"
                                            class="form-control @error('email') is-invalid  @enderror" name="email">
                                        @error('email')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <strong class="text-danger">*</strong>
                                        <input type="text" value="{{ old('address') }}"
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
                                        <input type="text" value="{{ old('phone') }}"
                                            class="form-control @error('phone') is-invalid  @enderror" name="phone">
                                        @error('phone')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>


                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                    <a type="button" class="btn btn-danger" href="{{route('students.index')}}">Hủy</a>

                                    {{--                                    <button class="btn btn-secondary"--}}
{{--                                        onclick="window.history.go(-1); return false;">Hủy</button>--}}
                                    <p>Trường <strong class="text-danger"> * </strong> là trường bắt buộc!</p>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    </div>
    <!-- /.content -->
@endsection
