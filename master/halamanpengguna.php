<?php
include '../config/control.php';
session_start();
error_log(0);
error_reporting(0);
$oop = new Covid();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestCovid</title>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            background-image: url(../foto/7.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }


        header {
            width: 100%;
            height: 80px;
            background-color: deepskyblue;
            border-radius: 0 0 30px 30px;
        }

        .em2 {
            font-size: 50px;
            margin-left: 10px;
        }

        table {
            color: white;
            border-color: black;
            margin-top: 5px;
            color: black;
        }


        .btn-save {
            position: absolute;
            margin: -60px 0 0 200px;
            outline: none;
            border-radius: 50px;
            border: none;
            color: black;
            font-size: 20px;
            line-height: 36px;
            text-align: center;
            width: 160px;
            height: 40px;
            cursor: pointer;
            background-color: gray;
            transition: 0.5s;
            font-family: cursive;
        }

        .btn-exit {
            position: absolute;
            margin: -60px 0 0 1000px;
            outline: none;
            border-radius: 50px;
            border: none;
            color: black;
            width: 160px;
            height: 40px;
            cursor: pointer;
            background-color: gray;
            transition: 0.5s;
            font-size: 20px;
            line-height: 36px;
            text-align: center;
            text-decoration: none;
            font-family: cursive;
        }

        .btn-save:hover {
            background-color: white;
            color: rgb(11, 11, 253);
        }

        .be {
            margin: -25px 0 0 360px;
            font-size: 20px;
        }

        .tex1 {
            font-family: century-gothic;
            outline: none;
            border: none;
            border-bottom: 4px 
            solid gray;
            background: transparent;
            text-align: center;
            position: absolute;
            margin: -60px 0 0 425px;
            color: white;
            font-size: 20px;
        }

        .tex2 {
            font-family: century-gothic;
            outline: none;
            border: none;
            border-bottom: 4px solid gray;
            background: transparent;
            text-align: center;
            position: absolute;
            margin: -60px 0 0 700px;
            color: white;
            font-size: 20px;
        }

        footer>.foot {
            width: 100%;
            height: 50px;
            text-align: center;
            line-height: 45px;
            background-color:  deepskyblue;
            border-radius: 70px 70px 0 0;
        }

        @media (max-width: 700px) {
            .be {
                margin: -2px 0 0 5px;
                font-size: 10px;
            }

            .em2 {
                font-size: 25px;
                margin-left: 5px;
            }

            .btn-save {
                margin: -40px 0 0 5px;
                width: 80px;
                height: 25px;
            }

            .tex1 {
                margin: -2.5px 0 0 110px;
                width: 190px;
            }

            .tex2 {
                margin: 20px 0 0 110px;
                width: 190px;
            }

            .btn-refresh {
                width: 80px;
                height: 25px;
                margin: -40px 0 0 330px;
                text-align: center;
                font-size: 17px;
                font-family: cursive;
                overflow: hidden;
                line-height: 22px;
            }

            .btn-exit {
                margin: -75px 0 0 350px;
                font-size: 25px;
                position: absolute;
            }
        }
    </style>
</head>

<body>
    <!-- This Footer -->
    <header>
        <em style="color: red" class="em2">Test</em><em class="em2">Resiko</em><em style="color: red" class="em2">Anda</em>
        <div class="be">PENILAIAN RESIKO PRIBADI TERKAIT COVID-19</div>
    </header>
    <table border="1" class="resp" cellspacing="0" cellpading="5" align="center">
        <tr>
            <th style="color: white;">NO</th>
            <th style="color: white;">KEGIATAN</th>
            <th style="color: white;">Click Jika Benar</th>
        </tr>
        <tr>
            <th style="color: white;">A.</th>
            <th style="color: white;">POTENSI TERTULAR DI RUMAH</th>
            <td></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">1</td>
            <td style="color: white;">Saya pergi keluar rumah</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd1"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">2</td>
            <td style="color: white;">Saya menggunakan transportasi umum : online, angkot, bus, taksi, kereta api</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd2"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">3</td>
            <td style="color: white;" >Saya tidak memakai masker pada saat berkumpul dengan orang lain.</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd3"></td>
        </tr>
        <tr>
            <td style="color: white;"align="center">4</td>
            <td style="color: white;" >Saya berjabat tangan dengan orang lain</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd4"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">5</td>
            <td style="color: white;">Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah sebelum pegang kemudi mobil/motor.</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd5"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">6</td>
            <td style="color: white;">Saya menyentuh benda / uang yang juga disentuh orang lain.</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd6"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">7</td>
            <td style="color: white;">Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : belanja, bekerja, belajar, ibadah.</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd7"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">8</td>
            <td style="color: white;">Saya makan diluar rumah (warung / restaurant)</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd8"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">9</td>
            <td style="color: white;">Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan.</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd9"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">10</td>
            <td style="color: white;">Saya berada di wilayah kelurahan tempat pasien tertular</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd10"></td>
        </tr>
        <tr>
            <th style="color: white;">B.</th>
            <th style="color: white;">POTENSI TERTULAR DI DALAM RUMAH</th>
            <td></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">11</td>
            <td style="color: white;">Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan sebelum pegang gagang(handle) pintu masuk rumah.</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd11"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">12</td>
            <td style="color: white;">Saya tidak mencuci tangan dengan sabun setelah tiba di rumah.</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd12"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">13</td>
            <td style="color: white;">Saya tidak meyediakan : tissue basah/antiseptic, masker, sabun antiseptic bagi keluarga dirumah.</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd13"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">14</td>
            <td style="color: white;">Saya tidak segera merendam baju & celana bekas pakai di luar rumah kedalam air panas/sabun.</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd14"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">15</td>
            <td style="color: white;">Saya tidak segera mandi keramas setelah saya tiba di rumah.</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd15"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">16</td>
            <td style="color: white;">Saya tidak mesosialisasikan check list penilaian resiko pribadi ini kepada keluarga di rumah</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd16"></td>
        </tr>
        <tr>
            <th style="color: white;">C.</th>
            <th style="color: white;">DAYA TAHAN TUBUH(IMUNITAS)</th>
            <td></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">17</td>
            <td style="color: white;">Saya dalam sehari tidak kena cahaya matahari minimal 15 menit</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd17"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">18</td>
            <td style="color: white;">Saya tidak jalan kaki / berolahraga minimal 30 menit setiap hari</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd18"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">19</td>
            <td style="color: white;">Saya jarang minum vitamin C & E, dan kurang tidur</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd19"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">20</td>
            <td style="color: white;">Usia saya diatas 60 tahun</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd20"></td>
        </tr>
        <tr>
            <td style="color: white;" align="center">21</td>
            <td style="color: white;">Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik</td>
            <td align="center"><input type="checkbox" name="ya" value="1" id="rd21"></td>
        </tr>
    </table>
    <br>
    <br>
    <br>
    <br>
    <br>
    <input type="submit" value="Cek hasil" onclick="test()" class="btn-save">
    <input type="text" id="keputusan" class="tex1" readonly>
    <input type="text" id="total" class="tex2" readonly>
    <a href="../exit.php" class="btn-exit" onclick="return confirm('Apakah Yakin ingin meninggalkan Halaman?')">Exit</a>
    <br>
    <!-- This Footer -->
    <footer>
        <div  class="foot">
            <strong>Program By : MUHAMMAD FAJAR SHODIQ</strong>
        </div>
    </footer>
    <!-- This js Script by RizalIhwan -->
    <script src="logika.js"></script>
</body>

</html>