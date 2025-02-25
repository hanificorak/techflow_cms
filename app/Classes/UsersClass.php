<?php

namespace App\Classes;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UsersClass
{

    public function getData()
    {

        try {
            $data = User::all();
            return DataTables::of($data)
                ->addColumn('status_name', function ($user) {
                    if ($user->status == 1) {
                        return "Aktif";
                    } else {
                        return "Pasif";
                    }
                })
                ->addColumn('action', function ($user) {
                    return '<a href="#" class="btn btn-primary btn-sm me-2 min-btn-table">Düzenle</a>'. '<a href="#" class="btn btn-danger btn-sm min-btn-table">Sil</a>';
                })
                ->make(true);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => $th->getMessage()
            ]);
        }
    }
}
