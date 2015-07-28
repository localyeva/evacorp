<?php

/*
 * Author: Khang Le
 * 
 * 
 */

function mwp_dropdownList($list, $options = array(), $selected = 0, $kv = FALSE) {
    //
    $str_options = '';
    foreach ($options as $k => $v) {
        $str_options .= $k . '="' . $v . '" ';
    }
    //
    $select = '<select ' . $str_options . ' >';
    foreach ($list as $key => $value) {
        $checked = ($selected == $value)?'selected':'';
        if ($kv == TRUE) {
            $select .= '<option value="' . $key . '" '. $checked . '>' . $value . '</option>';
        } else{
            $select .= '<option value="' . $value . '" '. $checked . '>' . $value . '</option>';
        }
    }
    $select .= '</select>';

    return $select;
}

?>