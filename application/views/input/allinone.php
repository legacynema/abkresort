<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('node_modules/') ?>bootstrap/dist/css/bootstrap.css">
    <title>All In One</title>
</head>

<body>

    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12  ">
        <div class="slideshow aem-GridColumn aem-GridColumn--default--12">
            <!-- Slideshow -->
            <div class="slideshow-image full-width">
                <div style="position:relative">
                    <img src="<?= base_url('assets/') ?>img/allinone.jpg" class="d-block w-100" height="100%" alt="Slideshow">
                </div>
            </div>
            <!-- End of Slideshow -->
        </div>
    </div>

    <br><br>

    <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Penerbangan
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Keberangkatan</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Bandara Soekarno Hatta">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tujuan</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Bandara Abddurrahman Saleh">
                            </div>
                            <div class="form-group">
                                <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Keberangkatan" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="exampleFormControlSelect1">Kelas Pesawat</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Kelas Ekonomi</option>
                                            <option>Kelas Bisnis</option>
                                            <option>Kelas Pertama</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <select id="paxAdult" class="form-control valid" aria-invalid="false">
                                            <option value="0">0 Penumpang</option>
                                            <option value="1" selected="selected">1 Penumpang</option>
                                            <option value="2">2 Penumpang</option>
                                            <option value="3">3 Penumpang</option>
                                            <option value="4">4 Penumpang</option>
                                            <option value="5">5 Penumpang</option>
                                            <option value="6">6 Penumpang</option>
                                            <option value="7">7 Penumpang</option>
                                            <option value="8">8 Penumpang</option>
                                            <option value="9">9 Penumpang</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Penginapan
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Kota/Nama Hotel</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Malang/Hotel Indonesia">
                            </div>
                            <div class="form-group">
                                <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-In" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group">
                                <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-Out" aria-describedby="basic-addon1">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Kereta Api
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Stasiun Keberangkatan</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Stasiun Pasar Turi">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Stasiun Tujuan</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Stasiun Pasar Senen">
                        </div>
                        <div class="form-group">
                            <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Tanggal Keberangkatan" aria-describedby="basic-addon1">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="input-group">
                                    <select id="paxAdult" class="form-control valid" aria-invalid="false">
                                        <option value="0">0 Penumpang</option>
                                        <option value="1" selected="selected">1 Penumpang</option>
                                        <option value="2">2 Penumpang</option>
                                        <option value="3">3 Penumpang</option>
                                        <option value="4">4 Penumpang</option>
                                        <option value="5">5 Penumpang</option>
                                        <option value="6">6 Penumpang</option>
                                        <option value="7">7 Penumpang</option>
                                        <option value="8">8 Penumpang</option>
                                        <option value="9">9 Penumpang</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>