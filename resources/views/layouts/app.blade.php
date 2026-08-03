<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Yazılım Şirketi')</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* ========== GENEL ========== */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Inter', sans-serif; background: #0a0e1a; color: #fff; overflow-x: hidden; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0a0e1a; }
        ::-webkit-scrollbar-thumb { background: linear-gradient(180deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff, #ff6b6b); background-size: 200% 200%; animation: rainbowScroll 3s linear infinite; border-radius: 10px; }
        @keyframes rainbowScroll { 0% { background-position: 0% 0%; } 100% { background-position: 0% 100%; } }

        /* ========== YILDIZLI ARKAPLAN ========== */
        .star-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }
        #stars { width: 1px; height: 1px; background: transparent; box-shadow: 501px 811px #fff,1450px 1324px #fff,1093px 1780px #fff,1469px 678px #fff,904px 741px #fff,1160px 781px #fff,1841px 1962px #fff,1630px 1667px #fff,1788px 676px #fff,367px 1734px #fff,1343px 156px #fff,1283px 1142px #fff,1062px 378px #fff,1395px 467px #fff,1017px 1891px #fff,137px 1114px #fff,1767px 1403px #fff,1543px 11px #fff,1078px 181px #fff,1189px 1574px #fff,1697px 1551px #fff,439px 472px #fff,1491px 677px #fff,1364px 599px #fff,34px 382px #fff,1221px 1584px #fff,1266px 1499px #fff,169px 1907px #fff,1219px 1125px #fff,659px 18px #fff,1731px 1959px #fff,332px 1216px #fff,1913px 788px #fff,80px 712px #fff,326px 1605px #fff,574px 1502px #fff,473px 1653px #fff,404px 975px #fff,322px 1797px #fff,425px 1321px #fff,1121px 1797px #fff,731px 647px #fff,891px 1584px #fff,1523px 109px #fff,1379px 244px #fff,865px 1064px #fff,493px 956px #fff,624px 1380px #fff,440px 619px #fff,1630px 767px #fff,955px 1196px #fff,62px 729px #fff,126px 946px #fff,1256px 896px #fff,1444px 256px #fff,661px 1628px #fff,1078px 1716px #fff,300px 737px #fff,1734px 413px #fff,1296px 129px #fff,1771px 1678px #fff,977px 1764px #fff,1879px 549px #fff,665px 1531px #fff,89px 701px #fff,1084px 1183px #fff,1597px 1576px #fff,1354px 1774px #fff,554px 1471px #fff,1469px 287px #fff,887px 106px #fff,1962px 766px #fff,638px 805px #fff,1651px 741px #fff,1517px 1826px #fff,24px 1152px #fff,507px 558px #fff,1262px 652px #fff,246px 1048px #fff,1077px 421px #fff,1866px 1847px #fff,1986px 1561px #fff,704px 632px #fff,1991px 1875px #fff,1227px 395px #fff,45px 1116px #fff,247px 786px #fff,890px 607px #fff,787px 1235px #fff,557px 524px #fff,1582px 1285px #fff,1725px 1366px #fff,952px 747px #fff,251px 458px #fff,1500px 1250px #fff,1999px 1734px #fff,1336px 1955px #fff,1705px 1464px #fff,728px 697px #fff,594px 510px #fff,1345px 1990px #fff,1919px 1803px #fff,1117px 966px #fff,1629px 97px #fff,1046px 1196px #fff,810px 1092px #fff,722px 976px #fff,406px 18px #fff,1665px 1860px #fff,1758px 1628px #fff,1183px 463px #fff,564px 239px #fff,13px 1767px #fff,1482px 1472px #fff,1700px 347px #fff,1362px 244px #fff,1141px 1708px #fff,22px 885px #fff,374px 1309px #fff,1034px 1037px #fff,1725px 1086px #fff,1343px 1921px #fff,596px 903px #fff,1061px 478px #fff,18px 1409px #fff,729px 1364px #fff,264px 911px #fff,677px 1442px #fff,123px 33px #fff,1303px 646px #fff,1945px 792px #fff,1305px 938px #fff,918px 1536px #fff,620px 948px #fff,183px 646px #fff,695px 687px #fff,881px 272px #fff,1521px 1212px #fff,1423px 1022px #fff,1545px 1271px #fff,1393px 348px #fff,685px 1910px #fff,1446px 856px #fff,73px 1201px #fff,736px 999px #fff,673px 796px #fff,469px 850px #fff,1912px 142px #fff,1278px 664px #fff,184px 1990px #fff,1173px 1312px #fff,782px 1879px #fff,323px 1035px #fff,611px 908px #fff,565px 1449px #fff,748px 1713px #fff,1047px 490px #fff,1040px 1872px #fff,1818px 1659px #fff,1806px 1327px #fff,386px 575px #fff,1550px 463px #fff,148px 687px #fff,651px 1683px #fff,1588px 1194px #fff,1831px 2px #fff,581px 876px #fff,1396px 1743px #fff,1212px 1810px #fff,421px 1920px #fff,658px 1461px #fff,1859px 1809px #fff,1456px 388px #fff,186px 1627px #fff,1528px 1145px #fff,171px 97px #fff,674px 1072px #fff,676px 1052px #fff,1165px 1131px #fff,1088px 781px #fff,1231px 948px #fff,330px 257px #fff,426px 1046px #fff,549px 652px #fff,1338px 74px #fff,1749px 364px #fff,931px 369px #fff,383px 1428px #fff,1558px 389px #fff,927px 133px #fff,234px 1888px #fff,1785px 1617px #fff,556px 643px #fff,401px 275px #fff,406px 1644px #fff,1253px 1852px #fff,1599px 883px #fff,744px 1721px #fff,524px 1297px #fff,1226px 1177px #fff,1679px 55px #fff,874px 1811px #fff,838px 790px #fff,1241px 430px #fff,1676px 652px #fff,1191px 568px #fff,53px 1990px #fff,1163px 237px #fff,61px 223px #fff,592px 456px #fff,1844px 271px #fff,1324px 1488px #fff,1373px 717px #fff,1822px 709px #fff,1464px 941px #fff,1445px 1118px #fff,991px 1414px #fff,1964px 1076px #fff,108px 172px #fff,641px 1722px #fff,1539px 427px #fff,1697px 45px #fff,1301px 1353px #fff,1060px 329px #fff,967px 1396px #fff,493px 301px #fff,1228px 1406px #fff,1211px 1653px #fff,444px 1822px #fff,1746px 353px #fff,1449px 381px #fff,671px 887px #fff,650px 138px #fff,30px 1839px #fff,1094px 1405px #fff,273px 796px #fff,1618px 1964px #fff,1045px 1849px #fff,1472px 1155px #fff,1529px 1312px #fff,728px 448px #fff,44px 1908px #fff,691px 818px #fff,254px 293px #fff,1981px 1133px #fff,1307px 375px #fff,196px 316px #fff,1241px 1975px #fff,1138px 1706px #fff,1769px 463px #fff,1768px 1428px #fff,1730px 590px #fff,1780px 523px #fff,1862px 1526px #fff,1613px 909px #fff,1266px 1781px #fff,470px 352px #fff,699px 1682px #fff,1002px 614px #fff,1209px 133px #fff,1842px 518px #fff,1422px 1836px #fff,1720px 1901px #fff,470px 1788px #fff,1355px 1387px #fff,146px 1162px #fff,933px 80px #fff,681px 1063px #fff,313px 1341px #fff,740px 1498px #fff,168px 1014px #fff,345px 1355px #fff,1498px 1562px #fff,1626px 1358px #fff,890px 403px #fff,663px 562px #fff,1481px 168px #fff,22px 719px #fff,774px 1041px #fff,1899px 829px #fff,430px 158px #fff,430px 361px #fff,1592px 1334px #fff,224px 323px #fff,1639px 1131px #fff,7px 271px #fff,1646px 1514px #fff,1605px 1444px #fff,1820px 1665px #fff,1549px 1641px #fff,1609px 1377px #fff,486px 1098px #fff,229px 613px #fff,542px 1694px #fff,318px 256px #fff,1861px 918px #fff,889px 892px #fff,442px 1524px #fff,19px 422px #fff,1935px 1908px #fff,828px 109px #fff,862px 1248px #fff,1275px 560px #fff,906px 63px #fff,337px 1605px #fff,1691px 918px #fff,1414px 679px #fff,1726px 749px #fff,1540px 1149px #fff,1337px 1466px #fff,446px 430px #fff,676px 1616px #fff,840px 326px #fff,976px 977px #fff,1840px 642px #fff,1273px 804px #fff,1071px 928px #fff,1292px 1675px #fff,29px 1148px #fff,1585px 135px #fff,1007px 563px #fff,1035px 78px #fff,1174px 574px #fff,120px 1304px #fff,845px 1292px #fff,861px 540px #fff,234px 232px #fff,1940px 1367px #fff,759px 639px #fff,1775px 1381px #fff,906px 372px #fff,1104px 1165px #fff,1524px 911px #fff,1882px 330px #fff,1389px 700px #fff,300px 1629px #fff,220px 1614px #fff,563px 140px #fff,1611px 1586px #fff,793px 1316px #fff,325px 1070px #fff,1722px 1462px #fff,1406px 1120px #fff,1169px 1768px #fff,1956px 1053px #fff,959px 1587px #fff,585px 1566px #fff,370px 204px #fff,1606px 1416px #fff,443px 1606px #fff,1499px 1102px #fff,1943px 105px #fff,1121px 1594px #fff,1512px 32px #fff,871px 1425px #fff,433px 100px #fff,294px 1471px #fff,1688px 1755px #fff,1666px 591px #fff,1034px 300px #fff,734px 1178px #fff,1342px 313px #fff,1616px 1590px #fff,1763px 1472px #fff,632px 1935px #fff,1708px 872px #fff,1871px 915px #fff,1829px 1020px #fff,1599px 578px #fff,42px 585px #fff,1163px 1382px #fff,1744px 1272px #fff,984px 1426px #fff,1786px 1584px #fff,1813px 379px #fff,1867px 1127px #fff,97px 567px #fff,626px 988px #fff,1178px 79px #fff,1703px 211px #fff,961px 1785px #fff,110px 975px #fff,953px 1941px #fff,1027px 1790px #fff,1665px 107px #fff,11px 964px #fff,1718px 1147px #fff,21px 1728px #fff,1358px 1922px #fff,872px 65px #fff,1191px 1635px #fff,762px 681px #fff,1519px 1033px #fff,906px 566px #fff,1074px 657px #fff,1093px 415px #fff,51px 198px #fff,1075px 1418px #fff,1547px 1070px #fff,225px 920px #fff,850px 1974px #fff,981px 595px #fff,1425px 131px #fff,460px 917px #fff,56px 495px #fff,714px 428px #fff,920px 493px #fff,470px 1521px #fff,532px 821px #fff,1905px 71px #fff,883px 1501px #fff,294px 196px #fff,381px 1999px #fff,332px 793px #fff,1246px 408px #fff,233px 149px #fff,315px 231px #fff,1594px 1302px #fff,696px 1585px #fff,791px 136px #fff,479px 199px #fff,1627px 1413px #fff,1824px 924px #fff,1631px 342px #fff,1251px 1151px #fff,284px 1781px #fff,497px 1052px #fff,204px 1161px #fff,646px 1499px #fff,1762px 558px #fff,854px 1833px #fff,883px 945px #fff,44px 982px #fff,1101px 834px #fff,515px 1748px #fff,1578px 1435px #fff,819px 1258px #fff,776px 670px #fff,115px 385px #fff,1478px 434px #fff,885px 20px #fff,192px 1513px #fff,78px 1129px #fff,1774px 1105px #fff,955px 1149px #fff,1817px 1929px #fff,1106px 1832px #fff,1107px 1997px #fff,94px 23px #fff,243px 982px #fff,43px 1972px #fff,1798px 673px #fff,1131px 1589px #fff,841px 14px #fff,826px 345px #fff,687px 56px #fff,1084px 32px #fff,1887px 1878px #fff,153px 526px #fff,1828px 253px #fff,1947px 1105px #fff,886px 700px #fff,1307px 1723px #fff,1274px 651px #fff,1530px 837px #fff,1699px 1637px #fff,1703px 1331px #fff,1929px 1557px #fff,1763px 737px #fff,1118px 1680px #fff,1545px 692px #fff,1462px 1092px #fff,208px 1667px #fff,1393px 859px #fff,186px 1794px #fff,351px 1199px #fff,642px 1995px #fff,1061px 1726px #fff,1708px 115px #fff,1233px 1305px #fff,637px 1786px #fff,1730px 603px #fff,75px 1240px #fff,1704px 1326px #fff,584px 346px #fff,438px 1554px #fff,561px 513px #fff,1382px 225px #fff,467px 1674px #fff,1403px 815px #fff,1546px 1835px #fff,127px 1119px #fff,276px 591px #fff,688px 1458px #fff,765px 646px #fff,474px 984px #fff,171px 361px #fff,94px 1480px #fff,1962px 1666px #fff,909px 1037px #fff,1725px 222px #fff,253px 1355px #fff,1892px 1901px #fff,275px 1847px #fff,28px 1184px #fff,1725px 1382px #fff,882px 647px #fff,1935px 1046px #fff,10px 344px #fff,292px 1328px #fff,127px 1352px #fff,752px 929px #fff,1589px 384px #fff,284px 1829px #fff,381px 820px #fff,1229px 1125px #fff,777px 429px #fff,1811px 1499px #fff,1573px 287px #fff,295px 756px #fff,389px 616px #fff,781px 41px #fff,1092px 333px #fff,794px 1588px #fff,386px 1847px #fff,1802px 710px #fff,662px 60px #fff,640px 264px #fff,463px 746px #fff,1859px 799px #fff,763px 37px #fff,639px 396px #fff,357px 1071px #fff,1190px 1430px #fff,1814px 257px #fff,1382px 235px #fff,606px 1304px #fff,1939px 1470px #fff,1124px 349px #fff,307px 1567px #fff,310px 1323px #fff,1145px 922px #fff,1196px 1922px #fff,1647px 544px #fff,788px 1337px #fff,257px 632px #fff,1413px 414px #fff,590px 620px #fff,582px 794px #fff,1702px 1481px #fff,1055px 53px #fff,157px 346px #fff,50px 1901px #fff,1038px 1369px #fff,796px 1941px #fff,215px 194px #fff,1567px 1538px #fff,367px 800px #fff,1044px 489px #fff,1109px 1712px #fff,524px 327px #fff,525px 1252px #fff,1475px 1240px #fff,529px 436px #fff,795px 834px #fff,122px 1371px #fff,79px 482px #fff,520px 1249px #fff,336px 1878px #fff,188px 944px #fff,325px 1259px #fff,1491px 1942px #fff,620px 1054px #fff,1606px 1153px #fff,1448px 502px #fff,53px 1381px #fff,107px 1670px #fff,1380px 618px #fff,967px 1557px #fff,1116px 1722px #fff,1174px 1044px #fff,1805px 717px #fff,663px 394px #fff,1848px 1007px #fff,389px 802px #fff,49px 392px #fff,1650px 852px #fff,1678px 1012px #fff,335px 1009px #fff,1818px 1631px #fff,1568px 742px #fff,1162px 1991px #fff,52px 1190px #fff,1401px 928px #fff,119px 1549px #fff,537px 1529px #fff,2px 1709px #fff,122px 387px #fff,543px 2px #fff,27px 1971px #fff,507px 1377px #fff,1362px 1080px #fff,1031px 1544px #fff,1631px 1174px #fff,1603px 312px #fff,1626px 1422px #fff,1430px 615px #fff,1958px 1431px #fff,1946px 1412px #fff,1848px 247px #fff,984px 1808px #fff,1396px 225px #fff,319px 717px #fff,1252px 875px #fff,1619px 156px #fff,951px 1971px #fff,386px 355px #fff,1406px 1151px #fff,273px 1538px #fff,844px 1570px #fff,947px 151px #fff,1363px 525px #fff,209px 307px #fff,1923px 1718px #fff,993px 1741px #fff,1513px 353px #fff,1353px 61px #fff,664px 352px #fff,1382px 359px #fff,1487px 1707px #fff,657px 1045px #fff,1107px 490px #fff,1834px 1176px #fff,837px 1438px #fff,1947px 448px #fff,1196px 333px #fff,151px 555px #fff,18px 992px #fff,458px 748px #fff,1801px 890px #fff,1093px 1012px #fff,315px 1101px #fff,194px 323px #fff,754px 292px #fff,1737px 7px #fff,40px 840px #fff,1170px 805px #fff,176px 1753px #fff,805px 1148px #fff,1578px 1271px #fff,367px 1494px #fff,363px 1111px #fff,1955px 243px #fff,1451px 1093px #fff,375px 617px #fff,1223px 720px #fff,1178px 13px #fff,1456px 865px #fff,1440px 49px #fff,186px 1569px #fff,320px 1853px #fff,300px 539px #fff,1559px 509px #fff,1985px 1108px #fff,1588px 828px #fff,525px 1432px #fff,831px 363px #fff,141px 281px #fff,1319px 402px #fff,40px 456px #fff,1955px 478px #fff,1758px 818px #fff,1924px 688px #fff,1030px 953px #fff,1982px 210px #fff,917px 1401px #fff,1051px 1837px #fff,1045px 463px #fff,1744px 573px #fff,529px 1530px #fff,542px 469px #fff,1982px 324px #fff,1902px 1422px #fff,1968px 782px #fff,1666px 1561px #fff,955px 304px #fff,323px 778px #fff,272px 443px #fff,485px 581px #fff,1353px 1058px #fff,1257px 131px #fff,434px 98px #fff,1587px 1953px #fff,1749px 68px #fff,1984px 839px #fff,1518px 183px #fff,1071px 855px #fff,1662px 1994px #fff,1111px 106px #fff,1954px 838px #fff; animation: animStar 50s linear infinite; }
        #stars:after { content: " "; position: absolute; top: 2000px; width: 1px; height: 1px; background: transparent; box-shadow: 501px 811px #fff,1450px 1324px #fff,1093px 1780px #fff,1469px 678px #fff,904px 741px #fff,1160px 781px #fff,1841px 1962px #fff,1630px 1667px #fff,1788px 676px #fff,367px 1734px #fff,1343px 156px #fff,1283px 1142px #fff,1062px 378px #fff,1395px 467px #fff,1017px 1891px #fff,137px 1114px #fff,1767px 1403px #fff,1543px 11px #fff,1078px 181px #fff,1189px 1574px #fff,1697px 1551px #fff,439px 472px #fff,1491px 677px #fff,1364px 599px #fff,34px 382px #fff,1221px 1584px #fff,1266px 1499px #fff,169px 1907px #fff,1219px 1125px #fff,659px 18px #fff,1731px 1959px #fff,332px 1216px #fff,1913px 788px #fff,80px 712px #fff,326px 1605px #fff,574px 1502px #fff,473px 1653px #fff,404px 975px #fff,322px 1797px #fff,425px 1321px #fff,1121px 1797px #fff,731px 647px #fff,891px 1584px #fff,1523px 109px #fff,1379px 244px #fff,865px 1064px #fff,493px 956px #fff,624px 1380px #fff,440px 619px #fff,1630px 767px #fff,955px 1196px #fff,62px 729px #fff,126px 946px #fff,1256px 896px #fff,1444px 256px #fff,661px 1628px #fff,1078px 1716px #fff,300px 737px #fff,1734px 413px #fff,1296px 129px #fff,1771px 1678px #fff,977px 1764px #fff,1879px 549px #fff,665px 1531px #fff,89px 701px #fff,1084px 1183px #fff,1597px 1576px #fff,1354px 1774px #fff,554px 1471px #fff,1469px 287px #fff,887px 106px #fff,1962px 766px #fff,638px 805px #fff,1651px 741px #fff,1517px 1826px #fff,24px 1152px #fff,507px 558px #fff,1262px 652px #fff,246px 1048px #fff,1077px 421px #fff,1866px 1847px #fff,1986px 1561px #fff,704px 632px #fff,1991px 1875px #fff,1227px 395px #fff,45px 1116px #fff,247px 786px #fff,890px 607px #fff,787px 1235px #fff,557px 524px #fff,1582px 1285px #fff,1725px 1366px #fff,952px 747px #fff,251px 458px #fff,1500px 1250px #fff,1999px 1734px #fff,1336px 1955px #fff,1705px 1464px #fff,728px 697px #fff,594px 510px #fff,1345px 1990px #fff,1919px 1803px #fff,1117px 966px #fff,1629px 97px #fff,1046px 1196px #fff,810px 1092px #fff,722px 976px #fff,406px 18px #fff,1665px 1860px #fff,1758px 1628px #fff,1183px 463px #fff,564px 239px #fff,13px 1767px #fff,1482px 1472px #fff,1700px 347px #fff,1362px 244px #fff,1141px 1708px #fff,22px 885px #fff,374px 1309px #fff,1034px 1037px #fff,1725px 1086px #fff,1343px 1921px #fff,596px 903px #fff,1061px 478px #fff,18px 1409px #fff,729px 1364px #fff,264px 911px #fff,677px 1442px #fff,123px 33px #fff,1303px 646px #fff,1945px 792px #fff,1305px 938px #fff,918px 1536px #fff,620px 948px #fff,183px 646px #fff,695px 687px #fff,881px 272px #fff,1521px 1212px #fff,1423px 1022px #fff,1545px 1271px #fff,1393px 348px #fff,685px 1910px #fff,1446px 856px #fff,73px 1201px #fff,736px 999px #fff,673px 796px #fff,469px 850px #fff,1912px 142px #fff,1278px 664px #fff,184px 1990px #fff,1173px 1312px #fff,782px 1879px #fff,323px 1035px #fff,611px 908px #fff,565px 1449px #fff,748px 1713px #fff,1047px 490px #fff,1040px 1872px #fff,1818px 1659px #fff,1806px 1327px #fff,386px 575px #fff,1550px 463px #fff,148px 687px #fff,651px 1683px #fff,1588px 1194px #fff,1831px 2px #fff,581px 876px #fff,1396px 1743px #fff,1212px 1810px #fff,421px 1920px #fff,658px 1461px #fff,1859px 1809px #fff,1456px 388px #fff,186px 1627px #fff,1528px 1145px #fff,171px 97px #fff,674px 1072px #fff,676px 1052px #fff,1165px 1131px #fff,1088px 781px #fff,1231px 948px #fff,330px 257px #fff,426px 1046px #fff,549px 652px #fff,1338px 74px #fff,1749px 364px #fff,931px 369px #fff,383px 1428px #fff,1558px 389px #fff,927px 133px #fff,234px 1888px #fff,1785px 1617px #fff,556px 643px #fff,401px 275px #fff,406px 1644px #fff,1253px 1852px #fff,1599px 883px #fff,744px 1721px #fff,524px 1297px #fff,1226px 1177px #fff,1679px 55px #fff,874px 1811px #fff,838px 790px #fff,1241px 430px #fff,1676px 652px #fff,1191px 568px #fff,53px 1990px #fff,1163px 237px #fff,61px 223px #fff,592px 456px #fff,1844px 271px #fff,1324px 1488px #fff,1373px 717px #fff,1822px 709px #fff,1464px 941px #fff,1445px 1118px #fff,991px 1414px #fff,1964px 1076px #fff,108px 172px #fff,641px 1722px #fff,1539px 427px #fff,1697px 45px #fff,1301px 1353px #fff,1060px 329px #fff,967px 1396px #fff,493px 301px #fff,1228px 1406px #fff,1211px 1653px #fff,444px 1822px #fff,1746px 353px #fff,1449px 381px #fff,671px 887px #fff,650px 138px #fff,30px 1839px #fff,1094px 1405px #fff,273px 796px #fff,1618px 1964px #fff,1045px 1849px #fff,1472px 1155px #fff,1529px 1312px #fff,728px 448px #fff,44px 1908px #fff,691px 818px #fff,254px 293px #fff,1981px 1133px #fff,1307px 375px #fff,196px 316px #fff,1241px 1975px #fff,1138px 1706px #fff,1769px 463px #fff,1768px 1428px #fff,1730px 590px #fff,1780px 523px #fff,1862px 1526px #fff,1613px 909px #fff,1266px 1781px #fff,470px 352px #fff,699px 1682px #fff,1002px 614px #fff,1209px 133px #fff,1842px 518px #fff,1422px 1836px #fff,1720px 1901px #fff,470px 1788px #fff,1355px 1387px #fff,146px 1162px #fff,933px 80px #fff,681px 1063px #fff,313px 1341px #fff,740px 1498px #fff,168px 1014px #fff,345px 1355px #fff,1498px 1562px #fff,1626px 1358px #fff,890px 403px #fff,663px 562px #fff,1481px 168px #fff,22px 719px #fff,774px 1041px #fff,1899px 829px #fff,430px 158px #fff,430px 361px #fff,1592px 1334px #fff,224px 323px #fff,1639px 1131px #fff,7px 271px #fff,1646px 1514px #fff,1605px 1444px #fff,1820px 1665px #fff,1549px 1641px #fff,1609px 1377px #fff,486px 1098px #fff,229px 613px #fff,542px 1694px #fff,318px 256px #fff,1861px 918px #fff,889px 892px #fff,442px 1524px #fff,19px 422px #fff,1935px 1908px #fff,828px 109px #fff,862px 1248px #fff,1275px 560px #fff,906px 63px #fff,337px 1605px #fff,1691px 918px #fff,1414px 679px #fff,1726px 749px #fff,1540px 1149px #fff,1337px 1466px #fff,446px 430px #fff,676px 1616px #fff,840px 326px #fff,976px 977px #fff,1840px 642px #fff,1273px 804px #fff,1071px 928px #fff,1292px 1675px #fff,29px 1148px #fff,1585px 135px #fff,1007px 563px #fff,1035px 78px #fff,1174px 574px #fff,120px 1304px #fff,845px 1292px #fff,861px 540px #fff,234px 232px #fff,1940px 1367px #fff,759px 639px #fff,1775px 1381px #fff,906px 372px #fff,1104px 1165px #fff,1524px 911px #fff,1882px 330px #fff,1389px 700px #fff,300px 1629px #fff,220px 1614px #fff,563px 140px #fff,1611px 1586px #fff,793px 1316px #fff,325px 1070px #fff,1722px 1462px #fff,1406px 1120px #fff,1169px 1768px #fff,1956px 1053px #fff,959px 1587px #fff,585px 1566px #fff,370px 204px #fff,1606px 1416px #fff,443px 1606px #fff,1499px 1102px #fff,1943px 105px #fff,1121px 1594px #fff,1512px 32px #fff,871px 1425px #fff,433px 100px #fff,294px 1471px #fff,1688px 1755px #fff,1666px 591px #fff,1034px 300px #fff,734px 1178px #fff,1342px 313px #fff,1616px 1590px #fff,1763px 1472px #fff,632px 1935px #fff,1708px 872px #fff,1871px 915px #fff,1829px 1020px #fff,1599px 578px #fff,42px 585px #fff,1163px 1382px #fff,1744px 1272px #fff,984px 1426px #fff,1786px 1584px #fff,1813px 379px #fff,1867px 1127px #fff,97px 567px #fff,626px 988px #fff,1178px 79px #fff,1703px 211px #fff,961px 1785px #fff,110px 975px #fff,953px 1941px #fff,1027px 1790px #fff,1665px 107px #fff,11px 964px #fff,1718px 1147px #fff,21px 1728px #fff,1358px 1922px #fff,872px 65px #fff,1191px 1635px #fff,762px 681px #fff,1519px 1033px #fff,906px 566px #fff,1074px 657px #fff,1093px 415px #fff,51px 198px #fff,1075px 1418px #fff,1547px 1070px #fff,225px 920px #fff,850px 1974px #fff,981px 595px #fff,1425px 131px #fff,460px 917px #fff,56px 495px #fff,714px 428px #fff,920px 493px #fff,470px 1521px #fff,532px 821px #fff,1905px 71px #fff,883px 1501px #fff,294px 196px #fff,381px 1999px #fff,332px 793px #fff,1246px 408px #fff,233px 149px #fff,315px 231px #fff,1594px 1302px #fff,696px 1585px #fff,791px 136px #fff,479px 199px #fff,1627px 1413px #fff,1824px 924px #fff,1631px 342px #fff,1251px 1151px #fff,284px 1781px #fff,497px 1052px #fff,204px 1161px #fff,646px 1499px #fff,1762px 558px #fff,854px 1833px #fff,883px 945px #fff,44px 982px #fff,1101px 834px #fff,515px 1748px #fff,1578px 1435px #fff,819px 1258px #fff,776px 670px #fff,115px 385px #fff,1478px 434px #fff,885px 20px #fff,192px 1513px #fff,78px 1129px #fff,1774px 1105px #fff,955px 1149px #fff,1817px 1929px #fff,1106px 1832px #fff,1107px 1997px #fff,94px 23px #fff,243px 982px #fff,43px 1972px #fff,1798px 673px #fff,1131px 1589px #fff,841px 14px #fff,826px 345px #fff,687px 56px #fff,1084px 32px #fff,1887px 1878px #fff,153px 526px #fff,1828px 253px #fff,1947px 1105px #fff,886px 700px #fff,1307px 1723px #fff,1274px 651px #fff,1530px 837px #fff,1699px 1637px #fff,1703px 1331px #fff,1929px 1557px #fff,1763px 737px #fff,1118px 1680px #fff,1545px 692px #fff,1462px 1092px #fff,208px 1667px #fff,1393px 859px #fff,186px 1794px #fff,351px 1199px #fff,642px 1995px #fff,1061px 1726px #fff,1708px 115px #fff,1233px 1305px #fff,637px 1786px #fff,1730px 603px #fff,75px 1240px #fff,1704px 1326px #fff,584px 346px #fff,438px 1554px #fff,561px 513px #fff,1382px 225px #fff,467px 1674px #fff,1403px 815px #fff,1546px 1835px #fff,127px 1119px #fff,276px 591px #fff,688px 1458px #fff,765px 646px #fff,474px 984px #fff,171px 361px #fff,94px 1480px #fff,1962px 1666px #fff,909px 1037px #fff,1725px 222px #fff,253px 1355px #fff,1892px 1901px #fff,275px 1847px #fff,28px 1184px #fff,1725px 1382px #fff,882px 647px #fff,1935px 1046px #fff,10px 344px #fff,292px 1328px #fff,127px 1352px #fff,752px 929px #fff,1589px 384px #fff,284px 1829px #fff,381px 820px #fff,1229px 1125px #fff,777px 429px #fff,1811px 1499px #fff,1573px 287px #fff,295px 756px #fff,389px 616px #fff,781px 41px #fff,1092px 333px #fff,794px 1588px #fff,386px 1847px #fff,1802px 710px #fff,662px 60px #fff,640px 264px #fff,463px 746px #fff,1859px 799px #fff,763px 37px #fff,639px 396px #fff,357px 1071px #fff,1190px 1430px #fff,1814px 257px #fff,1382px 235px #fff,606px 1304px #fff,1939px 1470px #fff,1124px 349px #fff,307px 1567px #fff,310px 1323px #fff,1145px 922px #fff,1196px 1922px #fff,1647px 544px #fff,788px 1337px #fff,257px 632px #fff,1413px 414px #fff,590px 620px #fff,582px 794px #fff,1702px 1481px #fff,1055px 53px #fff,157px 346px #fff,50px 1901px #fff,1038px 1369px #fff,796px 1941px #fff,215px 194px #fff,1567px 1538px #fff,367px 800px #fff,1044px 489px #fff,1109px 1712px #fff,524px 327px #fff,525px 1252px #fff,1475px 1240px #fff,529px 436px #fff,795px 834px #fff,122px 1371px #fff,79px 482px #fff,520px 1249px #fff,336px 1878px #fff,188px 944px #fff,325px 1259px #fff,1491px 1942px #fff,620px 1054px #fff,1606px 1153px #fff,1448px 502px #fff,53px 1381px #fff,107px 1670px #fff,1380px 618px #fff,967px 1557px #fff,1116px 1722px #fff,1174px 1044px #fff,1805px 717px #fff,663px 394px #fff,1848px 1007px #fff,389px 802px #fff,49px 392px #fff,1650px 852px #fff,1678px 1012px #fff,335px 1009px #fff,1818px 1631px #fff,1568px 742px #fff,1162px 1991px #fff,52px 1190px #fff,1401px 928px #fff,119px 1549px #fff,537px 1529px #fff,2px 1709px #fff,122px 387px #fff,543px 2px #fff,27px 1971px #fff,507px 1377px #fff,1362px 1080px #fff,1031px 1544px #fff,1631px 1174px #fff,1603px 312px #fff,1626px 1422px #fff,1430px 615px #fff,1958px 1431px #fff,1946px 1412px #fff,1848px 247px #fff,984px 1808px #fff,1396px 225px #fff,319px 717px #fff,1252px 875px #fff,1619px 156px #fff,951px 1971px #fff,386px 355px #fff,1406px 1151px #fff,273px 1538px #fff,844px 1570px #fff,947px 151px #fff,1363px 525px #fff,209px 307px #fff,1923px 1718px #fff,993px 1741px #fff,1513px 353px #fff,1353px 61px #fff,664px 352px #fff,1382px 359px #fff,1487px 1707px #fff,657px 1045px #fff,1107px 490px #fff,1834px 1176px #fff,837px 1438px #fff,1947px 448px #fff,1196px 333px #fff,151px 555px #fff,18px 992px #fff,458px 748px #fff,1801px 890px #fff,1093px 1012px #fff,315px 1101px #fff,194px 323px #fff,754px 292px #fff,1737px 7px #fff,40px 840px #fff,1170px 805px #fff,176px 1753px #fff,805px 1148px #fff,1578px 1271px #fff,367px 1494px #fff,363px 1111px #fff,1955px 243px #fff,1451px 1093px #fff,375px 617px #fff,1223px 720px #fff,1178px 13px #fff,1456px 865px #fff,1440px 49px #fff,186px 1569px #fff,320px 1853px #fff,300px 539px #fff,1559px 509px #fff,1985px 1108px #fff,1588px 828px #fff,525px 1432px #fff,831px 363px #fff,141px 281px #fff,1319px 402px #fff,40px 456px #fff,1955px 478px #fff,1758px 818px #fff,1924px 688px #fff,1030px 953px #fff,1982px 210px #fff,917px 1401px #fff,1051px 1837px #fff,1045px 463px #fff,1744px 573px #fff,529px 1530px #fff,542px 469px #fff,1982px 324px #fff,1902px 1422px #fff,1968px 782px #fff,1666px 1561px #fff,955px 304px #fff,323px 778px #fff,272px 443px #fff,485px 581px #fff,1353px 1058px #fff,1257px 131px #fff,434px 98px #fff,1587px 1953px #fff,1749px 68px #fff,1984px 839px #fff,1518px 183px #fff,1071px 855px #fff,1662px 1994px #fff,1111px 106px #fff,1954px 838px #fff; }
        #stars2 { width: 2px; height: 2px; background: transparent; box-shadow: 1925px 1320px #fff,693px 1778px #fff,1016px 711px #fff,1171px 563px #fff,661px 1919px #fff,1610px 44px #fff,1275px 140px #fff,1208px 1802px #fff,1473px 1587px #fff,11px 1117px #fff,853px 1757px #fff,1149px 937px #fff,1353px 428px #fff,270px 279px #fff,258px 1404px #fff,417px 1188px #fff,286px 561px #fff,393px 1765px #fff,147px 881px #fff,666px 1097px #fff,1425px 1278px #fff,806px 156px #fff,1252px 561px #fff,218px 52px #fff,1371px 1980px #fff,171px 745px #fff,1424px 89px #fff,137px 244px #fff,939px 1922px #fff,137px 1080px #fff,1757px 50px #fff,904px 536px #fff,1938px 1001px #fff,1172px 440px #fff,72px 1475px #fff,102px 121px #fff,804px 1671px #fff,1314px 270px #fff,440px 1341px #fff,1216px 511px #fff,1061px 1523px #fff,97px 274px #fff,704px 1318px #fff,52px 1872px #fff,1962px 296px #fff,111px 289px #fff,1157px 1236px #fff,1347px 1451px #fff,820px 286px #fff,1389px 1169px #fff,644px 841px #fff,1286px 522px #fff,955px 659px #fff,428px 1805px #fff,237px 557px #fff,1689px 1058px #fff,636px 1882px #fff,1349px 1664px #fff,1548px 432px #fff,1841px 504px #fff,302px 252px #fff,827px 1765px #fff,620px 123px #fff,207px 748px #fff,1454px 1234px #fff,1967px 1790px #fff,542px 33px #fff,742px 1214px #fff,255px 1402px #fff,74px 1772px #fff,699px 475px #fff,980px 1253px #fff,534px 1676px #fff,909px 202px #fff,1498px 1251px #fff,1796px 120px #fff,1409px 1263px #fff,1627px 995px #fff,969px 710px #fff,1674px 676px #fff,1832px 759px #fff,1623px 563px #fff,251px 1790px #fff,96px 1688px #fff,886px 239px #fff,778px 150px #fff,1767px 430px #fff,765px 1259px #fff,1189px 877px #fff,444px 1629px #fff,1560px 324px #fff,1952px 1097px #fff,712px 1173px #fff,541px 911px #fff,827px 1420px #fff,1233px 285px #fff,784px 546px #fff,645px 285px #fff,1273px 1255px #fff,1821px 174px #fff,221px 1795px #fff,1004px 456px #fff,1298px 941px #fff,274px 387px #fff,174px 376px #fff,1491px 258px #fff,1489px 1946px #fff,1134px 1382px #fff,1289px 1145px #fff,464px 358px #fff,1249px 1842px #fff,1665px 831px #fff,1982px 84px #fff,541px 774px #fff,1994px 523px #fff,762px 1644px #fff,1730px 867px #fff,1951px 1287px #fff,911px 1691px #fff,1454px 725px #fff,1287px 1940px #fff,70px 564px #fff,1980px 638px #fff,1674px 1774px #fff,1720px 116px #fff,1747px 182px #fff,1040px 450px #fff,1795px 375px #fff,857px 1471px #fff,1326px 1730px #fff,915px 274px #fff,1224px 358px #fff,1808px 60px #fff,43px 1870px #fff,1810px 1536px #fff,1564px 1719px #fff,731px 1388px #fff,1953px 1967px #fff,1744px 1119px #fff,794px 1384px #fff,959px 714px #fff,18px 1932px #fff,1358px 1437px #fff,355px 939px #fff,1355px 1648px #fff,608px 719px #fff,383px 758px #fff,1164px 1681px #fff,1045px 253px #fff,424px 1279px #fff,1899px 359px #fff,379px 488px #fff,214px 465px #fff,179px 905px #fff,830px 1993px #fff,448px 1077px #fff,1880px 1354px #fff,1973px 347px #fff,745px 1025px #fff,788px 1007px #fff,1377px 883px #fff,6px 290px #fff,1312px 407px #fff,1398px 622px #fff,1405px 339px #fff,1198px 1709px #fff,988px 1226px #fff,87px 1459px #fff,1113px 1698px #fff,997px 732px #fff,708px 331px #fff,1876px 1112px #fff,1729px 1797px #fff,719px 703px #fff,1295px 522px #fff,758px 1061px #fff,1309px 1014px #fff,1327px 1365px #fff,854px 1317px #fff,531px 1001px #fff,1751px 1040px #fff,1354px 190px #fff,800px 1538px #fff,88px 1455px #fff,668px 39px #fff,1379px 41px #fff,892px 524px #fff,54px 649px #fff,1289px 730px #fff,727px 488px #fff,181px 842px #fff,1230px 64px #fff,3px 857px #fff,292px 1201px #fff,1343px 673px #fff,1096px 1412px #fff,1520px 292px #fff,104px 1683px #fff,934px 1387px #fff,314px 739px #fff; animation: animStar 100s linear infinite; }
        #stars2:after { content: " "; position: absolute; top: 2000px; width: 2px; height: 2px; background: transparent; box-shadow: 1925px 1320px #fff,693px 1778px #fff,1016px 711px #fff,1171px 563px #fff,661px 1919px #fff,1610px 44px #fff,1275px 140px #fff,1208px 1802px #fff,1473px 1587px #fff,11px 1117px #fff,853px 1757px #fff,1149px 937px #fff,1353px 428px #fff,270px 279px #fff,258px 1404px #fff,417px 1188px #fff,286px 561px #fff,393px 1765px #fff,147px 881px #fff,666px 1097px #fff,1425px 1278px #fff,806px 156px #fff,1252px 561px #fff,218px 52px #fff,1371px 1980px #fff,171px 745px #fff,1424px 89px #fff,137px 244px #fff,939px 1922px #fff,137px 1080px #fff,1757px 50px #fff,904px 536px #fff,1938px 1001px #fff,1172px 440px #fff,72px 1475px #fff,102px 121px #fff,804px 1671px #fff,1314px 270px #fff,440px 1341px #fff,1216px 511px #fff,1061px 1523px #fff,97px 274px #fff,704px 1318px #fff,52px 1872px #fff,1962px 296px #fff,111px 289px #fff,1157px 1236px #fff,1347px 1451px #fff,820px 286px #fff,1389px 1169px #fff,644px 841px #fff,1286px 522px #fff,955px 659px #fff,428px 1805px #fff,237px 557px #fff,1689px 1058px #fff,636px 1882px #fff,1349px 1664px #fff,1548px 432px #fff,1841px 504px #fff,302px 252px #fff,827px 1765px #fff,620px 123px #fff,207px 748px #fff,1454px 1234px #fff,1967px 1790px #fff,542px 33px #fff,742px 1214px #fff,255px 1402px #fff,74px 1772px #fff,699px 475px #fff,980px 1253px #fff,534px 1676px #fff,909px 202px #fff,1498px 1251px #fff,1796px 120px #fff,1409px 1263px #fff,1627px 995px #fff,969px 710px #fff,1674px 676px #fff,1832px 759px #fff,1623px 563px #fff,251px 1790px #fff,96px 1688px #fff,886px 239px #fff,778px 150px #fff,1767px 430px #fff,765px 1259px #fff,1189px 877px #fff,444px 1629px #fff,1560px 324px #fff,1952px 1097px #fff,712px 1173px #fff,541px 911px #fff,827px 1420px #fff,1233px 285px #fff,784px 546px #fff,645px 285px #fff,1273px 1255px #fff,1821px 174px #fff,221px 1795px #fff,1004px 456px #fff,1298px 941px #fff,274px 387px #fff,174px 376px #fff,1491px 258px #fff,1489px 1946px #fff,1134px 1382px #fff,1289px 1145px #fff,464px 358px #fff,1249px 1842px #fff,1665px 831px #fff,1982px 84px #fff,541px 774px #fff,1994px 523px #fff,762px 1644px #fff,1730px 867px #fff,1951px 1287px #fff,911px 1691px #fff,1454px 725px #fff,1287px 1940px #fff,70px 564px #fff,1980px 638px #fff,1674px 1774px #fff,1720px 116px #fff,1747px 182px #fff,1040px 450px #fff,1795px 375px #fff,857px 1471px #fff,1326px 1730px #fff,915px 274px #fff,1224px 358px #fff,1808px 60px #fff,43px 1870px #fff,1810px 1536px #fff,1564px 1719px #fff,731px 1388px #fff,1953px 1967px #fff,1744px 1119px #fff,794px 1384px #fff,959px 714px #fff,18px 1932px #fff,1358px 1437px #fff,355px 939px #fff,1355px 1648px #fff,608px 719px #fff,383px 758px #fff,1164px 1681px #fff,1045px 253px #fff,424px 1279px #fff,1899px 359px #fff,379px 488px #fff,214px 465px #fff,179px 905px #fff,830px 1993px #fff,448px 1077px #fff,1880px 1354px #fff,1973px 347px #fff,745px 1025px #fff,788px 1007px #fff,1377px 883px #fff,6px 290px #fff,1312px 407px #fff,1398px 622px #fff,1405px 339px #fff,1198px 1709px #fff,988px 1226px #fff,87px 1459px #fff,1113px 1698px #fff,997px 732px #fff,708px 331px #fff,1876px 1112px #fff,1729px 1797px #fff,719px 703px #fff,1295px 522px #fff,758px 1061px #fff,1309px 1014px #fff,1327px 1365px #fff,854px 1317px #fff,531px 1001px #fff,1751px 1040px #fff,1354px 190px #fff,800px 1538px #fff,88px 1455px #fff,668px 39px #fff,1379px 41px #fff,892px 524px #fff,54px 649px #fff,1289px 730px #fff,727px 488px #fff,181px 842px #fff,1230px 64px #fff,3px 857px #fff,292px 1201px #fff,1343px 673px #fff,1096px 1412px #fff,1520px 292px #fff,104px 1683px #fff,934px 1387px #fff,314px 739px #fff; }
        #stars3 { width: 3px; height: 3px; background: transparent; box-shadow: 200px 981px #fff,1731px 521px #fff,132px 1039px #fff,1888px 1547px #fff,899px 1226px #fff,1887px 580px #fff,1548px 1092px #fff,1626px 689px #fff,254px 1072px #fff,1684px 1211px #fff,672px 1267px #fff,939px 668px #fff,1969px 645px #fff,1126px 983px #fff,457px 568px #fff,476px 876px #fff,829px 1896px #fff,1364px 1846px #fff,1507px 1120px #fff,936px 1948px #fff,1833px 832px #fff,1424px 285px #fff,1377px 1596px #fff,432px 153px #fff,1348px 1410px #fff,1529px 954px #fff,1102px 387px #fff,264px 297px #fff,811px 977px #fff,1931px 673px #fff,1734px 978px #fff,1772px 1567px #fff,1197px 1400px #fff,764px 282px #fff,1103px 822px #fff,872px 1803px #fff,1057px 1763px #fff,52px 1299px #fff,1312px 1236px #fff,235px 1082px #fff,299px 1086px #fff,1017px 1602px #fff,1950px 626px #fff,1306px 132px #fff,1358px 1618px #fff,1873px 1718px #fff,1447px 940px #fff,1888px 1195px #fff,1704px 1765px #fff,872px 1357px #fff,1555px 1120px #fff,250px 1415px #fff,450px 415px #fff,492px 901px #fff,170px 1641px #fff,56px 1129px #fff,627px 1514px #fff,1221px 500px #fff,324px 1895px #fff,1397px 1775px #fff,1966px 598px #fff,1550px 763px #fff,326px 1605px #fff,261px 969px #fff,890px 281px #fff,736px 544px #fff,589px 1262px #fff,1581px 368px #fff,1900px 1132px #fff,1914px 585px #fff,1864px 1517px #fff,241px 217px #fff,859px 787px #fff,996px 1729px #fff,741px 121px #fff,418px 414px #fff,142px 967px #fff,387px 896px #fff,703px 562px #fff,968px 1136px #fff,1682px 332px #fff,1287px 846px #fff,256px 1427px #fff,1885px 432px #fff,1739px 1458px #fff,345px 1769px #fff,1140px 1612px #fff,192px 1921px #fff,920px 471px #fff,834px 881px #fff,917px 1803px #fff,466px 1266px #fff,483px 1108px #fff,689px 986px #fff,1279px 786px #fff,458px 910px #fff,1250px 870px #fff,785px 1654px #fff,1543px 1757px #fff,287px 1272px #fff; animation: animStar 150s linear infinite; }
        #stars3:after { content: " "; position: absolute; top: 2000px; width: 3px; height: 3px; background: transparent; box-shadow: 200px 981px #fff,1731px 521px #fff,132px 1039px #fff,1888px 1547px #fff,899px 1226px #fff,1887px 580px #fff,1548px 1092px #fff,1626px 689px #fff,254px 1072px #fff,1684px 1211px #fff,672px 1267px #fff,939px 668px #fff,1969px 645px #fff,1126px 983px #fff,457px 568px #fff,476px 876px #fff,829px 1896px #fff,1364px 1846px #fff,1507px 1120px #fff,936px 1948px #fff,1833px 832px #fff,1424px 285px #fff,1377px 1596px #fff,432px 153px #fff,1348px 1410px #fff,1529px 954px #fff,1102px 387px #fff,264px 297px #fff,811px 977px #fff,1931px 673px #fff,1734px 978px #fff,1772px 1567px #fff,1197px 1400px #fff,764px 282px #fff,1103px 822px #fff,872px 1803px #fff,1057px 1763px #fff,52px 1299px #fff,1312px 1236px #fff,235px 1082px #fff,299px 1086px #fff,1017px 1602px #fff,1950px 626px #fff,1306px 132px #fff,1358px 1618px #fff,1873px 1718px #fff,1447px 940px #fff,1888px 1195px #fff,1704px 1765px #fff,872px 1357px #fff,1555px 1120px #fff,250px 1415px #fff,450px 415px #fff,492px 901px #fff,170px 1641px #fff,56px 1129px #fff,627px 1514px #fff,1221px 500px #fff,324px 1895px #fff,1397px 1775px #fff,1966px 598px #fff,1550px 763px #fff,326px 1605px #fff,261px 969px #fff,890px 281px #fff,736px 544px #fff,589px 1262px #fff,1581px 368px #fff,1900px 1132px #fff,1914px 585px #fff,1864px 1517px #fff,241px 217px #fff,859px 787px #fff,996px 1729px #fff,741px 121px #fff,418px 414px #fff,142px 967px #fff,387px 896px #fff,703px 562px #fff,968px 1136px #fff,1682px 332px #fff,1287px 846px #fff,256px 1427px #fff,1885px 432px #fff,1739px 1458px #fff,345px 1769px #fff,1140px 1612px #fff,192px 1921px #fff,920px 471px #fff,834px 881px #fff,917px 1803px #fff,466px 1266px #fff,483px 1108px #fff,689px 986px #fff,1279px 786px #fff,458px 910px #fff,1250px 870px #fff,785px 1654px #fff,1543px 1757px #fff,287px 1272px #fff; }

        @keyframes animStar { from { transform: translateY(0px); } to { transform: translateY(-2000px); } }

        /* ========== LOADER ========== */
        #loader { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(10,14,26,0.95); display: flex; flex-direction: column; justify-content: center; align-items: center; z-index: 99999; transition: opacity 0.8s ease; }
        .loader-ring { width: 80px; height: 80px; border: 4px solid rgba(255,255,255,0.05); border-top: 4px solid #ff6b6b; border-right: 4px solid #ffd93d; border-bottom: 4px solid #6bcb77; border-left: 4px solid #4d96ff; border-radius: 50%; animation: spinLoader 1.5s linear infinite; position: relative; }
        .loader-ring::before { content: ''; position: absolute; top: 10px; left: 10px; width: 60px; height: 60px; border: 3px solid transparent; border-top: 3px solid #ff6b6b; border-radius: 50%; animation: spinLoader 1s linear infinite reverse; }
        .loader-text { margin-top: 20px; color: #94a3b8; font-size: 16px; animation: pulseText 1.5s ease-in-out infinite; letter-spacing: 3px; }
        @keyframes spinLoader { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        @keyframes pulseText { 0%,100% { opacity: 1; transform: scale(1); } 50% { opacity: 0.3; transform: scale(0.95); } }

        /* ========== HEADER ========== */
        .header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(10,14,26,0.85);
            backdrop-filter: blur(30px);
            padding: 10px 0;
            border-bottom: 1px solid rgba(255,255,255,0.03);
            transition: all 0.3s ease;
        }
        .header.scrolled {
            background: rgba(10,14,26,0.98);
            box-shadow: 0 4px 40px rgba(0,0,0,0.5);
            padding: 5px 0;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            gap: 20px;
        }

        .nav-logo {
            color: #fff;
            text-decoration: none;
            font-size: 28px;
            font-weight: 900;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: 0.3s;
            flex-shrink: 0;
            z-index: 1001;
        }
        .nav-logo:hover {
            transform: scale(1.05);
        }
        .nav-logo span {
            background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff, #ff6b6b);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: rainbowText 4s ease infinite;
        }
        @keyframes rainbowText { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }
        .nav-logo i {
            font-size: 32px;
            color: #ff6b6b;
            animation: floatLogo 2s ease-in-out infinite;
        }
        @keyframes floatLogo { 0%,100% { transform: translateY(0) rotate(0deg); } 50% { transform: translateY(-8px) rotate(8deg); } }

        .nav-toggle {
            display: none;
            flex-direction: column;
            gap: 5px;
            background: none;
            border: none;
            cursor: pointer;
            padding: 5px;
            z-index: 1001;
            flex-shrink: 0;
        }
        .nav-toggle span {
            width: 28px;
            height: 3px;
            background: #fff;
            transition: all 0.3s ease;
            border-radius: 2px;
            display: block;
        }
        .nav-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 6px);
        }
        .nav-toggle.active span:nth-child(2) {
            opacity: 0;
            transform: scale(0);
        }
        .nav-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -6px);
        }

        .nav-menu {
            display: flex;
            align-items: center;
            flex: 1;
            justify-content: flex-end;
        }
        .nav-list {
            display: flex;
            align-items: center;
            gap: 8px;
            list-style: none;
            margin: 0;
            padding: 0;
            flex-wrap: nowrap;
        }
        .nav-item {
            position: relative;
            flex-shrink: 0;
        }
        .nav-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 8px 16px;
            color: #e2e8f0;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            border-radius: 10px;
            transition: all 0.3s ease;
            white-space: nowrap;
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 4px;
            left: 50%;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            border-radius: 2px;
        }
        .nav-link:hover::after {
            width: 60%;
        }
        .nav-link:hover {
            color: #fff;
            background: rgba(255,255,255,0.04);
            transform: translateY(-2px);
        }
        .nav-link.active {
            color: #fff;
            background: rgba(255,255,255,0.06);
        }
        .nav-link .arrow {
            font-size: 11px;
            transition: transform 0.3s ease;
        }

        /* ===== MEGA MENU ===== */
        .mega-menu-content {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(15px);
            min-width: 220px;
            background: rgba(10,14,26,0.97);
            backdrop-filter: blur(40px);
            padding: 15px 20px;
            border-radius: 16px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(255,255,255,0.04);
            box-shadow: 0 30px 80px rgba(0,0,0,0.6);
            z-index: 100;
        }
        .nav-item:hover .mega-menu-content {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }
        .nav-item:hover .nav-link .arrow {
            transform: rotate(180deg);
        }
        .nav-item-mega .mega-menu-content {
            display: block;
        }
        .mega-menu-col ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 4px;
            margin: 0;
            padding: 0;
        }
        .mega-menu-col ul li {
            display: block;
            width: 100%;
        }
        .mega-menu-col ul li a {
            color: #94a3b8;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            font-size: 13px;
            padding: 8px 12px;
            border-radius: 8px;
            font-weight: 500;
            white-space: nowrap;
        }
        .mega-menu-col ul li a:hover {
            color: #fff;
            background: rgba(255,107,107,0.06);
            transform: translateX(6px);
        }
        .mega-menu-col ul li a i {
            width: 20px;
            color: #ff6b6b;
            font-size: 14px;
            transition: 0.3s;
            flex-shrink: 0;
        }
        .mega-menu-col ul li a:hover i {
            color: #ffd93d;
            transform: scale(1.2);
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff6b6b, #ee5a24, #ff6b6b);
            background-size: 200% 200%;
            animation: btnGradient 3s ease infinite;
            color: #fff !important;
            padding: 10px 28px !important;
            border-radius: 50px !important;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            display: inline-block;
            position: relative;
            overflow: hidden;
            font-size: 14px;
        }
        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: 0.6s;
        }
        .btn-primary:hover::before {
            left: 100%;
        }
        .btn-primary:hover {
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 10px 40px rgba(255,107,107,0.4);
        }
        @keyframes btnGradient { 0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; } }

        /* ========== SECTIONS ========== */
        .section-padding { padding: 100px 0; position: relative; z-index: 1; }
        .section-header { text-align: center; margin-bottom: 60px; }
        .section-header .section-tag { display: inline-block; background: linear-gradient(135deg, rgba(255,107,107,0.08), rgba(255,217,61,0.08)); padding: 6px 22px; border-radius: 50px; font-size: 12px; color: #ffd93d; margin-bottom: 15px; border: 1px solid rgba(255,217,61,0.06); letter-spacing: 2px; text-transform: uppercase; }
        .section-header .section-tag i { margin-right: 6px; color: #ff6b6b; }
        .section-header h2 { font-size: 48px; font-weight: 800; margin-bottom: 15px; }
        .section-header h2 span { background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff); background-size: 300% 300%; -webkit-background-clip: text; -webkit-text-fill-color: transparent; animation: rainbowText 4s ease infinite; }
        .section-header p { color: #94a3b8; font-size: 18px; max-width: 600px; margin: 0 auto; }

        /* ========== FOOTER ========== */
        .footer {
            background: rgba(6,10,22,0.8);
            backdrop-filter: blur(20px);
            padding: 70px 0 20px;
            border-top: 1px solid rgba(255,255,255,0.02);
            position: relative;
            z-index: 1;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 40px;
        }
        .footer-logo {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 15px;
            display: block;
            text-decoration: none;
            color: #fff;
        }
        .footer-logo span {
            background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .footer-col p {
            color: #64748b;
            line-height: 1.8;
            margin-bottom: 20px;
            font-size: 14px;
        }
        .footer-social { display: flex; gap: 10px; }
        .footer-social a { width: 42px; height: 42px; background: rgba(255,255,255,0.02); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #94a3b8; text-decoration: none; transition: all 0.4s ease; border: 1px solid rgba(255,255,255,0.02); }
        .footer-social a:hover { background: linear-gradient(135deg, #ff6b6b, #ee5a24); color: #fff; transform: translateY(-5px) scale(1.1) rotate(10deg); box-shadow: 0 10px 30px rgba(255,107,107,0.2); }
        .footer-col h4 { font-size: 15px; margin-bottom: 20px; color: #fff; font-weight: 600; }
        .footer-col ul { list-style: none; }
        .footer-col ul li { margin-bottom: 10px; }
        .footer-col ul li a { color: #64748b; text-decoration: none; transition: all 0.3s ease; font-size: 14px; display: inline-block; }
        .footer-col ul li a:hover { color: #ff6b6b; transform: translateX(8px); }
        .footer-contact li { color: #64748b; display: flex; align-items: center; gap: 12px; margin-bottom: 12px; font-size: 14px; }
        .footer-contact li i { width: 20px; color: #ff6b6b; font-size: 16px; }
        .footer-bottom { border-top: 1px solid rgba(255,255,255,0.02); padding-top: 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; }
        .footer-bottom p { color: #64748b; font-size: 13px; }
        .footer-bottom-links { display: flex; gap: 20px; flex-wrap: wrap; }
        .footer-bottom-links a { color: #64748b; text-decoration: none; font-size: 13px; transition: 0.3s; }
        .footer-bottom-links a:hover { color: #ff6b6b; }

        /* ========== HERO ========== */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 80px;
            position: relative;
            overflow: hidden;
            background: transparent !important;
            z-index: 1;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: -40%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(255,107,107,0.08), transparent 70%);
            border-radius: 50%;
            animation: floatBubble 8s ease-in-out infinite;
            pointer-events: none;
        }
        .hero::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(77,150,255,0.05), transparent 70%);
            border-radius: 50%;
            animation: floatBubble 10s ease-in-out infinite reverse;
            pointer-events: none;
        }
        @keyframes floatBubble { 0%,100% { transform: translate(0,0) scale(1); } 33% { transform: translate(50px,-50px) scale(1.3); } 66% { transform: translate(-40px,40px) scale(0.8); } }

        .hero .particles {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            overflow: hidden;
        }
        .hero .particles .particle {
            position: absolute;
            border-radius: 50%;
            animation: particleFloat 15s ease-in-out infinite;
        }
        .hero .particles .particle:nth-child(1) {
            width: 6px;
            height: 6px;
            background: #ff6b6b;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
            box-shadow: 0 0 20px #ff6b6b;
        }
        .hero .particles .particle:nth-child(2) {
            width: 8px;
            height: 8px;
            background: #ffd93d;
            top: 60%;
            right: 5%;
            animation-delay: -2s;
            box-shadow: 0 0 25px #ffd93d;
        }
        .hero .particles .particle:nth-child(3) {
            width: 5px;
            height: 5px;
            background: #6bcb77;
            top: 30%;
            right: 25%;
            animation-delay: -4s;
            box-shadow: 0 0 15px #6bcb77;
        }
        .hero .particles .particle:nth-child(4) {
            width: 10px;
            height: 10px;
            background: #4d96ff;
            bottom: 20%;
            left: 20%;
            animation-delay: -6s;
            box-shadow: 0 0 30px #4d96ff;
        }
        .hero .particles .particle:nth-child(5) {
            width: 7px;
            height: 7px;
            background: #ff6b6b;
            top: 70%;
            left: 40%;
            animation-delay: -3s;
            box-shadow: 0 0 20px #ff6b6b;
        }
        @keyframes particleFloat {
            0%,100% { transform: translate(0,0) scale(1); }
            25% { transform: translate(60px,-80px) scale(1.5); }
            50% { transform: translate(-40px,60px) scale(0.7); }
            75% { transform: translate(80px,40px) scale(1.3); }
        }

        .hero .floating-shapes .shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.03;
            animation: shapeFloat 25s ease-in-out infinite;
        }
        .hero .floating-shapes .shape:nth-child(1) {
            width: 150px;
            height: 150px;
            background: #ff6b6b;
            top: 5%;
            left: 3%;
            animation-delay: 0s;
        }
        .hero .floating-shapes .shape:nth-child(2) {
            width: 100px;
            height: 100px;
            background: #ffd93d;
            top: 75%;
            right: 5%;
            animation-delay: -5s;
        }
        .hero .floating-shapes .shape:nth-child(3) {
            width: 80px;
            height: 80px;
            background: #6bcb77;
            top: 45%;
            right: 18%;
            animation-delay: -10s;
        }
        .hero .floating-shapes .shape:nth-child(4) {
            width: 120px;
            height: 120px;
            background: #4d96ff;
            bottom: 15%;
            left: 25%;
            animation-delay: -15s;
        }
        .hero .floating-shapes .shape:nth-child(5) {
            width: 60px;
            height: 60px;
            background: #ff6b6b;
            top: 30%;
            left: 50%;
            animation-delay: -7s;
        }
        @keyframes shapeFloat {
            0%,100% { transform: translate(0,0) rotate(0deg) scale(1); }
            25% { transform: translate(80px,-60px) rotate(90deg) scale(1.2); }
            50% { transform: translate(-50px,70px) rotate(180deg) scale(0.8); }
            75% { transform: translate(100px,50px) rotate(270deg) scale(1.1); }
        }

        .hero-content {
            max-width: 700px;
            z-index: 2;
            position: relative;
        }
        .hero-content .badge {
            display: inline-block;
            background: linear-gradient(135deg, rgba(255,107,107,0.15), rgba(255,217,61,0.15));
            padding: 8px 22px;
            border-radius: 50px;
            font-size: 13px;
            color: #ffd93d;
            margin-bottom: 20px;
            border: 1px solid rgba(255,217,61,0.1);
            animation: fadeInUp 1s ease;
            letter-spacing: 1px;
        }
        .hero-content .badge i {
            margin-right: 6px;
            animation: pulse 2s ease-in-out infinite;
        }
        .hero-content h1 {
            font-size: 72px;
            font-weight: 900;
            line-height: 1.05;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease 0.2s both;
        }
        .hero-content h1 span {
            background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff, #ff6b6b);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: rainbowText 4s ease infinite;
        }
        .hero-content p {
            font-size: 20px;
            color: #94a3b8;
            margin-bottom: 30px;
            line-height: 1.8;
            animation: fadeInUp 1s ease 0.4s both;
        }
        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            animation: fadeInUp 1s ease 0.6s both;
        }
        .hero-stats {
            display: flex;
            gap: 50px;
            margin-top: 50px;
            animation: fadeInUp 1s ease 0.8s both;
        }
        .hero-stats .stat {
            text-align: center;
        }
        .hero-stats .stat h3 {
            font-size: 42px;
            font-weight: 800;
            background: linear-gradient(135deg, #ff6b6b, #ffd93d, #6bcb77, #4d96ff);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: rainbowText 4s ease infinite;
        }
        .hero-stats .stat p {
            font-size: 14px;
            color: #64748b;
            margin: 0;
            letter-spacing: 1px;
        }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(50px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes pulse { 0%,100% { opacity: 1; } 50% { opacity: 0.5; } }

        .hero-image {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 40%;
            max-width: 480px;
            z-index: 1;
        }
        .hero-image .hero-rotator {
            width: 100%;
            aspect-ratio: 1;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(255,107,107,0.05), rgba(77,150,255,0.05));
            border: 2px solid rgba(255,255,255,0.02);
            display: flex;
            align-items: center;
            justify-content: center;
            animation: rotateIn 20s linear infinite;
            position: relative;
        }
        .hero-image .hero-rotator::before {
            content: '';
            position: absolute;
            width: 85%;
            height: 85%;
            border-radius: 50%;
            border: 2px dashed rgba(255,107,107,0.08);
            animation: rotateIn 30s linear infinite reverse;
        }
        .hero-image .hero-rotator::after {
            content: '';
            position: absolute;
            width: 70%;
            height: 70%;
            border-radius: 50%;
            border: 2px dashed rgba(77,150,255,0.05);
            animation: rotateIn 40s linear infinite;
        }
        .hero-image .hero-rotator .center-icon {
            font-size: 90px;
            color: #ff6b6b;
            animation: pulse 2s ease-in-out infinite;
        }
        @keyframes rotateIn { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }

        /* ========== GLASS CARDS ========== */
        .glass {
            background: rgba(80,85,95,0.08);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(200,200,200,0.05);
            border-radius: 20px;
            padding: 35px;
            transition: all 0.6s cubic-bezier(0.175,0.885,0.32,1.275);
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }
        .glass::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at var(--mouse-x,50%) var(--mouse-y,50%), rgba(200,200,200,0.03), transparent 50%);
            opacity: 0;
            transition: 0.5s;
        }
        .glass:hover::before { opacity: 1; }
        .glass:hover {
            transform: translateY(-15px) scale(1.03);
            border-color: rgba(200,200,200,0.12);
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            background: rgba(80,85,95,0.12);
        }

        /* ========== MOBİL RESPONSIVE ========== */
        @media (max-width: 992px) {
            .nav-toggle {
                display: flex !important;
            }
            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 85%;
                max-width: 380px;
                height: 100vh;
                height: 100dvh;
                background: #0a0e1a;
                padding: 80px 30px 30px;
                transition: right 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                overflow-y: auto;
                z-index: 999;
                display: block !important;
                justify-content: flex-start;
                flex: none;
                box-shadow: -10px 0 40px rgba(0,0,0,0.5);
                opacity: 1 !important;
                visibility: visible !important;
            }
            .nav-menu.active {
                right: 0;
            }
            .nav-list {
                flex-direction: column;
                align-items: stretch;
                gap: 5px;
                width: 100%;
                flex-wrap: wrap;
                margin-top: 20px;
            }
            .nav-item {
                width: 100%;
                flex-shrink: 0;
            }
            .nav-link {
                padding: 12px 18px;
                font-size: 16px;
                white-space: normal;
                display: flex;
                justify-content: space-between;
                width: 100%;
                color: #e2e8f0 !important;
            }
            .nav-link::after {
                display: none;
            }
            .nav-link.btn-primary {
                background: linear-gradient(135deg, #ff6b6b, #ee5a24, #ff6b6b) !important;
                color: #fff !important;
                padding: 12px 24px !important;
                border-radius: 50px !important;
                text-align: center;
                justify-content: center;
                margin-top: 10px;
            }
            .nav-container {
                gap: 10px;
            }
            .nav-logo {
                font-size: 22px;
            }
            .nav-logo i {
                font-size: 24px;
            }

            /* MOBİL MEGA MENÜ DÜZELTİLDİ */
            .mega-menu-content {
                position: static;
                transform: none !important;
                opacity: 1 !important;
                visibility: visible !important;
                min-width: auto;
                padding: 10px 15px;
                margin-top: 5px;
                background: rgba(255,255,255,0.03);
                border-radius: 12px;
                border: 1px solid rgba(255,255,255,0.03);
                display: none !important;
                box-shadow: none;
                width: 100%;
                max-height: 300px;
                overflow-y: auto;
            }
            .mega-menu-content.active-mobile {
                display: block !important;
            }
            .nav-item:hover .mega-menu-content {
                opacity: 1;
                visibility: visible;
                transform: none;
            }
            .nav-item-mega .mega-menu-content {
                display: none !important;
            }
            .nav-item-mega .mega-menu-content.active-mobile {
                display: block !important;
            }
            .mega-menu-col ul li a {
                padding: 10px 12px;
                font-size: 14px;
                white-space: normal;
                word-wrap: break-word;
            }
            .mega-menu-col ul li a i {
                width: 24px;
                font-size: 16px;
                flex-shrink: 0;
            }
            .nav-link.nav-toggle-mega {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
            }
            .nav-link.nav-toggle-mega .arrow {
                transition: transform 0.3s ease;
                font-size: 12px;
            }
            .nav-link.nav-toggle-mega .arrow.rotated {
                transform: rotate(180deg);
            }

            .section-padding { padding: 70px 0; }
            .section-header h2 { font-size: 36px; }
            .footer-grid { grid-template-columns: 1fr 1fr; }
            .hero-content h1 { font-size: 52px; }
            .hero-image { display: none; }
            .hero-stats { gap: 30px; flex-wrap: wrap; }
            .header {
                padding: 10px 0;
            }
        }

        @media (max-width: 768px) {
            .header {
                padding: 8px 0;
            }
            .nav-toggle {
                display: flex !important;
            }
            .nav-toggle span {
                width: 24px;
                height: 2.5px;
            }
            .nav-logo {
                font-size: 18px;
            }
            .nav-logo i {
                font-size: 20px;
            }
            .section-padding { padding: 50px 0; }
            .section-header h2 { font-size: 28px; }
            .section-header p { font-size: 14px; }
            .section-header { margin-bottom: 35px; }
            .container { padding: 0 15px; }
            .footer-grid { grid-template-columns: 1fr; gap: 30px; }
            .footer-bottom { flex-direction: column; text-align: center; }
            .hero-content h1 { font-size: 42px; }
            .hero-stats { gap: 15px; flex-wrap: wrap; justify-content: center; }
            .hero-stats .stat h3 { font-size: 24px; }
            .hero-buttons { flex-direction: column; align-items: stretch; }
            .hero-buttons a { text-align: center; }
            .hero { min-height: 90vh; padding-top: 60px; }
            .nav-menu {
                padding: 70px 20px 20px;
                width: 80%;
                max-width: 320px;
            }
        }

        @media (max-width: 480px) {
            .section-padding { padding: 35px 0; }
            .section-header h2 { font-size: 22px; }
            .footer { padding: 30px 0 15px; }
            .hero-content h1 { font-size: 32px; }
            .hero-content p { font-size: 16px; }
            .hero-stats .stat h3 { font-size: 24px; }
            .nav-logo { font-size: 16px; }
            .nav-logo i { font-size: 18px; }
            .nav-toggle span {
                width: 20px;
                height: 2px;
            }
            .nav-menu {
                padding: 60px 15px 15px;
                width: 85%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <!-- Yıldızlı Arkaplan -->
    <div class="star-bg">
        <div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
    </div>

    <!-- LOADER -->
    <div id="loader">
        <div class="loader-ring"></div>
        <div class="loader-text">✦ YÜKLENİYOR ✦</div>
    </div>

    <!-- HEADER -->
    <header class="header" id="header">
        <div class="container">
            <div class="nav-container">
                <a href="{{ route('home') }}" class="nav-logo">
                    <i class="fas fa-cubes"></i>
                    <span>Yazılım</span> Şirketi
                </a>

                <button class="nav-toggle" id="navToggle" aria-label="Menü">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="nav-menu" id="navMenu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Ana Sayfa</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Hakkımızda</a>
                        </li>
                        <li class="nav-item nav-item-mega">
                            <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services*') ? 'active' : '' }} nav-toggle-mega" onclick="return handleMegaLink(event)">
                                Hizmetlerimiz <i class="fas fa-chevron-down arrow"></i>
                            </a>
                            <div class="mega-menu-content" id="megaMenu">
                                <div class="mega-menu-col">
                                    <ul>
                                        <li><a href="{{ route('crm') }}"><i class="fas fa-users"></i> CRM Çözümleri</a></li>
                                        <li><a href="{{ route('sektorel') }}"><i class="fas fa-industry"></i> Sektörel Çözümler</a></li>
                                        <li><a href="{{ route('eticaret') }}"><i class="fas fa-shopping-cart"></i> E-Ticaret</a></li>
                                        <li><a href="{{ route('edonusum') }}"><i class="fas fa-sync-alt"></i> E-Dönüşüm</a></li>
                                        <li><a href="{{ route('erp') }}"><i class="fas fa-cubes"></i> ERP Çözümleri</a></li>
                                        <li><a href="{{ route('mobil') }}"><i class="fas fa-mobile-alt"></i> Mobil Çözümler</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('references') }}" class="nav-link {{ request()->routeIs('references') ? 'active' : '' }}">Referanslarımız</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">Projelerimiz</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('blog') }}" class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('news') }}" class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}">Haberlerimiz</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact') }}" class="nav-link btn-primary {{ request()->routeIs('contact') ? 'active' : '' }}">İletişim</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <main>@yield('content')</main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <a href="{{ route('home') }}" class="footer-logo">Yazılım <span>Şirketi</span></a>
                    <p>Geleceğin teknolojilerini bugünden sizlere sunuyor, işinize değer katıyoruz. 8 yıllık deneyimle yanınızdayız.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Hızlı Linkler</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Ana Sayfa</a></li>
                        <li><a href="{{ route('about') }}">Hakkımızda</a></li>
                        <li><a href="{{ route('services') }}">Hizmetler</a></li>
                        <li><a href="{{ route('references') }}">Referanslar</a></li>
                        <li><a href="{{ route('projects') }}">Projeler</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('news') }}">Haberler</a></li>
                        <li><a href="{{ route('contact') }}">İletişim</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Hizmetler</h4>
                    <ul>
                        <li><a href="{{ route('crm') }}">CRM Çözümleri</a></li>
                        <li><a href="{{ route('sektorel') }}">Sektörel Çözümler</a></li>
                        <li><a href="{{ route('eticaret') }}">E-Ticaret</a></li>
                        <li><a href="{{ route('edonusum') }}">E-Dönüşüm</a></li>
                        <li><a href="{{ route('erp') }}">ERP Çözümleri</a></li>
                        <li><a href="{{ route('mobil') }}">Mobil Çözümler</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>İletişim</h4>
                    <ul class="footer-contact">
                        <li><i class="fas fa-map-marker-alt"></i> İstanbul, Türkiye</li>
                        <li><i class="fas fa-phone"></i> +90 (555) 123 45 67</li>
                        <li><i class="fas fa-envelope"></i> info@sirket.com</li>
                        <li><i class="fas fa-clock"></i> Paz-Cum: 09:00 - 18:00</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Yazılım Şirketi. Tüm hakları saklıdır.</p>
                <div class="footer-bottom-links">
                    <a href="#">Gizlilik Politikası</a>
                    <a href="#">Kullanım Koşulları</a>
                    <a href="#">Çerez Politikası</a>
                    <a href="#">KVKK</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: false, offset: 60, easing: 'ease-out-cubic', mirror: true });

        window.addEventListener('load', function() {
            document.getElementById('loader').style.opacity = '0';
            setTimeout(() => { document.getElementById('loader').style.display = 'none'; }, 800);
        });

        window.addEventListener('scroll', function() {
            document.getElementById('header').classList.toggle('scrolled', window.scrollY > 50);
        });

        // ========================================
        // MOBİL MENÜ TOGGLE
        // ========================================
        const toggle = document.getElementById('navToggle');
        const menu = document.getElementById('navMenu');

        toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            this.classList.toggle('active');
            menu.classList.toggle('active');
            document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : '';
        });

        document.querySelectorAll('.nav-link:not(.nav-toggle-mega)').forEach(function(l) {
            l.addEventListener('click', function() {
                if (window.innerWidth <= 992) {
                    toggle.classList.remove('active');
                    menu.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });

        // ========================================
        // MOBİL MEGA MENÜ TOGGLE (DÜZELTİLDİ)
        // ========================================
        let isMobile = window.innerWidth <= 992;

        window.addEventListener('resize', function() {
            isMobile = window.innerWidth <= 992;
            if (!isMobile) {
                const megaMenu = document.getElementById('megaMenu');
                if (megaMenu) {
                    megaMenu.classList.remove('active-mobile');
                }
                const arrowIcon = document.querySelector('.nav-toggle-mega .arrow');
                if (arrowIcon) {
                    arrowIcon.classList.remove('rotated');
                }
            }
        });

        function handleMegaLink(event) {
            if (isMobile) {
                event.preventDefault();
                event.stopPropagation();

                const megaMenu = document.getElementById('megaMenu');
                const arrowIcon = document.querySelector('.nav-toggle-mega .arrow');

                if (!megaMenu) return false;

                const isOpen = megaMenu.classList.contains('active-mobile');

                document.querySelectorAll('.mega-menu-content.active-mobile').forEach(function(menu) {
                    if (menu !== megaMenu) {
                        menu.classList.remove('active-mobile');
                    }
                });

                if (isOpen) {
                    megaMenu.classList.remove('active-mobile');
                    if (arrowIcon) arrowIcon.classList.remove('rotated');
                } else {
                    megaMenu.classList.add('active-mobile');
                    if (arrowIcon) arrowIcon.classList.add('rotated');
                }
                return false;
            }
            return true;
        }

        document.addEventListener('click', function(e) {
            if (!isMobile) return;

            const megaMenu = document.getElementById('megaMenu');
            const toggleLink = document.querySelector('.nav-toggle-mega');

            if (megaMenu && megaMenu.classList.contains('active-mobile')) {
                if (!megaMenu.contains(e.target) && !toggleLink.contains(e.target)) {
                    megaMenu.classList.remove('active-mobile');
                    const arrowIcon = document.querySelector('.nav-toggle-mega .arrow');
                    if (arrowIcon) arrowIcon.classList.remove('rotated');
                }
            }
        });

        document.querySelectorAll('.mega-menu-content a').forEach(function(link) {
            link.addEventListener('click', function() {
                if (window.innerWidth <= 992) {
                    const megaMenu = document.getElementById('megaMenu');
                    const arrowIcon = document.querySelector('.nav-toggle-mega .arrow');
                    if (megaMenu) {
                        megaMenu.classList.remove('active-mobile');
                        if (arrowIcon) arrowIcon.classList.remove('rotated');
                    }
                    toggle.classList.remove('active');
                    menu.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });

        // Counter animasyonları
        function animateCounters() {
            document.querySelectorAll('.counter-number').forEach(c => {
                const target = parseInt(c.dataset.target);
                let current = 0;
                const increment = target / 60;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) { c.textContent = target + '+'; clearInterval(timer); }
                    else { c.textContent = Math.floor(current) + '+'; }
                }, 25);
            });
        }
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => { if (entry.isIntersecting) { animateCounters(); counterObserver.disconnect(); } });
        });
        document.querySelectorAll('.counter-number').forEach(el => counterObserver.observe(el));

        console.log('✅ Site başarıyla yüklendi!');
    </script>
    @stack('scripts')
</body>
</html>
