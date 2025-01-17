<?php


namespace App\Helpers\Envato;

use Illuminate\Support\Facades\DB;


class User
{
    /**
     * @param int $user_id User-id
     *
     * @return string
     */
    public static function get_username($user_id) {
        $user = DB::table('users')->where('id', $user_id)->first();
        return (isset($user->name) ? $user->name : '');
    }
}