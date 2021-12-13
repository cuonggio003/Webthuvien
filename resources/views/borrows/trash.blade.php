@extends('master')
@section('title', 'Danh sach phieu muon')
@section('content')
    <div class="pcoded-content">
        <div class="btn btn-White">
            <div class="search-box">
                <form action="#" method="GET">
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
       

        <div class="main-container">
            <div class="xs-pd-20-10 pd-ltr-20">
                <div class="card mt-2">
                    <h5 class="card-header">Danh sách phiếu mượn đã xóa </h5>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên người mượn</th>
                                <th>Tên sách</th>
                                <th>Ngày mượn</th>
                                <th>Ngày trả</th>
                                <th>Trạng thái</th>
                                <th>Hoạt động</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($borrowsDeleted as $key => $borrow)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $borrow->student->name ?? " " }}</td>
                                    <td>{{ $borrow->book->name ?? " " }}</td>
                                    <td>{{ $borrow->borrow_date }}</td>
                                    <td>{{ $borrow->borrow_return }}</td>
                                    <td>{{ $borrow->status }}</td>

                                    <td>     
                                        <a class="btn btn-outline-primary"
                                        onclick="return confirm ('Bạn có chắc muốn khôi phục không ?')"
                                        href="{{ route('borrows.restore', ['id' => $borrow->id]) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                                                <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"></path>
                                                <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3zM3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9H3.1z"></path>
                                            </svg>
                                        </a>
                                        <a class="btn btn-outline-danger"
                                           onclick="return confirm('Bạn có muốn xóa phiếu mượn{{ $borrow->id }} không?')"
                                           href="{{ route('borrows.hardDelete', ['id' => $borrow->id]) }}">
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
                                    @endforeach
                                </tr>
                        </table>
                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
