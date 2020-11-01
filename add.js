const db = firebase.firestore();
const table = document.querySelector('#tbresult');
const form = document.querySelector('#addform1');
if (form) {
    form.addEventListener('submit', (e) => {

        console.log('เข้า');

    });

}
$(document).ready(function () {
    $("#datesearch").hide();
    $("#licensesearch").hide();
    $("#timesearch").hide();
    $('#showall').click(function () {
        if ($(this).is(":checked")) {
            $("#datesearch").hide();
            $("#licensesearch").hide();
            $("#timesearch").hide();
        }
    });
    $('#checkdate').click(function () {
        if ($(this).is(":checked")) {
            $("#datesearch").show();
            $("#timesearch").hide();
            $("#licensesearch").hide();
        }

    });
    $('#checktime').click(function () {
        if ($(this).is(":checked")) {
            $("#timesearch").show();
            $("#datesearch").hide();
            $("#licensesearch").hide();
        }

    });
    $('#checklicens').click(function () {
        if ($(this).is(":checked")) {
            $("#timesearch").hide();
            $("#datesearch").hide();
            $("#licensesearch").show();
        }

    });
    $('#btn').click(function () {
        if ($(this).is(":reset")) {
            $("#timesearch").hide();
            $("#datesearch").hide();
            $("#licensesearch").hide();
        }

    });

});