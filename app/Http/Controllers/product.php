<?php
	namespace App\Http\Controllers;
	use App\Http\Controllers\Controller;
	
	class product extends Controller
	{


        // public function showProduct($Cid, $Pid)
		// {
        //     $this->categories = [
        //         1 => [
        //             'name' => 'Категория 1',
        //             'products' => [
        //                 1 => [
        //                     'name'    => 'Продукт 1',
        //                     'cost'    => '300',
        //                     'inStock' => true,
        //                     'desc'    => 'Описание продукта 1'
        //                 ],
        //                 2 => [
        //                     'name'    => 'Продукт 2',
        //                     'cost'    => '400',
        //                     'inStock' => true,
        //                     'desc'    => 'Описание продукта 2'
        //                 ],
        //                 3 => [
        //                     'name'    => 'Продукт 3',
        //                     'cost'    => '500',
        //                     'inStock' => false,
        //                     'desc'    => 'Описание продукта 3'
        //                 ],
        //             ],
        //         ],
        //         2 => [
        //             'name' => 'Категория 2',
        //             'products' => [
        //                 1 => [
        //                     'name'    => 'Продукт 1',
        //                     'cost'    => '700',
        //                     'inStock' => true,
        //                     'desc'    => 'Описание продукта 1'
        //                 ],
        //                 2 => [
        //                     'name'    => 'Продукт 2',
        //                     'cost'    => '800',
        //                     'inStock' => false,
        //                     'desc'    => 'Описание продукта 2'
        //                 ],
        //                 3 => [
        //                     'name'    => 'Продукт 3',
        //                     'cost'    => '900',
        //                     'inStock' => false,
        //                     'desc'    => 'Описание продукта 3'
        //                 ],
        //             ],
        //         ],
        //     ];

        //     $b= $this->categories[$Cid];

        //     return view('product.product', ["b"=>$b, "Pid"=>$Pid]);
        
        // }

        private $categories;
        
        public function showCategory()
		{
            $this->categories = [
                1 => [
                    'name' => 'Категория 1',
                    'products' => [
                        1 => [
                            'name'    => 'Продукт 1',
                            'cost'    => '300',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 1'
                        ],
                        2 => [
                            'name'    => 'Продукт 2',
                            'cost'    => '400',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 2'
                        ],
                        3 => [
                            'name'    => 'Продукт 3',
                            'cost'    => '500',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 3'
                        ],
                    ],
                ],
                2 => [
                    'name' => 'Категория 2',
                    'products' => [
                        1 => [
                            'name'    => 'Продукт 1',
                            'cost'    => '700',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 1'
                        ],
                        2 => [
                            'name'    => 'Продукт 2',
                            'cost'    => '800',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 2'
                        ],
                        3 => [
                            'name'    => 'Продукт 3',
                            'cost'    => '900',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 3'
                        ],
                    ],
                ],
            ];

            return view('product.spisok', ["b"=>$this->categories]);
        
        }

        public function showCategoryList($id)
		{
            $this->categories = [
                1 => [
                    'name' => 'Категория 1',
                    'products' => [
                        1 => [
                            'name'    => 'Продукт 1',
                            'cost'    => '300',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 1'
                        ],
                        2 => [
                            'name'    => 'Продукт 2',
                            'cost'    => '400',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 2'
                        ],
                        3 => [
                            'name'    => 'Продукт 3',
                            'cost'    => '500',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 3'
                        ],
                    ],
                ],
                2 => [
                    'name' => 'Категория 2',
                    'products' => [
                        1 => [
                            'name'    => 'Продукт 1',
                            'cost'    => '700',
                            'inStock' => true,
                            'desc'    => 'Описание продукта 1'
                        ],
                        2 => [
                            'name'    => 'Продукт 2',
                            'cost'    => '800',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 2'
                        ],
                        3 => [
                            'name'    => 'Продукт 3',
                            'cost'    => '900',
                            'inStock' => false,
                            'desc'    => 'Описание продукта 3'
                        ],
                    ],
                ],
            ];

            return view('product.product', ["b"=>$this->categories[$id]['products']]);
        
        }
        

	}


?>
