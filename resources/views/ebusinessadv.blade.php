@extends('layout.app')

@section('content')
    <div class="content_title"><span></span>વ્યવસાય અંગે માહિતી</div>

    <script>
        function submitForm(){
            var findBy = document.getElementById("profession").value
            if(findBy === '' || findBy === undefined) {
                alert('please fill required fields')
            }else{
                document.getElementById("newregform").submit();
            }
        }
    </script>
    <form id="newregform" method="get" action="{{route('newregformGet')}}">
        <table style="width: 100%">
            <tr>
                <td>Profession</td>
            </tr>
            <tr>
                <td>
                    <select name="profession" id="profession" style="width: 100%">
                        <option value="Others">Others</option>
                        <option value="Doctors">Doctors</option>
                        <option value="Chartered Accountants">Chartered Accountants</option>
                        <option value="Government Employee">Government Employee</option>
                        <option value="Architects">Architects</option>
                        <option value="Industriliest">Industriliest</option>
                        <option value="Accountants">Accountants</option>
                        <option value="Advocates">Advocates</option>
                        <option value="Engineers">Engineers</option>
                        <option value="Professors">Professors</option>
                        <option value="Teachers">Teachers</option>
                        <option value="Other Business">Other Business</option>
                        <option value="Estate Consultants">Estate Consultants</option>
                        <option value="Brokers">Brokers</option>
                        <option value="Traders">Traders</option>
                        <option value="Carpenters">Carpenters</option>
                        <option value="Beauticians">Beauticians</option>
                        <option value="Real Estates">Real Estates</option>
                        <option value="રીયલ  ઇસસ્ટેટે">રીયલ  ઇસસ્ટેટે</option>
                        <option value="સરકારી નોકરી">સરકારી નોકરી</option>
                        <option selected="selected" value="All">All</option>
                    </select>
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
            </tr>
            </thead>
            <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{$item->member_id}}</td>
                    <td><a href="{{url('view-member/'.$item->member_id)}}" style="COLOR: #f00;">{{$item->name}}</a></td>
                    <td>{{$item->city}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $data->onEachSide(0)->links() }}
    @endif
@endsection
