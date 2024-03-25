<!DOCTYPE html>
<html>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #ffffff;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 6px;
            box-sizing: border-box;
            background-color: #f7f7f7;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path d="M2.3 4.7L6 8.4l3.7-3.7c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-4 4c-.2.2-.5.3-.7.3s-.5-.1-.7-.3l-4-4c-.4-.4-.4-1 0-1.4.4-.4 1-.4 1.4 0z"></path></svg>');
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        small {
            font-size: 12px;
            color: #888;
        }
    </style>

<body>

<form method="POST" action="form_nilai.php"`>
    Nama : <input type="text" name="nama" value="" size="30"/><br/>
    Mata Kuliah : 
    <select name ="matkul">
        <option value="DDP">Dasar dasar Pemrograman</option>
        <option value="BDI">Basis data I</option>
        <option value="Web1">Pemrograman Web</option>
    <select><br>
    Nilai UTS : <input type="text" name="nilai uts" value="" size="6"/><br/>
    Nilai UAS : <input type="text" name="nilai uas" value="" size="6"/><br/>
    Nilai tugas/praktikum: 
        <input type="text" name="nilai_tugas" value="" size="6"/><br/>
        <input type="submit" value="simpan" name="proses"/>
</form>
</body>
</html>