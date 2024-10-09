<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents the bot's short description.
 *
 * @version Telegram Bot API 7.10
 */
final class BotShortDescription extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The bot's short description
         * @var string
         */
        public string $short_description,
    ) {
    }
}
