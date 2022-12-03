<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class test extends Controller
{
		




public function showOne($id){
$g= $this->employees[$id];
return view('test.test',['name'=>$g['name'], 'surname'=>$g['surname'], 'salary'=>$g['salary']] );
}


public function showField($id, $field){
return $this->employees[$id][$field];

}

public function show()
{
	$text="http://wsr.ru/index.php";
	return view('test.test', ['var' => 'text', 'var1' => [2, 3], 'var2'=>'3']);
}

public function ara()
{
	return view('test.test', ['arr' => [1, 2, 6]]);
}

public function city($gorod="moscow")
{
	return view('test.test', ["gorod"=>"$gorod"]);

}

public function location($country="Russia", $gorod="Moscow")
{
	return view('test.test', ["country"=>"$country", "gorod"=>"$gorod"]);
}


public function b($b="<b>строка</b>")
{
	return view('test.test', ["str"]);
}

public function dat()
{
    $year='2021';
    $mounth='09';
    $date='26';
    return view('test.test', ["year"=>$year, "mounth"=>$mounth, "day"=>$date]);


}
public function age()
{

    return view('test.test', ["var1"=>[4,16]]);


}


public function mas()
{
	
	return view('test.test',["arr"=>[[1, 2, 3, 4, 5], [6, 7, 8, 9, 10], [11, 12, 13, 14, 15], [16, 17, 18, 19, 20], [21, 22, 23, 24, 25]]]);
}

private $ha;
		public function __construct() {
			$this->ha = [
				[
					'name' => 'user1',
					'surname' => 'surname1',
					'salary' => 1000,
				],
				[
					'name' => 'user2',
					'surname' => 'surname2',
					'salary' => 2000,
				],
				[
					'name' => 'user3',
					'surname' => 'surname3',
					'salary' => 3000,
				],
			];
		}
		


public function rab()
{
	$g= $this->ha;
	return view('test.test',["g"=>$g] );
}

public function maw()
{
	
	return view('new.new',["arr"=>[1, 2, 3, 4, 5, 6]]);
}

public function tovar()
{
	return view('tovar.table');
}

private $links;
	public function lin(){
		$this-> links= [
			[
				'text' => 'text1',
				'href' => 'href1',
			],
			[
				'text' => 'text2',
				'href' => 'href2',
			],
			[
				'text' => 'text3',
				'href' => 'href3',
			],
		];
}


public function link()
{
	$this->lin();
	$v= $this->links;
	return view('orex.orex',["v"=>$v] );
}

private $emplo;
public function empl(){
	$this->emplo = [
		[
			'name' => 'user1',
			'surname' => 'surname1',
			'salary' => 1000,
		],
		[
			'name' => 'user2',
			'surname' => 'surname2',
			'salary' => 2000,
		],
		[
			'name' => 'user3',
			'surname' => 'surname3',
			'salary' => 3000,
		],
		[
			'name' => 'user4',
			'surname' => 'surname4',
			'salary' => 4000,
		],
		[
			'name' => 'user5',
			'surname' => 'surname5',
			'salary' => 5000,
		],
	];
}

	public function emp()
{
	$this->empl();
	$z= $this->emplo;
	return view('orex.orex',["z"=>$z] );
}
private $users;
public function user(){
	$this->users = [
	[
		'name' => 'user1',
		'surname' => 'surname1',
		'banned' => true,
	],
	[
		'name' => 'user2',
		'surname' => 'surname2',
		'banned' => false,
	],
	[
		'name' => 'user3',
		'surname' => 'surname3',
		'banned' => true,
	],
	[
		'name' => 'user4',
		'surname' => 'surname4',
		'banned' => false,
	],
	[
		'name' => 'user5',
		'surname' => 'surname5',
		'banned' => false,
	],
];
}
public function use(){
	$this->user();
	$x= $this->users;
	return view('orex.orex', ["x"=>$x]);
}



public function spi(){
	$c= [
		'Kriper','Zombi','Skelet','Payk','Enderman'
	];
	return view('orex.orex', ["c"=>$c]);
}


public function date(){
	$b[] = date('j');
	

	
	return view('orex.orex', ["b"=>$b]);
}


public function post($id)
{
	$this->posts = [
		1 => [
			'title'  => 'Тайтл страницы 1',
			'author' => 'Автор страницы 1',
			'date'   => 'Дата публикации страницы 1',
			'teaser' => 'Короткое описание страницы 1',
			'text'   => 'Полный текст страницы 1',
		],
		2 => [
			'title'  => 'Тайтл страницы 2',
			'author' => 'Автор страницы 2',
			'date'   => 'Дата публикации страницы 2',
			'teaser' => 'Короткое описание страницы 2',
			'text'   => 'Полный текст страницы 2',
		],
		3 => [
			'title'  => 'Тайтл страницы 3',
			'author' => 'Автор страницы 3',
			'date'   => 'Дата публикации страницы 3',
			'teaser' => 'Короткое описание страницы 3',
			'text'   => 'Полный текст страницы 3',
		],
		4 => [
			'title'  => 'Тайтл страницы 4',
			'author' => 'Автор страницы 4',
			'date'   => 'Дата публикации страницы 4',
			'teaser' => 'Короткое описание страницы 4',
			'text'   => 'Полный текст страницы 4',
		],
		5 => [
			'title'  => 'Тайтл страницы 5',
			'author' => 'Автор страницы 5',
			'date'   => 'Дата публикации страницы 5',
			'teaser' => 'Короткое описание страницы 5',
			'text'   => 'Полный текст страницы 5',
		],
	];
	return view('post.post',["id"=>$id] );
}

	

}

 ?>
