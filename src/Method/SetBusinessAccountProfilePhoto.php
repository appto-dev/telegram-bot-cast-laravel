<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InputProfilePhoto;
use Spatie\LaravelData\Data;

/**
 * Changes the profile photo of a managed business account. Requires the
 * <em>can_edit_profile_photo</em> business bot right. Returns <em>True</em> on
 * success.
 */
final class SetBusinessAccountProfilePhoto extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection
         * @var string
         */
        public string $business_connection_id,
        /**
         * The new profile photo to set
         * @var InputProfilePhoto
         */
        public InputProfilePhoto $photo,
        /**
         * Pass <em>True</em> to set the public photo, which will be visible even if the
         * main photo is hidden by the business account's privacy settings. An account can
         * have only one public photo.
         * @var bool
         */
        public ?bool $is_public,
    ) {
    }
}
