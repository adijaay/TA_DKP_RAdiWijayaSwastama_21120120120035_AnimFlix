<?php
require ('./nama.php');
?>
<html>
	<head>
		<title>AnimFlix</title>
	</head>
		<style>
                body {
                    background-color: #1a1940;
                    color: white;
                    background-image:url('./image/img1.jpg');
                    background-size: cover;
                    background-position:center;
                }
                h1 {
                    color: red;
                    position: left;
                }
                nav {
                    color: red;
                    background-color: black;
                    padding: 8px;
        margin: -7px;
			}
      .nama{
        background-color:white;
        font-size: 15px;
        padding: 5px;
        color:red;
        text-transform:uppercase;
      }
      .a1{
            color:white;
            text-decoration:none;
            background-color:red;
            padding:8px;
            font-size:15px;
        }
    .an1{
        text-decoration:none;
        color:red;
    }
		</style>
  <nav><a href="video.php" class="an1">AnimFlix</a></nav>
	<center><body>
		<h3>Selamat datang di AnimFlix, <dev class='nama'><?php echo $jeneng->getNama() ?></dev></h3>
		<form method="post">
			<label for="video">Pilih Video: </label>
			<select id="video" name="idfilm">
				<?php
        $film = array("Fate Trailer", "All Might Rising OVA", "Boruto Movie Trailer" ); 
        for($i=0;$i<=2;$i++)
        echo "<option value=$i> $film[$i] </option>";
        ?>
			</select>
			<input type="submit" name="submitfilm" value="MAINKAN"/>
		</form>
        </br>
        <a href="index.php" class="a1">Keluar</a>
	</body>
</html>
<?php
  if(isset($_POST['submitfilm'])){
  $x = $_POST['idfilm'];
    switch($x){
      case 0:
      header("location:video1.php");
      break;
      case 1:
      header("location:video2.php");
      break;
      case 2:
      header('location:video3.php');
      break;
    }
  }
  ?>