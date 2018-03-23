<?php require 'index_header.php'; ?>


<div class="container-fluid">
    <h1>FT SOP 版本1 最后更新日期2017-03-27</h1>

</div>
<?php
class zt {
        static public function initVarWithDefaultVal($var, $value) {
        if (isset($_GET[$var])) {
            return $_GET[$var];
        }
        return $value;
    }
}
//$cat =array();
$cat= zt::initVarWithDefaultVal('cat', 'ABM');
$arrABM = array('001', '002', '003', '004', '005', '006', '007', '008', '009');

$arrAIC = array('001', '002', '003', '004');
$arrAIM = array('001', '002', '003', '004');
$arrAIN = array('001', '002', '003', '004', '005', '006', '007', '008', '009', '010', '011', '012', '013', '014', '015', '016', '024');
$arrAMR = array('001', '002', '003', '004', '005', '006', '007');
$arrAPM = array('001', '002', '003', '004', '005', '006-A', '006-B', '006', '007', '008', '009', '010', '011', '012', '013', '014', '015', '016', '017', '018', '019', '020', '021', '022', '023', '024', '025', '026', '027', '028');
$arrAQC = array('001', '002', '003', '004', '005', '006', '008');
$arrASF = array('001', '002-1', '002-1_工艺委外申请流程BPM', '002', '003', '004', '005', '006', '007', '007_工单倒扣发料流程', '008', '009', '010', '011', '012', '013', '014', '015', '016', '017', '018', '019', '020', '020_工单工艺变更流程（BPM)', '021', '022', '023');
$arrAXM = array('001', '002', '003', '004', '005', '006', '007', '008', '009', '010', '011', '012', '013', '014', '015', '016', '017', '018', '019', '020', '021', '022', '023', '024', '025', '026', '027', '028', '029', '030');
$arrSOP_APS = array('001_MDS计算流程', '002_产能规画计算流程');
$arrAll["ABM"] = $arrABM;
$arrAll["AIM"] = $arrAIM;
$arrAll["AIC"] = $arrAIC;
$arrAll["AIN"] = $arrAIN;
$arrAll["AMR"] = $arrAMR;
$arrAll["APM"] = $arrAPM;
$arrAll["AQC"] = $arrAQC;
$arrAll["ASF"] = $arrASF;
$arrAll["AXM"] = $arrAXM;
$arrAll["SOP_APS"] = $arrSOP_APS;
//var_dump($arrABM);
echo "<div class='container-fluid'>";


foreach ($arrAll as $key => $val) {
//     echo "<h2>$key</h2>"; 
if($cat=='ABM'){
    foreach ($arrAll[$cat] as $key => $value) {
        echo "<h3>$cat</h3>";
      echo"<img src='sop/ver01/$cat$value.svg' alt='$cat$value.svg'>";  
      echo "<hr>";
    }
}
else {
    foreach ($arrAll[$cat] as $key => $value) {
        echo "<h3>$cat</h3>";
      echo"<img src='sop/ver01/$cat$value.svg' alt='$cat$value.svg'>";  
      echo "<hr>";
    }
}
}


echo "</div>";
?>
<?php require 'index_footer.php'; ?>
