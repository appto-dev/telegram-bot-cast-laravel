<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The paid media is a video.
 *
 * @version Telegram Bot API 7.10
 */
final class PaidMediaVideo extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the paid media, always "video"
         * @var string
         */
        public string $type,
        /**
         * The video
         * @var Video
         */
        public Video $video,
    ) {
    }
}
