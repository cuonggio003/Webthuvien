<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu active pcoded-trigger">
                    <a href="{{ route('home.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Trang chủ</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Mục lục</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" pcoded-hasmenu">
                            <a href="{{ route('books.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách sách</span>
                            </a>

                        </li>
                        <li class=" pcoded-hasmenu">
                            <a href="{{route('categories.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thể loại sách</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('students.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách người mượn</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="{{ route('users.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-menu"></i>
                        </span>
                        <span class="pcoded-mtext">Danh sách người dùng</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Phiếu mượn sách</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="{{route('borrows.index')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Danh sách phiếu mượn</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{route('borrows.create')}}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Thêm mới phiếu mượn</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Thùng rác</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">

                            <a href="{{route('books.trash')}}" >
                                <span class="pcoded-mtext">Sách</span>

                            </a>
                        </li>

                        <li class="">

                        <a href="{{route('students.trash')}}" >
                            <span class="pcoded-mtext">Sinh viên</span>

                        </a>
                        </li>

                        <li class="">
                            <a href="{{route('borrows.trash')}}" >
                                <span class="pcoded-mtext">Phiếu mượn</span>

                            </a>

                        </li>

                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
