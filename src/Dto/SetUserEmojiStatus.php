<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini App
 * method <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">requestEmojiStatusAccess</a>. Returns
 * <em>True</em> on success.
 */
final class SetUserEmojiStatus extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the target user */
        public int $user_id,
        /** Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status. */
        public ?string $emoji_status_custom_emoji_id,
        /** Expiration date of the emoji status, if any */
        public ?int $emoji_status_expiration_date,
    ) {
    }
}
