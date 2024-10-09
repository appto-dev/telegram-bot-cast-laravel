<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes the options used for link preview generation.
 *
 * @version Telegram Bot API 7.10
 */
final class LinkPreviewOptions extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * True, if the link preview is disabled
         * @var bool|null
         */
        public ?bool $is_disabled,
        /**
         * URL to use for the link preview. If empty, then the first URL found in the
         * message text will be used
         * @var string|null
         */
        public ?string $url,
        /**
         * True, if the media in the link preview is supposed to be shrunk; ignored if the
         * URL isn't explicitly specified or media size change isn't supported for the
         * preview
         * @var bool|null
         */
        public ?bool $prefer_small_media,
        /**
         * True, if the media in the link preview is supposed to be enlarged; ignored if
         * the URL isn't explicitly specified or media size change isn't supported for the
         * preview
         * @var bool|null
         */
        public ?bool $prefer_large_media,
        /**
         * True, if the link preview must be shown above the message text; otherwise, the
         * link preview will be shown below the message text
         * @var bool|null
         */
        public ?bool $show_above_text,
    ) {
    }
}
