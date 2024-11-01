<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The reaction is based on an emoji.
 *
 * @version Telegram Bot API 7.11
 */
final class ReactionTypeEmoji extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the reaction, always "emoji"
         * @var string
         */
        public string $type,
        /**
         * Reaction emoji. Currently, it can be one of "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", ""
         * @var string
         */
        public string $emoji,
    ) {
    }
}
