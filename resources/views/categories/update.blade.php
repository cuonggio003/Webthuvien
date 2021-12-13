@extends('master')
@section('content')
    <div class="pcoded-content">

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Chỉnh sửa thông tin thể loại</h3>
                            </div>

                            <div class="card-body">
                                <form action="" class="form" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" value="{{ $category->name }}"
                                            class="form-control @error('name') is-invalid @enderror" name="name">
                                        @error('name')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                    <a type="button" class="btn btn-danger" href="{{route('categories.index')}}">Hủy</a>
{{--                                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy--}}
{{--                                    </button>--}}
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
