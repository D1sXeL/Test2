@extends('layouts.app')
@section('content')
@parent
    <section>
        <div class="container">
            <div class="">
                <div class="my-5">
                    <form method="post">
                        {{ csrf_field() }}
                        <span>Сортировать по:</span>
                        @if(isset($sort))
                            @if($sort=="products.name")
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date">По дате</option>
                                <option value="name" selected>По наименованию</option>
                                <option value="publisher">По категории</option>
                                <option value="price">По цене</option>
                            </select>
                            @elseif($sort=="products.price")
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date">По дате</option>
                                <option value="name">По наименованию</option>
                                <option value="publisher">По категории</option>
                                <option value="price" selected>По цене</option>
                            </select>
                            @elseif($sort=="categories.name")
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date">По дате</option>
                                <option value="name">По наименованию</option>
                                <option value="publisher" selected>По категории</option>
                                <option value="price">По цене</option>
                            </select>
                            @else
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date" selected>По дате</option>
                                <option value="name">По наименованию</option>
                                <option value="publisher">По категории</option>
                                <option value="price">По цене</option>
                            </select>
                            @endif
                        @else
                            <select name="sorted" onchange="this.form.submit()">
                                <option value="date" selected>По дате</option>
                                <option value="name">По наименованию</option>
                                <option value="publisher">По категории</option>
                                <option value="price">По цене</option>
                            </select>
                        @endif
                        @if(isset($optionSorted))
                            @if($optionSorted=="asc")
                            <select name="optionSorted" onchange="this.form.submit()">
                                <option value="desc">По возрастанию</option>
                                <option value="asc" selected>По убыванию</option>
                            </select>
                            @else
                            <select name="optionSorted" onchange="this.form.submit()">
                                <option value="desc" selected>По возрастанию</option>
                                <option value="asc">По убыванию</option>
                            </select>
                            @endif
                        @else
                        <select name="optionSorted" onchange="this.form.submit()">
                            <option value="desc" selected>По возрастанию</option>
                            <option value="asc">По убыванию</option>
                        </select>
                        @endif

                        <div class="sort-category col-lg-1 d-flex flex-column align-items-center py-3 mt-3">
                        <p>По категории:</p>
                            {{ csrf_field() }}
                            <select name="categorySorted" onchange="this.form.submit()">
                                <option value="Все">Все</option>
                            @foreach($dataCategories as $key=>$value)
                                @if(isset($sortCategory))
                                    @if($sortCategory == $value['name'])
                                        <option value="{{ $value['name'] }}" selected>{{ $value['name'] }}</option>
                                    @else
                                        <option value="{{ $value['name'] }}">{{ $value['name'] }}</option>
                                    @endif
                                @else
                                    <option value="{{ $value['name'] }}">{{ $value['name'] }}</option>
                                @endif
                            @endforeach

                            </select>
                    </div>


                    
                </div>
                <div class="d-flex flex-wrap">
                @foreach($data as $key=>$value)
                    <div class="mx-3 col-lg-3 d-flex flex-column justify-content-center align-items-center">
                        <img src="{{ $value['img_path'] }}" alt="" class="img-fluid max-size">
                        <h4>{{ $value['name'] }}</h4>
                        <span>Издатель: {{ $value['categoryName'] }}</span>
                        <span>Цена: {{ $value['price'] }} рублей</span>
                        <span>Дата добавления: {{ $value['created_at'] }}</span>
                        <span>Количество: {{ $value['quantity'] }}</span>
                        <span><a href="/catalog/{{ $value['id'] }}">Подробнее</a></span>
                        @auth
                            <span><a href="/catalog?basket_id={{ $value['id'] }}">В корзину</a></span>
                        @endauth
                    </div>
                @endforeach
                </div>
                </form>



                <button type="button" class="btn btn-primary" id="liveToastBtn">Показать лайв тосты</button>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <!-- <img src="..." class="rounded me-2" alt="..."> -->
      <strong class="me-auto">Bootstrap</strong>
      <small>11 мин назад</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Закрыть"></button>
    </div>
    <div class="toast-body">
      Привет, мир! Это тост-сообщение.
    </div>
  </div>
</div>

            </div>
        </div>
    
        <script>
            const toastTrigger = document.getElementById('liveToastBtn')
            const toastLiveExample = document.getElementById('liveToast')
            if (toastTrigger) {
            toastTrigger.addEventListener('click', () => {
                const toast = new bootstrap.Toast(toastLiveExample)

                toast.show()
            })
            }
        </script>

    </section>
@endsection
