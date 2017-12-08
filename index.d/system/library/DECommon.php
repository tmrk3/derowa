<?php
class DECommon {
    public static function extract_csv ($names, $csv) {
        $lines = explode("\r\n", $csv);
        $rows = array();
        foreach ($lines as $l) {
            if (strlen ($l) == 0) {continue;}
            $c = explode("\t", $l);
            if (count($c) == 0) {continue;}
            $cols = array();
            for ($i = 0; $i < count($names); $i++) {
                $v = "";
                if (array_key_exists($i, $c)) {
                    $v = $c[$i];
                }
                $cols[$names[$i]] = $v;
            }
            array_push($rows, $cols);
        }
        return $rows;
    }
}