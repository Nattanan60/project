const db = firebase.firestore();
const table = document.querySelector('#tbresult');
const form = document.querySelector('#addform1');
form.addEventListener('submit', (e) => {
    e.preventDefault();
    console.log('เข้า');

});
$(document).ready(function () {
    $("#license").hide();
    $("#lock").show();
    $('#checklock').click(function () {
        if ($(this).is(":checked")) {
            $("#lock").show();
            $("#license").hide();

        }
    });
    $('#checklicense').click(function () {
        if ($(this).is(":checked")) {
            $("#license").show();
            $("#lock").hide();
        }
    });
});

function showdata(doc, day, month, year, Time) {
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    cell5.innerHTML = doc.data().License;
    cell1.innerHTML = day;
    cell2.innerHTML = month;
    cell3.innerHTML = year;
    cell4.innerHTML = Time;

}

