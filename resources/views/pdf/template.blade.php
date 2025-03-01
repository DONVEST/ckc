<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 800px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #000;
        }
        h2 {
            text-align: center;
            border-bottom: 3px solid #8B0000;
            padding-bottom: 5px;
        }
        .input-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
        .grid-container .full-width {
            grid-column: span 2;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        @media (max-width: 600px) {
            .grid-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>PERSONAL INFORMATION</h2>
        
        <div class="input-group">
            <label>Full Name:</label>
            <input type="text" value="John Doe" readonly>
        </div>
        
        <div class="grid-container">
            <div class="input-group">
                <label>State:</label>
                <input type="text" value="Anambra" readonly>
            </div>
            <div class="input-group">
                <label>LGA:</label>
                <input type="text" value="Awka" readonly>
            </div>
            <div class="input-group">
                <label>Town:</label>
                <input type="text" value="Awka" readonly>
            </div>
            <div class="input-group">
                <label>Date of Birth:</label>
                <input type="text" value="July 24, 2000" readonly>
            </div>
        </div>
        
        <div class="grid-container">
            <div class="input-group">
                <label>School:</label>
                <input type="text" value="Nnamdi Azikiwe University, Awka" readonly>
            </div>
            <div class="input-group">
                <label>Class Level:</label>
                <input type="text" value="400" readonly>
            </div>
            <div class="input-group">
                <label>Occupation:</label>
                <input type="text" value="Student" readonly>
            </div>
        </div>
        
        <div class="input-group">
            <label>Address:</label>
            <textarea rows="2" readonly>Lorem ipsum dolor sit amet...</textarea>
        </div>
        
        <div class="input-group">
            <label>Name of Parent:</label>
            <input type="text" value="Barr. E. E. Andy, 28 Okwuohia" readonly>
        </div>
        
        <table>
            <tr>
                <th>Father's Number</th>
                <th>Mother's Number</th>
                <th>Personal Number</th>
            </tr>
            <tr>
                <td>0803456789</td>
                <td>0809876543</td>
                <td>07012345678</td>
            </tr>
        </table>
        
        <div class="input-group">
            <label>I have received sacrament of:</label>
            <input type="text" value="Baptism, Holy Communion, Confirmation" readonly>
        </div>
        
        <div class="input-group">
            <label>Are you willing to assist in the sacred liturgy?</label>
            <input type="text" value="Yes" readonly>
        </div>
        
        <div class="input-group">
            <label>Are you ready to render personal participation in liturgy?</label>
            <input type="text" value="Yes" readonly>
        </div>
        
        <div class="input-group">
            <label>Are you ready to obey the executive arms of the association?</label>
            <input type="text" value="Yes" readonly>
        </div>
        
        <div class="input-group">
            <label>Do you agree to participate in all activities of the association?</label>
            <input type="text" value="Yes" readonly>
        </div>
    </div>
</body>
</html>
