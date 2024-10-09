<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method for your bot to leave a group, supergroup or channel. Returns
 * <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class LeaveChat extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format @channelusername)
         * @var int|string
         */
        public int|string $chat_id,
    ) {
    }
}
