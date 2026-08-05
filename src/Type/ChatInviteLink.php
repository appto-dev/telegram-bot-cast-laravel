<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatInviteLink extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  The invite link. If the link was created by another chat administrator, then the
         * second part of the link will be replaced with "…".
         */
        public string $invite_link,
        /** @var  User  Creator of the link */
        public User $creator,
        /** @var  bool  True, if users joining the chat via the link need to be approved by chat administrators */
        public bool $creates_join_request,
        /** @var  bool  True, if the link is primary */
        public bool $is_primary,
        /** @var  bool  True, if the link is revoked */
        public bool $is_revoked,
        /** @var  string|null  Invite link name */
        public ?string $name,
        /** @var  int|null  Point in time (Unix timestamp) when the link will expire or has been expired */
        public ?int $expire_date,
        /**
         * @var  int|null  The maximum number of users that can be members of the chat simultaneously after
         * joining the chat via this invite link; 1-99999
         */
        public ?int $member_limit,
        /** @var  int|null  Number of pending join requests created using this link */
        public ?int $pending_join_request_count,
        /** @var  int|null  The number of seconds the subscription will be active for before the next payment */
        public ?int $subscription_period,
        /**
         * @var  int|null  The amount of Telegram Stars a user must pay initially and after each subsequent
         * subscription period to be a member of the chat using the link
         */
        public ?int $subscription_price,
    ) {
    }
}
