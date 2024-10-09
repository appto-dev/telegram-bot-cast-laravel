<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object defines the criteria used to request a suitable chat. Information
 * about the selected chat will be shared with the bot when the corresponding
 * button is pressed. The bot will be granted requested rights in the chat if
 * appropriate. <a href="/bots/features#chat-and-user-selection">More about
 * requesting chats »</a>.
 *
 * @version Telegram Bot API 7.10
 */
final class KeyboardButtonRequestChat extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Signed 32-bit identifier of the request, which will be received back in the
         * ChatShared object. Must be unique within the message
         * @var int
         */
        public int $request_id,
        /**
         * Pass True to request a channel chat, pass False to request a group or a
         * supergroup chat.
         * @var bool
         */
        public bool $chat_is_channel,
        /**
         * Pass True to request a forum supergroup, pass False to request a non-forum chat.
         * If not specified, no additional restrictions are applied.
         * @var bool|null
         */
        public ?bool $chat_is_forum,
        /**
         * Pass True to request a supergroup or a channel with a username, pass False to
         * request a chat without a username. If not specified, no additional restrictions
         * are applied.
         * @var bool|null
         */
        public ?bool $chat_has_username,
        /**
         * Pass True to request a chat owned by the user. Otherwise, no additional
         * restrictions are applied.
         * @var bool|null
         */
        public ?bool $chat_is_created,
        /**
         * A JSON-serialized object listing the required administrator rights of the user
         * in the chat. The rights must be a superset of bot_administrator_rights. If not
         * specified, no additional restrictions are applied.
         * @var ChatAdministratorRights|null
         */
        public ?ChatAdministratorRights $user_administrator_rights,
        /**
         * A JSON-serialized object listing the required administrator rights of the bot in
         * the chat. The rights must be a subset of user_administrator_rights. If not
         * specified, no additional restrictions are applied.
         * @var ChatAdministratorRights|null
         */
        public ?ChatAdministratorRights $bot_administrator_rights,
        /**
         * Pass True to request a chat with the bot as a member. Otherwise, no additional
         * restrictions are applied.
         * @var bool|null
         */
        public ?bool $bot_is_member,
        /**
         * Pass True to request the chat's title
         * @var bool|null
         */
        public ?bool $request_title,
        /**
         * Pass True to request the chat's username
         * @var bool|null
         */
        public ?bool $request_username,
        /**
         * Pass True to request the chat's photo
         * @var bool|null
         */
        public ?bool $request_photo,
    ) {
    }
}
