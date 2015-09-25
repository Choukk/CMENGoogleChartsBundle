<?php

namespace CMENGoogleChartsBundle\GoogleCharts\Options;

class Legend
{
    /**
     * Alignment of the legend. Can be one of the following :
     * 'start' - Aligned to the start of the area allocated for the legend.
     * 'center' - Centered in the area allocated for the legend.
     * 'end' - Aligned to the end of the area allocated for the legend.
     *
     * Start, center, and end are relative to the style -- vertical or horizontal -- of the legend. For example, in a
     * 'right' legend, 'start' and 'end' are at the top and bottom, respectively; for a 'top' legend, 'start' and 'end'
     * would be at the left and right of the area, respectively.
     * The default value depends on the legend's position. For 'bottom' legends, the default is 'center'; other legends
     * default to 'start'.
     *
     * @var string
     */
    protected $alignment;

    /**
     * Position of the legend. Can be one of the following :
     * 'bottom' - Displays the legend below the chart.
     * 'labeled' - Draws lines connecting slices to their data values.
     * 'left' - Displays the legend left of the chart.
     * 'none' - Displays no legend.
     * 'right' - Displays the legend right of the chart.
     * 'top' - Displays the legend above the chart.
     *
     * @var string
     */
    protected $position;

    /**
     * Maximum number of lines in the legend. Set this to a number greater than one to add lines to your legend.
     * Note: The exact logic used to determine the actual number of lines rendered is still in flux.
     * This option currently works only when legend.position is 'top'.
     *
     * @var int
     */
    protected $maxLines;

    /**
     * An object that specifies the legend text style.
     *
     * @var TextStyle
     */
    protected $textStyle;


    public function __construct()
    {
        $this->textStyle = new TextStyle();
    }


    /**
     * @return TextStyle
     */
    public function getTextStyle()
    {
        return $this->textStyle;
    }

    /**
     * @param string $alignment
     */
    public function setAlignment($alignment)
    {
        $this->alignment = $alignment;
    }

    /**
     * @param string $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }
}
