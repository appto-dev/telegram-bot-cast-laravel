<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * MessageId
 *
 * This object represents a unique message identifier.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class MessageId extends Dto implements TypeInterface
{
    public function __construct(
        /** Unique message identifier */
        public int $message_id,
    ) {
    }
}
