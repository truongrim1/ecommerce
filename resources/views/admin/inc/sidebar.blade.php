
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
    <li class="nav-item nav-profile">
        <a href="#" class="nav-link">
        <div class="profile-image">
            <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="profile image">
            <div class="dot-indicator bg-success"></div>
        </div>
        </a>
    </li>
    <li class="nav-item nav-category">Menu</li>
    <li class="nav-item">
        <a class="nav-link" href="">
        <i class="menu-icon typcn typcn-document-text"></i>
        <span class="menu-title">Brands</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
        <i class="menu-icon typcn typcn-coffee"></i>
        <span class="menu-title">Categories</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('customers.index') }}">
        <i class="menu-icon typcn typcn-shopping-bag"></i>
        <span class="menu-title">{{ trans('admin.customer.title') }}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">
        <i class="menu-icon typcn typcn-th-large-outline"></i>
        <span class="menu-title">{{ trans('admin.product.title') }}</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('orders.index') }}">
        <i class="menu-icon typcn typcn-bell"></i>
        <span class="menu-title">Order</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
        <i class="menu-icon typcn typcn-document-add"></i>
        <span class="menu-title">Medias</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="">
        <i class="menu-icon typcn typcn-document-add"></i>
        <span class="menu-title">Users</span>
        </a>
    </li>
    </ul>
</nav>
