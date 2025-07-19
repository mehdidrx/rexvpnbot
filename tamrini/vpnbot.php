<?php
require_once __DIR__ . '/vendor/autoload.php';

// توکن ربات شما
$bot_api_key  = '7648972236:AAFKxqObU6OuMlT7A0sedK7lMJ0VkD3W-WI';
$bot_username = '@Openvpn_ir_bot';

try {
    // ایجاد نمونه ربات
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    // تنظیم وب‌هوک (برای دریافت آپدیت‌ها)
    $telegram->setWebhook('https://yourdomain.com/bot.php');

    // پردازش دستورات
    $telegram->handle();
} catch (Longman\TelegramBot\Exception\TelegramException $e) {
    // لاگ خطاها
    file_put_contents('bot_errors.log', $e->getMessage() . PHP_EOL, FILE_APPEND);
}
?>