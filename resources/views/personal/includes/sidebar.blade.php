<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item pt-3">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item pt-3">
                <a href="{{ route('personal.setting.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>
                        Настройка
                    </p>
                </a>
            </li>
            <li class="nav-item pt-3">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-heart"></i>
                    <p>
                        Понравившиеся посты
                    </p>
                </a>
            </li>
            <li class="nav-item pt-3">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-comments"></i>
                    <p>
                        Коментарии
                    </p>
                </a>
            </li>

        </ul>

    </div>
    <!-- /.sidebar -->
</aside>
