<?php 
$punname='';
$punPhoto='';
$punDetail='';

$id = $boonid;

switch ($id) {
  case 1:
    $punname='ตักบาตร';
    $punPhoto='https://sv1.picz.in.th/images/2020/05/17/qWUy8n.png';
    $punDetail='ปันบุญตักบาตรพระยามเช้า';
    break;
  case 2:
    $punname='ถวายภัตตาหาร';
    $punPhoto='https://sv1.picz.in.th/images/2020/05/17/qWUmqS.png';
    $punDetail='ปันบุญถวายภัตตาหารพระ';
    break;
  case 3:
    $punname='สวดมนต์';
    $punPhoto='https://sv1.picz.in.th/images/2020/05/17/qWqdF1.png';
    $punDetail='ปันบุญตักบาตรสวดมนต์เช้าเย็น';
    break;
  case 4:
    $punname='นั่งสมาธิ';
    $punPhoto='https://sv1.picz.in.th/images/2020/05/17/qWq3Cz.png';
    $punDetail='ปันบุญเกลาจิตใจตัวเอง';
    break;
  case 5:
    $punname='ประทีป';
    $punPhoto='https://sv1.picz.in.th/images/2020/05/17/qWqkgq.png';
    $punDetail='ปันบุญบูชาพระรัตนตรัย';
    break;
  case 6:
    $punname='รักษาศีล';
    $punPhoto='https://sv1.picz.in.th/images/2020/05/17/qWq9F8.png';
    $punDetail='ปันบุญรักษาศีลครบถ้วน';
    break;
  default:
  $punname='ไม่มีบุญ';
  $punPhoto='';
  $punDetail='โปรดกลับไปหน้าแรกเพื่อเลือกบุญใหม่';
}




/* =Function
-------------------------------------------------------------- */
function generate_date_today($Format, $Timestamp, $Language = "th", $TimeText = true )
{
	/* =Time&Date Config
-------------------------------------------------------------- */
$SuffixTime = array(
	"th"=>array(
		"time"=>array(
			"Seconds"			=>		" วินาทีที่แล้ว",
			"Minutes"				=>		" นาทีที่แล้ว",
			"Hours"					=>		" ชั่วโมงที่แล้ว"
		),
		"day"=>array(
			"Yesterday"		=>		"เมื่อวาน เวลา ",
			"Monday"				=>		"วันจันทร์ เวลา ",
			"Tuesday"			=>		"วันอังคาร เวลา ",
			"Wednesday"	=>		"วันพุธ เวลา ",
			"Thursday"			=>		"วันพฤหัสบดี เวลา ",
			"Friday"				=>		"วันศุกร์ เวลา ",
			"Saturday"			=>		" วันวันเสาร์ เวลา ",
			"Sunday"				=>		"วันอาทิตย์ เวลา ",
		)
	),
	"en"=>array(
		"time"=>array(
			"Seconds"				=>		" seconds ago",
			"Minutes"				=>		" minutes ago",
			"Hours"					=>		" hours ago"
		),
		"day"=>array(
			"Yesterday"		=>		"Yesterday at ",
			"Monday"				=>		"Monday at ",
			"Tuesday"			=>		"Tuesday at ",
			"Wednesday"	=>		"Wednesday at ",
			"Thursday"			=>		"Thursday at ",
			"Friday"				=>		"Friday at ",
			"Saturday"			=>		"Saturday at ",
			"Sunday"				=>		"Sunday at ",
		)
	)
);

$DateThai = array(
	// Day
	"l" => array(	// Full day
		"Monday"				=>		"วันจันทร์",
		"Tuesday"			=>		"วันอังคาร",
		"Wednesday"	=>		"วันพุธ",
		"Thursday"			=>		"วันพฤหัสบดี",
		"Friday"				=>		"วันศุกร์",
		"Saturday"			=>		"วันวันเสาร์",
		"Sunday"				=>		"วันอาทิตย์",
	),
	"D" => array(	// Abbreviated day
		"Monday"				=>		"จันทร์",
		"Tuesday"			=>		"อังคาร",
		"Wednesday"	=>		"พุธ",
		"Thursday"			=>		"พฤหัส",
		"Friday"				=>		"ศุกร์",
		"Saturday"			=>		"วันเสาร์",
		"Sunday"				=>		"อาทิตย์",
	),
	
	// Month
	"F" => array(	// Full month
		"January"				=>		"มกราคม",
		"February"			=>		"กุมภาพันธ์",
		"March"					=>		"มีนาคม",
		"April"					=>		"เมษายน",
		"May"					=>		"พฤษภาคม",
		"June"					=>		"มิถุนายน",
		"July"						=>		"กรกฎาคม",
		"August"				=>		"สิงหาคม",
		"September"		=>		"กันยายน",
		"October"				=>		"ตุลาคม",
		"November"		=>		"พฤศจิกายน",
		"December"		=>		"ธันวาคม"
	),
	"M" => array(	// Abbreviated month
		"January"				=>		"ม.ค.",
		"February"			=>		"ก.พ.",
		"March"					=>		"มี.ค.",
		"April"					=>		"เม.ย.",
		"May"					=>		"พ.ค.",
		"June"					=>		"มิ.ย.",
		"July"						=>		"ก.ค.",
		"August"				=>		"ส.ค.",
		"September"		=>		"ก.ย.",
		"October"				=>		"ต.ค.",
		"November"		=>		"พ.ย.",
		"December"		=>		"ธ.ค."
	)
);
/* =Time&Date Config
-------------------------------------------------------------- */
	//return date("i:H d-m-Y", $Timestamp) ." | ". date("i:H d-m-Y", time());
	if( date("Ymd", $Timestamp) >= date("Ymd", (time()-345600)) && $TimeText)				// Less than 3 days.
	{
		$TimeStampAgo = (time()-$Timestamp);
		
		if(($TimeStampAgo < 86400))			// Less than 1 day.
		{
			
			$TimeDay = "time";				// Use array time
			
			if($TimeStampAgo < 60)				// Less than 1 minute.
			{
				$Return = (time() - $Timestamp);
				$Values = "Seconds";
			}
			else if($TimeStampAgo < 3600)			// Less than 1 hour.
			{
				$Return = floor( (time() - $Timestamp)/60 );
				$Values = "Minutes";
			}
			else			// Less than 1 day.
			{
				$Return = floor( (time() - $Timestamp)/3600 );
				$Values = "Hours";
			}
			
		}
		else if($TimeStampAgo < 172800)			// Less than 2 day.
		{
			$Return = date("H:i", $Timestamp);
			$TimeDay = "day";
			$Values = "Yesterday";
		}
		else		// More than 2 hours..
		{
			$Return = date("H:i", $Timestamp);
			$TimeDay = "day";
			$Values = date("l", $Timestamp);
		}
		
		if($TimeDay == "time")
			$Return .= $SuffixTime[$Language][$TimeDay][$Values];
		else if($TimeDay == "day")
			$Return = $SuffixTime[$Language][$TimeDay][$Values] . $Return;
		
		return $Return;
	}
	else
	{
		if($Language == "en")
		{
			return date($Format, $Timestamp);
		}
		else if($Language == "th")
		{
			$Format = str_replace("l", "|1|", $Format);
			$Format = str_replace("D", "|2|", $Format);
			$Format = str_replace("F", "|3|", $Format);
			$Format = str_replace("M", "|4|", $Format);
			$Format = str_replace("y", "|x|", $Format);
			$Format = str_replace("Y", "|X|", $Format);

			$DateCache = date($Format, $Timestamp);
			
			$AR1 = array ("", "l", "D", "F", "M");
			$AR2 = array ("", "l", "l", "F", "F");
			
			for($i=1; $i<=4; $i++)
			{
				if(strstr($DateCache, "|". $i ."|"))
				{
					//$Return .= $i;
					
					$split = explode("|". $i ."|", $DateCache); 
					for($j=0; $j<count($split)-1; $j++)
					{
						$StrCache .= $split[$j];
						$StrCache .= $DateThai[$AR1[$i]][date($AR2[$i], $Timestamp)];
					}
					$StrCache .= $split[count($split)-1];
					$DateCache = $StrCache;
					$StrCache = "";
					empty($split);
				}
			}
			
			if(strstr($DateCache, "|x|"))
				{
					
					$split = explode("|x|", $DateCache); 
					
					for($i=0; $i<count($split)-1; $i++)
					{
						$StrCache .= $split[$i];
						$StrCache .= substr((date("Y", $Timestamp)+543), -2);
					}
					$StrCache .= $split[count($split)-1];
					$DateCache = $StrCache;
					$StrCache = "";
					empty($split);
				}

			if(strstr($DateCache, "|X|"))
				{
					
					$split = explode("|X|", $DateCache); 
					
					for($i=0; $i<count($split)-1; $i++)
					{
						$StrCache .= $split[$i];
						$StrCache .= (date("Y", $Timestamp)+543);
					}
					$StrCache .= $split[count($split)-1];
					$DateCache = $StrCache;
					$StrCache = "";
					empty($split);
				}

				$Return = $DateCache;
				
			return $Return;
		}
	}
}
/* =Function
-------------------------------------------------------------- */
?>
<html lang="en"><head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="shortcut icon" href="/jaipunround.ico" type="image/x-icon">     
<title>JaiPun -<?php echo $punname ?> Room</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style class="INLINE_PEN_STYLESHEET_ID">
    body {
  background: #e1f6f4;
}

.container {
  height: 100vh;
}

.ballon {
  margin: 0 auto;
  width: 106px;
  position: relative;
  top: 45%;
  -webkit-transform: translateY(-45%);
          transform: translateY(-45%);
}

.ballon-inner {
  -webkit-animation: drift 5s ease-in-out infinite;
          animation: drift 5s ease-in-out infinite;
}

.ballon-ball {
  height: 100px;
  width: 100px;
  position: relative;
  background: radial-gradient(39% 39%, closest-corner, #eadada 86%, #d59dc5 88%, #d59dc5 100%);
  border-radius: 50%;
  border: 3px solid #bf5caa;
  overflow: hidden;
}

.ball-inner {
  position: absolute;
  height: 10px;
  top: 53px;
  left: 0;
  width: 100%;
  overflow: hidden;
}

.ball-inner--0 {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  position: absolute;
  bottom: 0;
  left: -3px;
  border: 3px solid #bf5caa;
}

.ball-inner--1 {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  position: absolute;
  bottom: 0;
  left: 17px;
  border: 3px solid #bf5caa;
}

.ball-inner--2 {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  position: absolute;
  bottom: 0;
  left: 37px;
  border: 3px solid #bf5caa;
}

.ball-inner--3 {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  position: absolute;
  bottom: 0;
  left: 57px;
  border: 3px solid #bf5caa;
}

.ball-inner--4 {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  position: absolute;
  bottom: 0;
  left: 77px;
  border: 3px solid #bf5caa;
}

.ballon-rope {
  height: 55.5555555556px;
  width: 55.5555555556px;
  position: absolute;
  z-index: -1;
  left: 23.2558139535px;
  top: 55.5555555556px;
  border: #cd7856 solid 3px;
  border-right: #cd7856 solid 3px;
  -webkit-transform: rotate(53deg) skew(18deg);
          transform: rotate(53deg) skew(18deg);
}

.ballon-seat {
  width: 28.5714285714px;
  height: 28.5714285714px;
  position: relative;
  border: 3px solid #cd7856;
  border-radius: 0 0 6px 6px;
  margin: 12.5px auto;
  background: -webkit-gradient(linear, left top, right top, from(#f0dca2), color-stop(60%, #f0dca2), color-stop(65%, #e0b58c));
  background: linear-gradient(to right, #f0dca2 0%, #f0dca2 60%, #e0b58c 65%);
}
.ballon-seat:before {
  content: '';
  width: 28.5714285714px;
  height: 14.2857142857px;
  position: absolute;
  border-radius: 0 0 6px 6px;
  bottom: 0;
  left: 0;
  border-top: 3px solid #cd7856;
  background: transparent;
}

.sky {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
z-index:-1;
}

.cloud {
  position: absolute;
  background: #fff;
  border-radius: 200px;
}
.cloud:before, .cloud:after {
  content: '';
  position: absolute;
  background: #fff;
  width: 50%;
  height: 100%;
  position: absolute;
  top: -40%;
  left: 12%;
  border-radius: 100px;
}
.cloud:after {
  width: 30%;
  height: 60%;
  top: -20%;
  left: auto;
  right: 8%;
}

.cloud-1 {
  width: 120px;
  height: 60px;
  top: 10%;
  left: 100%;
  -webkit-animation: moveClouds 13s linear infinite;
          animation: moveClouds 13s linear infinite;
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
}

.cloud-2 {
  width: 83.3333333333px;
  height: 41.6666666667px;
  bottom: 20%;
  left: 100%;
  -webkit-animation: moveClouds 12s linear infinite;
          animation: moveClouds 12s linear infinite;
  -webkit-animation-delay: 0s;
          animation-delay: 0s;
}

.cloud-3 {
  width: 66.6666666667px;
  height: 33.3333333333px;
  bottom: 50%;
  left: 100%;
  -webkit-animation: moveClouds 15s linear infinite;
          animation: moveClouds 15s linear infinite;
  -webkit-animation-delay: 3s;
          animation-delay: 3s;
}

@-webkit-keyframes moveClouds {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(-110vw);
            transform: translateX(-110vw);
  }
}

@keyframes    moveClouds {
  0% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
  100% {
    -webkit-transform: translateX(-110vw);
            transform: translateX(-110vw);
  }
}
@-webkit-keyframes drift {
  0% {
    -webkit-transform: translateY(0px) rotate();
            transform: translateY(0px) rotate();
  }
  50% {
    -webkit-transform: translateY(-20px) rotate(-3deg);
            transform: translateY(-20px) rotate(-3deg);
  }
  100% {
    -webkit-transform: translateY(0px) rotate();
            transform: translateY(0px) rotate();
  }
}
@keyframes    drift {
  0% {
    -webkit-transform: translateY(0px) rotate();
            transform: translateY(0px) rotate();
  }
  50% {
    -webkit-transform: translateY(-20px) rotate(-3deg);
            transform: translateY(-20px) rotate(-3deg);
  }
  100% {
    -webkit-transform: translateY(0px) rotate();
            transform: translateY(0px) rotate();
  }
}

  </style>
<script src="https://static.codepen.io/assets/editor/iframe/iframeConsoleRunner-dc0d50e60903d6825042d06159a8d5ac69a6c0e9bcef91e3380b17617061ce0f.js"></script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRefreshCSS-e03f509ba0a671350b4b363ff105b2eb009850f34a2b4deaadaa63ed5d970b37.js"></script>
<script src="https://static.codepen.io/assets/editor/iframe/iframeRuntimeErrors-29f059e28a3c6d3878960591ef98b1e303c1fe1935197dae7797c017a3ca1e82.js"></script>
</head>
<body>
<div class="container"><div class="sky">
<div class="cloud-1 cloud">
<div class="cloud--inner"></div>
</div>
<div class="cloud-2 cloud">
<div class="cloud--inner"></div>
</div>
<div class="cloud-3 cloud">
<div class="cloud--inner"></div>
</div>
</div><img src="<?php echo $punPhoto ?>" alt="Miguel Quispe - Front-end Developer" class="me__image" style="
    width: 80px;
    margin-top: 20px;
    display: block;
    margin-left: auto;
    margin-right: auto;
">
    
    <div style="
    text-align: center;
    font-size: 20px;
    margin-top: 10px;
"><?php echo $punname ?></div><div style="
    text-align: center;
    margin-top: จ;
    color: #888;
    width: 346px;
    line-height: 26px;
    margin-left: auto;
    margin-right: auto;
"><?php echo $punDetail ?></div>

<div style="
    text-align: center;
    color: #2fdaca;
    width: 346px;
    font-size: 28px;
    margin-left: auto;
    margin-right: auto;
">200</div><div style="
    text-align: center;
    color: #666;
    width: 346px;
    line-height: 26px;
    margin-left: auto;
    margin-right: auto;
    font-size: 14px;
">จำนวนการปันบุญ</div>

<a href="/" style="
    text-align: center;
    color: #333;
    width: 346px;
    line-height: 26px;
    margin-left: auto;
    margin-right: auto;
    font-size: 16px;
">ปันบุญอื่นอีก</a>

<div style="
    max-width: 400px;
    margin-left: auto;
    margin-right: auto;
">
@foreach($json as $json)
  <div style="
    padding: 15px;
    border-bottom: 1px solid #eee;
">

    <img src="<?php if($json['sex'] === 'female'){ echo "https://sv1.picz.in.th/images/2019/08/16/Z9uFX8.png"; }else{ echo "https://sv1.picz.in.th/images/2019/08/16/Z9ujVv.png"; }   ?>" alt="W3Schools.com" style="
    width: 40px;
    border-radius: 100px;
    ">
    <div style="
        display: inline-block;
        margin-left: 10px;
    ">
            
        <div style="
            font-size: 16px;
            font-weight: bold;
            color:#222;
        "><?php echo $json['name'] ?>
        <div style="
            color: #777;
            margin-top: 4px;
            font-size: 12px;
            display: inline;
        "> <?php echo generate_date_today("d M Y H:i", $json['time']); ?></div>
        </div>
    
        <div style="font-size: 12px;"><?php echo $json['detail'] ?></div>


    </div>

</div>
@endforeach
</div>
<!--?php echo $boonid; ?-->
    
</div>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-157cd5b220a5c80d4ff8e0e70ac069bffd87a61252088146915e8726e5d9f147.js"></script>
<script id="INLINE_PEN_JS_ID">
    
    //# sourceURL=pen.js
  </script>


</body></html>