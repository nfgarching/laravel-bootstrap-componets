<?php

namespace Nfgarching\Componets\Controllers;

use Illuminate\Http\Request;

class TestformController
{
    //
    public function __invoke( Request $request )
    {
        // dd('Testform');
        if( $request->isMethod('post') ) {

            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
            dd($request->all());
            // return redirect()->route('testform');
        }
        return view('bootstrap::testform');

    }
}
