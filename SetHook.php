<?php
/**
 * telegram-cron-push-bot
 * SetHook.php
 * 
 * @author FlyingSky-CN
 */

require_once('Common.php');

if ($_GET['ver'] != $ver) exit('?');

$send_url = $api_url.'setWebhook?url='.urlencode($web_url.'WebHook.php?ver='.$ver);

echo send_get($send_url);