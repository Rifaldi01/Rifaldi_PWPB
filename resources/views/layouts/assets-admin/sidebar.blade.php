<div class="sidebar-wrapper sidebar-theme">

            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>

            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="index-2.html" class="navbar-brand">
                            <img src="{{URL::to('assets/assets/img/logo-3.png')}}" class="img-fluid" alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index-2.html" class="nav-link"> Equation </a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href=""  aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Dashboard</span>
                            </div>

                            <div>
                                <span class="badge badge-pill badge-secondary mr-2"></span>
                            </div>
                        </a>

                    </li>
                    <li class="menu">
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-cart-2"></i>
                                <span>Ecommerce</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                            <li>
                                <a href="{{URL::to('/admin/category')}}"> Category </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/admin/products')}}"> Products </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/admin/add-product')}}"> Add Product </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/admin/carts')}}"> Carts </a>
                            </li>
                            <li>
                                <a href="{{URL::to('/admin/rders')}}"> Orders </a>
                            </li>



                </ul>
            </nav>

        </div>
