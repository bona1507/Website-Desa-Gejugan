<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
  <div id='section'>
    <div id='table_0' sheetName='FORM'>
      <body>
        <table style='border-collapse:collapse; table-layout:fixed;width:587pt'>
          <tr>
            <td colspan="26"></td>
            <td colspan="7" rowspan="2" class="x110" width="168" style="border: 1px solid windowtext; height: 29.25pt;">Kode. F-2.29</td>
          </tr>
          <tr>
            <td colspan='33' class='x131'></td>
            <td style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td colspan='6' class='x133'>Pemerintah Desa/ Kelurahan</td>
            <td colspan='2' rowspan='3' class='x134'></td>
            <td colspan='4' class='x135'>: Gejugan</td>
            <td colspan='10' class='x137' style='text-align:right'>Ket :</td>
            <td colspan='3' class='x139'>Lembar 1</td>
            <td colspan='8' class='x140'>: Untuk yang bersangkutan</td>
            <td style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td colspan='6' class='x133'>Kecamatan</td>
            <td colspan='4' class='x135'>: Pajarakan</td>
            <td colspan='10' class='x136'></td>
            <td colspan='3' class='x139'>Lembar 2</td>
            <td colspan='8' class='x140'>: Untuk UPTD/ Instansi Pelaksana</td>
            <td style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td colspan='6' class='x133'>Kabupaten/ Kota</td>
            <td colspan='4' class='x135'>: Probolinggo</td>
            <td colspan='10' class='x136'></td>
            <td colspan='3' class='x139'>Lembar 3</td>
            <td colspan='8' class='x140'>: Untuk Desa/Kelurahan</td>
            <td style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td colspan='22' class='x136'></td>
            <td colspan='3' class='x139'>Lembar 4</td>
            <td colspan='8' class='x140'>: Untuk Kecamatan</td>
            <td style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td colspan='8' class='x133'>Kode Wilayah</td>
            <td colspan='10' class='x135'>: 61287</td>
            <td style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='33' height='20' class='x125' style='height:15pt;'>SURAT KETERANGAN KEMATIAN</td>
            <td id='t10' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='33' height='20' class='x127' style='height:15pt;'>No. Reg: </td>
            <td id='t11' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td colspan='6' class='x143' style='height:15pt;'>Nama Kepala Keluarga</td>
            <td class='x66'>:</td>
            @foreach (str_split($namaKepalaKeluarga) as $letter)
                <td class='x82'>{{ $letter }}</td>
            @endforeach
            @for ($i = strlen($namaKepalaKeluarga); $i < 27; $i++)
                <td class='x82'></td>
            @endfor
            <td id='t13' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td colspan='6' class='x143' style='height:15pt;'>Nomor Kartu Keluarga</td>
            <td class='x66'>:</td>
            @foreach (str_split($nomorKartuKeluarga) as $letter)
                <td class='x82'>{{ $letter }}</td>
            @endforeach
            @for ($i = strlen($nomorKartuKeluarga); $i < 27; $i++)
                <td class='x82'></td>
            @endfor
            <td colspan='10' class='x66' style='mso-ignore:colspan;'></td>
            <td id='t14' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td colspan='33' height='13.5pt' class='x128' style='border-right:2px solid windowtext;height:13.5pt;'>JENAZAH</td>
            <td id='t16' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x89'>1</td>
            <td colspan='5' class='x145'>NIK</td>
            <td class='x66'>:</td>
            @foreach (str_split($nomorIndukKependudukanJenazah) as $letter)
            <td class='x82'>{{ $letter }}</td>
            @endforeach

            @for ($i = strlen($nomorIndukKependudukanJenazah); $i < 27; $i++)
            <td class='x82'></td>
            @endfor
            <td colspan='10' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t17' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x91'>2</td>
            <td colspan='5' class='x145'>Nama Lengkap</td>
            <td class='x66'>:</td>
            @foreach (str_split($namaLengkapJenazah) as $letter)
              <td class='x82'>{{ $letter }}</td>
            @endforeach

            @for ($i = strlen($namaLengkapJenazah); $i < 27; $i++)
              <td class='x82'></td>
            @endfor
            <td class='x90'></td>
            <td id='t18' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x91'>3</td>
            <td colspan='5' class='x145'>Jenis Kelamin</td>
            <td class='x66'>:&nbsp;</td>
            <td class='x82'>{{$jenisKelaminJenazah}}</td>
            <td class='x71'></td>
            <td colspan='3' class='x146'>1. Laki-Laki</td>
            <td class='x88'></td>
            <td colspan='3' class='x146'>2. Perempuan&nbsp;</td>
            <td colspan='17' class='x163' style='border-right:2px solid windowtext;'></td>
            <td id='t19' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x91'>4</td>
            <td colspan='5' class='x145'>Tanggal Lahir</td>
            <td class='x66'>:</td>
            <td colspan='2' class='x108'
              style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;border-top:1px solid windowtext;'>
              Tgl</td>
            <td class='x82'>{{ $tanggalLahirJenazah }}</td>
            <td colspan='3' class='x103'>Bln</td>
            <td class='x82'>{{ $bulanLahirJenazah }}</td>
            <td colspan='3' class='x103' style='border-right:1px solid windowtext;'>Thn</td>
            <td class='x82'>{{ $tahunLahirJenazah }}</td>
            <td colspan='3' class='x103'>Umur</td>
            <td class='x82'>{{ $umurJenazah }}</td>
            <td colspan='4' class='x165' style='border-right:2px solid windowtext;'></td>
            <td id='t20' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x91'>5</td>
            <td colspan='5' class='x145'>Tempat<span style='mso-spacerun:yes;'>&nbsp; </span>Kelahiran</td>
            <td class='x66'>:</td>
            @foreach (str_split($tempatKelahiranJenazah) as $letter)
                <td class='x82'>{{ $letter }}</td>
            @endforeach

            @for ($i = strlen($tempatKelahiranJenazah); $i < 12; $i++)
                <td class='x82'></td>
            @endfor
            <td colspan='4' class='x116' style='border-right:1px solid windowtext;'>Kode Prov.</td>
            <td class='x82'>x</td>
            <td class='x82'>x</td>
            <td colspan='4' class='x103' style='border-right:1px solid windowtext;'>Kode Kab.</td>
            <td class='x82'>x</td>
            <td class='x82'>x</td>
            <td colspan='2' class='x141' style='border-right:2px solid windowtext;'></td>
            <td id='t21' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x91'>6</td>
            <td colspan='5' class='x145'>Agama</td>
            <td class='x66'>:</td>
            <td class='x82'>{{$agamaJenazah}}</td>
            <td class='x86'></td>
            <td class='x147'>1.</td>
            <td colspan='2' class='x148' style='border-bottom:1px solid windowtext;'>Islam</td>
            <td class='x147'>2.</td>
            <td colspan='2' class='x148' style='border-bottom:1px solid windowtext;'>Kristen</td>
            <td class='x147' style='border-top:1px solid windowtext;'>3.</td>
            <td colspan='2' class='x148' style='border-bottom:1px solid windowtext;'>Katolik</td>
            <td class='x147' style='border-top:1px solid windowtext;'>4.</td>
            <td colspan='2' class='x143'>Hindu</td>
            <td class='x149'>5.</td>
            <td colspan='2' class='x143'>Budha</td>
            <td class='x149'>6.</td>
            <td colspan='2' class='x143'>Lainnya</td>
            <td colspan='6' class='x142' style='border-right:2px solid windowtext;'></td>
            <td id='t22' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x91'>7</td>
            <td colspan='5' class='x145'>Pekerjaan&nbsp;</td>
            <td class='x66'>:</td>
            <td colspan='13' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>
            {{$pekerjaanJenazah}}</td>
            <td colspan='13' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t23' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x91'>8</td>
            <td colspan='5' class='x145'>Alamat</td>
            <td class='x66'>:</td>
            <td colspan='23' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$alamatJenazah}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t24' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='6' height='20' class='x159' style='height:15pt;'></td>
            <td class='x66'></td>
            <td colspan='5' class='x152' style='border-right:1px solid windowtext;'>a.Desa /Kelurahan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$desaJenazah}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>c.Kab/Kota</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kabJenazah}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t25' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='6' height='20' class='x159' style='height:15pt;'></td>
            <td class='x66'></td>
            <td colspan='5' class='x151' style='border-right:1px solid windowtext;'>b.Kecamatan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kecJenazah}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>d.Provinsi</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$provJenazah}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t26' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x91'>9</td>
            <td colspan='5' class='x143'>Anak ke</td>
            <td class='x66'>:</td>
            <td class='x82'>{{$anakKeJenazah}}</td>
            <td class='x83'></td>
            <td colspan='5' class='x143'>1, 2, 3, 4<span style='mso-spacerun:yes;'>&nbsp; </span>………….</td>
            <td colspan='19' class='x142' style='border-right:2px solid windowtext;'></td>
            <td id='t27' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x91'>10</td>
            <td colspan='5' class='x143'>Tanggal Kematian</td>
            <td class='x66'>:</td>
            <td colspan='2' class='x108' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>
              Tgl</td>
            <td class='x82'>{{$tanggalMatiJenazah}}</td>
            <td colspan='3' class='x103' style='border-right:1px solid windowtext;'>Bln</td>
            <td class='x82'>{{$bulanMatiJenazah}}</td>
            <td colspan='3' class='x103' style='border-right:1px solid windowtext;'>Thn</td>
            <td class='x82'>{{$tahunMatiJenazah}}</td>
            <td colspan='10' class='x168' style='border-right:2px solid windowtext;'></td>
            <td id='t28' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x91'>11</td>
            <td colspan='5' class='x143'>Pukul</td>
            <td class='x66'>:</td>
            <td class='x82'>x</td>
            <td class='x82'>x</td>
            <td class='x82' style='border-top:1px solid windowtext;'>x</td>
            <td class='x82'>x</td>
            <td colspan='22' class='x103' style='border-right:2px solid windowtext;'></td>
            <td id='t29' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='15pt' class='x91'>12</td>
            <td colspan='5' class='x143'>Sebab Kematian&nbsp;</td>
            <td class='x66'>:</td>
            <td class='x82' style='border-top:1px solid windowtext;'>{{$sebabKematianJenazah}}</td>
            <td colspan='4' class='x153'>1.Sakit Biasa/ Tua</td>
            <td class='x154'></td>
            <td colspan='4' class='x143'>2. Wabah Penyakit&nbsp;</td>
            <td class='x74'></td>
            <td colspan='4' class='x143'>3.Kecelakaan&nbsp;</td>
            <td colspan='11' class='x142' style='border-right:2px solid windowtext;'></td>
            <td id='t30' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='6' height='20' class='x159' style='height:15pt;'></td>
            <td class='x66'></td>
            <td class='x75'></td>
            <td colspan='4' class='x155' style='border-bottom:1px solid windowtext;'>4.Kriminalitas</td>
            <td class='x154'></td>
            <td colspan='4' class='x155' style='border-bottom:1px solid windowtext;'>5. Bunuh Diri</td>
            <td class='x74'></td>
            <td colspan='4' class='x155' style='border-bottom:1px solid windowtext;'>6. Lainnya</td>
            <td colspan='11' class='x142' style='border-right:2px solid windowtext;'></td>
            <td id='t31' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>13</td>
            <td colspan='5' class='x143'>Tempat Kematian&nbsp;</td>
            <td class='x66'>:</td>
            @foreach (str_split($tempatKematianJenazah) as $letter)
                <td class='x82'>{{ $letter }}</td>
            @endforeach

            @for ($i = strlen($tempatKematianJenazah); $i < 27; $i++)
                <td class='x82'></td>
            @endfor
            <td colspan='10' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t32' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>14</td>
            <td colspan='5' class='x143'>Yang Menerangkan&nbsp;</td>
            <td class='x66'>:</td>
            <td class='x82'>{{$yangMenerangkanKematianJenazah}}</td>
            <td class='x76'></td>
            <td colspan='2' class='x146'>1. Dokter&nbsp;</td>
            <td class='x74'></td>
            <td colspan='5' class='x146'>2. Tenaga Kesehatan&nbsp;</td>
            <td class='x74'></td>
            <td colspan='3' class='x84' style='mso-ignore:colspan;'>3. Kepolisian&nbsp;</td>
            <td class='x84'></td>
            <td colspan='3' class='x101'>4. Lainnya&nbsp;</td>
            <td colspan='8' class='x131' style='border-right:2px solid windowtext;'></td>
            <td id='t33' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td colspan='33' height='13.5pt' class='x156' style='border-right:2px solid windowtext;height:13.5pt;'>AYAH</td>
            <td id='t35' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='20' class='x91' style='height:15pt;'>1</td>
            <td colspan='5' class='x143'>NIK</td>
            <td class='x66'>:</td>
            @foreach (str_split($nomorIndukKependudukanAyah) as $letter)
              <td class='x82'>{{ $letter }}</td>
            @endforeach
            @for ($i = strlen($nomorIndukKependudukanAyah); $i < 27; $i++)
              <td class='x82'></td>
            @endfor
            <td colspan='10' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t36' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
          <td height='20' class='x91' style='height:15pt;'>2</td>
            <td colspan='5' class='x143'>Nama Lengkap</td>
            <td class='x66'>:</td>
            @foreach (str_split($namaLengkapAyah) as $letter)
              <td class='x82'>{{ $letter }}</td>
            @endforeach
            @for ($i = strlen($namaLengkapAyah); $i < 27; $i++)
              <td class='x82'></td>
            @endfor
            <td class='x92'></td>
            <td id='t37' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='20' class='x91' style='height:15pt;'>3</td>
            <td colspan='5' class='x143'>Tanggal Lahir</td>
            <td class='x66'>:</td>
            <td class='x82'>{{ $tanggalLahirAyah }}</td>
            <td colspan='3' class='x103'>Bln</td>
            <td class='x82'>{{ $bulanLahirAyah }}</td>
            <td colspan='3' class='x103' style='border-right:1px solid windowtext;'>Thn</td>
            <td class='x82'>{{ $tahunLahirAyah }}</td>
            <td colspan='3' class='x103'>Umur</td>
            <td class='x82'>{{ $umurAyah }}</td>
            <td colspan='4' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t38' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='20' class='x91' style='height:15pt;'>4</td>
            <td colspan='5' class='x143'>Pekerjaan</td>
            <td class='x66'>:</td>
            <td colspan='13' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$pekerjaanAyah}}
            </td>
            <td colspan='13' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t39' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td height='20' class='x91' style='height:15pt;'>5</td>
            <td colspan='5' class='x143'>Alamat</td>
            <td class='x66'>:</td>
            <td colspan='5' class='x152' style='border-right:1px solid windowtext;'>a.Desa /Kelurahan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$desaAyah}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>c.Kab/Kota</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kabAyah}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t40' style='overflow:hidden;'></td>
          </tr>
          <tr height='15pt'>
            <td colspan='6' height='15pt' class='x175' style='height:15pt;'></td>
            <td class='x66'></td>
            <td colspan='5' class='x151' style='border-right:1px solid windowtext;'>b.Kecamatan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kecAyah}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>d.Provinsi</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$provAyah}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t41' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='33' height='18' class='x156' style='border-right:2px solid windowtext;height:13.5pt;'>
              IBU</td>
            <td id='t35' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>1</td>
            <td colspan='5' class='x143'>NIK</td>
            <td class='x66'>:</td>
                @foreach (str_split($nomorIndukKependudukanIbu) as $letter)
                    <td class='x82'>{{ $letter }}</td>
                @endforeach

                @for ($i = strlen($nomorIndukKependudukanIbu); $i < 27; $i++)
                    <td class='x82'></td>
                @endfor
            <td colspan='10' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t36' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>2</td>
            <td colspan='5' class='x143'>Nama Lengkap</td>
            <td class='x66'>:</td>
                @foreach (str_split($namaLengkapIbu) as $letter)
                    <td class='x82'>{{ $letter }}</td>
                @endforeach

                @for ($i = strlen($namaLengkapIbu); $i < 27; $i++)
                    <td class='x82'></td>
                @endfor
            <td class='x92'></td>
            <td id='t37' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>3</td>
            <td colspan='5' class='x143'>Tanggal Lahir</td>
            <td class='x66'>:</td>
            <td class='x82'>{{ $tanggalLahirIbu }}</td>
            <td colspan='3' class='x103'>Bln</td>
            <td class='x82'>{{ $bulanLahirIbu }}</td>
            <td colspan='3' class='x103' style='border-right:1px solid windowtext;'>Thn</td>
            <td class='x82'>{{ $tahunLahirIbu }}</td>
            <td colspan='3' class='x103'>Umur</td>
            <td class='x82'>{{ $umurIbu }}</td>
            <td colspan='4' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t38' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>4</td>
            <td colspan='5' class='x143'>Pekerjaan</td>
            <td class='x66'>:</td>
            <td colspan='13' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$pekerjaanIbu}}
            </td>
            <td colspan='13' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t39' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>5</td>
            <td colspan='5' class='x143'>Alamat</td>
            <td class='x66'>:</td>
            <td colspan='5' class='x152' style='border-right:1px solid windowtext;'>a.Desa /Kelurahan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$desaIbu}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>c.Kab/Kota</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kabIbu}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t40' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='6' height='20' class='x175' style='height:15pt;'></td>
            <td class='x66'></td>
            <td colspan='5' class='x151' style='border-right:1px solid windowtext;'>b.Kecamatan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kecIbu}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>d.Provinsi</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$provIbu}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t41' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='33' height='18' class='x156' style='border-right:2px solid windowtext;height:13.5pt;'>
              PELAPOR</td>
            <td id='t35' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>1</td>
            <td colspan='5' class='x143'>NIK</td>
            <td class='x66'>:</td>
                @foreach (str_split($nomorIndukKependudukanPelapor) as $letter)
                    <td class='x82'>{{ $letter }}</td>
                @endforeach

                @for ($i = strlen($nomorIndukKependudukanPelapor); $i < 27; $i++)
                    <td class='x82'></td>
                @endfor
            <td colspan='10' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t36' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>2</td>
            <td colspan='5' class='x143'>Nama Lengkap</td>
            <td class='x66'>:</td>
                @foreach (str_split($namaLengkapPelapor) as $letter)
                    <td class='x82'>{{ $letter }}</td>
                @endforeach

                @for ($i = strlen($namaLengkapPelapor); $i < 27; $i++)
                    <td class='x82'></td>
                @endfor
            <td class='x92'></td>
            <td id='t37' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>3</td>
            <td colspan='5' class='x143'>Tanggal Lahir</td>
            <td class='x66'>:</td>
            <td class='x82'>{{ $tanggalLahirPelapor }}</td>
            <td colspan='3' class='x103'>Bln</td>
            <td class='x82'>{{ $bulanLahirPelapor }}</td>
            <td colspan='3' class='x103' style='border-right:1px solid windowtext;'>Thn</td>
            <td class='x82'>{{ $tahunLahirPelapor }}</td>
            <td colspan='3' class='x103'>Umur</td>
            <td class='x82'>{{ $umurPelapor }}</td>
            <td colspan='4' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t38' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>4</td>
            <td colspan='5' class='x143'>Pekerjaan</td>
            <td class='x66'>:</td>
            <td colspan='13' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$pekerjaanPelapor}}
            </td>
            <td colspan='13' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t39' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>5</td>
            <td colspan='5' class='x143'>Alamat</td>
            <td class='x66'>:</td>
            <td colspan='5' class='x152' style='border-right:1px solid windowtext;'>a.Desa /Kelurahan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$desaPelapor}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>c.Kab/Kota</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kabPelapor}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t40' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='6' height='20' class='x175' style='height:15pt;'></td>
            <td class='x66'></td>
            <td colspan='5' class='x151' style='border-right:1px solid windowtext;'>b.Kecamatan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kecPelapor}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>d.Provinsi</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$provPelapor}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t41' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='33' height='18' class='x156' style='border-right:2px solid windowtext;height:13.5pt;'>
              SAKSI 1</td>
            <td id='t35' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>1</td>
            <td colspan='5' class='x143'>NIK</td>
            <td class='x66'>:</td>
                @foreach (str_split($nomorIndukKependudukanSaksi1) as $letter)
                    <td class='x82'>{{ $letter }}</td>
                @endforeach

                @for ($i = strlen($nomorIndukKependudukanSaksi1); $i < 27; $i++)
                    <td class='x82'></td>
                @endfor
            <td colspan='10' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t36' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>2</td>
            <td colspan='5' class='x143'>Nama Lengkap</td>
            <td class='x66'>:</td>
                @foreach (str_split($namaLengkapSaksi1) as $letter)
                    <td class='x82'>{{ $letter }}</td>
                @endforeach

                @for ($i = strlen($namaLengkapSaksi1); $i < 27; $i++)
                    <td class='x82'></td>
                @endfor
            <td class='x92'></td>
            <td id='t37' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>3</td>
            <td colspan='5' class='x143'>Tanggal Lahir</td>
            <td class='x66'>:</td>
            <td class='x82'>{{ $tanggalLahirSaksi1 }}</td>
            <td colspan='3' class='x103'>Bln</td>
            <td class='x82'>{{ $bulanLahirSaksi1 }}</td>
            <td colspan='3' class='x103' style='border-right:1px solid windowtext;'>Thn</td>
            <td class='x82'>{{ $tahunLahirSaksi1 }}</td>
            <td colspan='3' class='x103'>Umur</td>
            <td class='x82'>{{ $umurSaksi1 }}</td>
            <td colspan='4' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t38' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>4</td>
            <td colspan='5' class='x143'>Pekerjaan</td>
            <td class='x66'>:</td>
            <td colspan='13' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$pekerjaanSaksi1}}
            </td>
            <td colspan='13' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t39' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>5</td>
            <td colspan='5' class='x143'>Alamat</td>
            <td class='x66'>:</td>
            <td colspan='5' class='x152' style='border-right:1px solid windowtext;'>a.Desa /Kelurahan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$desaSaksi1}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>c.Kab/Kota</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kabSaksi1}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t40' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='6' height='20' class='x175' style='height:15pt;'></td>
            <td class='x66'></td>
            <td colspan='5' class='x151' style='border-right:1px solid windowtext;'>b.Kecamatan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kecSaksi1}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>d.Provinsi</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$provSaksi1}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t41' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='33' height='18' class='x156' style='border-right:2px solid windowtext;height:13.5pt;'>
              SAKSI 2</td>
            <td id='t35' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>1</td>
            <td colspan='5' class='x143'>NIK</td>
            <td class='x66'>:</td>
                @foreach (str_split($nomorIndukKependudukanSaksi2) as $letter)
                    <td class='x82'>{{ $letter }}</td>
                @endforeach

                @for ($i = strlen($nomorIndukKependudukanSaksi2); $i < 27; $i++)
                    <td class='x82'></td>
                @endfor
            <td colspan='10' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t36' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>2</td>
            <td colspan='5' class='x143'>Nama Lengkap</td>
            <td class='x66'>:</td>
                @foreach (str_split($namaLengkapSaksi2) as $letter)
                    <td class='x82'>{{ $letter }}</td>
                @endforeach

                @for ($i = strlen($namaLengkapSaksi2); $i < 27; $i++)
                    <td class='x82'></td>
                @endfor
            <td class='x92'></td>
            <td id='t37' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>3</td>
            <td colspan='5' class='x143'>Tanggal Lahir</td>
            <td class='x66'>:</td>
            <td class='x82'>{{ $tanggalLahirSaksi2 }}</td>
            <td colspan='3' class='x103'>Bln</td>
            <td class='x82'>{{ $bulanLahirSaksi2 }}</td>
            <td colspan='3' class='x103' style='border-right:1px solid windowtext;'>Thn</td>
            <td class='x82'>{{ $tahunLahirSaksi2 }}</td>
            <td colspan='3' class='x103'>Umur</td>
            <td class='x82'>{{ $umurSaksi2 }}</td>
            <td colspan='4' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t38' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>4</td>
            <td colspan='5' class='x143'>Pekerjaan</td>
            <td class='x66'>:</td>
            <td colspan='13' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$pekerjaanSaksi2}}
            </td>
            <td colspan='13' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t39' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td height='20' class='x91' style='height:15pt;'>5</td>
            <td colspan='5' class='x143'>Alamat</td>
            <td class='x66'>:</td>
            <td colspan='5' class='x152' style='border-right:1px solid windowtext;'>a.Desa /Kelurahan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$desaSaksi2}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>c.Kab/Kota</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kabSaksi2}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t40' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='6' height='20' class='x175' style='height:15pt;'></td>
            <td class='x66'></td>
            <td colspan='5' class='x151' style='border-right:1px solid windowtext;'>b.Kecamatan</td>
            <td colspan='6' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$kecSaksi2}}
            </td>
            <td class='x66'></td>
            <td colspan='4' class='x151' style='border-right:1px solid windowtext;'>d.Provinsi</td>
            <td colspan='7' class='x82' style='border-right:1px solid windowtext;border-bottom:1px solid windowtext;'>{{$provSaksi2}}
            </td>
            <td colspan='3' class='x161' style='border-right:2px solid windowtext;'></td>
            <td id='t41' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='19' height='20' style='mso-ignore:colspan;height:15pt;'></td>
            @php
                $currentDate = date('d-m-Y');
            @endphp
            <td colspan='14' class='x94'>Gejugan, {{$currentDate}}</td>
            <td id='t76' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='19' height='20' style='mso-ignore:colspan;height:15pt;'></td>
            <td colspan='14' class='x94'>KEPALA DESA GEJUGAN</td>
            <td id='t77' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='33' height='20' class='x64' style='mso-ignore:colspan;height:15pt;'></td>
            <td id='t78' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='33' height='20' class='x64' style='mso-ignore:colspan;height:15pt;'></td>
            <td id='t79' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='33' height='20' class='x64' style='mso-ignore:colspan;height:15pt;'></td>
            <td id='t80' style='overflow:hidden;'></td>
          </tr>
          <tr height='20' style='mso-height-source:userset;height:15pt'>
            <td colspan='3' height='20' style='mso-ignore:colspan;height:15pt;'></td>
            <td colspan='6' class='x96'></td>
            <td class='x80'></td>
            <td class='x80'></td>
            <td class='x80'></td>
            <td class='x80'></td>
            <td class='x80'></td>
            <td class='x80'></td>
            <td colspan='4' style='mso-ignore:colspan;'></td>
            <td colspan='14' class='x97'>Ley Cin Ivang Deny</td>
            <td id='t81' style='overflow:hidden;'></td>
          </tr>
        </table>
      </body>
    </div>
  </div>
  <style>
    tr {
        mso-height-source: auto;
        mso-ruby-visibility: none;
    }

    col {
        mso-width-source: auto;
        mso-ruby-visibility: none;
    }

    br {
        mso-data-placement: same-cell;
    }

    ruby {
        ruby-align: left;
    }

    .style0 {
        mso-number-format: General;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        color: #000000;
        font-size: 10pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, ;
        mso-protection: locked visible;
        mso-style-name: Normal;
        mso-style-id: 0;
    }

    td {
        mso-style-parent: style0;
        mso-number-format: General;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        color: #000000;
        font-size: 10pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, ;
        mso-protection: locked visible;
        mso-ignore: padding;
    }

    .x15 {
        mso-number-format: General;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 10pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, ;
        mso-protection: locked visible;
    }

    .x64 {
        mso-number-format: General;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x66 {
        mso-number-format: General;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x74 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x75 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 1px solid windowtext;
        border-right: none;
        border-bottom: none;
        border-left: none;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x76 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 1px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x80 {
        mso-number-format: General;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x82 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: normal;
        font-style: normal;
        font-family: Arial, sans-serif;
        /* border-top: 0.5px solid;
        border-right: 0.5px solid;
        border-bottom: 0.5px solid;
        border-left: 0.5px solid; */
        mso-protection: locked visible;
    }

    .x83 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 1px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x84 {
        mso-number-format: General;
        text-align: general;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 1px solid windowtext;
        border-right: none;
        border-bottom: none;
        border-left: none;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x86 {
        mso-number-format: General;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 1px solid windowtext;
        border-right: none;
        border-bottom: none;
        border-left: 1px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x88 {
        mso-number-format: General;
        text-align: general;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x89 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 2px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x90 {
        mso-number-format: General;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: 2px solid windowtext;
        border-bottom: none;
        border-left: none;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x91 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 2px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x92 {
        mso-number-format: General;
        text-align: general;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 10pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, ;
        border-top: none;
        border-right: 2px solid windowtext;
        border-bottom: none;
        border-left: none;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x94 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x96 {
        mso-number-format: General;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x97 {
        mso-number-format: General;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 10pt;
        font-weight: 700;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x101 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x103 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 1px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x108 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 1px solid windowtext;
        border-right: none;
        border-bottom: 1px solid windowtext;
        border-left: none;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x110 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 16pt;
        font-weight: 700;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 1px solid windowtext;
        border-right: none;
        border-bottom: none;
        border-left: 1px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x116 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 1px solid windowtext;
        border-right: none;
        border-bottom: none;
        border-left: 1px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x125 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 11pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: underline;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x127 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 10pt;
        font-weight: 700;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x128 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 700;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 2px solid windowtext;
        border-right: none;
        border-bottom: none;
        border-left: 2px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x131 {
        mso-number-format: General;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 10pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, ;
        mso-protection: locked visible;
    }

    .x133 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x134 {
        mso-number-format: General;
        text-align: left;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 10pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, ;
        mso-protection: locked visible;
    }

    .x135 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 700;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x136 {
        mso-number-format: General;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x137 {
        mso-number-format: General;
        text-align: right;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x139 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x140 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x141 {
        mso-number-format: General;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 10pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, ;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 1px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x142 {
        mso-number-format: General;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x143 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x145 {
        mso-number-format: General;
        text-align: general;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x146 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 1px solid windowtext;
        border-right: none;
        border-bottom: none;
        border-left: none;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x147 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 1px solid windowtext;
        border-right: none;
        border-bottom: none;
        border-left: none;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x148 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 1px solid windowtext;
        border-right: none;
        border-bottom: 1px solid windowtext;
        border-left: none;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x149 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x151 {
        mso-number-format: General;
        text-align: left;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x152 {
        mso-number-format: General;
        text-align: left;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 1px solid windowtext;
        border-right: none;
        border-bottom: none;
        border-left: none;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x153 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 1px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x154 {
        mso-number-format: General;
        text-align: left;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 10pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, ;
        mso-protection: locked visible;
    }

    .x155 {
        mso-number-format: General;
        text-align: left;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: 1px solid windowtext;
        border-left: none;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x156 {
        mso-number-format: General;
        text-align: left;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 700;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: 2px solid windowtext;
        border-right: none;
        border-bottom: none;
        border-left: 2px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x159 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 2px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x161 {
        mso-number-format: General;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 1px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x163 {
        mso-number-format: General;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        mso-protection: locked visible;
    }

    .x165 {
        mso-number-format: General;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 1px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x168 {
        mso-number-format: General;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 9pt;
        font-weight: 700;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 1px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    .x175 {
        mso-number-format: General;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        background: auto;
        mso-pattern: auto;
        font-size: 8pt;
        font-weight: 400;
        font-style: normal;
        font-family: Arial, sans-serif;
        border-top: none;
        border-right: none;
        border-bottom: none;
        border-left: 2px solid windowtext;
        mso-diagonal-down: none;
        mso-diagonal-up: none;
        mso-protection: locked visible;
    }

    #section {
        overflow: none;
        height: expression(window.screen.height - 39);
        width: window.screen.width;
        float: left;
        padding: 10px;
    }

    .push {
        width: 1px;
        height: 31px;
        clear: both;
    }

    #footer {
        background-color: #808080;
        width: 100%;
        text-align: center;
        padding: 5px;
        position: fixed;
        bottom: 0px;
    }
  </style>
</body>