<?php

$linkUserManager  = URL::createLink('admin', 'user', 'index');
$linkOrderManager  = URL::createLink('admin', 'product', 'index');
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
                    <a href="<?php echo $linkUserManager ;?>" class="nav-link active"  data-active="dashboard">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo $linkOrderManager ;?>" class="nav-link" data-active="category">
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