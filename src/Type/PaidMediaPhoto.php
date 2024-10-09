<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * The paid media is a photo.
 *
 * @version Telegram Bot API 7.10
 */
final class PaidMediaPhoto extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the paid media, always "photo"
         * @var string
         */
        public string $type,
        /**
         * The photo
         * @var PhotoSize
         */
        public PhotoSize $photo,
    ) {
    }
}
