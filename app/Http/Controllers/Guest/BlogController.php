<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use App\Models\BlogPost;
class BlogController extends Controller
{
    public function index()
    {
        // Display list of all blog posts
        $posts = BlogPost::orderBy('created_at', 'desc')->paginate(12);
        return view('guest.blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = BlogPost::with('blogCategories','blogTags','author', 'comments')->where('slug_'.app()->getLocale(), $slug)->firstOrFail();
        $categoryIds = $post->blogCategories->pluck('id');
        $relatedPosts = BlogPost::whereHas('blogCategories', function($query) use ($categoryIds) {$query->whereIn('blog_categories.id', $categoryIds);})->where('id', '!=', $post->id)->orderBy('created_at', 'desc')->limit(3)->get();

        $post->increment('view_count');
        $post->save();
        return view('guest.blog.show', compact('post', 'relatedPosts'));
    }

    public function share($slug,$platform){
        $post = BlogPost::where('slug_'.app()->getLocale(), $slug)->firstOrFail();
        $postUrl = urlencode(config('app.url').'/blog/'.$post['slug_'.app()->getLocale()]);
        switch ($platform) {  
            case 'facebook':
                $url = 'https://www.facebook.com/sharer/sharer.php?u='.$postUrl;
                break;
            case 'twitter':
                $url = 'https://twitter.com/intent/tweet?url='.$postUrl.'&text='.__('index.Check out this blog post I just read');
                break;
            case 'linkedin':
                $url = 'https://www.linkedin.com/sharing/share-offsite/?url='.$postUrl;
                break;
            case 'whatsapp':
                $url = 'https://api.whatsapp.com/send?text='.__('index.Check out this blog post I just read').'%20'.$postUrl;
                break;
        }

        $post->increment('share_count');
        $post->save();
        // Redirect to the appropriate sharing URL
        if($url){
            return redirect()->away($url);
        }else{
            return redirect()->back()->with('error', __('index.Invalid sharing platform'));
        }
    }

    public function search(Request $request)
    {
        // Search blog posts by keyword
        $keyword = $request->get('keyword');
        $posts = BlogPost::where('title', 'like', "%{$keyword}%")
            ->orWhere('content', 'like', "%{$keyword}%")
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        return view('guest.blog.search', compact('posts', 'keyword'));
    }

    public function category($category)
    {
        // Filter posts by category
        $posts = BlogPost::whereHas('category', function ($query) use ($category) {
            $query->where('slug', $category);
        })->orderBy('created_at', 'desc')->paginate(10);
        return view('guest.blog.category', compact('posts', 'category'));
    }

    public function tag($tag)
    {
        // Filter posts by tag
        $posts = BlogPost::whereHas('tags', function ($query) use ($tag) {
            $query->where('slug', $tag);
        })->orderBy('created_at', 'desc')->paginate(10);
        return view('guest.blog.tag', compact('posts', 'tag'));
    }

    public function archive($year, $month = null)
    {
        // Filter posts by date
        $query = BlogPost::whereYear('created_at', $year);
        if ($month) {
            $query->whereMonth('created_at', $month);
        }
        $posts = $query->orderBy('created_at', 'desc')->paginate(10);
        return view('guest.blog.archive', compact('posts', 'year', 'month'));
    }

    public function author($author)
    {
        // Filter posts by author
        $posts = BlogPost::whereHas('author', function ($query) use ($author) {
            $query->where('name', $author);
        })->orderBy('created_at', 'desc')->paginate(10);
        return view('guest.blog.author', compact('posts', 'author'));
    }

    public function comment($slug, Request $request)
    {
        // Add a comment to a blog post
        $post = BlogPost::where('slug_'.app()->getLocale(), $slug)->firstOrFail();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string',
        ]);

        BlogComment::create([
            'guest_name' => $request->name,
            'guest_email' => $request->email,
            'content' => $request->content,
            'lang' => app()->getLocale(),
            'is_approved' => false, // Default to false, admin will approve later
            'is_spam' => false, // Default to false, spam detection can be added later
            'blog_post_id' => $post->id,
        ]);

        return redirect()->back()->with('success', __('index.Comment added successfully'));
    }
}
