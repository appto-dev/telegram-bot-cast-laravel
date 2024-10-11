<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to close an open 'General' topic in a forum supergroup chat. The
 * bot must be an administrator in the chat for this to work and must have the
 * <em>can_manage_topics</em> administrator rights. Returns <em>True</em> on
 * success.
 *
 * @version Telegram Bot API 7.10
 */
final class CloseGeneralForumTopic extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format <code>@supergroupusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
    ) {
    }
}
