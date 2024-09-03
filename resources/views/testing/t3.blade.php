t3 KATALOG</br>
</br>
@foreach ($data1 as $data)
    print_r {{$data}}
    <br>
@endforeach
<br>
<br>
<br>
@foreach ($data2 as $data)
    print_r {{$data}}
    <br>
    <br>
@endforeach
<br>
<br>
@foreach ($data3 as $data)
    print_r {{$data}}
    <br>
    <br>
@endforeach
{{-- {{print_r($data1[0])}}</br></br></br> --}}
{{dd($data2)}}</br></br></br>
