<?php
namespace App\Http\Traits;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Settings;
use Illuminate\Http\Request;

trait Apitrait{

    public function get_rate($coin,$currency,$option){

        $url = "https://www.bitstamp.net/api/v2/ticker/$coin$currency/";
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);
        $query = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($query, TRUE);

        $price = $data["last"];
       
       if($option=="price"){
           return $price;
       }else{
           //
        return $data;
       }
    }

};