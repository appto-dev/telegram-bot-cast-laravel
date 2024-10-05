<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * MessageOriginHiddenUser
 *
 * The message was originally sent by an unknown user.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class MessageOriginHiddenUser extends Data implements TypeInterface
{
    public function __construct(
        /** Type of the message origin, always "hidden_user" */
        public string $type,
        /** Date the message was sent originally in Unix time */
        public int $date,
        /** Name of the user that sent the message originally */
        public string $sender_user_name,
    ) {
    }
}
