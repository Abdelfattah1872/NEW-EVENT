<?php

$error = '';
$success = '';

///////////////////////////////////////////////////////////////////////////////////  Filteration  ,  santizing  , fees counter Functions  //////////////////////////////////////////////////////////////////////////////////////////

function requiredInput($value)
{
    $str = trim($value);
    if(strlen($str) > 0)
    {
        return true;
    }
    return false;
}


//  sanitize string inputs
function santString($value)
{
    $str = trim($value);
    $str = filter_var($str,FILTER_SANITIZE_STRING);
    return $str;
}


//  sanitize email inputs
function santEmail($email)
{
    $email = trim($email);
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    return $email;
}


// minimum number

function minInput($value,$min)
{
    if(strlen($value) < $min)
    {
        return false;
    }
    return true;
}

// maximum number
function maxInput($value,$max)
{
    if(strlen($value) > $max)
    {
        return false;
    }
    return true;
}


// validate email
function validEmail($email)
{
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        return true;
    }
    return false;
}


// validate fees counter
function check_coast($pack,$ex_del,$ex_kid,$spose,$p_pack_one,$p_ex_del_one,$p_ex_kid_one,$p_spose_one,$num_del,$num_kid,$p_pack_two,$p_ex_del_two,$p_ex_kid_two,$p_spose_two){
    $cost = array();
    if ($pack === "0"){
        array_push($cost, $p_pack_one);
        if ($ex_del ==="1"){
            array_push($cost,($num_del * $p_ex_del_one));
            if ($ex_kid ==="1"){
                array_push($cost,($num_kid * $p_ex_kid_one));
                if ($spose ==="1"){
                    array_push($cost,$p_spose_one);
                }else{
                    array_push($cost,0);
                }
            }
            else
            {
                array_push($cost,0);
                if ($spose ==="1"){
                    array_push($cost,$p_spose_one);
                }else{
                    array_push($cost,0);
                }
            }
        }
        else
        {
            array_push($cost,0);
            if ($ex_kid ==="1"){
                array_push($cost,($num_kid * $p_ex_kid_one));
                if ($spose ==="1"){
                    array_push($cost,$p_spose_one);
                }else{
                    array_push($cost,0);
                }
            }
            else
            {
                array_push($cost,0);
                if ($spose ==="1"){
                    array_push($cost,$p_spose_one);
                }else{
                    array_push($cost,0);
                }
            }
        }

        return array_sum($cost);
    }
    elseif ($pack === "1"){
        array_push($cost, $p_pack_two);
        if ($ex_del ==="1"){
            array_push($cost,($num_del * $p_ex_del_two));
            if ($ex_kid ==="1"){
                array_push($cost,($num_kid * $p_ex_kid_two));
                if ($spose ==="1"){
                    array_push($cost,$p_spose_two);
                }else{
                    array_push($cost,0);
                }
            }else
            {
                array_push($cost,0);
                if ($spose ==="1"){
                    array_push($cost,$p_spose_two);
                }else{
                    array_push($cost,0);
                }
            }
        }else
        {
            array_push($cost,0);
            if ($ex_kid ==="1"){
                array_push($cost,($num_kid * $p_ex_kid_two));
                if ($spose ==="1"){
                    array_push($cost,$p_spose_two);
                }else{
                    array_push($cost,0);
                }
            }else{
                array_push($cost,0);
            }
        }

        return array_sum($cost);
    }
}


// validate fees counter without accomndation
function check_coast_without($pack,$ex_del,$p_pack_one,$p_ex_del_one,$num_del,$p_pack_two,$p_ex_del_two){
    $cost = array();
    if ($pack === "0"){
        array_push($cost, $p_pack_one);
        if ($ex_del ==="1"){
            array_push($cost,($num_del * $p_ex_del_one));
        }
        else
        {
            array_push($cost,0);
        }

        return array_sum($cost);
    }
    elseif ($pack === "1"){
        array_push($cost, $p_pack_two);
        if ($ex_del ==="1"){
            array_push($cost,($num_del * $p_ex_del_two));
        }else
        {
            array_push($cost,0);
        }

        return array_sum($cost);
    }
}

// validate fees counter without accomndation



///////////////////////////////////////////////////////////////////////////////////  FEES FOR ALL CATGS //////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////    MEMBER FEES  /////////////////////////////////
//   3days - 2 nights
$withaccoMEM_twoNights = 700;
$withaccoMEM_twoNights_extraDel = 500;
$withaccoMEM_twoNights_spouse = 300;
$withaccoMEM_twoNights_kid = 150;
//   4days - 3 nights
$withaccoMEM_threeNights = 1050;
$withaccoMEM_threeNights_extraDel = 750;
$withaccoMEM_threeNights_spouse = 450;
$withaccoMEM_threeNights_kid = 300;

//  COUNT THE FEES Without Acc

//   3days - 2 nights
$withoutaccoMEM__twoNights = 500;
$withoutaccoMEM__twoNights_extraDel = 350;
// /////////////////////////////////////
//   4days - 3 nights
$withoutaccoMEM__threeNights = 650;
$withoutaccoMEM__twoNights_extraDel = 500;



//////////////////////////    Not MEMBER FEES  /////////////////////////////////

//    3days - 2 nights
$withaccoNOTMEM_twoNights = 800;
$withaccoNOTMEM_twoNights_extraDel = 600;
$withaccoNOTMEM_twoNights_spouse = 400;
$withaccoNOTMEM_twoNights_kid = 200;
///////////////////////////////////////
//     4days - 3 nights
$withaccoNOTMEM_threeNights = 1150;
$withaccoNOTMEM_threeNights_extraDel = 850;
$withaccoNOTMEM_threeNights_spouse = 500;
$withaccoNOTMEM_threeNights_kid = 325;
// /////////////////////////////////////
//   3days - 2 nights Without Acc
$withoutaccoNOTMEM__twoNights = 550;
$withoutaccoNOTMEM__twoNights_extraDel = 450;
///////////////////////////////////////
//   4days - 3 nights Without Acc
$withoutaccoNOTMEM__threeNights = 750;
$withoutaccoNOTMEM__twoNights_extraDel = 600;