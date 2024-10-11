<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Upon receiving a message with this object, Telegram clients will display a reply
 * interface to the user (act as if the user has selected the bot's message and
 * tapped 'Reply'). This can be extremely useful if you want to create
 * user-friendly step-by-step interfaces without having to sacrifice <a
 * href="/bots/features#privacy-mode">privacy mode</a>. Not supported in channels
 * and for messages sent on behalf of a Telegram Business account.
 *
 * @version Telegram Bot API 7.10
 */
final class ForceReply extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Shows reply interface to the user, as if they manually selected the bot's
         * message and tapped 'Reply'
         * @var true
         */
        public true $force_reply,
        /**
         * The placeholder to be shown in the input field when the reply is active; 1-64
         * characters
         * @var string
         */
        public ?string $input_field_placeholder,
        /**
         * Use this parameter if you want to force reply from specific users only. Targets:
         * 1) users that are @mentioned in the text of the Message object; 2) if the bot's
         * message is a reply to a message in the same chat and forum topic, sender of the
         * original message.
         * @var bool
         */
        public ?bool $selective,
    ) {
    }
}
