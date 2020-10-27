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
<div id="test">
<form id="addform1" action="showsearch.php">
<input type="text" name="License" placeholder="......">
<select name="monthsearch" class="btn btn-outline-success dropdown-toggle" style="height: 50px;width:200px;">
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
<input type="submit" >
</form>
    
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
<script>
   new Vue({
    el:'#test',
    data:{

    },
  });
</Script>
</html>
