<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Removes the current profile photo of a managed business account. Requires the <em>can_edit_profile_photo</em>
 * business bot right. Returns <em>True</em> on success.
 */
final class RemoveBusinessAccountProfilePhoto extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /**
         * Pass <em>True</em> to remove the public photo, which is visible even if the main photo is hidden by the
         * business account's privacy settings. After the main photo is removed, the previous profile photo (if present)
         * becomes the main photo.
         */
        public ?bool $is_public,
    ) {
    }
}
