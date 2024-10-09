<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to send answers to callback queries sent from <a
 * href="/bots/features#inline-keyboards">inline keyboards</a>. The answer will be
 * displayed to the user as a notification at the top of the chat screen or as an
 * alert. On success, <em>True</em> is returned.
 * Alternatively, the user can be redirected to the specified Game URL. For this
 * option to work, you must first create a game for your bot via <a
 * href="https://t.me/botfather">@BotFather</a> and accept the terms. Otherwise,
 * you may use links like t.me/your_bot?start=XXXX that open your bot with a
 * parameter.
 *
 * @version Telegram Bot API 7.10
 */
final class AnswerCallbackQuery extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the query to be answered
         * @var string
         */
        public string $callback_query_id,
        /**
         * Text of the notification. If not specified, nothing will be shown to the user,
         * 0-200 characters
         * @var string|null
         */
        public ?string $text,
        /**
         * If True, an alert will be shown by the client instead of a notification at the
         * top of the chat screen. Defaults to false.
         * @var bool|null
         */
        public ?bool $show_alert,
        /**
         * URL that will be opened by the user's client. If you have created a Game and
         * accepted the conditions via @BotFather, specify the URL that opens your game -
         * note that this will only work if the query comes from a callback_game
         * button.Otherwise, you may use links like t.me/your_bot?start=XXXX that open your
         * bot with a parameter.
         * @var string|null
         */
        public ?string $url,
        /**
         * The maximum amount of time in seconds that the result of the callback query may
         * be cached client-side. Telegram apps will support caching starting in version
         * 3.14. Defaults to 0.
         * @var int|null
         */
        public ?int $cache_time,
    ) {
    }
}
