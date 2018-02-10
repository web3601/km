/**
 * Created by FO on 2018/02/06 0006.
 */
$(function () {
    function handleCommon(a) {
        //$(a).delegate('p', 'click', function (e) {
        //    var e = e.target;
        //    console.log(e.id);
        //    var isChecked = $(e).find('input').prop('checked');
        //    if (isChecked) {
        //        $(e).find('input').prop('checked', false);
        //    } else {
        //        $(e).parents(a).find('p input').prop('checked', false);
        //        $(e).find('input').prop('checked', true);
        //    }
        //})

        $(a + ' p').click(function (e) {
            var e = e.target;
            var isChecked = $(e).find('input').prop('checked');
            var isAnswer = $(e).find('input[name$="Answer"]').length;
            if(isAnswer){
                if($(e).index()==5){
                    console.log($(e));
                    $(e).parents(a).find('p:not(last-child) input').prop('checked', false);
                    $(e).find('.answer').focus(function(){
                    });
                        $(e).find('input[name="radio"]').prop('checked', true);
                    //$(e).find('.answer').blur(function(){
                    //    $(e).find('input').prop('checked', true);
                    //});

                }else{
                    $(e).find('input').prop('checked', false);
                    $(e).prev('input').prop('checked', true);
                }
            }else{
                if (isChecked) {
                    $(e).find('input').prop('checked', false);
                } else {
                    $(e).parents(a).find('p input').prop('checked', false);
                    $(e).find('input').prop('checked', true);
                }
            }

        })
    }

    handleCommon('.commonStyleA');
    handleCommon('.commonStyleB');
    handleCommon('.commonStyleC');
    handleCommon('.commonStyleD');
    handleCommon('.commonStyleE');
    handleCommon('.commonStyleF');
    handleCommon('.commonStyleG');
    handleCommon('.commonStyleH');


})