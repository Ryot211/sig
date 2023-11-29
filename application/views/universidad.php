<br>
<h1>DIRRECCION DE LA UTC</h1>
<img src="<?php echo base_url('assets/img/Marcador_utc.png'); ?>" alt="">

<br>
<div id="mapa1" style="width:100%; height:500px; border:2px solid black;">

</div>
<script type="text/javascript">

  function initMap(){
    //creando una coordenada
    var coordenadaCentral= new google.maps.LatLng(-0.917629885126697, -78.63300726321846);

    var miMapa = new google.maps.Map(document.getElementById('mapa1'),
      {
        center: coordenadaCentral,
        zoom:5,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
    );
    var marcadorUTC= new google.maps.Marker({position:new google.maps.LatLng(-0.9179302539912493, -78.63299653438258), map: miMapa, title:'UTC Matriz', icon:"<?php echo base_url('assets/img/marcador_utc.png'); ?>" });
    var marcadorUTCMana = new google.maps.Marker({position:new google.maps.LatLng(-0.9438441157278293, -79.2380618325316 ), map: miMapa, title:'UTC Extension la Mana', icon:"<?php echo base_url('assets/img/marcador_utc.png'); ?>" });
    var marcadorUTCSalache = new google.maps.Marker({position:new google.maps.LatLng(-0.9992989181371184, -78.6191481343825 ), map: miMapa, title:'UTC Extension Salache'  });
    var marcadorUTCPujili = new google.maps.Marker({position:new google.maps.LatLng(-0.9524914247183788, -78.69509661173124 ), map: miMapa, title:'UTC Extension Pujili' });


  }
</script>
