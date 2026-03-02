<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\InputProfilePhoto;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Changes the profile photo of a managed business account. Requires the <em>can_edit_profile_photo</em> business
 * bot right. Returns <em>True</em> on success.
 */
final class SetBusinessAccountProfilePhoto extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** The new profile photo to set */
        public InputProfilePhoto $photo,
        /**
         * Pass <em>True</em> to set the public photo, which will be visible even if the main photo is hidden by the
         * business account's privacy settings. An account can have only one public photo.
         */
        public ?bool $is_public,
    ) {
    }
}
