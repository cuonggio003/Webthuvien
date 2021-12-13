@extends('master')
@section('title', 'Danh sách sinh vien')
@section('content')
    <div class="pcoded-content">
        <div class="btn btn-White">
            <div class="search-box">
                <form action="{{route('students.search')}}" method="GET">
                    <div class="input-group">
                        <span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;">
                            <input type="search" name="keyword" class="form-control ds-input"  placeholder="Search..." aria-label="Search for..." >
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
                    <h5 class="card-header">Danh sách người mượn
                        <a class="btn btn-outline-warning" href="{{ route('students.create') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z">
                                </path>
                                <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z">
                                </path>
                            </svg>
                        </a>
                    </h5>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Mã sinh viên</th>
                                <th>Ảnh</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Di động</th>
                                <th>Hoạt động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($studentResult->isNotEmpty())
                            @foreach ($studentResult as $key => $student)
                                <tr>
                                    <td>{{ $student->student_code }}</td>
                                    <td>
                                        @if ($student->avatar)
                                            <img src="{{ asset('storage/' . $student->avatar) }}"
                                                 alt="{{ asset('storage/' . $student->avatar) }}" style="width: 150px">
                                        @else
                                            {{ 'chưa có ảnh ' }}
                                        @endif
                                    </td>
                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->phone }}</td>
                                    <td>
                                        <a class="btn btn-outline-primary"
                                           href="{{ route('students.update', ['id' => $student->id]) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                <path
                                                    d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z">
                                                </path>
                                            </svg>
                                        </a>

                                        <a class="btn btn-outline-danger"
                                           onclick="return confirm('Bạn có muốn xóa {{ $student->id }} không?')"
                                           href="{{ route('students.delete', ['id' => $student->id]) }}">
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
                            @else
                                <tr>
                                    <td colspan="6">Không có dữ liệu </td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection

