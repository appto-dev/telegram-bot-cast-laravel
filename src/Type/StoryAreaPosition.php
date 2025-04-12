<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes the position of a clickable area within a story.
 */
final class StoryAreaPosition extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The abscissa of the area's center, as a percentage of the media width
         * @var float
         */
        public float $x_percentage,
        /**
         * The ordinate of the area's center, as a percentage of the media height
         * @var float
         */
        public float $y_percentage,
        /**
         * The width of the area's rectangle, as a percentage of the media width
         * @var float
         */
        public float $width_percentage,
        /**
         * The height of the area's rectangle, as a percentage of the media height
         * @var float
         */
        public float $height_percentage,
        /**
         * The clockwise rotation angle of the rectangle, in degrees; 0-360
         * @var float
         */
        public float $rotation_angle,
        /**
         * The radius of the rectangle corner rounding, as a percentage of the media width
         * @var float
         */
        public float $corner_radius_percentage,
    ) {
    }
}
