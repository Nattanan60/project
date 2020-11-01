<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

  <title>ตรวจสอบ วัน-เวลารถเข้าทั้งหมด</title>
</head>

<body style="background-color: rgb(48, 252, 126);">

  <?php
  $License = $_GET["License"];
  $Check = $_GET["check"];
  $day = $_GET["day"];
  $month = $_GET["month"];
  $year = $_GET["year"];
  $datestart = $_GET["datestart"];
  $datestop = $_GET["datestop"];
  echo '<script type="text/javascript">';
  echo "var License = '$License';";
  echo "var  Check= '$Check';";
  echo "var day = '$day';";
  echo "var month = '$month';";
  echo "var year = '$year';";
  echo "var datestart = '$datestart';";
  echo "var datestop = '$datestop';";
  // ส่งค่า $data จาก PHP ไปยังตัวแปร data ของ Javascript
  echo '</script>';
  ?>

  <div class="jumbotron text-center" style="background-color:  rgb(29, 14, 165);">

    <h1 style="color: aliceblue;">ตรวจสอบ วัน-เวลารถเข้าทั้งหมด</h1>
    <p style="color: aliceblue;">ระบบบริหารการจัดการจอดรถมอเตอร์ไซค์อัจฉริยะกรณีศึกษาที่จอดรถมอเตอร์ไซค์มหาวิทยาลัยพะเยา</p>
    <div class="btn-group">
      <form action="datainsearch.php">
        <button type="submit" class="btn btn-primary" style="height: 30px;width:100px;">กลับหน้าค้นหา</button>
      </form>
      <form action="main.html">
        <button type="submit" class="btn btn-danger" style="height: 30px;width:100px;">กลับหน้าหลัก</button>
      </form>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12" style="background-color: rgba(213, 170, 235, 0.651);height: 450px;width: 350px;">
        <center>
          <h2 style="color: blue;">ตรวจสอบ วัน-เวลารถเข้าทั้งหมด</h2>
          <table class="table" id="tbresult">
            <thead class="thead-dark">
              <tr>
                <th scope="col">วันที่</th>
                <th scope="col">เดือน</th>
                <th scope="col">ปี</th>
                <th scope="col">เวลาเข้า</th>
                <th scope="col">ป้ายทะเบียน</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="row" id="2"></td>
                <td scope="row" id="3"></td>
                <td scope="row" id="4"></td>
                <td scope="row" id="5"></td>
                <td scope="row" id="1"></td>
              </tr>
            </tbody>
          </table>

</body>
<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
<!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-analytics.js"></script>
<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-firestore.js"></script>
<script>
  var firebaseConfig = {
    apiKey: "AIzaSyCDzq1KoPC7IFbb_Xr_0QE_fuddrTHN_uw",
    authDomain: "testmotorcycle.firebaseapp.com",
    databaseURL: "https://testmotorcycle.firebaseio.com",
    projectId: "testmotorcycle",
    storageBucket: "testmotorcycle.appspot.com",
    messagingSenderId: "1030185236616",
    appId: "1:1030185236616:web:70685b35d6a6b4142b073d"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>
<script>
  const db = firebase.firestore();
  const table = document.querySelector('#tbresult');
  dbdata();

  function dbdata() {
    console.log('เข้าฟังชัน');
    var x = License;
    var c = Check;
    var a = month;
    var b = day;
    var y = year;
    var ds = datestart;
    var dt = datestop;
    // console.log(a);
    // console.log(b);
    // console.log(c);
    // console.log(d);
    // console.log(x);
    if (x != "") {
      console.log('เข้าif');
      db.collection('Checkin').where('License', '==', x).get().then((snapshot) => {
        snapshot.forEach(doc => {
          $new_date = doc.data().timestamp.seconds;
          var date = new Date($new_date * 1000);
          // Day
          var day = date.getDate();
          // Display date time in MM-dd-yyyy h:m:s format
          var day = day;
          var months_arr = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
          var date = new Date($new_date * 1000);
          var month = months_arr[date.getMonth()];
          // Display date time in MM-dd-yyyy h:m:s format
          var month = month;
          var date = new Date($new_date * 1000);
          var year = date.getFullYear();
          // Display date time in MM-dd-yyyy h:m:s format
          var year = year;
          var date = new Date($new_date * 1000);
          // Hours
          var hours = date.getHours();
          // Minutes
          var minutes = "0" + date.getMinutes();
          // Seconds
          var seconds = "0" + date.getSeconds();
          // Display date time in MM-dd-yyyy h:m:s format
          var Time = hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
          showdata(doc, day, month, year, Time);
        })

        // console.log(form.License.value);
        // console.log(form.monthsearch.value);
      }) // 
    } else if (c == "all") {
      console.log('เข้าelseนี่น่ะ');
      db.collection('Checkin').get().then((snapshot) => {
        snapshot.forEach(doc => {
          $new_date = doc.data().timestamp.seconds;
          var date = new Date($new_date * 1000);
          // Day
          var day = date.getDate();
          // Display date time in MM-dd-yyyy h:m:s format
          var day = day;
          var months_arr = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
          var date = new Date($new_date * 1000);
          var month = months_arr[date.getMonth()];
          // Display date time in MM-dd-yyyy h:m:s format
          var month = month;
          var year = date.getFullYear();
          // Display date time in MM-dd-yyyy h:m:s format
          var year = year;
          var date = new Date($new_date * 1000);
          // Hours
          var hours = date.getHours();
          // Minutes
          var minutes = "0" + date.getMinutes();
          // Seconds
          var seconds = "0" + date.getSeconds();
          // Display date time in MM-dd-yyyy h:m:s format
          var Time = hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
          showdata(doc, day, month, year, Time);

        });
      });

    } else if (a != "") {
      var all = [];
      console.log('เข้าelse2นี่น่ะ');
      db.collection('Checkin').get().then((snapshot) => {
        snapshot.forEach(doc => {
          $new_date = doc.data().timestamp.seconds;
          var date = new Date($new_date * 1000);
          // Day
          var day = date.getDate();
          // Display date time in MM-dd-yyyy h:m:s format
          var day = day;
          var months_arr = ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'];
          var date = new Date($new_date * 1000);
          var month = months_arr[date.getMonth()];
          // Display date time in MM-dd-yyyy h:m:s format
          var month = month;
          var year = date.getFullYear();
          // Display date time in MM-dd-yyyy h:m:s format
          var year = year;
          var date = new Date($new_date * 1000);
          // Hours
          var hours = date.getHours();
          // Minutes
          var minutes = "0" + date.getMinutes();
          // Seconds
          var seconds = "0" + date.getSeconds();
          // Display date time in MM-dd-yyyy h:m:s format
          var Time = hours + ':' + minutes.substr(-2) + ':' + seconds.substr(-2);
          all = day +" "+" "+ month +" "+" "+ year +" "+" "+ Time +" "+" "+ doc.data().License;
          
          showdate(all,a);
        });
      });
    }

    function showdata(doc, day, month, year, Time) {
      var table = document.getElementById("tbresult");
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
      // document.getElementById("1").innerHTML = doc.data().License;
      // document.getElementById("2").innerHTML = day;
      // document.getElementById("3").innerHTML = month;
      // document.getElementById("4").innerHTML = year;
      // document.getElementById("5").innerHTML = Time;
    }
  }
  function showdate(all,a){
    console.log(all);
    for()
  }
  // $(document).ready(function() {
  //   $('#tbresult').DataTable();
  // });
</Script>

</html>