<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InputProfilePhoto;
use Spatie\LaravelData\Data;

/**
 * Changes the profile photo of the bot. Returns <em>True</em> on success.
 */
final class SetMyProfilePhoto extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * The new profile photo to set
         * @var InputProfilePhoto
         */
        public InputProfilePhoto $photo,
    ) {
    }
}
