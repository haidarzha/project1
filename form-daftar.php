<!DOCTYPE html>
<html>
    <head>
        <title>Formulir Makanan | PT.indofood</title>
    </head>

    <body>
        <div class="container">
            
            <h3>Formulir Makanan</h3>

            <form action="proses-pendaftaran.php" method="POST" class="login-email">

                <fieldset>
                    <label for="id">id: </label>
                    <div class="input-group">
                        <input type="text" name="id" placeholder="id makanan" class="input"/>
                    </div>

                    <label for="nama_makanan">nama_makanan: </label>
                    <div class="input-group">
                        <textarea name="nama_makanan" class="input"></textarea>
                    </div>

                    <label for="harga">harga: </label>
                    <div class="input-group">
                    </div>

                    <label for="stok">stok: </label>
                    <div class="input-group">
                    </div>

                    <label for="kategori">kategori: </label>
                    <div class="input-group">
                        <input type="text" name="kategori" placeholder="kategori makanan" class="input"/>
                    </div>

                    <label for="kategori">deskripsi: </label>
                    <div class="input-group">
                        <input type="text" name="deskripsi" placeholder="deskripsi makanan" class="input"/>
                    </div>

                    <label for="kategori">kode_makanan: </label>
                    <div class="input-group">
                        <input type="text" name="kode_makanan" placeholder="kode makanan" class="input"/>
                    </div>
                    
                    <div class="submit">
                        <input type="submit" value="Daftar" name="daftar" class="btn"/>
                    </div>

                </fieldset>

            </form>
        </div>
    </body>
    
    <style>
        body {
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(rgba(194, 103, 103, 0.5), rgba(58, 32, 127, 0.5)), url(images/bg5.jpg);
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        fieldset{
            padding: 15px;
            border-radius: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
        }
        .container{
        width: 500px;
        min-height: 200px;
        background: #FFF;
        border-radius: 20px;
        box-shadow: 0 0 5px rgba(0,0,0,.3);
        padding: 40px 30px;
        position: relative;
        margin: 100px auto;
        text-align: center;
        }        
        .container .login-email .input-group {
        width: 100%;
        padding: 40px;
        height: 10px;
        margin-bottom: 20px;
        position: relative;
        left: -20px;
        }
        h3{
            position: relative;
            margin-bottom: 20px;
            margin-top: -20px;
            padding:10px;
            text-align: center;
            font-size: 2rem;
        }
        li{
            position: relative;
            display: inline-block;
            padding: 5px;
        }
        ul{
            position: relative;
            top: -40px;
            left: 30%;
            padding:10px;
            list-style: none;
            width: 120px;
            min-height: 40px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            align: center;
        }
        .input{
            border-radius: 20px;
            padding: 7px;
            width: 60%;
            position: relative;
            bottom: 10px;
            left: -15px;
            top: -10px;
        }
        label{
        position: relative;
        font-size: 20px;
        color: #000;
        top: 10px;
        }

        .submit{
        text-align: center;
        margin-bottom: 15px;
        }
        .submit .btn{
        width: 80%;
        padding: 15px 20px;
        text-align: center;
        border: none;
        background: #a29bfe;
        outline: none;
        border-radius: 250px;
        font-size: 1rem;
        color: #FFF;
        cursor: pointer;
        transition: .3s;
        }
        .submit .btn:hover {
        transform: translateY(-5px);
        background: #4e4c57;
        }
    </style>
</html>