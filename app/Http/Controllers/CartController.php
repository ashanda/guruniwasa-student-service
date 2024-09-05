<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $item = $request->item;

    // Get the existing cart from session or initialize a new one
    $cart = session()->get('cart', []);

    // Check if item is already in the cart
    foreach ($cart as $cartItem) {
        if ($cartItem['data']['student_subjects']['id'] === $item['data']['student_subjects']['id']) {
            return response()->json(['cartCount' => count($cart), 'message' => 'Item already in cart']);
        }
    }

    // Add the new item to the cart
    $cart[] = $item;

    // Update the cart in the session
    session()->put('cart', $cart);

    // Optionally, return the updated cart count or any other response
    return response()->json(['cartCount' => count($cart)]);
    }

public function removeFromCart(Request $request)
{
    $itemId = (int) $request->input('item_id'); // Cast to integer
    $cart = session()->get('cart', []);

    // Debugging: Log item to be removed
    

    // Remove item from cart
    $cart = array_filter($cart, function ($cartItem) use ($itemId) {
        // Ensure the ID is compared as integer
        return (int) $cartItem['data']['student_subjects']['id'] !== $itemId;
    });

    // Reindex the array to maintain a consistent index structure
    $cart = array_values($cart);

    // Debugging: Log cart after removal
    

    // Update the cart in the session
    session()->put('cart', $cart);

    // Save the session to persist changes
    session()->save();

    return response()->json([
        'cartCount' => count($cart),
        'message' => 'Item removed successfully'
    ]);
}



    // Method to display the cart content
    public function viewCart(Request $request)
        {   

            try {
                // Retrieve cart data from the session
                $month = $request->month;
                $cart = session()->get('cart', []);

                // Initialize total variables
                $totalFeeWithoutDiscount = 0;
                $totalDiscountAmount = 0;
                $totalFeeWithDiscount = 0;

                // Check if the cart has 6 or more items to apply a discount
                if (count($cart) >= 6) {
                    foreach ($cart as $item) {
                        // Original fee
                        $originalFee = (float) $item['data']['student_subjects']['fee'];
                        $totalFeeWithoutDiscount += $originalFee;

                        // Calculate the discount
                        $discount = $originalFee * 0.25;
                        $totalDiscountAmount += $discount;

                        // Calculate the fee after discount
                        $discountedFee = $originalFee - $discount;
                        $totalFeeWithDiscount += $discountedFee;
                    }
                } else {
                    // No discount applied, sum the original fees
                    foreach ($cart as $item) {
                        $originalFee = (float) $item['data']['student_subjects']['fee'];
                        $totalFeeWithoutDiscount += $originalFee;
                    }

                    // If there is no discount, the total fee with discount is the same as without discount
                    $totalFeeWithDiscount = $totalFeeWithoutDiscount;
                }

                // Pass data to the view
                return view('web.fees.subject_cart', compact('cart', 'totalFeeWithoutDiscount', 'totalDiscountAmount', 'totalFeeWithDiscount', 'month'));

            } catch(Exception $e) {
                Alert::toast($e->getMessage(), 'error');
                return redirect()->back();
            }
        }
}
