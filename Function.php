<?php
/**
 * telegram-cron-push-bot
 * Function.php
 * 
 * @author FlyingSky-CN
 */

function send_get($url) {
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    
    $result = curl_exec($ch);
    
    curl_close($ch); 
    
    return $result;
    
}
