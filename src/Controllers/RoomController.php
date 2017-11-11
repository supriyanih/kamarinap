<?php


namespace Supriyanih\Kamarinap\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Supriyanih\Kamarinap\Models\Room;
use Supriyanih\Kamarinap\Requests\StoreRoom;
use Supriyanih\Kamarinap\Requests\UpdateRoom;


class RoomController extends Controller
{
	  public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }


   public function index()
   {
   		$Rooms = Room::all();

   		return view('rawat::room.index', compact('Rooms'));
   }

   public function show(Room $room)
    {
        $ruang = $room; //Post::findOrFail($id);
        return view('rawat::room.show', compact('ruang'));
    }

   public function create()
   {

   	return view('rawat::room.create');
   }

   public function store(StoreRoom $request)
   {

   	 // dd($request->all());
   	$this->validate($request,[
   		'kode_room' => 'required',
   		'nama_room' => 'required',
   	]);

    
   	 $room = new Room;
   	 $room->kode_room = $request->kode_room;
   	 $room->nama_room = $request->nama_room;
   	 $room->save();

   	  \Session::flash('flash_message', 'Your room has been created');
        return redirect()->route('rooms.index');

   }

   public function edit($id)
   {
   	$Rooms = Room::findOrFail($id);

   		return view('rawat::room.edit', compact('Rooms'));
   }

   public function update(UpdateRoom $request, $id)
   {
   		$this->validate($request,[
   		'kode_room' => 'required',
   		'nama_room' => 'required',
   	]);
   		$room = Room::findOrFail($id);
   		$room->kode_room = $request->kode_room;
	   	 $room->nama_room = $request->nama_room;
	   	 $room->save();
   		\Session::flash('flash_message', 'Your rooms has been updated');
        return redirect()->route('rooms.index');
   }

   public function destroy($id)
    {
     
        Room::find($id)->delete();
        return redirect()->route('rooms.index');
    }
}
