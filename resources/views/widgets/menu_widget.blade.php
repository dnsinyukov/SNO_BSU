{{--Меню сайта--}}
<ul class="nav navbar-nav">
    {{--<li><a href="/">Главная</a></li>--}}
    @if(!empty($menuTop))
        @foreach($menuTop as $menuItem)
            <li><a href="{{$menuItem->url}}">{{$menuItem->title}}</a></li>
        @endforeach
    @endif
            {{--<li class="dropdown">--}}
        {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>--}}
        {{--<ul class="dropdown-menu">--}}
            {{--<li><a href="#">Page 1-1</a></li>--}}
            {{--<li><a href="#">Page 1-2</a></li>--}}
            {{--<li><a href="#">Page 1-3</a></li>--}}
        {{--</ul>--}}
    {{--</li>--}}
</ul>
