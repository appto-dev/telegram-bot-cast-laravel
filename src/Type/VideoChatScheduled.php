<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * VideoChatScheduled
 *
 * This object represents a service message about a video chat scheduled in the
 * chat.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class VideoChatScheduled extends Dto implements TypeInterface
{
    public function __construct(
        /**
         * Point in time (Unix timestamp) when the video chat is supposed to be
         * started by a chat administrator
         */
        public int $start_date,
    ) {
    }
}
