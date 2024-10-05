<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * VideoChatEnded
 *
 * This object represents a service message about a video chat ended in the chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class VideoChatEnded extends Data implements TypeInterface
{
    public function __construct(
        /** Video chat duration in seconds */
        public int $duration,
    ) {
    }
}
