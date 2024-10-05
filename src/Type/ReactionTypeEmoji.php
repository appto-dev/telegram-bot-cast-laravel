<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * ReactionTypeEmoji
 *
 * The reaction is based on an emoji.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ReactionTypeEmoji extends Data implements TypeInterface
{
    public function __construct(
        /** Type of the reaction, always "emoji" */
        public string $type,
        /**
         * Reaction emoji. Currently, it can be one of "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", "",
         * "", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""
         */
        public string $emoji,
    ) {
    }
}
