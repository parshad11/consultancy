<?php
use App\Http\Middleware\VerifyCsrfToken;
namespace App\Http\Controllers;
use App\Models\userMessage;
use App\Models\adminMessage;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    public function insert_data(Request $req){
        $message=new userMessage;
        $message->usermessage=$req->input('usermessage');
        $message->save();
    }
    //
    public function insert_admin_data(Request $req){
        $admin_message=new adminMessage;
        $admin_message->adminmessage=$req->input('adminmessage');
        $admin_message->save();
    }
}
