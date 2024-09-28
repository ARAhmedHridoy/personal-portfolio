<?php

namespace App\Http\Controllers\Backend;

use App\Models\Blog;
use App\Models\Home;
use App\Models\About;
use App\Models\Skill;
use App\Models\Review;
use App\Models\Contact;
use App\Models\Quality;
use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Experience;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
    public function dashboard(){
        $data['TotalAdmin'] = User::count();
        $data['TotalBlog'] = Blog::count();
        return view('backend.index', $data);
    }

    // home
    public function admin_home(Request $request){
        //echo 'Home'; die();
        $data['get_data'] = Home::all();
        return view('backend.home', $data);
    }
    public function admin_home_post(Request $request){
        //dd($request->all());
        
        if($request->add_to_update == "ADD"){
            $data = request()->validate([
                'image' => 'required'
            ]);
            $data = new Home;
        }else{
            $data = Home::find($request->id);
        }

        $data->name = trim($request->name);
        $data->experience = trim($request->experience);
        $data->video = trim($request->video);
        $data->cv = trim($request->cv);

        if(!empty($request->file('image'))){

            if(!empty($data->image) && file_exists('public/img/'. $data->image))
            {
                unlink('public/img/'. $data->image);
            }

            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/',$filename);
            $data->image = $filename; 
        }
        $data->save();
        return redirect()->back()->with('success', 'Data Save Successfully');

    }

    // about
    public function admin_about(Request $request){
        $data['get_data_about'] = About::all();
        return view('backend.about', $data);
    }
    public function admin_about_post(Request $request){
        //dd($request->all());
            if($request->add_to_update == "ADD"){
                $data_about = request()->validate([
                    'image_about' => 'required'
                ]);
                $data_about = new About;
            }else{
                $data_about = About::find($request->id);
            }

            $data_about->name = trim($request->name);
            $data_about->title = trim($request->title);
            $data_about->description = trim($request->description);
            $data_about->birthday = trim($request->birthday);
            $data_about->degree = trim($request->degree);
            $data_about->experience = trim($request->experience);
            $data_about->phone = trim($request->phone);
            $data_about->email = trim($request->email);
            $data_about->address = trim($request->address);
            $data_about->freelance = trim($request->freelance);
            $data_about->learn = trim($request->learn);

        if(!empty($request->file('image_about'))){

            if(!empty($data_about->image_about) && file_exists('public/img/about/'. $data_about->image_about))
            {
                unlink('public/img/about/'. $data_about->image_about);
            }

            $file = $request->file('image_about');
            $randomStr = Str::random(30);
            $image_name = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/about/',$image_name);
            $data_about->image_about = $image_name; 
        }
        $data_about->save();
        return redirect()->back()->with('success', 'Data Save Successfully');
    }

    // /quality
    public function admin_quality(Request $request){
        $data['get_data'] = Quality::latest()->get();
        return view('backend.quality.quality', $data);
    }
    public function admin_quality_add(Request $request){
        return view('backend.quality.add');
    }
    public function admin_quality_post(Request $request){
        $data = new Quality;
        $data->degree_name = trim($request->degree_name);
        $data->institution_name = trim($request->institution_name);
        $data->passing_year = trim($request->passing_year);
        $data->description = trim($request->description);

        $data->save();
        return redirect('admin/quality')->with('success', 'Data Save Successfully');
    }
    public function admin_quality_edit($id, Request $request){
        $data['get_data'] = Quality::findOrFail($id);
        return view('backend.quality.edit', $data);
    }
    public function admin_quality_update($id, Request $request){
        //dd($request->all());
        $update_data = Quality::findOrFail($id);
        $update_data->degree_name = trim($request->degree_name);
        $update_data->institution_name = trim($request->institution_name);
        $update_data->passing_year = trim($request->passing_year);
        $update_data->description = trim($request->description);

        $update_data->save();
        return redirect('admin/quality')->with('success', 'Data Updated Successfully');
    }
    public function admin_quality_delete($id, Request $request){
        $delete_data = Quality::findOrFail($id);

        $delete_data->delete();
        return redirect()->back()->with('error', 'Data Deleted Successfully');
    }

    // experience
    public function admin_experience(Request $request){
        $data['get_data'] = Experience::latest()->get();
        return view('backend.experience.experience', $data);
    }
    public function admin_experience_add(Request $request){
        return view('backend.experience.add');
    }
    public function admin_experience_post(Request $request){
        $data = new Experience;
        $data->experience_name = trim($request->experience_name);
        $data->company_name = trim($request->company_name);
        $data->year = trim($request->year);
        $data->description = trim($request->description);

        $data->save();
        return redirect('admin/experience')->with('success', 'Data Save Successfully');
    }
    public function admin_experience_edit($id, Request $request){
        $data['get_data'] = Experience::findOrFail($id);
        return view('backend.experience.edit', $data);
    }
    public function admin_experience_update($id, Request $request){
        //dd($request->all());
        $update_data = Experience::findOrFail($id);
        $update_data->experience_name = trim($request->experience_name);
        $update_data->company_name = trim($request->company_name);
        $update_data->year = trim($request->year);
        $update_data->description = trim($request->description);

        $update_data->save();
        return redirect('admin/experience')->with('success', 'Data Updated Successfully');
    }
    public function admin_experience_delete($id, Request $request){
        $delete_data = Experience::findOrFail($id);

        $delete_data->delete();
        return redirect()->back()->with('error', 'Data Deleted Successfully');
    }

    // Skill
    public function admin_skill(Request $request){
        $data['get_data'] = Skill::latest()->get();
        return view('backend.skills.skill', $data);
    }
    public function admin_skill_post(Request $request){
        //dd($request->all());
        $data = new Skill;
        $data->skill_name = trim($request->skill_name);
        $data->skill_percent = trim($request->skill_percent);

        $data->save();
        return redirect()->back()->with('success', 'Data Save Successfully');
    }
    public function admin_skill_edit($id, Request $request){
        $data['get_data'] = Skill::findOrFail($id);
        return view('backend.skills.edit', $data);
    }

    public function admin_skill_update($id, Request $request){
        //dd($request->all());
        $update_data = Skill::findOrFail($id);
        $update_data->skill_name = trim($request->skill_name);
        $update_data->skill_percent = trim($request->skill_percent);

        $update_data->save();
        return redirect('admin/skill')->with('success', 'Data Updated Successfully');
    }

    public function admin_skill_delete($id, Request $request){
        //echo $id; die();
        $delete_data = Skill::findOrFail($id);

        $delete_data->delete();
        return redirect()->back()->with('error', 'Data Deleted Successfully');
    }

    // service
    public function admin_service(Request $request){
        $data['get_data'] = Service::latest()->get();
        return view('backend.service.service', $data);
    }
    public function admin_service_add(Request $request){
        return view('backend.service.add');
    }
    public function admin_service_post(Request $request){
        $data = new Service;
        $data->icon = trim($request->icon);
        $data->service_name = trim($request->service_name);
        $data->description = trim($request->description);
        $data->link = trim($request->link);

        $data->save();
        return redirect('admin/service')->with('success', 'Data Save Successfully');
    }
    public function admin_service_edit($id, Request $request){
        $data['get_data'] = Service::findOrFail($id);
        return view('backend.service.edit', $data);
    }
    public function admin_service_update($id, Request $request){
        //dd($request->all());
        $update_data = Service::findOrFail($id);
        $update_data->icon = trim($request->icon);
        $update_data->service_name = trim($request->service_name);
        $update_data->description = trim($request->description);
        $update_data->link = trim($request->link);

        $update_data->save();
        return redirect('admin/service')->with('success', 'Data Updated Successfully');
    }
    public function admin_service_delete($id, Request $request){
        $delete_data = Service::findOrFail($id);

        $delete_data->delete();
        return redirect()->back()->with('error', 'Data Deleted Successfully');
    }

    // portfolio
    public function admin_portfolio(Request $request){
        $data['get_data'] = Portfolio::latest()->get();
        return view('backend.portfolio.portfolio', $data);
    }
    public function admin_portfolio_add(Request $request){
        return view('backend.portfolio.add');
    }
    public function admin_portfolio_post(Request $request){
        $data = new Portfolio;
        $data->title = trim($request->title);
        $data->portfolio_link = trim($request->portfolio_link);

        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $image_name = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/portfolio/',$image_name);
            $data->image = $image_name; 
        }
        $data->save();
        return redirect('admin/portfolio')->with('success', 'Data Save Successfully');
    }

    public function admin_portfolio_edit($id, Request $request){
        $data['get_data'] = Portfolio::findOrFail($id);
        return view('backend.portfolio.edit', $data);
    }
    public function admin_portfolio_update($id, Request $request){
        //dd($request->all());
        $update_data = Portfolio::findOrFail($id);
        $update_data->title = trim($request->title);
        $update_data->portfolio_link = trim($request->portfolio_link);

        if(!empty($request->file('image'))){

            if(!empty($update_data->image) && file_exists('public/img/portfolio/'. $update_data->image)){
                unlink('public/img/portfolio/'. $update_data->image);
            }

            $file = $request->file('image');
            $randomStr = Str::random(30);
            $image_name = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/portfolio/',$image_name);
            $update_data->image = $image_name;
        }

        $update_data->save();
        return redirect('admin/portfolio')->with('success', 'Data Updated Successfully');
    }

    public function admin_portfolio_delete($id, Request $request){
        //echo $id; die();
        $delete_data = Portfolio::findOrFail($id);

        if(!empty($delete_data->image) && file_exists('public/img/portfolio/'. $delete_data->image)){
            unlink('public/img/portfolio/'. $delete_data->image);
        }

        $delete_data->delete();
        return redirect()->back()->with('error', 'Data Deleted Successfully');
    }

    // Review
    public function admin_review(Request $request){
        $data['get_data'] = Review::latest()->get();
        return view('backend.review.review', $data);
    }
    public function admin_review_add(Request $request){
        return view('backend.review.add');
    }
    public function admin_review_post(Request $request){
        $data = new Review;
        $data->name = trim($request->name);
        $data->profession = trim($request->profession);
        $data->message = trim($request->message);

        if(!empty($request->file('image'))){
            $file = $request->file('image');
            $randomStr = Str::random(30);
            $image_name = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/review/',$image_name);
            $data->image = $image_name;
        }
        $data->save();
        return redirect('admin/review')->with('success', 'Data Save Successfully');
    }

    public function admin_review_edit($id, Request $request){
        $data['get_data'] = Review::findOrFail($id);
        return view('backend.review.edit', $data);
    }
    public function admin_review_update($id, Request $request){
        //dd($request->all());
        $update_data = Review::findOrFail($id);
        $update_data->name = trim($request->name);
        $update_data->profession = trim($request->profession);
        $update_data->message = trim($request->message);

        if(!empty($request->file('image'))){

            if(!empty($update_data->image) && file_exists('public/img/review/'. $update_data->image)){
                unlink('public/img/review/'. $update_data->image);
            }

            $file = $request->file('image');
            $randomStr = Str::random(30);
            $image_name = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/review/',$image_name);
            $update_data->image = $image_name;
        }

        $update_data->save();
        return redirect('admin/review')->with('success', 'Data Updated Successfully');
    }

    public function admin_review_delete($id, Request $request){
        //echo $id; die();
        $delete_data = Review::findOrFail($id);

        if(!empty($delete_data->image) && file_exists('public/img/review/'. $delete_data->image)){
            unlink('public/img/review/'. $delete_data->image);
        }

        $delete_data->delete();
        return redirect()->back()->with('error', 'Data Deleted Successfully');
    }

    // blog
    public function admin_blog(Request $request){
        $data['get_data'] = Blog::latest()->get();
        return view('backend.blog.blog', $data);
    }
    public function admin_blog_store(Request $request){
        $validator = Validator::make($request->all(), [
            'title'=>'required|max:191',
            'image'=>'required|image|mimes:png,jpg,jpeg',
            'description'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages()
            ]);
        }else{
            $data = new Blog;
            $data->title = $request->input('title');
            $data->description = $request->input('description');

            if($request->hasFile('image')){
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() .'.' .$extension;
                $file->move('public/img/blog/', $filename);
                $data->image = $filename;
            }
            $data->save();
            return redirect()->back()->with('success', 'Data Save Successfully');
            // return response()->json([
            //     'status'=>200,
            //     'message'=>'Data Save Successfully'
            // ]);
        }
    }
    public function admin_blog_edit($id, Request $request){
        $data['get_data'] = Blog::findOrFail($id);
        return view('backend.blog.edit', $data);
    }
    public function admin_blog_update($id, Request $request){
        //dd($request->all());
        $update_data = Blog::findOrFail($id);
        $update_data->title = trim($request->title);
        $update_data->description = trim($request->description);

        if(!empty($request->file('image'))){

            if(!empty($update_data->image) && file_exists('public/img/blog/'. $update_data->image)){
                unlink('public/img/blog/'. $update_data->image);
            }

            $file = $request->file('image');
            $randomStr = Str::random(30);
            $image_name = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/img/review/',$image_name);
            $update_data->image = $image_name;
        }

        $update_data->save();
        return redirect('admin/blog')->with('success', 'Data Updated Successfully');
    }
    public function admin_blog_delete($id, Request $request){
        //echo $id; die();
        $delete_data = Blog::findOrFail($id);

        if(!empty($delete_data->image) && file_exists('public/img/blog/'. $delete_data->image)){
            unlink('public/img/blog/'. $delete_data->image);
        }

        $delete_data->delete();
        return redirect()->back()->with('error', 'Data Deleted Successfully');
    }
    

    // contact
    public function admin_contact(Request $request){
        $data['get_data'] = Contact::get();
        return view('backend.contact',$data);
    }

    public function admin_contact_delete($id, Request $request){
        //echo $id; die();
        $delete_data = Contact::findOrFail($id);

        $delete_data->delete();
        return redirect()->back()->with('error', 'Data Deleted Successfully');
    }

}
