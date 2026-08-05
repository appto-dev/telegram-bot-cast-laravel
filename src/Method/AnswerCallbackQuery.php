<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class AnswerCallbackQuery extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  string  Unique identifier for the query to be answered */
        public string $callback_query_id,
        /**
         * @var  string|null  Text of the notification. If not specified, nothing will be shown to the user,
         * 0-200 characters.
         */
        public ?string $text,
        /**
         * @var  bool|null  If <em>True</em>, an alert will be shown by the client instead of a notification at
         * the top of the chat screen. Defaults to <em>False</em>.
         */
        public ?bool $show_alert,
        /**
         * @var  string|null  URL that will be opened by the user's client. If you have created a
         * <a href="#game">Game</a> and accepted the conditions via
         * <a href="https://t.me/botfather">@BotFather</a>, specify the URL that opens your game - note that
         * this will only work if the query comes from a
         * <a href="#inlinekeyboardbutton"><em>callback_game</em></a> button.<br><br>Otherwise, you may use
         * links like <code>t.me/your_bot?start=XXXX</code> that open your bot with a parameter.
         */
        public ?string $url,
        /**
         * @var  int|null  The maximum amount of time in seconds that the result of the callback query may be
         * cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
         */
        public ?int $cache_time,
    ) {
    }
}
