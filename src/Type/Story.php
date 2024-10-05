<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * Story
 *
 * This object represents a story.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class Story extends Data implements TypeInterface
{
    public function __construct(
        /** Chat that posted the story */
        public Chat $chat,
        /** Unique identifier for the story in the chat */
        public int $id,
    ) {
    }
}
