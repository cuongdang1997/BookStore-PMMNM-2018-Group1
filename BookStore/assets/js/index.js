function toggleResetPswd(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e){
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(()=>{
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})

var Dropdown = (function($) {

    var $body = $('body'),
        $dropdown = $body.find('.dropdown'),
        $trigger = $dropdown.find('button'),
        $list = $dropdown.find('ul'),
        $firstLink = $list.find('li:first a'),
        $lastLink = $list.find('li:last a');

    var init = function() {
        ariaSetup();
        bindEvents();
    }

    var ariaSetup = function() {
        var listId = $list.attr('id');

        $trigger.attr({
            'aria-expanded': 'false',
            'aria-controls': listId
        });

        $list.attr({
            'aria-hidden': true
        });
    }

    var bindEvents = function() {
        $trigger.on('click', toggleDropdown);

        $firstLink.on('keydown', function() {
            if (event.which === 9 && event.shiftKey === false) {
                return;
            } else if (event.which === 9 && event.shiftKey === true) {
                toggleDropdown();
            }
        });

        $lastLink.on('keydown', function() {
            if (event.shiftKey) return;
            toggleDropdown();
        });
    }

    var toggleDropdown = function() {
        var hidden = $list.attr('aria-hidden') === 'true' ? false : true,
            expanded = !hidden;

        $trigger.attr('aria-expanded', expanded);
        $list.attr('aria-hidden', hidden);
    }

    return {
        init: init
    }

})(jQuery);


//cart
function addCartItem(ele){
    var idBook = ele.getAttribute("data-id");
    $.ajax({
        url : "Cart/addCartItem",
        type : "get",
        dataType:"text",
        data : {idBook: idBook},
        success : function (result){
            $('#amount').html(result);
            swal({
                type: 'success',
                title: 'Product added to cart!',
                showConfirmButton: false,
                timer: 1500
            })
        }
    });
}

function updateCartItem(ele){
    var maSach = ele.getAttribute("data-id");
    var value = ele.getAttribute("value");
    var id = '#'+maSach;
    var soLuong = $(id).val();
    var gia = ele.getAttribute("data-price");
    console.log(value === '-' );
    if(value === '-'){
        soLuong--;
    }else{
        soLuong++;
    }
    if(soLuong == 0){
        soLuong = 1;
    }
    $.ajax({
        url : "Cart/updateCartItem",
        type : "post",
        dataType:"text",
        data : {idBook:maSach, quantity: soLuong},
        success : function (result){
            $('#total').html(result);
            $(id).val(soLuong);
            $('#totalItemCart'+maSach).html(soLuong*gia);
        }
    });
}


function removeCartItem(ele){
    var idBook = ele.getAttribute("value");
    var i = '#'+idBook+'ItemCart';
    swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url : "Cart/removeCartItem",
                type : "post",
                dataType:"text",
                data : {idBook:idBook},
                success : function (result){
                    if(result == 0){
                        location.reload();
                    }
                    $('#total').html(result);
                    $(i).hide();
                    swal({
                        title: 'Deleted!',
                        text: 'Product has been deleted from Cart.',
                        type: 'success',
                        showConfirmButton: false,
                        timer: 1500,
                    })
                }
            });
        }
    })
}

function checkOut(){
    $.ajax({
        url : "CheckOut/checkOut",
        type : "get",
        dataType:"text",
        success : function (result){
            $('#amount').remove();
            swal({
                title: "Success",
                text: result,
                icon: "success",
                button: true,
                timer: 5500
            })
            .then((cofirm) => {
                if (cofirm) {
                    window.location="Home";
                }
            });
        }
    });
}

$(document).ready(function() {
    $('select').niceSelect();
    Dropdown.init();
    $('.btn-block').on('click',function(){
        var id = $(this).data('id');
        $('.modal-body').html('loading');

        $.ajax({
            type: 'POST',
            url: 'HistoryOrder/detail',
            data:{idOrder: id},
            success: function(data) {
                $('.modal-body').html(data);
            },
            error:function(err){
                alert("error"+JSON.stringify(err));
            }
        });
    });
    $('[data-toggle="tooltip"]').tooltip();
});

