<?php

namespace App\Http\Controllers;
use App\Models\Game;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::orderByRaw('creator_id = ? DESC', [Auth::user()->id])
            ->orderBy('name')
            ->get();

        if (Auth::user()->is_admin) {
            
            return view('admin.teams.index')->with('teams', $teams);
        } else {
            
            return view('teams.index')->with('teams', $teams);
        }

        return view('teams.index')->with('teams', $teams);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'teamName' => ['required', 'string', 'max:255'],
        ]);

        $team = new Team();
        $team->name = $request->input('teamName');

        $team->points = 0;

        $team->creator_id = auth()->user()->id;

        $team->save();
        return redirect()->route('teams.index')->with('succes', 'Team created succesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $team = Team::findOrFail($id);

        $users = User::where('team_id', $team->id)->get();

        {
            return view('teams.detail',compact('team', 'users'));
        }


        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team::findOrFail($id);

        return view('teams.edit')
            ->with('team', $team)
            ->with('updateRoute', route('teams.update', $team->id));
    }


    public function update(Request $request, string $id)
    {
        $team = Team::findOrFail($id);

        $request->validate([
            'teamName' => ['required', 'string', 'max:255'],
        ]);


        $team->name = $request->input('teamName');
        $team->save();
        return redirect()->route('teams.index')->with('succes', 'Team updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::findOrFail($id);

        $competitions = Game::where('team1_id', $id)
            ->orWhere('team2_id', $id)
            ->get();

        if ($competitions->count() > 0) {
            return redirect()->back()->with('err', 'Cannot delete team. It is participating in one or more competitions.');
        }

        $team->delete();
        
        $teams = Team::all();
        if(Auth::user()->is_admin) {
            return view('admin.teams.index')
                ->with('teams', $teams);
        }
        else {
            return view('teams.index')
                ->with('teams', $teams);
        }
    }

    public function destroyall()
    {
        Team::truncate();
        Team::where('id', '>', 0)->delete();

        $teams = Team::all();
        return view('../teams.index')->with('teams', $teams);
    }

    public function Join()
    {
        $teams = Team::all();
        return view('teams.join')->with('teams', $teams);
    }

    public function storeJoin(Request $request)
    {
        $request->validate([
            'team' => 'required|exists:teams,id',
        ]);

        $selectedTeamId = $request->input('team');

        if (Auth::check()) {
            $user = User::find(Auth::id());

            $user->team_id = $selectedTeamId;
            $user->save();
        }

        return redirect()->route('dashboard');
    }
}
