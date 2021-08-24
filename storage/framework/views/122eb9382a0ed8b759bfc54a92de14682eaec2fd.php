<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>WIW</title>
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="assets/css/scmenu-main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/sc-spacing.css">
    <link rel="stylesheet" type="text/css" href="/style1.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
</head>

<body class="defult-home">
    <div class="full-width-header   header-style1 home1-modifiy">
        <header id="sc-header" class="sc-header">
            <div class="topbar-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            
                        </div>
                        <div class="col-md-5 text-end">
                            <ul class="topbar-right">
                                <?php if(Auth::guest()): ?>
                                <li class="login-register">
                                    <i class="fa fa-sign-in"></i>
                                    <a href="/login">Login</a> 
                                </li>
                                <?php else: ?>
                                <li class="login-register">
                                    <i class="fa fa-sign-in"></i>
                                    <a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                    <?php if(Auth::user()->email == 'henrikkroko@gmail.com'): ?>
                                    / <a href="/register">Register</a>
                                    <?php endif; ?>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-area menu-sticky">
                <div class="container" style = "max-width: 100%; padding-right: 40px; padding-left: 20px;">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="logo-cat-wrap">
                                <div class="logo-part">
                                    <a href="/">

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 align-items-center d-flex text-end justify-content-end">
                            <div class="sc-menu-area">
                                <div class="main-menu">
                                    <div class="mobile-menu">
                                        <a class="sc-menu-toggle">
                                            <i class="fa fa-bars"></i>
                                        </a>
                                    </div>
                                    <nav class="sc-menu">

                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="right_menu_togle hidden-md">
                <div class="close-btn">
                    <div id="nav-close">
                        <div class="line">
                            <span class="line1"></span><span class="line2"></span>
                        </div>
                    </div>
                </div>
                <div class="canvas-logo">
                    <a href="index.html"><img src="<?php echo e(asset('assets/images/logo.png')); ?>" alt="logo"></a>
                </div>
                <div class="offcanvas-text">
                    
                </div>
                <div class="canvas-contact">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
    </div>
    <div id = "content">
        <input id="pac-input" class="controls" type="text" placeholder="Search Box"/>
        <div id="map">
        </div>
    <div>
    <div class="modal fade" id="setPinModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Will you set Pin?</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>description</label>
                    <textarea id="pinDescription" row="20" col="10" class="form-control" require></textarea>
                    <input type = hidden id="pinName" value="">
                    <div id = "statusOptionSet">
                        <select id = "setStatus">
                            <option value = "1">Deliverd</option>
                            <option value = "2">Taken awaiting deliver</option>
                            <option value = "3">awaiting deliver</option>
                        </select>
                    </div>
                    <button class="pin-description-save btn btn-primary" style="margin-top: 10px; float:right" data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Description</h2>
                    <button type="button" id="descriptionModalClose" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <textarea id="descriptionEdit" data-name="" row="20" col="10" class="form-control" require></textarea>
                    <div id="pinOwner" style="margin-bottom: 10px; margin-top:10px;">
                        Name: <span></span>
                    </div>
                    <div id = "statusOptionDisplay">
                        Status: <select id = "updateStatus">
                            <option value = "1">Deliverd</option>
                            <option value = "2">Taken awaiting deliver</option>
                            <option value = "3">awaiting deliver</option>
                        </select>
                    </div>
                    <div id = "editButtons">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="assets/js/scmenu-main.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/c"></script>
    <script src="assets/js/main1.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdKD6-Lg47R4BbUYqKfewvC-NlOOcKemM&callback=initMap&libraries=places&v=weekly" async defer></script>
    <script>
        let posLat = 1;
        let posLng = 1;
        var pins = <?php echo $pins; ?>;
        var status = 1;
        function initMap() {
            const uluru = { lat: -25.344, lng: 131.036 };
            var map = new google.maps.Map(document.getElementById("map"), {
                zoom: 4,
                center: uluru,
                mapTypeId: "roadmap",
            });
            var marker, i;
            for (i = 0; i < pins.length; i++) {
                if(pins[i].status == 1){
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(pins[i].posLat, pins[i].posLng),
                        map: map,
                        name: pins[i].name,
                        icon: {
                            url: "http://maps.google.com/mapfiles/ms/icons/red-dot.png"
                        }
                    });
                } else if(pins[i].status == 2){
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(pins[i].posLat, pins[i].posLng),
                        map: map,
                        name: pins[i].name,
                        icon: {
                            url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                        }
                    });
                } else{
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(pins[i].posLat, pins[i].posLng),
                        map: map,
                        name: pins[i].name,
                        icon: {
                            url: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
                        }
                    });
                }
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        <?php if(Auth::user()): ?>
                            var userId = "<?php echo e(Auth::user()->id); ?>";
                            var userEmail = "<?php echo e(Auth::user()->email); ?>";
                            if(userId == pins[i].user_id || userEmail == 'henrikkroko@gmail.com'){
                                $('#editButtons').append(
                                    '<button class="pin-description-update btn btn-primary" style="margin-top: 10px; float:right" data-dismiss="modal">update</button>'+
                                    '<button class="pin-delete btn btn-primary" style="margin-top: 10px; margin-right: 20px; float:right" data-dismiss="modal">delete</button>'
                                );
                            }
                        <?php endif; ?>
                        $('#descriptionModal').attr('class', 'modal-backdrop fade show');
                        $('#descriptionEdit').val(pins[i].description);
                        $('#updateStatus').val(pins[i].status);
                        $('#pinName').val(pins[i].name);
                        $('#pinOwner span').html(pins[i].user.name);
                    }
                })(marker, i));
            }

            const input = document.getElementById("pac-input");
            const searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
            map.addListener("bounds_changed", () => {
                searchBox.setBounds(map.getBounds());
            });
            searchBox.addListener("places_changed", () => {
                const places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
                const bounds = new google.maps.LatLngBounds();
                places.forEach((place) => {
                if (!place.geometry || !place.geometry.location) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                const icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25),
                };
                // Create a marker for each place.
                // markers.push(
                //     new google.maps.Marker({
                //     map,
                //     icon,
                //     title: place.name,
                //     position: place.geometry.location,
                //     })
                // );

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
                });
                map.fitBounds(bounds);
            });

            var infoWindow = new google.maps.InfoWindow({});
            infoWindow.open(map);
            <?php if(Auth::user()): ?>
                map.addListener("click", (mapsMouseEvent) => {
                    infoWindow.close();
                    posLat = mapsMouseEvent.latLng.toJSON().lat;
                    posLng = mapsMouseEvent.latLng.toJSON().lng;
                    infoWindow = new google.maps.InfoWindow({
                        position: mapsMouseEvent.latLng,
                    });
                    infoWindow.setContent(
                        "<button class='pinSet btn btn-primary' data-toggle='modal' data-target='#setPinModal'>Will you set Pin?</button>"
                    );
                    infoWindow.open(map);
                });
            <?php endif; ?>
        }
        $(document).ready(function(){
            $("#setPinModal").on('click', '.pin-description-save', function(){
                $.ajax({
                    'url' : 'create/pin',
                    'type' : 'POST',
                    'data' : {
                        'posLat' : posLat,
                        'posLng' : posLng,
                        'description' : $("#pinDescription").val(),
                        'name' : 'marker_'+(posLat*posLng),
                        'status' : Number($("#setStatus").val()),
                        '_token' : "<?php echo e(csrf_token()); ?>",
                    },
                    'success' : function(data) {  
                        <?php if(Auth::user()): ?>
                            pins.push({name: 'marker_'+(posLat*posLng), posLat: posLat, posLng: posLng, description: $("#pinDescription").val(), status:$("#setStatus").val(), user_id: <?php echo e(Auth::user()->id); ?>, user: {name: '<?php echo e(Auth::user()->name); ?>'}});
                            console.log(pins);
                            initMap();
                        <?php endif; ?>
                    },
                    'error' : function(request,error)
                    {
                        alert("Request: "+JSON.stringify(request));
                    }
                });
            });
            $("#descriptionModalClose").click(function(){
                $("#editButtons").html('');
                $('#descriptionModal').attr('class', 'modal fade');
            });
            $("#descriptionModal").on('click', '.pin-description-update', function(){
                $.ajax({
                    'url' : 'update/pin',
                    'type' : 'POST',
                    'data' : {
                        'description' : $("#descriptionEdit").val(),
                        'name' : $("#pinName").val(),
                        'status' : $("#updateStatus").val(),
                        '_token' : "<?php echo e(csrf_token()); ?>",
                    },
                    'success' : function(data) {  
                        for(var i=0; i<pins.length; i++){
                            if(pins[i].name == $("#pinName").val()) {
                                pins[i].description = $("#descriptionEdit").val();
                                pins[i].status = $("#updateStatus").val();
                                break;
                            }                      
                        }
                        initMap();
                        $('#descriptionModal').attr('class', 'modal fade');
                    },
                    'error' : function(request,error)
                    {
                        alert("Request: "+JSON.stringify(request));
                    }
                });
            });
            $("#descriptionModal").on('click', '.pin-delete', function(){
                $.ajax({
                    'url' : 'delete/pin',
                    'type' : 'POST',
                    'data' : {
                        'name' : $("#pinName").val(),
                        '_token' : "<?php echo e(csrf_token()); ?>",
                    },
                    'success' : function(data) {  
                        for(var i=0; i<pins.length; i++){
                            if(pins[i].name == $("#pinName").val()) {
                                pins.splice(i, 1);
                                break;
                            }                      
                        }
                        initMap();
                        $('#descriptionModal').attr('class', 'modal fade');
                    },
                    'error' : function(request,error)
                    {
                        alert("Request: "+JSON.stringify(request));
                    }
                });
            })
        })
    </script>
</body>

</html>
