<?php

namespace App\Http\Controllers\Line;

use App\Seagon\Quotation;
use App\Seagon\Slot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use LINE\Laravel\Facade\LINEBot;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;

/**
 * @see https://github.com/line/line-bot-sdk-php
 */
class Messaging
{
    public function __invoke(Request $request)
    {
        Log::debug('Request content: ' . json_encode($request->all()));

        $text = trim($request->input('events.0.message.text'));
        $replyToken = $request->input('events.0.replyToken');

        return response()->noContent();
    }
}
