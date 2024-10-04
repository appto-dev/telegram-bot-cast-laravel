<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\UserProfilePhotos;
use Spatie\LaravelData\Data;

/**
 * GetUserProfilePhotos
 *
 * Use this method to get a list of profile pictures for a user. Returns a
 * UserProfilePhotos object.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetUserProfilePhotos extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = UserProfilePhotos::class;

    public function __construct(
        /** Unique identifier of the target user */
        public int $user_id,
        /**
         * Sequential number of the first photo to be returned. By default, all
         * photos are returned.
         */
        public ?int $offset,
        /**
         * Limits the number of photos to be retrieved. Values between 1-100 are
         * accepted. Defaults to 100.
         */
        public ?int $limit,
    ) {
    }
}
