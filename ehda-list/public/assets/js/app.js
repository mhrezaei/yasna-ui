/*
*-------------------------------------------------------
* Ehda Data List
*
* Created by Yasna Team
* 2017-11-08
*-------------------------------------------------------
*/

///////////////////////////////////////////////////////////////////////////////////////////

/*
*-------------------------------------------------------
* Searching
*-------------------------------------------------------
*/
jQuery(function($){

    var table = $('.table'),
        tbodyRows = table.find('tbody tr'),
        enterBtn = tbodyRows.find('button[name=enter]'),
        alert = $('.search-alert'),
        search = $('#search'),
        searchVal;

    search.on('keyup', function () {
        alert.text("").hide();
        searchVal = search.val();

        (searchVal.length >= 3)? searchRows(searchVal) : tbodyRows.show();
    });

    enterBtn.on('click', getData);
    

    function searchRows(targetId) {

        var targetRow;
        //finds table row with same data-code attribute
        targetRow = table.find('[data-code="'+ targetId +'"]');
        //Hide every other rows
        tbodyRows.hide();

        if(targetRow.length){
            //if found, show.
            targetRow.show();
        }else {
            //in NOT found, alert.
            alertMessage("شماره دعوت مورد نظر یافت نشد.");
        }
    }
    
    function getData() {
        var btn = $(this),
            tr = btn.parents('tr'),
            id =tr.data('id'),
            nameInput = tr.find('.table-input--name'),
            name = nameInput.val(),
            lotteryInput = tr.find('.table-input--code'),
            lotteryCode = lotteryInput.val();


        if(lotteryCode){
            entered(btn,tr,name,lotteryCode);
            return [id,name,lotteryCode];
        }else{
            alertMessage("شماره قرعه‌کشی را وارد کنید.");
        }

    }

    function entered(btn,tr,nameVal,lotteryVal) {
        btnDanger(btn);
        tr.find('.td-name')
            .empty()
            .text(nameVal);
        tr.find('.td-lottery-code')
            .empty()
            .text(lotteryVal)
    }
    function btnDanger(btn) {
        btn.removeClass('btn-success')
            .addClass('btn-danger')
            .text('ثبت خروج')
            .attr('name','exit');
    }
    function alertMessage(message) {
        alert.text(message).show();
    }

    


}); //End Of siaf!



