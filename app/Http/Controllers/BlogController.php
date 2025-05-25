<?php

namespace App\Http\Controllers;

use App\Models\BlogComment;
use App\Models\BlogPost;
use App\Models\Photo;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    
    public function index()
    {
        $data = [
            "posts" => BlogPost::all(),
            'name' => 'Blog'
        ];
        // Logic to retrieve and display blog posts
        return view('blog', $data);
    }

    public function save(Request $request){
        $request->validate([
            "title_en" => 'required|string|max:255',
            "title_fr" => 'required|string|max:255',
            "title_ar" => 'required|string|max:255',
            "content_en" => 'required|string',
            "content_fr" => 'required|string',
            "content_ar" => 'required|string'
        ]);

        try {
            DB::beginTransaction();

            $post = new BlogPost();

            $post->title_en = $request->input('title_en');
            $post->title_fr = $request->input('title_fr');
            $post->title_ar = $request->input('title_ar');

            $post->slug_en =  Str::slug($request->input('title_en'));
            $post->slug_fr =  Str::slug($request->input('title_fr'));
            $post->slug_ar =  Str::slug($request->input('title_ar'));

            $post->content_en = $request->input('content_en');
            $post->content_fr = $request->input('content_fr');
            $post->content_ar = $request->input('content_ar');

            $post->excerpt_en = getExcerptFromContent($request->input('content_en'));
            $post->excerpt_fr = getExcerptFromContent($request->input('content_fr'));
            $post->excerpt_ar = getExcerptFromContent($request->input('content_ar'));
            
            $post->user_id = auth()->id();
            $post->save();

            if($request->hasFile('image')) {
                $photo = $request->file('image')->store('blog-post', ["disk" => "public"]);
                Photo::create([
                    "url" => $photo,
                    "type" => 'blog_post',
                    "post_id" => $post->id,
                    "is_main" => true
                ]);
            }
            
            DB::commit();
            return redirect()->route('admin.blog')->with('success', 'Post saved successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
    public function edit($id){
        $data = [
            "posts" => BlogPost::all(),
            'post' => BlogPost::find($id),
            'name' => 'Blog',
            'edit' => true
        ];
        $data['photoUrl'] = $data['post']->photo->url ?? '';
        // Logic to retrieve and display blog posts
        return view('blog', $data);
    }
    public function update($id,Request $request){
        $request->validate([
            "title_en" => 'required|string|max:255',
            "title_fr" => 'required|string|max:255',
            "title_ar" => 'required|string|max:255',
            "content_en" => 'required|string',
            "content_fr" => 'required|string',
            "content_ar" => 'required|string'
        ]);

        try {
            DB::beginTransaction();

            $post = BlogPost::find($id);
            if (!$post) {
                return redirect()->back()->withErrors(['Post not found']);
            }

            $post->title_en = $request->input('title_en');
            $post->title_fr = $request->input('title_fr');
            $post->title_ar = $request->input('title_ar');

            $post->slug_en =  Str::slug($request->input('title_en'));
            $post->slug_fr =  STR::slug($request->input('title_fr'));
            $post->slug_ar =  STR::slug($request->input('title_ar'));

            $post->content_en = $request->input('content_en');
            $post->content_fr = $request->input('content_fr');
            $post->content_ar = $request->input('content_ar');

            $post->excerpt_en = getExcerptFromContent($request->input('content_en'));
            $post->excerpt_fr = getExcerptFromContent($request->input('content_fr'));
            $post->excerpt_ar = getExcerptFromContent($request->input('content_ar'));
            
            if($request->hasFile('image')) {
                $post->photo()->delete();
                $_photo = $request->file('image')->store('blog-post', ["disk" => "public"]);

                Photo::create([
                    "url" => $_photo,
                    "type" => 'blog_post',
                    "post_id" => $post->id,
                    "is_main" => true
                ]);
            }
            
            $post->save();
            DB::commit();
            return redirect()->route('admin.blog.edit', $post->id)->with('success', 'Post updated successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
    public function delete($id){
        $post = BlogPost::find($id);
        if (!$post) {
            return redirect()->back()->withErrors(['Post not found']);
        }
        try {
            DB::beginTransaction();
            $post->photo()->delete();
            $post->delete();
            DB::commit();
            return redirect()->route('admin.blog')->with('success', 'Post deleted successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function publish($id) {
        $post = BlogPost::find($id);
        if (!$post) {
            return redirect()->back()->withErrors(['Post not found']);
        }
        $post->is_published = true;
        $post->published_at = now();
        $post->save();
        return redirect()->route('admin.blog')->with('success', 'Post published successfully');
    }

    public function comments(){
        $data = [
            "comments" => BlogComment::orderByDesc('created_at')->get(),
            "name" => "Comments"
        ];
        return view('comments', $data);
    }

    public function approveComment($id){
        $comment = BlogComment::find($id);
        if (!$comment) {
            return redirect()->back()->withErrors(['Comment not found']);
        }
        $comment->is_approved = true;
        $comment->save();
        return redirect()->route('admin.comments')->with('success', 'Comment approved successfully');
    }
    public function deleteComment($id){
        $comment = BlogComment::find($id);
        if (!$comment) {
            return redirect()->back()->withErrors(['Comment not found']);
        }
        $comment->delete();
        return redirect()->route('admin.comments')->with('success', 'Comment deleted successfully');
    }
}
