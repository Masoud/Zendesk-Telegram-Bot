<?php
// Show Errors
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

// Your Chat ID or Channel ID
$chat_id = 'YOUR_CHANNel_ID';

// Your Bot Information
$bot_token = 'YOUR_TELEGRAM_BOT_TOKEN';
$telegramAPI = 'https://api.telegram.org/bot' . $bot_token;

// Command for use setWebHook
$command = file_get_contents("php://input");
$json = json_decode($command, true);

$headers = ['Accept' => 'application/json'];

// Get Information
$data = [
    'status' => $json['ticket']['status'],
    'name' => $json['ticket']['name'],
    'title' => $json['ticket']['title'],
    'href' => $json["ticket"]["href"]
];

// Post
$main_post = "ارسال شده توسط: <strong>" . $data['name'] . "</strong> \n با وضعیت: <strong>" . $data['status'] . "</strong> \n با عنوان: <strong>" . $data['title'] . "</strong>";

// Array for Send Post to Telegram
$text = [
    'chat_id' => $chat_id,
    'text' => $main_post,
    'parse_mode' => 'html',
    'reply_markup' => json_encode([
        'inline_keyboard' => [
            [
                [
                    'text' => "🌐 پاسخ به تیکت",
                    'url' => $data['href'],
                    'callback_data' => '2'
                ]
            ]
        ]
    ])
];

// Send Post Your Telegram
$response = Unirest\Request::post($telegramAPI . '/sendMessage', $headers, $text);