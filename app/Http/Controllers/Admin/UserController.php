<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderByDesc('created_at')->get();
        return view('admin.users.index')
            ->with([
                'users' => $users
            ]);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        toast('User Created Successfully!','success');
        return redirect()->route('admin.user.index');
    }

    public function edit($id)
    {
        $exist = User::where('id',$id)->first();
        if (empty($exist)){
            toast('User Not Found!','error');
            return redirect()->route('admin.user.index');
        }
        return view('admin.users.edit')
            ->with([
                'user' => $exist
            ]);
    }

    public function update($id,Request $request)
    {
        $this->validate($request,[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,id,'.$id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
        ]);
        $exist = User::where('id',$id)->first();
        if (empty($exist)){
            toast('User Not Found!','error');
            return redirect()->route('admin.user.index');
        }
        $exist->name = $request->name;
        $exist->email = $request->email;
        if (!empty($request->password)){
            $exist->password = Hash::make($request->password);
        }
        $exist->save();
        toast('User Updated Successfully!','success');
        return redirect()->route('admin.user.index');
    }

    public function destroy(Request $request)
    {
        $exist = User::where('id',$request->id)->first();
        if (empty($exist)){
            toast('User Not Found!','error');
            return redirect()->route('admin.user.index');
        }
        $exist->delete();
        toast('User Deleted Successfully!','success');
        return redirect()->route('admin.user.index');
    }
}
