function do_html_header($title) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title><?php echo $title</title><style type="text/css"><!--body {	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;	margin: 0;	padding: 0;}/* ~~ Element/tag selectors ~~ */h1, h2, h3, h4, h5, h6, p {	margin-top: 0;		padding-right: 15px;	padding-left: 15px; }h4 {	background-image:}a img { 	border: none;	margin：10px 10px 10px 0;}   a:link { color: #259; }   a:visited { color: #769; }   a:hover { color: #fff; }   a:active { color: #fff; }.container {	width: 80%;	max-width: 1260px;/* a max-width may be desirable to keep this layout from getting too wide on a large monitor. This keeps line length more readable. IE6 does not respect this declaration. */	min-width: 780px;/* a min-width may be desirable to keep this layout from getting too narrow. This keeps line length more readable in the side columns. IE6 does not respect this declaration. */	background-color:;	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout. It is not needed if you set the .container's width to 100%. */}.header {	color: #FFF;	height:40px;	FILTER: progid:DXImageTransform.Microsoft.gradient(GradientType=1,startColorstr='#353535', endColorstr='#1e1e1e');/*ie*/ 	background:-webkit-gradient(linear,0 0,0 bottom,from(#353535),to(#1e1e1e));/*  Webkit */    background:-moz-linear-gradient(top,#353535,#1e1e1e);/*  Mozilla */	line-height:40px;	}.footer {	width: 80%;	padding: 10px 0;	text-align:center;	color:white;	background-color: black;	position: relative;	clear:both;	margin: 0 auto;	}.sidebar1 {	width: 30%;	background-color:;	padding-bottom: 10px;	margin-left:70px;	float:right;}.content {	padding: 10px 0;	width: 60%;	float: right;}#photo {	float:left;	margin:10px 10px 10px 0;}.book_ul{	margin-top:30px;}--></style></head><body>  <div class="header"><a href="#"><img src="http://www.douban.com/" alt="Insert Logo Here" name="Insert_logo" width="20%" height="90" id="Insert_logo" align="left"/></a>   <h1>bookhacker</h1>  <hr />    <?php       if($title) {       do_html_heading($title);       }}function do_html_heading($heading)?>   <h2><?php echo $heading;?></h2><?php}function display_site_info()?>    <ul>    <li>Store your booklists online with us!</li>    <li>See what other users booklist.</ul>    <li>You are what you read </li>    <ul><?php}function get_booklists()?>    $conn = db_connect();    $query = " select username,name form booklist";    $result = @ $conn -> query($query);    if(!$result)        return false;    }        $num_result = $result ->num_rows;        echo "<p>Number of booklist created :".$num_results."</p>"        for($i=0; $i<$num_results;$i++) {        $row = $result->fetch_assoc();        echo "<p><strong>".($i+1).".Name: ";        echo htmlspecialchars(stripslashes(row['name']));        echo "</p></srong>";    }    $name;    $book_quantity;    $description;    $title;    $author;do_html_footer()