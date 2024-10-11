<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The paid media to send is a photo.
 *
 * @version Telegram Bot API 7.10
 */
final class InputPaidMediaPhoto extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers
         * (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or
         * pass "attach://<file_attach_name>" to upload a new one using multipart/form-data
         * under <file_attach_name> name. More information on Sending Files
         * @var InputFile|string
         */
        public InputFile|string $media,
        /**
         * Type of the media, must be photo
         * @var string
         */
        public string $type = 'photo',
    ) {
    }
}
