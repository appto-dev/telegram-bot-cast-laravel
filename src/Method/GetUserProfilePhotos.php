<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to get a list of profile pictures for a user. Returns a <a
 * href="#userprofilephotos">UserProfilePhotos</a> object.
 *
 * @version Telegram Bot API 7.10
 */
final class GetUserProfilePhotos extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
        /**
         * Sequential number of the first photo to be returned. By default, all photos are
         * returned.
         * @var int|null
         */
        public ?int $offset,
        /**
         * Limits the number of photos to be retrieved. Values between 1-100 are accepted.
         * Defaults to 100.
         * @var int|null
         */
        public ?int $limit,
    ) {
    }
}
