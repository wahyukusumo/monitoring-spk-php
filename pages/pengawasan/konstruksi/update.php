<?php
include('../../../cek/cekkonstruksi.php');
?>

<?php
include "../../../config.php";
if(isset($_GET['id'])):
     if(isset($_POST['bts'])):
          $stmt = $conn->prepare("UPDATE pengawas SET progress=?, a3c150=?, a3c240=?, mvtic150=?, mvtic240=?, xlpe240=?, xlpe300=?, trafo100kva=?, trafo160kva=?, trafo200kva=?, trafo250kva=?, trafo315kva=?, trafo400kva=?, trafo630kva=?, trafo1000kva=?, raktr=?, sktr=?, tic370=?, tic395=?, tic210=?, tic216=?, ai_lbs=?, ai_pb=?, ai_cbom=?, fi_lbs=?, fi_pb=?, fi_cbom=?, incoming=?, kopel=?, outgoing=?, riser=?, cellvt=?, ps=?, kwh1pp=?, kwh1pr=?, kwhe3pk=?, kwha3pb=?, kwha3pt=?, p12a=?, p14a=?, p16a=?, p110a=?, p116a=?, p125a=?, p135a=?, p150a=?, p310a=?, p316a=?, p320a=?, p325a=?, p335a=?, p350a=?, mccb63=?, mccb80=?, mccb100=?, mccb150=?, mccb200=?, mccb250=?, mccb300=?, lain=?, ren_bayar=? WHERE id=?");
     $stmt->bind_param('ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss', $progress, $a3c150, $a3c240, $mvtic150, $mvtic240, $xlpe240, $xlpe300, $trafo100kva, $trafo160kva, $trafo200kva, $trafo250kva, $trafo315kva, $trafo400kva, $trafo630kva, $trafo1000kva, $raktr, $sktr, $tic370, $tic395, $tic210, $tic216, $ai_lbs, $ai_pb, $ai_cbom, $fi_lbs, $fi_pb, $fi_cbom, $incoming, $kopel, $outgoing, $riser, $cellvt, $ps, $kwh1pp, $kwh1pr, $kwhe3pk, $kwha3pb, $kwha3pt, $p12a, $p14a, $p16a, $p110a, $p116a, $p125a, $p135a, $p150a, $p310a, $p316a, $p320a, $p325a, $p335a, $p350a, $mccb63, $mccb80, $mccb100, $mccb150, $mccb200, $mccb250, $mccb300, $lain, $ren_bayar, $id);

          $progress     = $_POST['progress'];
          $a3c150       = $_POST['a3c150'];
          $a3c240       = $_POST['a3c240'];
          $mvtic150     = $_POST['mvtic150'];
          $mvtic240     = $_POST['mvtic240'];
          $xlpe240      = $_POST['xlpe240'];
          $xlpe300      = $_POST['xlpe300'];
          $trafo100kva  = $_POST['trafo100kva'];
          $trafo160kva  = $_POST['trafo160kva'];
          $trafo200kva  = $_POST['trafo200kva'];
          $trafo250kva  = $_POST['trafo250kva'];
          $trafo315kva  = $_POST['trafo315kva'];
          $trafo400kva  = $_POST['trafo400kva'];
          $trafo630kva  = $_POST['trafo630kva'];
          $trafo1000kva = $_POST['trafo1000kva'];
          $raktr        = $_POST['raktr'];
          $sktr         = $_POST['sktr'];
          $tic370       = $_POST['tic370'];
          $tic395       = $_POST['tic395'];
          $tic210       = $_POST['tic210'];
          $tic216       = $_POST['tic216'];
          $ai_lbs       = $_POST['ai_lbs'];
          $ai_pb        = $_POST['ai_pb'];
          $ai_cbom      = $_POST['ai_cbom'];
          $fi_lbs       = $_POST['fi_lbs'];
          $fi_pb        = $_POST['fi_pb'];
          $fi_cbom      = $_POST['fi_cbom'];
          $incoming     = $_POST['incoming'];
          $kopel        = $_POST['kopel'];
          $outgoing     = $_POST['outgoing'];
          $riser        = $_POST['riser'];
          $cellvt       = $_POST['cellvt'];
          $ps           = $_POST['ps'];
          $kwh1pp       = $_POST['kwh1pp'];
          $kwh1pr       = $_POST['kwh1pr'];
          $kwhe3pk      = $_POST['kwhe3pk'];
          $kwha3pb      = $_POST['kwha3pb'];
          $kwha3pt      = $_POST['kwha3pt'];
          $p12a         = $_POST['p12a'];
          $p14a         = $_POST['p14a'];
          $p16a         = $_POST['p16a'];
          $p110a        = $_POST['p110a'];
          $p116a        = $_POST['p116a'];
          $p125a        = $_POST['p125a'];
          $p135a        = $_POST['p135a'];
          $p150a        = $_POST['p150a'];
          $p310a        = $_POST['p310a'];
          $p316a        = $_POST['p316a'];
          $p320a        = $_POST['p320a'];
          $p325a        = $_POST['p325a'];
          $p335a        = $_POST['p335a'];
          $p350a        = $_POST['p350a'];
          $mccb63       = $_POST['mccb63'];
          $mccb80       = $_POST['mccb80'];
          $mccb100      = $_POST['mccb100'];
          $mccb150      = $_POST['mccb150'];
          $mccb200      = $_POST['mccb200'];
          $mccb250      = $_POST['mccb250'];
          $mccb300      = $_POST['mccb300'];
          $lain         = $_POST['lain'];
          $ren_bayar    = $_POST['ren_bayar'];
          $id           = $_POST['id'];
 
          if($stmt->execute()):
               echo "<script>alert('Progress Berhasil Di Update');location.href='index.php'</script>";
          else:
               echo "<script>alert('".$stmt->error."')</script>";
          endif;
     endif;
     $res = $conn->query("SELECT * FROM pengawas WHERE id=".$_GET['id']);
     $row = $res->fetch_assoc();
?>

<?php
include('../../header1.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Progress
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-body">
              <form class="form-auth-small" method="post">
                <div class="form-group">
                  <input type="hidden" value="<?php echo $row['id'] ?>" name="id"/>
                </div>
              <div class="panel-heading">
                <h3 class="panel-title">Input Progress</h3>
              </div>
              <div class="box box-primary">
                <div class="box-body">
                  <h5>Progress</h5>
                  <select name="progress" class="form-control">
                    <option value="<?php echo $row['progress']?>"><?php echo $row['progress']?>%</option>
                    <option disabled="" "></option>
                    <option value="0">0%</option>
                    <option value="10">10%</option>
                    <option value="20">20%</option>
                    <option value="30">30%</option>
                    <option value="40">40%</option>
                    <option value="50">50%</option>
                    <option value="60">60%</option>
                    <option value="70">70%</option>
                    <option value="80">80%</option>
                    <option value="90">90%</option>
                    <option value="100">100%</option>
                  </select>     
                </div>
              </div>
              <div class="panel-heading">
                <h3 class="panel-title">Input Material</h3>
              </div>
              <div class="box box-primary">
                <h3>JTM</h3>                                        
                  <div class="box-body">
                    <h4>SUTM</h4>
                    <div class="box-body">
                      <h5>AAC/S 150 mm2</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['a3c150'] ?>" placeholder="AAC/S 150 mm2" name="a3c150"/>
                        <span class="input-group-addon">KMS</span>
                      </div>
                      <h5>AAC/S 240 mm2</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['a3c240'] ?>" placeholder="AAC/S 240 mm2" name="a3c240"/>
                        <span class="input-group-addon">KMS</span>
                      </div>
                    </div>    
                    <h4>SKUTM</h4>
                    <div class="box-body">
                      <h5>MVTIC 150 mm2</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['mvtic150'] ?>" placeholder="MVTIC 150 mm2" name="mvtic150"/>
                        <span class="input-group-addon">KMS</span>
                        </div>
                      <h5>MVTIC 240 mm2</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['mvtic240'] ?>" placeholder="MVTIC 240 mm2" name="mvtic240"/>
                        <span class="input-group-addon">KMS</span>
                      </div>
                    </div>
                    <h4>SKTM</h4>
                    <div class="box-body">
                      <h5>XLPE 240 mm2</h5>     
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['xlpe240'] ?>" placeholder="XLPE 240 mm2" name="xlpe240"/>
                        <span class="input-group-addon">KMS</span>
                      </div>
                      <h5>XLPE 300 mm2</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['xlpe300'] ?>" placeholder="XLPE 300 mm2" name="xlpe300"/>
                        <span class="input-group-addon">KMS</span>
                      </div>
                    </div>        
                  </div>
                </div>
                <div class="box box-primary">
                  <h3>TRAFO</h3>                                        
                  <div class="box-body">  
                    <h5>100 kVA</h5>     
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['trafo100kva'] ?>" placeholder="100 kVA" name="trafo100kva"/>
                      <span class="input-group-addon">Buah</span>
                    </div>
                    <h5>160 kVA</h5>     
                    <div class="input-group">          
                      <input type="text" class="form-control" value="<?php echo $row['trafo160kva'] ?>" placeholder="160 kVA" name="trafo160kva"/>
                      <span class="input-group-addon">Buah</span>
                    </div>
                    <h5>200 kVA</h5>     
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['trafo200kva'] ?>" placeholder="200 kVA" name="trafo200kva"/>
                      <span class="input-group-addon">Buah</span>
                    </div>
                    <h5>250 kVA</h5>     
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['trafo250kva'] ?>" placeholder="250 kVA" name="trafo250kva"/>
                      <span class="input-group-addon">Buah</span>
                    </div>
                    <h5>315 kVA</h5>     
                    <div class="input-group"> 
                      <input type="text" class="form-control" value="<?php echo $row['trafo315kva'] ?>" placeholder="315 kVA" name="trafo315kva"/>
                      <span class="input-group-addon">Buah</span>
                    </div>
                    <h5>400 kVA</h5>     
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['trafo400kva'] ?>" placeholder="400 kVA" name="trafo400kva"/>
                      <span class="input-group-addon">Buah</span>
                    </div>
                    <h5>630 kVA</h5>             
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['trafo630kva'] ?>" placeholder="630 kVA" name="trafo630kva"/>
                      <span class="input-group-addon">Buah</span>
                    </div>
                    <h5>1000 kVA</h5>     
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['trafo1000kva'] ?>" placeholder="1000 kVA" name="trafo1000kva"/>
                      <span class="input-group-addon">Buah</span>
                  </div>                                                                      
                </div>
                </div>
                <div class="box box-primary">
                  <h3>JTR</h3>                                        
                  <div class="box-body">
                    <h5>Rak TR</h5>     
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['raktr'] ?>" placeholder="Rak TR" name="raktr"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                    <h5>SKTR</h5>     
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['sktr'] ?>" placeholder="SKTR" name="sktr"/>
                        <span class="input-group-addon">KMS</span>
                      </div>
                  </div>
                  <h4>SUTR</h4>
                  <div class="box-body">
                    <h5>TIC 3x70 + 50 mm2</h5>          
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['tic370'] ?>" placeholder="TIC 3x70 + 50 mm2" name="tic370"/>
                      <span class="input-group-addon">KMS</span>
                    </div>
                    <h5>TIC 3x95 + 50 mm2</h5>     
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['tic395'] ?>" placeholder="TIC 3x95 + 50 mm2" name="tic395"/>
                      <span class="input-group-addon">KMS</span>
                    </div>
                  </div>
                  <h4>SR</h4>
                  <div class="box-body">
                    <h5>TIC 2x10 mm2</h5>          
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['tic210'] ?>" placeholder="TIC 2x10 mm2" name="tic210"/>
                      <span class="input-group-addon">KMS</span>
                    </div>
                    <h5>TIC 2x16 mm2</h5>     
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['tic216'] ?>" placeholder="TIC 2x16 mm2" name="tic216"/>
                      <span class="input-group-addon">KMS</span>
                    </div>
                  </div>                                                                              
                </div>
                <div class="box box-primary">
                  <h3>Kubikel TM</h3>
                  <div class="box-body">
                    <h4>Air Insulated</h4>
                    <div class="box-body">
                      <h5>LBS</h5>
                      <div class="input-group">
                        <input type="text" class="form-control"value="<?php echo $row['ai_lbs'] ?>" placeholder="LBS" name="ai_lbs"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>PB</h5>     
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['ai_pb'] ?>" placeholder="PB" name="ai_pb"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>CBOM</h5>     
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['ai_cbom'] ?>" placeholder="CBOM" name="ai_cbom"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                    </div>
                    <h4>Fully Insulated</h4>
                    <div class="box-body">
                      <h5>LBS</h5>          
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['fi_lbs'] ?>" placeholder="LBS" name="fi_lbs"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>PB</h5>     
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['fi_pb'] ?>" placeholder="PB" name="fi_pb"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>CBOM</h5>     
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['fi_cbom'] ?>" placeholder="CBOM" name="fi_cbom"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box box-primary">
                  <h3>Kubikel GI</h3>
                  <div class="box-body">
                    <h5>Incoming</h5>     
                    <div class="form-group">
                      <input type="text" class="form-control" value="<?php echo $row['incoming'] ?>" placeholder="Incoming" name="incoming"/>
                    </div>
                    <h5>Kopel</h5>     
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['kopel'] ?>" placeholder="Kopel" name="kopel"/>
                      <span class="input-group-addon">Buah</span>
                    </div>
                    <h5>Outgoing</h5>     
                    <div class="form-group">
                      <input type="text" class="form-control" value="<?php echo $row['outgoing'] ?>" placeholder="Outgoing" name="outgoing"/>
                    </div>
                    <h5>Riser</h5>
                    <div class="input-group"> 
                      <input type="text" class="form-control" value="<?php echo $row['riser'] ?>" placeholder="Riser" name="riser"/>
                      <span class="input-group-addon">Buah</span>
                    </div>
                    <h5>Cell VT</h5>     
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['cellvt'] ?>" placeholder="Cell VT" name="cellvt"/><span class="input-group-addon">Buah</span>
                    </div>
                    <h5>PS</h5>     
                    <div class="input-group">
                      <input type="text" class="form-control" value="<?php echo $row['ps'] ?>" placeholder="PS" name="ps"/>
                      <span class="input-group-addon">Buah</span>
                    </div>
                  </div>
                </div>
                <div class="box box-primary">
                  <h3>APP</h3>                                        
                  <div class="box-body">
                    <h4>KWH</h4>
                    <div class="panel-body">
                      <h5>KWH 1 Phase Prabayar</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['kwh1pp'] ?>" placeholder="KWH 1 Phase Prabayar" name="kwh1pp"/>
                        <span class="input-group-addon"></span>
                      </div>
                      <h5>KWH 1 Phase Reguler</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['kwh1pr'] ?>" placeholder="KWH 1 Phase Reguler" name="kwh1pr"/>
                        <span class="input-group-addon"></span>
                      </div>
                      <h5>KWH Elektrik 3 Phase Kecil</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['kwhe3pk'] ?>" placeholder="KWH Elektrik 3 Phase Kecil" name="kwhe3pk"/>
                        <span class="input-group-addon"></span>
                      </div>
                      <h5>KWH AMR 3 Phase Besar</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['kwha3pb'] ?>" placeholder="KWH AMR 3 Phase Besar" name="kwha3pb"/>
                        <span class="input-group-addon"></span>
                      </div>
                      <h5>KWH AMR 3 Phase TM</h5>     
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['kwha3pt'] ?>" placeholder="KWH AMR 3 Phase TM" name="kwha3pt"/>
                        <span class="input-group-addon"></span>
                      </div>
                    </div>        
                  </div>
                </div>
                <div class="box box-primary">
                  <h3>PEMBATAS</h3>                                        
                  <div class="box-body">
                    <h4>1 PHASE</h4>
                    <div class="box-body">
                      <h5>2A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p12a'] ?>" placeholder="2A" name="p12a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>4A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p14a'] ?>" placeholder="4A" name="p14a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>6A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p16a'] ?>" placeholder="6A" name="p16a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>10A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p110a'] ?>" placeholder="10A" name="p110a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>16A</h5>     
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p116a'] ?>" placeholder="16A" name="p116a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>25A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p125a'] ?>" placeholder="25A" name="p125a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>35A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p135a'] ?>" placeholder="35A" name="p135a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>50A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p150a'] ?>" placeholder="50A" name="p150a"/>
                        <span class="input-group-addon">Buah</span>
                     </div>
                    </div>
                    <h4>3 PHASE</h4>
                    <div class="panel-body">
                      <h5>10A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p310a'] ?>" placeholder="10A" name="p310a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>16A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p316a'] ?>" placeholder="16A" name="p316a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>20A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p320a'] ?>" placeholder="20A" name="p320a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>25A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p325a'] ?>" placeholder="25A" name="p325a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>35A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p335a'] ?>" placeholder="35A" name="p335a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>50A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['p350a'] ?>" placeholder="50A" name="p350a"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                    </div>
                    <h4>MCCB</h4>
                    <div class="panel-body">
                      <h5>63A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['mccb63'] ?>" placeholder="63A" name="mccb63"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>80A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['mccb80'] ?>" placeholder="80" name="mccb80"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>100A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['mccb100'] ?>" placeholder="100A" name="mccb100"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>150A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['mccb150'] ?>" placeholder="150A" name="mccb150"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>200A</h5>     
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['mccb200'] ?>" placeholder="200A" name="mccb200"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>250A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['mccb250'] ?>" placeholder="250A" name="mccb250"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                      <h5>300A</h5>
                      <div class="input-group">
                        <input type="text" class="form-control" value="<?php echo $row['mccb300'] ?>" placeholder="300A" name="mccb300"/>
                        <span class="input-group-addon">Buah</span>
                      </div>
                    </div>
                 </div>
                </div>
                <div class="box box-primary">
                  <div class="form-group"> 
                    <h5>Keterangan</h5>     
                      <div class="form-group">
                        <input type="text" class="form-control" value="<?php echo $row['lain'] ?>" placeholder="Lainnya" name="lain"/>
                      </div>
                  </div>
                  <div class="form-group">
                    <h5>Rencana Bayar</h5>
                    <input type="date" class="form-control" value="<?php echo $row['ren_bayar'] ?>" placeholder="Rencana Bayar" name="ren_bayar"/>
                 </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block" value="UPDATE" name="bts"/>
             </form>
             <?php
             endif;
             ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
<!-- ./wrapper -->

<?php
include('../../footer1.php');
?>