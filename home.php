<!DOCTYPE html>
<html lang="en">
<head>
<title>YouView</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <?php include 'script.php';?>  -->

<link rel="stylesheet" type="text/css" href="home.css">

</head>

<body>

<div class="header">
  <h1>YouView</h1>
  <p>View multiple youtube livestreams at once.</p>
</div>

<!-- <a href='home.php?id=2489&user=tom'>Edit HTML</a> -->

  <div class="main">
  
    <h2 id"meme"> YouView</h2>
	 
  <label for="channelID">Channel ID:</label> 
  <input type="text" id="CID" value="UC4k1Acx6M-9wGSBQFoDft2w" name="CID"><br><br>
  
  <div id="element"></div>
  <button type="button" id="Submit"  onclick="">Submit Channel ID</button>
  
	<script>
	
	var i = 0;	
	var videoID1;
	var videoID2;
	var videoID3;
	var videoID4;
	
	document.getElementById("Submit").addEventListener("click", myClick);

	function myClick() {
		i++;
		
		if ( i == 1) {
			videoID1 = document.getElementById("CID").value;
			document.body.insertAdjacentHTML('beforeEnd', '<iframe id="video1" width="50%" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
			var newID = "https://www.youtube.com/embed/live_stream?channel=";
			var compVid = newID.concat(videoID1);
			video1.src = compVid;
			history.pushState({page: 2}, "title 2", videoID1)
						
			var str_name = 'This+is+a+message+with+spaces';
			decodeURIComponent((str_name + '').replace(/\+/g, '%20'));
		}	

		else if (i == 2) {
			videoID2 = document.getElementById("CID").value;
			document.body.insertAdjacentHTML('beforeEnd', '<iframe id="video2" width="50%" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
			var newID = "https://www.youtube.com/embed/live_stream?channel=";
			var compVid = newID.concat(videoID2);
			video2.src = compVid;
			history.pushState({page: 2}, "title 2", videoID1 + "&" + videoID2)
		}	
		else if (i == 3) {
			videoID3 = document.getElementById("CID").value;
			document.body.insertAdjacentHTML('beforeEnd', '<iframe id="video3" width="50%" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
			var newID = "https://www.youtube.com/embed/live_stream?channel=";
			var compVid = newID.concat(videoID3);
			video3.src = compVid;
			history.pushState({page: 2}, "title 2", videoID1 + "&" + videoID2 + "&" + video3)
		}
		else if (i == 4) {
			videoID4 = document.getElementById("CID").value;
			document.body.insertAdjacentHTML('beforeEnd', '<iframe id="video4" width="50%" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
			var newID = "https://www.youtube.com/embed/live_stream?channel=";
			var compVid = newID.concat(videoID4);
			video4.src = compVid;
			history.pushState({page: 2}, "title 2", videoID1 + "&" + videoID2 + "&" + videoID3 + "&" + videoID4)
		}
} 
	
	</script>
	
</div>


<!-- 
</form> 
	<iframe width="560" height="315" src="https://www.youtube.com/embed/NdEngzCiK6M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
	
	<iframe width="560" height="315" src="https://www.youtube.com/embed/live_stream?channel=UCpnkOZVAhQDiy_eWcktdMFQ" frameborder="0" allowfullscreen></iframe>

  </div>
</div>
-->

</body>
</html>
