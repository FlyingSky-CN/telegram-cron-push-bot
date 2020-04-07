<?php
/**
 * telegram-cron-push-bot
 * SendMsg.php
 * 
 * @author FlyingSky-CN
 */

require_once('Common.php');

$msgs = array_diff(
    scandir('msg'),
    ['.', '..', '.gitkeep']
);

$msg = $msgs[array_rand($msgs, 1)];

$json = json_decode(file_get_contents('msg/'.$msg), true);

echo send_get(
    $api_url.
    'sendMessage?chat_id='.
    $chan_id.
    '&text='.
    urlencode(
        $json['message']['text']
    )
);

unlink('msg/'.$msg);
