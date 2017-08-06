<!DOCTYPE html>
<html>
    <?php     session_start();
?>
<head>
	<title>Hedwig</title>
	<link rel="stylesheet" type="text/css" href="css/indexcss.css">
    <script src="js/home.js"></script>    
        <script>
            setInterval(function(){ajax()}, 800);
            function myFunction(ff) {
                alert(ff.id+"home.php");
                document.getElementById(ff.id).click(); // Click on the checkbox
            }
        </script> 
</head>
<body onload="ajax();">
	<div id="mySidenav" class="sidenav">
		<div>
			<div id="myCountry">
				<div id="myCountryDp">
					<img style='height: 6vh ; width: 10vh' src="res/ic_notifications_active.png">
				</div>
				<div id="myCountryName">
					<div id="enterSenderNameHere">Democratic People's Republic of Korea</div>
				</div>
			</div>
			<hr>
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		</div>
		<a href=".\gsl.html">General Speaker List</a>
		<a href=".\moderated_caucus.html">Moderated Caucus</a>
		<a href=".\resources.html">Resources</a>
		<a href="#">Logout</a>
	</div>
	<div id="navigationPane">
		<div id="tab1">
			<div id="hamburger">
				<img style='height: 4vh ; width: 4vh' onclick="openNav()" src="res/ic_menu.png" title="Options">
			</div>
			<div id="notification">
				<img style='height: 4vh ; width: 4vh' src="res/ic_notifications.png" title="Notifications">
			</div>
			<div id="countrylist">
				<img style='height: 4vh ; width: 4vh' src="res/ic_chat.png" title="Country List">
			</div>
		</div>
		<div id="countrylistArea">
			         <?php
            $myusername=$_SESSION["username"];
            $host="localhost";
            $user="root";
            $pass="";
            $db_name="hedwigbeta";
            $con=new mysqli($host,$user,$pass,$db_name);
            $qry = "SELECT country FROM login WHERE NOT (country = '$myusername')";
            $res = mysqli_query($con, $qry);
            if(mysqli_num_rows($res)>0){

                while($row0=mysqli_fetch_assoc($res)){
                    echo "<input class='countries_l' type='submit' value='" . $row0['country'] . "' id='".$row0['country']."' onclick='post(this.value)'  >" ;
                    echo "<br>";
                }
            }
        ?>
		</div>
	</div>
	<div id="messagePane">
		<div id="tab2">
			<div id="countryDp">
				<img style='height: 6vh ; width: 10vh' src="res/ic_notifications_active.png">
			</div>
			<div id="countryName">
				<div id="enterRecieverNameHere">Democratic People's Republic of Korea</div>
			</div>
		</div>
		<div id="messagesArea">
		All of my messages come here! This scrolls too!
		</div>
		<div id="inputArea">
			<textarea id="msg">Messages are entered here.</textarea>
			<div id="sendOptions">
				<div id="viaEbOption"><input type="checkbox" name="viaEb" id="veb">Via EB</div>
				<img id="sendit" src="res/ic_send.png" title="Send" onclick='sub()'>
			</div>
		</div>
	</div>
	<script language="JavaScript" src="js/ui.js"></script>
</body>
</html>