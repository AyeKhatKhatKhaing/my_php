$('#add_content').on('submit',function (e){
    e.preventDefault();
    let input=$(this).serialize()
    $.post($(this).attr('action'),input,function (data){
        if(data=='success'){
            $("#result").html('<span class="badge badge-success">Success</span>')
            $("input").val("")
            showList()
        }
        else{
            $("#result").html('<span class="badge badge-danger">Fail</span>')
        }
    })
})

function showList(){
    $.get("list.php",function(data){
        $(".output").html(data)
    })
}

function showGrid(){
    $.get("grid.php",function(data){
        $(".output").html(data)
    });
}
function deleteList(){
    $(".output").delegate(".del","click",function(){
        let current=$(this).attr("data-id")
        $.get("delete.php?id="+current,function(data){
            if(data=="success"){
                showList()
            }
        })
    })
}
$(".output").delegate(".edit","click",function(data){
    let current=$(this).attr("data-id");
    $.get("detail.php?id="+current,function(data){
        let contactDetail=JSON.parse(data);
        $("#ename").val(contactDetail.name)
        $("#ephone").val(contactDetail.phone)
        $("#editId").val(contactDetail.id)
        $("#edit").modal("show");
        console.log(contactDetail)
    })

})

$("#update_content").on("submit",function(e){
    e.preventDefault();
    let input=$(this).serialize()
    $.post($(this).attr('action'),input,function (data){
        if(data=='success'){
            $("#editResult").html('<span class="badge badge-success">Success</span>')
            $("input").val("")
            showList()
            $("#edit").modal("hide");

        }
        else{
            $("#editResult").html('<span class="badge badge-danger">Fail</span>')
        }
    })
})
deleteList()

showList()