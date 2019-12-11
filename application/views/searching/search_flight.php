<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <div class="content-wrapper">
    <div class="content">
        <div class="formSearch">
          <div class="pphemat-banner">
            <a herf="#">
              <img src="<?= base_url('assets/') ?>img/banner.jpg">
            </a>
          </div>
          <div class="contentSearch formSearchTrain">
            <!-- <div class="titleSearch"> -->
            <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
               <div class="col-md-6">
              <div class="left">
                <h4>Hasil Pencarian</h4>
              </div>
              </div>
              <div class="col-md-5">
              <div class="right">
                <a href="<?=base_url('input/flight') ?>" type="button" class="formButton">Ubah Pencarian</a> 
              </div>
              </div>
             </ol>
          </nav>    
            </div>
          <!-- </div>  -->
        </div>

        <!-- Filter Start -->
        <div class="formFilter">
          <div class="filterResult">
            <div class="column text">Filter:</div>
            <div class="column">
              <span id="filterNama" class="dropdown-toggle" data-toggle="dropdown">Maskapai</span>
              <div class="dropdown-menu filterNama">
                <ul>
                  <li onclick="selectAll('maskapai')">                          
                    <input type="checkbox" id="filter-maskapai-all">
                    <label for="selectall">Semua Maskapai</label>
                  </li>
                  <li>
                    <input class="filter-maskapai" type="checkbox" id="lion-air">
                    <label for="lion-air">Lion Air</label>
                  </li>
                </ul>
              </div> 
            </div>
            <div class="column open">
                <span id="filterWaktu" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Waktu</span>
                  <div class="dropdown-menu filterWaktu">
                      <ul>
                          <li onclick="selectAll('waktu')">
                              <input type="checkbox" id="filter-waktu-all">
                              <label for="selectall">Semua Waktu</label>
                          </li>
                          <li>
                              <input class="filter-waktu" type="checkbox" id="pagi" value="0-1100">
                              <label for="pagi"> Pagi (00:00 - 11:00)</label>
                          </li>
                          <li>
                              <input class="filter-waktu" type="checkbox" id="siang" value="1100-1500">
                              <label for="siang"> Siang (11:00 - 15:00)</label>
                          </li>
                      </ul>
                  </div>
            </div>
          </div>  
        </div>
        <!-- Filter End -->
        <!-- Detail Order Start -->
        <div class="detailOrder">
          <div class="detailOrderHeader">
            <div class="firstMaskapai">Maskapai</div>
                
          </div>
        </div>
    </div>
  </div>
</body>
</html>