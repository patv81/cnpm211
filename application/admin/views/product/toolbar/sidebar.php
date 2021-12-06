<?php

$linkUserManager  = URL::createLink('admin', 'user', 'index');
$linkProductManager  = URL::createLink('admin', 'product', 'index');
?>
<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">ZendVN</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo $linkUserManager; ?>" class="nav-link" data-active="user">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $linkProductManager; ?>" class="nav-link active" data-active="product">
                        <i class="nav-icon fas fa-thumbtack"></i>
                        <p>
                            Product
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>