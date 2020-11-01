<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <title>ตรวจสอบ วัน-เวลารถเข้าทั้งหมด</title>
</head>
<div class="jumbotron text-center" style="background-color: #4198b9;height: 205px;">
  <h1 style="color: aliceblue;">ตรวจสอบ วัน-เวลารถเข้าทั้งหมด</h1>
  <p style="color: black;">ระบบบริหารการจัดการจอดรถมอเตอร์ไซค์อัจฉริยะกรณีศึกษาที่จอดรถมอเตอร์ไซค์มหาวิทยาลัยพะเยา</p>
  <form action="main.html">
    <button type="submit" class="btn btn-primary">
      <h3>กลับสู่หน้าหลัก</h3>
    </button>
  </form>
</div>

<body>
  <div class="container" style="width: 50%;">
    <center>

      <div class="" style="background-color: #028090;">
        <center>
          <div class="jumbotron text-center" style="background-color: #456990;">
            <h3 style="color: white;">ตรวจสอบ วัน-เวลารถเข้าทั้งหมด</h3>
          </div>

          <form id="addform1" method="GET" action="datain.php">
            <p style="font-size: 14px; color: #91cfc9;">
              <input type="radio" id="showall" name="check" checked value="all">
              ค้นหาทั้งหมด
              <input type="radio" id="checkdate" name="check">
              ค้นหาจาก ว/ด/ป
              <input type="radio" id="checktime" name="check">
              ค้นหาจากช่วงเวลา
              <input type="radio" id="checklicens" name="check">
              ค้นหาจากป้ายทะเบียน</p>


            <br>
            <div class="btn-group" id="datesearch">
              <div class="input-group-prepend">
                <span class="input-group-text" style="font-size: medium;background-color: #073b4c;color: white;">วันที่:</span>
              </div>
              <select name="day" class="btn  btn-outline-secondary dropdown-toggle" style="height: 50px;width:150px;margin-right: 1%;font-size: medium;color: white;background-color: #028090;">
                <option value="">วันที่</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
              </select>
              <div class="input-group-prepend">
                <span class="input-group-text" style="font-size: medium;background-color: #073b4c;color: white;">เดือน:</span>
              </div>
              <select name="month" class="btn btn-outline-secondary dropdown-toggle" style="height: 50px;width:150px;margin-right: 1%;font-size: medium;color: white;background-color: #028090;">
                <option value="">เดือน</option>
                <option value="มกราคม">มกราคม</option>
                <option value="กุมภาพันธ์">กุมภาพันธ์</option>
                <option value="มีนาคม">มีนาคม</option>
                <option value="เมษายน">เมษายน</option>
                <option value="พฤษภาคม">พฤษภาคม</option>
                <option value="มิถุนายน">มิถุนายน</option>
                <option value="กรกฏาคม">กรกฏาคม</option>
                <option value="สิงหาคม">สิงหาคม</option>
                <option value="กันยายน">กันยายน</option>
                <option value="ตุลาคม">ตุลาคม</option>
                <option value="พฤศจิกายน">พฤศจิกายน</option>
                <option value="ธันวาคม">ธันวาคม</option>
              </select>
              <div class="input-group-prepend">
                <span class="input-group-text" style="font-size: medium;background-color: #073b4c;color: white;">ปี:</span>
              </div>
              <select name="year" class="btn btn-outline-secondary dropdown-toggle" style="height: 50px;width:150px;margin-right: 1%;font-size: medium;color: white;background-color: #028090;">
                <option value="">ปี</option>
                <option value="2563">2563</option>
                <option value="2564">2564</option>
                <option value="2565">2565</option>
                <option value="2566">2566</option>
                <option value="2567">2567</option>
                <option value="2568">2568</option>
                <option value="2569">2569</option>
                <option value="2570">2570</option>
                <option value="2571">2571</option>
                <option value="2572">2572</option>
                <option value="2573">2573</option>
                <option value="2574">2574</option>
                <option value="2575">2575</option>
                <option value="2576">2576</option>
                <option value="2577">2577</option>
                <option value="2578">2578</option>
                <option value="2579">2579</option>
                <option value="2580">2580</option>
              </select>
            </div>

            <div class="btn-group" id="timesearch">
              <div class="input-group-prepend">
                <span class="input-group-text" style="font-size: medium;background-color: #073b4c;color: white;">เวลาเริ่มตั้งแต่:</span>
              </div>
              <select name="datestart" class="btn btn-outline-secondary dropdown-toggle" style="font-size: medium;height: 50px;width:200px;margin-right: 1%;color: white;background-color: #028090;">
                <option value="">ช่วงเวลา</option>

                <option value="0:00">0:00</option>
                <option value="1:30">1:30</option>
                <option value="2:00">2:00</option>
                <option value="2:30">2:30</option>
                <option value="3:00">3:00</option>
                <option value="3:30">3:30</option>
                <option value="4:00">4:00</option>
                <option value="4:30">4:30</option>
                <option value="5:00">5:00</option>
                <option value="5:30">5:30</option>
                <option value="6:00">6:00</option>
                <option value="6:30">6:30</option>
                <option value="7:00">7:00</option>
                <option value="7:30">7:30</option>
                <option value="8:00">8:00</option>
                <option value="8:30">8:30</option>
                <option value="9:00">9:00</option>
                <option value="9:30">9:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                <option value="15:00">15:00</option>
                <option value="15:30">15:30</option>
                <option value="16:00">16:00</option>
                <option value="16:30">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
                <option value="18:00">18:00</option>
                <option value="18:30">18:30</option>
                <option value="19:00">19:00</option>
                <option value="19:30">19:30</option>
                <option value="20:00">20:00</option>
                <option value="21:30">21:30</option>
                <option value="22:00">22:00</option>
                <option value="23:30">23:30</option>

              </select>
              <div class="input-group-prepend">
                <span class="input-group-text" style="font-size: medium;background-color: #073b4c;color: white;">จนถึง:</span>
              </div>
              <select name="datestop" class="btn btn-outline-secondary dropdown-toggle" style="font-size: medium;height: 50px;width:200px;color: white; background-color: #028090;">
                <option value="">ช่วงเวลา</option>

                <option value="0:00">0:00</option>
                <option value="1:30">1:30</option>
                <option value="2:00">2:00</option>
                <option value="2:30">2:30</option>
                <option value="3:00">3:00</option>
                <option value="3:30">3:30</option>
                <option value="4:00">4:00</option>
                <option value="4:30">4:30</option>
                <option value="5:00">5:00</option>
                <option value="5:30">5:30</option>
                <option value="6:00">6:00</option>
                <option value="6:30">6:30</option>
                <option value="7:00">7:00</option>
                <option value="7:30">7:30</option>
                <option value="8:00">8:00</option>
                <option value="8:30">8:30</option>
                <option value="9:00">9:00</option>
                <option value="9:30">9:30</option>
                <option value="10:00">10:00</option>
                <option value="10:30">10:30</option>
                <option value="11:00">11:00</option>
                <option value="11:30">11:30</option>
                <option value="12:00">12:00</option>
                <option value="12:30">12:30</option>
                <option value="13:00">13:00</option>
                <option value="13:30">13:30</option>
                <option value="14:00">14:00</option>
                <option value="14:30">14:30</option>
                <option value="15:00">15:00</option>
                <option value="15:30">15:30</option>
                <option value="16:00">16:00</option>
                <option value="16:30">16:30</option>
                <option value="17:00">17:00</option>
                <option value="17:30">17:30</option>
                <option value="18:00">18:00</option>
                <option value="18:30">18:30</option>
                <option value="19:00">19:00</option>
                <option value="19:30">19:30</option>
                <option value="20:00">20:00</option>
                <option value="21:30">21:30</option>
                <option value="22:00">22:00</option>
                <option value="23:30">23:30</option>

              </select>
            </div>

            <div class="btn-group" id="licensesearch">
              <div class="input-group-prepend">
                <span class="input-group-text" style="font-size: medium;background-color: #073b4c;color: white;">หมายเลขทะเบียน:</span>
              </div>
              <input type="text" class="btn btn-outline-info" placeholder="หมายเลขทะเบียน" name="License" style="height: 50px;width:200px; font-size: medium; color: white; " id="License">
            </div>
            <br>
            <div class="btn-group" style="margin-top: 20px;">
              <button type="submit" class="btn btn-primary" style="height: 50px;width:200px;margin-right: 10%; margin-bottom: 10%;">ค้นหา</button>
              <button type="reset" class="btn btn-danger" style="height: 50px;width:200px;" id="btn">ล้างข้อมูล</button>
            </div>
          </form>
        </center>
      </div>

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
<script src="add.js" charset="utf-8"></script>

</html>