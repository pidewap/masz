<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></head> <?php include 'configure.php';$title = "Hip-Hop/Rap - Music Downloads - $home_title";$description = "$hiphop_des";include 'inc/header.php'; echo'<div class="maincontener"><center> <div class="topnav" id="myTopnav">  <a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/pop.html"><i class="fa fa-music" aria-hidden="true"></i> Pop</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/blues.html"><i class="fa fa-music" aria-hidden="true"></i> Blues</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/rock.html"><i class="fa fa-music" aria-hidden="true"></i> Rock</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/reggae.html"><i class="fa fa-music" aria-hidden="true"></i> Reggae</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/hiphop.html"><i class="fa fa-music" aria-hidden="true"></i> Hip-Hop</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/dmca.html"><i class="fa fa-copyright" aria-hidden="true"></i> DMCA</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/privacy.html"><i class="fa fa-eye" aria-hidden="true"></i> Privacy</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/contact.html"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact</a>  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></div> <script>function myFunction() {    var x = document.getElementById("myTopnav");    if (x.className === "topnav") {        x.className += " responsive";    } else {        x.className = "topnav";    } } </script><br/>'; include 'ads/728.php'; echo '<div class="item">   <center><h2>Hip-Hop/Rap - Music Downloads</h2></center>';   $crul = "xml"; $string = file_get_contents('https://itunes.apple.com/'.$home_trand.'/rss/topsongs/limit=60/genre=18/explicit=true/'.$crul.'');  $string = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $string);  $xml = simplexml_load_string($string);  $rssresults = '';  $count = 1;  $max = 101;   foreach($xml->entry as $val)  	{   	if ($count < $max)   { 	$musicid = $val->id; 		$musicid = str_replace("/id/", "xxx", $musicid);   		$musicid = explode('/id', $musicid); 	$musicid = explode('?', $musicid[1]);  	$cover = $val->imimage[1];  		$musictitle = $val->imname; $musicartist = $val->imartist; $maint = $musictitle . ' ' . $musicartist; 		$maint = str_replace('(From', '<br />( ', $maint);		$maint = str_replace('"', ' ', $maint);		$maint = str_replace('(', ' ', $maint); 		$maint = str_replace(')', ' ', $maint);		$hanap = $musictitle . ' ' . $musicartist; 			$hanap = str_replace('(From', '', $hanap); 		$hanap = str_replace(' ', '-', $hanap);		$hanap = str_replace('--', '', $hanap);		$rssresults.= ' 	  <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3"> <a href="/video/' . $hanap . '">	<div class="item2">			<div class="artwork">	<img  src="' . $cover . '"  height="65" width="65"></div>	<div class="meta"><ctextt><font color="black"><textt> ' . $maint . '</textt></font><div class="publisher"></div></div></div></a></div>'; 		 }  	$count++;   	}   echo $rssresults;    echo'</div> '; ?> <hr/><h3>Resent Search :</h3></center><div class="lr"><?php function limit_words($string, $word_limit)	{	$words = explode(" ", $string);	return implode(" ", array_splice($words, 0, $word_limit));	} $text = file_get_contents("data/history_search.txt", NULL);$text = explode('[s]:', $text); foreach($text as & $value)	{	$value = rtrim($value);	} $out = array_slice($text, -50);$out = array_reverse($out);$out = array_unique($out);$latest = ""; foreach($out as $value) 	{	$latest.= '<a href="'; $value1 = str_replace(" ", "-", $value);	$value = strtolower($value);	$latest.= "/video/$value";	$value1 = str_replace("-", " ", $value);	$value1 = strtolower($value1);	$value1 = limit_words('' . $value1 . '', 5);	$latest.= "\"> " . ucwords($value1) . "</a> <font size='4'>|</font> ";} echo "$latest";  echo'</div><hr>'; include 'ads/728b.php'; echo'<hr><center><h3>Song by Country Downloader</h3> <a href="/video/Lagu-indonesia-baru">Indonesian</a> | <a href="/video/New-VEVO">English</a> | <a href="/video/New-Bangla">Bangla</a> | <a href="/video/New-Hindi-Songs">Hindi</a> | <a href="/video/Latest-Malayalam">Malayalam</a> | <a href="/video/Latest-Haryanvi">Haryanvi</a> | <a href="/video/%E6%96%B0%E4%B8%AD%E5%9C%8B%E4%BA%BA">Chinese</a> |                <a href="/video/New-Arabic-Songs">Arabic</a> | <a href="/video/New-Filipino-Songs">Filipino</a> | <a href="/video/Neue-Lieder">Deutsche</a> | <a href="/video/Neues-Deutsch">German</a> | <a href="/video/New-Latin-Songs">Latin</a> | <a href="/video/Latest-Punjabi-Songs">Punjabi</a> | <a href="/video/Novas-Musicas">Portuguese</a> | <a href="/video/%E0%B9%80%E0%B8%9E%E0%B8%A5%E0%B8%87%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88">Thai</a> | <a href="/video/New-Japanese">Japanese</a> | <a href="/video/New-Russian">Russian</a> | <a href="/video/Latest-Nollywood">Nigerian</a> | <a href="/video/Những-bài-hát-tiếng-Việt-mới">Vietnamese</a> | <a href="/video/Nouvelles-chansons">French</a> | <a href="/video/Latest-Persian-Songs">Persian</a> | <a href="/video/Son-Türk-Şarkılar">Turkish</a> | <a href="/video/Nuove-canzoni-italiane">Italian</a> | <a href="/video/Latest-Egyptian-Songs">Egyptian</a> | <a href="/video/New-South-Indian-Movie">South Indian Movie</a> | <a href="/video/New-South-Indian">South Indian Songs</a><br/><br/></center><br>'; echo'</div>'; include 'inc/foot.php';
?>