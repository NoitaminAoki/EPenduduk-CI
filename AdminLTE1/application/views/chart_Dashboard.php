<script type="text/javascript">
  $(document).ready(function() {
  //DONUT CHART
  var chart_JK = new Morris.Donut({
    element: 'jk-chart',
    resize: true,
    colors: [getColorRandom(),getColorRandom()],
    data: <?php echo json_encode($penduduk['dashboard_JK']) ?>,
    hideHover: 'auto'
  });
  function getColorRandom() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }

  var all_Color = []; 
  for (var i = 1; i <= <?php echo $penduduk['jumlah_data_kota'] ?>; i++) {
    all_Color.push("\""+getColorRandom()+"\"");
  }
  // alert(all_Color);
  
  //DONUT CHART
  var chart_Kota = new Morris.Donut({
    element: 'kota-chart',
    resize: true,
    colors: [all_Color],
    data: <?php echo json_encode($penduduk['dashboard_Kota']) ?>,
    hideHover: 'auto'
  });
});
</script>