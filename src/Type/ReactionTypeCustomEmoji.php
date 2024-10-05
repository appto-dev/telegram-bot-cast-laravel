<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * ReactionTypeCustomEmoji
 *
 * The reaction is based on a custom emoji.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ReactionTypeCustomEmoji extends Data implements TypeInterface
{
    public function __construct(
        /** Type of the reaction, always "custom_emoji" */
        public string $type,
        /** Custom emoji identifier */
        public string $custom_emoji_id,
    ) {
    }
}
