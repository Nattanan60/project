const db = firebase.firestore();
const table = document.querySelector('#tbresult');
const form = document.querySelector('#addform1');
if (form) {
    form.addEventListener('submit', (e) => {
        // e.preventDefault();
        // window.location.replace('datain.html?License="License"');
        console.log('เข้า');

    });

}
// else {
//     console.log('ma');
//     dbdata();
//     function dbdata() {
//         console.log('เข้าฟังชัน');
//         var x = document.getElementsByName($License);
       
//         console.log(x);
//         if (x != null) {
//             console.log('เข้าif');
//             db.collection('CheckinQR').where('License','==',x).get().then((snapshot) => {
//                 snapshot.forEach(doc => {
//                     $new_date = doc.data().timestamp.seconds;
//                     var date = new Date($new_date * 1000);
//                     // Day
//                     var day = date.getDate();
//                     // Display date time in MM-dd-yyyy h:m:s format
//                     var day = day;
//                     var months_arr = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
//                     var date = new Date($new_date * 1000);
//                     var month = months_arr[date.getMonth()];
//                     // Display date time in MM-dd-yyyy h:m:s format
//                     var month = month;
//                     var date = new Date($new_date * 1000);
//                     var year = date.getFullYear();
//                     // Display date time in MM-dd-yyyy h:m:s format
//                     var year = year;
//                     var date = new Date($new_date * 1000);
//                     // Hours
//                     var hours = date.getHours();
//                     // Minutes
//                     var minutes = "0" + date.getMinutes();
//                     // Seconds
//                     var seconds = "0" + date.getSeconds();
//                     // Display date time in MM-dd-yyyy h:m:s format
//                     var Time = hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
//                     showdata(doc, day, month, year, Time);
//                 })
                
//                 // console.log(form.License.value);
//                 // console.log(form.monthsearch.value);
//             })// 
//         }
//         else if (x == null) {
//             console.log('เข้าelseนี่น่ะ');
//             db.collection('CheckinQR').get().then((snapshot) => {
//                 snapshot.forEach(doc => {
//                     $new_date = doc.data().timestamp.seconds;
//                     var date = new Date($new_date * 1000);
//                     // Day
//                     var day = date.getDate();
//                     // Display date time in MM-dd-yyyy h:m:s format
//                     var day = day;
//                     var months_arr = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
//                     var date = new Date($new_date * 1000);
//                     var month = months_arr[date.getMonth()];
//                     // Display date time in MM-dd-yyyy h:m:s format
//                     var month = month;
//                     var year = date.getFullYear();
//                     // Display date time in MM-dd-yyyy h:m:s format
//                     var year = year;
//                     var date = new Date($new_date * 1000);
//                     // Hours
//                     var hours = date.getHours();
//                     // Minutes
//                     var minutes = "0" + date.getMinutes();
//                     // Seconds
//                     var seconds = "0" + date.getSeconds();
//                     // Display date time in MM-dd-yyyy h:m:s format
//                     var Time = hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
//                     showdata(doc, day, month, year, Time);

//                 });
//             });
//         }

//         function showdata(doc, day, month, year, Time) {
//             var row = table.insertRow(-1);
//             var cell1 = row.insertCell(0);
//             var cell2 = row.insertCell(1);
//             var cell3 = row.insertCell(2);
//             var cell4 = row.insertCell(3);
//             var cell5 = row.insertCell(4);
//             cell5.innerHTML = doc.data().License;
//             cell1.innerHTML = day;
//             cell2.innerHTML = month;
//             cell3.innerHTML = year;
//             cell4.innerHTML = Time;

//         }
//     }
// }