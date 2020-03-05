<?php  
	namespace App\Http\Controllers;
	use App\Category;
	use Illuminate\Http\Request;
	use App\Http\Controllers;
	use DB;
	use Carbon\Carbon;
	/*use Illuminate\Support\Facades\DB;*/

	/**
		 * 
		 */
		class CategoryController extends Controller
		{
			
			
			//thêm danh mục
			public function addCategory()
			{
				return view('backend.addCategory');
			}
			public function saveCategory(Request $Request)
			{
				$this->validate($Request,
					[
						'cate_name'=>'required|min:5'
					],
					[
						'cate_name.required'=>"không được để trống",
						'cate_name.min'=>"tên phải dài hơn 5 kí tự",
						'cate_name.unique'=>"Tên phải là duy nhất"
					]
				);
				Category::create([
					'cat_name'=>$Request->cate_name,
					'status'=>$Request->status,
					'created_at'=>Carbon::now('Asia/Ho_Chi_Minh')
				]);
				return redirect()->route('listCategory');
			}
			//hiển thị danh mục
			public function listCategory()
			{
				$row =Category::all();
				return view('backend.listCategory',[
					'row'=>$row
				]);
			}
			//sửa danh mục
			public function editCategory($cat_id)
			{
				$viewEdit = DB::table('category')->where('cat_id', $cat_id)->first();
				return view('backend.editCategory',[
					'viewEdit'=>$viewEdit
				]);
			}
			public function updateCategory($cat_id, Request $Request)
			{
				DB::table('category')->where('cat_id', $cat_id)->update([
					'cate_name'=>$Request->cate_name,
					'status'=>$Request->status,
					'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')
				]);
				return redirect()->route('listCategory');
			}
			//xóa danh mục
			public function deleteCategory($cat_id)
			{
				DB::table('category')->where('cat_id', $cat_id)->delete();
				return redirect()->route('listCategory');
			}
		}
?>