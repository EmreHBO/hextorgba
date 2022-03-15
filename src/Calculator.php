<?php

class Calculator
{
    /* Convert hexdec color string to rgb(a) string */
    public function hextorgba($color, $opacity = false)
    {
        if (empty($color) || empty($opacity)) {
            return 'Hex and Alpha values can not be empty!';
        }

        $color = str_replace('#', '', $color);
        $opacity = str_replace(['0,', '0.'], '.', $opacity);

        return $this->getValues($color, $opacity);

    }

    function getValues($color, $opacity)
    {

        //Check if color has 6 or 3 characters and get values
        if (strlen($color) == 6) {
            $hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
        } elseif (strlen($color) == 3) {
            $hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
        } else {
            return 'Hex value must have 3 or 6 characters!';
        }

       return $this->convertHexToRgba($hex, $opacity);

    }

    function convertHexToRgba($hex, $opacity)
    {

        //Convert hexadec to rgb
        $rgb = array_map('hexdec', $hex);

        if (abs($opacity) > 1) $opacity = 1.0;
        $output = 'rgba(' . implode(",", $rgb) . ', ' . $opacity . ')';

        //Return rgb(a) color string
        return $output;
    }

}