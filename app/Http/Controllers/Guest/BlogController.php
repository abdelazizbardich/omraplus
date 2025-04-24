<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
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
        $post = BlogPost::with('blogCategories','blogTags','author')->where('slug_'.app()->getLocale(), $slug)->firstOrFail();
        $categoryIds = $post->blogCategories->pluck('id');
        $relatedPosts = BlogPost::whereHas('blogCategories', function($query) use ($categoryIds) {$query->whereIn('blog_categories.id', $categoryIds);})->where('id', '!=', $post->id)->orderBy('created_at', 'desc')->limit(3)->get();
        return view('guest.blog.show', compact('post', 'relatedPosts'));
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
}
