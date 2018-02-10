$(function () {
    function handleCommon(a) {
        $(a).delegate('p', 'click', function (e) {
            var e = e.target;
            var isChecked = $(e).find('input').prop('checked');
            var isAswer = $(e).find('input[name^="other"]').length;
            //console.log(isAswer);
            //console.log($(e));
            if (isChecked) {
                $(e).find('input').prop('checked', false);

                //console.log($(e));
                //console.log('------');
                //var eAnswerLen = $(e).find('.answer').length;
                //var eAnswer = $(e).find('.answer');
                //if(eAnswerLen){
                //    eAnswer.focus(function(e){
                //        console.log('aaa');
                //        $(e).parents('p').off('click');
                //        //$(e).find('input').prop('checked', true);
                //        $(e).css('display', 'inline-block');
                //    })
                //}else{
                //    $(e).find('input').prop('checked', false);
                //}
            } else {

                $(e).parents(a).find('p input').prop('checked', false);
                $(e).find('input').prop('checked', true);
                //if (isAswer) {
                //    $(e).parents(a).find('input[name$="Answer"]').css('display', 'inline-block')
                //} else {
                //    $(e).parents(a).find('input[name$="Answer"]').css('display', 'none')
                //}
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