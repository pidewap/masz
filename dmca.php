<head><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></head><?php include 'configure.php';$title = "DMCA - $home_title";$description = "DMCA - $home_des"; include 'inc/header.php'; echo'<div class="maincontener"><center> <div class="topnav" id="myTopnav">  <a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/pop.html"><i class="fa fa-music" aria-hidden="true"></i> Pop</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/blues.html"><i class="fa fa-music" aria-hidden="true"></i> Blues</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/rock.html"><i class="fa fa-music" aria-hidden="true"></i> Rock</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/reggae.html"><i class="fa fa-music" aria-hidden="true"></i> Reggae</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/hiphop.html"><i class="fa fa-music" aria-hidden="true"></i> Hip-Hop</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/dmca.html"><i class="fa fa-copyright" aria-hidden="true"></i> DMCA</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/privacy.html"><i class="fa fa-eye" aria-hidden="true"></i> Privacy</a>  <a href="//'.$_SERVER['HTTP_HOST'].'/contact.html"><i class="fa fa-envelope-o" aria-hidden="true"></i> Contact</a>  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a></div> <script> function myFunction() {    var x = document.getElementById("myTopnav");    if (x.className === "topnav") {        x.className += " responsive";    } else {        x.className = "topnav";    } } </script><br/>'; include 'ads/728.php'; echo '<div class="item">   <center><h2>DIGITAL MILLENNIUM COPYRIGHTS ACT (DMCA)</h2></center> </div> <div style="text-align: left;padding-left: 20px;padding-right: 20px;">
<h3>DMCA：</h3>
<p>If you think there is any problem with the video and you want to remove the video please report to <a href="https://www.youtube.com/reportabuse" target="_blank">Youtube</a>. We do not host any content in our website. Everything is served by <a href="https://www.youtube.com/reportabuse" target="_blank">Youtube</a> and data provide via Youtube API v3.</p>
<p>We only provide the search results derived from the Youtube API v3</p>
<p>But we respect you concerns and if you want your videos to be removed from our website search result listing please use <a href="contact.html">contact form</a> to send us message.</p>
<p>You may also send the email to admin@sby.gdn for faster processing.</p>
<p>After receiving the request, we will remove the search results as soon as possible.</p>
<br>
<h3>Disclaimer:</h3>
<p>All the content posted here is provided by Youtube using Youtube API v3.</p>
<p>We do not hold any copyright of the content posted here. No file is hosted on the server of SBY.GDN. All material is served from the Youtube Server</p>
<p>Youtube is the registered trademark of Youtube LLC, a subsidiary of Google.</p>
<p>This website does NOT anything to do with Google Inc, vimeo, metacafe, dailymotion. Every trade marks are property of his owners. All videos are hosted on external servers, we use this API from Youtube to display videos. We simply provide a service to download videos to your computer for free. Dailymotion, Megavideo, Metacafe, Vimeo and Youtube videos are not hosted on SBY.GDN. We don`t condone use of the site to download copyrighted material without consent.</p>
</div> ';
?> <hr/><h3>Resent Search :</h3></center><div class="lr"><?php function limit_words($string, $word_limit)	{	$words = explode(" ", $string);	return implode(" ", array_splice($words, 0, $word_limit));	} $text = file_get_contents("data/history_search.txt", NULL);$text = explode('[s]:', $text); foreach($text as & $value)	{	$value = rtrim($value);	} $out = array_slice($text, -50);$out = array_reverse($out);$out = array_unique($out);$latest = ""; foreach($out as $value) 	{	$latest.= '<a href="'; $value1 = str_replace(" ", "-", $value);	$value = strtolower($value);	$latest.= "/video/$value";	$value1 = str_replace("-", " ", $value);	$value1 = strtolower($value1);	$value1 = limit_words('' . $value1 . '', 5);	$latest.= "\"> " . ucwords($value1) . "</a> <font size='4'>|</font> ";} echo "$latest";  echo'</div>'; include 'ads/728b.php'; echo' <center> <h3>Song by Country Downloader</h3> <a href="/video/Lagu-indonesia-baru">Indonesian</a> | <a href="/video/New-VEVO">English</a> | <a href="/video/New-Bangla">Bangla</a> | <a href="/video/New-Hindi-Songs">Hindi</a> | <a href="/video/Latest-Malayalam">Malayalam</a> | <a href="/video/Latest-Haryanvi">Haryanvi</a> | <a href="/video/%E6%96%B0%E4%B8%AD%E5%9C%8B%E4%BA%BA">Chinese</a> |                 <a href="/video/New-Arabic-Songs">Arabic</a> | <a href="/video/New-Filipino-Songs">Filipino</a> | <a href="/video/Neue-Lieder">Deutsche</a> | <a href="/video/Neues-Deutsch">German</a> | <a href="/video/New-Latin-Songs">Latin</a> | <a href="/video/Latest-Punjabi-Songs">Punjabi</a> | <a href="/video/Novas-Musicas">Portuguese</a> | <a href="/video/%E0%B9%80%E0%B8%9E%E0%B8%A5%E0%B8%87%E0%B9%83%E0%B8%AB%E0%B8%A1%E0%B9%88">Thai</a> | <a href="/video/New-Japanese">Japanese</a> | <a href="/video/New-Russian">Russian</a> | <a href="/video/Latest-Nollywood">Nigerian</a> | <a href="/video/Những-bài-hát-tiếng-Việt-mới">Vietnamese</a> | <a href="/video/Nouvelles-chansons">French</a> | <a href="/video/Latest-Persian-Songs">Persian</a> | <a href="/video/Son-Türk-Şarkılar">Turkish</a> | <a href="/video/Nuove-canzoni-italiane">Italian</a> | <a href="/video/Latest-Egyptian-Songs">Egyptian</a> | <a href="/video/New-South-Indian-Movie">South Indian Movie</a> | <a href="/video/New-South-Indian">South Indian Songs</a><br/><br/></center><br>'; echo'</div>'; include 'inc/foot.php'; ?>