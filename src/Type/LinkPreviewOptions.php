<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class LinkPreviewOptions extends Data implements TelegramType
{
    public function __construct(
        /** @var  bool|null  True, if the link preview is disabled */
        public ?bool $is_disabled,
        /**
         * @var  string|null  URL to use for the link preview. If empty, then the first URL found in the
         * message text will be used.
         */
        public ?string $url,
        /**
         * @var  bool|null  True, if the media in the link preview is supposed to be shrunk; ignored if the URL
         * isn't explicitly specified or media size change isn't supported for the preview
         */
        public ?bool $prefer_small_media,
        /**
         * @var  bool|null  True, if the media in the link preview is supposed to be enlarged; ignored if the
         * URL isn't explicitly specified or media size change isn't supported for the preview
         */
        public ?bool $prefer_large_media,
        /**
         * @var  bool|null  True, if the link preview must be shown above the message text; otherwise, the link
         * preview will be shown below the message text
         */
        public ?bool $show_above_text,
    ) {
    }
}
