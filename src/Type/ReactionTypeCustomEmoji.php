<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * The reaction is based on a custom emoji.
 *
 * @version Telegram Bot API 7.10
 */
final class ReactionTypeCustomEmoji extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the reaction, always "custom_emoji"
         * @var string
         */
        public string $type,
        /**
         * Custom emoji identifier
         * @var string
         */
        public string $custom_emoji_id,
    ) {
    }
}
