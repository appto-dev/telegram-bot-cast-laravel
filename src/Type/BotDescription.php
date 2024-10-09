<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents the bot's description.
 *
 * @version Telegram Bot API 7.10
 */
final class BotDescription extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The bot's description
         * @var string
         */
        public string $description,
    ) {
    }
}
