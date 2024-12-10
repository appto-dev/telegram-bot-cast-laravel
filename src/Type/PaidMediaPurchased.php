<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object contains information about a paid media purchase.
 */
final class PaidMediaPurchased extends Data implements TelegramTypeInterface
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
