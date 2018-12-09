function updateStatusForOrder(ele){
    console.log(ele.getAttribute("data-id"));
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, change it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url : "Order/updateOrder",
                type : "post",
                dataType:"text",
                data : {idOrder:ele.getAttribute("data-id"), status: ele.getAttribute("data-status")},
                success : function (result){
                    if(result){
                        swal({
                            title: 'Changed!',
                            type: 'success',
                            showConfirmButton: false,
                            timer: 1500,
                        })
                        location.reload();
                    }
                }
            });
        }
    })
}