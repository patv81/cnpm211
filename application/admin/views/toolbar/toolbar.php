<?php
$controller = $this->arrParam['controller'];
$newLink = URL::createLink('admin', $controller, 'form');
?>
<div class="d-flex flex-wrap align-items-center justify-content-between mb-2">
    <?php
    if ($controller == 'product') {
    ?>
        <div class="mb-1">
            <select id="bulk-action" name="bulk-action" class="custom-select custom-select-sm mr-1" style="width: unset">
                <option value="" selected="">Bulk Action</option>
                <option value="multi-delete">Multi Delete</option>
            </select> <button id="bulk-apply" class="btn btn-sm btn-info">Apply <span class="badge badge-pill badge-danger navbar-badge" style="display: none"></span></button>
        </div>
    <?php
    } else if ($controller == 'user') { ?>
        <div class="mb-1">
            <select id="bulk-action" name="bulk-action" class="custom-select custom-select-sm mr-1" style="width: unset">
                <option value="" selected="">Bulk Action</option>
                <option value="multi-active">Multi active</option>
                <option value="multi-inactive">Multi Inactive</option>
                <option value="multi-delete">Multi delete</option>
            </select> <button id="bulk-apply" class="btn btn-sm btn-info">Apply <span class="badge badge-pill badge-danger navbar-badge" style="display: none"></span></button>
        </div>
    <?php } ?>
    <div class="mb-1">
        <select id="filter_groupacp" name="filter_groupacp" class="custom-select custom-select-sm mr-1" style="width: unset">
            <option value="default" selected="">- Group ACP -</option>
            <option value="false">No</option>
            <option value="true">Yes</option>
        </select>
    </div>
    <div class="mb-1">
        <a href="<?php echo $newLink ?>" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add New</a>
        <a href="#" class="btn btn-sm btn-info"><i class="fas fa-sync"></i> Reload</a>
    </div>
</div>