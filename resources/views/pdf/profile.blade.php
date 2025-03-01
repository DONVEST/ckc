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
            background-color: #f8f9fa;
        }
        .container {
            width: 1000px;
            margin: 0px auto;
            background: #fff;
            padding: 5px 20px;
            border: 2px solid #000;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
            border-bottom: 2px solid #c00;
            padding-bottom: 5px;
        }
        .section {
            margin-bottom: 5px;
        }
        .label {
            font-weight: bold;
        }
        .input-box {
            display: block;
            width: 90%;
            padding: 8px;
            border: 1px solid #000;
            border-radius: 5px;
            margin-top: 5px;
        }
        .table {
            width: 90%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .table td, .table th {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        @media (max-width: 768px) {
            .container {
                width: 100%;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>CKC Alter Knight Association</h2>
        
        <div class="section">
            <span class="label">Full Name:</span>
            <span class="input-box">{{$name}}</span>
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
            <span class="label">Have you received sacraments of:</span>
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
    </div>
</body>
</html>
