<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object contains information about a paid media purchase.
 *
 * @version Telegram Bot API 7.10
 */
final class PaidMediaPurchased extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * User who purchased the media
         * @var User
         */
        public User $from,
        /**
         * Bot-specified paid media payload
         * @var string
         */
        public string $paid_media_payload,
    ) {
    }
}
