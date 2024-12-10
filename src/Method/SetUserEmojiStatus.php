<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Changes the emoji status for a given user that previously allowed the bot to
 * manage their emoji status via the Mini App method <a
 * href="/bots/webapps#initializing-mini-apps">requestEmojiStatusAccess</a>.
 * Returns <em>True</em> on success.
 */
final class SetUserEmojiStatus extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
        /**
         * Custom emoji identifier of the emoji status to set. Pass an empty string to
         * remove the status.
         * @var string
         */
        public ?string $emoji_status_custom_emoji_id,
        /**
         * Expiration date of the emoji status, if any
         * @var int
         */
        public ?int $emoji_status_expiration_date,
    ) {
    }
}
