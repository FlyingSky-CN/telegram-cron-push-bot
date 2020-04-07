# 📢 telegram-cron-push-bot

A telegram bot used to push message regularly.

这个 bot 可以用来定时向 \[ 频道 / 群组 / 个人 \] 随机发送预定消息。

## ⏳ Warning

这个 bot 是用不知道啥时候写的远古代码改的，别期望代码质量能有多好了。

## 🎈 Usage

1. 按照注释修改 `Config.php` 中的内容。
2. 访问 `GetMD5.php?ver=233&str={{web_ver}}` 可以获取访问密钥。
3. 访问 `SetHook.php?ver={{你的访问密钥}}` 设置 WebHook 。
4. 设置成功后用 `{{own_uid}}` 的账号将预定消息发给 bot 。
5. 设置定时任务访问 `SendMsg.php` 即可发送预定消息至 `{{chan_id}}` 。
6. 预定消息发一条删一条，没得发了就没了。

## 🔨 Issue

直接发，但我不一定修。