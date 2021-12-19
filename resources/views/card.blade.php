

<div class="col-sm-6 col-md-4 border border-1 ">
    <div class="thumbnail">
        <div class="labels">


        </div>
        <img src="http://img.mvideo.ru/Big/30057502bb.jpg" alt="iPhone X 64GB">
        <div class="caption" >
            <div style="height: 75px">
                <h3>{{$laptop->name}}</h3>
            </div>
                <p>{{$laptop->price}} руб.</p>
                <p>
                    Фирма: {{$laptop->firm->name}}
                </p>

            <form action="{{route('basket-add', $laptop)}}" method="POST">

                <button type="submit" class="btn btn-primary"
                        role="button">В корзину</button>

                <a href="{{route('product',[$laptop->firm->name,$laptop->id])}}" class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="iWPSJmrwREnYkC3cgrYdqrCAqRrCdbP2w7r1O4rk">
                @csrf
            </form>
            <p></p>
        </div>

    </div>
</div>
