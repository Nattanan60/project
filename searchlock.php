<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <title>ตรวจสอบ วัน-เวลารถเข้าทั้งหมด</title>
</head>
<div class="jumbotron text-center" style="background-color: #4198b9;height: 205px;">
  <h1 style="color: aliceblue;">ตรวจสอบ ค้นหารถในช่องจอดรถ</h1>
  <p style="color: black;">ระบบบริหารการจัดการจอดรถมอเตอร์ไซค์อัจฉริยะกรณีศึกษาที่จอดรถมอเตอร์ไซค์มหาวิทยาลัยพะเยา</p> 
  <form action="main.html">
<button type="submit" class="btn btn-primary"><h3>กลับสู่หน้าหลัก</h3>
</button>
</form>
</div>
<body>
<div class="container">
    <div class="bg-light text-dark" style="background-color: #1e5670;height: 320px;width: 400px;" >
    <center>
      <div class="jumbotron text-center bg-primary text-white" style="background-color: #91cfc9;">
      <h4>ตรวจสอบ ค้นหารถในช่องจอดรถ</h4></div>
        <form id="addform1">
          <div class="btn-group">
            <select name="lock" class="btn btn-outline-dark  " style="height: 50px;width:200px;">
              <option value=" "selected disabled hidden>ช่องที่</option>
                <option value="A1">A:1</option>
                <option value="A2">A:2</option>
                <option value="A3">A:3</option>
                <option value="A4">A:4</option>
                <option value="A5">A:5</option> 
            </select>

      </div>
          <br>
          <br>
          <input type="text" class="btn btn-danger" placeholder="หมายเลขทะเบียน"  name="License"style="height: 50px;width:200px;" id="License">
          <br>
          <br>
        <div class="btn-group">
        <button type="submit" class="btn btn-primary"style="height: 50px;width:200px;margin-right: 10%;">ค้นหา</button>
        <button type="reset" class="btn btn-danger"style="height: 50px;width:200px;">ล้างข้อมูล</button>
      </div> 
        </form>
      </center>
    </div>
    </center>
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
