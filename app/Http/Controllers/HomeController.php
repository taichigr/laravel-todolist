<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Listitem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $user = new User();
        $incompletelistitems = $user->hasIncompleteListItems();
        $completelistitems = $user->hasCompleteListItems();
        $horyulistitems = $user->hasHoryuListItems();



        return view('home.index', ['user' => $user,
                                        'incompletelistitems' => $incompletelistitems,
                                        'completelistitems' => $completelistitems,
                                        'horyulistitems' => $horyulistitems,
            ]);
    }

    public function create()
    {
        //
    }

   public function store(Request $request, Listitem $listitem)
   {
       //
       $listitem->text = $request->input;
       $listitem->user_id = Auth::id();
       $listitem->category_id = 1;
       $listitem->save();

       return redirect('home');
   }

    public function show(string $name, Request $request)
    {
        //

    }

    public function edit()
    {
        //
    }
    public function destroy($id,  Listitem $listitem) {
    $listitem->where('id', $id)->delete();
        return redirect()->route('home.index');
    }

    public function update($id, Listitem $listitem)
    {
        $category_id = $listitem->where('id', $id)->value('category_id');
        if($category_id === 1){
            $listitem->where('id', $id)->update(['category_id' => 2]);
        }elseif ($category_id === 2){
            $listitem->where('id', $id)->update(['category_id' => 1]);
        }

        return redirect()->route('home.index');
    }


}
