<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberReservationController extends Controller
{
    //
    public function index() {

        echo "this is a test reseration system";

    }


    public function edit(Request $request, int $id) {


        echo $id;
        
    }
}
