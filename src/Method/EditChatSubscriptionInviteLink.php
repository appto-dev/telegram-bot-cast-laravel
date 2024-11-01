<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to edit a subscription invite link created by the bot. The bot
 * must have the <em>can_invite_users</em> administrator rights. Returns the edited
 * invite link as a <a href="#chatinvitelink">ChatInviteLink</a> object.
 *
 * @version Telegram Bot API 7.11
 */
final class EditChatSubscriptionInviteLink extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * The invite link to edit
         * @var string
         */
        public string $invite_link,
        /**
         * Invite link name; 0-32 characters
         * @var string
         */
        public ?string $name,
    ) {
    }
}
