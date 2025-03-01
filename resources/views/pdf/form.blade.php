<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>User Profile Page</title>
    <style>
        
        body {
            font-family: 'Times New Roman', serif;
            background: url('watermark-background.png') no-repeat center center fixed;
            background-size: cover;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .spec{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        .container {
            width: 90%;
            max-width: 800px;
            margin: auto;
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            box-sizing: border-box;
            border: 2px solid #2C3E50;
        }
        header, footer {
            background: linear-gradient(to right, #8B0000, #2C3E50);
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 22px;
            font-weight: bold;
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            color: #2C3E50;
            margin-bottom: 20px;
            font-size: 24px;
            text-transform: uppercase;
            border-bottom: 3px solid #8B0000;
            padding-bottom: 10px;
        }
        .profile-section {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 8px;
            background: #f9f9f9;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .profile-section label {
            font-weight: bold;
            display: block;
            font-size: 18px;
            color: #2C3E50;
            margin-bottom: 5px;
        }
        .profile-section p {
            padding: 12px;
            border-radius: 5px;
            background: #ffffff;
            border: 1px solid #ccc;
            font-size: 16px;
            color: #555;
            font-style: italic;
        }
        
        @media screen and (max-width: 600px) {
            .container {
                width: 95%;
                padding: 15px;
            }
            header, footer {
                font-size: 18px;
                padding: 10px;
            }
            h1 {
                font-size: 15px;
            }
            .profile-section label {
                font-size: 12px;
            }
            .profile-section p {
                font-size: 10px;
            }
        }
    </style>
</head>
<body>
    {{-- <header>
        User Profile Page
    </header> --}}
    <div class="container">
        <h1>Personal Information</h1>
        <div class="profile-section">
            <label>Full Names:</label>
            <p>John Doe</p>
        </div>
        <div class="profile-section spec">
            <div>
                <label>State: </label>
                <p>Anambra</p>
            </div>
            <div>
                <label>LGA: </label>
                <p>Aguata</p>
            </div>    
            <div>
                <label>Town: </label>
                <p>Aguata</p>
            </div>    
            <div>
                <label>Date of Birth: </label>
                <p>5th July, 2006</p>
            </div>    
        </div>
        <div class="profile-section spec">
            <div>
                <label>School: </label>
                <p>Nnamdi Azikiwe University, Awka</p>
            </div>
            <div>
                <label>Class/Level: </label>
                <p>400</p>
            </div>   
            <div>
                <label>Occupation:</label>
                <p>Student</p>
            </div>   
        </div>

        <div class="profile-section">
            <label>Address:</label>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis eos unde dolor, ab consectetur explicabo?</p>
        </div>
        
        <div class="profile-section">
            <label>Name of Parent:</label>
            <p>Barr. & Lady JBC Obikwelu</p>
        </div>
        <div class="profile-section spec">
            <div>
                <label>Father's Number: </label>
                <p>08064664732</p>
            </div>
            <div>
                <label>Mother's Number: </label>
                <p>08065448392</p>
            </div>    
            <div>
                <label>Personal Number: </label>
                <p>09038652783</p>
            </div>    
        </div>
        <div class="profile-section">
            <label>I have received sacrament of:</label>
            <p>Baptism/Holy_Communion/Confirmation</p>
        </div>
        <div class="profile-section">
            <label>Are you willing to assist in the sacred liturgy:</label>
            <p>Yes</p>
        </div>
        <div class="profile-section">
            <label>Are you ready to render personal participate in liturgy:</label>
            <p>Yes</p>
        </div>
        <div class="profile-section">
            <label>Are you ready to obey the executive arms of the association:</label>
            <p>Yes</p>
        </div>
        <div class="profile-section">
            <label>Do you agree to participate in all activities of the association</label>
            <p>Yes</p>
        </div>
        
    </div>
</body>
</html>
