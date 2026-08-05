<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class StoryAreaPosition extends Data implements TelegramType
{
    public function __construct(
        /** @var  float  The abscissa of the area's center, as a percentage of the media width */
        public float $x_percentage,
        /** @var  float  The ordinate of the area's center, as a percentage of the media height */
        public float $y_percentage,
        /** @var  float  The width of the area's rectangle, as a percentage of the media width */
        public float $width_percentage,
        /** @var  float  The height of the area's rectangle, as a percentage of the media height */
        public float $height_percentage,
        /** @var  float  The clockwise rotation angle of the rectangle, in degrees; 0-360 */
        public float $rotation_angle,
        /** @var  float  The radius of the rectangle corner rounding, as a percentage of the media width */
        public float $corner_radius_percentage,
    ) {
    }
}
