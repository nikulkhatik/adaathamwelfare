@extends('layout.app')

@section('content')
    <div class="content_title"><span></span>મૃતક સભાસદની યાદી</div>

    <script>
        function submitForm(){
            var findValue = document.getElementById("findValue").value
            var findBy = document.getElementById("findBy").value
            if(findValue === '' || findValue === undefined) {
                alert('please fill required fields')
            }else{
                document.getElementById("deathMember").submit();
            }
        }
    </script>
    <form id="deathMember" method="get" action="{{route('deathMember')}}">
        <table style="width: 100%">
            <tr>
                <td><h4>
                        <span style="color:Red"> Total Exprired Member : </span> {{$count}}</h4>
                </td>
            </tr>
            <tr>
                <td>Find Your Name (i.e. MADHAV)*</td>
            </tr>

            <tr>
                <td>
                    <input type="text" name="find_value" id="findValue" style="width: 100%">
                </td>
            </tr>
            <tr>
                <td>
                    <button onclick="submitForm()">Submit</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    @if(isset($data))
        <style>
            #dataTable {
                width: 100%;
                border: 1px solid;
                border-collapse: collapse;
            }

            #dataTable th,
            #dataTable td {
                border: 1px solid;
                font-size: 1em !important;
                padding: 0.5em;
            }
        </style>
        <table id="dataTable">
            <thead>
            <tr style="color: White;background-color: #DC5807;font-weight: bold;">
                <th>Mem No</th>
                <th>Name</th>
                <th>City</th>
                <th>Exp. Date</th>
                <th>Payment Amount</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->member_id}}</td>
                    <td><a href="{{url('view-member/'.$item->member_id)}}" style="COLOR: #f00;">{{$item->name}}</a></td>
                    <td>{{$item->city}}</td>
                    <td>{{$item->death_date}}</td>
                    <td>{{$item->amount}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $data->onEachSide(0)->links() }}
    @endif
@endsection
