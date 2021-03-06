<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
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
    var data1 = "";
    var data2 = "";
    db.collection("ganeQRout")
      .onSnapshot(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
          ('<p>' + doc.data().License.province + '</p>')
          data1 = doc.data().License;
          data2 = doc.data().province;
          console.log(data1, data2);
          window.location.href = "qrout.php?name="+data1;
        });
      });
  </script>
</body>

</html>