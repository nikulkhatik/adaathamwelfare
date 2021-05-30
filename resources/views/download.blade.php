@extends('layout.app')

@section('content')
    <div class="content_title"><span></span>નવી માહિતી ડાઉનલોડ કરો.</div>
    <div class="p_box" style="height: 511px">
        <table style="width: 100%">
            <tr>
                <td style="height: 22px; width: 98px" class="auto-style14">
                    <a href="{{asset('downloads/form_adaatham.pdf')}}">
                        <img alt="" height="53" src="{{asset('images/download.png')}}" width="40" /></a></td>
                <td style="height: 22px" class="auto-style15">અરજી પત્રક</td>
            </tr>
            <tr>
                <td style="width: 98px" class="auto-style14">
                    <a href="{{asset('downloads/APLICATION%20FORM_1.pdf')}}">
                        <img alt="" height="53" src="{{asset('images/download.png')}}" width="40" /></a></td>
                <td class="auto-style15">સરનામામાં ફેરફાર કરવા બાબત</td>
            </tr>
            <tr>
                <td style="width: 98px" class="auto-style14">
                    <a href="{{asset('downloads/APLICATION%20FORM_3.pdf')}}">
                        <img alt="" height="53" src="{{asset('images/download.png')}}" width="40" /></a></td>
                <td class="auto-style15">વારસદારમાં ફેરફાર કરવા બાબત</td>
            </tr>
            <tr>
                <td style="width: 98px" class="auto-style14">
                    <a href="{{asset('downloads/APLICATION%20FORM_4.pdf')}}">
                        <img alt="" height="53" src="{{asset('images/download.png')}}" width="40" /></a></td>
                <td class="auto-style15">મૃત્યુ સહાય ક્લેઇમ કરવા બાબત</td>
            </tr>
            <tr>
                <td style="width: 98px" class="auto-style14">
                    <a href="{{asset('downloads/APLICATION%20FORM_2.pdf')}}">
                        <img alt="" height="53" src="{{asset('images/download.png')}}" width="40" /></a></td>
                <td class="auto-style15">અભિનંદન પત્ર</td>
            </tr>
            <tr>
                <td style="width: 98px; height: 22px;" class="auto-style14">
                    <a href="{{asset('downloads/samajik.pdf')}}">
                        <img alt="" height="53" src="{{asset('images/download.png')}}" width="40" /></a></td>
                <td style="height: 22px" class="auto-style15">સામાજીક
                    સુરક્ષા યોજના વિષે</td>
            </tr>

            <tr>
                <td style="width: 98px; height: 22px;" class="auto-style14">
                    <a href="{{asset('downloads/APLICATION_business.pdf')}}">
                        <img alt="" height="53" src="{{asset('images/download.png')}}" width="40" /></a></td>
                <td style="height: 22px" class="auto-style15">પ્રોફેશનલ ડિરેક્ટરી માટેનું અરજી ફોર્મ </td>
            </tr>

            <tr>
                <td style="width: 98px; height: 22px;" class="auto-style14">
                    <a href="{{asset('downloads/APLICATION_marriage.pdf')}}'">
                        <img alt="" height="53" src="{{asset('images/download.png')}}" width="40" /></a></td>
                <td style="height: 22px" class="auto-style15">અપરણીત યુવક-યુવતીની માહિતી માટેનું ફોર્મ </td>
            </tr>
            <tr>
                <td style="width: 98px">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td style="width: 98px">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </div>
@endsection
