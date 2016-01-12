<!doctype html>
<?php
require_once("include/auth.php")
?>

        <?php 
include("include/dbconnection.php");
$result = mysql_query("SELECT * FROM activity  ORDER BY datemake")  
        or die (mysql_error());  
     
        while ($row = mysql_fetch_assoc($result)) { 
            echo '<h1><a href=activities.php?activityid='.$row['activity_id'].'>'.$row['activity_name'] . '</a></h1>'; 
        } 
?>
<html>
<head>
<meta charset="utf-8">
<title>map</title>
</head>

<body>
<!--div class="insidecontent"-->
  <div>
    <nav>
      <p><img src="img/golden hills final FINAL.PNG" alt="map" width="1046" height="608" usemap="#phase2a"/>
        <map name="phase2a" id="phase2a" ><area shape="poly" coords="650,375,646,385,642,378,655,382" href="#">
		<area shape="poly" coords="648,368,646,361,638,363,639,370" href="user_lotqoutation.php?lotid=212">
		<area shape="poly" coords="645,357,639,350,631,352,634,362" href="#">
		<area shape="poly" coords="626,311,615,320,613,312,618,306" href="#">
		<area shape="poly" coords="608,370,613,376,618,368,613,369" href="#">
		<area shape="poly" coords="612,382,617,387,623,381,618,379" href="#">
		<area shape="poly" coords="616,393,622,394,629,388,624,389" href="#">
		<area shape="poly" coords="623,398,626,401,633,394,628,393" href="#">
		<area shape="poly" coords="625,406,630,411,636,406,630,403" href="#">
		<area shape="poly" coords="625,420,630,425,638,415,633,411" href="#">
		<area shape="poly" coords="633,434,638,439,646,429,641,425" href="#">
		<area shape="poly" coords="614,431,619,436,627,426,622,422" href="#">
		<area shape="poly" coords="608,416,613,421,621,411,616,407" href="#">
		<area shape="poly" coords="602,401,607,406,615,396,610,392" href="#">
		<area shape="poly" coords="597,390,602,395,610,385,605,381" href="#">
		<area shape="poly" coords="592,382,597,387,605,377,600,373" href="#">
		<area shape="poly" coords="585,367,590,372,598,362,593,358" href="#">
		<area shape="poly" coords="585,367,590,372,598,362,593,358" href="#">
		<area shape="poly" coords="598,352,603,357,611,347,606,343" href="#">
		<area shape="poly" coords="589,340,596,346,607,337,599,332" href="#">
		<area shape="poly" coords="587,328,594,334,605,325,597,320" href="#">
		<area shape="poly" coords="581,317,588,323,599,314,591,309" href="#">
		<area shape="poly" coords="572,296,577,301,585,291,580,287" href="#">
		<area shape="poly" coords="572,295,577,300,585,290,580,286" href="#">
		<area shape="poly" coords="554,304,570,320,574,313,562,295" href="#">
		<area shape="poly" coords="560,381,565,386,573,376,568,372" href="#">
		<area shape="poly" coords="590,445,595,450,603,440,598,436" href="#">
		<area shape="poly" coords="573,447,578,452,586,442,581,438" href="#">
		<area shape="poly" coords="580,432,585,437,593,427,588,423" href="#">
		<area shape="poly" coords="574,410,579,415,587,405,582,401" href="#">
		<area shape="poly" coords="565,431,570,436,578,426,573,422" href="#">
		<area shape="poly" coords="557,415,562,420,570,410,565,406" href="#">
		<area shape="poly" coords="551,402,556,407,564,397,559,393" href="#">
		<area shape="poly" coords="566,398,571,403,579,393,574,389" href="#">
		<area shape="poly" coords="545,393,550,398,558,388,553,384" href="#">
		<area shape="poly" coords="540,383,545,388,553,378,548,374" href="#">
		<area shape="poly" coords="549,366,554,371,562,361,557,357" href="#">
		<area shape="poly" coords="545,352,550,357,558,347,553,343" href="#">
		<area shape="poly" coords="541,338,546,343,554,333,549,329" href="#">
		<area shape="poly" coords="535,370,540,375,548,365,543,361" href="#">
		<area shape="poly" coords="529,358,534,363,542,353,537,349" href="#">
		<area shape="poly" coords="491,397,496,402,504,392,499,388" href="#">
		<area shape="poly" coords="479,379,484,384,492,374,487,370" href="#">
		<area shape="poly" coords="527,443,532,448,540,438,535,434" href="#">
		<area shape="poly" coords="515,402,520,407,528,397,523,393" href="#">
		<area shape="poly" coords="522,426,527,431,535,421,530,417" href="#">
		<area shape="poly" coords="490,425,495,430,503,420,498,416" href="#">
		<area shape="poly" coords="508,388,513,393,521,383,516,379" href="#">
		<area shape="poly" coords="500,370,505,375,513,365,508,361" href="#">
		<area shape="poly" coords="466,402,471,407,479,397,474,393" href="#">
		<area shape="poly" coords="453,390,458,395,466,385,461,381" href="#">
		<area shape="poly" coords="453,363,458,368,466,358,461,354" href="#">
		<area shape="poly" coords="440,375,445,380,453,370,448,366" href="#">
		<area shape="poly" coords="430,362,435,367,443,357,438,353" href="#">
		<area shape="poly" coords="432,343,437,348,445,338,440,334" href="#">
		<area shape="poly" coords="407,338,412,343,420,333,415,329" href="#">
		<area shape="poly" coords="418,325,423,330,431,320,426,316" href="#">
		<area shape="poly" coords="392,325,397,330,405,320,400,316" href="#">
		<area shape="poly" coords="408,314,413,319,421,309,416,305" href="#">
		<area shape="poly" coords="381,312,386,317,394,307,389,303" href="#">
		<area shape="poly" coords="371,295,376,300,384,290,379,286" href="#">
		<area shape="poly" coords="379,283,384,288,392,278,387,274" href="#">
		<area shape="poly" coords="386,291,391,296,399,286,394,282" href="#">
		<area shape="poly" coords="360,288,365,293,373,283,368,279" href="#">
		<area shape="poly" coords="366,270,371,275,379,265,374,261" href="#">
		<area shape="poly" coords="334,245,340,249,347,240,342,236" href="#">
		<area shape="poly" coords="327,238,332,243,340,233,335,229" href="#">
		<area shape="poly" coords="344,254,349,259,357,249,352,245" href="#">
		<area shape="poly" coords="335,268,340,273,348,263,343,259" href="#">
		<area shape="poly" coords="328,262,333,267,341,257,336,253" href="#">
		<area shape="poly" coords="320,256,325,261,333,251,328,247" href="#">
		<area shape="poly" coords="309,246,314,251,322,241,317,237" href="#">
		<area shape="poly" coords="302,240,307,245,315,235,310,231" href="#">
		<area shape="poly" coords="296,236,301,241,309,231,304,227" href="#">
		<area shape="poly" coords="289,231,294,236,302,226,297,222" href="#">
		<area shape="poly" coords="316,229,321,234,329,224,324,220" href="#">
		<area shape="poly" coords="307,223,312,228,320,218,315,214" href="#">
		<area shape="poly" coords="300,217,305,222,313,212,308,208" href="#">
		<area shape="poly" coords="291,212,296,217,304,207,299,203" href="#">
		<area shape="poly" coords="284,207,289,212,297,202,292,198" href="#">
		<area shape="poly" coords="263,193,268,198,276,188,271,184" href="#">
		<area shape="poly" coords="257,186,262,191,270,181,265,177" href="#">
		<area shape="poly" coords="251,180,256,185,263,175,259,171" href="#">
		<area shape="poly" coords="243,174,248,179,256,169,251,165" href="#">
		<area shape="poly" coords="234,186,239,191,247,181,242,177" href="#">
		<area shape="poly" coords="262,211,267,216,275,206,270,202" href="#">
		<area shape="poly" coords="254,204,259,209,267,199,262,195" href="#">
		<area shape="poly" coords="246,199,251,204,259,194,254,190" href="#">
		<area shape="poly" coords="241,194,246,199,254,189,249,185" href="#">
		
		
          <area shape="poly" coords="170,110" href="#">
          <area shape="poly" coords="171,122,155,110,180,112,166,99,161,105,172,116,161,117" href="#">
          <area shape="poly" coords="168,126,166,131,161,135,154,131,154,127,158,124,162,123" href="#">
          <area shape="poly" coords="164,128,163,130,159,127,159,125,161,123,163,123,168,129,162,134,166,126" href="#">
          <area shape="poly" coords="178,127,185,133,190,128,193,124,187,120,183,120,181,124" href="#">
          
          
          <area shape="poly" coords="169,140,175,145,178,139,181,136,178,132,174,133,173,137" href="user_lotqoutation.php?lotid=193"/>
          <area shape="poly" coords="182,148,188,156,193,151,196,148,189,139" href="#">
          <area shape="poly" coords="195,157,201,163,209,154,203,147,201,149,197,155" href="#">
          <area shape="poly" coords="204,169,210,174,215,176,222,166,213,158" href="#">
          <area shape="poly" coords="220,178,223,172,228,166,236,171,227,183,233,179,236,175,227,183" href="#">
          <area shape="poly" coords="234,186,239,191,247,181,242,177" href="#">
        </map>
      </p>
    </nav>
  </div>
</div>
</body>
</html>
