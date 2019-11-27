<!DOCTYPE html>
<html>

    <body>

        <div id="map" style="width:100%;height:500px"></div>


        <script>
            function myMap() {

                var Negambo = new google.maps.LatLng(20.781266, 53.422897);
                var destination = new google.maps.MVCArray();

                destination.push(new google.maps.LatLng(20.781266, 53.422897));
                destination.push(new google.maps.LatLng(23.953031, 78.170745));
                destination.push(new google.maps.LatLng(11.585981, 61.692599));
                
                

                var mapCanvas = document.getElementById("map");
                var mapOptions = {center: Negambo, zoom: 4};
                var map = new google.maps.Map(mapCanvas, mapOptions);
                

                var flightPath = new google.maps.Polyline({

                    path: destination,
                    strokeColor: "#0000FF",
                    strokeOpacity: 0.8,
                    strokeWeight: 2
                    
                    
                    
                     
                });
                flightPath.setMap(map);
                
                
//                 google.maps.event.addListener(map 'click',function (e){
//                        var currentPath=flightPath.getPath();
//                       currentPath.push(e.LatLng);
//                    })

            }
           
        </script>

        <script src="http://maps.google.com/maps/api/js?key=AIzaSyClBKRU9iKfSLnXVTvdv11RvKwpCrfdoQI&callback=myMap"
        type="text/javascript"></script>


        <div>
            <?php
            include './connection_sql.php';
            $sql = "select * from location";
            foreach ($conn->query($sql) as $row) {

                echo'new' . ' ' . 'google' . ' ' . 'maps' . '.' . 'LatLng' . ' ' . '(' . $row["latitude"] . ',' . $row["logitude"] . ')' . ',' . '<br>';


                echo $row["latitude"] . ',' . $row["logitude"];
            }
            ?>
        </div>
    </body>




</html>


