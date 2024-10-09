<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * The paid media isn't available before the payment.
 *
 * @version Telegram Bot API 7.10
 */
final class PaidMediaPreview extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the paid media, always "preview"
         * @var string
         */
        public string $type,
        /**
         * Media width as defined by the sender
         * @var int|null
         */
        public ?int $width,
        /**
         * Media height as defined by the sender
         * @var int|null
         */
        public ?int $height,
        /**
         * Duration of the media in seconds as defined by the sender
         * @var int|null
         */
        public ?int $duration,
    ) {
    }
}