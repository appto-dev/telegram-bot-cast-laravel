<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to reopen a closed 'General' topic in a forum supergroup chat.
 * The bot must be an administrator in the chat for this to work and must have the
 * <em>can_manage_topics</em> administrator rights. The topic will be automatically
 * unhidden if it was hidden. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class ReopenGeneralForumTopic extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format @supergroupusername)
         * @var int|string
         */
        public int|string $chat_id,
    ) {
    }
}
