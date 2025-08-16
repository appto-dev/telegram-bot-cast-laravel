<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method for your bot to leave a group, supergroup or channel. Returns
 * <em>True</em> on success.
 */
final class LeaveChat extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format <code>@channelusername</code>). Channel direct messages
         * chats aren't supported; leave the corresponding channel instead.
         * @var int|string
         */
        public int|string $chat_id,
    ) {
    }
}
