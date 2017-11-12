/*
*-------------------------------------------------------
* Ehda Data List
*
* Created by Yasna Team
* 2017-11-08
*-------------------------------------------------------
*/

String.prototype.replaceAll = function (search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};
/*
*-------------------------------------------------------
* Appending data
*-------------------------------------------------------
*/

jQuery(function($){

    var content = [
            {
                name: "نگار",
                inviteNum: 101,
                id: "id1",
                type: 1,
                status: false
            },
            {
                name: "رضوان",
                inviteNum: 102,
                id: "id2",
                type: 3,
                status: false
            },
            {
                name: "مونا",
                inviteNum: 102,
                id: "id2",
                type: 3,
                status: false
            },
            {
                name: "حسام",
                inviteNum: 103,
                id: "id3",
                type: 2,
                status: false
            },
            {
                name: "جعفر",
                inviteNum: 104,
                id: "id4",
                type: 1,
                status: false
            }
        ],
        template = $.trim( $('#trtemplate').html() ),
        typeClass = "",
        typeName = "";

    updateList(content);


    // Updates list data
    function updateList(listContent) {
        var frag = "",
            inviteNumFa,
            count = 0;

        $.each(listContent,function (index, obj) {

            typeIdentifier(obj.type);
            inviteNumFa = pd(obj.inviteNum);
            count = count + 1;
            
            frag +=
                template.replace( /{{id}}/ig , obj.id )
                    .replace( /{{class}}/ig , typeClass )
                    .replace( /{{status}}/ig , obj.status )
                    .replace( /{{count}}/ig , pd(count) )
                    .replace( /{{inviteNum}}/ig , obj.inviteNum )
                    .replace( /{{name}}/ig , obj.name )
                    .replace( /{{inviteNumFa}}/ig , inviteNumFa )
                    .replace( /{{inviteType}}/ig , typeName );

        });

        $('.table tbody').append(frag);
    }

    function typeIdentifier(type) {

        switch (type){
            case 1:
                 typeClass = "text-success";
                 typeName = "خانواده اهدا کننده";
                break;
            case 2:
                typeClass = "text-warning";
                typeName = "لیست انتظار";
                break;
            case 3:
                typeClass = "text-danger";
                typeName = "گیرنده عضو";
                break;
            default:
                return
        }


    }

}); //End Of siaf!


/*
*-------------------------------------------------------
* Searching
*-------------------------------------------------------
*/
jQuery(function($){

    var table = $('.table'),
        tbodyRows = table.find('tbody tr'),
        enterBtn = tbodyRows.find('button[name=enter]'),
        editBtn = tbodyRows.find('button[name=edit]'),
        deleteBtn = tbodyRows.find('button[name=delete]'),
        updateBtn = tbodyRows.find('button[name=update]'),
        alertBox = $('.search-alert'),
        alert = alertBox.find('span'),
        search = $('#search'),
        clearBtn = $('.remove'),
        searchVal;

    search.focus();

    // function called after typing 3 character in search input
    search.on('keyup', function () {
        alertMessage.hide();
        searchVal = search.val();

        (searchVal.length >= 3)? searchRows(searchVal) : tbodyRows.show();
    })
        .on('keypress', function (e) {
            var key = e.which;
            // Enter key code
            if( key=== 13){
                e.preventDefault();
            }
        });

    //input inter action -> next
    $('.table-input--name').on('keypress', function (e) {
        var key = e.which;
        if(key===13){
            $(this).parents('tr').find('.table-input--code').focus();
        }
    });

    //input inter action -> submit
    $('.table-input--code').on('keypress', function (e) {
        var key = e.which,
            tr = $(this).parents('tr');
        if(key===13){
            console.log($(this).parents('tr').find('button[name=enter]'));

            if(tr.attr("data-status") === "false"){
                tr.find('button[name=enter]').click();
            }else {
                tr.find('button[name=update]').click();
            }
        }
    });

    // number input scroll disable
    $('input[type=number]').on('mousewheel', function(e){
        e.preventDefault();
    });

    //closing alert box
    alertBox.children('.close').on('click',function (e) {
        e.preventDefault();
        alertMessage.hide();
    });


    // Function called on Entering data
    enterBtn.on('click', getData);

    // Function called on editing data
    editBtn.on('click', editData);

    // Function called when deleting data
    deleteBtn.on('click', deleteData);

    // Function called on updating data
    updateBtn.on('click', getData);

    // Searches Between rows of contents
    function searchRows(targetId) {

        var targetRow;
        //finds table row with same data-code attribute
        targetRow = table.find('[data-code="'+ targetId +'"]');
        //Hide every other rows
        tbodyRows.hide();

        if(targetRow.length){
            //if found, show.
            search.blur();
            targetRow.show();
            targetRow.first().find('.table-input--name').eq(0).focus();
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
            if(lotteryCode.length === 3){
                entered(btn,tr,name,lotteryCode);
                return [id,name,lotteryCode];
            }else{
                alertMessage.show("شماره قرعه‌کشی نادرست می‌باشد.")
            }
        }else{
            alertMessage.show("شماره قرعه‌کشی را وارد کنید.");
        }

    }

    // Records entrance
    function entered(btn,tr,nameVal,lotteryVal) {
        //remove alerts if exist
        alertMessage.hide();

        // show edit btn
        tr.find('.control-btn').hide();
        tr.find('[name=edit]').show();

        // replace input with entered data
        tr.find('.td-name span').empty()
            .text(nameVal).show()
            .next().hide();

        tr.find('.td-lottery-code span').empty()
            .text(pd(lotteryVal)).show()
            .next().hide();

        tr.attr("data-status", "true");

        // change style of row
        tr.addClass('entered');
    }

    // Edits data
    function editData() {
        var btn = $(this),
            tr = btn.parents('tr');

        // change btn
        tr.find('.control-btn').hide();
        tr.find('.secondary-btn').show();

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

    // Deletes Data
    function deleteData() {
        var btn = $(this),
            tr = btn.parents('tr');

        // change btn
        tr.find('.control-btn').hide();
        tr.find('[name=enter]').show();

        //shows inputs again
        tr.find('.td-name span')
            .hide().empty()
            .next().val("").show();
        tr.find('.td-lottery-code span')
            .hide().empty()
            .next().val("").show();

        // Reset the status
        tr.attr("data-status", "false");

        // Change style of row to its default
        tr.removeClass('entered');
    }


    // Alert Message Object
    var alertMessage = {
        show: function (message) {
            alert.text(message);
            alertBox.show();
        },
        hide: function () {
            alert.text("");
            alertBox.hide();
        }
    }
    
    // ajax loading image
    function triggerLoadingImg(img) {
        img.bind('ajaxStart', function(){
            $(this).show();
        }).bind('ajaxStop', function(){
            $(this).hide();
        });
    }


}); //End Of siaf!


/*
*-------------------------------------------------------
* Global functions
*-------------------------------------------------------
*/

function forms_pd($string) {
    if (!$string){
        return;
    }
    $string = $string.toString();

    $string = $string.replaceAll(/1/g, "۱");
    $string = $string.replaceAll(/2/g, "۲");
    $string = $string.replaceAll(/3/g, "۳");
    $string = $string.replaceAll(/4/g, "۴");
    $string = $string.replaceAll(/5/g, "۵");
    $string = $string.replaceAll(/6/g, "۶");
    $string = $string.replaceAll(/7/g, "۷");
    $string = $string.replaceAll(/8/g, "۸");
    $string = $string.replaceAll(/9/g, "۹");
    $string = $string.replaceAll(/0/g, "۰");

    return $string;
}

function forms_digit_fa(enDigit) {
    return forms_pd(enDigit);

    var newValue = "";
    for (var i = 0; i < enDigit.length; i++) {
        var ch = enDigit.charCodeAt(i);
        if (ch >= 48 && ch <= 57) {
            var newChar = ch + 1584;
            newValue = newValue + String.fromCharCode(newChar);
        }
        else {
            newValue = newValue + String.fromCharCode(ch);
        }
    }
    return newValue;
}

function pd(enDigit) {
    return forms_digit_fa(enDigit);

}


