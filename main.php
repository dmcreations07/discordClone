<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Mainstyle.css">
		<link rel="stylesheet" type="text/css" href="1HEADER.css">

	<title>DISCORD | Your Place to Talk and Hang out</title>
</head>
<body>
<div class="container">
<?php 
include("1HEADER.php");
?>
	<div class="MainPage">
		<div class="heading">
			<h1>imagine a place...</h1>
				<br>
					<div class="textUnderHeading">
						...where you can belong to a school club, a gaming group, or a worldwide art community. <br> Where just you and a handful of friends can spend time together. A place that makes it easy <br> to talk every day and hang out more often.
					</div>
						<div class="Btn">
							<button class="btn downloadWindows"><svg width="24" height="24" viewBox="0 0 24 24" class="icon-nuGd5b"><g fill="currentColor"><path d="M17.707 10.708L16.293 9.29398L13 12.587V2.00098H11V12.587L7.70697 9.29398L6.29297 10.708L12 16.415L17.707 10.708Z"></path><path d="M18 18.001V20.001H6V18.001H4V20.001C4 21.103 4.897 22.001 6 22.001H18C19.104 22.001 20 21.103 20 20.001V18.001H18Z"></path></g></svg>Download for Windows</button>
							<button class="openInBrowser">Open Discord in your browser</button>
							<input type="text" placeholder="Enter a username" class="browserUsername"/>
						</div>
						<p class="termsText">By registering, you agree to Discord's <a class="termsLink" href="#">Terms of Service</a> and <a class="termsLink" href="#">Privacy Policy</a></p>
						
		</div>
			
	</div>
</div>

<script>
	let btnWindows = document.querySelector(".btn");
	let btnBrowser = document.querySelector(".openInBrowser");
	let btnBrowserUsername = document.querySelector(".browserUsername");
	let termsText = document.querySelector(".termsText");
	btnBrowserUsername.style.visibilty = "hidden";
	btnBrowserUsername.style.display = "none";
	termsText.style.display = "none";
	termsText.style.visibilty = "hidden";
	btnBrowser.addEventListener("click",function(){
		btnBrowser.style.display = "none";
		btnBrowser.style.visibilty = "hidden";
		btnWindows.style.display = "none";
		btnWindows.style.visibilty = "hidden";
		btnBrowserUsername.style.display = "block";
		btnBrowserUsername.style.visibilty = "visible";
		termsText.style.display = "block";
		termsText.style.visibilty = "visible";
	});
</script>
</body>
</html>