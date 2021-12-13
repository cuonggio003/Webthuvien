@extends('master')
@section('title', 'Danh sách ')
@section('content')
    <div class="pcoded-content">
        <div class="btn btn-White">
            <div class="search-box">
                <form action="{{ route('books.search') }}" method="GET">
                    <div class="input-group">
                        <span class="algolia-autocomplete"
                            style="position: relative; display: inline-block; direction: ltr;">
                            <input type="search" name="keyword" class="form-control ds-input" placeholder="Search..."
                                aria-label="Search for...">
                        </span>
                        <div class="btn">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <section class="content">
            <div class="main-container">
                <div class="xs-pd-20-10 pd-ltr-20">
                    <div class="card mt-2">
                        <h5 class="card-header">Danh sách sách đã xóa
                        </h5>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên</th>
                                        <th>Mô tả</th>
                                        <th>Ảnh</th>
                                        <th>Trạng thái</th>
                                        <th>Giá VND</th>
                                        <th>Thể loại</th>
                                        <th colspan="2">Hoạt động</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($booksDeleted->isNotEmpty())
                                        @foreach ($booksDeleted as $key => $book)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $book->name }}</td>
                                                <td>{!! $book->desc !!}</td>
                                                <td>
                                                    @if ($book->image)
                                                        <img src="{{ asset('storage/' . $book->image) }}"
                                                            alt="{{ asset('storage/' . $book->image) }}"
                                                            style="width: 150px">
                                                    @else
                                                        {{ 'chưa có ảnh ' }}
                                                    @endif
                                                </td>
                                                <td>{{ $book->status }}</td>
                                                <td>{{ $book->price }}</td>

                                                <td>
                                                    @if (isset($book->category))
                                                        {{ $book->category->name }}
                                                    @endif
                                                </td>

                                                <td>
                                                    <a class="btn btn-outline-primary" onclick="return confirm ('Bạn có chắc muốn khôi phục {{ $book->name }} không ?')"
                                                        href="{{ route('books.restore', ['id' => $book->id]) }}">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                                            <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
                                                            <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path>
                                                        </svg>
                                                    </a>

                                                    <a class="btn btn-outline-danger"
                                                        onclick="return confirm('Bạn có muốn xóa {{ $book->name }} không?')"
                                                        href="{{ route('books.hardDelete', ['id' => $book->id]) }}">

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path
                                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            @else
                                <tr>
                                    <td colspan="6">Không có dữ liệu</td>
                                </tr>
                                @endif
                            </table>

                            {{-- {{$books->links()}} --}}

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- /.container-fluid -->
        </section>
    </div>
@endsection
