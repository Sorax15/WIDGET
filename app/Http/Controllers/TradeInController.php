<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TradeInController extends Controller
{
    public function index()
    {
        return view('pages.trade-in');
    }

    public function checkByVinCode(Request $request)
    {
        $request->validate([
            'vin' => 'required|numeric'
        ]);

        $vin = $request->get('vin');

        // for test
        if ($vin === '123123') {

            $response = [
                "id" => "152260",
                "distinct_key" => "e0aa4b72a2c8609575b35ff86d0e12a2",
                "year"=> 2015,
                "make"=> "Ford",
                "model"=> "F-150",
                "trim"=> "XL",
                "drivetrain"=> "4X4",
                "engine"=> "V6 3.5L",
                "fuel_type"=> "Flex Fuel",
                "body"=> "SuperCrew",
                "doors"=> "4"
            ];

            return Response::json($response);
        }

        $error = [
            'errors' => ['vin' => ['Vin not found']]
        ];

        return new JsonResponse($error, 422);
    }

    public function getAvailableYearMakeModel(Request $request)
    {
        $array = ['2018 Ford Focus', '2017 Ford Fiesta', '2016 Toyota Yaris'];
        $data = $request->get('data');

        $response = array_filter($array, fn($v) => str_contains($v, $data));

        return Response::json($response);
    }

    public function getEngine(Request $request)
    {
        return Response::json(['engine' => ['2018 Ford Focus', '2017 Ford Fiesta', '2016 Toyota Yaris']]);
    }

    public function onSellMyCar(Request $request) {
        return Response::json(['isCustomer' => false]);
    }

    public function onGetTradeInValue(Request $request) {
        $isSuccess = $request->miles !== '1';
        $seePayments = $request->miles === '2';

        $html = view('templates.test', ['isSuccess' => $isSuccess, 'seePayments' => $seePayments])->render();

        return Response::json(['isCustomer' => true, "html" => $html]);
    }

    public function onCustomerInformation(Request $request)
    {
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required',
            'email' => 'required|email'
        ]);
    }
}
