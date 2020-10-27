<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
  crossorigin="anonymous">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
      <div class="row" >
        <div class="col-sm-12" style="background-color: rgba(213, 170, 235, 0.651);height: 450px;width: 350px;" ><center>
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
                <td scope="row" id="day"></td>
                <td scope="row" id="mounth"></td>
                <td scope="row" id="year"></td>
                <td scope="row" id="time"></td>
                <td scope="row" id="Licenses"></td>
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
<script src="add1.js" charset="utf-8"></script>
</html>
