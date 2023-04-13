<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class LmsApiController extends Controller
{
    function listUsers(){
         return User::all();
    }
    public function listUsersId($identifier){
        $user = User::where('name', $identifier)
            ->orWhere('id', $identifier)
            ->first();

        if (!$user) {
            return response()->json(['error' => 'Student not found.'], 404);
        }

        return response()->json([
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }
    public function listUsersIdAuth(Request $request){
        $identifiers = $request->input('identifiers');
        if (!$identifiers) {
            return response()->json(['error' => 'No identifiers provided.'], 400);
        }

        $students = User::whereIn('id', $identifiers)
            ->where(function ($query) use ($identifiers) {
                $query->whereIn('name', $identifiers);
            })
            ->get();

        if ($students->isEmpty()) {
            return response()->json(['error' => 'No students found.'], 404);
        }
         $results = [];

        foreach ($students as $student) {
            $results[] = [
                'name' => $student->name,
                'id' => $student->id,
            ];
        }

        return response()->json($results);

    }
}
