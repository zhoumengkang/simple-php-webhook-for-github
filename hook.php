<?php
/**
 * description  : 仅仅只做更新（没有做日志记录，如果需要做日志记录，可以输出webhooks接口post传递过来的数据，更新信息都在里面）
 * @author      : zhoumengkang
 */
error_reporting ( E_ALL );
$dir = '/data/test/';//该目录为git检出目录
$handle = popen('cd '.$dir.' && git pull 2>&1','r');
$read = stream_get_contents($handle);
printf($read);
pclose($handle);