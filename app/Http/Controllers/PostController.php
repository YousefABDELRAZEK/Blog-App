<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class PostController extends Controller
{
    
    public function index()
    {
       $posts =Post::all();
       return view('posts.index',compact('posts'));
    }

   
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required|string|max:2555',
        'content' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:80048',
    ]);

    $post = new Post();
    $post->title = $validatedData['title'];
    $post->content = $validatedData['content'];

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');
        $post->image = $imagePath;
    }

    $post->save();
    return redirect()->route('posts.index');
}






    public function edit(Post $post)
    {
        return view('posts.edit',compact('post'));
    }
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image',
        ]);
    
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
    
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($post->image && Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
            }
    
            // Store the new image
            $data['image'] = $request->file('image')->store('images', 'public');
        }
    
        // Update the post with new data
        $post->update($data);
    
        return redirect()->route('posts.index')
                         ->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success','Post deleted successfully');

    }
   
    

}
