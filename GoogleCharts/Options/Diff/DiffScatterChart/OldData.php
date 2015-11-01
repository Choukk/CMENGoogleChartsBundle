<?php

namespace CMEN\GoogleChartsBundle\GoogleCharts\Options\Diff\DiffScatterChart;

/**
 * @author Christophe Meneses
 */
class OldData
{
    /**
     * Transparency of old data.
     *
     * @var float
     */
    protected $opacity;


    /**
     * @param float $opacity
     */
    public function setOpacity($opacity)
    {
        $this->opacity = $opacity;
    }
}
