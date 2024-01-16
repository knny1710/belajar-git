<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata SR</title>
    <style>
        html {
            animation: changeColor 3s infinite;
        }

        @keyframes changeColor {
            0%, 100% {
                background-color: yellow;
            }
            33% {
                background-color: blue;
            }
            66% {
                background-color: red;
            }
        }
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }
    </style>
</head>
<body>

    <h1>Biodata Diri</h1>
    
    <table>
        <tr>
            <td>Nama</td>
            <td>Sandi Ramadhan</td>
        </tr>
        <tr>
            <td>Tanggal Pengumpulan</td>
            <td>11 Januari 2024</td>
        </tr>
        <tr>
            <td>Foto Diri</td>
            <td><img src="CBR.JPG" alt="Foto Diri" width="100"></td>
        </tr>
    </table>

</body>
</html>

<?php 
phpinfo();
?>