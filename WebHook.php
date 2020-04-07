<?php
/**
 * telegram-cron-push-bot
 * WebHook.php
 * 
 * @author FlyingSky-CN
 */

require_once('Common.php');

if ($_GET['ver'] != $ver) exit();

$data = file_get_contents('php://input');

$json = json_decode($data, true);

if ($json['message']['chat']['id'] !== $own_uid) exit();

file_put_contents('msg/'.md5($data).'.json', $data);
