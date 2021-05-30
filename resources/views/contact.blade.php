@extends('layout.app')

@section('content')
    <div class="content_title"><span></span>તમારી માહિતી મોકલો...</div>

    <div class="cleaner h20"></div>
    <div id="contact_form">



            <p>
                Please Fill the Following to Send Mail.</p>
            <p>
        <form name="contact.html" method="post" action="EmailSubmit.aspx">
            <table>
                <tr>
                    <td>
                        નામ:
                    </td>
                    <td>

                        <input type="text" id="name" name="name" class="required input_field" />
                    </td>
                </tr>

                <tr>
                    <td>
                        ઈ - મેઇલ:
                    </td>
                    <td>
                        <input type="text" id="Text2" name="from" class="validate-email required input_field" />
                    </td>
                </tr>


                <tr>
                    <td>
                        વિષય:
                    </td>
                    <td>
                        <input type="text" name="subject" id="Text1" class="input_field" />
                    </td>
                </tr>

                <tr>
                    <td>
                        માહિતી:
                    </td>
                    <td>
                        <textarea id="Textarea1" name="message" rows="0" cols="0" class="required"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="મોકલો" id="submit" name="submit" class="submit_btn float_l" onclick="return submit_onclick()" />  <a href="adaathamwelfare.org/sendmail.php"></a>
                        <input type="reset" value="ફરીથી" id="reset" name="reset" class="submit_btn float_l" />
                    </td>
                </tr>
            </table>
        </form>


        <div class="cleaner h20"></div>
    </div>

    <div class="cleaner"></div>
    <h3 class="auto-style1">Our Location</h3>

    <iframe width="300" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
            src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=J+u+n+a+Bazar+Road,+Himmatnagar,+Gujarat+383001,+India&amp;aq=0&amp;oq=BAZAR++HIMMATNAGAR-383001+GUJARAT+INDIA&amp;sll=20.593684,78.96288&amp;sspn=48.749047,56.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Dhargah+Rd,+Himatnagar,+Sabarkatha,+Gujarat&amp;t=m&amp;z=14&amp;ll=23.598379,72.961901&amp;output=embed"></iframe>
    <br/>
    <br/>
@endsection
