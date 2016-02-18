<!--
    VALIDATED ON 02/06/2017 at 6:12 PM
    ==================================
    ANY MODIFICATIONS AFTER THIS TIME
    MUST BE RE-VALIDATED
-->
<?php
if ($this->language === 'fr') {
    $nav =[
        'van' => 'Cégep Vanier',
        'rob' => 'Description du robot',
        'tut' => 'Tutoriel',
        'gal' => 'Gallerie Photo',
        'gam' => 'Régles du Jeu',
        'jou' => 'Chronicles du Journalisme',
        'kio' => 'Équipe Kiosque',
        'web' => 'Équipe Web',
        'bui' => 'Équipe Robot',
        'vid' => 'Équipe Vidéo',
    ];
} else { $nav =[
        'van' => 'Vanier College',
        'rob' => 'Robot Description',
        'tut' => 'Tutorial',
        'gal' => 'Photo Gallery',
        'gam' => 'Rules of the Game',
        'jou' => 'Journalism Chronicles',
        'kio' => 'Kiosk Bios',
        'web' => 'Web Bios',
        'bui' => 'Build Bios',
        'vid' => 'Video Bios',
    ];
}

$link = URL . $this->language . '/';
$team = ($this->language === 'en') ? 'team' : 'equipe';
$game = ($this->language === 'en') ? 'game' : 'jeu';
$journalism = 'journalism' . (($this->language === 'en') ? ' ' : 'e');
$bios_build = $team . '/build';
$bios_web = $team . '/web';
$bios_video = $team . '/video';
$bios_kiosk = $team . '/kiosk';
$gallery = 'galler' . (($this->language === 'en') ? 'ie' : 'y');
$tuto = 'tutori' . (($this->language === 'en') ? 'al' : 'el');
$popup = ($this->language === 'en') ? 'Click on banners, doors and other highlighted objects to navigate.' : 'Cliquer sur les bannières, les portes, et d\'autres objets pour naviguer.';

Controller::aTooltip($popup);
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<!-- HRIM - Hoverable Responsive Image Maps -->
<script src="<?= URL ?>js/hoverImageMaps/jquery.maphilight.min.js"></script>
<script src="<?= URL ?>js/hoverImageMaps/imageMapResizer.js"></script>
<script src="<?= URL ?>js/hoverImageMaps/rollover.js"></script>
<!-- qTip - Just the tip.. tooltip you dirty pleb -->
<script src="<?= URL ?>js/tooltips/jquery.qtip.js"></script>
<link rel="stylesheet" href="<?= URL ?>css/jquery.qtip.min.css" property="stylesheet"/>

<script>
	$(function()
	{
		$(window).resize(function()
		{
			resizeHome();
		});
		
		function resizeHome()
		{
			var top = $(".container-fluid").height();
			$("#content").css("top", top);	
		}
	});
</script>

<map id="mymap" name="mymap">
    <area shape="poly" alt="<?=$nav['bui']?>" title="<?=$nav['bui']?>" coords="709,317,838,314,833,599,768,536,700,590,708,318"
          href="<?= $link . $bios_build ?>"/>

    <area shape="poly" alt="<?=$nav['web']?>" title="<?=$nav['web']?>" coords="1327,322,1332,602,1264,544,1196,604,1188,318"
          href="<?= $link . $bios_web ?>"/>

    <area shape="poly" alt="<?=$nav['vid']?>" title="<?=$nav['vid']?>" coords="1668,0,1708,523,1574,413,1452,533,1411,-1"
          href="<?= $link . $bios_video ?>"/>

    <area shape="poly" alt="<?=$nav['kio']?>" title="<?=$nav['kio']?>" coords="569,533,457,410,336,512,375,-3,610,-1,571,498"
          href="<?= $link . $bios_kiosk ?>"/>

    <area shape="poly" alt="<?=$nav['jou']?>" title="<?=$nav['jou']?>"
          coords="753,711,755,699,759,690,768,686,773,685,783,687,790,698,793,709,794,711,792,712,793,729,789,729,787,730,787,731,786,735,786,737,791,737,792,768,789,781,785,782,784,788,784,792,748,793,751,723,760,723,760,716,752,714"
          href="<?= $link . $journalism ?>"/>

    <area shape="poly" alt="<?=$nav['gam']?>" title="<?=$nav['gam']?>"
          coords="385,800,425,800,442,701,442,696,442,693,441,690,440,687,437,683,434,681,433,679,431,678,429,677,427,677,424,676,422,676,419,676,417,678,415,678,413,680,411,682,409,682,408,685,407,686,405,688,405,689,404,691,403,692,403,694,403,694"
          href="<?= $link . $game ?>"/>

    <area shape="poly" alt="<?=$nav['tut']?>" title="<?=$nav['rob']?>"
          coords="1568,703,1567,698,1569,691,1569,689,1570,687,1573,683,1575,681,1577,679,1582,678,1585,677,1589,678,1595,680,1598,682,1599,685,1601,690,1603,696,1621,801,1583,800,1569,705"
          href="<?= $link . 'robot' ?>"/>

    <area shape="poly" alt="<?=$nav['gal']?>" title="<?=$nav['gal']?>"
          coords="1267,716,1265,695,1264,691,1262,690,1259,689,1255,689,1252,689,1247,691,1241,695,1238,700,1236,706,1235,710,1235,717,1238,781,1268,783,1267,724,1262,725,1261,723,1261,721,1261,719,1261,717,1266,715"
          href="<?= $link . $gallery ?>"/>

    <area shape="poly" alt="<?=$nav['tut']?>" title="<?=$nav['tut']?>"
          coords="954,479,1070,478,1064,430,1068,422,1078,414,1089,406,1103,398,1116,393,1115,384,1100,387,1063,392,1062,388,1061,386,1113,337,1110,335,1052,369,1049,361,1078,301,1079,298,1079,296,1078,295,1076,294,1075,294,1039,343,1034,337,1034,334,1032,331,1030,330,1028,329,1025,330,1028,273,1028,269,1027,268,1026,267,1025,267,1022,267,1021,269,1015,316,1012,314,1011,314,1009,315,1007,317,1007,322,1005,323,1003,324,1004,330,999,331,984,271,982,269,980,269,977,272,977,277,980,294,988,335,978,346,939,303,935,307,949,327,974,374,914,352,912,358,966,392,965,396,958,395,921,405,920,407,921,413,929,412,951,407,961,405"
          href="<?= $link . $tuto ?>"/>

    <area shape="poly" alt="<?=$nav['van']?>" title="<?=$nav['van']?>"
          coords="1173,793,1062,792,1062,784,1056,784,1056,775,1059,763,1059,722,1058,671,1045,667,1026,667,1028,665,1028,664,1031,663,1032,662,1032,660,1031,660,1030,661,1028,661,1028,660,1028,658,1026,656,1037,637,1038,635,1040,632,1040,629,1039,627,1025,652,1025,649,1024,645,1023,643,1026,638,1034,627,1035,622,1034,622,1031,622,1030,626,1024,632,1023,633,1027,622,1029,612,1028,607,1028,606,1027,605,1026,603,1026,602,1024,600,1018,616,1018,611,1018,608,1018,603,1015,600,1018,585,1019,580,1020,578,1019,577,1018,578,1016,581,1012,606,1011,601,1009,564,1008,600,1007,602,1005,593,1004,584,997,572,997,580,1002,602,1002,605,1000,609,997,608,994,605,992,605,992,608,992,609,987,602,987,602,986,604,986,605,992,618,993,626,992,626,990,621,988,620,988,621,987,622,987,625,990,635,994,645,990,642,982,626,980,626,980,630,986,645,996,656,992,654,992,656,992,659,992,662,987,658,986,660,989,661,992,663,992,666,992,668,975,668,975,668,968,669,967,669,962,670,960,723,961,759,961,775,961,785,951,784,950,793,847,793,847,795,1174,794,1173,793"
          href="<?= $link . 'vanier' ?>"/>
</map>

<img src="<?= URL ?>images/home/got.jpg" usemap="#mymap" style="width: 100%;" alt=""/>