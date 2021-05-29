<?php
 session_start();
?>
<html>
  <head>
    <title>AnimFlix</title>
  </head>
  <style>
    body {
      color: white;
      background-color: #1a1940;
        background-image:url('./image/img1.jpg');
        background-size: cover;
        background-position:center;
    }
    img{
    position: fixed;
    size:fill;
    left: 0;
    top: 0;
    height:auto;
    z-index: -1;
    opacity: 0.5;
    }
    nav{
      color:red;
      background-color: black;
      padding :8px;
      margin:-7px;
    }
    .an1{
        text-decoration:none;
        color:red;
    }
  </style>
  <nav><a href="index.php" class="an1">AnimFlix</a></nav>
  <center><body>
      <h1>LOGIN DULU BOSQ</h1>
      <div class="login">
      <form method="post">
			<label for="nama">Nama: </label>
			<input id="nama" name="nama" autocomplete="off" placeholder="isi nama" required/>
			</br></br>
			<label for="passcode">Passcode: </label>
			<input id="passcode" type="text" name="passcode" autocomplete="off" placeholder="1234" required/>
			</br></br>
			<input type="submit" name="submit" value="MASOOK"/>
		</form>
	</div>
</body>
</html>
<?php
  if (isset($_POST['submit'])){
    $code = $_POST['passcode'];

    if ($code==1234){
        
      if(isset($_POST['nama'])){
        $_SESSION['nama']=$_POST['nama'];
      }
      include ('./nama.php');
      header('location:video.php');
    } else{
    echo "invalid passcode</br>";
    echo "hint : 1234";
    }
  }
?>