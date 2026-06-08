<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Event Bantuan</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#f4f6f9;
            padding:40px;
        }

        .container{
            max-width:900px;
            margin:auto;
            background:white;
            border-radius:20px;
            padding:30px;
            box-shadow:0 10px 30px rgba(0,0,0,0.08);
        }

        .header{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:25px;
        }

        .header h1{
            color:#2c3e50;
            font-size:30px;
        }

        .btn{
            background:#3498db;
            color:white;
            padding:10px 18px;
            border:none;
            border-radius:10px;
            text-decoration:none;
            font-weight:500;
            transition:0.3s;
        }

        .btn:hover{
            background:#2980b9;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        thead{
            background:#3498db;
            color:white;
        }

        th, td{
            padding:15px;
            text-align:left;
        }

        tbody tr{
            border-bottom:1px solid #eee;
            transition:0.3s;
        }

        tbody tr:hover{
            background:#f8f9fa;
        }

        .badge{
            background:#eafaf1;
            color:#27ae60;
            padding:5px 12px;
            border-radius:20px;
            font-size:12px;
            font-weight:600;
        }

        @media(max-width:768px){
            .header{
                flex-direction:column;
                gap:15px;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <div class="header">
        <h1>📋 Data Event Bantuan</h1>
        <a href="#" class="btn">+ Tambah Event</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Event</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Pembagian Sembako</td>
                <td><span class="badge">Aktif</span></td>
            </tr>

            <tr>
                <td>2</td>
                <td>Santunan Anak Yatim</td>
                <td><span class="badge">Aktif</span></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>