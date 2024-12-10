<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes the options used for link preview generation.
 */
final class LinkPreviewOptions extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * True, if the link preview is disabled
         * @var bool
         */
        public ?bool $is_disabled,
        /**
         * URL to use for the link preview. If empty, then the first URL found in the
         * message text will be used
         * @var string
         */
        public ?string $url,
        /**
         * True, if the media in the link preview is supposed to be shrunk; ignored if the
         * URL isn't explicitly specified or media size change isn't supported for the
         * preview
         * @var bool
         */
        public ?bool $prefer_small_media,
        /**
         * True, if the media in the link preview is supposed to be enlarged; ignored if
         * the URL isn't explicitly specified or media size change isn't supported for the
         * preview
         * @var bool
         */
        public ?bool $prefer_large_media,
        /**
         * True, if the link preview must be shown above the message text; otherwise, the
         * link preview will be shown below the message text
         * @var bool
         */
        public ?bool $show_above_text,
    ) {
    }
}
