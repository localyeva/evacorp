<?php

/*
 * Author: Khang Le
 * 
 * 
 */

function mwp_dropdownList($list, $options = array(), $selected = 0, $kv = FALSE, $empty = array()) {
    //
    $str_options = '';
    foreach ($options as $k => $v) {
        $str_options .= $k . '="' . $v . '" ';
    }
    //
    $select = '<select ' . $str_options . ' >';
    $i = 0;
    foreach ($list as $key => $value) {
        $checked = ($selected == $value) ? 'selected' : '';
        if ($kv == TRUE) {
            $select .= '<option value="' . $key . '" ' . $checked . '>' . $value . '</option>';
        } else {
            if (!is_null($empty) && is_array($empty)) {
                if (isset($empty[$i]) && $key == $empty[$i]) {
                    $select .= '<option value="" ' . $checked . '>' . $value . '</option>';
                } else {
                    $select .= '<option value="' . $value . '" ' . $checked . '>' . $value . '</option>';
                }
            }
            $i++;
        }
    }
    $select .= '</select>';

    return $select;
}

?>