function changeStatus(url){
    $.get(url,function(data){
        //data 
        var element = '#status-'+data['id'];
        var iconElement = element + ' > i';
        var classRemove = ["btn-success","fa-check"] ;
        var classAdd = ["btn-danger","fa-minus"];
        if (data['status']==1){
            classRemove = ["btn-danger","fa-minus"];
            classAdd = ["btn-success","fa-check"];
        }
        $(element).removeClass(classRemove[0]).addClass(classAdd[0]);
        $(iconElement).removeClass(classRemove[1]).addClass(classAdd[1]);

        $(element).attr('href',"javascript:changeStatus('"+data['link']+"')");
    },"json");
}

function bulkAction(){
    var selected = [];
    var type = '';
    type = $('#bulk-action').val();
    $('#form-table input:checked').each(function () {
        if (this.id!='check-all'){
            selected.push($(this).attr('value'));
        }
    }) 
    if (type == 'multi-active'){
        var senddata = { type: 1, cid: selected };
        $.post('index.php?module=admin&controller=user&action=status', senddata, function (data) {
            location.reload();
        }, 'json');
        
    } else if (type == 'multi-inactive'){
        var senddata = { type: 0, cid: selected };
        $.post('index.php?module=admin&controller=user&action=status', senddata, function (data) {
            location.reload();
        }, 'json');
        
    } else if (type == 'multi-delete'){
        alert("chua hien thuc");
    }
    
}
$(document).ready(function(){
    $('#check-all').change(function(){
        var checkStatus = this.checked;
        $('#form-table').find(':checkbox').each(function(){
            this.checked=checkStatus;
        })
    })
    $('#bulk-apply').click(bulkAction);
})
