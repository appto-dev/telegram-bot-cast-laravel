<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represent a user's profile pictures.
 *
 * @version Telegram Bot API 7.10
 */
final class UserProfilePhotos extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Total number of profile pictures the target user has
         * @var int
         */
        public int $total_count,
        /**
         * Requested profile pictures (in up to 4 sizes each)
         * @var array<PhotoSize[]>
         */
        public array $photos,
    ) {
    }
}
