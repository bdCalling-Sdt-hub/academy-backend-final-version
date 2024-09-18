<?php

namespace App\Http\Controllers\Api\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoryRequest;
use App\Models\Student;
use App\Models\SuccessStory;
use Illuminate\Http\Request;

class SuccessStoryController extends Controller
{

    public function index(Request $request)
    {
        $query = SuccessStory::query();
        if (filled($request->type)){
            $query->where('type',$request->type);
        }
         $successStories = $query->paginate(8);

         return response()->json($successStories);
    }

    public function create()
    {

    }

    public function store(StoryRequest $request)
    {
        $type = $request->type;
        $story = new SuccessStory();
        $story->file = $request->file;
        $story->save();
        return response()->json($story);
    }


    public function show(string $id)
    {
        //
    }
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $successStory = SuccessStory::find($id);

        if (!$successStory) {
            return response()->json([
                'status' => 'error',
                'message' => 'Video not found'
            ]);
        }

        $delete_video = $successStory->delete();

        if ($delete_video) {
            return response()->json([
                'status' => 'success',
                'message' => 'Video deleted successfully'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Video delete failed'
            ]);
        }
    }
}
