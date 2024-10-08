<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Currency;
use Illuminate\Support\Facades\Auth;
use Hash;

class AdminController extends Controller
{


    public function AdminProfile()
    {

        $id = Auth::user()->id;//fetch which user using Auth midddleware
        $profileData = User::with('currency')->findOrFail($id);
        $currencies = Currency::all(); // Fetch all currencies
        return view('admin.admin_profile_view', compact('profileData', 'currencies'));

    }//
    public function AdminProfileStore(Request $request)
    {


        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $currency_id = $request->currency_id;
        $currency = Currency::find($currency_id);
        $user = Auth::user();

        // Check if a file has been uploaded
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $data->photo));//used for when replacing the image
            // Generate a unique filename for the image
            $filename = time() . '_' . $file->getClientOriginalName();

            // Move the file to the 'upload/admin_images/' folder
            $file->move(public_path('upload/admin_images/'), $filename);

            // Save the filename in the database (assuming the column is 'photo')
            $user->photo = $filename;
        }

        // Save other user data (if any)
        $user->save();

        // Redirect or respond with success message
        // if ($request->file('photo')) {
        //     $file = $request->file('photo');

        //     $filename = date('YmdHi') . $file->getClientOriginalName();
        //     $file->move(public_path('upload/admin_images'), $filename);
        //     $data['photo'] = $filename;
        // }

        $data->save();
        // Check if the currency exists
        if (!$currency) {
            return redirect()->back()->withErrors(['message' => 'Currency not found.']);
        }

        // Update the currency name
        $currency->title = $request->currency_name;

        // Save the updated currency
        $currency->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        // return redirect()->back()->with($notification);
        return redirect()->back()->with('success', 'Profile updated successfully.');


    }// End Method 
    public function AdminChangePassword(Request $request)
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password', compact('profileData'));
    }
    public function AdminUpdatePassword(Request $request)
    {

        // Validation 
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'

        ]);

        /// Match The Old Password

        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
            );

            return back()->with($notification);
        }

        /// Update The New Password 

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);

        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );

        return redirect('admin/profile')->with($notification);

    }// End Method 
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Admin Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('/admin/login')->with($notification);
    }
    public function changeStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
        return response()->json(['success' => 'Status Change Successfully']);
    }// End Method 

}

// public function index()
// {
//     //
// }

// /**
//  * Show the form for creating a new resource.
//  *
//  * @return \Illuminate\Http\Response
//  */
// public function create()
// {
//     //
// }

// /**
//  * Store a newly created resource in storage.
//  *
//  * @param  \Illuminate\Http\Request  $request
//  * @return \Illuminate\Http\Response
//  */
// public function store(Request $request)
// {
//     //
// }

// /**
//  * Display the specified resource.
//  *
//  * @param  int  $id
//  * @return \Illuminate\Http\Response
//  */
// public function show($id)
// {
//     //
// }

// /**
//  * Show the form for editing the specified resource.
//  *
//  * @param  int  $id
//  * @return \Illuminate\Http\Response
//  */
// public function edit($id)
// {
//     //
// }

// /**
//  * Update the specified resource in storage.
//  *
//  * @param  \Illuminate\Http\Request  $request
//  * @param  int  $id
//  * @return \Illuminate\Http\Response
//  */
// public function update(Request $request, $id)
// {
//     //
// }

// /**
//  * Remove the specified resource from storage.
//  *
//  * @param  int  $id
//  * @return \Illuminate\Http\Response
//  */
// public function destroy($id)
// {
//     //
// }