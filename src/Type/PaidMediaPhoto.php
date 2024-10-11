<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The paid media is a photo.
 *
 * @version Telegram Bot API 7.10
 */
final class PaidMediaPhoto extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the paid media, always "photo"
         * @var string
         */
        public string $type,
        /**
         * The photo
         * @var PhotoSize[]
         */
        public array $photo,
    ) {
    }
}
