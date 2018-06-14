<?php
ini_set('date.timezone','Asia/Shanghai');
require __DIR__ . '/vendor/autoload.php';

use \Curl\Curl;

//时间数据库
$log = 'time.log';

//当前时间
$time = time();

//查看当前时间
$oldTime = file_get_contents($log);
$oldTime = $oldTime+30;
if((int)$time <= (int)$oldTime){
    die('时间未到');
}


$curl = new Curl();

$curl->setUserAgent('qu tou tiao/3.0.1 (iPhone; iOS 11.4.1; Scale/2.00)/qukan_ios');

$curl->setHeader('Host', 'api.1sapp.com');
$curl->setHeader('Accept', '*/*');
$curl->setHeader('Accept-Language', 'zh-Hans;q=1');
$curl->setHeader('Accept-Encoding', 'br, gzip, deflate');
$curl->setHeader('Connection', 'keep-alive');

$curl->setCookie('aliyungf_tc', 'AQAAAJrstDchlwYAIkTuc1Yp6VgHruwa');
$curl->setCookie('UM_distinctid', '163f3bfcb04297-02f31b5e39b3b98-72020876-3d10d-163f3bfcb06138');
$curl->setCookie('qkV2', '9466c7ff4ff394cb2645b13d30ad6c80');




// Host:api.1sapp.com
// Accept:*/*
// Cookie: aliyungf_tc=AQAAAJrstDchlwYAIkTuc1Yp6VgHruwa; UM_distinctid=163f3bfcb04297-02f31b5e39b3b98-72020876-3d10d-163f3bfcb06138; qkV2=9466c7ff4ff394cb2645b13d30ad6c80
// User-Agent:qu tou tiao/3.0.1 (iPhone; iOS 11.4.1; Scale/2.00)/qukan_ios
// Accept-Language:zh-Hans;q=1
// Accept-Encoding:br, gzip, deflate
// Connection:keep-alive


$curl->get('https://api.1sapp.com/readtimer/report?qdata=QkI1NzYzQTFCMTVFQjU3REUzMUEzQ0U0RDRGRTFGOEEuY0dGeVlXMGZNREl6TmprM1EwRXRSRU00UmkwMFFqUXlMVUZEUXprdFFqaENSVVZETXpVME1ETkRIblpsY25OcGIyNGZNaDV3YkdGMFptOXliUjlwYjNNPS4jnt5Z%2BlxsGnJ3PtqRpFjyg0vKigY5CdpkguMtbc5mRKkOiltjwKEQql7JL6jhujbCooZ4yV/n%2BpVxG4hsl1u6sQmueBelHwEVEcclfR8hhdc57EH2bOds5WY2N46zjgXINAN4jB0t4ZraW0m6%2BBbh%2BQ6Gu3v2Y2v/9cNlTnzIQeoUHpDxH5VekK/8zC9l1riW6bNr5H8La5WdOFCn/XRN%2B1hxLHQK5NUQ2psZc8bA%2Bgx%2BRYip33orU7ojWZP4eEcGy8xeQlL/MKwncR9ZPBo2VqYpoQiFNq8%2B0dlCdQN4CD2YiGCa3KUw5Wm0wHfFJQH65Pa4p3KnLL6jM3vPnF4ZfmcpW%2Bq4kJdqtbGCiP6Y7JWYZO1KQeXFCP1w9cQtdQBimezDTgGsStGGtSGyBqaayuc/P92oAyu36oY7DD2/AgmizX3XEH2p74awu8ZSBPzSgA41rvYsukGEqGThf7/2p9GwNcl4BZqCWyiiaGSCpVdj%2BzBh%2BFVsiYjHTOuKG5qJdI9haB6bSuLVQoJuSV/tNYN%2BYrRXg9PNaqh1ndphaijWgDVqTXcZ%2BR5W7bINyeFtgPOEvTVDbzgvViC6BSFB/thv9s0Q85kLLSJEjKP0vLMbo%2BSTBhVwhJByleL7I1NXomrN/7eGyLU7mLxlEolgRwP12OSLY0qN9EnTyBrg5ZfKYuguuwBal8Sof8m1SyCcn/vSzpVZI6r5uku%2BD0BbVtw7adiU8QkRgfAzkFhkCIyTU8Wd5ahlltdAS8oAsbR0CHOux1aSK25Oj1YWGpWYbA%3D%3D');

if ($curl->error) {
    echo '异常: ' . $curl->errorCode . ': ' . $curl->errorMessage ."\r\n";
} else {
    echo '正常:' ."\r\n";
}

//生成新时间
$newTime = random_int(1,20)+$time;
file_put_contents($log, $newTime);
