@extends('master')
@section('title', 'Thêm mới sách')
@section('content')
    <div class="pcoded-content">

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Thêm mới sách</h3>
                            </div>

                            <div class="card-body">
                                <form action="{{ route('books.store') }}" enctype="multipart/form-data" class="form"
                                      method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên</label><strong class="text-danger">*</strong>
                                        <input type="text" value="{{ old('name') }}"
                                               class="form-control @error('name') is-invalid  @enderror" name="name">
                                        @error('name')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <strong class="text-danger">*</strong>
                                        <textarea name="desc" id="content" >{{ old('desc') }}</textarea>
{{--                                        <input type="text" value="{{ old('desc') }}"--}}
{{--                                               class="form-control @error('desc') is-invalid  @enderror" name="desc">--}}
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
                                        <label>Giá bán</label>
                                        <strong class="text-danger">*</strong>
                                        <input type="text" value="{{ old('price') }}"
                                               class="form-control @error('price') is-invalid  @enderror" name="price">
                                        @error('price')
                                        <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label>Thể loại</label>
                                        <strong class="text-danger">*</strong>
                                        <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>

                                        <button type="submit" class="btn btn-primary">Lưu</button>
                                        <a type="button" class="btn btn-danger" href="{{route('books.index')}}">Hủy
                                            </a>                                    

                                        <p>Trường <strong class="text-danger"> * </strong> là trường bắt buộc!</p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
