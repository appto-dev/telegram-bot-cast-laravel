<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to create a <a
 * href="https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions">subscription
 * invite link</a> for a channel chat. The bot must have the
 * <em>can_invite_users</em> administrator rights. The link can be edited using the
 * method <a
 * href="#editchatsubscriptioninvitelink">editChatSubscriptionInviteLink</a> or
 * revoked using the method <a
 * href="#revokechatinvitelink">revokeChatInviteLink</a>. Returns the new invite
 * link as a <a href="#chatinvitelink">ChatInviteLink</a> object.
 */
final class CreateChatSubscriptionInviteLink extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target channel chat or username of the target channel
         * (in the format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Invite link name; 0-32 characters
         * @var string
         */
        public ?string $name,
        /**
         * The number of seconds the subscription will be active for before the next
         * payment. Currently, it must always be 2592000 (30 days).
         * @var int
         */
        public int $subscription_period,
        /**
         * The amount of Telegram Stars a user must pay initially and after each subsequent
         * subscription period to be a member of the chat; 1-2500
         * @var int
         */
        public int $subscription_price,
    ) {
    }
}
