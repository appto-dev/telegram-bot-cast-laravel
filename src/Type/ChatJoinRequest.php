<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatJoinRequest extends Data implements TelegramType
{
    public function __construct(
        /** @var  Chat  Chat to which the request was sent */
        public Chat $chat,
        /** @var  User  User that sent the join request */
        public User $from,
        /**
         * @var  int  Identifier of a private chat with the user who sent the join request. This number may
         * have more than 32 significant bits and some programming languages may have difficulty/silent defects
         * in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision
         * float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to
         * send messages until the join request is processed, assuming no other administrator contacted the
         * user.
         */
        public int $user_chat_id,
        /** @var  int  Date the request was sent in Unix time */
        public int $date,
        /** @var  string|null  Bio of the user */
        public ?string $bio,
        /** @var  ChatInviteLink|null  Chat invite link that was used by the user to send the join request */
        public ?ChatInviteLink $invite_link,
        /**
         * @var  string|null  Identifier of the join request query; for bots assigned to process join requests
         * only. If present, then the bot must call sendChatJoinRequestWebApp or directly call
         * answerChatJoinRequestQuery within 10 seconds.
         */
        public ?string $query_id,
    ) {
    }
}
