@extends ('layouts.header_footer')

@section ('content')

<h2 align="center"> Добавление нового реестра </h2>

    <form method="post" action="{{ route('reestr.create',['client_id'=>$client_id]) }} " >
        @csrf
        Дата начала <br>                 
        <input type="date" name="date_from"  value="{{ old('date_from')}}"> <br> <br>    
        Дата окончания <br> 
        <input type="date" name="date_to" value="{{ old('date_to')}}" > <br>
        <br> <br> <button class="btn btn-primary" type="submit"> Добавить </button>
    </form>

<h4 align="left"><a href="{{ route('client.list')}}">Перейти к списку клиентов</a></h4>
@endsection
