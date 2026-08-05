<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class KeyboardButtonRequestChat extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Signed 32-bit identifier of the request, which will be received back in the ChatShared
         * object. Must be unique within the message.
         */
        public int $request_id,
        /** @var  bool  Pass True to request a channel chat, pass False to request a group or a supergroup chat */
        public bool $chat_is_channel,
        /**
         * @var  bool|null  Pass True to request a forum supergroup, pass False to request a non-forum chat. If
         * not specified, no additional restrictions are applied.
         */
        public ?bool $chat_is_forum,
        /**
         * @var  bool|null  Pass True to request a supergroup or a channel with a username, pass False to
         * request a chat without a username. If not specified, no additional restrictions are applied.
         */
        public ?bool $chat_has_username,
        /**
         * @var  bool|null  Pass True to request a chat owned by the user. Otherwise, no additional
         * restrictions are applied.
         */
        public ?bool $chat_is_created,
        /**
         * @var  ChatAdministratorRights|null  A JSON-serialized object listing the required administrator
         * rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not
         * specified, no additional restrictions are applied.
         */
        public ?ChatAdministratorRights $user_administrator_rights,
        /**
         * @var  ChatAdministratorRights|null  A JSON-serialized object listing the required administrator
         * rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not
         * specified, no additional restrictions are applied.
         */
        public ?ChatAdministratorRights $bot_administrator_rights,
        /**
         * @var  bool|null  Pass True to request a chat with the bot as a member. Otherwise, no additional
         * restrictions are applied.
         */
        public ?bool $bot_is_member,
        /** @var  bool|null  Pass True to request the chat's title */
        public ?bool $request_title,
        /** @var  bool|null  Pass True to request the chat's username */
        public ?bool $request_username,
        /** @var  bool|null  Pass True to request the chat's photo */
        public ?bool $request_photo,
    ) {
    }
}
