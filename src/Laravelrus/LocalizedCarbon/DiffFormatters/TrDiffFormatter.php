<?php namespace Laravelrus\LocalizedCarbon\DiffFormatters;


class TrDiffFormatter implements DiffFormatterInterface {

    public function format($isNow, $isFuture, $delta, $unit) {

        $unitStr = \Lang::choice("localized-carbon::units." . $unit, $delta, array(), 'tr');

        $txt .= $unitStr;

        // $txt = $delta . ' ' . $unit;
        // $txt .= $delta == 1 ? '' : 'lar';

        if ($isNow) {
            $txt .= ($isFuture) ? ' şimdi' : ' önce';
            return $txt;
        }

        $txt .= ($isFuture) ? ' sonra' : ' önce';
        return $txt;
    }
}
