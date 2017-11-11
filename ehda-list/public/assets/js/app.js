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
        editBtn = tbodyRows.find('button[name=exit]'),
        alert = $('.search-alert'),
        search = $('#search'),
        searchVal;



    // function called after typing 3 character in search input
    search.on('keyup', function () {
        alertMessage.hide();
        searchVal = search.val();

        (searchVal.length >= 3)? searchRows(searchVal) : tbodyRows.show();
    });

    // Function called on Entering data
    enterBtn.on('click', getData);

    // Function called on editing data
    editBtn.on('click', editData);

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
            alertMessage.show("شماره دعوت مورد نظر یافت نشد.");
        }
    }
    
    // Gets data to record entrance
    function getData() {
        var btn = $(this),
            tr = btn.parents('tr'),
            id =tr.data('id'),
            nameInput = tr.find('.table-input--name'),
            name = nameInput.val(),
            lotteryInput = tr.find('.table-input--code'),
            lotteryCode = lotteryInput.val();

        // Checks if lottery code entered
        if(lotteryCode){
            entered(btn,tr,name,lotteryCode);
            return [id,name,lotteryCode];
        }else{
            alertMessage.show("شماره قرعه‌کشی را وارد کنید.");
        }

    }

    // Records entrance
    function entered(btn,tr,nameVal,lotteryVal) {
        //remove alerts if exist
        alertMessage.hide();

        // Change btn
        changeBtn(btn);

        // replace input with entered data
        tr.find('.td-name span').empty()
            .text(nameVal).show()
            .next().hide();

        tr.find('.td-lottery-code span').empty()
            .text(lotteryVal).show()
            .next().hide();


        // change style of row
        tr.addClass('entered');
    }

    // Edits data
    function editData() {
        var btn = $(this),
            tr = btn.parents('tr');

        // change btn
        changeBtn(btn);

        //shows inputs again
        tr.find('.td-name span')
            .hide()
            .next().show();
        tr.find('.td-lottery-code span')
            .hide()
            .next().show();

        // Change style of row to its default
        tr.removeClass('entered');
    }

    // Toggles btn to enter or exit submitter
    function changeBtn(btn) {
        if(btn.is('[name=enter]')){

            btn.hide()
                .next().show();

        }else if(btn.is('[name=exit]')){

            btn.hide()
                .prev().show();

        }

    }

    // Alert Message Object
    var alertMessage = {
        show: function (message) {
            alert.text(message).show();
        },
        hide: function () {
            alert.text("").hide();
        }
    }
    


}); //End Of siaf!



