<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKC Alter Knight Association</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .container {
            width: 900px;
            margin: 0px auto;
            padding: 5px 20px;
            border: 2px solid #000;
            border-radius: 10px;
        }
        .title{
            margin: 0% auto;
            padding: 0%;
            width: 90%;
        }
        .title h4{
            padding: 0%;
            margin: 0%;
            text-align: center;
        }
        .section {
            margin-bottom: 5px;
        }
        .label {
            font-weight: bold;
            font-size: 12px;
            padding-left: 30px; 
        }
        .input-box {
            display: block;
            width: 90%;
            padding: 8px;
            border: 1px solid #000;
            border-radius: 5px;
            margin: 0px auto;
            font-size: 11px;
        }
        .table {
            width: 90%;
            border-collapse: collapse;
            margin: 0px auto;
        }
        .table td, .table th {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            font-size: 12px;
        }
        .letterhead {
            width: 95%;
            position: relative;
            margin: auto;
            padding: 10px;
            box-sizing: border-box;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #c00;
        }
        .header h3 {
            margin: 3px 0;
            padding: 0px;
            font-size: 12px;
        }
        .contact {
            text-align: center;
            font-size: 14px;
        }
        .footer {
            margin-top: 2px;
            text-align: center;
            font-size: 14px;
            border-top: 2px solid black;
            padding-top: 2px;
            line-height: 5px;
        }
        .logo_a{
            position: absolute;
            bottom: 92%;
        }
        .logo_b{
            position: absolute;
            left: 84%;
            bottom: 92%;
        }
        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 10px;
            }
        }
        .sign{
            height: 60px;
            width: 91%;
            position: relative;
            margin: 0px auto;
        }
        .sign h5{
            padding: 0%;
            margin: 4%;
        }
        .pr{
            border-top: 1px solid black;
            width: 150px;
            position: absolute;
            top: 60%;
            z-index: 10;
        }
        .sc{
            border-top: 1px solid black;
            width: 150px;
            position: absolute;
            left: 75%;
            top: 60%;
            z-index: 10;
        }
        .img_l{
            position: absolute;
            left: 5%;
        }
        .img_r{
            position: absolute;
            left: 80%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="letterhead">
            <div class="logo_a">
                <img src="{{public_path('img/logo_1.png')}}" alt="" height="80" width="100">
            </div>
            <div class="header">
                <h3>CATHOLIC ALTAR SERVERS ASSOCIATION OF NIGERIA</h3>
                <h3>CATHOLIC DIOCESE OF AWKA</h3>
                <h3>CHRIST THE KING CATHOLIC PARISH</h3>
                <h3>G.R.A AWKA, ANAMBRA STATE</h3> 
            </div>
            <div class="logo_b">
                <img src="{{public_path(('img/logo_2.png'))}}" alt="" height="80" width="90">
            </div>
        </div>

        <div class="title">
            <h4>Membership Renewal Form</h4>  
        </div>
        
        <div class="section">
            <span class="label">Full Name:</span>
            <span class="input-box">{{$lastname}} {{$firstname}} {{$middlename}}</span>
        </div>
        
        <table class="table">
            <tr>
                <th>State</th>
                <th>LGA</th>
                <th>Town</th>
                <th>Date of Birth</th>
            </tr>
            <tr>
                <td>{{$state}}</td>
                <td>{{$lga}}</td>
                <td>{{$town}}</td>
                <td>{{$date}}</td>
            </tr>
        </table>
        <br>
        <div class="section">
            <span class="label">School:</span>
            <span class="input-box">{{$school}}</span>
        </div>
        
        <table class="table">
            <tr>
                <th>Class/Level</th>
                <th>Occupation</th>
            </tr>
            <tr>
                <td>{{$class}}</td>
                <td>{{$occupation}}</td>
            </tr>
        </table>
        <br>
        <div class="section">
            <span class="label">Address:</span>
            <span class="input-box">{{$address}}</span>
        </div>
        
        <div class="section">
            <span class="label">Name of Parent:</span>
            <span class="input-box">{{$parent_name}}</span>
        </div>
        
        <table class="table">
            <tr>
                <th>Father's Number</th>
                <th>Mother's Number</th>
                <th>Personal Number</th>
            </tr>
            <tr>
                <td>{{$father_number}}</td>
                <td>{{$mother_number}}</td>
                <td>{{$personal_number}}</td>
            </tr>
        </table>
        <br>
        <div class="section">
            <span class="label">I have received sacraments of:</span>
            <span class="input-box">{{$sacraments}}</span>
        </div>
        
        <div class="section">
            <span class="label">Are you willing to assist in the sacred liturgy?</span>
            <span class="input-box">{{$sacred_liturgy}}</span>
        </div>
        
        <div class="section">
            <span class="label">Are you ready to render personal participation in liturgy?</span>
            <span class="input-box">{{$personal_liturgy}}</span>
        </div>
        
        <div class="section">
            <span class="label">Are you ready to obey the executive arms of the association?</span>
            <span class="input-box">{{$obey_executive}}</span>
        </div>
        
        <div class="section">
            <span class="label">Do you agree to participate in all activities of the association?</span>
            <span class="input-box">{{$agreement}}</span>
        </div>

        <div class="sign">
            <div class="pr">
                <h5>President</h5>
            </div>
            <div class="sc">
                <h5>Secretary</h5>
            </div>
            <img src="{{public_path('img/president_signature.jpg')}}" alt="" width="50" height="40" class="img_l">
            <img src="{{public_path('img/secretary_signature.jpg')}}" alt="" width="50" height="40" class="img_r">
        </div>

        <div class="footer">
            <p>Email: christthekingchurchaltarknight@gmail.com</p>
            <p>Official Document of Catholic Altar Servers Association of Nigeria</p>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CKC Alter Knight Association</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .container {
            width: 900px;
            margin: 0px auto;
            padding: 5px 20px;
            border: 2px solid #000;
            border-radius: 10px;
        }
        .title{
            margin: 0% auto;
            padding: 0%;
            width: 90%;
        }
        .title h4{
            padding: 0%;
            margin: 0%;
            text-align: center;
        }
        .section {
            margin-bottom: 5px;
        }
        .label {
            font-weight: bold;
            font-size: 12px;
            padding-left: 30px; 
        }
        .input-box {
            display: block;
            width: 90%;
            padding: 8px;
            border: 1px solid #000;
            border-radius: 5px;
            margin: 0px auto;
            font-size: 11px;
        }
        .table {
            width: 90%;
            border-collapse: collapse;
            margin: 0px auto;
        }
        .table td, .table th {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            font-size: 12px;
        }
        .letterhead {
            width: 95%;
            position: relative;
            margin: auto;
            padding: 10px;
            box-sizing: border-box;
        }
        .header {
            text-align: center;
            border-bottom: 2px solid #c00;
        }
        .header h3 {
            margin: 3px 0;
            padding: 0px;
            font-size: 12px;
        }
        .letter{
            height: 300px;
            width: 90%;
            margin: 0% auto; 
        }
        .letter span{
            padding: 0% 15px;
            border-bottom: 1px black solid;
        }
        .letter p{
            text-align: justify;
            line-height: 30px;
        }
        .contact {
            text-align: center;
            font-size: 14px;
        }
        .footer {
            margin-top: 2px;
            text-align: center;
            font-size: 14px;
            border-top: 2px solid black;
            padding-top: 2px;
            line-height: 5px;
        }
        .logo_a{
            position: absolute;
            bottom: 92%;
        }
        .logo_b{
            position: absolute;
            left: 84%;
            bottom: 92%;
        }
        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 10px;
            }
        }
        .sign{
            height: 60px;
            width: 91%;
            position: relative;
            margin: 0px auto;
        }
        .sign h5{
            padding: 0%;
            margin: 4%;
        }
        .pr{
            border-top: 1px solid black;
            width: 150px;
            position: absolute;
            top: 60%;
            z-index: 10;
        }
        .sc{
            border-top: 1px solid black;
            width: 150px;
            position: absolute;
            left: 75%;
            top: 60%;
            z-index: 10;
        }
        .img_l{
            position: absolute;
            left: 5%;
        }
        .img_r{
            position: absolute;
            left: 80%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="letterhead">
            <div class="logo_a">
                <img src="{{public_path('img/logo_1.png')}}" alt="" height="80" width="100">
            </div>
            <div class="header">
                <h3>CATHOLIC ALTAR SERVERS ASSOCIATION OF NIGERIA</h3>
                <h3>CATHOLIC DIOCESE OF AWKA</h3>
                <h3>CHRIST THE KING CATHOLIC PARISH</h3>
                <h3>G.R.A AWKA, ANAMBRA STATE</h3> 
            </div>
            <div class="logo_b">
                <img src="{{public_path(('img/logo_2.png'))}}" alt="" height="80" width="90">
            </div>
        </div>
        
        <br><br><br><br>
        <div class="title">
            <h4>LETTER OF UNDERTAKING ( IN PERSON )</h4> 
        </div>
        
        <div class="letter">
            <p>
                I <span>{{$lastname}} {{$firstname}} {{$middlename}}</span> will be willing to assist in the sacred liturgy, will be actively involved all the activities going on in the association, will be ready to obey the executive arms of the association.
                Failure to comply to the stipulated above will attract immediate Suspension or Expulsion from the association.

            </p>
        </div>

        <div class="title">
            <h4>LETTER OF UNDERTAKING ( PARENT OR GUARDIAN )</h4> 
        </div>
        
        <div class="letter">
            <p>
                I/We <span>{{$parent_name}}</span> will be allowing my ward to come to practices and meetings of the association, where cogent reason is required in absentia , I WILL SEND IN PRIOR NOTICES AS TO SUCH. <br>
                Failure to comply to the stipulated above will attract immidiate Suspension or Expulsion of your ward from the association.


            </p>
        </div>

        <div class="sign">
            <div class="pr">
                <h5>President</h5>
            </div>
            <div class="sc">
                <h5>Secretary</h5>
            </div>
            <img src="{{public_path('img/president_signature.jpg')}}" alt="" width="50" height="40" class="img_l">
            <img src="{{public_path('img/secretary_signature.jpg')}}" alt="" width="50" height="40" class="img_r">
        </div>

        <div class="footer">
            <p>Email: christthekingchurchaltarknight@gmail.com</p>
            <p>Official Document of Catholic Altar Servers Association of Nigeria</p>
        </div>
    </div>
</body>
</html>

