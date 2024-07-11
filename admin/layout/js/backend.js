$('input').each(function(){
    if ($(this).attr('required') === 'required'){
        $(this).after('<span class="asterisk">*</span>')
    }
});

// conveert password field to text field on hover 
/// not done yet ******************************************
//                       ******************************************


$('.confirm').click(function(){
    return confirm('هل أنت متأكد من الحذف ؟');
});

$('.confirmDoneOrder').click(function(){
    return confirm('سوف يتم أعتبار هذا المنتج من المبيعات , هل أنت متأكد من أنتهاء تسليم هذا المنتج ؟');
});

