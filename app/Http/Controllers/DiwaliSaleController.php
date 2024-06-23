<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DiwaliSaleController extends Controller
{
    public function processSale(Request $request) {
        $rule = $request->input('rule');
        $prices = $request->input('prices', []);

        rsort($prices);

        $discountedItems = [];
        $payableItems = [];

        while (!empty($prices)) {
            $paidItem = array_shift($prices);
            $payableItems[] = $paidItem;

            foreach ($prices as $index => $price) {
                if ($price < $paidItem) {
                    $discountedItems[] = $price;
                    unset($prices[$index]);
                    $prices = array_values($prices); // Reindex array
                    break;
                }
            }
        }

        return response()->json([
            'discounted_items' => $discountedItems,
            'payable_items' => $payableItems,
        ]);
    }
}
