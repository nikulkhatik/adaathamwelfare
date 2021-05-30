@extends('layout.app')

@section('content')
    <div class="content_title"><span></span>અપરણીત યુવક-યુવતીની માહિતી</div>

    <script>
        function submitForm() {
            document.getElementById("newregform").submit();
        }
    </script>
    <form id="newregform" method="get" action="{{route('matrimonial')}}">
        <table style="width: 100%">
            <tr>
                <td colspan="4" style="color:black">Sex</td>
            </tr>
            <tr>
                <td colspan="4">
                    <select name="sex" id="findBy" style="width: 100%">
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="color:black"> Age</td>
            </tr>
            <tr>
                <td>
                    From
                </td>
                <td>
                    <select name="age_from" id="ageFrom" style="width: 100%">
                        @php $num =  range(0,99) @endphp
                        @foreach($num as $item)
                            @if($item == 0)
                                <option value="{{$item}}" selected="selected">{{$item}}</option>
                            @else
                                <option value="{{$item}}">{{$item}}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
                <td>
                    To
                </td>
                <td>
                    <select name="age_to" id="ageTo" style="width: 100%">
                        @php $num =  range(0,99) @endphp
                        @foreach($num as $item)
                            @if($item == 45)
                                <option value="{{$item}}" selected="selected">{{$item}}</option>
                            @else
                                <option value="{{$item}}">{{$item}}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="4">
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
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->member_id}}</td>
                    <td><a href="{{url('view-member/'.$item->member_id)}}" style="COLOR: #f00;">{{$item->name}}</a></td>
                    <td>{{$item->city}}</td>
                    <td>{{$item->age}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $data->onEachSide(0)->links() }}
    @endif
@endsection
