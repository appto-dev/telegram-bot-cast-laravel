<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to create a <a
 * href="https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions">subscription invite
 * link</a> for a channel chat. The bot must have the <em>can_invite_users</em> administrator rights. The link can be
 * edited using the method <a
 * href="https://core.telegram.org/bots/api#editchatsubscriptioninvitelink">editChatSubscriptionInviteLink</a> or revoked
 * using the method <a href="https://core.telegram.org/bots/api#revokechatinvitelink">revokeChatInviteLink</a>. Returns the
 * new invite link as a <a href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
 */
final class CreateChatSubscriptionInviteLink extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target channel chat or username of the target channel (in the format
         * <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** Invite link name; 0-32 characters */
        public ?string $name,
        /**
         * The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000
         * (30 days).
         */
        public int $subscription_period,
        /**
         * The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of
         * the chat; 1-10000
         */
        public int $subscription_price,
    ) {
    }
}
