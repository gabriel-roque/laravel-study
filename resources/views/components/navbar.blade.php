
{{--$slot espaco generico para quem for usa poder alocar um dado no espaco da variavel--}}

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">{{$slot}}</a>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>