<div class="container">
    <div class="our_pizzas">
        <h2>Наші піци</h2>

        <select name="sort" class ="combik" title="Сортування">
            <option value="all" selected hidden>Сортування</option>
            <option value="meat">М'ясні</option>
            <option value="hot">Гострі</option>
            <option value="veg">Вегетаріанські</option>
        </select>

        @for($i = 0; $i < count($pizzas);)
            <div class="pizza_row">
            @for ($j = 0; $j < 3 && $i < count($pizzas); $j++, $i++)
                @component('Components/pizza')
                    @slot('img')
                        {{$pizzas[$i]['image_title']}}
                    @endslot
                    @slot('name')
                        {{$pizzas[$i]['name']}}
                    @endslot
                    @slot('price')
                        {{$pizzas[$i]['price']}}
                    @endslot
                @endcomponent
            @endfor
            </div>
        @endfor

        <p class="loadMore">Load more</p>
    </div>
</div>
<div class="container ctor_image">
    <h3>Або збери сам у нашому конструкторі</h3>

    <p class="ctorBtn"><a href="constructor">Перейти до конструктора</a></p>
</div>

<div class="container drinks">
    <h2>Напої</h2>
    @for($i = 0; $i < count($drinks);)
        <div class="pizza_row">
            @for ($j = 0; $j < 3 && $i < count($drinks); $j++, $i++)
                @component('Components.drink')
                    @slot('img')
                        {{$drinks[$i]['image_title']}}
                    @endslot
                    @slot('name')
                        {{$drinks[$i]['name']}}
                    @endslot
                    @slot('price')
                        {{$drinks[$i]['price']}}
                    @endslot
                    @slot('volume')
                        {{$drinks[$i]['volume']}}
                    @endslot
                @endcomponent
            @endfor
        </div>
    @endfor
</div>
