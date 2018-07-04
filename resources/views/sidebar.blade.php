<div class="sidebar" data-color="orange" data-image="http://localhost/hieuthuoc/public/assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="http://localhost/hieuthuoc/public/assets/img/default-avatar.png">
            </div>
            <div class="info ">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>Ngô Minh Thư
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a class="profile-dropdown" href="">
                                <span class="sidebar-mini">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="profile-dropdown" href="">
                                <span class="sidebar-mini">EP</span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="profile-dropdown" href="">
                                <span class="sidebar-mini">S</span>
                                <span class="sidebar-normal">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('/') }}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Trang chủ</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('pro-list') }}">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Danh sách sản phẩm</p>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link" href="{{ route('g-insert') }}">
                    <i class="nc-icon nc-app"></i>
                    <p>
                        Thêm sản phẩm
                    </p>
                </a>
            </li>
            <li class="nav-item  ">
                <a class="nav-link" href="{{ route('g-type') }}">
                    <i class="nc-icon nc-app"></i>
                    <p>
                        Thêm loại hàng
                    </p>
                </a>
            </li>
        </ul>
    </div>
<div class="sidebar-background" style="background-image: url({{ asset('/assets/img/sidebar-5.jpg') }}) "></div><div class="sidebar-background" style="background-image: url({{ asset('/assets/img/sidebar-5.jpg') }}) "></div></div>