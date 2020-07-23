<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">    
</head>
<body>
    <div class="col-12">
        <table class="table table-striped ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No-PK</th>                    
                    <th class="col">Periode Awal</th>
                    <th class="col">Periode Akhir</th>
                    <th class="col">Nama</th>
                    <th class="col">Tanggal Lahir</th>
                    <th class="col">Jenis Kelamin</th>
                    <th class="col">Pekerjaan</th>
                    <th class="col">No KTP</th>                    
                    <th class="col">Besaran Pinjaman(IDR)</th>
                    <th class="col">Rate</th>
                    <th class="col">Tabel Rate</th>
                    <th class="col">Manfaat</th>
                    <th class="col">Tgl ELJ Terima</th>
                    <th class="col">No Polis</th>
                </tr>
            </thead>
            <tbody>
                <tr><?php require_once './lib/functions.php'; 
                        $hasil = laporan('2020-07-01 00:00:00','2020-07-23 23:59:59');
                        while($data = mysqli_fetch_array($hasil)){?>                        
                            <td class="col"><?php print $data['noPK'];?></td>    
                            <td class="col"><?php print $data['sdate'];?></td>
                            <td class="col"><?php print $data['edate'];?></td>
                            <td class="col"><?php print $data['nama'];?></td>
                            <td class="col"><?php print $data['tglLahir'];?></td>
                            <td class="col"><?php print $data['jenisKelamin'];?></td>
                            <td class="col"><?php print $data['pekerjaan'];?></td>
                            <td class="col"><?php print $data['noKTP'];?></td>
                            <td class="col"><?php print $data['pinjaman'];?></td>
                            <td class="col"><?php print $data['rate'];?></td>
                            <td class="col"><?php print $data['tabel'];?></td>
                            <td class="col"><?php print $data['manfaat'];?></td>
                            <td class="col"><?php print $data['created_at'];?></td>
                            <td class="col"><?php print $data['noPolis'];?></td>
                    
                </tr>
                <?php
                        }
                    
                    ?>      
            </tbody>          
        </table>
    </div>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>