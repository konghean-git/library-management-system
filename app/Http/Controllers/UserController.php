<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDepartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use tidy;

class UserController extends Controller
{
    public function index()
    {
        $users = User::select('users.khmer_name', 'users.latin_name', 'users.gender', 'user_departments.name as department_name', 'users.code', 'users.phone', 'users.email')
            ->join('user_departments', 'users.department_id', 'user_departments.id')
            ->orderBy('users.id', 'desc')
            ->paginate(3);

        return view('users.user', ['users' => $users]);
    }

    public function filter_users(Request $request)
    {
        if ($request->ajax()) {
            $user_code = $request->get('user_code');
            $user_name = $request->get('user_name');
            $user_department = $request->get('user_department');

            $users = User::select('users.khmer_name', 'users.latin_name', 'users.gender', 'user_departments.name as department_name', 'users.code', 'users.phone', 'users.email')
                ->join('user_departments', 'users.department_id', 'user_departments.id')
                ->where('users.code', 'like', '%' . $user_code . '%')
                ->where(function ($query) use ($user_name) {
                    $query->where('users.khmer_name', 'like', '%' . $user_name . '%')
                        ->orWhere('users.latin_name', 'like', '%' . $user_name . '%');
                })->where('user_departments.name', 'like', '%' . $user_department . '%')
                ->orderBy('users.id', 'desc')
                ->get();
            return json_encode($users);
        }
    }


    public function create()
    {
        $departments = UserDepartment::get();
        return view('users.create', ['departments' => $departments]);
    }

    public function create_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:users',
            'khmer_name' => 'required',
            'latin_name' => 'required|max:35',
            'latin_name' => 'required|max:35',
            'date_of_birth' => ['required', 'before:' . now()->toDateString(), 'after:1/1/1900'],
            'address' => 'required|max:255',
            'gender' => 'required',
            'department_id' => 'required',
            'contact' => 'required',
            'photo' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extensionn = $file->getClientOriginalExtension();
            $file_name = time() . '.' . $extensionn;
            $file->storeAs('public/images/', $file_name);
        } else {
            $file_name = 'user_none.jpg';
        }

        User::create([
            'code' => $request->input('code'),
            'khmer_name' => $request->input('khmer_name'),
            'latin_name' => $request->input('latin_name'),
            'gender' => $request->input('gender'),
            'date_of_birth' => $request->input('date_of_birth'),
            'department_id' => $request->input('department_id'),
            'address' => $request->input('address'),
            'phone' => $request->input('contact'),
            'email' => $request->input('email'),
            'password' => bcrypt('123456'),
            'profile_image' => $file_name
        ]);

        return redirect(route('user.index', app()->getLocale()))->with('success', 'Member created successfully.');
    }



    public function add_users()
    {

        // UserDepartment::create([
        //     'id' => 1,
        //     'name' => 'សិស្ស',
        //     'description' => 'សិស្សទាំងឡាយណាដែលកំពុងសិក្សានៅក្នុងសាលារៀននេះផ្ទាល់ ។'
        // ]);

        // UserDepartment::create([
        //     'id' => 2,
        //     'name' => 'សិស្សកៅ',
        //     'description' => 'សិស្សទាំងឡាយណាដែលមកពីសាលាផ្សេងៗ ។'
        // ]);

        // UserDepartment::create([
        //     'id' => 3,
        //     'name' => 'បុគ្កលិក',
        //     'description' => 'សំដៅដល់អ្នកធ្វើការងារតាមស្ថាប័ននានា ទាំងរដ្ឋ និងឯកជន ។'
        // ]);


        // UserDepartment::create([
        //     'id' => 4,
        //     'name' => 'គ្រូបង្រៀន',
        //     'description' => 'សំដៅដល់លោកគ្រូ អ្នកគ្រូដែលកំពុងតែបង្រៀននៅក្នុងសាលានេះ ។'
        // ]);

        // User::create([
        //     'code' => 'RRLM00001',
        //     'khmer_name' => "ម៉ុក គង់",
        //     'latin_name' => "Mok Kong",
        //     'gender' => "ប្រុស",
        //     'date_of_birth' => "1995-12-06",
        //     'department_id' => 4,
        //     'address' => 'កំពង់ធំ',
        //     'phone' => '078883914',
        //     'email' => 'konghean@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
        // User::create([
        //     'code' => 'RRLM00002',
        //     'khmer_name' => "ហេង ឆេងគាង",
        //     'latin_name' => "Heng Chengkeang",
        //     'gender' => "ស្រី",
        //     'date_of_birth' => "1997-12-06",
        //     'department_id' => 4,
        //     'address' => 'ត្បូងឃ្មុំ',
        //     'phone' => '078883914',
        //     'email' => 'chengkeang@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
        // User::create([
        //     'code' => 'RRLM00003',
        //     'khmer_name' => "សិស្ស ក",
        //     'latin_name' => "Student 01",
        //     'gender' => "ប្រុស",
        //     'date_of_birth' => "2001-12-06",
        //     'department_id' => 1,
        //     'address' => 'ត្បូងឃ្មុំ',
        //     'phone' => '078883914',
        //     'email' => 'student01@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
        // User::create([
        //     'code' => 'RRLM00004',
        //     'khmer_name' => "សិស្ស ខ",
        //     'latin_name' => "Student 02",
        //     'gender' => "ប្រុស",
        //     'date_of_birth' => "2001-12-06",
        //     'department_id' => 2,
        //     'address' => 'ត្បូងឃ្មុំ',
        //     'phone' => '078883914',
        //     'email' => 'student01@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);
        return 'User Added';
    }
}
