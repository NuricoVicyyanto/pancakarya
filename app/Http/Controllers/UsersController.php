<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::orderBy('time','DESC')->get();
        $response = [
        'massage'=>'List created ordered by time',
        'data'=> $users
        ];
        return response()->json($response, Response::HTTP_OK);

        // $users=[
        //     'title' => "Halaman Menajemen User",
        //     'subtitle' => 'Halaman Crud User',
        //     'user' => Users::orderBy('id', 'desc')->get(),
        // ];
        // return view('backend.user', compact('data'));
    }

    public function datauser()
    {
        $dtUser = Users::latest()->get();
        return view('backend.user',compact('dtUser'));
    }

    public function forgetpassword()
    {
        // $dtUser = Users::latest()->get();
        return view('backend.auth.forgetpassword');
        // return view('backend.auth.forgetpassword',compact('dtUser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>['required'],
            'username'=>['required'],
            'no_hp'=>['required'],
            'email'=>['required'],
            'level'=>['required', 'in:admin,user'],
            'password'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);

        }

        try {
            $users = Users::create($request->all());
            $response = [
                'message'=> 'account created',
                'data' => $users
            ];

            return response()->json($response, Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'massage'=>"Failed " . $e->errorInfo
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = Users::findOrFail($id);
        $response = [
            'message'=> 'Detail of users resource',
            'data' => $users
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = Users::findOrFail($id);
        $validator = Validator::make($request->all(),[
            'name'=>['required'],
            'username'=>['required'],
            'no_hp'=>['required'],
            'email'=>['required'],
            'level'=>['required', 'in:admin,user'],
            'password'=>['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),
            Response::HTTP_UNPROCESSABLE_ENTITY);

        }

        try {
            $users->update($request->all());
            $response = [
                'message'=> 'account updated',
                'data' => $users
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'massage'=>"Failed " . $e->errorInfo
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Users::findOrFail($id);

        try {
            $users->delete();
            $response = [
                'message'=> 'account deleted',
                'data' => $users
            ];

            return response()->json($response, Response::HTTP_OK);
        } catch (QueryException $e) {
            return response()->json([
                'massage'=>"Failed " . $e->errorInfo
            ]);
        }
    }

    public function hapus($id)
    {
        $peng = Users::findorfail($id);
        $peng->delete();
        return redirect('user');
    }
}
