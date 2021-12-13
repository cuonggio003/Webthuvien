@extends('master')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card proj-progress-card">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Số lượng sách mới về</h6>
                                                <h5 class="m-b-30 f-w-700">532<span
                                                        class="text-c-green m-l-10">+1.69%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Tỉ lệ mượn sách</h6>
                                                <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span>
                                                </h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Mượn trả đúng thời gian</h6>
                                                <h5 class="m-b-30 f-w-700">89%<span
                                                        class="text-c-green m-l-10">+0.99%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-green" style="width:85%"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Thể loại sách</h6>
                                                <h5 class="m-b-30 f-w-700">365<span
                                                        class="text-c-green m-l-10">+0.35%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Khách hàng thân thiết</h5>
                                        <td>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                        </td>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li class="first-opt"><i
                                                        class="feather icon-chevron-left open-card-option"></i></li>
                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                <li><i class="feather icon-trash close-card"></i></li>
                                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block p-b-0">
                                        <div class="table-responsive"> 
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Tên người mượn</th>
                                                        <th>Tên sách</th>
                                                        <th>Ngày mượn</th>
                                                        <th>Ngày trả</th>
                                                        <th>Đánh giá</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Rooyle</td>
                                                        <td>Victorya</td>
                                                        <td>12/12/2021</td>
                                                        <td>16/12/2021</td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Mafia</td>
                                                        <td>Kẻ cướp ngân hàng</td>
                                                        <td>10/12/2021</td>
                                                        <td>15/12/2021</td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Cường còi</td>
                                                        <td>Thức tỉnh mục đích sống</td>
                                                        <td>13/12/2021</td>
                                                        <td>18/12/2021</td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        </td>
                                                        </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Minh công tử</td>
                                                        <td>Lập trình web</td>
                                                        <td>08/12/2021</td>
                                                        <td>16/12/2021</td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Tanh công chúa(Tuấn Anh)</td>
                                                        <td> Doraemon</td>
                                                        <td>14/12/2021</td>
                                                        <td>20/12/2021</td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Hoàng hảo hán</td>
                                                        <td>Skill chụp ảnh</td>
                                                        <td>11/12/2021</td>
                                                        <td>19/12/2021</td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Mỹ tây</td>
                                                        <td>Kỹ năng quản lí thời gian</td>
                                                        <td>17/12/2021</td>
                                                        <td>27/12/2021</td>
                                                        <td>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                            <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="styleSelector">
    </div>

@endsection
