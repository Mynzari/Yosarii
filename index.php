

<?php
require_once 'config.php';

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="Minecraft Website" name="description">
    <meta content="Minecraft, Servidor, Website" name="keywords">

    <!-- Custom files -->
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <!-- Font-Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" rel="stylesheet" crossorigin="anonymous">

    <title>Ojalá te Nelly</title>

    <base href="/">
</head>
<body>

<main id="main">
    <div class="content">
        <div class="top-bar">
            <span class="right inner-switch"></span>
            <span class="left">
                    <a href="<?php echo $twitter_link ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="ts3server://<?php echo $teamspeak_ip ?>?port=9987" target="_blank"><i
                                class="fab fa-teamspeak"></i></a>
                    <a href="<?php echo $discord_link ?>" target="_blank"><i class="fab fa-discord"></i></a>
                </span>
        </div>

        <div class="header">
            <img src="<?php echo $actual_link ?>/img/placeholder.png" alt="Server Logo">
            <h1><?php echo $header_title ?></h1>

            <div class="server-info">
                <p><?php echo $header_caption ?></p>
                <a href="#" class="portal-button end-bg" id="players-online"><?php echo $server_info_loading ?>
                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></a>
            </div>
        </div>

        <hr>

        <div class="items">
            <div class="item">
                <img src="<?php echo $actual_link ?>/img/placeholder.png" alt="Forum"><br>
                <p>Foro</p>
            </div>

            <div class="item">
                <img src="<?php echo $actual_link ?>/img/placeholder.png" alt="Vote"><br>
                <p>Votar</p>
            </div>

            <div class="item">
                <img src="<?php echo $actual_link ?>/img/placeholder.png" alt="Shop"><br>
                <p>Tienda</p>
            </div>
        </div>

    </div>
</main>

<footer id="footer">
    <a href="<?php echo $footer_imprint_link ?>" target="_blank"><?php echo $footer_imprint_text ?></a>
    <p>Copyright &copy;
        <script>document.write(new Date().getFullYear())</script>
        <a href="https://twitter.com/einpume" target="_blank">
            <script type='text/javascript'>const s="Ojdpmbt!Qsptlf!)qvnf*";let m="";for(let i=0;i<s.length;i+=1){if(s.charCodeAt(i)===28){m+='&'}else if(s.charCodeAt(i)===23){m+='!'}else{m+=String.fromCharCode(s.charCodeAt(i)-1)}}document.write(m);</script>
        </a></p>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

<script>
    const url="https://mcapi.us/server/status?ip=<?php echo $server_ip ?>";const id="#players-online";var _0x162f=['text','compile','removeClass','dark','Dark\x20🌘\x20Mode','Light\x20🌔\x20Mode','body','match','test','.inner-switch','hasClass','constructor'];(function(_0x2015fd,_0x162f43){var _0x662aa2=function(_0x3115dd){while(_0x3115dd-=1){_0x2015fd['push'](_0x2015fd['shift']())}};var _0x501d26=function(){var _0x5b5b62={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x292d03,_0x504512,_0x3605e4,_0x4f8468){_0x4f8468=_0x4f8468||{};var _0x1297d9=_0x504512+'='+_0x3605e4;var _0x27b07d=0x0;for(var _0x15989d=0x0,_0x1aaec1=_0x292d03['length'];_0x15989d<_0x1aaec1;_0x15989d+=1){var _0x3fae96=_0x292d03[_0x15989d];_0x1297d9+=';\x20'+_0x3fae96;var _0x5d5735=_0x292d03[_0x3fae96];_0x292d03['push'](_0x5d5735);_0x1aaec1=_0x292d03['length'];if(_0x5d5735!==!![]){_0x1297d9+='='+_0x5d5735}}_0x4f8468['cookie']=_0x1297d9},'removeCookie':function(){return 'dev'},'getCookie':function(_0x66ea1b,_0x5a1b49){_0x66ea1b=_0x66ea1b||function(_0x208999){return _0x208999};var _0x3a6c4b=_0x66ea1b(new RegExp('(?:^|;\x20)'+_0x5a1b49['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x4a2168=function(_0x2d2e6a,_0x2fabb6){_0x2d2e6a(_0x2fabb6+=1)};_0x4a2168(_0x662aa2,_0x162f43);return _0x3a6c4b?decodeURIComponent(_0x3a6c4b[0x1]):undefined}};var _0x4cd3dd=function(){var _0x24a03a=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x24a03a['test'](_0x5b5b62['removeCookie']['toString']())};_0x5b5b62['updateCookie']=_0x4cd3dd;var _0x39c7bf='';var _0x58cf9e=_0x5b5b62['updateCookie']();if(!_0x58cf9e){_0x5b5b62['setCookie'](['*'],'counter',0x1)}else if(_0x58cf9e){_0x39c7bf=_0x5b5b62['getCookie'](null,'counter')}else{_0x5b5b62['removeCookie']()}};_0x501d26()}(_0x162f,0xea));var _0x662a=function(_0x2015fd,_0x162f43){_0x2015fd=_0x2015fd-0x0;var _0x662aa2=_0x162f[_0x2015fd];return _0x662aa2};var _0x5b5b62=function(){var _0xd938d3=!![];return function(_0x18bff5,_0x4c011){var _0x309817=_0xd938d3?function(){if(_0x4c011){var _0x528e14=_0x4c011['apply'](_0x18bff5,arguments);_0x4c011=null;return _0x528e14}}:function(){};_0xd938d3=![];return _0x309817}}();var _0x3115dd=_0x5b5b62(this,function(){var _0x3ebf7c=function(){var _0x373c62=_0x3ebf7c[_0x662a('0x5')]('return\x20/\x22\x20+\x20this\x20+\x20\x22/')()[_0x662a('0x7')]('^([^\x20]+(\x20+[^\x20]+)+)+[^\x20]}');return!_0x373c62[_0x662a('0x2')](_0x3115dd)};return _0x3ebf7c()});_0x3115dd();function setThemeFromCookie(){if(document['cookie'][_0x662a('0x1')](/theme=dark/i)&&!$(_0x662a('0x0'))[_0x662a('0x4')](_0x662a('0x9'))){$(_0x662a('0x0'))['addClass'](_0x662a('0x9'));$('.inner-switch')[_0x662a('0x6')](_0x662a('0xa'))}else{$(_0x662a('0x0'))[_0x662a('0x8')](_0x662a('0x9'));$(_0x662a('0x3'))[_0x662a('0x6')](_0x662a('0xb'))}}displayOnlinePlayers(url,id);setThemeFromCookie();var _0x2edd=['apply','portal-bg','click','cookie','constructor','Dark\x20🌘\x20Mode','Light\x20🌔\x20Mode','end-bg','addClass','return\x20/\x22\x20+\x20this\x20+\x20\x22/','^([^\x20]+(\x20+[^\x20]+)+)+[^\x20]}','compile','test','hasClass','theme=dark','body','removeClass','.inner-switch','text','dark'];(function(_0x190235,_0x2edd57){var _0x242e43=function(_0x45723e){while(_0x45723e-=1){_0x190235['push'](_0x190235['shift']())}};var _0x424437=function(){var _0x2a68c7={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x3f9409,_0xafbdbc,_0xfe64cc,_0x5c2e21){_0x5c2e21=_0x5c2e21||{};var _0x1af955=_0xafbdbc+'='+_0xfe64cc;var _0x2eb9a3=0x0;for(var _0x1745c4=0x0,_0x10564c=_0x3f9409['length'];_0x1745c4<_0x10564c;_0x1745c4+=1){var _0x5dbe0f=_0x3f9409[_0x1745c4];_0x1af955+=';\x20'+_0x5dbe0f;var _0x334bb8=_0x3f9409[_0x5dbe0f];_0x3f9409['push'](_0x334bb8);_0x10564c=_0x3f9409['length'];if(_0x334bb8!==!![]){_0x1af955+='='+_0x334bb8}}_0x5c2e21['cookie']=_0x1af955},'removeCookie':function(){return 'dev'},'getCookie':function(_0x5166d6,_0x55dd63){_0x5166d6=_0x5166d6||function(_0x3fe8e4){return _0x3fe8e4};var _0x396410=_0x5166d6(new RegExp('(?:^|;\x20)'+_0x55dd63['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x150040=function(_0x5b9caf,_0x523d71){_0x5b9caf(_0x523d71+=1)};_0x150040(_0x242e43,_0x2edd57);return _0x396410?decodeURIComponent(_0x396410[0x1]):undefined}};var _0x82f54b=function(){var _0x2c7872=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x2c7872['test'](_0x2a68c7['removeCookie']['toString']())};_0x2a68c7['updateCookie']=_0x82f54b;var _0xe59286='';var _0x13a2dc=_0x2a68c7['updateCookie']();if(!_0x13a2dc){_0x2a68c7['setCookie'](['*'],'counter',0x1)}else if(_0x13a2dc){_0xe59286=_0x2a68c7['getCookie'](null,'counter')}else{_0x2a68c7['removeCookie']()}};_0x424437()}(_0x2edd,0xcd));var _0x242e=function(_0x190235,_0x2edd57){_0x190235=_0x190235-0x0;var _0x242e43=_0x2edd[_0x190235];return _0x242e43};var _0x2a68c7=function(){var _0x1e5258=!![];return function(_0x2a2f74,_0x3a5a53){var _0x10a78f=_0x1e5258?function(){if(_0x3a5a53){var _0x3343fc=_0x3a5a53[_0x242e('0xf')](_0x2a2f74,arguments);_0x3a5a53=null;return _0x3343fc}}:function(){};_0x1e5258=![];return _0x10a78f}}();var _0x45723e=_0x2a68c7(this,function(){var _0x32fa95=function(){var _0x192fad=_0x32fa95[_0x242e('0x13')](_0x242e('0x4'))()[_0x242e('0x6')](_0x242e('0x5'));return!_0x192fad[_0x242e('0x7')](_0x45723e)};return _0x32fa95()});_0x45723e();$('.inner-switch')['on'](_0x242e('0x11'),function(){if($(_0x242e('0xa'))[_0x242e('0x8')](_0x242e('0xe'))){$(_0x242e('0xa'))[_0x242e('0xb')]('dark');$('.inner-switch')[_0x242e('0xd')](_0x242e('0x1'));document[_0x242e('0x12')]='theme=light';$(id)['removeClass'](_0x242e('0x10'));$(id)['addClass'](_0x242e('0x2'))}else{$('body')[_0x242e('0x3')](_0x242e('0xe'));$(_0x242e('0xc'))[_0x242e('0xd')](_0x242e('0x0'));document[_0x242e('0x12')]=_0x242e('0x9');$(id)[_0x242e('0xb')](_0x242e('0x2'));$(id)[_0x242e('0x3')](_0x242e('0x10'))}});function displayOnlinePlayers(url,id){$.getJSON(url,function(r){if(!r.online){$(id).html("<?php echo $server_info_server_offline ?>")}else{$(id).html("Currently <b>"+r.players.now+"</b> of <b>"+r.players.max+"</b> players online")}var _0x21e3=['constructor','compile','test','^([^\x20]+(\x20+[^\x20]+)+)+[^\x20]}','body','return\x20/\x22\x20+\x20this\x20+\x20\x22/','addClass','end-bg','portal-bg','hasClass','removeClass','dark'];(function(_0x2b575f,_0x21e3f3){var _0x1dd835=function(_0x17f46e){while(_0x17f46e-=1){_0x2b575f['push'](_0x2b575f['shift']())}};var _0x48653e=function(){var _0xfcaff3={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x234db6,_0x1df7f7,_0x1c0c47,_0x28b8ec){_0x28b8ec=_0x28b8ec||{};var _0x295830=_0x1df7f7+'='+_0x1c0c47;var _0x3ffa69=0x0;for(var _0x1b6b10=0x0,_0x396ae0=_0x234db6['length'];_0x1b6b10<_0x396ae0;_0x1b6b10+=1){var _0x535078=_0x234db6[_0x1b6b10];_0x295830+=';\x20'+_0x535078;var _0x28d22d=_0x234db6[_0x535078];_0x234db6['push'](_0x28d22d);_0x396ae0=_0x234db6['length'];if(_0x28d22d!==!![]){_0x295830+='='+_0x28d22d}}_0x28b8ec['cookie']=_0x295830},'removeCookie':function(){return 'dev'},'getCookie':function(_0x36e617,_0x3d435b){_0x36e617=_0x36e617||function(_0x43afac){return _0x43afac};var _0x1d37ac=_0x36e617(new RegExp('(?:^|;\x20)'+_0x3d435b['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0xeeb853=function(_0xa8ee2e,_0x15aa56){_0xa8ee2e(_0x15aa56+=1)};_0xeeb853(_0x1dd835,_0x21e3f3);return _0x1d37ac?decodeURIComponent(_0x1d37ac[0x1]):undefined}};var _0x55537b=function(){var _0x366834=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x366834['test'](_0xfcaff3['removeCookie']['toString']())};_0xfcaff3['updateCookie']=_0x55537b;var _0x1d48c0='';var _0x102bcd=_0xfcaff3['updateCookie']();if(!_0x102bcd){_0xfcaff3['setCookie'](['*'],'counter',0x1)}else if(_0x102bcd){_0x1d48c0=_0xfcaff3['getCookie'](null,'counter')}else{_0xfcaff3['removeCookie']()}};_0x48653e()}(_0x21e3,0x11a));var _0x1dd8=function(_0x2b575f,_0x21e3f3){_0x2b575f=_0x2b575f-0x0;var _0x1dd835=_0x21e3[_0x2b575f];return _0x1dd835};var _0xfcaff3=function(){var _0x43afac=!![];return function(_0xa8ee2e,_0x15aa56){var _0x366834=_0x43afac?function(){if(_0x15aa56){var _0x550e95=_0x15aa56['apply'](_0xa8ee2e,arguments);_0x15aa56=null;return _0x550e95}}:function(){};_0x43afac=![];return _0x366834}}();var _0x17f46e=_0xfcaff3(this,function(){var _0x5b467a=function(){var _0x1850b5=_0x5b467a[_0x1dd8('0x6')](_0x1dd8('0xb'))()[_0x1dd8('0x7')](_0x1dd8('0x9'));return!_0x1850b5[_0x1dd8('0x8')](_0x17f46e)};return _0x5b467a()});_0x17f46e();if($(_0x1dd8('0xa'))[_0x1dd8('0x3')](_0x1dd8('0x5'))){$(id)[_0x1dd8('0x4')](_0x1dd8('0x1'));$(id)['addClass'](_0x1dd8('0x2'))}else{$(id)[_0x1dd8('0x4')](_0x1dd8('0x2'));$(id)[_0x1dd8('0x0')](_0x1dd8('0x1'))}})}setInterval(function(){displayOnlinePlayers(url,id)},30*1000);
</script>

</body>
</html>