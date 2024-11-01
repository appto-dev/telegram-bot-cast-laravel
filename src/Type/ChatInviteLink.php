<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents an invite link for a chat.
 *
 * @version Telegram Bot API 7.11
 */
final class ChatInviteLink extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The invite link. If the link was created by another chat administrator, then the
         * second part of the link will be replaced with "…".
         * @var string
         */
        public string $invite_link,
        /**
         * Creator of the link
         * @var User
         */
        public User $creator,
        /**
         * True, if users joining the chat via the link need to be approved by chat
         * administrators
         * @var bool
         */
        public bool $creates_join_request,
        /**
         * True, if the link is primary
         * @var bool
         */
        public bool $is_primary,
        /**
         * True, if the link is revoked
         * @var bool
         */
        public bool $is_revoked,
        /**
         * Invite link name
         * @var string
         */
        public ?string $name,
        /**
         * Point in time (Unix timestamp) when the link will expire or has been expired
         * @var int
         */
        public ?int $expire_date,
        /**
         * The maximum number of users that can be members of the chat simultaneously after
         * joining the chat via this invite link; 1-99999
         * @var int
         */
        public ?int $member_limit,
        /**
         * Number of pending join requests created using this link
         * @var int
         */
        public ?int $pending_join_request_count,
        /**
         * The number of seconds the subscription will be active for before the next
         * payment
         * @var int
         */
        public ?int $subscription_period,
        /**
         * The amount of Telegram Stars a user must pay initially and after each subsequent
         * subscription period to be a member of the chat using the link
         * @var int
         */
        public ?int $subscription_price,
    ) {
    }
}
