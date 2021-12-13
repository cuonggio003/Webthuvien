@extends('master')
@section('title', 'Thêm mới người dùng')
@section('content')
    <div class="pcoded-content">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Thêm mới thể loại</h3>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('categories.store') }}" class="form" method="post">
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
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                    <a type="button" class="btn btn-danger" href="{{route('categories.index')}}">Hủy</a>

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

@endsection
