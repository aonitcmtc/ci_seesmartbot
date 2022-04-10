<?php

class Mod
{

    public static function DBtoThaiDate($d)
    {
        if($d == "0000-00-00" || $d == "00-00-0000" || $d == "" || is_null($d))
            return "";
        $x = explode("-", $d);
        return ($x[2] . "/" . $x[1] . "/" . (intval($x[0]) + 543));
    }


    public static function ThaitoDBDate($d)
    {
        if($d == "")
            return "";
        $x = explode("/", $d);
        return ((intval($x[2]) - 543) . "-" . $x[1] . "-" . $x[0]);
    }

    public static function ThaiDashtoDBDate($d)
    {
        if($d == "")
            return "";
        $x = explode("-", $d);
        return ((intval($x[2]) - 543) . "-" . $x[1] . "-" . $x[0]);
    }


    public static function dayThai($temp)
    {
        $date = "ไม่ระบุ";
        if($temp != "0000-00-00" && $temp > "") {
            $month = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
            $num = explode("-", $temp);
            if($num[0] != "0000") {
                if($num[0] < 2400) $num[0] += 543;
                $date = intval($num[2]) . " " . $month[$num[1] - 1] . " " . $num[0];
            }
        }
        return $date;
    }


    public static function dayThai2($temp)
    {
        $date = "ไม่ระบุ";

        if($temp != "0000-00-00" && $temp != '') {
            $month = array("ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
            $num = explode("-", $temp);
            if($num[0] == "0000") {
                $date = "ไม่ระบุ";
            } else {
                if($num[0] < 2200)
                    $num[0] += 543;
                @$date = intval($num[2]) . " " . $month[$num[1] - 1] . " " . $num[0];
            }
        } else {
            $date = "ไม่ระบุ";
        }
        return $date;
    }


    public static function dayThai3($temp)
    {
        if($temp != "0000/00/00" && $temp != '') {
            $month = array("ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
            $num = explode("/", $temp);
            if($num[2] == "0000") {
                $date = "ไม่ระบุ";
            } else {
                if($num[2] < 2200)
                    $num[2] += 543;
                $date = intval($num[0]) . " " . $month[$num[1] - 1] . " " . $num[2];
            }
        } else {
            $date = "ไม่ระบุ";
        }
        return $date;
    }


    public static function dayEng($temp)
    {
        if($temp != "0000-00-00" && $temp != '') {
            $month = array("Jan", "Feb", "Mar", "Apr", "MAy", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
            $num = explode("-", $temp);
            if($num[0] == "0000") {
                $date = "No Time";
            } else {
                if($num[0] < 2200)
                    $num[0];
                $date = intval($num[2]) . " " . $month[$num[1] - 1] . " " . $num[0];
            }
        } else {
            $date = "ไม่ระบุ";
        }
        return $date;
    }

    public static function dayEngFull($temp)
    {
        if($temp != "0000-00-00" && $temp != '') {
            $month = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December3");
            $num = explode("-", $temp);
            if($num[0] == "0000") {
                $date = "No Time";
            } else {
                if($num[0] < 2200)
                    $num[0];
                $date = intval($num[2]) . " " . $month[$num[1] - 1] . " " . $num[0];
            }
        } else {
            $date = "-";
        }
        return $date;
    }


    public static function dateTimeThai($temp)
    {
        if($temp == "0000-00-00 00:00:00" || $temp == '') {
            return 'ไม่ระบุ';
        } else {

            $tmp_arr = explode(' ', $temp);
            return self::dayThai2($tmp_arr[0]) . ' - ' . substr($tmp_arr[1], 0, -3);
        }
    }


    public static function dateTimeThaiFull($temp)
    {

        if($temp == "0000-00-00 00:00:00" || $temp == '') {
            return 'ไม่ระบุ';
        } else {

            $tmp_arr = explode(' ', $temp);
            return self::dayThai($tmp_arr[0]) . ' - ' . substr($tmp_arr[1], 0, -3);
        }
    }


    public static function timeThai($temp)
    {
        return substr($temp, 0, -3) . ' น.';
    }

}