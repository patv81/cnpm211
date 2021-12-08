//FOR cart 
var test = -1;

function Clickheretoprint() {
    var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
    disp_setting += "scrollbars=yes,width=800, height=400, left=100, top=25";
    var content_vlue = document.getElementById("content").innerHTML;

    var docprint = window.open("", "", disp_setting);
    docprint.document.open();
    docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size: 13px; font-family: arial;">');
    docprint.document.write(content_vlue);
    docprint.document.close();
    docprint.focus();
}

function submitOrder(){
    var ids=[];
    var quantities = []; 
    var prices =[];
    var names = [];
    var payed =0 ;
    var table = $('#cartTable > tbody');
    var size = table[0].children.length;
    for (let i = 0 ; i < size ; i++){
        let id = table[0].children[i].children[0].textContent.trim();
        let quantity= table[0].children[i].children[2].textContent.trim();
        let price = table[0].children[i].children[3].textContent.trim();
        let nam = table[0].children[i].children[1].textContent.trim();
        ids.push(id);
        quantities.push(quantity);
        prices.push(price);
        names.push(nam);
    }
    payed = $('#totalPayed').val();
    var re = {ids:ids,quantities:quantities,payed:payed};
    var formName = "#cart-form-table";
    console.log(ids);
    console.log(quantities);
    for (let i = 0 ; i < ids.length;i++){
        
        $("<input />").attr("type", "hidden")
            .attr("name", "form[products][]")
            .attr("value", ids[i])
            .appendTo(formName);
    }
    for (let i = 0; i < quantities.length; i++) {
        $("<input />").attr("type", "hidden")
            .attr("name", "form[quantities][]")
            .attr("value", quantities[i])
            .appendTo(formName);
    }
    for (let i = 0; i < quantities.length; i++) {
        $("<input />").attr("type", "hidden")
            .attr("name", "form[prices][]")
            .attr("value", prices[i])
            .appendTo(formName);
    }
    for (let i = 0; i < quantities.length; i++) {
        $("<input />").attr("type", "hidden")
            .attr("name", "form[names][]")
            .attr("value", names[i])
            .appendTo(formName);
    }
    $("<input />").attr("type", "hidden")
        .attr("name", "form[token]")
        .attr("value",+new Date())
        .appendTo(formName);
    $(formName).submit();

}

function cancelOrder(){
    console.log("cancel order")
}
function posSearchProduct(){
    var value = $('[name=filter_search]').val().trim()
    var url = 
        $.get('index.php?module=admin&controller=product&action=getListProduct&filter_search='+value, function (data) {
        //data 
        var parent = $("#selectProductTable tr")
        for (let i = 1; i < parent.length; i++) {
            parent[i].remove();
        }
        for (var i = 0; i < data.length; i++) {
            obj = data[i];
            $('#selectProductTable tr:last').after(`
            <tr>
                <td class="text-center">${obj["id"]} </td >
                <td class="text-center">${obj["name"]} </td>
                <td class="text-center">${obj["price"]}</td>
                <td class="text-center position-relative">
                    <input type="number" value="1" class="form-control form-control-sm m-auto text-center" style="width: 65px" id="quantity" data-id="1" min="1">
                </td>
                <td class="text-center">
                    <a data-product-id="${obj["id"]}" onclick="addToCart(this)" class="rounded-circle btn btn-sm btn-info" title="edit">
                        <i class="fas fa-plus"></i>
                    </a>
                </td>
            </tr>`);
        }
        console.log(data[0]);
        }, "json")
        .done(function () {
            console.log("second success");

        })
        .fail(function () {
            console.log("error");
        })
        .always(function () {
            console.log("finished");
        });
}
function removeFromCart(product){
    var row = $(product).closest("tr");
    var data = row[0].children// get dom 
    test=data;
    var obj = {
        id: data[0].textContent,
        name: data[1].textContent,
        quantity: data[2].textContent,
        price: data[3].textContent
    };
    console.log(obj);
    var priceRow = Number(obj["quantity"]) * Number(obj["price"]);
    var currentPrice = Number($('#totalPrice').val());
    $('#totalPrice').val(currentPrice - priceRow);
    row.remove();
}
function addToCart (product){
    var row = $(product).closest("tr");
    var data=row[0].children// get dom 
    var obj = {
        id: data[0].textContent,
        name: data[1].textContent,
        price: data[2].textContent,
        quantity: data[3].children[0].value
    };
    var priceRow = Number(obj["quantity"]) * Number(obj["price"]);
    $('#cartTable > tbody').append(`
    <tr>
        <td>${ obj["id"] } </td >
        <td>${ obj["name"]} </td>
        <td>${ obj["quantity"] }</td>
        <td class="text-right">${priceRow }</td>
        <td><a data-product-id="${obj["id"]}" onClick="removeFromCart(this)" class="rounded-circle btn btn-sm btn-danger" title="removeFromCart">
                    <i class="fas fa-trash-alt"></i>
            </a>
        </td>
    </tr>`);
    var currentPrice = Number($('#totalPrice').val());
    $('#totalPrice').val(currentPrice+priceRow);
    test = row;
    console.log(obj); 
}
function submitForm(url) {
    $('#admin-form').attr('action', url);
    $('#admin-form').submit();
}

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
function trashSingle(url){
    $.get(url,function(data){
        location.reload();
    })
}
function bulkAction(){
    var url_string= window.location.href;
    var url = new URL(url_string);
    var currentController = url.searchParams.get("controller");
    console.log(currentController);
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
        $.post('index.php?module=admin&controller=' + currentController+'&action=status', senddata, function (data) {
            location.reload();
        }, 'json');
        
    } else if (type == 'multi-inactive'){
        var senddata = { type: 0, cid: selected };
        $.post('index.php?module=admin&controller='+currentController+'&action=status', senddata, function (data) {
            location.reload();
        }, 'json');
        
    } else if (type == 'multi-delete'){
        console.log('multi-delete');
        var senddata = {cid: selected };
        $.post('index.php?module=admin&controller='+currentController+'&action=trash', senddata, function (data) {
            console.log('success')
            location.reload();
        }, 'json')
        .done(function () {
            console.log("second success");
            location.reload();
        })
        .fail(function () {
            console.log("error");
            location.reload();
        })
        .always(function () {
            console.log("finished");
            location.reload();
        });
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

    
    let $btnSearch = $('button#btn-search');
    let $btnClearSearch = $('button#btn-clear-search');
    let $inputSearchValue = $('input[name = search_value]');
    $btnSearch.click(function(){
        alert(123);
    })
    $btnClearSearch.click(function () {
        $inputSearchValue.val('');
    });
})
