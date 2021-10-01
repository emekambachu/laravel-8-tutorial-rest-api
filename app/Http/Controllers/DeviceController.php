<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function lists(){
        return Device::all();
    }

    public function listId($id = null){
        return $id ? Device::findOrFail($id) : Device::all();
    }

    public function add(Request $request){

        $device = new Device;
        $device->name = $request->name;
        $device->member_id = $request->member_id;
        $saved = $device->save();

        if($saved){
            return ['result' => 'Data has been saved'];
        }
        return ['result' => 'Unable to save'];
    }

    public function update(Request $request, $id){
        $device = Device::find($request->id);
        $device->name = $request->name;
        $device->member_id = $request->member_id;
        $saved = $device->save();

        if($saved){
            return ['result' => 'Data has been updated'];
        }
        return ['result' => 'Unable to updated'];
    }

    public function delete($id){
        $device = Device::find($id);
        $deleted = $device->delete();

        if($deleted){
            return ['result' => 'Data has been deleted'];
        }
        return ['result' => 'Unable to delete'];
    }

    public function search($name){
        return Device::where("name", $name)->get();
    }
}
