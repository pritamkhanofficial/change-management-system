<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>

                <li>
                    <a href="<?= base_url('admin/dashboard')?>" class="">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboards</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-wrench'></i>
                        <span key="t-layouts">Master</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?= base_url('master/category')?>" key="t-products">Category</a></li>
                        <li><a href="<?= base_url('master/sub-category')?>" key="t-product-detail">Sub category</a>
                        </li>
                        <li><a href="<?= base_url('master/country')?>" key="t-orders">Country</a></li>
                        <li><a href="<?= base_url('master/state')?>" key="t-customers">State</a></li>
                        <li><a href="<?= base_url('master/unit')?>" key="t-shops">Unit</a></li>
                    </ul>
                </li>



                <li>
                    <a href="#" class="waves-effect">
                        <i class='bx bxs-graduation'></i>
                        <span key="t-chat">Product</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-store"></i>
                        <span key="t-ecommerce">Library</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" key="t-products">Products</a></li>
                        <li><a href="#" key="t-product-detail">Product Detail</a>
                        </li>
                        <li><a href="#" key="t-orders">Orders</a></li>
                        <li><a href="#" key="t-customers">Customers</a></li>
                        <li><a href="#" key="t-cart">Cart</a></li>
                        <li><a href="#" key="t-checkout">Checkout</a></li>
                        <li><a href="#" key="t-shops">Shops</a></li>
                        <li><a href="#" key="t-add-product">Add Product</a></li>
                    </ul>
                </li> -->

                <li>
                    <a href="<?= base_url('admin/logout')?>" class="waves-effect">
                        <i class='bx bx-log-out'></i>
                        <span key="t-chat">Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->