<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container-fluid">
        <nav class="navbar" style="background-color: #e3f2fd;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <p class="card-text"> <img src="<?= base_url('bootstrap-logo.svg') ?>" alt="Logo" width="30"
                            height="24" class="d-inline-block align-text-top">
                        Surat Resmi PP. Darul Lughah Wal Karomah
                    </p>
                </a>
            </div>
        </nav>
        <div class="row">
            <div class="col-md-4">
                <div class="card mt-2">
                    <div class="card-header">
                        Identitas Surat
                    </div>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>No. Surat</td>
                                <td>:</td>
                                <th><?= $srt->no_surat; ?></th>
                            </tr>
                            <tr>
                                <td>Tanggal Surat</td>
                                <td>:</td>
                                <th><?= $srt->tanggal_kirim; ?></th>
                            </tr>
                            <tr>
                                <td>Tujuan</td>
                                <td>:</td>
                                <th><?= $srt->tujuan; ?></th>
                            </tr>
                            <tr>
                                <td>Perihal</td>
                                <td>:</td>
                                <th><?= $srt->isi_ringkas; ?></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mt-2">
                    <div class="card-header">
                        Preview Surat
                    </div>
                    <div class="card-body">
                       <img src="https://surat.ppdwk.com/sekretaris/upload/surat_keluar/<?= $srt->nm_img ?>" alt="">
                       <!-- <img src="http://localhost/sekretaris/upload/surat_keluar/<?= $srt->nm_img ?>" alt="" class="img-fluid"> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>