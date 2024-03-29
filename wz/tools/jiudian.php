<?php
error_reporting(0);
$src = isset($_POST['src']) ? $_POST['src'] : "";
$currentUrl = "http" . (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "s" : "") . "://" . $_SERVER['HTTP_HOST'];
if (empty($src)) {
    echo <<<EOL
    <!DOCTYPE html>
    <html lang="zh-CN">
    <head>
    <meta charset="utf-8"/>
    <meta name="referrer" content="origin-when-cross-origin"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>✨长风-酒店源验证提取</title>
    <meta name="applicable-device" content="pc,mobile"/>
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="keywords" content="长风音乐,酒店源验证提取"/>
    <meta name="description" content="长风网络,长风音乐,酒店源验证"/>
    <meta name="renderer" content="webkit"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon"/>
    <link href="https://cdn.bootcss.com/pure/0.6.0/pure-min.css" rel="stylesheet" />
    <script src="https://www.kugou.com/common/js/jquery.min.js"></script>
    <style>
    html,body{
    height:98%;
    background:url(//cfyy.cc/Bt/img/bxx.gif);
    }
    a{text-decoration:none;} 
    .pure-button:hover {
    background-color: Lime; 
    }
    .ysh {background-color: red;font-size:18px;font-weight:bold;color:Snow;} /* 红色 */
    .ysn {background-color: #0078e7;font-size:18px;font-weight:bold;color:Snow;} /*  南色 */
    </style>
    </head>
    <body>
    <div style="font-weight:bold;font-size:20px;color:red;">酒店源验证提取</div>
    <div class="pure-form">
    <form method="post">
                <div style="text-align: center;">
                    <p style="font-size: 18px; font-weight: bold; margin-right: 10px; color: #fff;">请输入酒店源IP/域名+端口地址：</p>
                    <input type="text" name="src" placeholder="格式：42.176.185.28:9901" required style="padding: 8px; font-size: 16px; border-radius: 5px 0 0 5px; border: 1px solid #ccc; border-right: none; height: 40px; outline: none;">
                    <input type="submit" name="submit" value="点击获取" style="padding: 6px 12px; font-size: 16px; background-color: #e36c09; color: #fff; border: none; border-radius: 0 5px 5px 0; cursor: pointer; height: 40px; margin: 0;">
                </div>
            </form>
    提示：服务器捞 解析慢慢  需要等待 敬请谅解!
    </div>
    <Hr/>1 线:no 2 线:ok <br>
    <textarea id="tx" rows="38" cols="150" style="border:2px solid #0ff;">
    
    </textarea><br>
    <button type="button" id="cg" class="pure-button ysn" onclick="jsCopy()">复制酒店源</button>
    <a class="pure-button ysh" href="jd.php?ip=123.132.234.158:8154" target="JD">获取直链源</a>
    <script type="text/javascript"> 
     function jsCopy(){ 
    $("#tx").select()	
     document.execCommand("Copy"); //执行浏览器复制命
    $("#cg").text("复制源成功");
    setInterval(function(){
    $("#cg").text("复制酒店源");
    },8888);
    return;
    }
    </script> 
    </body>
    </html>
    EOL;
// echo '<textarea cols="50" rows="10">';
// echo "当前页面 URL: $currentUrl\n";
// echo "输入的源地址123: $src\n";
// echo "</textarea>";
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         if (isset($_POST["submit"])) {
        
//             // 在同一个页面输出结果
//             echo '<textarea cols="50" rows="10">';
//             echo "当前页面 URL: $currentUrl\n";
//             echo "输入的源地址123: $src\n";
//             echo "</textarea>";
//             exit; 
//         }
//     }
} else {
    // 处理源地址并输出结果
    
    echo "输入的源地址123: $src\n";
    $pattern = '/^(http:\/\/)?([^:\/\s]+):(\d+)/i';
    if (preg_match($pattern, $src, $matches)) {
        // 提取到 IP 地址和端口号
        $ip = $matches[2];
        $port = $matches[3];
    } else {
    // 如果无法匹配到IP地址和端口号，可以采取适当的处理方式，这里仅做示例
    $ip = '';
    $port = '';
}

// 拼接IP地址和端口号
$ipWithPort = $ip . ':' . $port;
    echo  "ziji: $ipWithPort";
    echo <<<EOL
    <!DOCTYPE html>
    <html lang="zh-CN">
    <head>
    <meta charset="utf-8"/>
    <meta name="referrer" content="origin-when-cross-origin"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>✨长风-酒店源验证提取</title>
    <meta name="applicable-device" content="pc,mobile"/>
    <meta http-equiv="Cache-Control" content="no-transform"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <meta name="keywords" content="长风音乐,酒店源验证提取"/>
    <meta name="description" content="长风网络,长风音乐,酒店源验证"/>
    <meta name="renderer" content="webkit"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link rel="icon" href="/favicon.ico" mce_href="/favicon.ico" type="image/x-icon"/>
    <link href="https://cdn.bootcss.com/pure/0.6.0/pure-min.css" rel="stylesheet" />
    <script src="https://www.kugou.com/common/js/jquery.min.js"></script>
    <style>
    html,body{
    height:98%;
    background:url(//cfyy.cc/Bt/img/bxx.gif);
    }
    a{text-decoration:none;} 
    .pure-button:hover {
    background-color: Lime; 
    }
    .ysh {background-color: red;font-size:18px;font-weight:bold;color:Snow;} /* 红色 */
    .ysn {background-color: #0078e7;font-size:18px;font-weight:bold;color:Snow;} /*  南色 */
    </style>
    </head>
    <body>
    <div style="font-weight:bold;font-size:20px;color:red;">酒店源验证提取</div>
    <div class="pure-form">
    <form method="post">
                <div style="text-align: center;">
                    <p style="font-size: 18px; font-weight: bold; margin-right: 10px; color: #fff;">请输入酒店源IP/域名+端口地址：</p>
                    <input type="text" name="src" placeholder="格式：42.176.185.28:9901" required style="padding: 8px; font-size: 16px; border-radius: 5px 0 0 5px; border: 1px solid #ccc; border-right: none; height: 40px; outline: none;">
                    <input type="submit" name="submit" value="点击获取" style="padding: 6px 12px; font-size: 16px; background-color: #e36c09; color: #fff; border: none; border-radius: 0 5px 5px 0; cursor: pointer; height: 40px; margin: 0;">
                </div>
            </form>
    提示：服务器捞 解析慢慢  需要等待 敬请谅解!
    </div>
    <Hr/>1 线:no 2 线:ok <br>
    EOL;
    echo '<textarea id="tx" rows="38" cols="150" style="border:2px solid #0ff;">';
    // 设置超时时间为1秒
    $context = stream_context_create(['http' => ['timeout' => 1]]);
    $url = @file_get_contents("http://" . $ipWithPort . "/iptv/live/1000.json", false, $context);
    // echo $url;
    if ($url === false || empty($url)) {
        $backupUrl = "http://" . $ipWithPort . "/ZHGXTV/Public/json/live_interface.txt";
        $url = @file_get_contents($backupUrl, false, $context);
        $url = preg_replace("/,/",",",preg_replace("/\s+/","<br>",$url));
        if ($url === false || empty($url)) {
            echo "未找到酒店直播源\n";
        } else {
            echo $url;
        }
    } else {
        preg_match_all('|"name":\s*"(.*?)"|',$url,$nameMatches);
        if (!empty($nameMatches[1])) {
            preg_match_all('|"url":\s*"(.*?)"|',$url,$urlMatches);
            $channelData = array_combine($nameMatches[1],$urlMatches[1]);
            foreach ($channelData as $name => $channelUrl) {
                echo $name . ',http://' . $ipWithPort . $channelUrl . "\n";
            }
        } else {
            echo "输入的源地址3: $ipWithPort\n";
            echo "未找到酒店直播源\n";
        }
    }
    
    echo "输入的源地址2: $ipWithPort\n";
    echo "</textarea>";
    echo <<<EOL
    <button type="button" id="cg" class="pure-button ysn" onclick="jsCopy()">复制酒店源</button>
    <a class="pure-button ysh" href="jd.php?ip=123.132.234.158:8154" target="JD">获取直链源</a>
    <script type="text/javascript"> 
     function jsCopy(){ 
    $("#tx").select()	
     document.execCommand("Copy"); //执行浏览器复制命
    $("#cg").text("复制源成功");
    setInterval(function(){
    $("#cg").text("复制酒店源");
    },8888);
    return;
    }
    </script> 
    </body>
    </html>
    EOL;
}
?>