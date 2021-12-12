

<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">


        </div>
        <img src="http://img.mvideo.ru/Big/30057502bb.jpg" alt="iPhone X 64GB">
        <div class="caption">
            <h3>{{$laptop->name}}</h3>
            <p>{{$laptop->price}} руб.</p>
            <p>
                Фирма: {{$laptop->firm->name}}
            </p>


            </p><form action="{{route('basket-add', $laptop)}}" method="POST">

                <button type="submit" class="btn btn-primary"
                        role="button">В корзину</button>
                <a href="{{route('product',$laptop->firm->name,$laptop->name)}} class="btn btn-default" role="button">Подробнее</a>
                <input type="hidden" name="_token" value="iWPSJmrwREnYkC3cgrYdqrCAqRrCdbP2w7r1O4rk">
                @csrf
            </form>
            <p></p>
        </div>
    </div>
</div>
