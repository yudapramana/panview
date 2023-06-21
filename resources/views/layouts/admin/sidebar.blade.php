<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item"> <a class="nav-link @if (request()->segment(1) == 'home') @else collapsed @endif" href="/home">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span> </a>
        </li>
        <li class="nav-heading">Pengelolaan Data</li>
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'services') @else collapsed @endif" href="/services"><i class="bi bi-person"></i><span>Services</span></a></li>
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'products') @else collapsed @endif" href="/products"><i class="bi bi-cloud-upload"></i><span>Products</span></a>
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'galleries') @else collapsed @endif" href="/galleries"><i class="bi bi-cloud-upload"></i><span>Galleries</span></a>

    </ul>
</aside>
