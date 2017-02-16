<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lorem Ipsum</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<style>
html { background: url(images/flower.png);}

 body {
	margin: auto;
	width:960px;
	background-color: #D8C799;
}
img {
	position: relative;
	left: 9%;	
   }
#Container {
	background-color:#D8C799;
	float:left;
	
   padding: 0px 20px 0 20px;
   -webkit-columns: 210px 2;
   -moz-columns: 210px 2;
        columns: 210px 2;
	padding-right:100px;
	padding-left:100px;
}

/*navigaton bar*/
#navmenu, ul.sub1, ul.sub2 {/*Selects any element with an id attribute that equals navmenu or any ul element with a class attribute that contains the word sub1 or any ul element with a class attribute that contains the word sub2.*/
	list-style-type:none;
	margin:0;
	padding:0;
	
}	
ul#navmenu a{
	text-decoration: none;
	display:block;
	width: 125px;
	height: 25px;
	line-height:25px;
	padding: 5px 0;
	

	
}
ul#navmenu li:hover {
	background-color:#fff;
}
ul#navmenu ul.sub1 {
display:none;
position:absolute;
top:25px;
left:0;
}
ul#navmenu ul.sub2 {
display:none;
position:absolute;
top:0;
left:160px;
}
ul#navmenu li:hover .sub1 {
display:block;
}
ul#navmenu .sub1 li:hover .sub2 {
display:block;
}
a {color:#331100;}
ul#navmenu li {
	text-align:center;
	position: relative;
	float: left;
	padding-left:17.3px;
	padding-right:15px;
	background-color: #D8C799;
	display: inline;
	border: 1px dotted #3a2e1c;
	border-collapse: collapse;
	left: 9%;
}	
.triangleLeft
{
width: 0;
height: 0;
border-style: solid;
border-width: 0 86px 39px 0;
border-color: transparent #947b38 transparent transparent;
position: relative;
right:0px;
top: 237px;

display:block;
}
.triangleRight
{
width: 0;
height: 0;
border-style: solid;
border-width: 39px 80px 0 0;
border-color: #947b38 transparent transparent transparent;
right: 469px;
top: 237px;
display:block;
position: absolute;
}


#sidebar {

width:200px;
 position:relative;
left:50px;
 padding: 0px 0px 20px 20px;
 max-height: 1000px;
 border-radius: 8px;
    border: 1px solid black;
	background-color: #D8C799;
	
	
	}
#sidebar2 {
border: 1px solid black;
left:100px;
width:200px;
 position:relative;
 padding: 20px;
  border-radius: 8px;
 max-height: 600px; 
	background-color: #D8C799;
</style>
<body>
<div class = "adornments">

<span class="triangleLeft"></span>
<span class="triangleRight"></span>
</div>
<div>



<img src ="images/title.png" alt = "Lorem ipsum">



</div>



<div class = "border">
<ul id ="navmenu">
	<li><a href="#">hyperlink 1</a></li> <!--parent nav-->
	<li><a href="#">hyperlink 2</a>
		<ul class="sub1">
			<li><a href="#">hyperlink 2.1</a></li>
			<li><a href="#">hyperlink 2.2</a></li>
			<li><a href="#">hyperlink 2.3</a></li>
		</ul>
	</li>
	<li><a href="#">hyperlink 3</a></li>
	<li><a href="#">hyperlink 4</a>
		<ul class="sub1">
			<li><a href="#">hyperlink 4.1</a></li>
			<li><a href="#">hyperlink 4.2</a></li>
			<li><a href="#">hyperlink 4.3</a>
				<ul class="sub2">
					<li><a href="#">hyperlink 4.3.1</a></li>
					<li><a href="#">hyperlink 4.3.2</a></li>
					<li><a href="#">hyperlink 4.3.3</a></li>
				</ul>
			 </li>
		</ul>
	</li>
	<li><a href="#">hyperlink 5</a></li>
</ul>
</div>
<div id = "Container">
<h1>Lorem ipsum </h1>
<?php echo "$output"; ?>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt iaculis orci ornare convallis. Donec sed interdum magna. Maecenas lobortis tellus ac dignissim vehicula. Nunc sit amet erat posuere, aliquet nulla vestibulum, fringilla ligula. Sed non neque non massa viverra sodales sit amet sed elit. Praesent augue ipsum, aliquet vel nulla eu, viverra laoreet massa. Phasellus ac magna felis.</p>

<p>In sed ligula ac libero posuere pulvinar et auctor ipsum. Nunc ac odio velit. Duis condimentum gravida elementum. Vivamus iaculis augue quam, vitae luctus dolor scelerisque vel. Suspendisse cursus a risus vitae accumsan. Sed commodo pulvinar orci quis aliquet. Etiam viverra justo et ligula viverra viverra. Donec tempus sem tellus, nec laoreet nibh tempus vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras feugiat libero sed erat mollis, quis aliquam felis feugiat. Nam eu consequat lectus.</p>
<div id="sidebar">
<p>Aenean aliquet metus ut ullamcorper bibendum. Phasellus convallis erat quis orci vehicula, nec iaculis dolor blandit. Sed leo quam, vehicula sit amet elit nec, aliquam condimentum enim. Aenean ut purus semper, accumsan nibh at, vulputate sapien.</p>
</div>
<p>Nulla eleifend ex vel orci tristique dapibus. Phasellus sodales aliquet euismod. Cras interdum eros at metus euismod aliquet. Nam vitae varius velit. Duis rutrum felis sed laoreet finibus. Phasellus ullamcorper sem augue, lacinia dictum ligula sodales quis. Morbi vitae finibus nunc. Integer at felis vitae erat bibendum lacinia. Ut hendrerit quam at turpis consequat, sit amet aliquam nulla pharetra. Donec sagittis ultrices nisl, vitae facilisis neque laoreet sit amet. Cras nunc ipsum, bibendum nec libero sit amet, tincidunt ullamcorper ipsum. In pellentesque malesuada tristique. Morbi accumsan mattis ipsum eget tempus. Quisque quam tortor, sodales pellentesque dolor sed, tempor laoreet erat. Fusce ac leo eu dui porttitor imperdiet sed nec metus. Quisque ornare felis ac accumsan aliquet.</p>

<p>Praesent sollicitudin ex eget volutpat pellentesque. Vestibulum tempor sit amet lectus at auctor. Sed quis orci ac elit tempor euismod. Quisque faucibus lectus id nunc condimentum ullamcorper. Donec nec gravida nisl, in egestas odio. Praesent eget pretium felis. Donec dictum, odio eu cursus mattis, urna turpis pellentesque magna, in viverra mauris sapien a ligula. Quisque in cursus massa, et tristique mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam sollicitudin viverra mauris, in vulputate libero pellentesque nec. In blandit eu nisi sit amet tristique. Suspendisse egestas tristique neque, vel tristique nisl volutpat dictum. </p>

<p>Aenean aliquet metus ut ullamcorper bibendum. Phasellus convallis erat quis orci vehicula, nec iaculis dolor blandit. Sed leo quam, vehicula sit amet elit nec, aliquam condimentum enim. Aenean ut purus semper, accumsan nibh at, vulputate sapien. Phasellus tincidunt mauris nec sapien condimentum, at tincidunt ligula ullamcorper. In vehicula, arcu sed placerat malesuada, ligula magna eleifend lectus, at vehicula metus sapien ut elit. Fusce tristique laoreet urna luctus bibendum. Donec sed vulputate eros. Nunc eros est, mattis ac tincidunt eu, euismod eu tellus. Sed varius tellus ut mauris rhoncus semper.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt iaculis orci ornare convallis. Donec sed interdum magna. Maecenas lobortis tellus ac dignissim vehicula. Nunc sit amet erat posuere, aliquet nulla vestibulum, fringilla ligula. Sed non neque non massa viverra sodales sit amet sed elit. Praesent augue ipsum, aliquet vel nulla eu, viverra laoreet massa. Phasellus ac magna felis.</p>
<div id="sidebar2">
<p>Aenean aliquet . Phasellus convallis e, nec iaculis dolor blandit. Sed vehicula sit nec, ut purus semper, accumsan nibh at, vulputate sapien. Phasellus tincidunt mauris nec sapien condimentum, at tincidunt ligula ullamcorper. In vehicula, arcu sed placerat malesuada, ligula magna eleifend lectus. </p>
</div> 
<p>In sed ligula ac libero posuere pulvinar et auctor ipsum. Nunc ac odio velit. Duis condimentum gravida elementum. Vivamus iaculis augue quam, vitae luctus dolor scelerisque vel. Suspendisse cursus a risus vitae accumsan. Sed commodo pulvinar orci quis aliquet. Etiam viverra justo et ligula viverra viverra. Donec tempus sem tellus, nec laoreet nibh tempus vel. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras feugiat libero sed erat mollis, quis aliquam felis feugiat. Nam eu consequat lectus.</p>

<p>Nulla eleifend ex vel orci tristique dapibus. Phasellus sodales aliquet euismod. Cras interdum eros at metus euismod aliquet. Nam vitae varius velit. Duis rutrum felis sed laoreet finibus. Phasellus ullamcorper sem augue, lacinia dictum ligula sodales quis. Morbi vitae finibus nunc. Integer at felis vitae erat bibendum lacinia. Ut hendrerit quam at turpis consequat, sit amet aliquam nulla pharetra. Donec sagittis ultrices nisl, vitae facilisis neque laoreet sit amet. Cras nunc ipsum, bibendum nec libero sit amet, tincidunt ullamcorper ipsum. In pellentesque malesuada tristique. Morbi accumsan mattis ipsum eget tempus. Quisque quam tortor, sodales pellentesque dolor sed, tempor laoreet erat. Fusce ac leo eu dui porttitor imperdiet sed nec metus. Quisque ornare felis ac accumsan aliquet.</p>

<p>Praesent sollicitudin ex eget volutpat pellentesque. Vestibulum tempor sit amet lectus at auctor. Sed quis orci ac elit tempor euismod. Quisque faucibus lectus id nunc condimentum ullamcorper. Donec nec gravida nisl, in egestas odio. Praesent eget pretium felis. Donec dictum, odio eu cursus mattis, urna turpis pellentesque magna, in viverra mauris sapien a ligula. Quisque in cursus massa, et tristique mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam sollicitudin viverra mauris, in vulputate libero pellentesque nec. In blandit eu nisi sit amet tristique. Suspendisse egestas tristique neque, vel tristique nisl volutpat dictum. </p>
</div>

</body>
</html>