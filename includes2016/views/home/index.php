<?php
$link = URL . $this->language . '/';
$team = ($this->language === 'en') ? 'team' : 'equipe';
$journalism = 'journalism'.(($this->language === 'en') ? ' ' : 'e');
$bios_build = $team . '/build';
$bios_web = $team . '/web';
$bios_video = $team . '/video';
$bios_kiosk = $team . '/kiosk';
$gallery = 'galler' . (($this->language === 'en') ? 'ie' : 'y');
$tuto = 'tutori' . (($this->language ==='en') ? 'el' : 'al');
$popup = ($this->language === 'en') ? 'Click on banners, doors and other highlighted objects to navigate.' : 'Cliquer sur les bannières, les portes, et d\'autres objets pour naviguer.';
?>

<!-- HRIM - Hoverable Responsive Image Maps -->
<script src="<?=URL?>js/hoverImageMaps/jquery.maphilight.min.js"></script>
<script src="<?=URL?>js/hoverImageMaps/imageMapResizer.js"></script>
<script src="<?=URL?>js/hoverImageMaps/rollover.js"></script>

<!-- qTip - Just the tip.. tooltip you dirty pleb -->
<script src="<?=URL?>js/tooltips/jquery.qtip.js"></script>
<link rel="stylesheet" href="<?=URL?>css/jquery.qtip.min.css"/>
<script src="<?=URL?>js/tooltips/imagesloaded.pkg.min.js"></script>

<map id="mymap" name="mymap">
    <area shape="poly" alt="Build Bios" title="Build Bios" coords="709,317,838,314,833,599,768,536,700,590,708,318" href="<?=$link.$bios_build?>" target="" />

    <area shape="poly" alt="Web Bios" title="Web Bios" coords="1327,322,1332,602,1264,544,1196,604,1188,318" href="<?=$link.$bios_web?>" target="" />
    <area shape="poly" alt="Video Bios" title="Video Bios" coords="1668,0,1708,523,1574,413,1452,533,1411,-1" href="<?=$link.$bios_video?>" target="" />
    <area shape="poly" alt="Kiosk Bios" title="Kiosk Bios" coords="569,533,457,410,336,512,375,-3,610,-1,571,498" href="<?=$link.$bios_kiosk?>" target="" />

    <area shape="poly" alt="Journalism" title="Journalism" coords="753,711,755,699,759,690,768,686,773,685,783,687,790,698,793,709,794,711,792,712,793,729,789,729,787,730,787,731,786,735,786,737,791,737,792,768,789,781,785,782,784,788,784,792,748,793,751,723,760,723,760,716,752,714" href="<?=$link.$journalism?>" target="" />
    <area shape="poly" alt="Competition" title="Competition" coords="385,800,425,800,442,701,442,696,442,693,441,690,440,687,437,683,434,681,433,679,431,678,429,677,427,677,424,676,422,676,419,676,417,678,415,678,413,680,411,682,409,682,408,685,407,686,405,688,405,689,404,691,403,692,403,694,403,694" href="<?=$link.'competition'?>" target="" />
    <area shape="poly" alt="Robot" title="Robot" coords="1568,703,1567,698,1569,691,1569,689,1570,687,1573,683,1575,681,1577,679,1582,678,1585,677,1589,678,1595,680,1598,682,1599,685,1601,690,1603,696,1621,801,1583,800,1569,705" href="<?=$link.'robot'?>" target="" />
    <area shape="poly" alt="Gallery" title="Gallery" coords="1267,716,1265,695,1264,691,1262,690,1259,689,1255,689,1252,689,1247,691,1241,695,1238,700,1236,706,1235,710,1235,717,1238,781,1268,783,1267,724,1262,725,1261,723,1261,721,1261,719,1261,717,1266,715" href="<?=$link.$gallery?>" target="" />

    <area shape="poly" alt="Tutorial" title="Tutorial" coords="954.0000406901041,479.00000508626306,1070.000040690104,478.00000508626306,1064.000040690104,430.00000508626306,1068.000040690104,422.00000508626306,1078.000040690104,414.00000508626306,1089.000040690104,406.00000508626306,1103.000040690104,398.00000508626306,1116.000040690104,393.00000508626306,1115.000040690104,384.00000508626306,1100.000040690104,387.00000508626306,1063.000040690104,392.00000508626306,1062.000040690104,388.00000508626306,1061.000040690104,386.00000508626306,1113.000040690104,337.00000508626306,1110.000040690104,335.00000508626306,1052.000040690104,369.00000508626306,1049.000040690104,361.00000508626306,1078.000040690104,301.00000508626306,1079.000040690104,298.00000508626306,1079.000040690104,296.00000508626306,1078.000040690104,295.00000508626306,1076.000040690104,294.00000508626306,1075.000040690104,294.00000508626306,1039.000040690104,343.00000508626306,1034.000040690104,337.00000508626306,1034.000040690104,334.00000508626306,1032.000040690104,331.00000508626306,1030.000040690104,330.00000508626306,1028.000040690104,329.00000508626306,1025.000040690104,330.00000508626306,1028.000040690104,273.00000508626306,1028.000040690104,269.00000508626306,1027.000040690104,268.00000508626306,1026.000040690104,267.00000508626306,1025.000040690104,267.00000508626306,1022.0000406901041,267.00000508626306,1021.0000406901041,269.00000508626306,1015.0000406901041,316.00000508626306,1012.0000406901041,314.00000508626306,1011.0000406901041,314.00000508626306,1009.0000406901041,315.00000508626306,1007.0000406901041,317.00000508626306,1007.0000406901041,322.00000508626306,1005.0000406901041,323.00000508626306,1003.0000406901041,324.00000508626306,1004.0000406901041,330.00000508626306,999.0000406901041,331.00000508626306,984.0000406901041,271.00000508626306,982.0000406901041,269.00000508626306,980.0000406901041,269.00000508626306,977.0000406901041,272.00000508626306,977.0000406901041,277.00000508626306,980.0000406901041,294.00000508626306,988.0000406901041,335.00000508626306,978.0000406901041,346.00000508626306,939.0000406901041,303.00000508626306,935.0000406901041,307.00000508626306,949.0000406901041,327.00000508626306,974.0000406901041,374.00000508626306,914.0000406901041,352.00000508626306,912.0000406901041,358.00000508626306,966.0000406901041,392.00000508626306,965.0000406901041,396.00000508626306,958.0000406901041,395.00000508626306,921.0000406901041,405.00000508626306,920.0000406901041,407.00000508626306,921.0000406901041,413.00000508626306,929.0000406901041,412.00000508626306,951.0000406901041,407.00000508626306,961.0000406901041,405.00000508626306" href="<?=$link.$tuto?>" target="" />
    <area shape="poly" alt="Vanier" title="Vanier" coords="1173,793,1062,792,1062,784,1056,784,1056,775,1059,763,1059,722,1058,671,1045,667,1026,667,1028,665,1028,664,1031,663,1032,662,1032,660,1031,660,1030,661,1028,661,1028,660,1028,658,1026,656,1037,637,1038,635,1040,632,1040,629,1039,627,1025,652,1025,649,1024,645,1023,643,1026,638,1034,627,1035,622,1034,622,1031,622,1030,626,1024,632,1023,633,1027,622,1029,612,1028,607,1028,606,1027,605,1026,603,1026,602,1024,600,1018,616,1018,611,1018,608,1018,603,1015,600,1018,585,1019,580,1020,578,1019,577,1018,578,1016,581,1012,606,1011,601,1009,564,1008,600,1007,602,1005,593,1004,584,997,572,997,580,1002,602,1002,605,1000,609,997,608,994,605,992,605,992,608,992,609,987,602,987,602,986,604,986,605,992,618,993,626,992,626,990,621,988,620,988,621,987,622,987,625,990,635,994,645,990,642,982,626,980,626,980,630,986,645,996,656,992,654,992,656,992,659,992,662,987,658,986,660,989,661,992,663,992,666,992,668,975,668,975,668,968,669,967,669,962,670,960,723,961,759,961,775,961,785,951,784,950,793,847,793,847,795,1174,794,1173,793" href="<?=$link.'vanier'?>" target="" />
</map>

<img src="<?=URL?>images/home/got.jpg" usemap="#mymap" width=100%/>

<script type="text/javascript">
    $(function() {
        $('#footer').qtip({
            style: {
                classes: 'qtip-dark qtip-shadow qtip-bootstrap',
            },
            position: {
                adjust: { x: -1000, y: -300 }
            },
            content: '<?=$popup?>',
            show: {
                delay: 1500,
                    when: false, // Don't specify a show event
                    ready: true // Show the tooltip when ready
                },
                hide: {
                delay: 4000
            }
        });
    });
</script>