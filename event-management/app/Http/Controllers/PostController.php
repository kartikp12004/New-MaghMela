<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show list of all posts
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    // Show "create" form
    public function create()
    {
        return view('posts.create');
    }

    // Handle form submission
    public function store(Request $req)
    {
        $data = $req->validate([
            'title'   => 'required|string',
            'content' => 'required|string',
            'image'   => 'nullable|image|max:2048',
        ]);

        if ($req->hasFile('image')) {
            $data['image'] = $req->file('image')->store('posts','public');
        }

        Post::create($data);

        return redirect('/posts')->with('success','Post published!');
    }

    // Display a single post
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }


    public function destroy($id)
    {
        // पोस्ट मिलाओ, फेल होने पर 404 देगा
        $post = Post::findOrFail($id);

        // पोस्ट डिलीट करो
        $post->delete();

        // वापस पोस्ट लिस्ट पर भेज दो, एक success मैसेज के साथ
        return redirect()->route('posts.index')
                         ->with('success', 'Post deleted successfully.');
    }
}
