@extends('layout.app')

@section('content')
<div class="content_title" style="text-align:center"><span></span>સભાસદનું સરનામું </div>
<table style="color:black">
    <tbody>
    <tr>
        <td style="color:brown"><b>Mem No</b></td>
        <td>:</td>
        <td>{{$data->member_id}}</td>
    </tr>
    <tr>
        <td style="color:brown"><b>Reg. Date</b></td>
        <td>:</td>
        <td>{{$data->join_date}}</td>
    </tr>
    <tr>
        <td style="color:brown"><b>Name</b></td>
        <td>:</td>
        <td style="color:brown">{{$data->name}}</td>
    </tr>
    <tr>
        <td style="color:brown"><b>Address</b></td>
        <td>:</td>
        <td>{{$data->address}}</td>
    </tr>
    <tr>
        <td style="color:brown"><b>City</b></td>
        <td>:</td>
        <td>{{$data->city}}</td>
    </tr>
    <tr>
        <td style="color:brown"><b>Taluka</b></td>
        <td>:</td>
        <td>{{$data->taluka}}</td>
    </tr>
    <tr>
        <td style="color:brown"><b>District</b></td>
        <td>:</td>
        <td>{{$data->dist}}</td>
    </tr>
    <tr>
        <td style="color:brown"><b>State</b></td>
        <td>:</td>
        <td>{{$data->state}}</td>
    </tr>
    <tr>
        <td style="color:brown"><b>Pin</b></td>
        <td>:</td>
        <td>{{$data->pin}}</td>
    </tr>
    <tr><td style="color:brown"><b>Phone (O)</b></td>
        <td>:</td>
        <td>{{$data->phone}}</td>
    </tr>
    <tr><td style="color:brown"><b>Mobile</b></td>
        <td>:</td>
        <td>{{$data->mobile}}</td>
    </tr>
    <tr>
        <td style="color:brown"><b>Email</b></td>
        <td>:</td>
        <td>{{$data->email}}</td>
    </tr>
    <tr>
        <td style="color:brown"><b>Birth Date</b></td>
        <td>:</td>
        <td>{{$data->dob}}</td>
    </tr>
    </tbody>
</table>
@endsection
