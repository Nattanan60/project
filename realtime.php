<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

  <title>ลานจอดรถมหาวิทยาลัยพะเยา</title>
</head>

<body style="background-color: #cde8f3;">
  <div class="jumbotron text-center" style="background-color: #4198b9;height: 220px;">
    <h1 style="color: aliceblue;">ลานจอดรถมหาวิทยาลัยพะเยา</h1>
    <p style="color: rgb(33, 68, 99);">ระบบบริหารการจัดการจอดรถมอเตอร์ไซค์อัจฉริยะกรณีศึกษาที่จอดรถมอเตอร์ไซค์มหาวิทยาลัยพะเยา</p>
    <form action="main.html">
      <button type="submit" class="btn btn-primary">
        <h3>กลับสู่หน้าหลัก</h3>
      </button>
    </form>
  </div>
  <div id="vue-app">

    <div class="container-fluid  p-3 my-3 bg-dark">
      <div class="row">
        <div class="col-500" style="background-color:#f3fafa;height: 350px;">
          <div class="jumbotron text-center bg-primary text-white">
            <h3>จำนวนรถทั้งหมด</h3>
          </div>
          <div class="jumbotron text-center" style="background-color: rgb(138, 39, 0);">
            <h1 style="color: aliceblue;">{{total}}</h1>
          </div>
        </div>
        <div class="col-sm-2" style="background-color:#f3fafa;height: 350px;">
          <div class="jumbotron text-center bg-primary text-white" style="background-color: #91cfc9;">
            <h4>ช่องจอดรถA:1</h4>
          </div>
          <div class="jumbotron text-center" style="background-color: rgb(138, 39, 0);">
            <h1 id='' style="color: aliceblue;">{{A1}}</h1>
          </div>
        </div>

        <div class="col-sm-2" style="background-color:#f3fafa;height: 350px;">
          <div class="jumbotron text-center bg-primary text-white" style="background-color: #91cfc9;">
            <h4>ช่องจอดรถA:2</h4>
          </div>
          <div class="jumbotron text-center" style="background-color: rgb(138, 39, 0);">
            <h1 id='' style="color: aliceblue;">{{A2}}</h1>
          </div>
        </div>

        <div class="col-sm-2" style="background-color:#f3fafa;height: 350px;">
          <div class="jumbotron text-center bg-primary text-white" style="background-color: #91cfc9;">
            <h4>ช่องจอดรถA:3</h4>
          </div>
          <div class="jumbotron text-center" style="background-color: rgb(138, 39, 0);">
            <h1 id='' style="color: aliceblue;">{{A3}}</h1>
          </div>
        </div>

        <div class="col-sm-2" style="background-color:#f3fafa;height: 350px;">
          <div class="jumbotron text-center bg-primary text-white" style="background-color: #91cfc9;">
            <h4>ช่องจอดรถA:4</h4>
          </div>
          <div class="jumbotron text-center" style="background-color: rgb(138, 39, 0);">
            <h1 id='' style="color: aliceblue;">{{A4}}</h1>
          </div>
        </div>

        <div class="col-sm-2" style="background-color:#f3fafa;height: 350px;">
          <div class="jumbotron text-center bg-primary text-white" style="background-color: #91cfc9;">
            <h4>ช่องจอดรถA:5</h4>
          </div>
          <div class="jumbotron text-center" style="background-color: rgb(138, 39, 0);">
            <h1 id='' style="color: aliceblue;">{{A5}}</h1>
          </div>
        </div>
      </div>
    </div>
    </center>
  </div>
  </div>
  </div>
  </div>
  </div>
</body>

</html>

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

  firebase.initializeApp(firebaseConfig);
  var db = firebase.firestore();
  var array = [];
  var count = [];
  var A1="";
  var A2="";
  var A3="";
  var A4="";
  var A5="";
  db.collection("CheckinQR").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
      array = [doc.id]
      count.push(Number)
      console.log(array);
    });
    db.collection("Parking").get().then(function(querySnapshot) {
      querySnapshot.forEach(function(doc) {
        A1=(doc.data().A1);
        A2=(doc.data().A2);
        A3=(doc.data().A3);
        A4=(doc.data().A4);
        A5=(doc.data().A5);
console.log(A2);
      })
  

    new Vue({
      el: "#vue-app",
      data: {
        total: "" + count.length,
        A1:"" + A1 ,
        A2:"" + A2 ,
        A3:"" + A3 ,
        A4:"" + A4 ,
        A5:"" + A5 ,

      }
    }) 
   });
  });
</script>