@extends('master')
@section('title', 'Chỉnh sửa thông tin sách')
@section('content')
    <div class="pcoded-content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <ion-icon name="home-outline"><a href="#">Home</a></ion-icon>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Chỉnh sửa thông tin sách</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="" class="form" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <lable>Tên</lable>
                                        <input type="text" value="{{ $book->name }}" class="form-control" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <strong class="text-danger">*</strong>
                                        <textarea id="content" name="desc">{!! $book->desc !!}</textarea>
{{--                                        <input type="text" value="{{ $book->desc }}"--}}
{{--                                            class="form-control @error('desc') is-invalid  @enderror" name="desc">--}}
                                        @error('desc')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Ảnh</label>
                                        <strong class="text-danger">*</strong>
                                        <input type="file" name="image" class="form-control-file">
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <strong class="text-danger">*</strong>
                                        <select name="status">
                                            <option value="Mới">Mới</option>
                                            <option value="Cũ">Cũ</option>
                                            <option value="Lậu">Lậu</option>
                                            <option value="18+">18+</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Giá</label>
                                        <strong class="text-danger">*</strong>
                                        <input type="number" value="{{ $book->price }}"
                                            class="form-control @error('price') is-invalid  @enderror" name="price">
                                        @error('price')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Thể loại</label>
                                        <strong class="text-danger">*</strong>
                                        <select class="form-control" name="category_id">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Lưu</button>
                                    <a type="button" class="btn btn-danger" href="{{route('books.index')}}">Hủy
                                    </a>
{{--                                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy--}}
{{--                                    </button>--}}
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
@endsection
