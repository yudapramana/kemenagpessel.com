<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item"> <a class="nav-link @if (request()->segment(1) == 'home') @else collapsed @endif" href="/home">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span> </a>
        </li>
        <li class="nav-heading">Kelola Informasi</li>
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'services') @else collapsed @endif" href="/services"><i class="bi bi-shop"></i><span>Services</span></a></li>
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'products') @else collapsed @endif" href="/products"><i class="bi bi-basket"></i><span>Products</span></a>
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'galleries') @else collapsed @endif" href="/galleries"><i class="bi bi-border-all"></i><span>Galleries</span></a>
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'carousels') @else collapsed @endif" href="/carousels"><i class="'bi bi-display"></i><span>Carousels</span></a>
        <li class="nav-heading">Kelola Data</li>
        <li class="nav-item"><a class="nav-link @if (request()->segment(1) == 'messages') @else collapsed @endif" href="/messages"><i class="bi bi-chat-left-text"></i><span>Message </span></a></li>
    </ul>
</aside>
