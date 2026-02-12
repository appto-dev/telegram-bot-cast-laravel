<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BackgroundFill;
use Appto\TelegramBot\Interfaces\BackgroundType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The background is a .PNG or .TGV (gzipped subset of SVG with MIME type
 * "application/x-tgwallpattern") pattern to be combined with the background fill
 * chosen by the user.
 */
final class BackgroundTypePattern extends Data implements TelegramBotData, BackgroundType
{
    public function __construct(
        /** Type of the background, always "pattern" */
        public string $type,
        /** Document with the pattern */
        public Document $document,
        /** The background fill that is combined with the pattern */
        public BackgroundFill $fill,
        /** Intensity of the pattern when it is shown above the filled background; 0-100 */
        public int $intensity,
        /**
         * True, if the background fill must be applied only to the pattern itself. All
         * other pixels are black in this case. For dark themes only
         */
        public ?true $is_inverted,
        /** True, if the background moves slightly when the device is tilted */
        public ?true $is_moving,
    ) {
    }
}
