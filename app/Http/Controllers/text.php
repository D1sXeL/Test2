<?php
	namespace App\Http\Controllers;
	
	use App\Http\Controllers\Controller;
	use Illuminate\Http\Request;
	
	class text extends Controller
	{
		public function form()
		{
			
			return view('text.text');
		}
		
		public function result(Request $request)
		{
			
			$text = $request->input('text');
			$text2 = $request->input('text2');
			$text3 = $request->input('text3');
			if ($request->isMethod('post')) 
			
		
			return view('text.form', ['text' => $text, 'text2' => $text2 ]);
			
		}

		public function pg(Request $request)
		{
			{
				// Выполнится при первом заходе:
				if ($request->isMethod('get')) {
					return view('text.text'); // представление с формой
				}
				
				// Выполнится после отправки формы:
				if ($request->isMethod('post')) {
					$text = $request->input('text');
					return view('text.text', ['text' => $text, 'text2' => $text2 ]);
				}
			}
	
		}


		public function all(Request $request)
		{
			
			$text = $request->only('name', 'surname', 'login');
			return view('text.form', ['text' => $text]);
		}
		public function hj(){
			return view('sa');
		}
	}

	



	
?>
