<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Department;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments =  Department::all();
        $blogs =  Blog::all();
        return view('blogs.allBlogs', compact('blogs', 'departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments =  Department::all();
        return view('blogs.addBlogs', compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:blogs|max:50',
            'description' => 'required',
            'blog_image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'id_dept' => 'required',
        ]);


        $blog = new Blog();

        $blog_image = $request->file('blog_image');
        $imageName = time() . '.' . $blog_image->getClientOriginalExtension();

        $blog_image->move(public_path('images/blogs'), $imageName);


        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->blog_image = $imageName;
        $blog->id_dept = $request->id_dept;
        $blog->author = $request->author;

        $blog->save();

        return redirect('/blogs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $departments =  Department::all();

        return view('blogs/editBlogs', compact('blog', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('blog_image')) {

            $validated = $request->validate([
                'name' => 'required|max:50',
                'description' => 'required',
                'id_dept' => 'required',
            ]);


            $blog_image = $request->file('blog_image');
            $imageName = time() . '.' . $blog_image->getClientOriginalExtension();

            $blog_image->move(public_path('images/blogs'), $imageName);

            Blog::where('id', $id)
                ->update([
                    "name" => $request->name,
                    "description" => $request->description,
                    "blog_image" => $imageName,
                    "id_dept" => $request->id_dept
                ]);
        } else {
            Blog::where('id', $id)
                ->update([
                    "name" => $request->name,
                    "description" => $request->description,
                    "id_dept" => $request->id_dept
                ]);
        }

        return redirect('/blogs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();

        return redirect('/blogs');
    }
}
