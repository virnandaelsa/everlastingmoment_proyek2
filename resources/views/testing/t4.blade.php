{{ $pageTitle ?? 'HEHE' }}

<br><br>
DETAIL APA SAJA

</br>
</br>
@foreach ($data1 as $data)
    print_r {{$data}}
    <br>
@endforeach
<br>
<br>
<br>
{{-- @foreach ($data2 as $data)
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
{{dd($data2)}}</br></br></br> --}}
