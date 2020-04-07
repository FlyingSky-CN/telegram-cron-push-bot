<?php
/**
 * telegram-cron-push-bot
 * GetMD5.php
 * 
 * @author FlyingSky-CN
 */

if ($_GET['ver'] != '233') exit();

echo substr(md5($_GET['str']),0,6);