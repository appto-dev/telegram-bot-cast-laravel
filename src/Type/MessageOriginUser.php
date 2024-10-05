<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * MessageOriginUser
 *
 * The message was originally sent by a known user.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class MessageOriginUser extends Data implements TypeInterface
{
    public function __construct(
        /** Type of the message origin, always "user" */
        public string $type,
        /** Date the message was sent originally in Unix time */
        public int $date,
        /** User that sent the message originally */
        public User $sender_user,
    ) {
    }
}
