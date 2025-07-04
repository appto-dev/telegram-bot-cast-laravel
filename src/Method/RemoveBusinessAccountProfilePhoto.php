<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Removes the current profile photo of a managed business account. Requires the
 * <em>can_edit_profile_photo</em> business bot right. Returns <em>True</em> on
 * success.
 */
final class RemoveBusinessAccountProfilePhoto extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * Pass <em>True</em> to remove the public photo, which is visible even if the main
         * photo is hidden by the business account's privacy settings. After the main photo
         * is removed, the previous profile photo (if present) becomes the main photo.
         * @var bool
         */
        public ?bool $is_public,
    ) {
    }
}
