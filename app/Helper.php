<?php

// คำนวณอายุปัจจุบัน
function getAge($birthday) {
    $then = strtotime($birthday);
    return(floor((time()-$then)/31556926));
    }
//////////////////

function NumberThai($NumberThai)
{

  return str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
  array( "o" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),
  $NumberThai);
}

function DateDataEdit($new_data1)
{
    $new_data11 = date('Y-m-d', strtotime($new_data1));
        $old_date = explode('-', $new_data11);
        $new_data1 =  $old_date[1];

        if($new_data1 == '01'){
            $old_date1 = 'มกราคม';
        }elseif($new_data1 == '02'){
            $old_date1 = 'กุมภาพันธ์';
        }elseif($new_data1 == '03'){
            $old_date1 = 'มีนาคม';
        }elseif($new_data1 == '04'){
            $old_date1 = 'เมษายน';
        }elseif($new_data1 == '05'){
            $old_date1 = 'พฤษภาคม';
        }elseif($new_data1 == '06'){
            $old_date1 = 'มิถุนายน';
        }elseif($new_data1 == '07'){
            $old_date1 = 'กรกฎาคม';
        }elseif($new_data1 == '08'){
            $old_date1 = 'สิงหาคม';
        }elseif($new_data1 == '09'){
            $old_date1 = 'กันยายน';
        }elseif($new_data1 == '10'){
            $old_date1 = 'ตุลาคม';
        }elseif($new_data1 == '11'){
            $old_date1 = 'พฤศจิกายน';
        }elseif($new_data1 == '12'){
            $old_date1 = 'ธันวาคม';
        }

        $new_data2 =  $old_date[2];

        if($new_data2 == '01'){
            $old_date2 = '1';
        }elseif($new_data2 == '02'){
            $old_date2 = '2';
        }elseif($new_data2 == '03'){
            $old_date2 = '3';
        }elseif($new_data2 == '04'){
            $old_date2 = '4';
        }elseif($new_data2 == '05'){
            $old_date2 = '5';
        }elseif($new_data2 == '06'){
            $old_date2 = '6';
        }elseif($new_data2 == '07'){
            $old_date2 = '7';
        }elseif($new_data2 == '08'){
            $old_date2 = '8';
        }elseif($new_data2 == '09'){
            $old_date2 = '9';
        }else{
            $old_date2 = $new_data2;
        }

        $new_date_go = $old_date2.' '.$old_date1.' '.$old_date[0];



    return $new_date_go;
}
function DateData($new_data1)
{

        $old_date = explode(' ', $new_data1);
        $new_data1 =  $old_date[1];

        if($new_data1 == 'มกราคม'){
            $old_date1 = '01';
        }elseif($new_data1 == 'กุมภาพันธ์'){
            $old_date1 = '02';
        }elseif($new_data1 == 'มีนาคม'){
            $old_date1 = '03';
        }elseif($new_data1 == 'เมษายน'){
            $old_date1 = '04';
        }elseif($new_data1 == 'พฤษภาคม'){
            $old_date1 = '05';
        }elseif($new_data1 == 'มิถุนายน'){
            $old_date1 = '06';
        }elseif($new_data1 == 'กรกฎาคม'){
            $old_date1 = '07';
        }elseif($new_data1 == 'สิงหาคม'){
            $old_date1 = '08';
        }elseif($new_data1 == 'กันยายน'){
            $old_date1 = '09';
        }elseif($new_data1 == 'ตุลาคม'){
            $old_date1 = '10';
        }elseif($new_data1 == 'พฤศจิกายน'){
            $old_date1 = '11';
        }elseif($new_data1 == 'ธันวาคม'){
            $old_date1 = '12';
        }

        $new_data2 =  $old_date[0];

        if($new_data2 == '1'){
            $old_date2 = '01';
        }elseif($new_data2 == '2'){
            $old_date2 = '02';
        }elseif($new_data2 == '3'){
            $old_date2 = '03';
        }elseif($new_data2 == '4'){
            $old_date2 = '04';
        }elseif($new_data2 == '5'){
            $old_date2 = '05';
        }elseif($new_data2 == '6'){
            $old_date2 = '06';
        }elseif($new_data2 == '7'){
            $old_date2 = '07';
        }elseif($new_data2 == '8'){
            $old_date2 = '08';
        }elseif($new_data2 == '9'){
            $old_date2 = '09';
        }else{
            $old_date2 = $new_data2;
        }

        $new_date_go = $old_date[2].'-'.$old_date1.'-'.$old_date2;



    return $new_date_go;
}
function DateThaiNotps($strDate)
{
  $strYear = date("Y",strtotime($strDate))+543;
  $strMonth= date("n",strtotime($strDate));
  $strDay= date("j",strtotime($strDate));

  $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
  $strMonthThai=$strMonthCut[$strMonth];

  return str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
  array( "o" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),
  $strDay)." $strMonthThai ".
  str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
  array( "o" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),
  $strYear);
}

function DateThai($strDate)
{
  $strYear = date("Y",strtotime($strDate))+543;
  $strMonth= date("n",strtotime($strDate));
  $strDay= date("j",strtotime($strDate));

  $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
  $strMonthThai=$strMonthCut[$strMonth];

  return str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
  array( "o" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),
  $strDay)." $strMonthThai พ.ศ.".
  str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
  array( "o" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),
  $strYear);
}
function DateThai2($strDate)
{
  $strYear = date("Y",strtotime($strDate))+543;
  $strMonth= date("n",strtotime($strDate));
  $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
  $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
  $strMonthThai=$strMonthCut[$strMonth];

  return $strDay." $strMonthThai ".$strYear ." | ". "$strHour:$strMinute" ;
}

function TimeThai2($strDate)
{
  $strYear = date("Y",strtotime($strDate))+543;
  $strMonth= date("n",strtotime($strDate));
  $strDay= date("j",strtotime($strDate));
    $strHour= date("H",strtotime($strDate));
    $strMinute= date("i",strtotime($strDate));
    $strSeconds= date("s",strtotime($strDate));
  $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
  $strMonthThai=$strMonthCut[$strMonth];

  return "$strHour:$strMinute" ;
}

function DateThai3($strDate)
{
  $strYear = date("Y",strtotime($strDate))+543;
  $strMonth= date("n",strtotime($strDate));
  $strDay= date("j",strtotime($strDate));
  $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
  $strMonthThai=$strMonthCut[$strMonth];

  return $strDay." $strMonthThai ".$strYear;
}

function DateFThai($strDate)
{
  $strYear = date("Y",strtotime($strDate))+543;
  $strMonth= date("n",strtotime($strDate));
  $strDay= date("j",strtotime($strDate));

  $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
  $strMonthThai=$strMonthCut[$strMonth];

  return str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
  array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
  $strDay)." $strMonthThai พ.ศ.".
  str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
  array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),
  $strYear);
}

function YearFThai($strDate)
{
    $strYear = date("Y", strtotime($strDate)) + 543;

    return
        str_replace(
            array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9'),
            array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9'),
            $strYear
        );
}

define('LINE_API', "https://notify-api.line.me/api/notify");

// print_r($res);

function notify_message($params, $token)
{
    $queryData = array(
        'message'          => $params["message"],
        'stickerPackageId' => $params["stickerPkg"],
        'stickerId'        => $params["stickerId"],
        'imageThumbnail'   => $params["imageThumbnail"],
        'imageFullsize'    => $params["imageFullsize"],
    );
    $queryData = http_build_query($queryData, '', '&amp;');
    $headerOptions = array(
        'http' => array(
            'method'  => 'POST',
            'header'  => "Content-Type: application/x-www-form-urlencoded\r\n"
                . "Authorization: Bearer " . $token . "\r\n"
                . "Content-Length: " . strlen($queryData) . "\r\n",
            'content' => $queryData,
        ),
    );
    $context = stream_context_create($headerOptions);
    $result = file_get_contents(LINE_API, FALSE, $context);
    $res = json_decode($result);
    return $res;
}

function line_notify_t($Token, $message)
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    $lineapi = $Token; // ใส่ token key ที่ได้มา
    $mms =  trim($message); // ข้อความที่ต้องการส่ง
    date_default_timezone_set("Asia/Bangkok");
    $chOne = curl_init();
    curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
    // SSL USE
    curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
    //POST
    curl_setopt($chOne, CURLOPT_POST, 1);
    curl_setopt($chOne, CURLOPT_POSTFIELDS, "message=$mms");
    curl_setopt($chOne, CURLOPT_FOLLOWLOCATION, 1);
    $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer ' . $lineapi . '',);
    curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($chOne);
    //Check error
    // if(curl_error($chOne))
    // {
    //          echo 'error:' . curl_error($chOne);
    // }
    // else {
    // $result_ = json_decode($result, true);
    //    echo "status : ".$result_['status']; echo "message : ". $result_['message'];
    //       }
    curl_close($chOne);
}


