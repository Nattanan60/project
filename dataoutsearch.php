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
    <title>ตรวจสอบ วัน-เวลารถออกทั้งหมด</title>
</head>
<div class="jumbotron text-center" style="background-color: #4198b9;height: 205px;">
  <h1 style="color: aliceblue;">ตรวจสอบ วัน-เวลารถออกทั้งหมด</h1>
  <p style="color: black;">ระบบบริหารการจัดการจอดรถมอเตอร์ไซค์อัจฉริยะกรณีศึกษาที่จอดรถมอเตอร์ไซค์มหาวิทยาลัยพะเยา</p> 
  <form action="main.html">
<button type="submit" class="btn btn-primary"  ><h3>กลับสู่หน้าหลัก</h3>
</button>
</form>
</div>
<body>
<div class="container">
<center>   
<div class="" style="background-color: #4198b9;height: 550px;width: 600px;" >
      <center>
      <div class="jumbotron text-center" style="background-color: #91cfc9;">
      <h3 style="color: blue;">ตรวจสอบ วัน-เวลารถออกทั้งหมด</h3></div>
        <form action="dataout.php" id="addform1" method="GET">
          
          <div class="btn-group">
          <select name="date" class="btn  btn-outline-secondary dropdown-toggle" style="height: 50px;width:200px;margin-right: 10%;background-color: #ABBDEE;">
            
            <option value=""selected disabled hidden>วันที่</option>
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
        
          
         
          <select name="month" class="btn btn-outline-secondary dropdown-toggle" style="height: 50px;width:200px;background-color: #ABBDEE;">
            <option value=""selected disabled hidden>เดือน</option>
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
      </div>
          <br>
          <br>
          <br>

          <div class="btn-group">
          <select name="year" class="btn btn-outline-secondary dropdown-toggle" style="height: 50px;width:200px;margin-right: 10%;background-color: #ABBDEE;">
            <option value=""selected disabled hidden>ปี</option>
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
        <br>
        <select name="date" class="btn btn-outline-secondary dropdown-toggle" style="height: 50px;width:200px;background-color: #ABBDEE;">
          <option value=""selected disabled hidden>ช่วงเวลา</option>
          
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
      </select>
    </div>
    <br>
    <br>
    <input type="text" class="btn btn-outline-secondary" placeholder="หมายเลขทะเบียน" name="License"style="height: 50px;width:200px;background-color: #ABBDEE;">
    <br>
    <br>
    <div class="btn-group">
    <button type="submit" class="btn btn-primary"style="height: 50px;width:200px;margin-right: 10%;">ค้นหา</button>
    <button type="reset" class="btn btn-danger"style="height: 50px;width:200px;">ล้างข้อมูล</button>
  </div> 
  </form>
  </div>
    </form>
  </center>
</div>
    </center>
</body>
</html>
