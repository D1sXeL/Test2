<?php 
namespace App\Http\Controllers;
 use App\Http\Controllers\Controller;
 class page extends Controller 
 { 
            public function show($param) { 
                    return $param; 
            }

            public function showOne($id){
                $pages = 
[ 
1 => 'страница 1', 
2 => 'страница 2', 
3 => 'страница 3', 
4 => 'страница 4', 
5 => 'страница 5', 
];
if (!isset($pages[$id]))
{
    return 'Такой страницы нету';
}
    
   
return $pages[$id];

            } 

            public function showAll($this){ 
            return $this2 = [ 
                1 => [ 
                        'name' => 'user1', 
                        'surname' => 'surname1','salary' => 1000, 
                    ], 
                2 => [  
                        'name' => 'user2', 
                          'surname' => 'surname2','salary' => 2000, 
                        ], 
                3 => [ 
                        'name' => 'user3', 
                        'surname' => 'surname3','salary' => 3000, 
                    ], 
                4 => [ 
                        'name' => 'user4', 
                        'surname' => 'surname4',  'salary' => 4000, ], 
                5 => [ 
                        'name' => 'user5', 
                        'surname' => 'surname5','salary' => 5000, 
                    ], 
                ]; 

} 
}


